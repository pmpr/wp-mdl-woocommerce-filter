<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6554b00f034fd             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter; use CMB2; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Module\WoocommerceFilter\Frontend\Frontend; use Pmpr\Module\WoocommerceFilter\Interfaces\CommonInterface; use Pmpr\Module\WoocommerceFilter\Refinement\Refinement; use Pmpr\Module\WoocommerceFilter\Traits\CommonTrait; use WP_Query; use WP_Taxonomy; class WoocommerceFilter extends ComponentInitiator implements CommonInterface { use CommonTrait, ObjectTrait; public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\127\x6f\157\x63\x6f\155\155\145\x72\x63\145\40\x46\x69\x6c\x74\x65\x72", PR__MDL__WOOCOMMERCE_FILTER); }, self::wuowaiyouwecckaw => false]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto cecuyayqoioasumi; } Setting::symcgieuakksimmu(); cecuyayqoioasumi: Frontend::symcgieuakksimmu(); Refinement::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\x69\164", [$this, "\x69\x6e\151\164"])->qcsmikeggeemccuu("\167\160", [$this, "\145\156\x71\165\x65\165\x65"])->qcsmikeggeemccuu("\x77\x6f\157\143\x6f\x6d\x6d\145\162\143\145\137\x70\x72\157\x64\x75\143\x74\x5f\x71\165\x65\162\171", [$this, "\165\157\x73\x6b\165\153\x79\x71\165\147\x6d\x71\161\151\x65\x63"])->qcsmikeggeemccuu("\x63\155\x62\62\137\163\141\x76\x65\x5f\x74\x65\x72\155\137\x66\x69\x65\x6c\x64\x73\137" . self::cmckeoksigiaqykc, [$this, "\157\x6d\x69\x79\151\145\x75\x67\x79\145\171\163\155\161\x6b\x6b"], 99, 3); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x63\x72\x6f\156\x5f\x73\x63\x68\x65\144\x75\x6c\145\163", [$this, "\x6f\145\153\x6b\155\x6f\147\x6b\x75\143\153\x75\x65\171\x65\171"])->cecaguuoecmccuse("\x77\157\x6f\143\157\155\155\x65\162\x63\145\137\x74\x61\170\x6f\x6e\157\155\171\x5f\x61\x72\147\163\x5f\160\141\x5f\x63\157\154\157\x72", [$this, "\x6d\x63\147\145\x75\141\171\157\x61\155\x77\165\163\x63\x61\x79"]); $this->aqaqisyssqeomwom(self::cgckcqysmyiikaqw . "\x5f\155\x6f\144\151\x66\x79\x5f\x71\165\x65\162\x79\137\x61\x72\x67\x73", [$this, "\163\x63\x67\x75\x61\165\165\141\x65\157\145\145\x77\x77\145\x65"], 1)->aqaqisyssqeomwom(self::cgckcqysmyiikaqw . "\x5f\163\x6f\x72\164\x5f\164\145\x72\155\163\x5f\x62\145\146\x6f\162\145\137\157\x75\x74", [$this, "\x77\x73\x6d\x77\x77\x6f\167\155\x6d\x71\x79\145\x61\x6b\161\x75"], 5)->aqaqisyssqeomwom(self::cgckcqysmyiikaqw . "\x5f\155\x61\x69\156\137\161\165\x65\x72\x79\x5f\x74\141\x78\x5f\x72\145\x6c\x61\164\151\157\156\x73", [$this, "\157\167\155\x65\x73\x65\151\155\143\161\151\x6d\153\x73\x65\x65"], 5); } public function init() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto asmecuqiyyswueqe; } $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $seyqqsmuaiegkeeq = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->mqmocoguqcyymgqu(); foreach ($seyqqsmuaiegkeeq as $ymqmyyeuycgmigyo => $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto myoicgcuugciueis; } if ($mqeowykqcggsieya->cekoogweeooasayu($kesssewsiegssiya)) { goto qgoiooayqmqqsiok; } $seyqqsmuaiegkeeq[$ymqmyyeuycgmigyo] = $mqeowykqcggsieya->qcgakseyaikigqco($kesssewsiegssiya); goto qwigomakwmyiwkgo; qgoiooayqmqqsiok: unset($seyqqsmuaiegkeeq[$ymqmyyeuycgmigyo]); qwigomakwmyiwkgo: myoicgcuugciueis: qogqewiwmwiwskgm: } qiaqsassksqiuyae: self::scyscgskcwukckyy("\x70\162\157\x64\165\x63\x74\137\144\145\x74\141\151\154\163")->gswweykyogmsyawy(__("\x50\x72\157\144\165\143\x74\x20\x44\145\164\141\151\154\163", PR__MDL__WOOCOMMERCE_FILTER))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::oqmosiywgecmeqig)->gswweykyogmsyawy(__("\x50\165\154\x6c\40\122\x65\x70\x6c\x61\x63\145\x6d\145\x6e\164", PR__MDL__WOOCOMMERCE_FILTER))->gucwmccyimoagwcm(__("\x52\145\160\154\141\143\x65\x6d\x65\x6e\x74\x20\146\162\x6f\x6d\40\160\141\162\145\156\x74", PR__MDL__WOOCOMMERCE_FILTER)))->mkksewyosgeumwsa(self::mccagaqeagiikkec(self::ugygausceickekgo)->gswweykyogmsyawy(__("\x45\x78\x63\154\165\x64\145\40\106\x69\154\x74\x65\x72\163", PR__MDL__WOOCOMMERCE_FILTER))->acauweqyyugwisqc($seyqqsmuaiegkeeq)->oikgogcweiiaocka())->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::kgowyeaekuwwskco)->gswweykyogmsyawy(__("\120\165\163\150\x20\122\145\160\154\x61\x63\145\x6d\145\156\164", PR__MDL__WOOCOMMERCE_FILTER))->gucwmccyimoagwcm(__("\122\x65\x70\154\x61\143\x65\x6d\x65\x6e\164\40\151\156\x74\157\x20\143\x68\x69\x6c\x64\162\145\x6e", PR__MDL__WOOCOMMERCE_FILTER)))->auoaeeuwaqswggqg(self::cmckeoksigiaqykc)->register(); asmecuqiyyswueqe: } public function enqueue() { if (!$this->wwqoiqcoccacyyyc()) { goto csscmcacoikwsecs; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ieayqiyiuuguowyq(Setting::ykqqgqskiygugscu, $this->qeomwskywaguqyyu())->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis(self::cgckcqysmyiikaqw, $eygsasmqycagyayw->get("\146\x72\x6f\x6e\x74\56\152\163"))->simswskycwagoeqy()); csscmcacoikwsecs: } public function scguauuaeoeewwee($query_args) { if (!isset($_REQUEST[self::eigiqicogcmgmgwi], $_REQUEST[self::cgckcqysmyiikaqw . "\137\x77\x70\137\161\165\145\162\171\x5f\141\x72\x67\x73"])) { goto cuykwgmswkskqkyi; } $query_args[self::cuoyscoiacswuauq] = $_REQUEST[self::cgckcqysmyiikaqw . "\137\167\x70\137\161\x75\x65\x72\171\137\x61\x72\x67\163"][self::cuoyscoiacswuauq]; $query_args[self::kymceekcoyyeuocm] = $_REQUEST[self::cgckcqysmyiikaqw . "\137\167\x70\x5f\x71\165\145\x72\171\x5f\x61\162\147\x73"][self::kymceekcoyyeuocm]; $query_args[self::kkcqmwgccaygggcu] = $_REQUEST[self::cgckcqysmyiikaqw . "\x5f\167\x70\x5f\161\165\145\162\x79\x5f\141\162\x67\x73"][self::kkcqmwgccaygggcu]; cuykwgmswkskqkyi: return $query_args; } public function oekkmogkuckueyey($immuisiomomksweo) { if (!is_array($immuisiomomksweo)) { goto eqkauqciwewmgeoi; } $ciyackuwsqkoqese = 2; sciwggaeogcoesiu: if (!($ciyackuwsqkoqese <= 7)) { goto kuicqywysciceggs; } $immuisiomomksweo["\x64\x61\x79\163" . $ciyackuwsqkoqese] = ["\x69\156\164\x65\x72\166\141\154" => $ciyackuwsqkoqese * DAY_IN_SECONDS, "\144\151\x73\x70\154\141\x79" => sprintf(__("\145\x61\143\150\40\x25\163\x20\144\141\171\x73", PR__MDL__WOOCOMMERCE_FILTER), $ciyackuwsqkoqese)]; mkwskuycuyguqqok: $ciyackuwsqkoqese++; goto sciwggaeogcoesiu; kuicqywysciceggs: eqkauqciwewmgeoi: return $immuisiomomksweo; } public function wsmwwowmmqyeakqu($uyuaosigqymaqsaa) : array { if (is_array($uyuaosigqymaqsaa)) { goto kwagwqyusyiyoaqs; } $uyuaosigqymaqsaa = []; kwagwqyusyiyoaqs: $iwewcwusemqaiggk = reset($uyuaosigqymaqsaa); if ($iwewcwusemqaiggk) { goto yowsmsiyimmimemc; } return $uyuaosigqymaqsaa; yowsmsiyimmimemc: $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $kesssewsiegssiya = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($iwewcwusemqaiggk, self::gmmygyiecgmggaam); $sikaymiwcesagayc = $ykquycoiqesuckco->giiuwsmyumqwwiyq($kesssewsiegssiya . self::mkikoewciywmikok, -1); $umwqusowiqmyseom = $ykquycoiqesuckco->giiuwsmyumqwwiyq($kesssewsiegssiya . self::uucggqgemiykigga, self::eeccqomoaqsawouy); if (!($sikaymiwcesagayc != -1)) { goto mswsoaimesegiiic; } switch ($sikaymiwcesagayc) { case self::gouqcwikiiygyasc: if ($umwqusowiqmyseom === self::eeccqomoaqsawouy) { goto uukumskkeggaowck; } uasort($uyuaosigqymaqsaa, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) { if (!((int) $mmeioagwmyscwumo[self::ooqggksagkoaeeke] == (int) $csougakqegqiqsgi[self::ooqggksagkoaeeke])) { goto eequksumcoogyoem; } return 0; eequksumcoogyoem: return (int) $mmeioagwmyscwumo[self::ooqggksagkoaeeke] > (int) $csougakqegqiqsgi[self::ooqggksagkoaeeke] ? -1 : 1; }); goto cggowoquuiwqkyew; uukumskkeggaowck: uasort($uyuaosigqymaqsaa, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) { if (!((int) $mmeioagwmyscwumo[self::ooqggksagkoaeeke] === (int) $csougakqegqiqsgi[self::ooqggksagkoaeeke])) { goto sqiciiuwmykocycc; } return 0; sqiciiuwmykocycc: return (int) $mmeioagwmyscwumo[self::ooqggksagkoaeeke] < (int) $csougakqegqiqsgi[self::ooqggksagkoaeeke] ? -1 : 1; }); cggowoquuiwqkyew: goto kiqogmwcgcamwiig; case self::NAME: if ($umwqusowiqmyseom === self::eeccqomoaqsawouy) { goto ocokwuuquaokmasc; } uasort($uyuaosigqymaqsaa, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) { return strnatcasecmp($csougakqegqiqsgi[self::NAME], $mmeioagwmyscwumo[self::NAME]); }); goto yiwiqaqmwiogawym; ocokwuuquaokmasc: uasort($uyuaosigqymaqsaa, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) { return strnatcasecmp($mmeioagwmyscwumo[self::NAME], $csougakqegqiqsgi[self::NAME]); }); yiwiqaqmwiogawym: goto kiqogmwcgcamwiig; case "\156\165\155\x65\x72\x69\143": if ($umwqusowiqmyseom === self::eeccqomoaqsawouy) { goto wcesymwqykqoyuqk; } uasort($uyuaosigqymaqsaa, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) { if (!((int) $mmeioagwmyscwumo[self::ouywiegeiyuaaawo] == (int) $csougakqegqiqsgi[self::ouywiegeiyuaaawo])) { goto meawswgwagoqgkye; } return 0; meawswgwagoqgkye: return (int) $mmeioagwmyscwumo[self::ouywiegeiyuaaawo] > (int) $csougakqegqiqsgi[self::ouywiegeiyuaaawo] ? -1 : 1; }); goto usqgaogkqgemuima; wcesymwqykqoyuqk: uasort($uyuaosigqymaqsaa, static function ($mmeioagwmyscwumo, $csougakqegqiqsgi) { if (!((int) $mmeioagwmyscwumo[self::ouywiegeiyuaaawo] == (int) $csougakqegqiqsgi[self::ouywiegeiyuaaawo])) { goto goacqqsgaaigyuaw; } return 0; goacqqsgaaigyuaw: return (int) $mmeioagwmyscwumo[self::ouywiegeiyuaaawo] < (int) $csougakqegqiqsgi[self::ouywiegeiyuaaawo] ? -1 : 1; }); usqgaogkqgemuima: goto kiqogmwcgcamwiig; } iomcaiwewsawiamu: kiqogmwcgcamwiig: mswsoaimesegiiic: return $uyuaosigqymaqsaa; } public function owmeseimcqimksee($smmwewmmsauaaogi) { if (!($keqkkyiamuuisecu = $this->ieiyuwkyiagkscmk())) { goto qmiwsequckckoaei; } foreach ($keqkkyiamuuisecu as $awiycosuekoeeqou => $qcucwcsuwwsygoyq) { if (!($qcucwcsuwwsygoyq === self::skewaiwksksokmqo)) { goto qgegkeomwscwwiuw; } $smmwewmmsauaaogi[$awiycosuekoeeqou] = $qcucwcsuwwsygoyq; qgegkeomwscwwiuw: kecwuwwcwokuksyq: } egasokooagakisiy: qmiwsequckckoaei: return $smmwewmmsauaaogi; } public function mcgeuayoamwuscay($iyaskikkeegoiucg) { if (!is_array($iyaskikkeegoiucg)) { goto goeoymmqqqeeoime; } $iyaskikkeegoiucg["\161\x75\x65\x72\x79\x5f\x76\x61\x72"] = true; goeoymmqqqeeoime: return $iyaskikkeegoiucg; } public function uoskukyqugmqqiec($gqgemcmoicmgaqie) { if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto eiawsoasmscmqswa; } $ugugimquukqwogge = $this->ocksiywmkyaqseou(self::cgckcqysmyiikaqw . "\x5f\x67\x65\x74\x5f\x6d\145\x74\141\x5f\161\x75\145\162\x79", $gqgemcmoicmgaqie->get(self::cuoyscoiacswuauq)); $gqgemcmoicmgaqie->set(self::cuoyscoiacswuauq, $ugugimquukqwogge); eiawsoasmscmqswa: } public function omiyieugyeysmqkk($aokagokqyuysuksm, $ecukkacusqswqoem, $wggksywsgqeiaqcc) { if (!($wggksywsgqeiaqcc instanceof CMB2 && $aokagokqyuysuksm)) { goto ickcmqoiosquugwe; } $this->uoioccymskiiwgsg($aokagokqyuysuksm, $wggksywsgqeiaqcc->data_to_save); ickcmqoiosquugwe: } public function uoioccymskiiwgsg($aokagokqyuysuksm, $ugugimquukqwogge) { if (!isset($ugugimquukqwogge[self::kgowyeaekuwwskco])) { goto qcessicwuikwqsis; } $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); if (!($okcscwesammossuq = $aoskwucuugeuaeus->mmoaikqueyiwcesm($aokagokqyuysuksm))) { goto qwcegcuowwgiccos; } foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) { $wcgsoqmmciswkmiq = $aoskwucuugeuaeus->iooowgsqoyqseyuu($wcgsoqmmciswkmiq); $aowmesqseaiqimyu = $ugugimquukqwogge[self::ugygausceickekgo] ?? null; $oaskiuwaqyqssquy = $aoskwucuugeuaeus->igawqaomowicuayw($wcgsoqmmciswkmiq, self::oqmosiywgecmeqig, true); if (!$oaskiuwaqyqssquy) { goto kooskuwkuayiuose; } if ($aowmesqseaiqimyu) { goto eyiamcekkgkiawqy; } $aoskwucuugeuaeus->smqukgcyacswysqa($wcgsoqmmciswkmiq, self::ugygausceickekgo); goto twkmiuomimomscew; eyiamcekkgkiawqy: $cyqqgsieawoiiskk = $aoskwucuugeuaeus->igawqaomowicuayw($wcgsoqmmciswkmiq, self::ugygausceickekgo); foreach ($cyqqgsieawoiiskk as $yemgmmgogcwccuky) { if (in_array($yemgmmgogcwccuky, $aowmesqseaiqimyu, true)) { goto sukskmcwsoysiuqu; } $aoskwucuugeuaeus->smqukgcyacswysqa($wcgsoqmmciswkmiq, self::ugygausceickekgo, $aowmesqseaiqimyu); sukskmcwsoysiuqu: cgewcsueoyaeikgm: } cuoqqgaygogsmmic: $ewieakkmayyseocu = array_diff($aowmesqseaiqimyu, $cyqqgsieawoiiskk); foreach ($ewieakkmayyseocu as $uwomkgseoiegeume) { $aoskwucuugeuaeus->giwmekimakcaawsq($wcgsoqmmciswkmiq, self::ugygausceickekgo, $uwomkgseoiegeume); mqccmesakuemceqi: } igymseewwyiocoug: twkmiuomimomscew: kooskuwkuayiuose: $this->uoioccymskiiwgsg($wcgsoqmmciswkmiq, $aoskwucuugeuaeus->igawqaomowicuayw($wcgsoqmmciswkmiq)); ygkcacsyyckescqs: } qmeoaqmsuseueqiy: qwcegcuowwgiccos: qcessicwuikwqsis: } }
