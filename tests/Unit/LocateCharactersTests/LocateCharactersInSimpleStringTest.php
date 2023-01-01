<?php

namespace Unit\LocateCharactersTests;

use PHPUnit\Framework\TestCase;
use Resources\Pangrams;
use Wilf\PhpUtf8ToRtf\CharacterConverter;

final class LocateCharactersInSimpleStringTest extends TestCase
{
    use Pangrams;

    public function testForNotLocatingRtfSafeCharacters(): void
    {
        $string = "{ } ! ? # / \\";

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(0, $characters);
    }

    public function testForNotLocatingEnglishInString(): void
    {
        $string = $this->english;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(0, $characters);
    }

    public function testForLocatingArabicCharactersInString(): void
    {
        $string = $this->arabic;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(30, $characters);
    }

    public function testForLocatingAzeriCharactersInString(): void
    {
        $string = $this->azeri;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(7, $characters);
    }

    public function testForLocatingBretonCharactersInString(): void
    {
        $string = $this->breton;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(3, $characters);
    }

    public function testForLocatingBulgarianCharactersInString(): void
    {
        $string = $this->bulgarian;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(31, $characters);
    }

    public function testForLocatingCatalanCharactersInString(): void
    {
        $string = $this->catalan;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(14, $characters);
    }

    public function testForLocatingChineseTraditionalCharactersInString(): void
    {
        $string = $this->chineseTraditional;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(11, $characters);
    }

    public function testForLocatingChineseSimplifiedCharactersInString(): void
    {
        $string = $this->chineseSimplified;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(9, $characters);
    }

    public function testForLocatingCzechCharactersInString(): void
    {
        $string = $this->czech;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(15, $characters);
    }

    public function testForLocatingDanishCharactersInString(): void
    {
        $string = $this->danish;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(3, $characters);
    }

    public function testForLocatingDzongkhaCharactersInString(): void
    {
        $string = $this->dzongka;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(44, $characters);
    }

    public function testForLocatingEsperantoCharactersInString(): void
    {
        $string = $this->esperanto;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(6, $characters);
    }

    public function testForLocatingEstonianCharactersInString(): void
    {
        $string = $this->estonian;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(6, $characters);
    }

    public function testForLocatingFinnishCharactersInString(): void
    {
        $string = $this->finnish;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(2, $characters);
    }

    public function testForLocatingFrenchCharactersInString(): void
    {
        $string = $this->french;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(5, $characters);
    }

    public function testForLocatingGermanCharactersInString(): void
    {
        $string = $this->german;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(4, $characters);
    }

    public function testForLocatingGreekCharactersInString(): void
    {
        $string = $this->greek;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(40, $characters);
    }

    public function testForLocatingHebrewCharactersInString(): void
    {
        $string = $this->hebrew;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(27, $characters);
    }

    public function testForLocatingHindiCharactersInString(): void
    {
        $string = $this->hindi;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(35, $characters);
    }

    public function testForLocatingHungarianCharactersInString(): void
    {
        $string = $this->hungarian;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(9, $characters);
    }

    public function testForLocatingIcelandicCharactersInString(): void
    {
        $string = $this->icelandic;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(10, $characters);
    }

    public function testForLocatingIgboCharactersInString(): void
    {
        $string = $this->igbo;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(5, $characters);
    }

    public function testForLocatingIndonesianCharactersInString(): void
    {
        $string = $this->indonesian;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(0, $characters);
    }

    public function testForLocatingIrishCharactersInString(): void
    {
        $string = $this->irish;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(7, $characters);
    }

    public function testForLocatingItalianCharactersInString(): void
    {
        $string = $this->italian;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(0, $characters);
    }

    public function testForLocatingJapaneseCharactersInString(): void
    {
        $string = $this->japanese;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(50, $characters);
    }

    public function testForLocatingJavaneseCharactersInString(): void
    {
        $string = $this->javanese;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(23, $characters);
    }

    public function testForLocatingKoreanCharactersInString(): void
    {
        $string = $this->korean;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(25, $characters);
    }

