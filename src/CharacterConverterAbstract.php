<?php

namespace Wilf\PhpUtf8ToRtf;

abstract class CharacterConverterAbstract implements CharacterConverter
{
    protected string $pattern;

    const RTF_HEXADECIMAL = 'hexadecimal';
    const RTF_UNICODE = 'unicode';

    public function locateWordsInString(string $string): array
    {
        preg_match_all($this->pattern, $string, $matches);

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
            $convertedWords[$word] = $this->convertWordToRtf($word);
        }

        return $convertedWords;
    }
}