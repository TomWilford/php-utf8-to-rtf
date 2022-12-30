<?php

namespace Unit\FindAndReplaceTests;

use Resources\Pangrams;

final class FindAndReplaceSimpleStringTest extends \PHPUnit\Framework\TestCase
{
    use Pangrams;
    public function testForNotConvertingSimpleEnglishInString(): void
    {
        $string = $this->english;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("The quick brown fox jumps over the lazy dog!", $convertedString);
    }

    public function testForConvertingSimpleArabicString(): void
    {
        $string = $this->arabic;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{\u1606?\u1589?} {\u1581?\u1603?\u1610?\u1605?} {\u1604?\u1607?} {\u1587?\u1585?} {\u1602?\u1575?\u1591?\u1593?} {\u1608?\u1584?\u1608?} {\u1588?\u1571?\u1606?} {\u1593?\u1592?\u1610?\u1605?} {\u1605?\u1603?\u1578?\u1608?\u1576?} {\u1593?\u1604?\u1609?} {\u1579?\u1608?\u1576?} {\u1571?\u1582?\u1590?\u1585?} {\u1608?\u1605?\u1594?\u1604?\u1601?} {\u1576?\u1580?\u1604?\u1583?} {\u1571?\u1586?\u1585?\u1602?}", $convertedString);
    }

    public function testForConvertingSimpleAzeriString(): void
    {
        $string = $this->azeri;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{Z\u601?f\u601?}r, jaketini {d\u601?} {papa\u287?\u305?n\u305?} da {g\u246?t\u252?}r, bu {ax\u351?}am hava {\u231?}ox soyuq olacaq.", $convertedString);
    }

    public function testForConvertingSimpleBretonString(): void
    {
        $string = $this->breton;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{Yec\u8217?}hed mat Jakez ! Skarzhit ar {gwerenno\u249?}-{ma\u241?}, kavet e vo gwin betek fin ho puhez.", $convertedString);
    }

    public function testForConvertingSimpleBulgarianString(): void
    {
        $string = $this->bulgarian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{\u1040?\u1093?} {\u1095?\u1091?\u1076?\u1085?\u1072?} {\u1073?\u1098?\u1083?\u1075?\u1072?\u1088?\u1089?\u1082?\u1072?} {\u1079?\u1077?\u1084?\u1100?\u1086?}, {\u1087?\u1086?\u1083?\u1102?\u1096?\u1074?\u1072?\u1081?} {\u1094?\u1098?\u1092?\u1090?\u1103?\u1097?\u1080?} {\u1078?\u1080?\u1090?\u1072?}.", $convertedString);
    }

    public function testForConvertingSimpleCatalanString(): void
    {
        $string = $this->catalan;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{\u171?}{D\u243?}na amor que {ser\u224?}s {feli\u231?}!{\u187?}. {Aix\u242?}, {il\u183?}{l\u250?}s company {geni\u252?}t, ja {\u233?}s un {llu\u239?}t {r\u232?}tol {blav\u237?}s {d\u8217?}onze kWh.", $convertedString);
    }

    public function testForConvertingSimpleChineseTraditionalString(): void
    {
        $string = $this->chineseTraditional;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{\u35222?\u37326?\u28961?\u38480?\u24291?\u65292?\u31383?\u22806?\u26377?\u34253?\u22825?}", $convertedString);
    }

    public function testForConvertingSimpleChineseSimplifiedString(): void
    {
        $string = $this->chineseSimplified;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{\u20013?\u22269?\u26234?\u36896?\u65292?\u24935?\u21450?\u20840?\u29699?}", $convertedString);
    }

    public function testForConvertingSimpleCzechString(): void
    {
        $string = $this->czech;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{Nech\u357?} {ji\u382?} {h\u345?\u237?\u353?n\u233?} saxofony {\u271?\u225?bl\u367?} {rozezvu\u269?\u237?} {s\u237?\u328?} {\u250?d\u283?sn\u253?}mi {t\u243?}ny waltzu, tanga a quickstepu.", $convertedString);
    }

    public function testForConvertingSimpleDanishString(): void
    {
        $string = $this->danish;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{H\u248?}j bly gom vandt {fr\u230?}k sexquiz {p\u229?} wc", $convertedString);
    }

