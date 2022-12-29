<?php

namespace Unit;

final class ConvertCharacterTest extends \PHPUnit\Framework\TestCase
{
    public function testConvertSingleCharacter()
    {
        $word = "غ";

        $converter = new \Wilf\PhpUtf8ToRtf\Languages\ArabicCharacterConverter();
        $convertedWord = $converter->convertWordToRtf($word);

        $this->assertEquals("\u1594?", $convertedWord);
    }

    public function testConvertDollarCharacter()
    {
        $word = "£";

        $converter = new \Wilf\PhpUtf8ToRtf\Languages\ArabicCharacterConverter();
        $convertedWord = $converter->convertWordToRtf($word);

        $this->assertEquals("\u163?", $convertedWord);
    }

    public function testConvertHebrewCharacter()
    {
        $word = "א";

        $converter = new \Wilf\PhpUtf8ToRtf\Languages\ArabicCharacterConverter();
        $convertedWord = $converter->convertWordToRtf($word);

        $this->assertEquals("\u1488?", $convertedWord);
    }

/*    public function testConvertTwoCharacters()
    {
        $word = "با";

        $converter = new \Wilf\PhpUtf8ToRtf\Languages\ArabicCharacterConverter();
        $convertedWord = $converter->convertWordToRtf($word);

        $this->assertEquals("{\\rtlch\\fcs1 \\af31507 \\ltrch\\fcs0 \\f31574\\insrsid3087474 \\'dc}{\\rtlch\\fcs1 \\af31507 \\ltrch\\fcs0 \\f31574\\insrsid3087474 \\'c8'\'c7}", $convertedWord);
    }*/

/*    public function testConvertThreeCharacters()
    {
        $word = "";

        $converter = new \Wilf\PhpUtf8ToRtf\Languages\ArabicCharacterConverter();
        $convertedWord = $converter->convertWordToRtf($word);

        $this->assertEquals("{\\rtlch\\fcs1 \\af31507 \\ltrch\\fcs0 \\f31574\\insrsid3087474 \\'fd}", $convertedWord);
    }*/

/*    public function testConvertWord()
    {
        $word = "أزْرَق";

        $converter = new \Wilf\PhpUtf8ToRtf\Languages\ArabicCharacterConverter();
        $convertedWord = $converter->convertWordToRtf($word);
        var_dump($convertedWord);

        //$this->assertEquals("{\\f31574\\insrsid12286983\\charrsid12286983 \\'fd}", $convertedWord);
    }*/

/*    public function testConvertMultipleWords()
    {
        $words = [
            ""
        ];

        $converter = new \Wilf\PhpUtf8ToRtf\Languages\ArabicCharacterConverter();
        $convertedWord = $converter->convertWordsToRtf($words);

        $this->assertEquals("{\\f31574\\insrsid12286983\\charrsid12286983 \\'fd}", $convertedWord);
    }*/
}