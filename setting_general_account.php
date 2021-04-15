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
								<div class="account-delete">
									<button type="button" class="btn btn-red br-25">このアカウントを削除する</button>
								</div>
								<div class="form-box">
									<form>
										<p class="form-heading mb-4 f-15">アカウント設定</p>
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
													<option selected>⽥中太郎</option>
													<option value="1">⽥中太郎</option>
													<option value="2">⽥中太郎</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12 pr-0">⾔語設定</label>
											<div class="col-lg-9">
												<select class="custom-select form-control">
													<option selected>101-0001</option>
													<option value="1">101-0001</option>
													<option value="2">101-0001</option>
												</select>
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

								<div class="form-box">
									<form>
										<p class="form-heading mb-4 f-15">ページ閲覧権限</p>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12 pr-0">レポート</label>
											<div class="col-lg-9">
												<div class="d-flex align-items-center justify-content-between">
													<span class="clr-green view">閲覧可能</span>
													<div class="checkbox switcher">
														<label class="mb-0" for="switchIcon1">
															<input type="checkbox" id="switchIcon1" value="" checked>
															<span><small></small></span>
														</label>
												    </div>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12 pr-0">出品</label>
											<div class="col-lg-9">
												<div class="d-flex align-items-center justify-content-between">
													<span class="clr-green view">閲覧可能</span>
													<div class="checkbox switcher">
														<label class="mb-0" for="switchIcon2">
															<input type="checkbox" id="switchIcon2" value="" checked>
															<span><small></small></span>
														</label>
												    </div>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12 pr-0">在庫</label>
											<div class="col-lg-9">
												<div class="d-flex align-items-center justify-content-between">
													<span class="clr-red not-view">閲覧不可</span>
													<div class="checkbox switcher">
														<label class="mb-0" for="switchIcon23">
															<input type="checkbox" id="switchIcon3" value="">
															<span><small></small></span>
														</label>
												    </div>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12 pr-0">仕⼊れ</label>
											<div class="col-lg-9">
												<div class="d-flex align-items-center justify-content-between">
													<span class="clr-green view">閲覧可能</span>
													<div class="checkbox switcher">
														<label class="mb-0" for="switchIcon4">
															<input type="checkbox" id="switchIcon4" value="" checked>
															<span><small></small></span>
														</label>
												    </div>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12 pr-0">受注</label>
											<div class="col-lg-9">
												<div class="d-flex align-items-center justify-content-between">
													<span class="clr-green view">閲覧可能</span>
													<div class="checkbox switcher">
														<label class="mb-0" for="switchIcon5">
															<input type="checkbox" id="switchIcon5" value="" checked>
															<span><small></small></span>
														</label>
												    </div>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12 pr-0">設定</label>
											<div class="col-lg-9">
												<div class="d-flex align-items-center justify-content-between">
													<span class="clr-red not-partly-view">閲覧⼀部不可</span>
													<div class="checkbox switcher">
														<label class="mb-0" for="switchIcon6">
															<input type="checkbox" id="switchIcon6" value="">
															<span><small></small></span>
														</label>
												    </div>
												</div>
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
								<!--form-box mb-3-->
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