    public function testForConvertingSimpleDzongkhaString(): void
    {
        $string = $this->dzongka;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{\u3944?\u3851?\u3937?\u3954?\u3906?\u3851?\u3921?\u3904?\u3938?\u3851?\u3928?\u3931?\u3962?\u3942?\u3851?\u3939?\u3942?\u3851?\u3936?\u3905?\u4018?\u3956?\u3908?\u3942?\u3851?\u3940?\u3962?\u3942?\u3851?\u3926?\u4019?\u3964?\u3936?\u3954?\u3851?\u3906?\u3919?\u3962?\u3938?\u3854?} {\u3925?\u3942?\u3851?\u3938?\u3986?\u3964?\u3939?\u3851?\u3933?\u3851?\u3942?\u3984?\u4017?\u3962?\u3942?\u3851?\u3935?\u3954?\u3939?\u3851?\u3906?\u3923?\u3964?\u3923?\u3851?\u3906?\u3921?\u3964?\u3908?\u3851?\u3939?\u3988?\u3851?\u3926?\u3934?\u3954?\u3923?\u3854?} {\u3910?\u3906?\u3942?\u3851?\u3920?\u3964?\u3906?\u3942?\u3851?\u3904?\u3956?\u3923?\u3851?\u3926?\u4018?\u3939?\u3851?\u3928?\u3930?\u3956?\u3908?\u3942?\u3851?\u3928?\u3962?\u3921?\u3851?\u3936?\u3911?\u3928?\u3851?\u3921?\u3926?\u4017?\u3908?\u3942?\u3928?\u3920?\u3956?\u3942?\u3854?} {\u3928?\u3943?\u3953?\u3851?\u3928?\u3905?\u3942?\u3851?\u3924?\u3936?\u3954?\u3851?\u3906?\u3929?\u3964?\u3851?\u3926?\u3964?\u3851?\u3913?\u3954?\u3921?\u3851?\u3936?\u3906?\u4017?\u3956?\u3938?\u3851?\u3909?\u3954?\u3906?\u3853?}", $convertedString);
    }

    public function testForConvertingSimpleEsperantoString(): void
    {
        $string = $this->esperanto;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("Eble {\u265?}iu {kvaza\u365?}-deca {fu\u349?\u293?ora\u309?}o {\u285?}ojigos homtipon", $convertedString);
    }

    public function testForConvertingSimpleEstonianString(): void
    {
        $string = $this->estonian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{P\u245?}dur Zagrebi {t\u353?ellom\u228?}ngija-{f\u246?}ljetonist Ciqo {k\u252?}lmetas kehvas {garaa\u382?}is", $convertedString);
    }

    public function testForConvertingSimpleFinnishString(): void
    {
        $string = $this->finnish;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{T\u246?rkylempij\u228?}vongahdus", $convertedString);
    }

    public function testForConvertingSimpleFrenchString(): void
    {
        $string = $this->french;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("Voix {ambigu\u235?} {d\u8217?}un {c\u339?}ur qui au {z\u233?}phyr {pr\u233?f\u232?}re les jattes de kiwi", $convertedString);
    }

    public function testForConvertingSimpleGermanString(): void
    {
        $string = $this->german;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("Victor jagt {zw\u246?}lf {Boxk\u228?}mpfer quer {\u252?}ber den {gro\u223?}en Sylter Deich", $convertedString);
    }

    public function testForConvertingSimpleGreekString(): void
    {
        $string = $this->greek;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{\u932?\u945?\u967?\u943?\u963?\u964?\u951?} {\u945?\u955?\u974?\u960?\u951?\u958?} {\u946?\u945?\u966?\u942?\u962?} {\u968?\u951?\u956?\u941?\u957?\u951?} {\u947?\u951?}, {\u948?\u961?\u945?\u963?\u954?\u949?\u955?\u943?\u950?\u949?\u953?} {\u965?\u960?\u941?\u961?} {\u957?\u969?\u952?\u961?\u959?\u973?} {\u954?\u965?\u957?\u972?\u962?} {Takh\u237?st\u232?} {al\u244?p\u232?}x {vaph\u234?}s {ps\u232?m\u233?n\u232?} {g\u232?}, {draskel\u237?}zei {yp\u233?}r {n\u242?thro\u253?} {kyn\u243?}s", $convertedString);
    }

    public function testForConvertingSimpleHebrewString(): void
    {
        $string = $this->hebrew;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{\u1500?\u1499?\u1503?} {\u1495?\u1499?\u1493?} {\u1500?\u1497?} {\u1504?\u1488?\u1501?} {\u1497?\u1492?\u1493?\u1492?} {\u1500?\u1497?}ום {\u1511?\u1493?\u1502?\u1497?} {\u1500?\u1506?\u1491?}, {\u1499?\u1497?} {\u1502?\u1513?\u1508?\u1496?\u1497?} {\u1500?\u1488?\u1505?\u1507?} {\u1490?\u1493?\u1497?\u1501?} {\u1500?\u1511?\u1489?\u1510?\u1497?} {\u1502?\u1502?\u1500?\u1499?\u1493?\u1514?}, {\u1500?\u1513?\u1508?\u1498?} ע{\u1500?\u1497?}הם {\u1494?\u1506?\u1502?\u1497?} {\u1499?\u1500?} {\u1495?\u1512?\u1493?\u1503?} {\u1488?\u1508?\u1497?}, {\u1499?\u1497?} {\u1489?\u1488?\u1513?} {\u1511?\u1504?\u1488?\u1514?\u1497?} תא{\u1499?\u1500?} {\u1499?\u1500?} {\u1492?\u1488?\u1512?\u1509?}", $convertedString);
    }

