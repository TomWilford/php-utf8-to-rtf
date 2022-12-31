<?php

namespace Unit\ConvertStringTests;

use Resources\Pangrams;
use Wilf\PhpUtf8ToRtf\CharacterConverter;

final class ConvertStringToRtfTest extends \PHPUnit\Framework\TestCase
{
    use Pangrams;
    public function testForNotConvertingEnglishInString(): void
    {
        $string = explode(' ', $this->english)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("The", $word);
    }

    public function testForConvertingArabicStringToRtf(): void
    {
        $string = explode(' ', $this->arabic)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u1606?\u1589?", $word);
    }

    public function testForConvertingAzeriStringToRtf(): void
    {
        $string = explode(' ', $this->azeri)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("Z\u601?f\u601?r,", $word);
    }

    public function testForConvertingBretonStringToRtf(): void
    {
        $string = explode(' ', $this->breton)[6];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("gwerenno\u249?-ma\u241?,", $word);
    }

    public function testForConvertingBulgarianStringToRtf(): void
    {
        $string = explode(' ', $this->bulgarian)[1];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u1095?\u1091?\u1076?\u1085?\u1072?", $word);
    }

    public function testForConvertingCatalanStringToRtf(): void
    {
        $string = explode(' ', $this->catalan)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u171?D\u243?na", $word);
    }

    public function testForConvertingChineseTraditionalStringToRtf(): void
    {
        $string = explode(' ', $this->chineseTraditional)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u35222?\u37326?\u28961?\u38480?\u24291?\u65292?\u31383?\u22806?\u26377?\u34253?\u22825?", $word);
    }

    public function testForConvertingChineseSimplifiedStringToRtf(): void
    {
        $string = explode(' ', $this->chineseSimplified)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u20013?\u22269?\u26234?\u36896?\u65292?\u24935?\u21450?\u20840?\u29699?", $word);
    }

    public function testForConvertingCzechStringToRtf(): void
    {
        $string = explode(' ', $this->czech)[7];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u250?d\u283?sn\u253?mi", $word);
    }

    public function testForConvertingDanishStringToRtf(): void
    {
        $string = explode(' ', $this->danish)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("H\u248?j", $word);
    }

    public function testForConvertingDzongkhaStringToRtf(): void
    {
        $string = explode(' ', $this->dzongka)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u3944?\u3851?\u3937?\u3954?\u3906?\u3851?\u3921?\u3904?\u3938?\u3851?\u3928?\u3931?\u3962?\u3942?\u3851?\u3939?\u3942?\u3851?\u3936?\u3905?\u4018?\u3956?\u3908?\u3942?\u3851?\u3940?\u3962?\u3942?\u3851?\u3926?\u4019?\u3964?\u3936?\u3954?\u3851?\u3906?\u3919?\u3962?\u3938?\u3854?", $word);
    }

    public function testForConvertingEsperantoStringToRtf(): void
    {
        $string = explode(' ', $this->esperanto)[1];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u265?iu", $word);
    }

    public function testForConvertingEstonianStringToRtf(): void
    {
        $string = explode(' ', $this->estonian)[2];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("t\u353?ellom\u228?ngija-f\u246?ljetonist", $word);
    }

    public function testForConvertingFinnishStringToRtf(): void
    {
        $string = explode(' ', $this->finnish)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("T\u246?rkylempij\u228?vongahdus", $word);
    }

    public function testForConvertingFrenchStringToRtf(): void
    {
        $string = explode(' ', $this->french)[7];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("pr\u233?f\u232?re", $word);
    }

    public function testForConvertingGermanStringToRtf(): void
    {
        $string = explode(' ', $this->german)[7];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("gro\u223?en", $word);
    }

    public function testForConvertingGreekStringToRtf(): void
    {
        $string = explode(' ', $this->greek)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u932?\u945?\u967?\u943?\u963?\u964?\u951?", $word);
    }

