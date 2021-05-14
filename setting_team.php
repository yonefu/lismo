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
									<span>チーム設定</span>
								</h3>
							</div>
							<!--top-block-->
							<div class="br-25">
								<div class="form-box mb-3">
									<form>
										<div class="form-box_1">
										<p class="form-heading mb-4 f-18">チーム情報</p>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12 pr-0">区分</label>
											<div class="col-lg-9">
												<div class="custom-control custom-radio custom-control-inline">
													<input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
													<label class="custom-control-label" for="customRadioInline1">法⼈</label>
												</div>
												<div class="custom-control custom-radio custom-control-inline">
													<input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
													<label class="custom-control-label" for="customRadioInline2">個⼈</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12 pr-0">会社名 / 屋号</label>
											<div class="col-lg-9">
												<input type="text"  class="form-control" placeholder="⽥中太郎">
											</div>
										</div>

										<div class="form-group row justify-content-end mt-5 mb-0">
											<div class="pr-3">
												<a href="#" class="btn btn-cancel mb-2 mr-2"><span>キャンセル</span></a>
												<a href="#" class="btn btn-dark mb-2"><span>保存する</span></a>
											</div>
										</div>
									</div>

										<!--form-box-->

										<div class="form-box">
												<p class="form-heading mb-4 f-18">住所</p>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label f-12 pr-0">国</label>
													<div class="col-lg-9">
														<select class="custom-select form-control">
															<option selected>XXXXXXX</option>
															<option value="1">XXXXXXX</option>
															<option value="2">XXXXXXX</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label f-12 pr-0">郵便番号</label>
													<div class="col-lg-9">
														<input type="text"  class="form-control" placeholder="郵便番号">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label f-12 pr-0">都道府県</label>
													<div class="col-lg-9">
														<input type="text"  class="form-control" placeholder="都道府県">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label f-12 pr-0">市区町村</label>
													<div class="col-lg-9">
														<input type="text"  class="form-control" placeholder="市区町村">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label f-12 pr-0">住所1</label>
													<div class="col-lg-9">
														<input type="text"  class="form-control" placeholder="住所1">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label f-12 pr-0">住所2</label>
													<div class="col-lg-9">
														<input type="text"  class="form-control" placeholder="住所2">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label f-12 pr-0">電話番号</label>
													<div class="col-lg-9">
														<input type="text"  class="form-control" placeholder="電話番号">
													</div>
												</div>
												<div class="form-group row justify-content-end mt-5 mb-0">
													<div class="pr-3">
														<a href="#" class="btn btn-cancel mb-2 mr-2"><span>キャンセル</span></a>
														<a href="#" class="btn btn-dark mb-2"><span>保存する</span></a>
													</div>
												</div>
										</div>
										<!--form-box-->
									</form>
								</div>
								
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

