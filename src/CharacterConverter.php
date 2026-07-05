<?php

/**
 * Copyright (c) 2022. Tom Wilford <hello@jollyblueman.com>
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the root directory of this source tree.
 */

declare(strict_types=1);

namespace Wilf\PhpUtf8ToRtf;

/**
 * Methods for locating and converting UTF8 strings to an RTF format.
 */
class CharacterConverter implements CharacterConverterInterface
{
    /**
     * Find and replaces all UTF-8 characters with RTF safe versions.
     *
     * @param string $string
     *
     * @return string
     */
    public function findAndReplace(string $string): string
    {
        $stringsToConvert = $this->locateCharactersInString($string);
        $convertedStrings = $this->convertArrayToRtf($stringsToConvert);

        foreach ($convertedStrings as $originalString => $convertedString) {
            $string = str_replace($originalString, $convertedString, $string);
        }

        return $string;
    }

    /**
     * Locate UTF-8 characters in a string.
     *
     * @param string $string
     *
     * @return array<string>
     */
    public function locateCharactersInString(string $string): array
    {
        preg_match_all('/[^ -~]/u', $string, $matches);

        $characters = [];
        foreach ($matches[0] as $match) {
            if (trim($match) && !in_array($match, $characters)) {
                $characters[] = $match;
            }
        }

        return $characters;
    }

    /**
     * Helper method to convert an array of strings with UTF-8 characters to RTF safe versions.
     *
     * @param array<string> $strings
     *
     * @return array<string, string>
     */
    public function convertArrayToRtf(array $strings): array
    {
        $convertedStrings = [];
        foreach ($strings as $string) {
            if (trim($string) && !array_key_exists($string, $convertedStrings)) {
                $convertedStrings[$string] = $this->convertStringToRtf($string);
            }
        }

        return $convertedStrings;
    }

    /**
     * Iterates over a given string and replaces any UTF-8 characters with RTF safe versions.
     *
     * @param string $string
     *
     * @return string
     */
    public function convertStringToRtf(string $string): string
    {
        $convertedString = '';
        for ($i = 0; $i < mb_strlen($string, 'UTF-8'); $i++) {
            $character = mb_substr($string, $i, 1, 'UTF-8');
            $unpackedCharacter = unpack(
                'N',
                mb_convert_encoding($character, 'UCS-4BE', 'UTF-8')
            );
            $convertedCharacter = $unpackedCharacter ? $unpackedCharacter[1] : $character;

            if ($convertedCharacter < 0x7F) {
                $convertedString .= $character;
            } else {
                $convertedString .= '{' . sprintf('\\u%d?', intval($convertedCharacter)) . '}';
            }
        }

        return $convertedString;
    }
}
