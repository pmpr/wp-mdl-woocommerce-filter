<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64524f4192969             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter\Refinement; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Segment; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\WoocommerceFilter\Interfaces\CommonInterface; use Pmpr\Module\WoocommerceFilter\Setting; use Pmpr\Module\WoocommerceFilter\Traits\CommonTrait; use WP_Query; abstract class Element extends Segment implements CommonInterface { use CommonTrait; const qoiegmkyyyauooso = self::cgckcqysmyiikaqw . "\137\162\x65\146\151\156\145\x6d\145\x6e\164\137\146\x69\x65\x6c\144\163"; const gwsikuuwkaswsoyy = self::cgckcqysmyiikaqw . "\137\x61\166\x61\x69\x6c\141\142\154\x65\x5f\162\145\x66\x69\156\x65\155\x65\156\164\x73"; protected ?string $name = null; protected ?string $title = null; protected ?string $type = null; protected ?string $icon = null; public function aakmagwggmkoiiyu() : ?string { if ($this->name) { goto eogwckcymuugikuy; } $this->name = $this->gueasuouwqysmomu(); eogwckcymuugikuy: return $this->name; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function gueasuouwqysmomu() : ?string { return $this->type; } public function __construct() { $this->setting = Setting::symcgieuakksimmu()->cisyiemkeykgkomc(); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\157\157\143\x6f\155\155\x65\162\x63\145\137\160\162\x6f\x64\x75\143\x74\137\161\x75\145\162\x79", [$this, "\x75\x75\x71\161\x63\165\153\143\153\x75\x73\x63\157\171\141\163"]); $this->waqewsckuayqguos(self::cgckcqysmyiikaqw . "\137\x70\x72\x6f\x64\x75\x63\x74\x5f\161\165\x65\x72\x79", [$this, "\165\165\161\x71\143\x75\153\143\153\165\163\143\x6f\171\141\163"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\x65\x73\143\x61\160\x65\x5f{$this->aakmagwggmkoiiyu()}\x5f\x66\x69\x6c\164\x65\x72", [$this, "\163\x65\153\153\x6d\x77\161\x77\161\x77\143\141\171\151\x77\147"]); $this->aqaqisyssqeomwom("\x61\166\x61\x69\x6c\141\142\x6c\x65\x5f\162\145\x66\151\x6e\x65\155\x65\156\164\163", function ($omqqwgmkqyaqmqew) { $omqqwgmkqyaqmqew[$this->aakmagwggmkoiiyu()] = $this; return $omqqwgmkqyaqmqew; }); parent::kgquecmsgcouyaya(); } public function uuqqcukckuscoyas($gqgemcmoicmgaqie) { if (!($gqgemcmoicmgaqie instanceof WP_Query && $this->ayseokmqycoqaigc() && $this->kokwyquiqyoaaioc()->oisaqgayaackmaai(self::eigiqicogcmgmgwi, [], false))) { goto wagqgeqymeqoeuyi; } $oyiyuuoguwwaksaa = $gqgemcmoicmgaqie->query_vars[self::cuoyscoiacswuauq] ?? []; $this->msgqcwqsemkmwqss($oyiyuuoguwwaksaa, $gqgemcmoicmgaqie); if (isset($oyiyuuoguwwaksaa[self::soqkeeoakocumawu])) { goto msemumccgceyugmg; } $oyiyuuoguwwaksaa[self::soqkeeoakocumawu] = self::skewaiwksksokmqo; msemumccgceyugmg: $gqgemcmoicmgaqie->set(self::cuoyscoiacswuauq, $oyiyuuoguwwaksaa); wagqgeqymeqoeuyi: return $gqgemcmoicmgaqie; } public function msgqcwqsemkmwqss($oyiyuuoguwwaksaa, &$gqgemcmoicmgaqie) { return $oyiyuuoguwwaksaa; } public function render(array $ywmkwiwkosakssii = []) { if (!$this->ayseokmqycoqaigc()) { goto iwsuawwqomaowuii; } $qookweymeqawmcwo = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $this->gayqqwwuycceosii()); if (!$this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qookweymeqawmcwo, "\162\145\156\x64\x65\162", false)) { goto qoqskyuuwueqkquk; } echo $this->iuygowkemiiwqmiw($this->aakmagwggmkoiiyu(), $qookweymeqawmcwo); qoqskyuuwueqkquk: iwsuawwqomaowuii: } public function gayqqwwuycceosii($ymqmyyeuycgmigyo = null) : array { if ($ymqmyyeuycgmigyo) { goto wcugqegqsuuuwqao; } $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); wcugqegqsuuuwqao: $aokagokqyuysuksm = $this->guecmwukeoqiwyac($ymqmyyeuycgmigyo); $eqgoocgaqwqcimie = $this->kokwyquiqyoaaioc()->oiqmuywqkkmuswuc($ymqmyyeuycgmigyo); return ["\x72\145\156\x64\x65\162" => true, self::gouqcwikiiygyasc => $aokagokqyuysuksm, self::NAME => $ymqmyyeuycgmigyo, self::squoamkioomemiyi => $this->euwgygcicmmsagwq($aokagokqyuysuksm), self::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, self::qescuiwgsyuikume => $this->weysguygiseoukqw($ymqmyyeuycgmigyo . self::icmokuskwoskgace) ?? $this->qcgakseyaikigqco(), "\x73\150\x6f\167\x5f\164\151\164\x6c\x65" => __("\x53\x65\x65\x20\x41\x6c\154\x20\111\x74\145\x6d\163", PR__MDL__WOOCOMMERCE_FILTER), "\x68\x69\x64\x65\x5f\164\x69\164\x6c\145" => __("\x43\x6c\157\x73\145", PR__MDL__WOOCOMMERCE_FILTER), "\162\x65\x6d\x6f\166\x65\x5f\x69\x63\x6f\156" => IconInterface::ucomcyskmkiqysee, "\160\x6c\165\x73\137\x69\143\157\x6e" => IconInterface::scqkowciwiiwiuwy, "\x61\162\x72\x6f\167\x5f\165\160\x5f\x69\x63\157\156" => IconInterface::gmqoogkmiakmkweu, "\141\162\162\157\x77\137\144\157\x77\x6e\x5f\151\143\x6f\156" => IconInterface::ckqgusoqoosqqwyo, "\143\157\x6c\154\141\x70\163\x65\x5f\x69\164\x65\x6d\x73" => $this->weysguygiseoukqw(Setting::ukwmkmkkuskewess, false), "\150\x69\x64\x65\137\x6d\x6f\162\x65\x5f\x69\164\x65\x6d\163" => $this->weysguygiseoukqw(Setting::oegqewgkigmcymmq, false)]; } public function euwgygcicmmsagwq($ymqmyyeuycgmigyo = null) : ?string { return $this->eeikyioeusswwmme(self::uimkoimiuiwagwak, $ymqmyyeuycgmigyo, $this->gueasuouwqysmomu()); } public function ayseokmqycoqaigc($ymqmyyeuycgmigyo = null) : bool { return (bool) $this->eeikyioeusswwmme(self::yyicwqsqaecyqwco, $ymqmyyeuycgmigyo, false); } public function sekkmwqwqwcayiwg($eqgoocgaqwqcimie) { return $eqgoocgaqwqcimie; } public function ykwqaukkycogooii() { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); $ikgwqyuyckaewsow = $this->ycwskoawcksousga(); $this->ogimmkwaymekmoky(self::mkcwgaeaaweamyyg($ymqmyyeuycgmigyo)->gswweykyogmsyawy($this->qcgakseyaikigqco())->saemoowcasogykak($this->eyamqkqiykagecsw())->gucwmccyimoagwcm(sprintf(__("\x25\x73\40\x43\x6f\x6e\146\x69\147\165\162\x61\164\151\x6f\x6e", PR__MDL__WOOCOMMERCE_FILTER), $this->qcgakseyaikigqco()))->kwkugmqouisgkqig(self::ycgeeoiieoiakgam($ymqmyyeuycgmigyo . self::iusoecsswgekecks)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->gswweykyogmsyawy(__("\107\145\156\145\162\x61\x6c", PR__MDL__WOOCOMMERCE_FILTER))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww($this->esmcwikgmwoaeoyy(self::yyicwqsqaecyqwco, $ymqmyyeuycgmigyo))->gswweykyogmsyawy(__("\x55\163\145\x20\151\156\40\106\151\154\164\x65\162", PR__MDL__WOOCOMMERCE_FILTER))->gucwmccyimoagwcm(__("\x43\150\145\143\x6b\40\x74\x68\151\x73\40\x6f\x70\164\151\157\156\54\x20\x69\146\40\x79\157\165\x20\x77\141\156\x74\x20\x73\x68\x6f\x77\40\x74\150\151\x73\40\x69\164\145\x6d\x20\151\156\40\146\151\154\164\x65\162\56", PR__MDL__WOOCOMMERCE_FILTER)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws($this->esmcwikgmwoaeoyy(self::qescuiwgsyuikume, $ymqmyyeuycgmigyo))->gswweykyogmsyawy(__("\104\x69\163\x70\x6c\141\x79\40\124\151\164\154\x65", PR__MDL__WOOCOMMERCE_FILTER))->eyygsasuqmommkua($this->qcgakseyaikigqco())->gucwmccyimoagwcm(__("\124\150\x69\x73\x20\164\151\164\x6c\145\x20\x75\163\145\144\x20\x69\156\40\146\151\154\164\x65\x72\40\146\x6f\162\x6d\40\x61\x73\x20\x74\x68\151\163\40\146\x69\154\x74\x65\162\x20\163\x65\143\x74\151\157\156\40\x74\151\164\154\145\56\56", PR__MDL__WOOCOMMERCE_FILTER))))->kwkugmqouisgkqig(self::ycgeeoiieoiakgam($ymqmyyeuycgmigyo . self::wiawyoegoyeweaoe)->saemoowcasogykak(IconInterface::isscgcamsuaqwwkc)->gswweykyogmsyawy(__("\x41\x64\166\x61\x6e\143\145\x64", PR__MDL__WOOCOMMERCE_FILTER))->ewweaossowcqywaw($ikgwqyuyckaewsow))); parent::ykwqaukkycogooii(); } public function esmcwikgmwoaeoyy(string $omkysikckkcieckq, $ymqmyyeuycgmigyo = null) : string { if ($ymqmyyeuycgmigyo) { goto asiqwuoswmigcaki; } $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); asiqwuoswmigcaki: return $ymqmyyeuycgmigyo . self::wassgkgmoyygyaya . $omkysikckkcieckq; } public function eeikyioeusswwmme(string $omkysikckkcieckq, $ymqmyyeuycgmigyo = null, $ggauoeuaesiymgee = null) { return $this->weysguygiseoukqw($this->esmcwikgmwoaeoyy($omkysikckkcieckq, $ymqmyyeuycgmigyo), $ggauoeuaesiymgee); } public function weysguygiseoukqw($uusmaiomayssaecw, $ggauoeuaesiymgee = null, $gmcgeogogyqsgawk = null) { return Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq($uusmaiomayssaecw, $ggauoeuaesiymgee, $gmcgeogogyqsgawk); } public function ycwskoawcksousga() : array { return []; } }
