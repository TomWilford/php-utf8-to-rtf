<?php

namespace Unit\LocateWordsTests;

use PHPUnit\Framework\TestCase;
use Resources\Pangrams;

final class LocateWordsInSimpleStringTest extends TestCase
{
    use Pangrams;
    public function testForNotLocatingRtfSafeCharacters(): void
    {
        $string = "{ } ! ? # / \\";

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(0, $words);
    }

    public function testForNotLocatingEnglishInString(): void
    {
        $string = $this->english;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(0, $words);
    }

    public function testForLocatingArabicWordsInString(): void
    {
        $string = $this->arabic;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(15, $words);
    }

    public function testForLocatingAzeriWordsInString(): void
    {
        $string = $this->azeri;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(6, $words);
    }

    public function testForLocatingBretonWordsInString(): void
    {
        $string = $this->breton;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(2, $words);
    }

    public function testForLocatingBulgarianWordsInString(): void
    {
        $string = $this->bulgarian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(7, $words);
    }

    public function testForLocatingCatalanWordsInString(): void
    {
        $string = $this->catalan;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(14, $words);
    }

    public function testForLocatingChineseTraditionalWordsInString(): void
    {
        $string = $this->chineseTraditional;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(2, $words);
    }

    public function testForLocatingChineseSimplifiedWordsInString(): void
    {
        $string = $this->chineseSimplified;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(2, $words);
    }

    public function testForLocatingCzechWordsInString(): void
    {
        $string = $this->czech;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(8, $words);
    }

    public function testForLocatingDanishWordsInString(): void
    {
        $string = $this->danish;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(3, $words);
    }

    public function testForLocatingDzongkhaWordsInString(): void
    {
        $string = $this->dzongka;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(68, $words);
    }

    public function testForLocatingEsperantoWordsInString(): void
    {
        $string = $this->esperanto;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(4, $words);
    }

    public function testForLocatingEstonianWordsInString(): void
    {
        $string = $this->estonian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(4, $words);
    }

    public function testForLocatingFinnishWordsInString(): void
    {
        $string = $this->finnish;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(1, $words);
    }

    public function testForLocatingFrenchWordsInString(): void
    {
        $string = $this->french;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(5, $words);
    }

    public function testForLocatingGermanWordsInString(): void
    {
        $string = $this->german;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(4, $words);
    }

    public function testForLocatingGreekWordsInString(): void
    {
        $string = $this->greek;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(18, $words);
    }

    public function testForLocatingHebrewWordsInString(): void
    {
        $string = $this->hebrew;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(26, $words);
    }

    public function testForLocatingHindiWordsInString(): void
    {
        $string = $this->hindi;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(54, $words);
    }

    public function testForLocatingHungarianWordsInString(): void
    {
        $string = $this->hungarian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(9, $words);
    }

    public function testForLocatingIcelandicWordsInString(): void
    {
        $string = $this->icelandic;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(9, $words);
    }

    public function testForLocatingIgboWordsInString(): void
    {
        $string = $this->igbo;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(12, $words);
    }

    public function testForLocatingIndonesianWordsInString(): void
    {
        $string = $this->indonesian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(0, $words);
    }

    public function testForLocatingIrishWordsInString(): void
    {
        $string = $this->irish;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(7, $words);
    }

    public function testForLocatingItalianWordsInString(): void
    {
        $string = $this->italian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(0, $words);
    }

    public function testForLocatingJapaneseWordsInString(): void
    {
        $string = $this->japanese;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(9, $words);
    }

    public function testForLocatingJavaneseWordsInString(): void
    {
        $string = $this->javanese;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(5, $words);
    }

    public function testForLocatingKoreanWordsInString(): void
    {
        $string = $this->korean;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(9, $words);
    }

    public function testForLocatingLatinWordsInString(): void
    {
        $string = $this->latin;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(0, $words);
    }

    public function testForLocatingLatvianWordsInString(): void
    {
        $string = $this->latvian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(6, $words);
    }

    public function testForLocatingLithuanianWordsInString(): void
    {
        $string = $this->lithuanian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(6, $words);
    }

    public function testForLocatingLojbanWordsInString(): void
    {
        $string = $this->lojban;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(1, $words);
    }

    public function testForLocatingMacedonianWordsInString(): void
    {
        $string = $this->macedonian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(13, $words);
    }

    public function testForLocatingMalayalamWordsInString(): void
    {
        $string = $this->malayalam;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(107, $words);
    }

    public function testForLocatingMapudungunWordsInString(): void
    {
        $string = $this->mapudungun;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(1, $words);
    }

    public function testForLocatingMongolianWordsInString(): void
    {
        $string = $this->mongolian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(7, $words);
    }

    public function testForLocatingMyanmarWordsInString(): void
    {
        $string = $this->myanmar;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(46, $words);
    }

    public function testForLocatingNorwegianWordsInString(): void
    {
        $string = $this->norwegian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(3, $words);
    }

    public function testForLocatingPolishWordsInString(): void
    {
        $string = $this->polish;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(5, $words);
    }

    public function testForLocatingPortugeseWordsInString(): void
    {
        $string = $this->portugese;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(12, $words);
    }

    public function testForLocatingRomanianWordsInString(): void
    {
        $string = $this->romanian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(5, $words);
    }

    public function testForLocatingRussianWordsInString(): void
    {
        $string = $this->russian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(9, $words);
    }

    public function testForLocatingSanscritWordsInString(): void
    {
        $string = $this->sanscrit;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(33, $words);
    }

    public function testForLocatingScottishGaelicWordsInString(): void
    {
        $string = $this->scottishGaelic;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(5, $words);
    }

    public function testForLocatingSerbianWordsInString(): void
    {
        $string = $this->serbian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(4, $words);
    }

    public function testForLocatingSlovakWordsInString(): void
    {
        $string = $this->slovak;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(13, $words);
    }

    public function testForLocatingSlovenianWordsInString(): void
    {
        $string = $this->slovenian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(1, $words);
    }

    public function testForLocatingSpanishWordsInString(): void
    {
        $string = $this->spanish;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(7, $words);
    }

    public function testForLocatingSwedishWordsInString(): void
    {
        $string = $this->swedish;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(3, $words);
    }

    public function testForLocatingTagalogWordsInString(): void
    {
        $string = $this->tagalog;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(1, $words);
    }

    public function testForLocatingThaiWordsInString(): void
    {
        $string = $this->thai;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(55, $words);
    }

    public function testForLocatingTibetanWordsInString(): void
    {
        $string = $this->tibetan;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(72, $words);
    }

    public function testForLocatingTurkishWordsInString(): void
    {
        $string = $this->turkish;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(4, $words);
    }

    public function testForLocatingUkranianWordsInString(): void
    {
        $string = $this->ukranian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(10, $words);
    }

    public function testForLocatingUrduWordsInString(): void
    {
        $string = $this->urdu;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(23, $words);
    }

    public function testForLocatingUyghurWordsInString(): void
    {
        $string = $this->uyghur;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(10, $words);
    }

    public function testForLocatingYorubaWordsInString(): void
    {
        $string = $this->yoruba;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(15, $words);
    }

    public function testForLocatingWelshWordsInString(): void
    {
        $string = $this->welsh;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(2, $words);
    }
}
