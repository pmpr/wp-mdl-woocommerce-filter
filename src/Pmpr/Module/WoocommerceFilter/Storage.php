<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6241d618a3135             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceFilter; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Storage extends Container { const ouqgiccuookgiioq = "\x63\157\x6f\x6b\x69\145"; const moocuyskywyosass = "\164\x72\141\x6e\163\151\145\156\x74"; const sokgkegywgcccmwc = "\163\x65\163\163\151\x6f\x6e"; protected ?string $ip = null; protected ?string $key = null; protected ?string $type = self::moocuyskywyosass; public function __construct($sqeykgyoooqysmca = '') { if (!$sqeykgyoooqysmca) { goto sqiciiuwmykocycc; } $this->aseocggwwegcmqes($sqeykgyoooqysmca); sqiciiuwmykocycc: if (!($this->gueasuouwqysmomu() === self::moocuyskywyosass && !session_id())) { goto eequksumcoogyoem; } try { @session_start(); } catch (Exception $wgaoewqkwgomoaai) { } eequksumcoogyoem: $this->ksqoomuuqmwowiim(ManipulateUser::meymqemgekqiawec()); $this->gcgmwakaoecqcuwo(md5($this->meymqemgekqiawec() . self::cgckcqysmyiikaqw . "\x5f\x73\141\x6c\x74")); parent::__construct(); } public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self { $this->type = $sqeykgyoooqysmca; return $this; } public function gueasuouwqysmomu() : ?string { return $this->type; } public function ksqoomuuqmwowiim(?string $kucumcusyyckayas) : self { $this->ip = $kucumcusyyckayas; return $this; } public function meymqemgekqiawec() : ?string { return $this->ip; } public function gcgmwakaoecqcuwo(?string $uusmaiomayssaecw) : self { $this->key = $uusmaiomayssaecw; return $this; } public function cisyiemkeykgkomc() : ?string { return $this->key; } public function set($uusmaiomayssaecw, $eqgoocgaqwqcimie) { switch ($this->gueasuouwqysmomu()) { case self::moocuyskywyosass: ManipulateWoocommerce::giyscymwkesykqsg($uusmaiomayssaecw, $eqgoocgaqwqcimie); goto uukumskkeggaowck; case self::sokgkegywgcccmwc: $icwicymcioeyeyek = DecoratorOption::igqksmmwesguiaae($this->cisyiemkeykgkomc()); if (is_array($icwicymcioeyeyek)) { goto ocokwuuquaokmasc; } $icwicymcioeyeyek = []; ocokwuuquaokmasc: $icwicymcioeyeyek[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; DecoratorOption::gawcqwcqgwgucgya($this->cisyiemkeykgkomc(), $icwicymcioeyeyek, DAY_IN_SECONDS); goto uukumskkeggaowck; case self::ouqgiccuookgiioq: setcookie($uusmaiomayssaecw, $eqgoocgaqwqcimie, time() + DAY_IN_SECONDS); goto uukumskkeggaowck; } cggowoquuiwqkyew: uukumskkeggaowck: } public function get(?string $uusmaiomayssaecw, $ggauoeuaesiymgee = null) { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; if (!$uusmaiomayssaecw) { goto wcesymwqykqoyuqk; } switch ($this->gueasuouwqysmomu()) { case self::moocuyskywyosass: if (!$this->umuecysoywoumgwo($uusmaiomayssaecw)) { goto meawswgwagoqgkye; } $eqgoocgaqwqcimie = ManipulateWoocommerce::wugwewwmekuaamos($uusmaiomayssaecw); meawswgwagoqgkye: goto yiwiqaqmwiogawym; case self::sokgkegywgcccmwc: $icwicymcioeyeyek = DecoratorOption::igqksmmwesguiaae($this->cisyiemkeykgkomc()); $eqgoocgaqwqcimie = ManipulateArray::get($icwicymcioeyeyek, $uusmaiomayssaecw, $ggauoeuaesiymgee); goto yiwiqaqmwiogawym; case self::ouqgiccuookgiioq: $eqgoocgaqwqcimie = ManipulateArray::get($_COOKIE, $uusmaiomayssaecw, $ggauoeuaesiymgee); goto yiwiqaqmwiogawym; } goacqqsgaaigyuaw: yiwiqaqmwiogawym: wcesymwqykqoyuqk: return $eqgoocgaqwqcimie; } public function umuecysoywoumgwo(?string $uusmaiomayssaecw) : bool { $oyuakceioggwckok = false; if (!$uusmaiomayssaecw) { goto egasokooagakisiy; } switch ($this->gueasuouwqysmomu()) { case self::moocuyskywyosass: $oyuakceioggwckok = ManipulateWoocommerce::suuykkmmwsqygmse($uusmaiomayssaecw); goto usqgaogkqgemuima; case self::sokgkegywgcccmwc: $oyuakceioggwckok = !empty($this->get($uusmaiomayssaecw)); goto usqgaogkqgemuima; case self::ouqgiccuookgiioq: $oyuakceioggwckok = isset($_COOKIE[$uusmaiomayssaecw]); goto usqgaogkqgemuima; } mswsoaimesegiiic: usqgaogkqgemuima: egasokooagakisiy: return $oyuakceioggwckok; } public function remove(?string $uusmaiomayssaecw) { if (!$uusmaiomayssaecw) { goto ickcmqoiosquugwe; } switch ($this->gueasuouwqysmomu()) { case self::moocuyskywyosass: if (!$this->umuecysoywoumgwo($uusmaiomayssaecw)) { goto qmiwsequckckoaei; } ManipulateWoocommerce::ksmoqkmkwiyumoim($uusmaiomayssaecw); qmiwsequckckoaei: goto kecwuwwcwokuksyq; case self::sokgkegywgcccmwc: if (!$this->umuecysoywoumgwo($uusmaiomayssaecw)) { goto goeoymmqqqeeoime; } $icwicymcioeyeyek = DecoratorOption::igqksmmwesguiaae($this->cisyiemkeykgkomc()); ManipulateArray::unset($icwicymcioeyeyek, $uusmaiomayssaecw); DecoratorOption::gawcqwcqgwgucgya($this->cisyiemkeykgkomc(), $icwicymcioeyeyek, DAY_IN_SECONDS); goeoymmqqqeeoime: goto kecwuwwcwokuksyq; case self::ouqgiccuookgiioq: if (!$this->umuecysoywoumgwo($uusmaiomayssaecw)) { goto eiawsoasmscmqswa; } unset($_COOKIE[$uusmaiomayssaecw]); setcookie($uusmaiomayssaecw, '', time() - 3600, "\57"); eiawsoasmscmqswa: goto kecwuwwcwokuksyq; } qgegkeomwscwwiuw: kecwuwwcwokuksyq: ickcmqoiosquugwe: } }