    public function testForLocatingLatinCharactersInString(): void
    {
        $string = $this->latin;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(0, $characters);
    }

    public function testForLocatingLatvianCharactersInString(): void
    {
        $string = $this->latvian;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(11, $characters);
    }

    public function testForLocatingLithuanianCharactersInString(): void
    {
        $string = $this->lithuanian;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(9, $characters);
    }

    public function testForLocatingLojbanCharactersInString(): void
    {
        $string = $this->lojban;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(1, $characters);
    }

    public function testForLocatingMacedonianCharactersInString(): void
    {
        $string = $this->macedonian;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(31, $characters);
    }

    public function testForLocatingMalayalamCharactersInString(): void
    {
        $string = $this->malayalam;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(63, $characters);
    }

    public function testForLocatingMapudungunCharactersInString(): void
    {
        $string = $this->mapudungun;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(1, $characters);
    }

    public function testForLocatingMongolianCharactersInString(): void
    {
        $string = $this->mongolian;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(35, $characters);
    }

    public function testForLocatingMyanmarCharactersInString(): void
    {
        $string = $this->myanmar;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(50, $characters);
    }

    public function testForLocatingNorwegianCharactersInString(): void
    {
        $string = $this->norwegian;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(3, $characters);
    }

    public function testForLocatingPolishCharactersInString(): void
    {
        $string = $this->polish;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(9, $characters);
    }

    public function testForLocatingPortugueseCharactersInString(): void
    {
        $string = $this->portuguese;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(15, $characters);
    }

    public function testForLocatingRomanianCharactersInString(): void
    {
        $string = $this->romanian;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(5, $characters);
    }

    public function testForLocatingRussianCharactersInString(): void
    {
        $string = $this->russian;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(34, $characters);
    }

    public function testForLocatingSanscritCharactersInString(): void
    {
        $string = $this->sanscrit;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(43, $characters);
    }

    public function testForLocatingScottishGaelicCharactersInString(): void
    {
        $string = $this->scottishGaelic;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(6, $characters);
    }

    public function testForLocatingSerbianCharactersInString(): void
    {
        $string = $this->serbian;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(5, $characters);
    }

    public function testForLocatingSlovakCharactersInString(): void
    {
        $string = $this->slovak;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(16, $characters);
    }

    public function testForLocatingSlovenianCharactersInString(): void
    {
        $string = $this->slovenian;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(3, $characters);
    }

    public function testForLocatingSpanishCharactersInString(): void
    {
        $string = $this->spanish;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(7, $characters);
    }

    public function testForLocatingSwedishCharactersInString(): void
    {
        $string = $this->swedish;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(3, $characters);
    }

    public function testForLocatingTagalogCharactersInString(): void
    {
        $string = $this->tagalog;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(1, $characters);
    }

    public function testForLocatingThaiCharactersInString(): void
    {
        $string = $this->thai;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(67, $characters);
    }

    public function testForLocatingTibetanCharactersInString(): void
    {
        $string = $this->tibetan;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(43, $characters);
    }

    public function testForLocatingTurkishCharactersInString(): void
    {
        $string = $this->turkish;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(6, $characters);
    }

    public function testForLocatingUkrainianCharactersInString(): void
    {
        $string = $this->ukrainian;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(33, $characters);
    }

    public function testForLocatingUrduCharactersInString(): void
    {
        $string = $this->urdu;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(44, $characters);
    }

    public function testForLocatingUyghurCharactersInString(): void
    {
        $string = $this->uyghur;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(33, $characters);
    }

    public function testForLocatingYorubaCharactersInString(): void
    {
        $string = $this->yoruba;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(10, $characters);
    }

    public function testForLocatingWelshCharactersInString(): void
    {
        $string = $this->welsh;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(2, $characters);
    }

    public function testForLocatingVietnameseCharactersInString(): void
    {
        $string = $this->vietnamese;

        $converter = new CharacterConverter();
        $characters = $converter->locateCharactersInString($string);

        $this->assertCount(24, $characters);
    }
}