    public function testForConvertingSimpleHindiString(): void
    {
        $string = $this->hindi;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{\u2315?\u2359?\u2367?\u2351?\u2379?\u2306?} {\u2325?\u2379?} {\u2360?\u2340?\u2366?\u2344?\u2375?} {\u2357?\u2366?\u2354?\u2375?} {\u2342?\u2369?\u2359?\u2381?\u2335?} {\u2352?\u2366?\u2325?\u2381?\u2359?\u2360?\u2379?\u2306?} {\u2325?\u2375?} {\u2352?\u2366?\u2332?\u2366?} {\u2352?\u2366?\u2357?\u2339?} {\u2325?\u2366?} {\u2360?\u2352?\u2381?\u2357?\u2344?\u2366?\u2358?} {\u2325?\u2352?\u2344?\u2375?} {\u2357?\u2366?\u2354?\u2375?} {\u2357?\u2367?\u2359?\u2381?\u2339?\u2369?\u2357?\u2340?\u2366?\u2352?} {\u2349?\u2327?\u2357?\u2366?\u2344?} {\u2358?\u2381?\u2352?\u2368?\u2352?\u2366?\u2350?}, {\u2309?\u2351?\u2379?\u2343?\u2381?\u2351?\u2366?} {\u2325?\u2375?} {\u2350?\u2361?\u2366?\u2352?\u2366?\u2332?} {\u2342?\u2358?\u2352?\u2341?} {\u2325?\u2375?} {\u2348?\u2337?\u2364?\u2375?} {\u2360?\u2346?\u2369?\u2340?\u2381?\u2352?} {\u2341?\u2375?\u2404?}", $convertedString);
    }

    public function testForConvertingSimpleHungarianString(): void
    {
        $string = $this->hungarian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{J\u243?} foxim {\u233?}s don Quijote {h\u250?}szwattos {l\u225?mp\u225?n\u225?}l {\u252?}lve egy {p\u225?}r {b\u369?v\u246?}s {cip\u337?}t k{\u233?}szít.", $convertedString);
    }

    public function testForConvertingSimpleIcelandicString(): void
    {
        $string = $this->icelandic;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{K\u230?}mi {n\u253?} {\u246?}xi {h\u233?}r, ykist {\u254?j\u243?}fum {n\u250?} {b\u230?\u240?}i {v\u237?}l og {\u225?}drepa.", $convertedString);
    }

    public function testForConvertingSimpleIgboString(): void
    {
        $string = $this->igbo;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("Nne, nna, {wep\u7909?} {he\u8217?}{l\u8217?\u7909?}{j\u7885?} dum {n\u8217?}ime {\u7885?z\u7909?z\u7909?} {\u7909?m\u7909?}, vufesi obi nye Chukwu, {\u7749?\u7909?r\u7883?an\u7909?}, {gbak\u7885?\u7885?n\u7909?} kpaa, kwee ya ka o guzoshie ike; {\u7885?} {ghagh\u7883?} ito, {nwap\u7909?}ta ezi agwa.", $convertedString);
    }

    public function testForConvertingSimpleIndonesianString(): void
    {
        $string = $this->indonesian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("Saya lihat foto Hamengkubuwono XV bersama enam zebra purba cantik yang jatuh dari Alquranmu.", $convertedString);
    }

    public function testForConvertingSimpleIrishString(): void
    {
        $string = $this->irish;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{D\u8217?}fhuascail {\u205?}osa {\u218?}rmhac na {h\u211?}ighe Beannaithe {p\u243?}r {\u201?}ava agus {\u193?}dhaimh", $convertedString);
    }

    public function testForConvertingSimpleItalianString(): void
    {
        $string = $this->italian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("Ma la volpe, col suo balzo, ha raggiunto il quieto Fido.", $convertedString);
    }

    public function testForConvertingSimpleJapaneseString(): void
    {
        $string = $this->japanese;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{\u12356?\u12429?\u12399?\u12395?\u12411?\u12408?\u12392?} {\u12385?\u12426?\u12396?\u12427?\u12434?} {\u12431?\u12363?\u12424?\u12383?\u12428?\u12381?} {\u12388?\u12397?\u12394?\u12425?\u12416?} {\u12358?\u12432?\u12398?\u12362?\u12367?\u12420?\u12414?} {\u12369?\u12405?\u12371?\u12360?\u12390?} {\u12354?\u12373?\u12365?\u12422?\u12417?\u12415?\u12375?} {\u12433?\u12402?\u12418?\u12379?\u12377?\u65288?\u12435?\u65289?}", $convertedString);
    }

