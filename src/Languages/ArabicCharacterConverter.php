<?php

namespace Wilf\PhpUtf8ToRtf\Languages;

class ArabicCharacterConverter extends \Wilf\PhpUtf8ToRtf\CharacterConverterAbstract
{
    const LANGUAGE = 'arabic';

    protected string $pattern = '#(?:[\x{0600}-\x{06FF}]+(?:\s+[\x{0600}-\x{06FF}]+)*)#u';

    public function convertWordToRtf(string $word): string
    {
        $convertedWord = '';
        $characters = preg_split('//u', $word, null, PREG_SPLIT_NO_EMPTY);
        $characterCount = count($characters);

        if ($characterCount == 1) {
            // Separate form
            $convertedWord = $this->mapCharacterToRTFIdentifier($characters[0]);
        } else {
            $iteration = 0;
            foreach ($characters as $character) {
                $iteration++;

                if ($iteration == 1) {
                    // Final form
                    $convertedWord .= $this->mapFinalCharacterToRtfIdentifier($character);
                } elseif ($iteration == $characterCount) {
                    // Initial form
                    $convertedWord .= $this->mapInitialCharacterToRtfIdentifier($character);
                } else {
                    // Medial form
                    $convertedWord .= $this->mapMedialCharacterToRtfIdentifier($character);
                }
            }
        }

        return $convertedWord;
    }

    public function mapCharacterToRtfIdentifier(string $character): string
    {
        $rtfEscapeType = false;

        // Hexadecimal
        switch ($character) {
            case 'ء':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'c1";
                break;
            case 'غ':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'fd";
                break;
            case 'ظ':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'db";
                break;
            case 'ض':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'d9";
                break;
            case 'ذ':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'d6";
                break;
            case 'ث':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'ce";
                break;
            case 'ت':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'cb";
                break;
            case 'ش':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'ca";
                break;
            case 'ر':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'d4";
                break;
            case 'ق':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'d1";
                break;
            case 'ص':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'de";
                break;
            case 'ف':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'d5";
                break;
            case 'ع':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'dd";
                break;
            case 'س':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'da";
                break;
            case 'ن':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'d3";
                break;
            case 'م':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'e4";
                break;
            case 'ل':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'e3";
                break;
            case 'ك':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'e1";
                break;
            case 'ي':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'ed";
                break;
            case 'ط':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'d8";
                break;
            case 'ح':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'cd";
                break;
            case 'ز':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'d2";
                break;
            case 'و':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'e6";
                break;
            case 'ه':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'e5";
                break;
            case 'د':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'cf";
                break;
            case 'ج':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'cc";
                break;
            case 'ب':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'c8";
                break;
            case 'ا':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'c7";
                break;
            case '،':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'a1";
                break;
            case '؟':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'bf";
                break;
            case '؛':
                $rtfEscapeType = self::RTF_HEXADECIMAL;
                $rtfIdentifier = "\\'ba";
                break;
            default:
                // Unicode
                switch ($character) {
                    case '؍':
                        $rtfEscapeType = self::RTF_UNICODE;
                        $rtfIdentifier = '\\u1549';
                        break;
                    case '؞':
                        $rtfEscapeType = self::RTF_UNICODE;
                        $rtfIdentifier = '\\u1566';
                        break;
                    case '؉':
                        $rtfEscapeType = self::RTF_UNICODE;
                        $rtfIdentifier = '\\u1545';
                        break;
                    case '؊':
                        $rtfEscapeType = self::RTF_UNICODE;
                        $rtfIdentifier = '\\u1546';
                        break;
                    case '١':
                        $rtfEscapeType = self::RTF_UNICODE;
                        $rtfIdentifier = '\\u1633';
                        break;
                    case '٢':
                        $rtfEscapeType = self::RTF_UNICODE;
                        $rtfIdentifier = '\\u1634';
                        break;
                    case '٣':
                        $rtfEscapeType = self::RTF_UNICODE;
                        $rtfIdentifier = '\\u1635';
                        break;
                    case '٤':
                        $rtfEscapeType = self::RTF_UNICODE;
                        $rtfIdentifier = '\\u1636';
                        break;
                    case '٥':
                        $rtfEscapeType = self::RTF_UNICODE;
                        $rtfIdentifier = '\\u1637';
                        break;
                    case '٦':
                        $rtfEscapeType = self::RTF_UNICODE;
                        $rtfIdentifier = '\\u1638';
                        break;
                    case '٧':
                        $rtfEscapeType = self::RTF_UNICODE;
                        $rtfIdentifier = '\\u1639';
                        break;
                    case '٨':
                        $rtfEscapeType = self::RTF_UNICODE;
                        $rtfIdentifier = '\\u1640';
                        break;
                    case '٩':
                        $rtfEscapeType = self::RTF_UNICODE;
                        $rtfIdentifier = '\\u1641';
                        break;
                    case '٫':
                        $rtfEscapeType = self::RTF_UNICODE;
                        $rtfIdentifier = '\\u1643';
                        break;
                    case '٬':
                        $rtfEscapeType = self::RTF_UNICODE;
                        $rtfIdentifier = '\\u1644';
                        break;
                    default:
                        $rtfIdentifier = $character;
                }
        }

        $prefix = '';
        $postfix = '';
        if ($rtfEscapeType == self::RTF_UNICODE) {
            $prefix = '{\\insrsid11888483\\charrsid11888483 ';
            $postfix = "\\'3f}";
        } elseif ($rtfEscapeType == self::RTF_HEXADECIMAL) {
            $prefix = '{\\f31574\\insrsid12286983\\charrsid12286983 ';
            $postfix = '}';
        }

        return $prefix . $rtfIdentifier . $postfix;
    }