    public function testForConvertingHebrewStringToRtf(): void
    {
        $string = explode(' ', $this->hebrew)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u1500?\u1499?\u1503?", $word);
    }

    public function testForConvertingHindiStringToRtf(): void
    {
        $string = explode(' ', $this->hindi)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u2315?\u2359?\u2367?\u2351?\u2379?\u2306?", $word);
    }

    public function testForConvertingHungarianStringToRtf(): void
    {
        $string = explode(' ', $this->hungarian)[10];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("b\u369?v\u246?s", $word);
    }

    public function testForConvertingIcelandicStringToRtf(): void
    {
        $string = explode(' ', $this->icelandic)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("K\u230?mi", $word);
    }

    public function testForConvertingIgboStringToRtf(): void
    {
        $string = explode(' ', $this->igbo)[3];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("he\u8217?l\u8217?\u7909?j\u7885?", $word);
    }

    public function testForConvertingIndonesianStringToRtf(): void
    {
        $string = explode(' ', $this->indonesian)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("Saya", $word);
    }

    public function testForConvertingIrishStringToRtf(): void
    {
        $string = explode(' ', $this->irish)[4];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("h\u211?ighe", $word);
    }

    public function testForConvertingItalianStringToRtf(): void
    {
        $string = explode(' ', $this->italian)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("Ma", $word);
    }

    public function testForConvertingJapaneseStringToRtf(): void
    {
        $string = explode(' ', $this->japanese)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u12356?\u12429?\u12399?\u12395?\u12411?\u12408?\u12392?", $word);
    }

    public function testForConvertingJavaneseStringToRtf(): void
    {
        $string = explode(' ', $this->javanese)[1];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u43442?\u43428?\u43413?\u43435?\u43407?\u43464?", $word);
    }

    public function testForConvertingKoreanStringToRtf(): void
    {
        $string = explode(' ', $this->korean)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u53412?\u49828?\u51032?", $word);
    }

    public function testForConvertingLatinStringToRtf(): void
    {
        $string = explode(' ', $this->latin)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("Sic", $word);
    }

    public function testForConvertingLatvianStringToRtf(): void
    {
        $string = explode(' ', $this->latvian)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("Mu\u316?\u311?a", $word);
    }

    public function testForConvertingLithuanianStringToRtf(): void
    {
        $string = explode(' ', $this->lithuanian)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u302?linkdama", $word);
    }

    public function testForConvertingLojbanStringToRtf(): void
    {
        $string = explode(' ', $this->lojban)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals(".o\u8217?i", $word);
    }

    public function testForConvertingMacedonianStringToRtf(): void
    {
        $string = explode(' ', $this->macedonian)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u1029?\u1080?\u1076?\u1072?\u1088?\u1089?\u1082?\u1080?", $word);
    }

    public function testForConvertingMalayalamStringToRtf(): void
    {
        $string = explode(' ', $this->malayalam)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u3333?\u3356?\u3381?\u3393?\u3330?", $word);
    }

    public function testForConvertingMapudungunStringToRtf(): void
    {
        $string = explode(' ', $this->mapudungun)[3];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u241?izol", $word);
    }

    public function testForConvertingMongolianStringToRtf(): void
    {
        $string = explode(' ', $this->mongolian)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u1065?\u1105?\u1090?\u1082?\u1072?\u1085?\u1099?", $word);
    }

    public function testForConvertingMyanmarStringToRtf(): void
    {
        $string = explode(' ', $this->myanmar)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u4126?\u4142?\u4127?\u4141?\u4143?\u4128?\u4154?\u4121?\u4158?", $word);
    }

    public function testForConvertingNorwegianStringToRtf(): void
    {
        $string = explode(' ', $this->norwegian)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("V\u229?r", $word);
    }

    public function testForConvertingPolishStringToRtf(): void
    {
        $string = explode(' ', $this->polish)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("Je\u380?u", $word);
    }

