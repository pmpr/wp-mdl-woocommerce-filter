<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6241d618a3135             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter\Refinement; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTerm; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\WoocommerceFilter\Setting; use WP_Query; use WP_Taxonomy; use WP_Term; class Attribute extends Element { const caieqgyycuwysqkc = "\137\143\x75\x73\x74\157\x6d\137\x6c\141\x62\145\x6c"; protected ?string $taxonomy = null; public function __construct() { $this->name = self::ATTRIBUTE; $this->type = self::ugmwekegkosuuwii; $this->side = true; $this->priority = 0; parent::__construct(); } public function render() { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); if (!$seyqqsmuaiegkeeq) { goto mqicocmqegwukkwg; } $wekcyscwqougqoam = $this->weysguygiseoukqw(Setting::amoaaekaumwisuic, false); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto ciykoyeioqgyaeqo; } $ywwsukisoiguygwm = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); if (!$this->ayseokmqycoqaigc($ywwsukisoiguygwm)) { goto asiqwuoswmigcaki; } $muuwyqowekmoqoig = $this->weysguygiseoukqw($ywwsukisoiguygwm . self::smommoywqawkuceg, false); $sikaymiwcesagayc = $this->weysguygiseoukqw($ywwsukisoiguygwm . self::mkikoewciywmikok, "\x49\x44"); $umwqusowiqmyseom = $this->weysguygiseoukqw($ywwsukisoiguygwm . self::uucggqgemiykigga, self::eeccqomoaqsawouy); $omwmuycmeqcqokom = $this->wqiaaecemqgacuww($ywwsukisoiguygwm); $uyuaosigqymaqsaa = ManipulateTerm::ciugwooasaqcywas($ywwsukisoiguygwm, ["\x6f\x72\x64\x65\162" => $umwqusowiqmyseom, "\x70\x61\162\x65\156\164" => $omwmuycmeqcqokom, "\157\x72\144\145\x72\x62\x79" => $sikaymiwcesagayc, "\150\151\x64\x65\x5f\x65\x6d\x70\x74\171" => $muuwyqowekmoqoig]); if (!$uyuaosigqymaqsaa) { goto wcugqegqsuuuwqao; } $ymqmyyeuycgmigyo = self::omumymwakeoiwouc . $ywwsukisoiguygwm; $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->oiqmuywqkkmuswuc($ymqmyyeuycgmigyo); $omwmuycmeqcqokom = null; if (!is_string($eqgoocgaqwqcimie)) { goto mwsmsguqqkcwiiuk; } $eqgoocgaqwqcimie = DecoratorTerm::woimamkkeyoyauoa(self::ouywiegeiyuaaawo, $eqgoocgaqwqcimie, $ywwsukisoiguygwm); $omwmuycmeqcqokom = ManipulateTerm::owaokmsayecmasqu($eqgoocgaqwqcimie); mwsmsguqqkcwiiuk: foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { if (!$iwewcwusemqaiggk instanceof WP_Term) { goto qoqskyuuwueqkquk; } if ($omwmuycmeqcqokom instanceof WP_Term && $omwmuycmeqcqokom->term_id === $iwewcwusemqaiggk->term_id) { goto msemumccgceyugmg; } ManipulateArray::set($iwewcwusemqaiggk, [self::iuqumwggccmcuyem => 1]); goto wagqgeqymeqoeuyi; msemumccgceyugmg: ManipulateArray::set($iwewcwusemqaiggk, [self::iuqumwggccmcuyem => 0]); wagqgeqymeqoeuyi: qoqskyuuwueqkquk: eogwckcymuugikuy: } eeauyscekuckoues: $qookweymeqawmcwo = $this->gayqqwwuycceosii($ymqmyyeuycgmigyo); if (!($wekcyscwqougqoam && $eqgoocgaqwqcimie)) { goto iwsuawwqomaowuii; } $uyuaosigqymaqsaa = ManipulateArray::yaeiiwwyckwugsem($uyuaosigqymaqsaa); iwsuawwqomaowuii: $qookweymeqawmcwo[self::NAME] = $ymqmyyeuycgmigyo; $qookweymeqawmcwo[self::qwumqqyuasyskkkc] = $uyuaosigqymaqsaa; $qookweymeqawmcwo[self::qescuiwgsyuikume] = $this->uikgwcuascgeissw($kesssewsiegssiya); $qookweymeqawmcwo["\x68\151\x64\145\x5f\x65\155\160\164\171"] = $muuwyqowekmoqoig; $qookweymeqawmcwo["\150\x69\x64\145\137\143\150\x69\x6c\x64\x72\145\156"] = $this->weysguygiseoukqw(Setting::wsckiussqwckiwae, false); echo $this->iuygowkemiiwqmiw($this->aakmagwggmkoiiyu(), $qookweymeqawmcwo); wcugqegqsuuuwqao: asiqwuoswmigcaki: ciykoyeioqgyaeqo: owmuceyswmgueasi: } qmuwoecuacmkwgem: mqicocmqegwukkwg: } public function gayqqwwuycceosii($ymqmyyeuycgmigyo = null) : array { $qookweymeqawmcwo = parent::gayqqwwuycceosii($ymqmyyeuycgmigyo); $qookweymeqawmcwo["\x73\145\x6c\145\143\x74\x65\x64"] = $this->yuaqmekuuqoyiwoc($ymqmyyeuycgmigyo); return $qookweymeqawmcwo; } public function yuaqmekuuqoyiwoc($ymqmyyeuycgmigyo) : array { $icwicymcioeyeyek = $this->caokeucsksukesyo()->ioegacqacywgucsc(); $ymmmmaiuoocagigk = []; if (!$this->caokeucsksukesyo()->sacmaiqouaeswkyy($icwicymcioeyeyek)) { goto wyuemgggaqogsmsq; } foreach ($icwicymcioeyeyek as $aaokuekaimigoyue => $uyuaosigqymaqsaa) { if (!($aaokuekaimigoyue !== self::eigiqicogcmgmgwi && $ymqmyyeuycgmigyo === $aaokuekaimigoyue)) { goto samwkqgwouggsguc; } if (is_array($uyuaosigqymaqsaa)) { goto acsqgiuageaasiyy; } $ymmmmaiuoocagigk[] = $this->igaqgiyuucyuyswk($aaokuekaimigoyue, $uyuaosigqymaqsaa); goto oomguqikqokqwgku; acsqgiuageaasiyy: foreach ($uyuaosigqymaqsaa as $iwewcwusemqaiggk) { $ymmmmaiuoocagigk[] = $this->igaqgiyuucyuyswk($aaokuekaimigoyue, $iwewcwusemqaiggk); mugqyyeayeyggqqk: } ouamogymawucwswu: oomguqikqokqwgku: samwkqgwouggsguc: emmsycooskoqmgeg: } qgeugwymkkiacwoc: wyuemgggaqogsmsq: return $ymmmmaiuoocagigk; } public function igaqgiyuucyuyswk($ymqmyyeuycgmigyo, $iwewcwusemqaiggk) { $kesssewsiegssiya = $this->guecmwukeoqiwyac($ymqmyyeuycgmigyo); $iwewcwusemqaiggk = DecoratorTerm::woimamkkeyoyauoa(self::ouywiegeiyuaaawo, $iwewcwusemqaiggk, $kesssewsiegssiya); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto guykyqecgswcsmws; } $iwewcwusemqaiggk = ["\x66\151\154\164\x65\x72" => $kesssewsiegssiya, self::ciyoccqkiamemcmm => ManipulateTerm::aqcogscycyycgkuq($iwewcwusemqaiggk), self::qescuiwgsyuikume => ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk), self::NAME => $ymqmyyeuycgmigyo]; guykyqecgswcsmws: return $iwewcwusemqaiggk; } public function qgamykugookscsye(array $uiewakwqscemywuo = []) : array { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); if (!$seyqqsmuaiegkeeq) { goto ousiuuwgwkiyikyq; } $qgeeqyucwycemwmo = [self::imigwosicasiemwu => __("\x52\141\144\151\x6f", PR__MDL__WOOCOMMERCE_FILTER), self::SELECT => __("\x44\x72\x6f\x70\144\x6f\167\156", PR__MDL__WOOCOMMERCE_FILTER), self::ogmccgakwygeuqao => __("\x4d\165\x6c\164\x69\x20\x44\162\157\160\144\x6f\167\x6e", PR__MDL__WOOCOMMERCE_FILTER), self::ecusimegeasyeese => __("\x4d\x75\154\164\151\40\103\x68\145\143\x6b\142\x6f\170", PR__MDL__WOOCOMMERCE_FILTER)]; foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto kqqiegkuqagcqsya; } $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); $pkyyagewkiyckmwy = ManipulateTaxonomy::qcgakseyaikigqco($kesssewsiegssiya); $uiewakwqscemywuo[] = [self::NAME => $ymqmyyeuycgmigyo, self::qgqyauaqwqmqseim => IconFontawesomeInterface::yukwuuuaiyqqcukw, self::qescuiwgsyuikume => $pkyyagewkiyckmwy, self::ymckmcsiymwqucoq => [Setting::wcwmusaouiqaqeww($ymqmyyeuycgmigyo . self::kouiwaoasqgwksas, __("\x45\x6e\141\x62\154\145", PR__MDL__WOOCOMMERCE_FILTER), sprintf(__("\x45\x6e\x61\142\x6c\145\40\x25\x73\40\146\151\154\x74\145\162\56", PR__MDL__WOOCOMMERCE_FILTER), $pkyyagewkiyckmwy)), Setting::ymuegqgyuagyucws($ymqmyyeuycgmigyo . self::caieqgyycuwysqkc, __("\x54\141\x78\157\156\157\x6d\171\40\x63\x75\x73\164\157\155\40\x6c\x61\142\145\154", PR__MDL__WOOCOMMERCE_FILTER), sprintf(__("\x46\157\162\x20\x65\x78\x61\155\160\154\145\40\x79\157\165\x20\167\141\156\164\40\164\157\x20\x73\150\x6f\167\40\164\x69\164\x6c\x65\40\157\x66\40\x25\163\40\x61\163\40\x22\x4d\x79\x20\x50\162\x6f\x64\x75\x63\x74\x73\x22\56\40\112\165\163\x74\40\146\157\162\40\171\157\165\x72\40\143\x6f\x6e\x76\x65\156\x69\x65\156\x63\145\56", PR__MDL__WOOCOMMERCE_FILTER), $pkyyagewkiyckmwy)), Setting::ckuwucygcwsiawms($ymqmyyeuycgmigyo . self::ssugumysagumgqqm, __("\x46\151\154\164\145\162\40\x54\171\x70\x65", PR__MDL__WOOCOMMERCE_FILTER), $qgeeqyucwycemwmo, sprintf(__("\x56\151\145\167\40\x6f\x66\x20\x74\150\145\40\x25\163\40\164\x65\x72\155\x73\x20\157\x6e\40\164\x68\145\40\146\162\157\156\164\56", PR__MDL__WOOCOMMERCE_FILTER), $pkyyagewkiyckmwy))->eyygsasuqmommkua(self::imigwosicasiemwu), Setting::wcwmusaouiqaqeww($ymqmyyeuycgmigyo . self::smommoywqawkuceg, __("\x48\151\144\x65\40\x55\156\x75\163\145\x64", PR__MDL__WOOCOMMERCE_FILTER), __("\103\150\x65\143\153\x20\164\150\x69\x73\x20\151\x74\145\x6d\x20\146\157\162\x20\x62\x65\164\164\x65\162\40\160\145\x72\x66\x6f\162\155\x61\x6e\x63\145\56", PR__MDL__WOOCOMMERCE_FILTER)), Setting::yyuwuqsiucweeoue($ymqmyyeuycgmigyo . self::mkikoewciywmikok, __("\x53\157\162\164\x20\164\x65\x72\155\163", PR__MDL__WOOCOMMERCE_FILTER), ["\x2d\61" => __("\x44\x65\x66\141\x75\154\x74", PR__MDL__WOOCOMMERCE_FILTER), self::gouqcwikiiygyasc => __("\111\x44", PR__MDL__WOOCOMMERCE_FILTER), self::NAME => __("\x4e\x61\155\145", PR__MDL__WOOCOMMERCE_FILTER), "\x6e\x75\x6d\x65\162\151\143" => __("\116\165\155\145\162\x69\x63", PR__MDL__WOOCOMMERCE_FILTER)], __("\110\x6f\167\40\164\157\40\163\x6f\162\x74\x20\164\145\162\x6d\x73\40\151\x6e\x73\151\x64\x65\x20\157\146\x20\146\151\154\164\145\x72\x20\142\154\157\143\x6b", PR__MDL__WOOCOMMERCE_FILTER))->mkmssscwmeekwgqo()->eyygsasuqmommkua("\x2d\61"), Setting::yyuwuqsiucweeoue($ymqmyyeuycgmigyo . self::uucggqgemiykigga, __("\123\x6f\x72\x74\x20\157\x72\144\x65\x72", PR__MDL__WOOCOMMERCE_FILTER), [self::eeccqomoaqsawouy => __("\101\123\x43", PR__MDL__WOOCOMMERCE_FILTER), self::omaksceqmigeaoko => __("\104\105\x53\103", PR__MDL__WOOCOMMERCE_FILTER)], __("\x48\x6f\x77\x20\164\x6f\x20\163\x6f\x72\164\x20\x74\145\162\x6d\163\x20\x69\x6e\x73\x69\144\145\40\157\146\x20\x66\151\154\164\145\x72\40\142\154\x6f\143\x6b", PR__MDL__WOOCOMMERCE_FILTER))->mkmssscwmeekwgqo()->eyygsasuqmommkua(self::eeccqomoaqsawouy)]]; kqqiegkuqagcqsya: miweggwqeiaeweia: } kkumywowcoycymeo: ousiuuwgwkiyikyq: return $uiewakwqscemywuo; } public function ewewecscqocemiqs($iwewcwusemqaiggk) { $bgscekiuycggmyci = ManipulateTerm::igawqaomowicuayw($iwewcwusemqaiggk, self::oqmosiywgecmeqig); $egcqoiemwoyoaewe = ManipulateTerm::get($iwewcwusemqaiggk); if ($bgscekiuycggmyci && $egcqoiemwoyoaewe instanceof WP_Term && $egcqoiemwoyoaewe->parent) { goto ogsaaqsaogcqiouy; } $ugugimquukqwogge = ManipulateTerm::igawqaomowicuayw($iwewcwusemqaiggk, self::ugygausceickekgo); goto iwekmyyccgiyuecc; ogsaaqsaogcqiouy: $ugugimquukqwogge = self::ewewecscqocemiqs($egcqoiemwoyoaewe->parent); iwekmyyccgiyuecc: return $ugugimquukqwogge; } public function ayseokmqycoqaigc($ymqmyyeuycgmigyo = null) { if (!($guwumyyyakswawas = $this->wqiaaecemqgacuww())) { goto aomysykcgikegiau; } $ugugimquukqwogge = $this->ewewecscqocemiqs($guwumyyyakswawas); if (!(is_array($ugugimquukqwogge) && in_array($ymqmyyeuycgmigyo, $ugugimquukqwogge, true))) { goto ikqqskkqqwmwssoo; } return false; ikqqskkqqwmwssoo: aomysykcgikegiau: if (!($ymqmyyeuycgmigyo === $this->aakmagwggmkoiiyu())) { goto cwwmimggaaecmucw; } return true; cwwmimggaaecmucw: return parent::ayseokmqycoqaigc($ymqmyyeuycgmigyo); } private function wqiaaecemqgacuww(?string $ymqmyyeuycgmigyo = null) : int { if ($ymqmyyeuycgmigyo) { goto awoaooyoeoyeeqee; } $ymqmyyeuycgmigyo = self::cmckeoksigiaqykc; awoaooyoeoyeeqee: $sogksuscggsicmac = 0; if (!(self::cmckeoksigiaqykc === $ymqmyyeuycgmigyo && DecoratorTaxonomy::qmssqeyayicowkgy($ymqmyyeuycgmigyo))) { goto ogqmesokykywseys; } $sogksuscggsicmac = get_queried_object_id(); ogqmesokykywseys: return $sogksuscggsicmac; } public function msgqcwqsemkmwqss($oyiyuuoguwwaksaa, &$gqgemcmoicmgaqie) { $icwicymcioeyeyek = $this->caokeucsksukesyo()->ioegacqacywgucsc(); $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto gcckqucukawcasgk; } $esygomwiykacwkye = $gqgemcmoicmgaqie->tax_query; if (!($esygomwiykacwkye && isset($esygomwiykacwkye->queries))) { goto cuumeogeomowqisc; } $esygomwiykacwkye = $esygomwiykacwkye->queries; foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto uiosisocuwokwkie; } $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); if (!$this->ayseokmqycoqaigc($ymqmyyeuycgmigyo)) { goto iikiiioqiyegyaak; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->oiqmuywqkkmuswuc(self::omumymwakeoiwouc . $ymqmyyeuycgmigyo, null, $icwicymcioeyeyek); if (!$eqgoocgaqwqcimie) { goto gicyayswqyuoekcq; } if (is_array($eqgoocgaqwqcimie)) { goto kosaqwikueyksqmw; } $eqgoocgaqwqcimie = [$eqgoocgaqwqcimie]; kosaqwikueyksqmw: $esygomwiykacwkye[] = ["\x74\141\170\157\x6e\157\x6d\x79" => $ymqmyyeuycgmigyo, "\146\151\145\154\x64" => self::ouywiegeiyuaaawo, "\164\145\x72\x6d\163" => $eqgoocgaqwqcimie, "\x69\x6e\143\154\165\x64\x65\137\x63\x68\x69\x6c\144\162\x65\x6e" => 1, "\143\157\x6d\160\x61\162\145" => self::iamiiekkgssgeaew]; gicyayswqyuoekcq: iikiiioqiyegyaak: uiosisocuwokwkie: mqkmcysgoiaouiwm: } ykomgumacooyomsk: cuumeogeomowqisc: $this->gmcqycoowqmycocs(); $gqgemcmoicmgaqie->set("\x74\x61\x78\137\x71\x75\145\x72\171", $esygomwiykacwkye); gcckqucukawcasgk: return parent::msgqcwqsemkmwqss($oyiyuuoguwwaksaa, $gqgemcmoicmgaqie); } public function cccesyuceswckkqy($syquekoksmgewowm, $yygmoeguaqyumuui) { $kaigioacywcmqiam = DecoratorWoocommerce::qagkseqwwaqacakk(); $wiciwwggyauswauk = []; if (is_array($yygmoeguaqyumuui)) { goto qmkaeeomgkwggoyo; } $yygmoeguaqyumuui = [$yygmoeguaqyumuui]; qmkaeeomgkwggoyo: foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!($eqgoocgaqwqcimie = ManipulateArray::get($kaigioacywcmqiam, $uusmaiomayssaecw))) { goto eekcoeikaeaaeyii; } $wiciwwggyauswauk[] = $eqgoocgaqwqcimie; eekcoeikaeaaeyii: ocaguquugeamqckq: } csammceowmqwaamq: if (!$wiciwwggyauswauk) { goto cogywoqcqummsyus; } $syquekoksmgewowm[] = ["\x74\141\170\157\156\x6f\155\x79" => "\x70\x72\157\144\x75\143\x74\137\x76\x69\163\x69\x62\151\x6c\151\164\x79", "\x66\x69\x65\x6c\144" => "\x74\x65\162\x6d\x5f\x74\141\170\x6f\156\x6f\x6d\171\x5f\x69\144", "\x74\x65\162\x6d\x73" => $wiciwwggyauswauk, "\x6f\160\145\x72\141\164\157\162" => "\116\x4f\124\x20\111\116"]; cogywoqcqummsyus: return $syquekoksmgewowm; } public function eicgqsyqqsccywwq($qwcmueausqgiwigy = false) : array { $yygmoeguaqyumuui = []; if (!(self::wiquocqckkqkmayo === DecoratorOption::get("\167\x6f\x6f\143\x6f\155\x6d\145\x72\143\145\x5f\x68\151\x64\145\137\157\x75\x74\137\x6f\x66\137\163\x74\x6f\x63\153\x5f\151\164\x65\x6d\x73"))) { goto gmwykkouysyaqwqm; } $yygmoeguaqyumuui[] = "\157\165\x74\x6f\146\x73\x74\157\143\x6b"; gmwykkouysyaqwqm: if (!$this->qacygisasqiuosci()) { goto sockeswygwcskeuq; } if (!$qwcmueausqgiwigy) { goto ugqwuugsweqgmywk; } $yygmoeguaqyumuui[] = "\x65\x78\x63\x6c\x75\144\145\x2d\146\162\x6f\155\55\163\x65\141\x72\x63\x68"; goto uaukmuiwskcemcsw; ugqwuugsweqgmywk: $yygmoeguaqyumuui[] = "\145\x78\x63\154\x75\x64\x65\55\x66\162\157\155\55\x63\141\164\x61\x6c\x6f\147"; uaukmuiwskcemcsw: sockeswygwcskeuq: return $yygmoeguaqyumuui; } public function gmcqycoowqmycocs() { $this->cecaguuoecmccuse("\x77\x6f\x6f\x63\x6f\x6d\155\145\x72\143\145\137\x70\162\157\x64\165\x63\x74\137\x71\x75\x65\x72\x79\137\164\x61\170\x5f\161\x75\x65\162\x79", function ($syquekoksmgewowm, $_this) { foreach ($syquekoksmgewowm as $uusmaiomayssaecw => $ieqocgiosekoeoqe) { if (!("\160\162\157\x64\x75\x63\164\137\166\151\x73\151\x62\x69\x6c\x69\164\x79" === ManipulateArray::get($ieqocgiosekoeoqe, self::gmmygyiecgmggaam))) { goto cscusseysqygsoiy; } unset($syquekoksmgewowm[$uusmaiomayssaecw]); cscusseysqygsoiy: uaqackioaiqwcocy: } mkwkkmkgiqiamacc: return $this->cccesyuceswckkqy($syquekoksmgewowm, $this->eicgqsyqqsccywwq(true)); }, 10, 2); $this->cecaguuoecmccuse("\167\157\157\143\157\155\x6d\x65\162\x63\145\x5f\160\x72\157\x64\x75\143\164\137\x69\x73\137\x76\x69\x73\151\x62\x6c\x65", function ($ioqywyyeioqywogw, $aokagokqyuysuksm) { return true; }, 10, 2); } public function uikgwcuascgeissw($kesssewsiegssiya) : ?string { $ymqmyyeuycgmigyo = ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya); return $this->weysguygiseoukqw($ymqmyyeuycgmigyo . self::caieqgyycuwysqkc, ManipulateTaxonomy::qcgakseyaikigqco($kesssewsiegssiya)); } }
