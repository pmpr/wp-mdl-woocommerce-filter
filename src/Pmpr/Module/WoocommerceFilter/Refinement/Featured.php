<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6241d618a3135             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter\Refinement; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\WoocommerceFilter\Setting; use WP_Query; class Featured extends Element { const quumiuygmqeaackw = "\x66\145\x61\x74\x75\x72\145\x64"; public function __construct() { $this->name = self::quumiuygmqeaackw; $this->type = self::semqugiuwygamias; $this->side = true; $this->title = __("\102\171\40\106\x65\x61\164\165\162\145\x64", PR__MDL__WOOCOMMERCE_FILTER); $this->description = __("\106\x65\x61\x74\165\x72\145\144\40\x70\162\157\x64\165\x63\164\x73\x20\x63\x68\x65\143\153\x62\x6f\x78\40\x69\x6e\40\163\145\x61\x72\x63\x68\40\x66\x6f\162\155\x20\167\150\x65\156\40\151\x74\x27\x73\x20\156\145\x63\145\x73\x73\141\x72\x79\x2e", PR__MDL__WOOCOMMERCE_FILTER); parent::__construct(); } public function msgqcwqsemkmwqss($oyiyuuoguwwaksaa, &$gqgemcmoicmgaqie) { if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto cgyakcqgugqgkqiw; } $useksmwkuswkwcqg = $gqgemcmoicmgaqie->get(self::uouymeyqasaeckso); if (!($useksmwkuswkwcqg === self::oguseymmyyoyaako)) { goto uegouoiuyoqkcscg; } $esygomwiykacwkye = $gqgemcmoicmgaqie->tax_query; if (!($esygomwiykacwkye && isset($esygomwiykacwkye->queries))) { goto mggeqkcksyaymcsa; } $esygomwiykacwkye = $esygomwiykacwkye->queries; $qwyoumwkqwymwyyk = (bool) $this->caokeucsksukesyo()->oiqmuywqkkmuswuc($this->aakmagwggmkoiiyu(), false); if (!$qwyoumwkqwymwyyk) { goto isgwkwacoyimiauk; } $esygomwiykacwkye[] = ["\x74\x61\x78\157\156\157\x6d\171" => "\160\x72\x6f\x64\x75\143\x74\137\166\151\x73\x69\142\x69\x6c\151\x74\x79", "\146\x69\x65\154\144" => self::NAME, "\164\145\x72\x6d\x73" => self::quumiuygmqeaackw]; $gqgemcmoicmgaqie->set("\164\x61\170\x5f\161\165\x65\x72\171", $esygomwiykacwkye); isgwkwacoyimiauk: mggeqkcksyaymcsa: uegouoiuyoqkcscg: cgyakcqgugqgkqiw: return parent::msgqcwqsemkmwqss($oyiyuuoguwwaksaa, $gqgemcmoicmgaqie); } public function yyiecgiosaoeeygg() : array { return [self::qgqyauaqwqmqseim => IconFontawesomeInterface::wusieuoyggoawmuq, self::ymckmcsiymwqucoq => [Setting::wcwmusaouiqaqeww(self::quumiuygmqeaackw . self::kouiwaoasqgwksas, __("\x45\156\141\x62\154\x65", PR__MDL__WOOCOMMERCE_FILTER), __("\x53\150\157\x77\x20\x4f\156\x20\x73\x61\x6c\x65\x20\157\156\154\171\40\x63\x68\145\x63\153\142\x6f\x78\x20\x69\x6e\x73\151\x64\x65\40\x66\151\154\x74\x65\162\x20\163\x65\141\162\x63\150\40\x66\157\162\x6d\56", PR__MDL__WOOCOMMERCE_FILTER))]]; } }
