<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6241d618a3135             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter\Refinement; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\WoocommerceFilter\Setting; use WP_Query; class OnSale extends Element { const isasoemkymwoiqem = "\x6f\156\x5f\x73\x61\x6c\x65"; public function __construct() { $this->name = self::isasoemkymwoiqem; $this->type = self::semqugiuwygamias; $this->side = true; $this->title = __("\117\156\40\x53\x61\154\x65", PR__MDL__WOOCOMMERCE_FILTER); $this->description = __("\117\156\x20\163\x61\154\x65\x20\143\x68\145\x63\x6b\142\157\170\x20\x69\156\x20\163\145\141\162\x63\150\40\x66\157\x72\155\x20\x77\x68\x65\x6e\x20\151\x74\x27\x73\40\x6e\x65\x63\145\x73\x73\x61\162\x79\x2e", PR__MDL__WOOCOMMERCE_FILTER); parent::__construct(); } public function msgqcwqsemkmwqss($oyiyuuoguwwaksaa, &$gqgemcmoicmgaqie) { $ccouywuicsaqmais = (bool) $this->caokeucsksukesyo()->oiqmuywqkkmuswuc($this->aakmagwggmkoiiyu(), false); if (!$ccouywuicsaqmais) { goto iuuuususuuuaieem; } $eqgoocgaqwqcimie = array_merge([0], DecoratorWoocommerce::kwoeqqasyqusgmaw()); if ($gqgemcmoicmgaqie instanceof WP_Query) { goto uykousayyomcaeaa; } if (!is_array($gqgemcmoicmgaqie)) { goto ucqmumuygcywwqma; } $gqgemcmoicmgaqie[self::eqomgewoayseioos] = $eqgoocgaqwqcimie; ucqmumuygcywwqma: goto uimeeckqksqeekqq; uykousayyomcaeaa: $gqgemcmoicmgaqie->set(self::eqomgewoayseioos, $eqgoocgaqwqcimie); uimeeckqksqeekqq: iuuuususuuuaieem: return parent::msgqcwqsemkmwqss($oyiyuuoguwwaksaa, $gqgemcmoicmgaqie); } public function yyiecgiosaoeeygg() : array { return [self::qgqyauaqwqmqseim => IconFontawesomeInterface::usaocmsseuquaqsu, self::ymckmcsiymwqucoq => [Setting::wcwmusaouiqaqeww(self::isasoemkymwoiqem . self::kouiwaoasqgwksas, __("\x45\156\141\x62\154\x65", PR__MDL__WOOCOMMERCE_FILTER), __("\123\x68\157\167\40\117\156\40\163\141\x6c\145\40\157\x6e\x6c\x79\x20\143\x68\145\x63\153\x62\157\170\40\x69\x6e\x73\x69\144\145\x20\x66\x69\154\164\x65\x72\x20\163\145\x61\x72\143\x68\40\146\157\x72\x6d\x2e", PR__MDL__WOOCOMMERCE_FILTER))]]; } }
