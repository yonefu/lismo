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
			<h5>連携が完了しました</h5>
			<div class="social-login-container text-center">
				<div class="py-5">
					<img src="dist/img/logo-shopify.png" alt="shopify">
					<p class="mt-2">グランドストリートD2C店</p>
				</div>
			</div>

			<div class="form-group d-flex justify-content-center align-items-center mb-0">
				<button type="submit" class="btn bg-white text-dark mr-3 w-50"><span>さらにストアを追加する</span></button>
				<button type="submit" class="btn btn-login w-50"><span>リスモアを始める</span></button>
			</div>
		</form>
	</div>
</div>

<?php include('inc/footer.php'); ?>