    public function testForConvertingPortugueseStringToRtf(): void
    {
        $string = explode(' ', $this->portuguese)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("Lu\u237?s", $word);
    }

    public function testForConvertingRomanianStringToRtf(): void
    {
        $string = explode(' ', $this->romanian)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("Muzicolog\u259?", $word);
    }

    public function testForConvertingRussianStringToRtf(): void
    {
        $string = explode(' ', $this->russian)[1];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u1095?\u1091?\u1078?\u1072?\u1082?,", $word);
    }

    public function testForConvertingSanscritStringToRtf(): void
    {
        $string = explode(' ', $this->sanscrit)[1];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u2326?\u2327?\u2380?\u2328?\u2366?\u2329?\u2330?\u2367?\u2330?\u2381?\u2331?\u2380?\u2332?\u2366?", $word);
    }

    public function testForConvertingScottishGaelicStringToRtf(): void
    {
        $string = explode(' ', $this->scottishGaelic)[2];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("C\u232?it-\u217?na", $word);
    }

    public function testForConvertingSerbianStringToRtf(): void
    {
        $string = explode(' ', $this->serbian)[1];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u273?a\u269?i\u263?", $word);
    }

    public function testForConvertingSlovakStringToRtf(): void
    {
        $string = explode(' ', $this->slovak)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("K\u341?de\u318?", $word);
    }

    public function testForConvertingSlovenianStringToRtf(): void
    {
        $string = explode(' ', $this->slovenian)[1];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("ko\u382?u\u353?\u269?ku", $word);
    }

    public function testForConvertingSpanishStringToRtf(): void
    {
        $string = explode(' ', $this->spanish)[1];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("pidi\u243?", $word);
    }

    public function testForConvertingSwedishStringToRtf(): void
    {
        $string = explode(' ', $this->swedish)[2];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("v\u229?r", $word);
    }

    public function testForConvertingTagalogStringToRtf(): void
    {
        $string = explode(' ', $this->tagalog)[10];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u241?ino", $word);
    }

    public function testForConvertingThaiStringToRtf(): void
    {
        $string = explode(' ', $this->thai)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u3648?\u3611?\u3655?\u3609?\u3617?\u3609?\u3640?\u3625?\u3618?\u3660?\u3626?\u3640?\u3604?\u3611?\u3619?\u3632?\u3648?\u3626?\u3619?\u3636?\u3600?\u3648?\u3621?\u3636?\u3624?\u3588?\u3640?\u3603?\u3588?\u3656?\u3634?", $word);
    }

    public function testForConvertingTibetanStringToRtf(): void
    {
        $string = explode(' ', $this->tibetan)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u3848?", $word);
    }

    public function testForConvertingTurkishStringToRtf(): void
    {
        $string = explode(' ', $this->turkish)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("Fahi\u351?", $word);
    }

    public function testForConvertingUkrainianStringToRtf(): void
    {
        $string = explode(' ', $this->ukrainian)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u1063?\u1091?\u1108?\u1096?", $word);
    }

    public function testForConvertingUrduStringToRtf(): void
    {
        $string = explode(' ', $this->urdu)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u1657?\u1726?\u1606?\u1672?", $word);
    }

    public function testForConvertingUyghurStringToRtf(): void
    {
        $string = explode(' ', $this->uyghur)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u1574?\u1575?\u1739?\u1735?", $word);
    }

    public function testForConvertingYorubaStringToRtf(): void
    {
        $string = explode(' ', $this->yoruba)[0];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("\u204?w\u242?\u809?f\u224?", $word);
    }

    public function testForConvertingWelshStringToRtf(): void
    {
        $string = explode(' ', $this->welsh)[7];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("d\u373?r", $word);
    }

    public function testForConvertingVietnameseStringToRtf(): void
    {
        $string = explode(' ', $this->vietnamese)[4];

        $converter = new CharacterConverter();
        $word = $converter->convertStringToRtf($string);

        $this->assertEquals("ng\u432?\u7901?i", $word);
    }
}
