<?php

namespace Unit\ConvertWordsTests;

use Resources\Pangrams;

final class ConvertWordsToRtfTest extends \PHPUnit\Framework\TestCase
{
    use Pangrams;
    public function testForNotConvertingEnglishInString(): void
    {
        $words = explode(' ', $this->english);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("The", $convertedWords);
    }

    public function testForConvertingArabicWordInString(): void
    {
        $words = explode(' ', $this->arabic);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u1606?\u1589?", $convertedWords);
    }

    public function testForConvertingAzeriWordInString(): void
    {
        $words = explode(' ', $this->azeri);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("Z\u601?f\u601?r,", $convertedWords);
    }

    public function testForConvertingBretonWordInString(): void
    {
        $words = explode(' ', $this->breton);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("gwerenno\u249?-ma\u241?,", $convertedWords);
    }

    public function testForConvertingBulgarianWordInString(): void
    {
        $words = explode(' ', $this->bulgarian);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u1095?\u1091?\u1076?\u1085?\u1072?", $convertedWords);
    }

    public function testForConvertingCatalanWordInString(): void
    {
        $words = explode(' ', $this->catalan);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u171?D\u243?na", $convertedWords);
    }

    public function testForConvertingChineseTraditionalWordInString(): void
    {
        $words = explode(' ', $this->chineseTraditional);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u35222?\u37326?\u28961?\u38480?\u24291?\u65292?\u31383?\u22806?\u26377?\u34253?\u22825?", $convertedWords);
    }

    public function testForConvertingChineseSimplifiedWordInString(): void
    {
        $words = explode(' ', $this->chineseSimplified);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u20013?\u22269?\u26234?\u36896?\u65292?\u24935?\u21450?\u20840?\u29699?", $convertedWords);
    }

    public function testForConvertingCzechWordInString(): void
    {
        $words = explode(' ', $this->czech);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u250?d\u283?sn\u253?mi", $convertedWords);
    }

    public function testForConvertingDanishWordInString(): void
    {
        $words = explode(' ', $this->danish);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("H\u248?j", $convertedWords);
    }

    public function testForConvertingDzongkhaWordInString(): void
    {
        $words = explode(' ', $this->dzongka);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u3944?\u3851?\u3937?\u3954?\u3906?\u3851?\u3921?\u3904?\u3938?\u3851?\u3928?\u3931?\u3962?\u3942?\u3851?\u3939?\u3942?\u3851?\u3936?\u3905?\u4018?\u3956?\u3908?\u3942?\u3851?\u3940?\u3962?\u3942?\u3851?\u3926?\u4019?\u3964?\u3936?\u3954?\u3851?\u3906?\u3919?\u3962?\u3938?\u3854?", $convertedWords);
    }

    public function testForConvertingEsperantoWordInString(): void
    {
        $words = explode(' ', $this->esperanto);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u265?iu", $convertedWords);
    }

    public function testForConvertingEstonianWordInString(): void
    {
        $words = explode(' ', $this->estonian);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("t\u353?ellom\u228?ngija-f\u246?ljetonist", $convertedWords);
    }

    public function testForConvertingFinnishWordInString(): void
    {
        $words = explode(' ', $this->finnish);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("T\u246?rkylempij\u228?vongahdus", $convertedWords);
    }

    public function testForConvertingFrenchWordInString(): void
    {
        $words = explode(' ', $this->french);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("pr\u233?f\u232?re", $convertedWords);
    }

    public function testForConvertingGermanWordInString(): void
    {
        $words = explode(' ', $this->german);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("gro\u223?en", $convertedWords);
    }

    public function testForConvertingGreekWordInString(): void
    {
        $words = explode(' ', $this->greek);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u932?\u945?\u967?\u943?\u963?\u964?\u951?", $convertedWords);
    }

    public function testForConvertingHebrewWordInString(): void
    {
        $words = explode(' ', $this->hebrew);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u1500?\u1499?\u1503?", $convertedWords);
    }