    public function mapInitialCharacterToRtfIdentifier(string $character): string
    {
        switch ($character) {
            case 'ا':
                $rtfIdentifier = "\\'c7";
                break;
            case 'بـ':
                $rtfIdentifier = "\\'c8\\'dc";
                break;
            case 'تـ':
                $rtfIdentifier = "\\'ca\\'dc";
                break;
            case 'ثـ':
                $rtfIdentifier = "\\'cb\\'dc";
                break;
            case 'جـ':
                $rtfIdentifier = "\\'cc\\'dc";
                break;
            case 'حـ':
                $rtfIdentifier = "\\'cd\\'dc";
                break;
            case 'خـ':
                $rtfIdentifier = "\\'ce\\'dc";
                break;
            case 'د':
                $rtfIdentifier = "\\'cf";
                break;
            case 'ذ':
                $rtfIdentifier = "\\'d0";
                break;
            case 'ر':
                $rtfIdentifier = "\\'d1";
                break;
            case 'ز':
                $rtfIdentifier = "\\'d2";
                break;
            case 'سـ':
                $rtfIdentifier = "\\'d3\\'dc";
                break;
            case 'شـ':
                $rtfIdentifier = "\\'d4\\'dc";
                break;
            case 'صـ':
                $rtfIdentifier = "\\'d5\\'dc";
                break;
            case 'ضـ':
                $rtfIdentifier = "\\'d6\\'dc";
                break;
            case 'طـ':
                $rtfIdentifier = "\\'d8\\'dc";
                break;
            case 'ظـ':
                $rtfIdentifier = "\\'d9\\'dc";
                break;
            case 'عـ':
                $rtfIdentifier = "\\'da\\'dc";
                break;
            case 'غـ':
                $rtfIdentifier = "\\'db\\'dc";
                break;
            case 'فـ':
                $rtfIdentifier = "\\'dd\\'dc";
                break;
            case 'قـ':
                $rtfIdentifier = "\\'de\\'dc";
                break;
            case 'كـ':
                $rtfIdentifier = "\\'df\\'dc";
                break;
            case 'لـ':
                $rtfIdentifier = "\\'e1\\'dc";
                break;
            case 'مـ':
                $rtfIdentifier = "\\'e3\\'dc";
                break;
            case 'نـ':
                $rtfIdentifier = "\\'e4\\'dc";
                break;
            case 'هـ':
                $rtfIdentifier = "\\'e5\\'dc";
                break;
            case 'ـو':
                $rtfIdentifier = "\\'dc\\'e6";
                break;
            case 'يـ':
                $rtfIdentifier = "\\'ed\\'dc";
                break;
            default:
                $rtfIdentifier = $character;
                break;
        }

        return "{\\rtlch\\fcs1 \\af31507 \\ltrch\\fcs0 \\f31574\\insrsid3087474 " . $rtfIdentifier . "}";
    }

