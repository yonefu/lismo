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
			<h5 class="f-16" style="letter-spacing: -2px;">追加で連携するストアのプラットフォームを選択</h5>
			<div class="social-login-container text-center">
				<div class="py-5">
					<div class="custom-control custom-radio custom-control-inline mb-5">
						<input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
						<label class="custom-control-label ml-2" for="customRadioInline1">
							<img src="dist/img/logo-shopify.png" alt="shopify">
						</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
						<label class="custom-control-label ml-2" for="customRadioInline2">
							<img src="dist/img/logo-amazon.png" alt="amazon">
						</label>
					</div>
				</div>
			</div>

			<div class="form-group d-flex justify-content-center align-items-center mb-0">
				<button type="submit" class="btn bg-white text-dark mr-3 w-50"><span>追加しないでスキップ</span></button>
				<button type="submit" class="btn btn-login w-50"><span>次へ進む</span></button>
			</div>
		</form>
	</div>
</div>

<?php include('inc/footer.php'); ?>