    public function testForConvertingSimpleJavaneseString(): void
    {
        $string = $this->javanese;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{\u43467?} {\u43442?\u43428?\u43413?\u43435?\u43407?\u43464?} {\u43426?\u43424?\u43441?\u43438?\u43437?\u43464?} {\u43429?\u43421?\u43415?\u43434?\u43418?\u43464?} {\u43433?\u43410?\u43431?\u43419?\u43412?\u43465?}", $convertedString);
    }

    public function testForConvertingSimpleKoreanString(): void
    {
        $string = $this->korean;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{\u53412?\u49828?\u51032?} {\u44256?\u50976?\u51312?\u44148?\u51008?} {\u51077?\u49696?\u45180?\u47532?} {\u47564?\u45208?\u50556?} {\u54616?\u44256?} {\u53945?\u48324?\u54620?} {\u44592?\u49696?\u51008?} {\u54596?\u50836?\u52824?} {\u50506?\u45796?}.", $convertedString);
    }

    public function testForConvertingSimpleLatinString(): void
    {
        $string = $this->latin;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("Sic fugiens, dux, zelotypos, quam Karus haberis.", $convertedString);
    }

    public function testForConvertingSimpleLatvianString(): void
    {
        $string = $this->latvian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{Mu\u316?\u311?}a hipiji {m\u275?\u291?}ina {br\u299?}vi {nogar\u353?}ot {celof\u257?}na {\u382?\u326?audz\u275?j\u269?\u363?}sku.", $convertedString);
    }

    public function testForConvertingSimpleLithuanianString(): void
    {
        $string = $this->lithuanian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{\u302?}linkdama fechtuotojo {\u353?}paga {sublyk\u269?}iojusi {pragr\u281?\u382?\u279?} {apval\u371?} {arb\u363?z\u261?}", $convertedString);
    }

    public function testForConvertingSimpleLojbanString(): void
    {
        $string = $this->lojban;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals(".{o\u8217?}i mu xagji sofybakni cu zvati le purdi", $convertedString);
    }

    public function testForConvertingSimpleMacedonianString(): void
    {
        $string = $this->macedonian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{\u1029?\u1080?\u1076?\u1072?\u1088?\u1089?\u1082?\u1080?} {\u1087?\u1077?\u1112?\u1079?\u1072?\u1078?}: {\u1096?\u1091?\u1075?\u1072?\u1074?} {\u1073?\u1080?\u1083?\u1084?\u1077?\u1079?} {\u1089?\u1086?} {\u1095?\u1091?\u1076?\u1077?\u1114?\u1077?} {\u1119?\u1074?\u1072?\u1082?\u1072?} {\u1116?\u1086?\u1092?\u1090?\u1077?} {\u1080?} {\u1082?\u1077?\u1113?} {\u1085?\u1072?} {\u1090?\u1091?\u1107?} {\u1094?\u1077?\u1093?}.", $convertedString);
    }