    public function testForConvertingHindiWordInString(): void
    {
        $words = explode(' ', $this->hindi);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u2315?\u2359?\u2367?\u2351?\u2379?\u2306?", $convertedWords);
    }

    public function testForConvertingHungarianWordInString(): void
    {
        $words = explode(' ', $this->hungarian);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("b\u369?v\u246?s", $convertedWords);
    }

    public function testForConvertingIcelandicWordInString(): void
    {
        $words = explode(' ', $this->icelandic);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("K\u230?mi", $convertedWords);
    }

    public function testForConvertingIgboWordInString(): void
    {
        $words = explode(' ', $this->igbo);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("he\u8217?l\u8217?\u7909?j\u7885?", $convertedWords);
    }

    public function testForConvertingIndonesianWordInString(): void
    {
        $words = explode(' ', $this->indonesian);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("Saya", $convertedWords);
    }

    public function testForConvertingIrishWordInString(): void
    {
        $words = explode(' ', $this->irish);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("h\u211?ighe", $convertedWords);
    }

    public function testForConvertingItalianWordInString(): void
    {
        $words = explode(' ', $this->italian);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("Ma", $convertedWords);
    }

    public function testForConvertingJapaneseWordInString(): void
    {
        $words = explode(' ', $this->japanese);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u12356?\u12429?\u12399?\u12395?\u12411?\u12408?\u12392?", $convertedWords);
    }

    public function testForConvertingJavaneseWordInString(): void
    {
        $words = explode(' ', $this->javanese);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u43442?\u43428?\u43413?\u43435?\u43407?\u43464?", $convertedWords);
    }

    public function testForConvertingKoreanWordInString(): void
    {
        $words = explode(' ', $this->korean);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u53412?\u49828?\u51032?", $convertedWords);
    }

    public function testForConvertingLatinWordInString(): void
    {
        $words = explode(' ', $this->latin);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("Sic", $convertedWords);
    }

    public function testForConvertingLatvianWordInString(): void
    {
        $words = explode(' ', $this->latvian);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("Mu\u316?\u311?a", $convertedWords);
    }

    public function testForConvertingLithuanianWordInString(): void
    {
        $words = explode(' ', $this->lithuanian);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u302?linkdama", $convertedWords);
    }

    public function testForConvertingLojbanWordInString(): void
    {
        $words = explode(' ', $this->lojban);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains(".o\u8217?i", $convertedWords);
    }

    public function testForConvertingMacedonianWordInString(): void
    {
        $words = explode(' ', $this->macedonian);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u1029?\u1080?\u1076?\u1072?\u1088?\u1089?\u1082?\u1080?", $convertedWords);
    }

    public function testForConvertingMalayalamWordInString(): void
    {
        $words = explode(' ', $this->malayalam);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u3333?\u3356?\u3381?\u3393?\u3330?", $convertedWords);
    }

    public function testForConvertingMapudungunWordInString(): void
    {
        $words = explode(' ', $this->mapudungun);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u241?izol", $convertedWords);
    }

    public function testForConvertingMongolianWordInString(): void
    {
        $words = explode(' ', $this->mongolian);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u1065?\u1105?\u1090?\u1082?\u1072?\u1085?\u1099?", $convertedWords);
    }

    public function testForConvertingMyanmarWordInString(): void
    {
        $words = explode(' ', $this->myanmar);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u4126?\u4142?\u4127?\u4141?\u4143?\u4128?\u4154?\u4121?\u4158?", $convertedWords);
    }

    public function testForConvertingNorwegianWordInString(): void
    {
        $words = explode(' ', $this->norwegian);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("V\u229?r", $convertedWords);
    }

    public function testForConvertingPolishWordInString(): void
    {
        $words = explode(' ', $this->polish);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("Je\u380?u", $convertedWords);
    }

