<?php

namespace Unit\LocateWordsTests;

use PHPUnit\Framework\TestCase;
use Resources\Pangrams;
use Wilf\PhpUtf8ToRtf\CharacterConverter;

final class LocateWordsInSimpleStringTest extends TestCase
{
    use Pangrams;

    public function testForNotLocatingRtfSafeCharacters(): void
    {
        $string = "{ } ! ? # / \\";

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(0, $words);
    }

    public function testForNotLocatingEnglishInString(): void
    {
        $string = $this->english;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(0, $words);
    }

    public function testForLocatingArabicWordsInString(): void
    {
        $string = $this->arabic;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(15, $words);
    }

    public function testForLocatingAzeriWordsInString(): void
    {
        $string = $this->azeri;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(6, $words);
    }

    public function testForLocatingBretonWordsInString(): void
    {
        $string = $this->breton;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(3, $words);
    }

    public function testForLocatingBulgarianWordsInString(): void
    {
        $string = $this->bulgarian;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(7, $words);
    }

    public function testForLocatingCatalanWordsInString(): void
    {
        $string = $this->catalan;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(14, $words);
    }

    public function testForLocatingChineseTraditionalWordsInString(): void
    {
        $string = $this->chineseTraditional;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(1, $words);
    }

    public function testForLocatingChineseSimplifiedWordsInString(): void
    {
        $string = $this->chineseSimplified;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(1, $words);
    }

    public function testForLocatingCzechWordsInString(): void
    {
        $string = $this->czech;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(8, $words);
    }

    public function testForLocatingDanishWordsInString(): void
    {
        $string = $this->danish;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(3, $words);
    }

    public function testForLocatingDzongkhaWordsInString(): void
    {
        $string = $this->dzongka;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(4, $words);
    }

    public function testForLocatingEsperantoWordsInString(): void
    {
        $string = $this->esperanto;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(4, $words);
    }

    public function testForLocatingEstonianWordsInString(): void
    {
        $string = $this->estonian;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(5, $words);
    }

    public function testForLocatingFinnishWordsInString(): void
    {
        $string = $this->finnish;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(1, $words);
    }

    public function testForLocatingFrenchWordsInString(): void
    {
        $string = $this->french;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(5, $words);
    }

    public function testForLocatingGermanWordsInString(): void
    {
        $string = $this->german;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(4, $words);
    }

    public function testForLocatingGreekWordsInString(): void
    {
        $string = $this->greek;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(18, $words);
    }

    public function testForLocatingHebrewWordsInString(): void
    {
        $string = $this->hebrew;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(26, $words);
    }

    public function testForLocatingHindiWordsInString(): void
    {
        $string = $this->hindi;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(24, $words);
    }

    public function testForLocatingHungarianWordsInString(): void
    {
        $string = $this->hungarian;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(9, $words);
    }

    public function testForLocatingIcelandicWordsInString(): void
    {
        $string = $this->icelandic;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(9, $words);
    }

    public function testForLocatingIgboWordsInString(): void
    {
        $string = $this->igbo;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(12, $words);
    }

    public function testForLocatingIndonesianWordsInString(): void
    {
        $string = $this->indonesian;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(0, $words);
    }

    public function testForLocatingIrishWordsInString(): void
    {
        $string = $this->irish;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(7, $words);
    }

    public function testForLocatingItalianWordsInString(): void
    {
        $string = $this->italian;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(0, $words);
    }

    public function testForLocatingJapaneseWordsInString(): void
    {
        $string = $this->japanese;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(8, $words);
    }

    public function testForLocatingJavaneseWordsInString(): void
    {
        $string = $this->javanese;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(5, $words);
    }

    public function testForLocatingKoreanWordsInString(): void
    {
        $string = $this->korean;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(9, $words);
    }

    public function testForLocatingLatinWordsInString(): void
    {
        $string = $this->latin;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(0, $words);
    }

    public function testForLocatingLatvianWordsInString(): void
    {
        $string = $this->latvian;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(6, $words);
    }

    public function testForLocatingLithuanianWordsInString(): void
    {
        $string = $this->lithuanian;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(6, $words);
    }

    public function testForLocatingLojbanWordsInString(): void
    {
        $string = $this->lojban;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(1, $words);
    }

    public function testForLocatingMacedonianWordsInString(): void
    {
        $string = $this->macedonian;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(13, $words);
    }

    public function testForLocatingMalayalamWordsInString(): void
    {
        $string = $this->malayalam;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(32, $words);
    }

    public function testForLocatingMapudungunWordsInString(): void
    {
        $string = $this->mapudungun;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(1, $words);
    }

    public function testForLocatingMongolianWordsInString(): void
    {
        $string = $this->mongolian;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(7, $words);
    }

    public function testForLocatingMyanmarWordsInString(): void
    {
        $string = $this->myanmar;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(6, $words);
    }

    public function testForLocatingNorwegianWordsInString(): void
    {
        $string = $this->norwegian;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(3, $words);
    }

    public function testForLocatingPolishWordsInString(): void
    {
        $string = $this->polish;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(5, $words);
    }

    public function testForLocatingPortugueseWordsInString(): void
    {
        $string = $this->portuguese;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(12, $words);
    }

    public function testForLocatingRomanianWordsInString(): void
    {
        $string = $this->romanian;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(5, $words);
    }

    public function testForLocatingRussianWordsInString(): void
    {
        $string = $this->russian;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(9, $words);
    }

    public function testForLocatingSanscritWordsInString(): void
    {
        $string = $this->sanscrit;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(6, $words);
    }

    public function testForLocatingScottishGaelicWordsInString(): void
    {
        $string = $this->scottishGaelic;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(6, $words);
    }

    public function testForLocatingSerbianWordsInString(): void
    {
        $string = $this->serbian;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(4, $words);
    }

    public function testForLocatingSlovakWordsInString(): void
    {
        $string = $this->slovak;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(13, $words);
    }

    public function testForLocatingSlovenianWordsInString(): void
    {
        $string = $this->slovenian;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(1, $words);
    }

    public function testForLocatingSpanishWordsInString(): void
    {
        $string = $this->spanish;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(7, $words);
    }

    public function testForLocatingSwedishWordsInString(): void
    {
        $string = $this->swedish;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(3, $words);
    }

    public function testForLocatingTagalogWordsInString(): void
    {
        $string = $this->tagalog;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(1, $words);
    }

    public function testForLocatingThaiWordsInString(): void
    {
        $string = $this->thai;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(10, $words);
    }

    public function testForLocatingTibetanWordsInString(): void
    {
        $string = $this->tibetan;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(5, $words);
    }

    public function testForLocatingTurkishWordsInString(): void
    {
        $string = $this->turkish;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(4, $words);
    }

    public function testForLocatingUkrainianWordsInString(): void
    {
        $string = $this->ukrainian;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(10, $words);
    }

    public function testForLocatingUrduWordsInString(): void
    {
        $string = $this->urdu;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(23, $words);
    }

    public function testForLocatingUyghurWordsInString(): void
    {
        $string = $this->uyghur;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(10, $words);
    }

    public function testForLocatingYorubaWordsInString(): void
    {
        $string = $this->yoruba;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(14, $words);
    }

    public function testForLocatingWelshWordsInString(): void
    {
        $string = $this->welsh;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(2, $words);
    }

    public function testForLocatingVietnameseWordsInString(): void
    {
        $string = $this->vietnamese;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(34, $words);
    }
}