    public function testForConvertingSimpleMalayalamString(): void
    {
        $string = $this->malayalam;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{\u3333?\u3356?\u3381?\u3393?\u3330?} {\u3334?\u3368?\u3375?\u3393?\u3330?} {\u3344?\u3376?\u3390?\u3381?\u3364?\u3381?\u3393?\u3330?} {\u3351?\u3376?\u3393?\u3361?\u3368?\u3393?\u3330?} {\u3349?\u3360?\u3403?\u3376?} {\u3384?\u3405?\u3381?\u3376?\u3330?} {\u3370?\u3402?\u3380?\u3391?\u3349?\u3405?\u3349?\u3398?} {\u3385?\u3390?\u3376?\u3381?\u3393?\u3330?} {\u3346?\u3362?\u3405?\u3375?\u3390?\u3363?\u3381?\u3393?\u3330?} {\u3371?\u3390?\u3378?\u3364?\u3405?\u3364?\u3391?\u3378?\u3405?\u8205?} {\u3374?\u3358?\u3405?\u3358?\u3379?\u3393?\u3330?} {\u3336?\u3377?\u3368?\u3405?\u8205?} {\u3349?\u3399?\u3382?\u3364?\u3405?\u3364?\u3391?\u3378?\u3405?\u8205?} {\u3348?\u3383?\u3367?} {\u3342?\u3363?\u3405?\u3363?\u3375?\u3393?\u3374?\u3390?\u3375?\u3391?} {\u3339?\u3364?\u3393?\u3374?\u3364?\u3391?\u3375?\u3393?\u3330?} {\u3333?\u3368?\u3352?\u3375?\u3393?\u3330?} {\u3373?\u3394?\u3368?\u3390?\u3365?\u3375?\u3393?\u3374?\u3390?\u3375?} {\u3337?\u3374?} {\u3366?\u3393?\u3331?\u3350?\u3355?\u3381?\u3391?\u3375?\u3403?\u3359?\u3398?} {\u3335?\u3359?\u3364?\u3393?} {\u3370?\u3390?\u3366?\u3330?} {\u3343?\u3368?\u3405?\u3364?\u3391?} {\u3353?\u3405?\u3375?\u3399?\u3375?\u3390?\u3366?\u3395?\u3382?\u3330?} {\u3368?\u3391?\u3376?\u3405?\u8205?\u3357?\u3376?\u3391?\u3375?\u3391?\u3378?\u3398?} {\u3354?\u3391?\u3377?\u3405?\u3377?\u3378?\u3349?\u3379?\u3398?} {\u3347?\u3374?\u3368?\u3391?\u3349?\u3405?\u3349?\u3393?\u3374?\u3405?\u3370?\u3403?\u3379?\u3405?\u8205?} {\u3372?\u3390?\u8205?\u3378?\u3375?\u3393?\u3359?\u3398?} {\u3349?\u3363?\u3405?\u8205?\u3349?\u3379?\u3391?\u3378?\u3405?\u8205?} {\u3368?\u3392?\u3376?\u3405?\u8205?} {\u3338?\u3376?\u3405?\u8205?\u3368?\u3405?\u3368?\u3393?} {\u3381?\u3391?\u3353?\u3405?\u3353?\u3391?}.", $convertedString);
    }

    public function testForConvertingSimpleMapudungunString(): void
    {
        $string = $this->mapudungun;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("Gvxam mincetu apocikvyeh: {\u241?}izol ce mamvj ka raq kuse bafkeh mew", $convertedString);
    }

    public function testForConvertingSimpleMongolianString(): void
    {
        $string = $this->mongolian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{\u1065?\u1105?\u1090?\u1082?\u1072?\u1085?\u1099?} {\u1092?\u1077?\u1088?\u1084?\u1076?} {\u1087?\u1080?\u1081?\u1096?\u1080?\u1085?} {\u1094?\u1091?\u1074?\u1098?\u1103?}. {\u1041?\u1257?\u1075?\u1078?} {\u1079?\u1086?\u1075?\u1089?\u1095?} {\u1093?\u1101?\u1083?\u1100?\u1102?\u1199?}.", $convertedString);
    }

    public function testForConvertingSimpleMyanmarString(): void
    {
        $string = $this->myanmar;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{\u4126?\u4142?\u4127?\u4141?\u4143?\u4128?\u4154?\u4121?\u4158?} {\u4105?\u4140?\u4111?\u4154?\u4096?\u4156?\u4142?\u4152?\u4123?\u4158?\u4100?\u4154?\u4126?\u4106?\u4154?} {\u4129?\u4140?\u4122?\u4143?\u4125?\u4109?\u4153?\u4110?\u4116?\u4102?\u4145?\u4152?\u4106?\u4157?\u4158?\u4116?\u4154?\u4152?\u4101?\u4140?\u4096?\u4141?\u4143?} {\u4103?\u4124?\u4157?\u4116?\u4154?\u4104?\u4145?\u4152?\u4120?\u4145?\u4152?\u4119?\u4140?\u4114?\u4150?\u4117?\u4100?\u4154?\u4113?\u4096?\u4154?} {\u4129?\u4115?\u4141?\u4107?\u4153?\u4108?\u4140?\u4116?\u4154?\u4124?\u4155?\u4096?\u4154?} {\u4098?\u4099?\u4116?\u4111?\u4118?\u4112?\u4154?\u4097?\u4146?\u4151?\u4126?\u4106?\u4154?\u4171?}", $convertedString);
    }

    public function testForConvertingSimpleNorwegianString(): void
    {
        $string = $this->norwegian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{V\u229?}r {s\u230?}re Zulu fra {bade\u248?}ya spilte jo whist og quickstep i min taxi.", $convertedString);
    }

    public function testForConvertingSimplePolishString(): void
    {
        $string = $this->polish;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{Je\u380?}u {kl\u261?}tw, {sp\u322?\u243?d\u378?} Finom {cz\u281?\u347?\u263?} gry {ha\u324?}b!", $convertedString);
    }

