<?php

namespace Unit\FindAndReplaceTests;

use Resources\Pangrams;
use Resources\Rtf;
use Wilf\PhpUtf8ToRtf\CharacterConverter;

final class FindAndReplaceRtfStringTest extends \PHPUnit\Framework\TestCase
{
    use Rtf;
    use Pangrams;

    public function testForNotConvertingRtfEnglishInString(): void
    {
        $string = $this->rtfStart . $this->english . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . "The quick brown fox jumps over the lazy dog!" . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfArabicString(): void
    {
        $string = $this->rtfStart . $this->arabic . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedArabic . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfAzeriString(): void
    {
        $string = $this->rtfStart . $this->azeri . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedAzeri . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfBretonString(): void
    {
        $string = $this->rtfStart . $this->breton . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedBreton . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfBulgarianString(): void
    {
        $string = $this->rtfStart . $this->bulgarian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedBulgarian . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfCatalanString(): void
    {
        $string = $this->rtfStart . $this->catalan . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedCatalan . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfChineseTraditionalString(): void
    {
        $string = $this->rtfStart . $this->chineseTraditional . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedChineseTraditional . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfChineseSimplifiedString(): void
    {
        $string = $this->rtfStart . $this->chineseSimplified . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedChineseSimplified . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfCzechString(): void
    {
        $string = $this->rtfStart . $this->czech . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedCzech . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfDanishString(): void
    {
        $string = $this->rtfStart . $this->danish . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedDanish . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfDzongkhaString(): void
    {
        $string = $this->rtfStart . $this->dzongka . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedDongka . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfEsperantoString(): void
    {
        $string = $this->rtfStart . $this->esperanto . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedEsperanto . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfEstonianString(): void
    {
        $string = $this->rtfStart . $this->estonian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedEstonian . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfFinnishString(): void
    {
        $string = $this->rtfStart . $this->finnish . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedFinnish . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfFrenchString(): void
    {
        $string = $this->rtfStart . $this->french . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedFrench . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfGermanString(): void
    {
        $string = $this->rtfStart . $this->german . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedGerman . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfGreekString(): void
    {
        $string = $this->rtfStart . $this->greek . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedGreek . $this->rtfEnd, $convertedString);
    }

    /**
    Failed on ום ע הם and תא
     */
    public function testForConvertingRtfHebrewString(): void
    {
        $string = $this->rtfStart . $this->hebrew . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedHebrew . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfHindiString(): void
    {
        $string = $this->rtfStart . $this->hindi . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedHindi . $this->rtfEnd, $convertedString);
    }

    /**
    Failed on í
     */
    public function testForConvertingRtfHungarianString(): void
    {
        $string = $this->rtfStart . $this->hungarian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedHungarian . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfIcelandicString(): void
    {
        $string = $this->rtfStart . $this->icelandic . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedIcelandic . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfIgboString(): void
    {
        $string = $this->rtfStart . $this->igbo . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedIgbo . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfIndonesianString(): void
    {
        $string = $this->rtfStart . $this->indonesian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedIndonesian . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfIrishString(): void
    {
        $string = $this->rtfStart . $this->irish . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedIrish . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfItalianString(): void
    {
        $string = $this->rtfStart . $this->italian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedItalian . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfJapaneseString(): void
    {
        $string = $this->rtfStart . $this->japanese . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedJapanese . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfJavaneseString(): void
    {
        $string = $this->rtfStart . $this->javanese . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedJavanese . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfKoreanString(): void
    {
        $string = $this->rtfStart . $this->korean . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedKorean . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfLatinString(): void
    {
        $string = $this->rtfStart . $this->latin . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedlatin . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfLatvianString(): void
    {
        $string = $this->rtfStart . $this->latvian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedLatvian . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfLithuanianString(): void
    {
        $string = $this->rtfStart . $this->lithuanian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedLithuanian . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfLojbanString(): void
    {
        $string = $this->rtfStart . $this->lojban . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedLojban . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfMacedonianString(): void
    {
        $string = $this->rtfStart . $this->macedonian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedMacedonian . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfMalayalamString(): void
    {
        $string = $this->rtfStart . $this->malayalam . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedMalayalam . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfMapudungunString(): void
    {
        $string = $this->rtfStart . $this->mapudungun . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedMapudungun . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfMongolianString(): void
    {
        $string = $this->rtfStart . $this->mongolian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedMongolian . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfMyanmarString(): void
    {
        $string = $this->rtfStart . $this->myanmar . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedMyanmar . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfNorwegianString(): void
    {
        $string = $this->rtfStart . $this->norwegian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedNorwegian . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfPolishString(): void
    {
        $string = $this->rtfStart . $this->polish . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedPolish . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfPortugueseString(): void
    {
        $string = $this->rtfStart . $this->portuguese . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedPortuguese . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfRomanianString(): void
    {
        $string = $this->rtfStart . $this->romanian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedRomanian . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfRussianString(): void
    {
        $string = $this->rtfStart . $this->russian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedRussian . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfSanscritString(): void
    {
        $string = $this->rtfStart . $this->sanscrit . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedSanscrit . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfScottishGaelicString(): void
    {
        $string = $this->rtfStart . $this->scottishGaelic . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedScottishGaelic . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfSerbianString(): void
    {
        $string = $this->rtfStart . $this->serbian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedSerbian . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfSlovakString(): void
    {
        $string = $this->rtfStart . $this->slovak . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedSlovak . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfSlovenianString(): void
    {
        $string = $this->rtfStart . $this->slovenian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedSlovenian . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfSpanishString(): void
    {
        $string = $this->rtfStart . $this->spanish . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedSpanish . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfSwedishString(): void
    {
        $string = $this->rtfStart . $this->swedish . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedSwedish . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfTagalogString(): void
    {
        $string = $this->rtfStart . $this->tagalog . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedTagalog . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfThaiString(): void
    {
        $string = $this->rtfStart . $this->thai . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedThai . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfTibetanString(): void
    {
        $string = $this->rtfStart . $this->tibetan . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedTibetan . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfTurkishString(): void
    {
        $string = $this->rtfStart . $this->turkish . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedTurkish . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfUkrainianString(): void
    {
        $string = $this->rtfStart . $this->ukrainian . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedUkrainian . $this->rtfEnd, $convertedString);
    }

    /**
    Failed on یک
     */
    public function testForConvertingRtfUrduString(): void
    {
        $string = $this->rtfStart . $this->urdu . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedUrdu . $this->$this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfUyghurString(): void
    {
        $string = $this->rtfStart . $this->uyghur . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedUyghur . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfYorubaString(): void
    {
        $string = $this->rtfStart . $this->yoruba . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedYoruba . $this->rtfEnd, $convertedString);
    }

    public function testForConvertingRtfWelshString(): void
    {
        $string = $this->rtfStart . $this->welsh . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedWelsh . $this->rtfEnd, $convertedString);
    }

    /**
    Failed on đớn and đánh
     */
    public function testForConvertingRtfVietnameseString(): void
    {
        $string = $this->rtfStart . $this->vietnamese . $this->rtfEnd;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->rtfStart . $this->convertedVietnamese . $this->$this->rtfEnd, $convertedString);
    }
}
