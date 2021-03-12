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
			<h5>パスワードを再設定</h5>
			<div class="form-group">
				<label>メールアドレス</label>
				<input type="email" class="form-control" placeholder="lismoademo@gmail.com" required="">
			</div>
			<div class="form-group d-flex justify-content-end align-items-center mb-0">
				<button type="submit" class="btn btn-login">送信する</button>
			</div>
		</form>
	</div>
	<div class="login-links">
		<ul class="nav flex-column">
			<li>
				<a href="create_new_account.php">新規アカウントを作る</a>
			</li>
			<li>
				<a href="login.php">ログインする</a>
			</li>
		</ul>
	</div>
</div>

<?php include('inc/footer.php'); ?>