    public function testForConvertingSimplePortugueseString(): void
    {
        $string = $this->portuguese;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{Lu\u237?}s {arg\u252?}ia {\u224?} {J\u250?}lia que {\u171?}{bra\u231?\u245?}es, {f\u233?}, {ch\u225?}, {\u243?}xido, {p\u244?}r, {z\u226?ng\u227?o\u187?} eram palavras do {portugu\u234?}s.", $convertedString);
    }

    public function testForConvertingSimpleRomanianString(): void
    {
        $string = $this->romanian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{Muzicolog\u259?} {\u238?}n bej {v\u226?}nd whisky {\u537?}i tequila, {pre\u539?} fix.", $convertedString);
    }

    public function testForConvertingSimpleRussianString(): void
    {
        $string = $this->russian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{\u1069?\u1093?}, {\u1095?\u1091?\u1078?\u1072?\u1082?}, {\u1086?\u1073?\u1097?\u1080?\u1081?} {\u1089?\u1098?\u1105?\u1084?} {\u1094?\u1077?\u1085?} {\u1096?\u1083?\u1103?\u1087?} ({\u1102?\u1092?\u1090?\u1100?}) {\u8211?} {\u1074?\u1076?\u1088?\u1099?\u1079?\u1075?}!", $convertedString);
    }

    public function testForConvertingSimpleSanscritString(): void
    {
        $string = $this->sanscrit;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{\u2325?\u2307?} {\u2326?\u2327?\u2380?\u2328?\u2366?\u2329?\u2330?\u2367?\u2330?\u2381?\u2331?\u2380?\u2332?\u2366?} {\u2333?\u2366?\u2334?\u2381?\u2332?\u2381?\u2334?\u2379?\u2365?\u2335?\u2380?\u2336?\u2368?\u2337?\u2337?\u2339?\u2381?\u2338?\u2339?\u2307?\u2404?} {\u2340?\u2341?\u2379?\u2342?\u2343?\u2368?\u2344?\u2381?} {\u2346?\u2347?\u2352?\u2381?\u2348?\u2366?\u2349?\u2368?\u2352?\u2381?\u2350?\u2351?\u2379?\u2365?\u2352?\u2367?\u2354?\u2381?\u2357?\u2366?\u2358?\u2367?\u2359?\u2366?\u2306?} {\u2360?\u2361?\u2307?\u2404?\u2404?}", $convertedString);
    }

    public function testForConvertingSimpleScottishGaelicString(): void
    {
        $string = $this->scottishGaelic;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("Mus {d\u8217?}{fh\u224?}g {C\u232?}it-{\u217?}na {r\u242?}p {\u204?} le ob.", $convertedString);
    }

    public function testForConvertingSimpleSerbianString(): void
    {
        $string = $this->serbian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("Gojazni {\u273?a\u269?i\u263?} s biciklom {dr\u382?}i hmelj i finu vatu u {d\u382?}epu {no\u353?}nje.", $convertedString);
    }

    public function testForConvertingSimpleSlovakString(): void
    {
        $string = $this->slovak;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{K\u341?de\u318?} {\u353?\u357?astn\u253?}ch {\u271?at\u318?}ov {u\u269?\u237?} pri {\u250?st\u237?} {V\u225?}hu {m\u314?}kveho {ko\u328?}a {obhr\u253?za\u357?} {k\u244?}ru a {\u382?ra\u357?} {\u269?erstv\u233?} {m\u228?}so.", $convertedString);
    }

    public function testForConvertingSimpleSlovenianString(): void
    {
        $string = $this->slovenian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("V {ko\u382?u\u353?\u269?}ku hudobnega fanta stopiclja mizar.", $convertedString);
    }

    public function testForConvertingSimpleSpanishString(): void
    {
        $string = $this->spanish;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{Benjam\u237?}n {pidi\u243?} una bebida de kiwi y fresa; {No\u233?}, sin {verg\u252?}enza, la {m\u225?}s exquisita {champa\u241?}a del {men\u250?}.", $convertedString);
    }

    public function testForConvertingSimpleSwedishString(): void
    {
        $string = $this->swedish;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("Yxskaftbud, ge {v\u229?}r WC-{zonm\u246?} IQ-{hj\u228?}lp.", $convertedString);
    }

    public function testForConvertingSimpleTagalogString(): void
    {
        $string = $this->tagalog;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("Ang bawat rehistradong kalahok sa patimpalak ay umaasang magantimpalaan ng {\u241?}ino", $convertedString);
    }

