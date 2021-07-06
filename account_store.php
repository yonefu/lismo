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
			<a href="login.php"><img src="dist/img/logo.svg" alt="lismoa" /></a>
		</h1>
		<form action="">
			<h5>ログインしてリスモアと連携</h5>
			<div class="social-login-container text-center">
				<img src="dist/img/logo-shopify.png" alt="shopify">
			</div>
			<div class="form-group">
				<label>連携するストアのメールアドレス</label>
				<input type="email" class="form-control" placeholder="lismoademo@gmail.com" required="">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">パスワード</label>
				<input type="password" class="form-control" placeholder="●●●●●●●●●●" required="">
			</div>
			<div class="form-group d-flex justify-content-center align-items-center mb-0">
				<button type="submit" class="btn bg-white text-dark mr-3 w-50"><span>戻る</span></button>
				<button type="submit" class="btn btn-login w-50"><span>連携する</span></button>
			</div>
		</form>
	</div>
</div>

<?php include('inc/footer.php'); ?>

