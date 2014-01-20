<?php
define('PUB_URL_ENABLED', false);
define('PUB_URL', 'http://haf.jp/~butajyuku/');
define('FORM_ROOT_URL', 'http://aglio.yhsweb.jp/theater-labo/');

$ROOT_URL = FORM_ROOT_URL;
if (defined('PUB_URL_ENABLED') && PUB_URL_ENABLED === true) {
	$ROOT_URL = PUB_URL;
}
//var_dump($ROOT_URL, PUB_URL, PUB_URL_ENABLED, defined('PUB_URL_ENABLED'));

$HEADER=<<<_END_
<!DOCTYPE html>
<!--[if lt IE 7]>	  <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>		 <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>		 <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>[北海道舞台塾シアターラボ札幌] - web予約</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">

		<link rel="stylesheet" href="${ROOT_URL}css/bootstrap.min.css">
		<style>
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
		</style>
		<link rel="stylesheet" href="${ROOT_URL}css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="${ROOT_URL}css/main.css">

		<script src="${ROOT_URL}js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

		<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>

		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="${ROOT_URL}"><strong>シアターラボ札幌</strong></a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li class=""><a href="${ROOT_URL}">ホーム</a></li>
<!--
							<li class=""><a href="${ROOT_URL}about.html">シアターラボについて</a></li>
							<li class=""><a href="${ROOT_URL}info.html">公演情報</a></li>
							<li class="dropdown ">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">作品紹介 <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li class=""><a href="${ROOT_URL}suzuki.html"><span class="nav-caption">柴幸男 × イトウワカナ</span><br/>「鈴木１４世」</a></li>
									<li class=""><a href="${ROOT_URL}kanojo.html"><span class="nav-caption">泊篤志 × 小佐部明広</span><br/>「彼女のスープレックス」</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">ブログ <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="http://blog.livedoor.jp/labo_intro/">introチーム<br/>「鈴木１４世」</a></li>
									<li><a href="http://blog.livedoor.jp/labo_atelier/">劇団アトリエチーム<br/>「彼女のスープレックス」</a></li>
								</ul>
							</li>
-->
							<li class="active"><a href="${ROOT_URL}mailform/">web予約</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="container">

<!--
			<div class="row">
							<div class="span7">
					<img src="${ROOT_URL}img/logo.png" />
				</div>
				<div class="span5">
					<img src="${ROOT_URL}img/date.png" style="margin-top:22px;" />
				</div>
			</div>

			<hr />
-->
_END_;

$FOOTER=<<<_END_
			<hr />

			<footer class="tape">
				<dl class="dl-horizontal">
					<dt>主催：</dt><dd>北海道舞台塾実行委員会、北海道、公益財団法人北海道文化財団</dd>
					<dt>助成：</dt><dd>財団法人地域創造</dd>
					<dt>問い合わせ：</dt><dd>北海道舞台塾実行委員会事務局（公益財団法人北海道文化財団内） TEL. 011-272-0501<br />9:00～17:30 土・日曜祝日定休</dd>
				</dl>
				<dl class="dl-horizontal">
					<dt></dt>
					<dd>
						<p>
							Copyright &copy; 2012 Hokkaido Arts Foundation. All rights reserved.
						</p>
						<p>
							公益財団法人北海道文化財団
							<br />〒060-0042　北海道札幌市中央区大通西5丁目11　大五ビルヂング 3階
							<br />TEL 011-272-0501　FAX 011-272-0400 
						</p>
					</dd>
				</dl>
			</footer>

		</div> <!-- /container -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="${ROOT_URL}js/vendor/jquery-1.9.0.min.js"><\/script>')</script>

		<script src="${ROOT_URL}js/vendor/bootstrap.min.js"></script>

		<script src="${ROOT_URL}js/plugins.js"></script>
		<script src="${ROOT_URL}js/main.js"></script>

		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-38091969-1']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</body>
</html>
_END_;