    public function testForConvertingSimpleThaiString(): void
    {
        $string = $this->thai;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{\u3648?\u3611?\u3655?\u3609?\u3617?\u3609?\u3640?\u3625?\u3618?\u3660?\u3626?\u3640?\u3604?\u3611?\u3619?\u3632?\u3648?\u3626?\u3619?\u3636?\u3600?\u3648?\u3621?\u3636?\u3624?\u3588?\u3640?\u3603?\u3588?\u3656?\u3634?} {\u3585?\u3623?\u3656?\u3634?\u3610?\u3619?\u3619?\u3604?\u3634?\u3613?\u3641?\u3591?\u3626?\u3633?\u3605?\u3623?\u3660?\u3648?\u3604?\u3619?\u3633?\u3592?\u3593?\u3634?\u3609?} {\u3592?\u3591?\u3613?\u3656?\u3634?\u3615?\u3633?\u3609?\u3614?\u3633?\u3602?\u3609?\u3634?\u3623?\u3636?\u3594?\u3634?\u3585?\u3634?\u3619?} {\u3629?\u3618?\u3656?\u3634?\u3621?\u3657?\u3634?\u3591?\u3612?\u3621?\u3634?\u3597?\u3620?\u3653?\u3648?\u3586?\u3656?\u3609?\u3590?\u3656?\u3634?\u3610?\u3637?\u3601?\u3634?\u3651?\u3588?\u3619?} {\u3652?\u3617?\u3656?\u3606?\u3639?\u3629?\u3650?\u3607?\u3625?\u3650?\u3585?\u3619?\u3608?\u3649?\u3594?\u3656?\u3591?\u3595?\u3633?\u3604?\u3630?\u3638?\u3604?\u3630?\u3633?\u3604?\u3604?\u3656?\u3634?} {\u3627?\u3633?\u3604?\u3629?\u3616?\u3633?\u3618?\u3648?\u3627?\u3617?\u3639?\u3629?\u3609?\u3585?\u3637?\u3628?\u3634?\u3629?\u3633?\u3594?\u3596?\u3634?\u3626?\u3633?\u3618?} {\u3611?\u3599?\u3636?\u3610?\u3633?\u3605?\u3636?\u3611?\u3619?\u3632?\u3614?\u3620?\u3605?\u3636?\u3585?\u3598?\u3585?\u3635?\u3627?\u3609?\u3604?\u3651?\u3592?} {\u3614?\u3641?\u3604?\u3592?\u3634?\u3651?\u3627?\u3657?\u3592?\u3658?\u3632?\u3654?} {\u3592?\u3659?\u3634?\u3654?} {\u3609?\u3656?\u3634?\u3615?\u3633?\u3591?\u3648?\u3629?\u3618?\u3631?}", $convertedString);
    }

    public function testForConvertingSimpleTibetanString(): void
    {
        $string = $this->tibetan;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{\u3848?} {\u3921?\u3904?\u3938?\u3851?\u3928?\u3931?\u3962?\u3942?\u3851?\u3944?\u3851?\u3937?\u3954?\u3906?\u3851?\u3939?\u3942?\u3851?\u3936?\u3905?\u4018?\u3956?\u3908?\u3942?\u3851?\u3937?\u3962?\u3851?\u3940?\u3962?\u3942?\u3851?\u3906?\u3919?\u3962?\u3938?\u3853?} {\u3853?\u3925?\u3942?\u3851?\u3938?\u3986?\u3964?\u3939?\u3851?\u3933?\u3851?\u3942?\u3984?\u4017?\u3962?\u3942?\u3851?\u3935?\u3954?\u3939?\u3851?\u3906?\u3923?\u3964?\u3923?\u3851?\u3906?\u3921?\u3964?\u3908?\u3851?\u3939?\u3988?\u3851?\u3926?\u3934?\u3954?\u3923?\u3853?} {\u3853?\u3910?\u3906?\u3942?\u3851?\u3920?\u3964?\u3906?\u3942?\u3851?\u3904?\u3956?\u3923?\u3851?\u3926?\u4018?\u3939?\u3851?\u3928?\u3930?\u3956?\u3908?\u3942?\u3851?\u3928?\u3962?\u3921?\u3851?\u3936?\u3911?\u3928?\u3851?\u3926?\u4017?\u3908?\u3942?\u3851?\u3928?\u3920?\u3956?\u3942?\u3853?} {\u3853?\u3928?\u3851?\u3943?\u3953?\u3851?\u3928?\u3905?\u3942?\u3851?\u3924?\u3936?\u3954?\u3851?\u3906?\u3929?\u3964?\u3851?\u3926?\u3964?\u3851?\u3913?\u3954?\u3921?\u3851?\u3906?\u4017?\u3956?\u3938?\u3851?\u3909?\u3954?\u3906?\u3853?}", $convertedString);
    }

    public function testForConvertingSimpleTurkishString(): void
    {
        $string = $this->turkish;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{Fahi\u351?} bluz {g\u252?}vencesi {ya\u287?d\u305?}rma projesi {\u231?\u246?kt\u252?}.", $convertedString);
    }

