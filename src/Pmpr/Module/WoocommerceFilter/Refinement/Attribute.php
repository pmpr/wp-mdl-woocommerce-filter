<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63978cfb03423             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter\Refinement; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTerm; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\WoocommerceFilter\Setting; use WP_Query; use WP_Taxonomy; use WP_Term; class Attribute extends Element { const caieqgyycuwysqkc = "\137\x63\165\163\x74\157\x6d\137\x6c\x61\x62\145\154"; protected ?string $taxonomy = null; public function __construct() { $this->name = self::ATTRIBUTE; $this->type = self::ugmwekegkosuuwii; $this->side = true; $this->priority = 0; parent::__construct(); } public function render() { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); if (!$seyqqsmuaiegkeeq) { goto kqksuugcgsyeoayy; } $wekcyscwqougqoam = $this->weysguygiseoukqw(Setting::amoaaekaumwisuic, false); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto ygcsmkuycoagwyou; } $ywwsukisoiguygwm = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); if (!$this->ayseokmqycoqaigc($ywwsukisoiguygwm)) { goto omugkkesagcyagmk; } $muuwyqowekmoqoig = $this->weysguygiseoukqw($ywwsukisoiguygwm . self::smommoywqawkuceg, false); $sikaymiwcesagayc = $this->weysguygiseoukqw($ywwsukisoiguygwm . self::mkikoewciywmikok, "\x49\x44"); $umwqusowiqmyseom = $this->weysguygiseoukqw($ywwsukisoiguygwm . self::uucggqgemiykigga, self::eeccqomoaqsawouy); $omwmuycmeqcqokom = $this->wqiaaecemqgacuww($ywwsukisoiguygwm); $uyuaosigqymaqsaa = ManipulateTerm::ciugwooasaqcywas($ywwsukisoiguygwm, ["\x6f\x72\x64\145\162" => $umwqusowiqmyseom, "\x70\141\x72\x65\x6e\x74" => $omwmuycmeqcqokom, "\x6f\162\x64\x65\162\142\x79" => $sikaymiwcesagayc, "\x68\x69\x64\x65\137\145\x6d\160\164\x79" => $muuwyqowekmoqoig]); if (!$uyuaosigqymaqsaa) { goto mosqsmqimqgqoase; } $ymqmyyeuycgmigyo = self::omumymwakeoiwouc . $ywwsukisoiguygwm; $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->oiqmuywqkkmuswuc($ymqmyyeuycgmigyo); $omwmuycmeqcqokom = null; if (!is_string($eqgoocgaqwqcimie)) { goto kiwqkcaekqqyuegq; } $eqgoocgaqwqcimie = DecoratorTerm::woimamkkeyoyauoa(self::ouywiegeiyuaaawo, $eqgoocgaqwqcimie, $ywwsukisoiguygwm); $omwmuycmeqcqokom = ManipulateTerm::owaokmsayecmasqu($eqgoocgaqwqcimie); kiwqkcaekqqyuegq: foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { if (!$iwewcwusemqaiggk instanceof WP_Term) { goto yqykqysmiquwoasu; } if ($omwmuycmeqcqokom instanceof WP_Term && $omwmuycmeqcqokom->term_id === $iwewcwusemqaiggk->term_id) { goto gimmuoqwckiseaik; } ManipulateArray::set($iwewcwusemqaiggk, [self::iuqumwggccmcuyem => 1]); goto cmqucgoewuyieoyk; gimmuoqwckiseaik: ManipulateArray::set($iwewcwusemqaiggk, [self::iuqumwggccmcuyem => 0]); cmqucgoewuyieoyk: yqykqysmiquwoasu: iqcogmsguwoikame: } quwcqmyokicssyew: $qookweymeqawmcwo = $this->gayqqwwuycceosii($ymqmyyeuycgmigyo); if (!($wekcyscwqougqoam && $eqgoocgaqwqcimie)) { goto ayyweymyuuiauamo; } $uyuaosigqymaqsaa = ManipulateArray::yaeiiwwyckwugsem($uyuaosigqymaqsaa); ayyweymyuuiauamo: $qookweymeqawmcwo[self::NAME] = $ymqmyyeuycgmigyo; $qookweymeqawmcwo[self::qwumqqyuasyskkkc] = $uyuaosigqymaqsaa; $qookweymeqawmcwo[self::qescuiwgsyuikume] = $this->uikgwcuascgeissw($kesssewsiegssiya); $qookweymeqawmcwo["\150\x69\144\x65\137\x65\155\x70\164\171"] = $muuwyqowekmoqoig; $qookweymeqawmcwo["\150\x69\144\x65\137\x63\x68\151\154\144\162\x65\156"] = $this->weysguygiseoukqw(Setting::wsckiussqwckiwae, false); echo $this->iuygowkemiiwqmiw($this->aakmagwggmkoiiyu(), $qookweymeqawmcwo); mosqsmqimqgqoase: omugkkesagcyagmk: ygcsmkuycoagwyou: qsygcycwieukkgwc: } umgaesggesswoaqe: kqksuugcgsyeoayy: } public function gayqqwwuycceosii($ymqmyyeuycgmigyo = null) : array { $qookweymeqawmcwo = parent::gayqqwwuycceosii($ymqmyyeuycgmigyo); $qookweymeqawmcwo["\163\145\154\145\x63\164\x65\x64"] = $this->yuaqmekuuqoyiwoc($ymqmyyeuycgmigyo); return $qookweymeqawmcwo; } public function yuaqmekuuqoyiwoc($ymqmyyeuycgmigyo) : array { $icwicymcioeyeyek = $this->caokeucsksukesyo()->ioegacqacywgucsc(); $ymmmmaiuoocagigk = []; if (!$this->caokeucsksukesyo()->sacmaiqouaeswkyy($icwicymcioeyeyek)) { goto wmmggowmigekyoso; } foreach ($icwicymcioeyeyek as $aaokuekaimigoyue => $uyuaosigqymaqsaa) { if (!($aaokuekaimigoyue !== self::eigiqicogcmgmgwi && $ymqmyyeuycgmigyo === $aaokuekaimigoyue)) { goto ywqgcegomwaiuquc; } if (is_array($uyuaosigqymaqsaa)) { goto miyqyeiwquwsacsm; } $ymmmmaiuoocagigk[] = $this->igaqgiyuucyuyswk($aaokuekaimigoyue, $uyuaosigqymaqsaa); goto eegqyykygiccaoeo; miyqyeiwquwsacsm: foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $ymmmmaiuoocagigk[] = $this->igaqgiyuucyuyswk($aaokuekaimigoyue, $iwewcwusemqaiggk); qkcyqocqqwmqgqww: } ssoucoucsgccekwe: eegqyykygiccaoeo: ywqgcegomwaiuquc: qqewoyookaskiuek: } iggyqogweyosuikc: wmmggowmigekyoso: return $ymmmmaiuoocagigk; } public function igaqgiyuucyuyswk($ymqmyyeuycgmigyo, $iwewcwusemqaiggk) { $kesssewsiegssiya = $this->guecmwukeoqiwyac($ymqmyyeuycgmigyo); $iwewcwusemqaiggk = DecoratorTerm::woimamkkeyoyauoa(self::ouywiegeiyuaaawo, $iwewcwusemqaiggk, $kesssewsiegssiya); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto soqqemyioggmoakg; } $iwewcwusemqaiggk = ["\146\151\154\164\145\x72" => $kesssewsiegssiya, self::ciyoccqkiamemcmm => ManipulateTerm::aqcogscycyycgkuq($iwewcwusemqaiggk), self::qescuiwgsyuikume => ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk), self::NAME => $ymqmyyeuycgmigyo]; soqqemyioggmoakg: return $iwewcwusemqaiggk; } public function qgamykugookscsye(array $uiewakwqscemywuo = []) : array { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); if (!$seyqqsmuaiegkeeq) { goto oqugqwcyomiaaoqu; } $qgeeqyucwycemwmo = [self::imigwosicasiemwu => __("\x52\141\144\x69\157", PR__MDL__WOOCOMMERCE_FILTER), self::SELECT => __("\x44\162\x6f\160\144\x6f\x77\156", PR__MDL__WOOCOMMERCE_FILTER), self::ogmccgakwygeuqao => __("\x4d\165\x6c\164\x69\x20\104\162\x6f\160\x64\157\x77\156", PR__MDL__WOOCOMMERCE_FILTER), self::ecusimegeasyeese => __("\x4d\x75\x6c\164\151\40\x43\x68\145\x63\153\142\x6f\170", PR__MDL__WOOCOMMERCE_FILTER)]; foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto eeqesooyqagwawae; } $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); $pkyyagewkiyckmwy = ManipulateTaxonomy::qcgakseyaikigqco($kesssewsiegssiya); $uiewakwqscemywuo[] = [self::NAME => $ymqmyyeuycgmigyo, self::qgqyauaqwqmqseim => IconInterface::mloqkcqcaykawyqs, self::qescuiwgsyuikume => $pkyyagewkiyckmwy, self::ymckmcsiymwqucoq => [Setting::wcwmusaouiqaqeww($ymqmyyeuycgmigyo . self::kouiwaoasqgwksas, __("\105\x6e\x61\x62\154\x65", PR__MDL__WOOCOMMERCE_FILTER), sprintf(__("\105\x6e\141\142\x6c\x65\x20\45\163\40\x66\151\x6c\x74\x65\x72\56", PR__MDL__WOOCOMMERCE_FILTER), $pkyyagewkiyckmwy)), Setting::ymuegqgyuagyucws($ymqmyyeuycgmigyo . self::caieqgyycuwysqkc, __("\x54\x61\x78\157\x6e\157\x6d\x79\40\x63\x75\x73\x74\x6f\155\40\x6c\x61\x62\145\154", PR__MDL__WOOCOMMERCE_FILTER), sprintf(__("\x46\x6f\162\40\145\x78\141\x6d\x70\x6c\x65\40\x79\x6f\x75\x20\x77\x61\x6e\x74\x20\x74\157\x20\x73\x68\x6f\x77\40\164\151\164\x6c\x65\40\157\146\40\x25\163\x20\x61\163\40\42\115\171\x20\120\x72\157\144\x75\x63\x74\x73\42\56\40\112\165\x73\164\40\x66\x6f\x72\40\x79\157\x75\x72\40\x63\157\x6e\x76\x65\156\x69\145\156\143\145\56", PR__MDL__WOOCOMMERCE_FILTER), $pkyyagewkiyckmwy)), Setting::ckuwucygcwsiawms($ymqmyyeuycgmigyo . self::ssugumysagumgqqm, __("\x46\151\x6c\x74\x65\162\40\124\x79\160\145", PR__MDL__WOOCOMMERCE_FILTER), $qgeeqyucwycemwmo, sprintf(__("\x56\x69\145\167\x20\x6f\x66\x20\164\150\145\x20\45\x73\x20\164\145\x72\155\163\x20\x6f\156\x20\x74\x68\145\x20\x66\x72\157\156\x74\56", PR__MDL__WOOCOMMERCE_FILTER), $pkyyagewkiyckmwy))->eyygsasuqmommkua(self::imigwosicasiemwu), Setting::wcwmusaouiqaqeww($ymqmyyeuycgmigyo . self::smommoywqawkuceg, __("\110\x69\x64\145\40\125\x6e\x75\163\145\144", PR__MDL__WOOCOMMERCE_FILTER), __("\103\150\145\143\153\x20\164\150\x69\x73\40\151\164\145\155\x20\146\157\162\x20\142\x65\x74\164\145\x72\40\160\145\162\146\x6f\162\155\x61\156\143\x65\56", PR__MDL__WOOCOMMERCE_FILTER)), Setting::yyuwuqsiucweeoue($ymqmyyeuycgmigyo . self::mkikoewciywmikok, __("\123\x6f\162\164\40\164\x65\x72\155\163", PR__MDL__WOOCOMMERCE_FILTER), ["\x2d\x31" => __("\104\145\x66\141\165\154\x74", PR__MDL__WOOCOMMERCE_FILTER), self::gouqcwikiiygyasc => __("\x49\104", PR__MDL__WOOCOMMERCE_FILTER), self::NAME => __("\x4e\141\155\145", PR__MDL__WOOCOMMERCE_FILTER), "\156\x75\155\145\x72\151\143" => __("\116\x75\x6d\x65\x72\151\143", PR__MDL__WOOCOMMERCE_FILTER)], __("\x48\157\x77\x20\164\157\x20\x73\x6f\x72\x74\x20\x74\145\x72\x6d\x73\x20\x69\x6e\x73\x69\x64\x65\x20\157\x66\40\x66\151\x6c\164\x65\162\x20\142\x6c\157\143\x6b", PR__MDL__WOOCOMMERCE_FILTER))->mkmssscwmeekwgqo()->eyygsasuqmommkua("\55\x31"), Setting::yyuwuqsiucweeoue($ymqmyyeuycgmigyo . self::uucggqgemiykigga, __("\123\157\x72\x74\x20\x6f\162\144\x65\x72", PR__MDL__WOOCOMMERCE_FILTER), [self::eeccqomoaqsawouy => __("\101\x53\103", PR__MDL__WOOCOMMERCE_FILTER), self::omaksceqmigeaoko => __("\x44\105\x53\x43", PR__MDL__WOOCOMMERCE_FILTER)], __("\x48\157\167\x20\164\157\x20\163\x6f\162\164\x20\x74\x65\x72\155\163\x20\x69\x6e\x73\151\x64\145\40\157\x66\x20\x66\x69\154\x74\145\x72\40\142\154\157\x63\153", PR__MDL__WOOCOMMERCE_FILTER))->mkmssscwmeekwgqo()->eyygsasuqmommkua(self::eeccqomoaqsawouy)]]; eeqesooyqagwawae: suswcqoyyqkkquuo: } acaqummmoyiemqss: oqugqwcyomiaaoqu: return $uiewakwqscemywuo; } public function ewewecscqocemiqs($iwewcwusemqaiggk) { $bgscekiuycggmyci = ManipulateTerm::igawqaomowicuayw($iwewcwusemqaiggk, self::oqmosiywgecmeqig); $egcqoiemwoyoaewe = ManipulateTerm::get($iwewcwusemqaiggk); if ($bgscekiuycggmyci && $egcqoiemwoyoaewe instanceof WP_Term && $egcqoiemwoyoaewe->parent) { goto foeeqckqsyockkak; } $ugugimquukqwogge = ManipulateTerm::igawqaomowicuayw($iwewcwusemqaiggk, self::ugygausceickekgo); goto iekumemscwieugqw; foeeqckqsyockkak: $ugugimquukqwogge = self::ewewecscqocemiqs($egcqoiemwoyoaewe->parent); iekumemscwieugqw: return $ugugimquukqwogge; } public function ayseokmqycoqaigc($ymqmyyeuycgmigyo = null) { if (!($guwumyyyakswawas = $this->wqiaaecemqgacuww())) { goto kymkucucyeoeikim; } $ugugimquukqwogge = $this->ewewecscqocemiqs($guwumyyyakswawas); if (!(is_array($ugugimquukqwogge) && in_array($ymqmyyeuycgmigyo, $ugugimquukqwogge, true))) { goto hoeeyiowekaeemko; } return false; hoeeyiowekaeemko: kymkucucyeoeikim: if (!(!$ymqmyyeuycgmigyo || $ymqmyyeuycgmigyo === $this->aakmagwggmkoiiyu())) { goto usquiuuyiyqaeyiu; } return true; usquiuuyiyqaeyiu: return parent::ayseokmqycoqaigc($ymqmyyeuycgmigyo); } private function wqiaaecemqgacuww(?string $ymqmyyeuycgmigyo = null) : int { if ($ymqmyyeuycgmigyo) { goto qicwaskssogcokgm; } $ymqmyyeuycgmigyo = self::cmckeoksigiaqykc; qicwaskssogcokgm: $sogksuscggsicmac = 0; if (!(self::cmckeoksigiaqykc === $ymqmyyeuycgmigyo && DecoratorTaxonomy::qmssqeyayicowkgy($ymqmyyeuycgmigyo))) { goto uguigkcmukuouway; } $sogksuscggsicmac = get_queried_object_id(); uguigkcmukuouway: return $sogksuscggsicmac; } public function msgqcwqsemkmwqss($oyiyuuoguwwaksaa, &$gqgemcmoicmgaqie) { $icwicymcioeyeyek = $this->caokeucsksukesyo()->ioegacqacywgucsc(); $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto skkamseieeusycye; } $esygomwiykacwkye = $gqgemcmoicmgaqie->tax_query; if (!($esygomwiykacwkye && isset($esygomwiykacwkye->queries))) { goto wiysogeqqwgioyka; } $esygomwiykacwkye = $esygomwiykacwkye->queries; foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto soaccwqimeksgwiw; } $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); if (!$this->ayseokmqycoqaigc($ymqmyyeuycgmigyo)) { goto suqkuqygkkgwyaie; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->oiqmuywqkkmuswuc(self::omumymwakeoiwouc . $ymqmyyeuycgmigyo, null, $icwicymcioeyeyek); if (!$eqgoocgaqwqcimie) { goto aegysmeecgcgayyw; } if (is_array($eqgoocgaqwqcimie)) { goto gaomwagkcciesyqy; } $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie]; gaomwagkcciesyqy: $esygomwiykacwkye[] = ["\x66\x69\x65\x6c\x64" => self::ouywiegeiyuaaawo, "\x63\x6f\x6d\x70\x61\162\x65" => self::iamiiekkgssgeaew, self::ucoiewcoucauqwko => $eqgoocgaqwqcimie, self::gmmygyiecgmggaam => $ymqmyyeuycgmigyo, "\x69\156\143\154\x75\144\x65\x5f\143\150\151\x6c\144\162\145\x6e" => 1]; aegysmeecgcgayyw: suqkuqygkkgwyaie: soaccwqimeksgwiw: esuiysskoweawsue: } uqqaiagaeqgqgaiy: wiysogeqqwgioyka: $this->gmcqycoowqmycocs(); $gqgemcmoicmgaqie->set("\164\141\170\x5f\x71\165\145\x72\171", $esygomwiykacwkye); skkamseieeusycye: return parent::msgqcwqsemkmwqss($oyiyuuoguwwaksaa, $gqgemcmoicmgaqie); } public function cccesyuceswckkqy($syquekoksmgewowm, $yygmoeguaqyumuui) { $kaigioacywcmqiam = DecoratorWoocommerce::qagkseqwwaqacakk(); $wiciwwggyauswauk = []; if (is_array($yygmoeguaqyumuui)) { goto cgiscsqwwgqqaeqi; } $yygmoeguaqyumuui = [$yygmoeguaqyumuui]; cgiscsqwwgqqaeqi: foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($eqgoocgaqwqcimie = ManipulateArray::get($kaigioacywcmqiam, $uusmaiomayssaecw))) { goto ewymsmkkiksgwysk; } $wiciwwggyauswauk[] = $eqgoocgaqwqcimie; ewymsmkkiksgwysk: giaacoqqqsekcayy: } syiqkaasoueowwui: if (!$wiciwwggyauswauk) { goto cmegwsegsosyqcai; } $syquekoksmgewowm[] = ["\164\x61\170\x6f\156\x6f\155\171" => "\x70\x72\157\x64\x75\143\x74\137\x76\151\163\x69\142\151\x6c\x69\164\x79", "\x66\151\x65\x6c\x64" => "\x74\145\162\x6d\x5f\x74\141\170\x6f\156\x6f\x6d\x79\137\151\x64", "\x74\145\162\x6d\163" => $wiciwwggyauswauk, "\x6f\x70\x65\162\x61\x74\157\162" => "\116\117\124\40\x49\x4e"]; cmegwsegsosyqcai: return $syquekoksmgewowm; } public function eicgqsyqqsccywwq($qwcmueausqgiwigy = false) : array { $yygmoeguaqyumuui = []; if (!(self::wiquocqckkqkmayo === DecoratorOption::get("\167\x6f\x6f\143\x6f\155\x6d\x65\x72\143\x65\137\150\x69\x64\145\137\157\x75\x74\x5f\157\146\137\x73\x74\x6f\x63\x6b\137\x69\164\145\155\x73"))) { goto wmywuusgukmmaams; } $yygmoeguaqyumuui[] = "\x6f\165\164\157\x66\x73\x74\157\x63\x6b"; wmywuusgukmmaams: if (!$this->qacygisasqiuosci()) { goto egyyiccaeeiooaua; } if (!$qwcmueausqgiwigy) { goto gkyawqqcmigqgaiq; } $yygmoeguaqyumuui[] = "\145\x78\143\154\165\x64\145\x2d\x66\162\x6f\155\55\x73\x65\x61\x72\143\x68"; goto ooeausyowguqicuo; gkyawqqcmigqgaiq: $yygmoeguaqyumuui[] = "\x65\170\x63\154\x75\144\x65\55\146\162\x6f\x6d\x2d\143\141\x74\141\154\157\147"; ooeausyowguqicuo: egyyiccaeeiooaua: return $yygmoeguaqyumuui; } public function gmcqycoowqmycocs() { $this->cecaguuoecmccuse("\167\x6f\157\143\157\155\x6d\145\x72\143\x65\137\160\162\157\x64\x75\x63\x74\x5f\x71\165\145\x72\171\137\164\x61\170\x5f\x71\165\x65\162\171", function ($syquekoksmgewowm, $_this) { foreach ($syquekoksmgewowm as $uusmaiomayssaecw => $ieqocgiosekoeoqe) { if (!("\x70\x72\x6f\144\x75\x63\x74\x5f\x76\x69\x73\151\x62\x69\154\151\164\x79" === ManipulateArray::get($ieqocgiosekoeoqe, self::gmmygyiecgmggaam))) { goto igooksugieceoege; } unset($syquekoksmgewowm[$uusmaiomayssaecw]); igooksugieceoege: cewmoqyysgsmuiya: } scisgsyemmsekgos: return $this->cccesyuceswckkqy($syquekoksmgewowm, $this->eicgqsyqqsccywwq(true)); }, 10, 2); $this->cecaguuoecmccuse("\x77\x6f\157\143\x6f\x6d\x6d\x65\x72\143\145\x5f\x70\x72\157\x64\165\x63\164\137\151\163\137\166\151\163\151\142\154\x65", function ($ioqywyyeioqywogw, $aokagokqyuysuksm) { return true; }, 10, 2); } public function uikgwcuascgeissw($kesssewsiegssiya) : ?string { $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); return $this->weysguygiseoukqw($ymqmyyeuycgmigyo . self::caieqgyycuwysqkc, ManipulateTaxonomy::qcgakseyaikigqco($kesssewsiegssiya)); } }
