<?php

namespace Wilf\PhpUtf8ToRtf\Languages;

class ArabicCharacterConverter implements \Wilf\PhpUtf8ToRtf\CharacterConverter
{
    const LANGUAGE = 'arabic';

    private string $pattern = '#(?:[\x{0600}-\x{06FF}]+(?:\s+[\x{0600}-\x{06FF}]+)*)#u';

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

    public function convertWordToRtf(string $word): string
    {
        $convertedWord = '';
        $characters = preg_split('//u', $word, null, PREG_SPLIT_NO_EMPTY);
        $characterCount = count($characters);

        if ($characterCount == 1) {
            // Separate form
            $convertedWord = $this->mapCharacterToRTFIdentifier($characters[0]);
        } else {
            $iteration = 0;
            foreach ($characters as $character) {
                $iteration++;

                if ($iteration == 1) {
                    // Initial form
                    $convertedWord .= $this->mapCharacterToRtfIdentifier($character);
                } elseif ($iteration == $characterCount) {
                    // Final form
                    $convertedWord .= $this->mapCharacterToRtfIdentifier($character);
                } else {
                    // Middle form
                    $convertedWord .= $this->mapCharacterToRtfIdentifier($character);
                }
            }
        }

        return $convertedWord;
    }

    public function mapCharacterToRtfIdentifier(string $character): string
    {
        $escapedCharacter = '';

        // Hexadecimal
        switch ($character) {
            case 'ء':
                $escapedCharacter = "\\'c1";
                break;
            case 'غ':
                $escapedCharacter = "\\'fd";
                break;
            case 'ظ':
                $escapedCharacter = "\\'db";
                break;
            case 'ض':
                $escapedCharacter = "\\'d9";
                break;
            case 'ذ':
                $escapedCharacter = "\\'d6";
                break;
            case 'ث':
                $escapedCharacter = "\\'ce";
                break;
            case 'ت':
                $escapedCharacter = "\\'cb";
                break;
            case 'ش':
                $escapedCharacter = "\\'ca";
                break;
            case 'ر':
                $escapedCharacter = "\\'d4";
                break;
            case 'ق':
                $escapedCharacter = "\\'d1";
                break;
            case 'ص':
                $escapedCharacter = "\\'de";
                break;
            case 'ف':
                $escapedCharacter = "\\'d5";
                break;
            case 'ع':
                $escapedCharacter = "\\'dd";
                break;
            case 'س':
                $escapedCharacter = "\\'da";
                break;
            case 'ن':
                $escapedCharacter = "\\'d3";
                break;
            case 'م':
                $escapedCharacter = "\\'e4";
                break;
            case 'ل':
                $escapedCharacter = "\\'e3";
                break;
            case 'ك':
                $escapedCharacter = "\\'e1";
                break;
            case 'ي':
                $escapedCharacter = "\\'ed";
                break;
            case 'ط':
                $escapedCharacter = "\\'d8";
                break;
            case 'ح':
                $escapedCharacter = "\\'cd";
                break;
            case 'ز':
                $escapedCharacter = "\\'d2";
                break;
            case 'و':
                $escapedCharacter = "\\'e6";
                break;
            case 'ه':
                $escapedCharacter = "\\'e5";
                break;
            case 'د':
                $escapedCharacter = "\\'cf";
                break;
            case 'ج':
                $escapedCharacter = "\\'cc";
                break;
            case 'ب':
                $escapedCharacter = "\\'c8";
                break;
            case 'ا':
                $escapedCharacter = "\\'c7";
                break;
            case '،':
                $escapedCharacter = "\\'a1";
                break;
            case '؟':
                $escapedCharacter = "\\'bf";
                break;
            case '؛':
                $escapedCharacter = "\\'ba";
                break;
        }

        if ($escapedCharacter == "") {
            switch ($character) {
                case '؍':
                    $escapedCharacter = '\\u1549';
                    break;
                case '؞':
                    $escapedCharacter = '\\u1566';
                    break;
                case '؉':
                    $escapedCharacter = '\\u1545';
                    break;
                case '؊':
                    $escapedCharacter = '\\u1546';
                    break;
                case '١':
                    $escapedCharacter = '\\u1633';
                    break;
                case '٢':
                    $escapedCharacter = '\\u1634';
                    break;
                case '٣':
                    $escapedCharacter = '\\u1635';
                    break;
                case '٤':
                    $escapedCharacter = '\\u1636';
                    break;
                case '٥':
                    $escapedCharacter = '\\u1637';
                    break;
                case '٦':
                    $escapedCharacter = '\\u1638';
                    break;
                case '٧':
                    $escapedCharacter = '\\u1639';
                    break;
                case '٨':
                    $escapedCharacter = '\\u1640';
                    break;
                case '٩':
                    $escapedCharacter = '\\u1641';
                    break;
                case '٫':
                    $escapedCharacter = '\\u1643';
                    break;
                case '٬':
                    $escapedCharacter = '\\u1644';
                    break;
            }

            if ($escapedCharacter == '') {
                $escapedCharacter = $character;
            } else {
                $escapedCharacter = '{\\insrsid11888483\\charrsid11888483 ' . $escapedCharacter . '\\\'3f}';
            }
        } else {
            $escapedCharacter = '{\\f31574\\insrsid12286983\\charrsid12286983 ' . $escapedCharacter . '}';
        }

        return $escapedCharacter;
    }


}