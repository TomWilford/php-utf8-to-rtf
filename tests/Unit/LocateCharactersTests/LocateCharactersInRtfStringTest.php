<?php

namespace Unit\LocateCharactersTests;

use Resources\Pangrams;
use Resources\Rtf;
use Wilf\PhpUtf8ToRtf\CharacterConverter;

final class LocateCharactersInRtfStringTest extends \PHPUnit\Framework\TestCase
{
    use Rtf;
    use Pangrams;

    public function testForNotLocatingEnglishInRtf(): void
    {
        $string = $this->rtfStart . $this->english . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(0, $characters);
    }

    public function testForLocatingArabicCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->arabic . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(30, $characters);
    }

    public function testForLocatingAzeriCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->azeri . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(7, $characters);
    }

    public function testForLocatingBretonCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->breton . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(3, $characters);
    }

    public function testForLocatingBulgarianCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->bulgarian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(31, $characters);
    }

    public function testForLocatingCatalanCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->catalan . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(14, $characters);
    }

    public function testForLocatingChineseTraditionalCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->chineseTraditional . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(11, $characters);
    }

    public function testForLocatingChineseSimplifiedCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->chineseSimplified . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(9, $characters);
    }

    public function testForLocatingCzechCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->czech . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(15, $characters);
    }

    public function testForLocatingDanishCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->danish . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(3, $characters);
    }

    public function testForLocatingDzongkhaCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->dzongka . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(44, $characters);
    }

    public function testForLocatingEsperantoCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->esperanto . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(6, $characters);
    }

    public function testForLocatingEstonianCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->estonian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(6, $characters);
    }

    public function testForLocatingFinnishCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->finnish . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(2, $characters);
    }

    public function testForLocatingFrenchCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->french . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(5, $characters);
    }

    public function testForLocatingGermanCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->german . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(4, $characters);
    }

    public function testForLocatingGreekCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->greek . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(40, $characters);
    }

    public function testForLocatingHebrewCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->hebrew . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(27, $characters);
    }

    public function testForLocatingHindiCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->hindi . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(35, $characters);
    }

    public function testForLocatingHungarianCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->hungarian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(9, $characters);
    }

    public function testForLocatingIcelandicCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->icelandic . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(10, $characters);
    }

    public function testForLocatingIgboCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->igbo . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(5, $characters);
    }

    public function testForLocatingIndonesianCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->indonesian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(0, $characters);
    }

    public function testForLocatingIrishCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->irish . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(7, $characters);
    }

    public function testForLocatingItalianCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->italian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(0, $characters);
    }

    public function testForLocatingJapaneseCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->japanese . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(50, $characters);
    }

    public function testForLocatingJavaneseCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->javanese . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(23, $characters);
    }

    public function testForLocatingKoreanCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->korean . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(25, $characters);
    }

    public function testForLocatingLatinCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->latin . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(0, $characters);
    }

    public function testForLocatingLatvianCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->latvian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(11, $characters);
    }

    public function testForLocatingLithuanianCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->lithuanian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(9, $characters);
    }

    public function testForLocatingLojbanCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->lojban . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(1, $characters);
    }

    public function testForLocatingMacedonianCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->macedonian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(31, $characters);
    }

    public function testForLocatingMalayalamCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->malayalam . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(63, $characters);
    }

    public function testForLocatingMapudungunCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->mapudungun . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(1, $characters);
    }

    public function testForLocatingMongolianCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->mongolian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(35, $characters);
    }

    public function testForLocatingMyanmarCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->myanmar . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(50, $characters);
    }

    public function testForLocatingNorwegianCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->norwegian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(3, $characters);
    }

    public function testForLocatingPolishCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->polish . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(9, $characters);
    }

    public function testForLocatingPortugueseCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->portuguese . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(15, $characters);
    }

    public function testForLocatingRomanianCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->romanian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(5, $characters);
    }

    public function testForLocatingRussianCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->russian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(34, $characters);
    }

    public function testForLocatingSanscritCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->sanscrit . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(43, $characters);
    }

    public function testForLocatingScottishGaelicCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->scottishGaelic . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(6, $characters);
    }

    public function testForLocatingSerbianCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->serbian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(5, $characters);
    }

    public function testForLocatingSlovakCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->slovak . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(16, $characters);
    }

    public function testForLocatingSlovenianCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->slovenian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(3, $characters);
    }

    public function testForLocatingSpanishCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->spanish . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(7, $characters);
    }

    public function testForLocatingSwedishCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->swedish . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(3, $characters);
    }

    public function testForLocatingTagalogCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->tagalog . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(1, $characters);
    }

    public function testForLocatingThaiCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->thai . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(67, $characters);
    }

    public function testForLocatingTibetanCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->tibetan . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(43, $characters);
    }

    public function testForLocatingTurkishCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->turkish . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(6, $characters);
    }

    public function testForLocatingUkrainianCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->ukrainian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(33, $characters);
    }

    public function testForLocatingUrduCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->urdu . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(44, $characters);
    }

    public function testForLocatingUyghurCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->uyghur . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(33, $characters);
    }

    public function testForLocatingYorubaCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->yoruba . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(10, $characters);
    }

    public function testForLocatingWelshCharactersInRtf(): void
    {
        $string = $this->rtfStart . $this->welsh . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(2, $characters);
    }

    public function testForLocatingVietnameseCharactersInString(): void
    {
        $string = $this->rtfStart . $this->vietnamese . $this->rtfEnd;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(24, $characters);
    }
}
