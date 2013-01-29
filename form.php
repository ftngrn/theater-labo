<!DOCTYPE html>
<!--[if lt IE 7]>	  <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>		 <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>		 <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>シアターラボ札幌 プレ公演</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<style>
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
		</style>
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css/main.css">

		<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	</head>
	<body>

		<!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="./"><strong>シアターラボ札幌 プレ公演</strong></a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li><a href="./">ホーム</a></li>
							<li><a href="about.html">シアターラボについて</a></li>
							<li class="active"><a href="info.html">公演情報</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">作品紹介 <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="suzuki.html">鈴木１４世</a></li>
									<li><a href="kanojo.html">彼女のスープレックス</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">ブログ <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">イトウワカナ</a></li>
									<li><a href="#">小佐部明広</a></li>
								</ul>
							</li>
							<li><a href="http://theater-labo.gimmix.biz/form.php">web予約</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>

		<div class="container">

			<div class="row">
				<div class="span7">
					<img src="./img/logo.png" />
				</div>
				<div class="span5">
					<img src="./img/date.png" style="margin-top:22px;" />
				</div>
			</div>

			<!-- Example row of columns -->
			<h2>予約フォーム</h2>
			<div class="row">
				<div class="span8 offset2 tape">
					<form id="book" class="form-horizontal" action="./form.php" method="post" onsubmit="return chValue();">
					<fieldset>

						<div class="control-group">
							<label class="control-label" for="inputType">券種</label>
							<div class="controls">
								<label class="radio">
									<input type="radio" name="type" value="1作品券" required checked="checked" />1作品券
								</label>
								<label class="radio">
									<input type="radio" name="type" value="2作品券" required />2作品券
								</label>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="inputName">お名前</label>
							<div class="controls">
								<input type="text" id="inputName" name="name" required>
								<span class="help-inline">※必須項目です</span>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="inputKana">フリガナ</label>
							<div class="controls">
								<input type="text" id="inputKana" name="kana" required>
								<span class="help-inline">※必須項目です</span>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="inputMail">メール</label>
							<div class="controls">
								<input type="text" id="inputMail" name="mail" required>
								<span class="help-inline">※必須項目です</span>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="inputTel">電話</label>
							<div class="controls">
								<input type="tel" id="inputTel" name="tel" required>
								<span class="help-inline">※必須項目です</span>
							</div>
						</div>

						<div class="control-group">
							<div class="controls">
								<button type="submit" class="btn btn-large btn-primary">上記の内容で良いですか</button>
							</div>
						</div>
					</fieldset>
					</form>
				</div>
			</div>

			<hr>

			<footer class="tape">
				<dl class="dl-horizontal">
					<dt>主催：</dt><dd>北海道舞台塾実行委員会、北海道、公益財団法人北海道文化財団</dd>
					<dt>問い合わせ：</dt><dd>北海道文化財団 TEL. 011-272-0501</dd>
				</dl>
				<p class="offset2">
					Copyright &copy; 2012 Hokkaido Arts Foundation. All rights reserved.
				</p>
				<p class="offset2">
					財団法人北海道文化財団
					<br />〒060-0042　北海道札幌市中央区大通西5丁目11　大五ビルヂング 3階
					<br />TEL 011-272-0501　FAX 011-272-0400 
				</p>
			</footer>

		</div> <!-- /container -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>

		<script src="js/vendor/bootstrap.min.js"></script>

		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>

		<script>
function chValue() {
	var ret = false;

	var name = jQuery.trim($('#inputName').val());
	var kana = jQuery.trim($('#inputKana').val());
	var mail = jQuery.trim($('#inputMail').val());
	var tel = jQuery.trim($('#inputTel').val());

	if (name != "" && kana != "" && mail != "" && tel != "") {
		ret = true;
	}
	else {
		if (name == "") {
			$('#inputName').parents('.control-group:first').addClass('error');
			$('#inputName').val("");
		} else {
			$('#inputName').parents('.control-group:first').removeClass('error');
		}
		if (kana == "") {
			$('#inputKana').parents('.control-group:first').addClass('error');
			$('#inputKana').val("");
		} else {
			$('#inputKana').parents('.control-group:first').removeClass('error');
		}
		if (mail == "") {
			$('#inputMail').parents('.control-group:first').addClass('error');
			$('#inputMail').val("");
			console.log($('#inputMail').val(""));
		} else {
			$('#inputMail').parents('.control-group:first').removeClass('error');
		}
		if (tel == "") {
			$('#inputTel').parents('.control-group:first').addClass('error');
			$('#inputTel').val("");
		} else {
			$('#inputTel').parents('.control-group:first').removeClass('error');
		}
	}

	return ret;
}


			var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>
	</body>
</html>
