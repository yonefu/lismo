<?php include('inc/header.php'); ?>

<div class="outer-page-wrap">
	<div class="container-fluid">
		<div class="d-flex">

			<?php include('inc/side_menu.php'); ?>

			<div class="inner-page-wrap">
				<div class="setting-page w-100">
					<div class="setting-inner-wrap d-flex">
						<?php include('inc/side_setting_menu.php'); ?>
						<div class="setting-wrap">
							<div class="top-block">
								<h3 class="page-title mb-4">
									<span>アカウント設定</span>
								</h3>
							</div>
							<!--top-block-->
							<div class="bg-white br-25">
								<div class="form-box">
									<form>
										<p class="form-heading mb-4 f-18">アカウント基本設定</p>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12 pr-0">ユーザー名</label>
											<div class="col-lg-9">
												<input type="text"  class="form-control" placeholder="⽥中太郎">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12 pr-0">メールアドレス</label>
											<div class="col-lg-9">
												<input type="email"  class="form-control" placeholder="tanaka@gmail.com">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12 pr-0">外部サービス</label>
											<div class="col-lg-9 d-flex">
												<a href="#" class="mr-1">
													<img class="img-fluid" src="dist/img/icon-google.png" alt="Google Icon" width="175px" />
												</a>
												<!-- <a href="#">
													<img class="img-fluid" src="dist/img/icon-facebook.png" alt="Facebook Icon" />
												</a> -->
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12 pr-0">担当拠点</label>
											<div class="col-lg-9">
												<select class="custom-select form-control">
													<option selected>全配送拠点</option>
													<option value="1">全配送拠点</option>
													<option value="2">全配送拠点</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12 pr-0">⾔語設定</label>
											<div class="col-lg-9">
												<select class="custom-select form-control">
													<option selected>⽇本語</option>
													<option value="1">⽇本語</option>
													<option value="2">⽇本語</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12 pr-0">権限</label>
											<div class="col-lg-9">
												<input type="text"  class="form-control" placeholder="メンバー  変更は管理者のみ可能">
												<span></span>
											</div>
										</div>
										<div class="form-group row justify-content-end mt-5">
											<div class="pr-3">
												<a href="#" class="btn btn-cancel mb-2 mr-2"><span>キャンセル</span></a>
												<a href="#" class="btn btn-dark mb-2"><span>保存する</span></a>
											</div>
										</div>
									</form>
								</div>
								<!--form-box-->
							</div>
							<!--bg-white br-25-->
						</div>
						<!--setting-wrap-->
					</div>
					<!--setting-inner-wrap-->
				</div>
				<!--list-page w-100-->
			</div>
			<!--"inner-page-wrap-->
		</div>
	</div>
	<!--container-fluid-->
</div>
<!--outer-page-wrap-->
<?php include('inc/footer.php'); ?>

