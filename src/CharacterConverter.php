<?php

namespace Wilf\PhpUtf8ToRtf;

interface CharacterConverter
{
    public function locateWordsInString(string $string): array;

    public function convertWordsToRtf(array $words): array;

    public function convertWordToRtf(string $word): string;

    public function mapCharacterToRtfIdentifier(string $character): string;
}