    public function testForConvertingSimpleUkrainianString(): void
    {
        $string = $this->ukrainian;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{\u1063?\u1091?\u1108?\u1096?} {\u1111?\u1093?}, {\u1076?\u1086?\u1094?\u1102?}, {\u1075?\u1072?}? {\u1050?\u1091?\u1084?\u1077?\u1076?\u1085?\u1072?} {\u1078?} {\u1090?\u1080?}, {\u1087?\u1088?\u1086?\u1097?\u1072?\u1081?\u1089?\u1103?} {\u1073?\u1077?\u1079?} {\u1169?\u1086?\u1083?\u1100?\u1092?\u1110?\u1074?}!", $convertedString);
    }

    /**
    Fail
     */
    public function testForConvertingSimpleUrduString(): void
    {
        $string = $this->urdu;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{\u1657?\u1726?\u1606?\u1672?} {\u1605?\u1740?\u1722?\u1548?} {\u1575?\u1740?\u1705?} {\u1602?\u1581?\u1591?} {\u1586?\u1583?\u1729?} {\u1711?\u1575?\u1572?\u1722?} {\u1587?\u1746?} {\u1711?\u1584?\u1585?\u1578?\u1746?} {\u1608?\u1602?\u1578?} {\u1575?\u1740?\u1705?} {\u1670?\u1681?\u1670?\u1681?\u1746?\u1548?} {\u1576?\u1575?\u1571?\u1579?\u1585?} {\u1608?} {\u1601?\u1575?\u1585?\u1594?} {\u1588?\u1582?\u1589?} {\u1705?\u1608?} {\u1576?\u1593?\u1590?} {\u1580?\u1604?} {\u1662?\u1585?\u1740?} {\u1606?\u1605?\u1575?} {\u1575?\u1688?\u1583?\u1729?\u1746?} {\u1606?\u1592?\u1585?} {\u1570?\u1574?\u1746?\u1748?}", $convertedString);
    }

    public function testForConvertingSimpleUyghurString(): void
    {
        $string = $this->uyghur;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{\u1574?\u1575?\u1739?\u1735?} {\u1576?\u1609?\u1585?} {\u1580?\u1736?\u1662?} {\u1582?\u1608?\u1585?\u1575?\u1586?} {\u1601?\u1585?\u1575?\u1606?\u1587?\u1609?\u1610?\u1749?\u1606?\u1609?\u1709?} {\u1662?\u1575?\u1585?\u1609?\u1688?} {\u1588?\u1749?\u1726?\u1585?\u1609?\u1711?\u1749?} {\u1610?\u1744?\u1602?\u1609?\u1606?} {\u1578?\u1575?\u1594?\u1602?\u1575?} {\u1603?\u1734?\u1670?\u1749?\u1604?\u1605?\u1609?\u1583?\u1609?}.", $convertedString);
    }

    public function testForConvertingSimpleYorubaString(): void
    {
        $string = $this->yoruba;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{\u204?w\u242?\u809?}{f\u224?} {\u324?} {y\u242?\u809?} {s\u233?}ji {t\u243?} {gboj\u250?m\u243?\u809?}, {\u243?} {h\u224?}n {p\u225?k\u224?np\u242?\u809?} gan-an {nis\u809?\u233?\u809?} {r\u232?\u809?} b{\u243?} {d\u242?\u809?}la.", $convertedString);
    }

    public function testForConvertingSimpleWelshString(): void
    {
        $string = $this->welsh;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("Parciais fy jac codi baw hud llawn {d\u373?}r ger {t\u375?} Mabon.", $convertedString);
    }

    /**
    Fail
     */
    public function testForConvertingSimpleVietnameseString(): void
    {
        $string = $this->vietnamese;

        $converter = new \Wilf\PhpUtf8ToRtf\CharacterConverter();
        $convertedString = $converter->findAndReplace($string);

        $this->assertEquals("{Tr\u259?}m {n\u259?}m trong {c\u245?}i {ng\u432?\u7901?}i ta, {ch\u7919?} {t\u224?}i {ch\u7919?} {ph\u7853?}n {kh\u233?}o {l\u224?} {gh\u233?}t nhau. {Tr\u7843?}i qua {m\u7897?}t {cu\u7897?}c {b\u7875?} {d\u226?}u, {nh\u7919?}ng {\u273?i\u7873?}u {tr\u244?}ng {th\u7845?}y {m\u224?} {\u273?}au {\u273?\u7899?}n {l\u242?}ng. {L\u7841?} {g\u236?} {b\u7881?} {s\u7855?}c {t\u432?} phong, {tr\u7901?}i xanh quen {v\u7899?}i {m\u225?} {h\u7891?}ng {\u273?\u225?}nh ghen.", $convertedString);
    }
}
