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

interface CharacterConverterInterface
{
    public function findAndReplace(string $string): string;

    /**
     * @param string $string
     *
     * @return array<string>
     */
    public function locateCharactersInString(string $string): array;

    /**
     * @param array<string> $strings
     *
     * @return array<string>
     */
    public function convertArrayToRtf(array $strings): array;

    public function convertStringToRtf(string $string): string;
}
