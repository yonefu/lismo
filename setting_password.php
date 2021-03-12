<?php include('inc/header.php'); ?>

<div class="outer-page-wrap">
	<div class="container-fluid">
		<div class="d-flex">

			<?php include('inc/side_menu.php'); ?>

			<div class="inner-page-wrap">
				<div class="setting-page w-100">
					<div class="top-block">
						<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
							<h3 class="page-title mb-1">
								<span>設定</span>
							</h3>
						</div>
						<!--div-->
					</div>
					<!--top-block-->

					<div class="setting-inner-wrap d-flex">
						<?php include('inc/side_setting_menu.php'); ?>
						<div class="setting-wrap">
							<div class="bg-white br-25">
								<div class="form-box">
									<form>
										<p class="form-heading mb-4 f-15">パスワードの変更</p>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12">新しいパスワード<br/> 6⽂字以上</label>
											<div class="col-lg-9">
												<input type="text"  class="form-control" placeholder="⽥中太郎">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12">新しいパスワードの<br/>確認</label>
											<div class="col-lg-9">
												<input type="email"  class="form-control" placeholder="tanaka@gmail.com">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12">現在のパスワード</label>
											<div class="col-lg-9">
												<input type="email"  class="form-control" placeholder="tanaka@gmail.com">
											</div>
										</div>
										<div class="form-group row justify-content-end mt-4">
											<div class="pr-3">
												<a href="#" class="btn btn-red mb-2 mr-2"><span>キャンセル</span></a>
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
					<!--setting-inner-wrap d-flex-->
				</div>
				<!--setting-page w-100-->
			</div>
			<!--"inner-page-wrap-->
		</div>
	</div>
	<!--container-fluid-->
</div>
<!--outer-page-wrap-->
<?php include('inc/footer.php'); ?>

