<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63978cfb03423             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter; use Pmpr\Common\Foundation\Decorator\DecoratorSanitize; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Helper extends Container { public function sacmaiqouaeswkyy($icwicymcioeyeyek = []) : bool { if ($icwicymcioeyeyek) { goto cecuyayqoioasumi; } $icwicymcioeyeyek = $this->ioegacqacywgucsc(); cecuyayqoioasumi: $umuecysoywoumgwo = false; if (!($icwicymcioeyeyek && $this->oiqmuywqkkmuswuc(self::eigiqicogcmgmgwi, false, $icwicymcioeyeyek))) { goto qiaqsassksqiuyae; } $umuecysoywoumgwo = true; qiaqsassksqiuyae: return $umuecysoywoumgwo; } public function oisaqgayaackmaai($uusmaiomayssaecw, $icwicymcioeyeyek = null, bool $sscegwueamckwmcy = true) : bool { if ($icwicymcioeyeyek) { goto qogqewiwmwiwskgm; } $icwicymcioeyeyek = $this->ioegacqacywgucsc($sscegwueamckwmcy); qogqewiwmwiwskgm: return isset($icwicymcioeyeyek[$uusmaiomayssaecw]); } public function oiqmuywqkkmuswuc($uusmaiomayssaecw, $ggauoeuaesiymgee = null, $icwicymcioeyeyek = []) { if ($icwicymcioeyeyek) { goto qgoiooayqmqqsiok; } $icwicymcioeyeyek = $this->ioegacqacywgucsc(); qgoiooayqmqqsiok: return ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function ioegacqacywgucsc(bool $sscegwueamckwmcy = true) { $icwicymcioeyeyek = $_GET; $iiiycicsyekkaaec = false; ManipulateArray::unset($icwicymcioeyeyek, "\147\x63\x6c\151\x64"); if (!($icwicymcioeyeyek && is_array($icwicymcioeyeyek))) { goto csscmcacoikwsecs; } foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (!(is_string($eqgoocgaqwqcimie) && strpos($eqgoocgaqwqcimie, "\54"))) { goto asmecuqiyyswueqe; } $eqgoocgaqwqcimie = explode("\54", $eqgoocgaqwqcimie); asmecuqiyyswueqe: $icwicymcioeyeyek = $this->sekkmwqwqwcayiwg($icwicymcioeyeyek, $uusmaiomayssaecw, $eqgoocgaqwqcimie, $iiiycicsyekkaaec); myoicgcuugciueis: } qwigomakwmyiwkgo: csscmcacoikwsecs: if (!$sscegwueamckwmcy) { goto cuykwgmswkskqkyi; } $icwicymcioeyeyek = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::cgckcqysmyiikaqw . "\x5f\x67\145\x74\x5f\x73\145\x61\162\x63\150\x5f\x64\x61\x74\141"), $icwicymcioeyeyek); cuykwgmswkskqkyi: return $icwicymcioeyeyek; } public function sekkmwqwqwcayiwg($icwicymcioeyeyek, $uusmaiomayssaecw, $eqgoocgaqwqcimie, bool $iiiycicsyekkaaec = false) { if (is_array($eqgoocgaqwqcimie)) { goto kwagwqyusyiyoaqs; } if (!is_string($eqgoocgaqwqcimie)) { goto eqkauqciwewmgeoi; } $eqgoocgaqwqcimie = $this->_escape($eqgoocgaqwqcimie); if (!$iiiycicsyekkaaec) { goto sciwggaeogcoesiu; } $eqgoocgaqwqcimie = urlencode($eqgoocgaqwqcimie); sciwggaeogcoesiu: eqkauqciwewmgeoi: goto yowsmsiyimmimemc; kwagwqyusyiyoaqs: foreach ($eqgoocgaqwqcimie as $momcykaoccoymeig => $uiymkeeaukcyqqik) { $eqgoocgaqwqcimie = $this->sekkmwqwqwcayiwg($eqgoocgaqwqcimie, $momcykaoccoymeig, $eqgoocgaqwqcimie, $iiiycicsyekkaaec); $eqgoocgaqwqcimie = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x65\163\143\x61\x70\145\137{$uusmaiomayssaecw}\x5f\146\151\154\x74\145\162"), $eqgoocgaqwqcimie); mkwskuycuyguqqok: } kuicqywysciceggs: yowsmsiyimmimemc: if (!is_string($uusmaiomayssaecw)) { goto kiqogmwcgcamwiig; } $uusmaiomayssaecw = $this->_escape($uusmaiomayssaecw); kiqogmwcgcamwiig: $icwicymcioeyeyek[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $icwicymcioeyeyek; } private function _escape($eqgoocgaqwqcimie) { if (!is_string($eqgoocgaqwqcimie)) { goto iomcaiwewsawiamu; } $eqgoocgaqwqcimie = DecoratorSanitize::aoeoykwemwaqsikc(esc_html($eqgoocgaqwqcimie)); iomcaiwewsawiamu: return $eqgoocgaqwqcimie; } }
