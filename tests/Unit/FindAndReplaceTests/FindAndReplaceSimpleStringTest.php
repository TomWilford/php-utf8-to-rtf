<?php

namespace Unit\FindAndReplaceTests;

use Resources\Pangrams;
use Resources\Rtf;
use Wilf\PhpUtf8ToRtf\CharacterConverter;

final class FindAndReplaceSimpleStringTest extends \PHPUnit\Framework\TestCase
{
    use Pangrams;
    use Rtf;

    public function testForNotConvertingSimpleEnglishInString(): void
    {
        $string = $this->english;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedEnglish, $convertedString);
    }

    public function testForConvertingSimpleArabicString(): void
    {
        $string = $this->arabic;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedArabic, $convertedString);
    }

    public function testForConvertingSimpleAzeriString(): void
    {
        $string = $this->azeri;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedAzeri, $convertedString);
    }

    public function testForConvertingSimpleBretonString(): void
    {
        $string = $this->breton;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedBreton, $convertedString);
    }

    public function testForConvertingSimpleBulgarianString(): void
    {
        $string = $this->bulgarian;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedBulgarian, $convertedString);
    }

    public function testForConvertingSimpleCatalanString(): void
    {
        $string = $this->catalan;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedCatalan, $convertedString);
    }

    public function testForConvertingSimpleChineseTraditionalString(): void
    {
        $string = $this->chineseTraditional;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedChineseTraditional, $convertedString);
    }

    public function testForConvertingSimpleChineseSimplifiedString(): void
    {
        $string = $this->chineseSimplified;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedChineseSimplified, $convertedString);
    }

    public function testForConvertingSimpleCzechString(): void
    {
        $string = $this->czech;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedCzech, $convertedString);
    }

    public function testForConvertingSimpleDanishString(): void
    {
        $string = $this->danish;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedDanish, $convertedString);
    }

    public function testForConvertingSimpleDzongkhaString(): void
    {
        $string = $this->dzongka;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedDzongkha, $convertedString);
    }

    public function testForConvertingSimpleEsperantoString(): void
    {
        $string = $this->esperanto;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedEsperanto, $convertedString);
    }

    public function testForConvertingSimpleEstonianString(): void
    {
        $string = $this->estonian;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedEstonian, $convertedString);
    }

    public function testForConvertingSimpleFinnishString(): void
    {
        $string = $this->finnish;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedFinnish, $convertedString);
    }

    public function testForConvertingSimpleFrenchString(): void
    {
        $string = $this->french;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedFrench, $convertedString);
    }

    public function testForConvertingSimpleGermanString(): void
    {
        $string = $this->german;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedGerman, $convertedString);
    }

    public function testForConvertingSimpleGreekString(): void
    {
        $string = $this->greek;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedGreek, $convertedString);
    }

    public function testForConvertingSimpleHebrewString(): void
    {
        $string = $this->hebrew;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedHebrew, $convertedString);
    }

    public function testForConvertingSimpleHindiString(): void
    {
        $string = $this->hindi;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedHindi, $convertedString);
    }

    public function testForConvertingSimpleHungarianString(): void
    {
        $string = $this->hungarian;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedHungarian, $convertedString);
    }

    public function testForConvertingSimpleIcelandicString(): void
    {
        $string = $this->icelandic;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedIcelandic, $convertedString);
    }

    public function testForConvertingSimpleIgboString(): void
    {
        $string = $this->igbo;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedIgbo, $convertedString);
    }

    public function testForConvertingSimpleIndonesianString(): void
    {
        $string = $this->indonesian;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedIndonesian, $convertedString);
    }

    public function testForConvertingSimpleIrishString(): void
    {
        $string = $this->irish;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedIrish, $convertedString);
    }

    public function testForConvertingSimpleItalianString(): void
    {
        $string = $this->italian;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedItalian, $convertedString);
    }

    public function testForConvertingSimpleJapaneseString(): void
    {
        $string = $this->japanese;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedJapanese, $convertedString);
    }

    public function testForConvertingSimpleJavaneseString(): void
    {
        $string = $this->javanese;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedJavanese, $convertedString);
    }

    public function testForConvertingSimpleKoreanString(): void
    {
        $string = $this->korean;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedKorean, $convertedString);
    }

    public function testForConvertingSimpleLatinString(): void
    {
        $string = $this->latin;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedlatin, $convertedString);
    }

    public function testForConvertingSimpleLatvianString(): void
    {
        $string = $this->latvian;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedLatvian, $convertedString);
    }

    public function testForConvertingSimpleLithuanianString(): void
    {
        $string = $this->lithuanian;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedLithuanian, $convertedString);
    }

    public function testForConvertingSimpleLojbanString(): void
    {
        $string = $this->lojban;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedLojban, $convertedString);
    }

    public function testForConvertingSimpleMacedonianString(): void
    {
        $string = $this->macedonian;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedMacedonian, $convertedString);
    }

    public function testForConvertingSimpleMalayalamString(): void
    {
        $string = $this->malayalam;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedMalayalam, $convertedString);
    }

    public function testForConvertingSimpleMapudungunString(): void
    {
        $string = $this->mapudungun;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedMapudungun, $convertedString);
    }

    public function testForConvertingSimpleMongolianString(): void
    {
        $string = $this->mongolian;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedMongolian, $convertedString);
    }

    public function testForConvertingSimpleMyanmarString(): void
    {
        $string = $this->myanmar;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedMyanmar, $convertedString);
    }

    public function testForConvertingSimpleNorwegianString(): void
    {
        $string = $this->norwegian;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedNorwegian, $convertedString);
    }

    public function testForConvertingSimplePolishString(): void
    {
        $string = $this->polish;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedPolish, $convertedString);
    }

    public function testForConvertingSimplePortugueseString(): void
    {
        $string = $this->portuguese;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedPortuguese, $convertedString);
    }

    public function testForConvertingSimpleRomanianString(): void
    {
        $string = $this->romanian;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedRomanian, $convertedString);
    }

    public function testForConvertingSimpleRussianString(): void
    {
        $string = $this->russian;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedRussian, $convertedString);
    }

    public function testForConvertingSimpleSanscritString(): void
    {
        $string = $this->sanscrit;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedSanscrit, $convertedString);
    }

    public function testForConvertingSimpleScottishGaelicString(): void
    {
        $string = $this->scottishGaelic;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedScottishGaelic, $convertedString);
    }

    public function testForConvertingSimpleSerbianString(): void
    {
        $string = $this->serbian;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedSerbian, $convertedString);
    }

    public function testForConvertingSimpleSlovakString(): void
    {
        $string = $this->slovak;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedSlovak, $convertedString);
    }

    public function testForConvertingSimpleSlovenianString(): void
    {
        $string = $this->slovenian;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedSlovenian, $convertedString);
    }

    public function testForConvertingSimpleSpanishString(): void
    {
        $string = $this->spanish;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedSpanish, $convertedString);
    }

    public function testForConvertingSimpleSwedishString(): void
    {
        $string = $this->swedish;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedSwedish, $convertedString);
    }

    public function testForConvertingSimpleTagalogString(): void
    {
        $string = $this->tagalog;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedTagalog, $convertedString);
    }

    public function testForConvertingSimpleThaiString(): void
    {
        $string = $this->thai;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedThai, $convertedString);
    }

    public function testForConvertingSimpleTibetanString(): void
    {
        $string = $this->tibetan;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedTibetan, $convertedString);
    }

    public function testForConvertingSimpleTurkishString(): void
    {
        $string = $this->turkish;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedTurkish, $convertedString);
    }

    public function testForConvertingSimpleUkrainianString(): void
    {
        $string = $this->ukrainian;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedUkrainian, $convertedString);
    }

    public function testForConvertingSimpleUrduString(): void
    {
        $string = $this->urdu;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedUrdu, $convertedString);
    }

    public function testForConvertingSimpleUyghurString(): void
    {
        $string = $this->uyghur;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedUyghur, $convertedString);
    }

    public function testForConvertingSimpleYorubaString(): void
    {
        $string = $this->yoruba;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedYoruba, $convertedString);
    }

    public function testForConvertingSimpleWelshString(): void
    {
        $string = $this->welsh;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedWelsh, $convertedString);
    }

    public function testForConvertingSimpleVietnameseString(): void
    {
        $string = $this->vietnamese;

        $converter = new CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals($this->convertedVietnamese, $convertedString);
    }
}
