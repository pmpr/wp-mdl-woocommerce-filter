<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6606b40897938             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter; class Helper extends Container { public function sacmaiqouaeswkyy($icwicymcioeyeyek = []) : bool { if ($icwicymcioeyeyek) { goto qgegkeomwscwwiuw; } $icwicymcioeyeyek = $this->ioegacqacywgucsc(); qgegkeomwscwwiuw: $umuecysoywoumgwo = false; if (!($icwicymcioeyeyek && $this->oiqmuywqkkmuswuc(self::eigiqicogcmgmgwi, false, $icwicymcioeyeyek))) { goto qmiwsequckckoaei; } $umuecysoywoumgwo = true; qmiwsequckckoaei: return $umuecysoywoumgwo; } public function oisaqgayaackmaai($uusmaiomayssaecw, $icwicymcioeyeyek = null, bool $sscegwueamckwmcy = true) : bool { if ($icwicymcioeyeyek) { goto goeoymmqqqeeoime; } $icwicymcioeyeyek = $this->ioegacqacywgucsc($sscegwueamckwmcy); goeoymmqqqeeoime: return isset($icwicymcioeyeyek[$uusmaiomayssaecw]); } public function oiqmuywqkkmuswuc($uusmaiomayssaecw, $ggauoeuaesiymgee = null, $icwicymcioeyeyek = []) { if ($icwicymcioeyeyek) { goto eiawsoasmscmqswa; } $icwicymcioeyeyek = $this->ioegacqacywgucsc(); eiawsoasmscmqswa: return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function ioegacqacywgucsc(bool $sscegwueamckwmcy = true) { $icwicymcioeyeyek = $_GET; $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($icwicymcioeyeyek, "\147\143\154\151\144"); if (!($icwicymcioeyeyek && is_array($icwicymcioeyeyek))) { goto cuoqqgaygogsmmic; } foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (!(is_string($eqgoocgaqwqcimie) && strpos($eqgoocgaqwqcimie, "\x2c"))) { goto ygkcacsyyckescqs; } $eqgoocgaqwqcimie = explode("\x2c", $eqgoocgaqwqcimie); ygkcacsyyckescqs: $icwicymcioeyeyek = $this->sekkmwqwqwcayiwg($icwicymcioeyeyek, $uusmaiomayssaecw, $eqgoocgaqwqcimie); qmeoaqmsuseueqiy: } ickcmqoiosquugwe: cuoqqgaygogsmmic: if (!$sscegwueamckwmcy) { goto cgewcsueoyaeikgm; } $icwicymcioeyeyek = $this->ocksiywmkyaqseou(self::cgckcqysmyiikaqw . "\x5f\x67\145\164\137\x73\145\x61\162\x63\150\x5f\x64\141\164\x61", $icwicymcioeyeyek); cgewcsueoyaeikgm: return $icwicymcioeyeyek; } public function sekkmwqwqwcayiwg($icwicymcioeyeyek, $uusmaiomayssaecw, $eqgoocgaqwqcimie, bool $iiiycicsyekkaaec = false) { if (is_array($eqgoocgaqwqcimie)) { goto twkmiuomimomscew; } if (!is_string($eqgoocgaqwqcimie)) { goto eyiamcekkgkiawqy; } $eqgoocgaqwqcimie = $this->_escape($eqgoocgaqwqcimie); if (!$iiiycicsyekkaaec) { goto mqccmesakuemceqi; } $eqgoocgaqwqcimie = urlencode($eqgoocgaqwqcimie); mqccmesakuemceqi: eyiamcekkgkiawqy: goto kooskuwkuayiuose; twkmiuomimomscew: foreach ($eqgoocgaqwqcimie as $momcykaoccoymeig => $uiymkeeaukcyqqik) { $eqgoocgaqwqcimie = $this->sekkmwqwqwcayiwg($eqgoocgaqwqcimie, $momcykaoccoymeig, $uiymkeeaukcyqqik, $iiiycicsyekkaaec); $eqgoocgaqwqcimie = $this->ocksiywmkyaqseou("\145\x73\x63\x61\160\x65\137{$uusmaiomayssaecw}\x5f\146\151\x6c\x74\x65\162", $eqgoocgaqwqcimie); igymseewwyiocoug: } sukskmcwsoysiuqu: kooskuwkuayiuose: if (!is_string($uusmaiomayssaecw)) { goto qwcegcuowwgiccos; } $uusmaiomayssaecw = $this->_escape($uusmaiomayssaecw); qwcegcuowwgiccos: $icwicymcioeyeyek[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $icwicymcioeyeyek; } private function _escape($eqgoocgaqwqcimie) { if (!is_string($eqgoocgaqwqcimie)) { goto qcessicwuikwqsis; } $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc(esc_html($eqgoocgaqwqcimie)); qcessicwuikwqsis: return $eqgoocgaqwqcimie; } }
