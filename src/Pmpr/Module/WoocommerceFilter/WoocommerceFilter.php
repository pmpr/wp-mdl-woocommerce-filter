<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc5e38e8ff             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter; use CMB2; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\WoocommerceFilter\Frontend\Frontend; use Pmpr\Module\WoocommerceFilter\Refinement\Element; use Pmpr\Module\WoocommerceFilter\Refinement\Refinement; use Pmpr\Module\WoocommerceFilter\Traits\CommonTrait; use WP_Query; use WP_Taxonomy; class WoocommerceFilter extends ComponentInitiator { use CommonTrait; const eigiqicogcmgmgwi = "\160\x66"; const cgckcqysmyiikaqw = "\x77\157\x6f\x63\157\155\155\145\x72\143\x65\x5f\146\151\154\164\x65\x72"; const geiygweugseyomyy = self::cgckcqysmyiikaqw . Constants::wassgkgmoyygyaya; const ugygausceickekgo = "\x65\170\143\154\x75\144\145\x64\137" . self::cgckcqysmyiikaqw; const eyemkmiomkkwessc = self::cgckcqysmyiikaqw . "\x5f\162\145\141\154\x6c\x79\x5f\x63\165\x72\162\145\x6e\164\137\164\145\x72\x6d"; const kgowyeaekuwwskco = "\160\165\163\150\137\x72\145\160\154\141\x63\x65\x6d\x65\156\164\x5f" . self::cgckcqysmyiikaqw; const oqmosiywgecmeqig = "\x70\x75\154\x6c\137\162\x65\160\x6c\141\x63\145\x6d\x65\x6e\164\x5f" . self::cgckcqysmyiikaqw; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x57\157\157\x63\157\x6d\155\145\x72\x63\145\40\x46\x69\154\x74\x65\x72", PR__MDL__WOOCOMMERCE_FILTER); }, Constants::wuowaiyouwecckaw => false, Constants::sguyaymiiiiewame => Setting::class]); } public function mameiwsayuyquoeq() { Frontend::symcgieuakksimmu(); Refinement::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\x69\164", [$this, "\x69\x6e\x69\164"])->qcsmikeggeemccuu("\x77\x70", [$this, "\x65\156\161\x75\145\165\145"])->qcsmikeggeemccuu("\x77\157\x6f\x63\x6f\155\155\x65\x72\x63\145\x5f\x70\x72\x6f\x64\165\x63\164\x5f\161\x75\145\x72\171", [$this, "\165\157\163\x6b\165\153\x79\x71\x75\147\x6d\x71\x71\x69\145\143"])->qcsmikeggeemccuu("\x63\x6d\x62\x32\137\163\x61\166\x65\137\164\145\x72\x6d\x5f\x66\x69\x65\x6c\x64\x73\137" . Constants::cmckeoksigiaqykc, [$this, "\157\x6d\x69\171\151\145\165\147\171\x65\x79\x73\155\161\153\153"], 99, 3); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\143\x72\157\156\137\163\x63\x68\x65\144\165\x6c\x65\x73", [$this, "\x6f\x65\x6b\x6b\155\157\x67\x6b\165\143\x6b\x75\145\x79\x65\x79"])->cecaguuoecmccuse("\x77\157\157\143\x6f\x6d\155\x65\162\x63\x65\x5f\x74\x61\x78\157\156\x6f\x6d\171\x5f\x61\x72\147\163\137\160\x61\137\143\x6f\x6c\x6f\x72", [$this, "\155\143\147\145\x75\141\171\157\141\x6d\167\165\163\143\141\171"]); $this->aqaqisyssqeomwom(self::geiygweugseyomyy . "\155\157\144\x69\x66\171\137\161\165\x65\162\x79\137\141\162\x67\163", [$this, "\x73\x63\147\x75\x61\x75\x75\141\145\x6f\x65\x65\167\x77\x65\145"], 1)->aqaqisyssqeomwom(self::geiygweugseyomyy . "\x73\157\162\164\x5f\164\x65\x72\155\x73\137\142\145\146\x6f\x72\x65\137\157\x75\x74", [$this, "\x77\163\155\167\x77\x6f\x77\x6d\x6d\161\x79\145\x61\153\161\165"], 5); } public function init() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy()) { $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $seyqqsmuaiegkeeq = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->mqmocoguqcyymgqu(); foreach ($seyqqsmuaiegkeeq as $ymqmyyeuycgmigyo => $kesssewsiegssiya) { if ($kesssewsiegssiya instanceof WP_Taxonomy) { if ($mqeowykqcggsieya->cekoogweeooasayu($kesssewsiegssiya)) { unset($seyqqsmuaiegkeeq[$ymqmyyeuycgmigyo]); } else { $seyqqsmuaiegkeeq[$ymqmyyeuycgmigyo] = $mqeowykqcggsieya->qcgakseyaikigqco($kesssewsiegssiya); } } } $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $uuyucgkyusckoaeq->scyscgskcwukckyy("\160\x72\x6f\144\165\143\164\x5f\144\145\x74\141\151\x6c\x73")->gswweykyogmsyawy(__("\120\162\x6f\x64\x75\x63\164\x20\104\x65\x74\x61\x69\154\163", PR__MDL__WOOCOMMERCE_FILTER))->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::oqmosiywgecmeqig)->gswweykyogmsyawy(__("\x50\165\154\154\x20\x52\145\x70\x6c\x61\143\145\x6d\145\156\164", PR__MDL__WOOCOMMERCE_FILTER))->gucwmccyimoagwcm(__("\122\x65\160\154\x61\x63\145\155\x65\x6e\x74\x20\146\162\157\x6d\40\160\x61\x72\x65\156\x74", PR__MDL__WOOCOMMERCE_FILTER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::ugygausceickekgo)->gswweykyogmsyawy(__("\x45\x78\x63\154\x75\144\x65\40\x46\x69\x6c\164\145\162\163", PR__MDL__WOOCOMMERCE_FILTER))->acauweqyyugwisqc($seyqqsmuaiegkeeq)->oikgogcweiiaocka())->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(self::kgowyeaekuwwskco)->gswweykyogmsyawy(__("\120\165\x73\x68\40\x52\145\160\154\141\143\145\155\145\156\x74", PR__MDL__WOOCOMMERCE_FILTER))->gucwmccyimoagwcm(__("\122\x65\x70\154\x61\x63\145\x6d\145\156\164\40\x69\x6e\x74\x6f\x20\x63\x68\151\x6c\x64\x72\145\x6e", PR__MDL__WOOCOMMERCE_FILTER)))->auoaeeuwaqswggqg(Constants::cmckeoksigiaqykc)->register(); } } public function enqueue() { if ($this->wwqoiqcoccacyyyc()) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qkqeooqcomucuwyk($this, Setting::ykqqgqskiygugscu, $this->qeomwskywaguqyyu())->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, self::cgckcqysmyiikaqw, "\x66\162\157\156\x74\x2e\152\163")->simswskycwagoeqy()); } } public function scguauuaeoeewwee($query_args) { if (isset($_REQUEST[self::eigiqicogcmgmgwi], $_REQUEST[self::geiygweugseyomyy . "\x77\160\137\x71\x75\145\162\171\137\x61\x72\147\x73"])) { $query_args[Constants::cuoyscoiacswuauq] = $_REQUEST[self::geiygweugseyomyy . "\167\160\x5f\x71\x75\145\x72\x79\137\x61\162\147\x73"][Constants::cuoyscoiacswuauq]; $query_args[Constants::kymceekcoyyeuocm] = $_REQUEST[self::geiygweugseyomyy . "\167\x70\137\161\165\x65\162\x79\137\x61\162\147\163"][Constants::kymceekcoyyeuocm]; $query_args[Constants::kkcqmwgccaygggcu] = $_REQUEST[self::geiygweugseyomyy . "\x77\160\x5f\x71\x75\145\x72\x79\137\x61\x72\147\163"][Constants::kkcqmwgccaygggcu]; } return $query_args; } public function oekkmogkuckueyey($immuisiomomksweo) { if (is_array($immuisiomomksweo)) { for ($ciyackuwsqkoqese = 2; $ciyackuwsqkoqese <= 7; $ciyackuwsqkoqese++) { $immuisiomomksweo["\x64\141\x79\163" . $ciyackuwsqkoqese] = ["\151\156\164\x65\x72\166\x61\x6c" => $ciyackuwsqkoqese * DAY_IN_SECONDS, "\x64\151\x73\160\154\141\171" => sprintf(__("\145\141\143\x68\x20\45\163\40\x64\x61\x79\163", PR__MDL__WOOCOMMERCE_FILTER), $ciyackuwsqkoqese)]; } } return $immuisiomomksweo; } public function wsmwwowmmqyeakqu($uyuaosigqymaqsaa) : array { if (!is_array($uyuaosigqymaqsaa)) { $uyuaosigqymaqsaa = []; } $iwewcwusemqaiggk = reset($uyuaosigqymaqsaa); if (!$iwewcwusemqaiggk) { return $uyuaosigqymaqsaa; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $kesssewsiegssiya = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($iwewcwusemqaiggk, Constants::gmmygyiecgmggaam); $sikaymiwcesagayc = $ykquycoiqesuckco->giiuwsmyumqwwiyq($kesssewsiegssiya . Element::lowmsmaykkuowskm, -1); $umwqusowiqmyseom = $ykquycoiqesuckco->giiuwsmyumqwwiyq($kesssewsiegssiya . Element::uucggqgemiykigga, Constants::eeccqomoaqsawouy); if ($sikaymiwcesagayc != -1) { switch ($sikaymiwcesagayc) { case Constants::gouqcwikiiygyasc: if ($umwqusowiqmyseom === Constants::eeccqomoaqsawouy) { uasort($uyuaosigqymaqsaa, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) { if ((int) $mmeioagwmyscwumo[Constants::ooqggksagkoaeeke] === (int) $csougakqegqiqsgi[Constants::ooqggksagkoaeeke]) { return 0; } return (int) $mmeioagwmyscwumo[Constants::ooqggksagkoaeeke] < (int) $csougakqegqiqsgi[Constants::ooqggksagkoaeeke] ? -1 : 1; }); } else { uasort($uyuaosigqymaqsaa, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) { if ((int) $mmeioagwmyscwumo[Constants::ooqggksagkoaeeke] === (int) $csougakqegqiqsgi[Constants::ooqggksagkoaeeke]) { return 0; } return (int) $mmeioagwmyscwumo[Constants::ooqggksagkoaeeke] > (int) $csougakqegqiqsgi[Constants::ooqggksagkoaeeke] ? -1 : 1; }); } break; case Constants::NAME: if ($umwqusowiqmyseom === Constants::eeccqomoaqsawouy) { uasort($uyuaosigqymaqsaa, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) { return strnatcasecmp($mmeioagwmyscwumo[Constants::NAME], $csougakqegqiqsgi[Constants::NAME]); }); } else { uasort($uyuaosigqymaqsaa, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) { return strnatcasecmp($csougakqegqiqsgi[Constants::NAME], $mmeioagwmyscwumo[Constants::NAME]); }); } break; case "\x6e\x75\155\145\162\151\x63": if ($umwqusowiqmyseom === Constants::eeccqomoaqsawouy) { uasort($uyuaosigqymaqsaa, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) { if ((int) $mmeioagwmyscwumo[Constants::ouywiegeiyuaaawo] === (int) $csougakqegqiqsgi[Constants::ouywiegeiyuaaawo]) { return 0; } return (int) $mmeioagwmyscwumo[Constants::ouywiegeiyuaaawo] < (int) $csougakqegqiqsgi[Constants::ouywiegeiyuaaawo] ? -1 : 1; }); } else { uasort($uyuaosigqymaqsaa, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) { if ((int) $mmeioagwmyscwumo[Constants::ouywiegeiyuaaawo] === (int) $csougakqegqiqsgi[Constants::ouywiegeiyuaaawo]) { return 0; } return (int) $mmeioagwmyscwumo[Constants::ouywiegeiyuaaawo] > (int) $csougakqegqiqsgi[Constants::ouywiegeiyuaaawo] ? -1 : 1; }); } break; } } return $uyuaosigqymaqsaa; } public function mcgeuayoamwuscay($iyaskikkeegoiucg) { if (is_array($iyaskikkeegoiucg)) { $iyaskikkeegoiucg["\x71\165\145\162\171\137\x76\x61\162"] = true; } return $iyaskikkeegoiucg; } public function uoskukyqugmqqiec($gqgemcmoicmgaqie) { if ($gqgemcmoicmgaqie instanceof WP_Query) { $ugugimquukqwogge = $this->ocksiywmkyaqseou(self::geiygweugseyomyy . "\147\x65\164\x5f\155\x65\x74\x61\137\x71\x75\x65\162\171", $gqgemcmoicmgaqie->get(Constants::cuoyscoiacswuauq)); $gqgemcmoicmgaqie->set(Constants::cuoyscoiacswuauq, $ugugimquukqwogge); } } public function omiyieugyeysmqkk($aokagokqyuysuksm, $ecukkacusqswqoem, $wggksywsgqeiaqcc) { if ($wggksywsgqeiaqcc instanceof CMB2 && $aokagokqyuysuksm) { $this->uoioccymskiiwgsg($aokagokqyuysuksm, $wggksywsgqeiaqcc->data_to_save); } } public function uoioccymskiiwgsg($aokagokqyuysuksm, $ugugimquukqwogge) { if (isset($ugugimquukqwogge[self::kgowyeaekuwwskco])) { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); if ($okcscwesammossuq = $aoskwucuugeuaeus->mmoaikqueyiwcesm($aokagokqyuysuksm)) { foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) { $wcgsoqmmciswkmiq = $aoskwucuugeuaeus->iooowgsqoyqseyuu($wcgsoqmmciswkmiq); $aowmesqseaiqimyu = $ugugimquukqwogge[self::ugygausceickekgo] ?? null; $oaskiuwaqyqssquy = $aoskwucuugeuaeus->igawqaomowicuayw($wcgsoqmmciswkmiq, self::oqmosiywgecmeqig, true); if ($oaskiuwaqyqssquy) { if ($aowmesqseaiqimyu) { $cyqqgsieawoiiskk = $aoskwucuugeuaeus->igawqaomowicuayw($wcgsoqmmciswkmiq, self::ugygausceickekgo); foreach ($cyqqgsieawoiiskk as $yemgmmgogcwccuky) { if (!in_array($yemgmmgogcwccuky, $aowmesqseaiqimyu, true)) { $aoskwucuugeuaeus->smqukgcyacswysqa($wcgsoqmmciswkmiq, self::ugygausceickekgo, $aowmesqseaiqimyu); } } $ewieakkmayyseocu = array_diff($aowmesqseaiqimyu, $cyqqgsieawoiiskk); foreach ($ewieakkmayyseocu as $uwomkgseoiegeume) { $aoskwucuugeuaeus->giwmekimakcaawsq($wcgsoqmmciswkmiq, self::ugygausceickekgo, $uwomkgseoiegeume); } } else { $aoskwucuugeuaeus->smqukgcyacswysqa($wcgsoqmmciswkmiq, self::ugygausceickekgo); } } $this->uoioccymskiiwgsg($wcgsoqmmciswkmiq, $aoskwucuugeuaeus->igawqaomowicuayw($wcgsoqmmciswkmiq)); } } } } }