    public function testForConvertingPortugueseWordInString(): void
    {
        $words = explode(' ', $this->portuguese);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("Lu\u237?s", $convertedWords);
    }

    public function testForConvertingRomanianWordInString(): void
    {
        $words = explode(' ', $this->romanian);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("Muzicolog\u259?", $convertedWords);
    }

    public function testForConvertingRussianWordInString(): void
    {
        $words = explode(' ', $this->russian);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u1095?\u1091?\u1078?\u1072?\u1082?,", $convertedWords);
    }

    public function testForConvertingSanscritWordInString(): void
    {
        $words = explode(' ', $this->sanscrit);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u2326?\u2327?\u2380?\u2328?\u2366?\u2329?\u2330?\u2367?\u2330?\u2381?\u2331?\u2380?\u2332?\u2366?", $convertedWords);
    }

    public function testForConvertingScottishGaelicWordInString(): void
    {
        $words = explode(' ', $this->scottishGaelic);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("C\u232?it-\u217?na", $convertedWords);
    }

    public function testForConvertingSerbianWordInString(): void
    {
        $words = explode(' ', $this->serbian);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u273?a\u269?i\u263?", $convertedWords);
    }

    public function testForConvertingSlovakWordInString(): void
    {
        $words = explode(' ', $this->slovak);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("K\u341?de\u318?", $convertedWords);
    }

    public function testForConvertingSlovenianWordInString(): void
    {
        $words = explode(' ', $this->slovenian);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("ko\u382?u\u353?\u269?ku", $convertedWords);
    }

    public function testForConvertingSpanishWordInString(): void
    {
        $words = explode(' ', $this->spanish);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("pidi\u243?", $convertedWords);
    }

    public function testForConvertingSwedishWordInString(): void
    {
        $words = explode(' ', $this->swedish);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("v\u229?r", $convertedWords);
    }

    public function testForConvertingTagalogWordInString(): void
    {
        $words = explode(' ', $this->tagalog);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u241?ino", $convertedWords);
    }

    public function testForConvertingThaiWordInString(): void
    {
        $words = explode(' ', $this->thai);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u3648?\u3611?\u3655?\u3609?\u3617?\u3609?\u3640?\u3625?\u3618?\u3660?\u3626?\u3640?\u3604?\u3611?\u3619?\u3632?\u3648?\u3626?\u3619?\u3636?\u3600?\u3648?\u3621?\u3636?\u3624?\u3588?\u3640?\u3603?\u3588?\u3656?\u3634?", $convertedWords);
    }

    public function testForConvertingTibetanWordInString(): void
    {
        $words = explode(' ', $this->tibetan);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u3848?", $convertedWords);
    }

    public function testForConvertingTurkishWordInString(): void
    {
        $words = explode(' ', $this->turkish);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("Fahi\u351?", $convertedWords);
    }

    public function testForConvertingUkrainianWordInString(): void
    {
        $words = explode(' ', $this->ukrainian);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u1063?\u1091?\u1108?\u1096?", $convertedWords);
    }

    public function testForConvertingUrduWordInString(): void
    {
        $words = explode(' ', $this->urdu);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u1657?\u1726?\u1606?\u1672?", $convertedWords);
    }

    public function testForConvertingUyghurWordInString(): void
    {
        $words = explode(' ', $this->uyghur);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u1574?\u1575?\u1739?\u1735?", $convertedWords);
    }

    public function testForConvertingYorubaWordInString(): void
    {
        $words = explode(' ', $this->yoruba);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("\u204?w\u242?\u809?f\u224?", $convertedWords);
    }

    public function testForConvertingWelshWordInString(): void
    {
        $words = explode(' ', $this->welsh);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("d\u373?r", $convertedWords);
    }

    public function testForConvertingVietnameseWordInString(): void
    {
        $words = explode(' ', $this->vietnamese);

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedWords = $converter->convertWordsToRtf($words);

        $this->assertContains("ng\u432?\u7901?i", $convertedWords);
    }
}
