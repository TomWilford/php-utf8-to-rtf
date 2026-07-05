<?php

/**
 * Copyright (c) 2026. Tom Wilford <hello@jollyblueman.com>
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the root directory of this source tree.
 */

declare(strict_types=1);

use Wilf\PhpUtf8ToRtf\CharacterConverter;
use Wilf\PhpUtf8ToRtf\Tests\TestTrait\Pangrams;

require __DIR__ . '/../../vendor/autoload.php';

(new class {
    private CharacterConverter $converter;

    public function __construct()
    {
        $this->converter = new CharacterConverter();
    }

    public function __invoke(): void
    {
        $rtf = $this->getOutputFile();

        $this->startRtf($rtf);
        $this->addParagraph($rtf);
        foreach ($this->getTraitProperties() as $language => $pangram) {
            $rtf->fwrite($language);
            $this->addParagraph($rtf);
            $rtf->fwrite($this->converter->findAndReplace($pangram));
            $this->addParagraph($rtf, 2);
        }
        $this->endRtf($rtf);
    }

    /**
     * @return array<string, string>
     */
    private function getTraitProperties(): array
    {
        $pangramsTrait = new ReflectionClass(Pangrams::class);

        return $pangramsTrait->getDefaultProperties();
    }

    private function getOutputFile(): SplFileObject
    {
        return new SplFileObject(dirname(__DIR__) . '/scripts/test-file.rtf', 'w+');
    }

    private function addParagraph(SplFileObject $file, int $count = 1): void
    {
        while ($count--) {
            $file->fwrite('{\par}');
        }
    }

    private function startRtf(SplFileObject $rtf): void
    {
        $rtf->fwrite('{\rtf1');
    }

    private function endRtf(SplFileObject $rtf): void
    {
        $rtf->fwrite('}');
    }
})();
