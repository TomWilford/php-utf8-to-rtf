<?php

namespace Wilf\PhpUtf8ToRtf;

class CharacterConverter implements CharacterConverterInterface
{
    public function findAndReplace(string $string): string
    {
        $wordsToConvert = $this->locateWordsInString($string);
        $convertedWords = $this->convertWordsToRtf($wordsToConvert);

        foreach ($convertedWords as $word => $convertedWord) {
            $string = str_replace($word, '{' . $convertedWord . '}', $string);
        }

        return $string;
    }

    public function locateWordsInString(string $string): array
    {
        preg_match_all("/(\p{L}*(?:[^ -~\n]+))/u", $string, $matches);

        $words = [];
        foreach ($matches[0] as $match) {
            foreach (explode(' ', $match) as $item) {
                $words[] = $item;
            }
        }

        return $words;
    }

    public function convertWordsToRtf(array $words): array
    {
        $convertedWords = [];
        foreach ($words as $word) {
            if (!array_key_exists($word, $convertedWords)) {
                $convertedWords[$word] = $this->convertWordToRtf($word);
            }
        }

        return $convertedWords;
    }

    public function convertWordToRtf(string $word): string
    {
        $rtf = "";
        for ($i = 0; $i < mb_strlen($word, "UTF-8"); $i++) {
            $char = mb_substr($word, $i, 1, "UTF-8");
            $code = unpack("N", mb_convert_encoding($char, "UCS-4BE", "UTF-8"))[1];

            if ($code < 0x7f) {
                $rtf .= $char;
            } else {
                $rtf .= sprintf("\\u%d?", $code);
            }
        }

        return $rtf;
    }
}