    public function mapFinalCharacterToRtfIdentifier(string $character): string
    {
        switch ($character) {
            case 'ـا':
                $rtfIdentifier = "\\'dc\\'c7";
                break;
            case 'ـب':
                $rtfIdentifier = "\\'dc\\'c8";
                break;
            case 'ـت':
                $rtfIdentifier = "\\'dc\\'ca";
                break;
            case 'ـث':
                $rtfIdentifier = "\\'dc\\'cb";
                break;
            case 'ـج':
                $rtfIdentifier = "\\'dc\\'cc";
                break;
            case 'ـح':
                $rtfIdentifier = "\\'dc\\'cd";
                break;
            case 'ـخ':
                $rtfIdentifier = "\\'dc\\'ce";
                break;
            case 'ـد':
                $rtfIdentifier = "\\'dc\\'cf";
                break;
            case 'ـذ':
                $rtfIdentifier = "\\'dc\\'d0";
                break;
            case 'ـر':
                $rtfIdentifier = "\\'dc\\'d1";
                break;
            case 'ـز':
                $rtfIdentifier = "\\'dc\\'d2";
                break;
            case 'ـس':
                $rtfIdentifier = "\\'dc\\'d3";
                break;
            case 'ـش':
                $rtfIdentifier = "\\'dc\\'d4";
                break;
            case 'ـص':
                $rtfIdentifier = "\\'dc\\'d5";
                break;
            case 'ـض':
                $rtfIdentifier = "\\'dc\\'d6";
                break;
            case 'ـط':
                $rtfIdentifier = "\\'dc\\'d8";
                break;
            case 'ـظ':
                $rtfIdentifier = "\\'dc\\'d9";
                break;
            case 'ـع':
                $rtfIdentifier = "\\'dc\\'da";
                break;
            case 'ـغ':
                $rtfIdentifier = "\\'dc\\'db";
                break;
            case 'ـف':
                $rtfIdentifier = "\\'dc\\'dd";
                break;
            case 'ـق':
                $rtfIdentifier = "\\'dc\\'de";
                break;
            case 'ـك':
                $rtfIdentifier = "\\'dc\\'df";
                break;
            case 'ـل':
                $rtfIdentifier = "\\'dc\\'e1";
                break;
            case 'ـم':
                $rtfIdentifier = "\\'dc\\'e3";
                break;
            case 'ـن':
                $rtfIdentifier = "\\'dc\\'e4";
                break;
            case 'ـه':
                $rtfIdentifier = "\\'dc\\'e5";
                break;
            case 'و':
                $rtfIdentifier = "\\'e6";
                break;
            case 'ـي':
                $rtfIdentifier = "\\'fd";
                break;
            default:
                $rtfIdentifier = $character;
                break;
        }

        return "\\rtlch\\fcs1 \\af31507 \\ltrch\\fcs0 \\f31574\\insrsid3087474 " . $rtfIdentifier . "}";
    }

    public function mapMedialCharacterToRtfIdentifier(string $character): string
    {
        switch ($character) {
            case 'ـا':
                $rtfIdentifier = "\\'dc\\'c7";
                break;
            case 'ـبـ':
                $rtfIdentifier = "\\'dc\\'c8\\'dc";
                break;
            case 'ـتـ':
                $rtfIdentifier = "\\'dc\\'ca\\'dc";
                break;
            case 'ـثـ':
                $rtfIdentifier = "\\'dc\\'cb\\'dc";
                break;
            case 'ـجـ':
                $rtfIdentifier = "\\'dc\\'cc\\'dc";
                break;
            case 'ـحـ':
                $rtfIdentifier = "\\'dc\\'cd\\'dc";
                break;
            case 'ـخـ':
                $rtfIdentifier = "\\'dc\\'ce\\'dc";
                break;
            case 'ـد':
                $rtfIdentifier = "\\'dc\\'cf";
                break;
            case 'ـذ':
                $rtfIdentifier = "\\'dc\\'d0";
                break;
            case 'ـر':
                $rtfIdentifier = "\\'dc\\'d1";
                break;
            case 'ـز':
                $rtfIdentifier = "\\'dc\\'d2";
                break;
            case 'ـسـ':
                $rtfIdentifier = "\\'dc\\'d3\\'dc";
                break;
            case 'ـشـ':
                $rtfIdentifier = "\\'dc\\'d4\\'dc";
                break;
            case 'ـصـ':
                $rtfIdentifier = "\\'dc\\'d5\\'dc";
                break;
            case 'ـضـ':
                $rtfIdentifier = "\\'dc\\'d6\\'dc";
                break;
            case 'ـطـ':
                $rtfIdentifier = "\\'dc\\'d8\\'dc";
                break;
            case 'ـظـ':
                $rtfIdentifier = "\\'dc\\'d9\\'dc";
                break;
            case 'ـعـ':
                $rtfIdentifier = "\\'dc\\'da\\'dc";
                break;
            case 'ـغـ':
                $rtfIdentifier = "\\'dc\\'db\\'dc";
                break;
            case 'ـفـ':
                $rtfIdentifier = "\\'dc\\'dd\\'dc";
                break;
            case 'ـقـ':
                $rtfIdentifier = "\\'dc\\'de\\'dc";
                break;
            case 'ـكـ':
                $rtfIdentifier = "\\'dc\\'df\\'dc";
                break;
            case 'ـلـ':
                $rtfIdentifier = "\\'dc\\'e1\\'dc";
                break;
            case 'ـمـ':
                $rtfIdentifier = "\\'dc\\'e3\\'dc";
                break;
            case 'ـنـ':
                $rtfIdentifier = "\\'dc\\'e4\\'dc";
                break;
            case 'ـهـ':
                $rtfIdentifier = "\\'dc\\'e5\\'dc";
                break;
            case 'ـو':
                $rtfIdentifier = "\\'dc\\'e6";
                break;
            case 'ـيـ':
                $rtfIdentifier = "\\'dc\\'ed\\'dc";
                break;
            default:
                $rtfIdentifier = $character;
                break;
        }

        return "{\\rtlch\\fcs1 \\af31507 \\ltrch\\fcs0 \\f31574\\insrsid3088106 " . $rtfIdentifier . "}";
    }
}
