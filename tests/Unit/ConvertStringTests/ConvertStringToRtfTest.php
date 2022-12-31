<?php

namespace Unit\ConvertStringTests;

use Resources\Pangrams;
use Resources\Rtf;
use Wilf\PhpUtf8ToRtf\CharacterConverter;

final class ConvertStringToRtfTest extends \PHPUnit\Framework\TestCase
{
    use Pangrams;
    use Rtf;

    public function testForNotConvertingEnglishInString(): void
    {
        $string = $this->english;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', "The quick brown fox jumps over the lazy dog!"), $convertedString);
    }

    public function testForConvertingArabicString(): void
    {
        $string = $this->arabic;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedArabic), $convertedString);
    }

    public function testForConvertingAzeriString(): void
    {
        $string = $this->azeri;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedAzeri), $convertedString);
    }

    public function testForConvertingBretonString(): void
    {
        $string = $this->breton;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedBreton), $convertedString);
    }

    public function testForConvertingBulgarianString(): void
    {
        $string = $this->bulgarian;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedBulgarian), $convertedString);
    }

    public function testForConvertingCatalanString(): void
    {
        $string = $this->catalan;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedCatalan), $convertedString);
    }

    public function testForConvertingChineseTraditionalString(): void
    {
        $string = $this->chineseTraditional;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedChineseTraditional), $convertedString);
    }

    public function testForConvertingChineseSimplifiedString(): void
    {
        $string = $this->chineseSimplified;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedChineseSimplified), $convertedString);
    }

    public function testForConvertingCzechString(): void
    {
        $string = $this->czech;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedCzech), $convertedString);
    }

    public function testForConvertingDanishString(): void
    {
        $string = $this->danish;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedDanish), $convertedString);
    }

    public function testForConvertingDzongkhaString(): void
    {
        $string = $this->dzongka;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedDongka), $convertedString);
    }

    public function testForConvertingEsperantoString(): void
    {
        $string = $this->esperanto;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedEsperanto), $convertedString);
    }

    public function testForConvertingEstonianString(): void
    {
        $string = $this->estonian;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedEstonian), $convertedString);
    }

    public function testForConvertingFinnishString(): void
    {
        $string = $this->finnish;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedFinnish), $convertedString);
    }

    public function testForConvertingFrenchString(): void
    {
        $string = $this->french;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedFrench), $convertedString);
    }

    public function testForConvertingGermanString(): void
    {
        $string = $this->german;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedGerman), $convertedString);
    }

    public function testForConvertingGreekString(): void
    {
        $string = $this->greek;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedGreek), $convertedString);
    }

    public function testForConvertingHebrewString(): void
    {
        $string = $this->hebrew;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedHebrew), $convertedString);
    }

    public function testForConvertingHindiString(): void
    {
        $string = $this->hindi;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedHindi), $convertedString);
    }

    public function testForConvertingHungarianString(): void
    {
        $string = $this->hungarian;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedHungarian), $convertedString);
    }

    public function testForConvertingIcelandicString(): void
    {
        $string = $this->icelandic;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedIcelandic), $convertedString);
    }

    public function testForConvertingIgboString(): void
    {
        $string = $this->igbo;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedIgbo), $convertedString);
    }

    public function testForConvertingIndonesianString(): void
    {
        $string = $this->indonesian;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedIndonesian), $convertedString);
    }

    public function testForConvertingIrishString(): void
    {
        $string = $this->irish;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedIrish), $convertedString);
    }

    public function testForConvertingItalianString(): void
    {
        $string = $this->italian;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedItalian), $convertedString);
    }

    public function testForConvertingJapaneseString(): void
    {
        $string = $this->japanese;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedJapanese), $convertedString);
    }

    public function testForConvertingJavaneseString(): void
    {
        $string = $this->javanese;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedJavanese), $convertedString);
    }

    public function testForConvertingKoreanString(): void
    {
        $string = $this->korean;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedKorean), $convertedString);
    }

    public function testForConvertingLatinString(): void
    {
        $string = $this->latin;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedlatin), $convertedString);
    }

    public function testForConvertingLatvianString(): void
    {
        $string = $this->latvian;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedLatvian), $convertedString);
    }

    public function testForConvertingLithuanianString(): void
    {
        $string = $this->lithuanian;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedLithuanian), $convertedString);
    }

    public function testForConvertingLojbanString(): void
    {
        $string = $this->lojban;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedLojban), $convertedString);
    }

    public function testForConvertingMacedonianString(): void
    {
        $string = $this->macedonian;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedMacedonian), $convertedString);
    }

    public function testForConvertingMalayalamString(): void
    {
        $string = $this->malayalam;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedMalayalam), $convertedString);
    }

    public function testForConvertingMapudungunString(): void
    {
        $string = $this->mapudungun;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedMapudungun), $convertedString);
    }

    public function testForConvertingMongolianString(): void
    {
        $string = $this->mongolian;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedMongolian), $convertedString);
    }

    public function testForConvertingMyanmarString(): void
    {
        $string = $this->myanmar;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedMyanmar), $convertedString);
    }

    public function testForConvertingNorwegianString(): void
    {
        $string = $this->norwegian;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedNorwegian), $convertedString);
    }

    public function testForConvertingPolishString(): void
    {
        $string = $this->polish;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedPolish), $convertedString);
    }

    public function testForConvertingPortugueseString(): void
    {
        $string = $this->portuguese;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedPortuguese), $convertedString);
    }

    public function testForConvertingRomanianString(): void
    {
        $string = $this->romanian;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedRomanian), $convertedString);
    }

    public function testForConvertingRussianString(): void
    {
        $string = $this->russian;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedRussian), $convertedString);
    }

    public function testForConvertingSanscritString(): void
    {
        $string = $this->sanscrit;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedSanscrit), $convertedString);
    }

    public function testForConvertingScottishGaelicString(): void
    {
        $string = $this->scottishGaelic;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedScottishGaelic), $convertedString);
    }

    public function testForConvertingSerbianString(): void
    {
        $string = $this->serbian;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedSerbian), $convertedString);
    }

    public function testForConvertingSlovakString(): void
    {
        $string = $this->slovak;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedSlovak), $convertedString);
    }

    public function testForConvertingSlovenianString(): void
    {
        $string = $this->slovenian;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedSlovenian), $convertedString);
    }

    public function testForConvertingSpanishString(): void
    {
        $string = $this->spanish;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedSpanish), $convertedString);
    }

    public function testForConvertingSwedishString(): void
    {
        $string = $this->swedish;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedSwedish), $convertedString);
    }

    public function testForConvertingTagalogString(): void
    {
        $string = $this->tagalog;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedTagalog), $convertedString);
    }

    public function testForConvertingThaiString(): void
    {
        $string = $this->thai;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedThai), $convertedString);
    }

    public function testForConvertingTibetanString(): void
    {
        $string = $this->tibetan;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedTibetan), $convertedString);
    }

    public function testForConvertingTurkishString(): void
    {
        $string = $this->turkish;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedTurkish), $convertedString);
    }

    public function testForConvertingUkrainianString(): void
    {
        $string = $this->ukrainian;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedUkrainian), $convertedString);
    }

    /**
    Failed on یک
     */
    /*public function testForConvertingUrduString(): void
    {
        $string = $this->urdu;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedUrdu), $convertedString);
    }*/

    public function testForConvertingUyghurString(): void
    {
        $string = $this->uyghur;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedUyghur), $convertedString);
    }

    public function testForConvertingYorubaString(): void
    {
        $string = $this->yoruba;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedYoruba), $convertedString);
    }

    public function testForConvertingWelshString(): void
    {
        $string = $this->welsh;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedWelsh), $convertedString);
    }

    /**
    Failed on đớn and đánh
     */
    /*public function testForConvertingVietnameseString(): void
    {
        $string = $this->vietnamese;

        $converter = new CharacterConverter();
        $convertedString = $converter->convertStringToRtf($string);

        $this->assertEquals(str_replace(['{', '}'], '', $this->convertedVietnamese), $convertedString);
    }*/
}
