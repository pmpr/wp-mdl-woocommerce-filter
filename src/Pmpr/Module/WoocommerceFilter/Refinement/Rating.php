<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc5e38e8ff             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter\Refinement; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Rating extends Element { const ecgwsmyuesewsqom = "\x62\x79\137\162\141\164\x69\156\x67"; public function __construct() { $this->name = self::ecgwsmyuesewsqom; $this->icon = IconInterface::asaomwmaicuoeekg; $this->title = __("\102\171\40\124\151\164\154\145", PR__MDL__WOOCOMMERCE_FILTER); parent::__construct(); } public function msgqcwqsemkmwqss($oyiyuuoguwwaksaa, &$gqgemcmoicmgaqie) { $qqyuqswckkcomeak = (int) $this->kokwyquiqyoaaioc()->oiqmuywqkkmuswuc($this->aakmagwggmkoiiyu(), 0); if ($qqyuqswckkcomeak) { $mwsawgusoeygascy = $qqyuqswckkcomeak; if ($mwsawgusoeygascy > 5) { $mwsawgusoeygascy = 5; } if ($mwsawgusoeygascy === 5) { $giqggecqqikcysgq = 5; } else { $giqggecqqikcysgq = $mwsawgusoeygascy + 1 - 0.001; } $oyiyuuoguwwaksaa[] = [Constants::ascagqcquwgmygkm => "\137\x77\143\x5f\141\x76\x65\162\x61\147\x65\137\x72\x61\x74\151\x6e\147", Constants::squoamkioomemiyi => "\x44\x45\103\x49\x4d\101\x4c", Constants::ciyoccqkiamemcmm => [$mwsawgusoeygascy, $giqggecqqikcysgq], Constants::ykemsyouoqyoaysg => "\x42\105\124\x57\105\x45\x4e"]; } return parent::msgqcwqsemkmwqss($oyiyuuoguwwaksaa, $gqgemcmoicmgaqie); } }
