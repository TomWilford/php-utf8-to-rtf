<?php
/*
 * Copyright (c) 2023. Tom Wilford <hello@jollyblueman.com>
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the root directory of this source tree.
 */

require __DIR__ . "/../../vendor/autoload.php";

$file = file_get_contents(__DIR__ . '/../Resources/Pangrams.php');
$file = str_replace("<?php

namespace Resources;

/**
 * A list of pangrams for testing, made possible by:
 *  - Richard Rutter (majority), https://clagnut.com/blog/2380
 *  - gacontuyenchien1 (Vietnamese), https://10fastfingers.com/text/212157-Vietnamese-pangram
 */
trait Pangrams
{", '', $file);
$file = str_replace("}", '', $file);
$file = str_replace("    public string $", "", $file);
$file = str_replace(" = ", "", $file);

$array = explode('";', $file);
$strings = [];
foreach ($array as $item) {
    $parts = explode('"', $item);
    if (trim($parts[0])) {
        $strings[ucfirst(trim($parts[0]))] = $parts[1];
    }
}

$converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
foreach ($strings as $language => $string) {
    $strings[$language] = $converter->findAndReplace($string);
}

$rtf = "{rtf1
{\par}";

foreach ($strings as $language => $string) {
    $rtf .= $language . '{\par}';
    $rtf .= $string . '{\par}{\par}';
}

$rtf .= '
}';

$filePath = __DIR__ . '/test.rtf';
$fh = fopen($filePath, 'w');
file_put_contents(__DIR__ . '/test.rtf', $rtf);
fclose($fh);
