<?php

namespace Unit\LocateWordsTests;

use Resources\Pangrams;
use Resources\Rtf;
use Wilf\PhpUtf8ToRtf\CharacterConverter;

final class LocateWordsInRtfStringTest extends \PHPUnit\Framework\TestCase
{
    use Rtf;
    use Pangrams;

    public function testForNotLocatingEnglishInRtf(): void
    {
        $string = $this->rtfStart . $this->english . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(0, $words);
    }

    public function testForLocatingArabicWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->arabic . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(15, $words);
    }

    public function testForLocatingAzeriWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->azeri . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(6, $words);
    }

    public function testForLocatingBretonWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->breton . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(3, $words);
    }

    public function testForLocatingBulgarianWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->bulgarian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(7, $words);
    }

    public function testForLocatingCatalanWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->catalan . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(14, $words);
    }

    public function testForLocatingChineseTraditionalWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->chineseTraditional . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(1, $words);
    }

    public function testForLocatingChineseSimplifiedWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->chineseSimplified . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(1, $words);
    }

    public function testForLocatingCzechWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->czech . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(8, $words);
    }

    public function testForLocatingDanishWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->danish . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(3, $words);
    }

    public function testForLocatingDzongkhaWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->dzongka . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(4, $words);
    }

    public function testForLocatingEsperantoWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->esperanto . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(4, $words);
    }

    public function testForLocatingEstonianWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->estonian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(5, $words);
    }

    public function testForLocatingFinnishWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->finnish . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(1, $words);
    }

    public function testForLocatingFrenchWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->french . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(5, $words);
    }

    public function testForLocatingGermanWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->german . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(4, $words);
    }

    public function testForLocatingGreekWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->greek . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(18, $words);
    }

    public function testForLocatingHebrewWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->hebrew . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(26, $words);
    }

    public function testForLocatingHindiWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->hindi . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(24, $words);
    }

    public function testForLocatingHungarianWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->hungarian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(9, $words);
    }

    public function testForLocatingIcelandicWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->icelandic . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(9, $words);
    }

    public function testForLocatingIgboWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->igbo . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(12, $words);
    }

    public function testForLocatingIndonesianWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->indonesian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(0, $words);
    }

    public function testForLocatingIrishWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->irish . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(7, $words);
    }

    public function testForLocatingItalianWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->italian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(0, $words);
    }

    public function testForLocatingJapaneseWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->japanese . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(8, $words);
    }

    public function testForLocatingJavaneseWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->javanese . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(5, $words);
    }

    public function testForLocatingKoreanWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->korean . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(9, $words);
    }

    public function testForLocatingLatinWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->latin . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(0, $words);
    }

    public function testForLocatingLatvianWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->latvian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(6, $words);
    }

    public function testForLocatingLithuanianWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->lithuanian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(6, $words);
    }

    public function testForLocatingLojbanWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->lojban . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(1, $words);
    }

    public function testForLocatingMacedonianWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->macedonian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(13, $words);
    }

    public function testForLocatingMalayalamWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->malayalam . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(32, $words);
    }

    public function testForLocatingMapudungunWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->mapudungun . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(1, $words);
    }

    public function testForLocatingMongolianWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->mongolian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(7, $words);
    }

    public function testForLocatingMyanmarWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->myanmar . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(6, $words);
    }

    public function testForLocatingNorwegianWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->norwegian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(3, $words);
    }

    public function testForLocatingPolishWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->polish . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(5, $words);
    }

    public function testForLocatingPortugueseWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->portuguese . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(12, $words);
    }

    public function testForLocatingRomanianWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->romanian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(5, $words);
    }

    public function testForLocatingRussianWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->russian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(9, $words);
    }

    public function testForLocatingSanscritWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->sanscrit . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(6, $words);
    }

    public function testForLocatingScottishGaelicWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->scottishGaelic . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(6, $words);
    }

    public function testForLocatingSerbianWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->serbian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(4, $words);
    }

    public function testForLocatingSlovakWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->slovak . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(13, $words);
    }

    public function testForLocatingSlovenianWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->slovenian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(1, $words);
    }

    public function testForLocatingSpanishWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->spanish . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(7, $words);
    }

    public function testForLocatingSwedishWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->swedish . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(3, $words);
    }

    public function testForLocatingTagalogWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->tagalog . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(1, $words);
    }

    public function testForLocatingThaiWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->thai . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(10, $words);
    }

    public function testForLocatingTibetanWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->tibetan . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(5, $words);
    }

    public function testForLocatingTurkishWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->turkish . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(4, $words);
    }

    public function testForLocatingUkrainianWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->ukrainian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(10, $words);
    }

    public function testForLocatingUrduWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->urdu . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(23, $words);
    }

    public function testForLocatingUyghurWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->uyghur . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(10, $words);
    }

    public function testForLocatingYorubaWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->yoruba . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(14, $words);
    }

    public function testForLocatingWelshWordsInRtf(): void
    {
        $string = $this->rtfStart . $this->welsh . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(2, $words);
    }

    public function testForLocatingVietnameseWordsInString(): void
    {
        $string = $this->rtfStart . $this->vietnamese . $this->rtfEnd;

        $converter = new CharacterConverter();
        $words = $converter->locateWordsInString($string);

        $this->assertCount(34, $words);
    }
}
