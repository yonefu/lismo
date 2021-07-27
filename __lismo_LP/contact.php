<!DOCTYPE html>
<html lang="jp">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Lisoma">
		<meta name="keywords" content="Lisoma">
		<meta name="robots" content="noindex,nofollow" />
		<title>LISMOA</title>
		<link rel="icon" href="dist/img/site-icon/favicon.ico">
		<link rel="shortcut icon" type="image/x-icon" href="dist/img/site-icon/favicon.ico">
		<link rel="apple-touch-icon" sizes="180x180" href="dist/img/site-icon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="dist/img/site-icon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="dist/img/site-icon/favicon-16x16.png">
		<link rel="manifest" href="dist/img/site-icon/site.webmanifest">
		<link rel="mask-icon" href="dist/img/site-icon/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">
		<!--google fonts-->
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="dist/css/vendor.css">
		<link rel="stylesheet" href="dist/css/theme.css">
	</head>
	<style type="text/css">
		.footer-bg-wrapper:after{
			background: url('dist/img/static-bg.svg') no-repeat;
			background-size: cover;
		}
		.footer {
		    height: 410px;
		}
		header .header-right a.registration-btn{
			display: none;
		}
		@media (min-width: 1440px) {
			.footer .container{
				padding-top: 250px;
			}
		}
		@media (max-width: 1440px) {
			.footer .container{
				padding-top: 220px;
			}
		}
	</style>
	<body>
		<header>
			<div class="header">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<h1 class="logo">
							<a href="index.php"><img src="dist/img/logo.svg" alt="LISMOA" /></a>
						</h1>
						<div class="header-right">
							<a class="registration-btn" href="#registration.php"><span>無料で新規登録</span></a>
							<a class="signup-btn font-weight-bold" href="#signup.php"><span>新規登録</span></a>
							<a class="login-btn font-weight-bold" href="#login.php"><span>ログイン</span></a>
							<div class="menu-toggler">
								<span class=""></span>
								<span class=""></span>
								<span class=""></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--header-->
		<nav class="nav flex-column nav-menu-list">
			<div class="menu-close">
				<span class=""></span>
				<span class=""></span>
				<span class=""></span>
			</div>
			<div class="top-menu">
				<a class="nav-link active" href="#operting_company.php">運営会社</a>
				<a class="nav-link" href="terms_of_service.php">サービス利⽤規約</a>
				<a class="nav-link" href="privacy_policy.php">プライバシーポリシー</a>
				<a class="nav-link" href="commericial_transaction_law.php">特定商取引法に基づく表記</a>
				<a class="nav-link" href="contact.php">お問い合わせ</a>
			</div>
			<div class="bottom-menu">
				<a href="#registration.php" class="btn-dark br-30 f-18 text-center text-white mb-3"><span>無料で新規登録</span></a>
				<a href="#login.php" class="btn-white br-30 f-20 text-center"><span>ログインする</span></a>
			</div>
		</nav>
		<!--nav-->


<section class="contact static-page">
	<div class="container">
		<h3 class="f-30 font-weight-bold page-title">お問い合わせ</h3>
		<p class="f-20 para-txt">
			すでに<span class="font-weight-900">Lismoa</span>ユーザーの⽅は、<br/>
			ログイン後の右下のチャットボタンよりお問い合わせください。
		</p>

		<form action="">
			<div class="form-group">
				<label>お名前<span class="have-to">必須</span></label>
				<input type="text" class="form-control" placeholder="⽥中太郎" required="">
			</div>
			<div class="form-group">
				<label>会社名<span class="have-to">任意</span></label>
				<input type="text" class="form-control" placeholder="" required="">
			</div>
			<div class="form-group">
				<label>メールアドレス<span class="have-to">必須</span></label>
				<input type="email" class="form-control" placeholder="" required="">
			</div>
			<div class="form-group">
				<label>電話番号<span class="have-to">任意</span></label>
				<input type="number" class="form-control" placeholder="" required="">
			</div>
			<div class="form-group">
				<label>お問い合わせ内容<span class="have-to">必須</span></label>
				<textarea class="form-control" rows="5" required=""></textarea>
			</div>
			<button type="submit" class="btn btn-send btn-dark br-40 f-18">送信する</button>
		</form>
		<div class="note f-15">
			送信ボタンをクリックすることで<a href="#"><u>個⼈</u></a>情報<a href="#"><u>の取扱いについて</u></a>に同意されたこととみなしますので、予めご了 承ください。<br/>
			このサイトはreCAPTCHAとGoogleによって保護されています。<a href="#"><u>プライバシーポリシー</u></a>および利⽤規約が適 ⽤されます。
		</div>
	</div>
</section>


		<div class="footer-bg-wrapper">
			<footer>
				<section class="footer">
					<div class="container">
						<h1 class="ftr-logo text-center"><a href="index.php"><img src="dist/img/footer-logo.svg" alt="LISMOA" /></a></h1>
						<ul class="nav justify-content-center footer-menu">
							<li class="nav-item">
								<a class="nav-link" href="#operting_company.php">運営会社</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.php">お問い合わせ</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#signup.php">新規登録</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#login.php">ログイン</a>
							</li>
						</ul>
					</div>
				</section>
			</footer>
		</div>
		<!--footer-bg-wrapper-->

		<a href="javascript:void(0);" class="scrollTo">
			<div class="topTop"><img src="dist/img/icons/slick-next.png" alt="" /></div>
		</a>

		<script src="dist/js/jquery.min.js"></script>
		<script src="dist/js/popper.min.js"></script>
		<script src="dist/js/bootstrap.min.js"></script>
		<script src="dist/js/slick.min.js"></script>
		<script src="dist/js/jquery.matchHeight.js"></script>
		<script src="dist/js/custom.js"></script>

		<!-- Start of shopdemy Zendesk Widget script -->
		<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=483c712a-c9cc-47c3-9e9b-36e4ef73b972"> </script>
		<!-- End of shopdemy Zendesk Widget script -->
	</body>
</html>
