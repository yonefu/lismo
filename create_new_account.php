<?php include('inc/header.php'); ?>
<style type="text/css">
	body{
		height: 100vh;
		overflow: hidden;
		position: relative;
	}

	body:after {
		position: absolute;
		background: url(./dist/img/login-bg.png) no-repeat;
		background-position: bottom;
		background-size: cover;
		overflow: hidden;
		content: "";
		height: 100%;
		width: 100%;
		top: 20%;
		z-index: -1;
	}

</style>

<div class="login-form">
	<div class="form-wrapper">
		<h1 class="logo">
			<img src="dist/img/logo.svg" alt="lismoa" />
		</h1>
		<form action="">
			<h5>新規アカウントを無料で作成</h5>
			<div class="social-login-container">
				<ul class="nav">
					<li class="mr-2">
						<button type="button" class="btn"><i class="icon icon-google"></i><span>Google</span>で作成する</button>
					</li>
				</ul>
			</div>
			<div class="form-group">
				<label>メールアドレス</label>
				<input type="email" class="form-control" placeholder="lismoademo@gmail.com" required="">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">パスワード</label>
				<input type="password" class="form-control" placeholder="●●●●●●●●●●" required="">
			</div>
			<div class="form-group d-flex justify-content-between align-items-center mb-0">
				<div class="form-check pl-0">
					<div class="position-relative custom-control custom-checkbox pl-3">
						<input type="checkbox" class="form-check-input custom-control-input ml-0" id="checkbox">
						<label class="custom-control-label" for="checkbox"></label>
					</div>
					<label class="form-check-label" for="checkbox">利⽤規約・個⼈情報等保護⽅針に同意する</label>
				</div>
				<button type="submit" class="btn btn-login">作成する</button>
			</div>
		</form>
	</div>
	<div class="login-links">
		<ul class="nav flex-column">
			<li>
				<a href="login.php">ログインする</a>
			</li>
			<li>
				<a href="reset_password.php">パスワードを忘れたので再設定する</a>
			</li>
			<li>
				<a href="resend_verification_email.php">認証メールが届かないので再送信する</a>
			</li>
		</ul>
	</div>
</div>

<?php include('inc/footer.php'); ?>

