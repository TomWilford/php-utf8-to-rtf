<?php

namespace Unit\ArabicLanguage;

class ConvertCharacterTest extends \PHPUnit\Framework\TestCase
{
    public function testConvertSingleCharacter()
    {
        $word = "غ";

        $converter = new \Wilf\PhpUtf8ToRtf\Languages\ArabicCharacterConverter();
        $convertedWord = $converter->convertWordToRtf($word);

        var_dump($convertedWord);
        $this->assertEquals("{\\f31574\\insrsid12286983\\charrsid12286983 \\'fd}", $convertedWord);
    }
}