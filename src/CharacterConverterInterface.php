<?php

/*
 * Copyright (c) 2022. Tom Wilford <hello@jollyblueman.com>
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the root directory of this source tree.
 */
namespace Wilf\PhpUtf8ToRtf;

/**
 * Interface for CharacterConverter class.
 *
 * @author Tom Wilford <hello@jollyblueman.com>
 */
interface CharacterConverterInterface
{
    public function findAndReplace(string $string): string;

    public function locateWordsInString(string $string): array;

    public function convertArrayToRtf(array $words): array;

    public function convertStringToRtf(string $word): string;
}
