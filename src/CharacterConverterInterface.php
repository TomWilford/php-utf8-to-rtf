<?php

namespace Wilf\PhpUtf8ToRtf;

interface CharacterConverterInterface
{
    public function findAndReplace(string $string): string;

    public function locateWordsInString(string $string): array;

    public function convertWordsToRtf(array $words): array;

    public function convertWordToRtf(string $word): string;
}
