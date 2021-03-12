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
										<p class="form-heading mb-4 f-15">現在のお⽀払いプラン</p>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12">プラン名</label>
											<div class="col-lg-9">
												<input type="text"  class="form-control" placeholder="⽥中太郎">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12">⽀払い予定⽇</label>
											<div class="col-lg-9 ">
												 <div class="datepicker date input-group p-0 shadow-sm">
								                    <input type="text" placeholder="Choose a reservation date" class="form-control" id="reservationDate">
								                    <div class="input-group-append">
								                    	<span class="input-group-text px-3"><i class="fa fa-calendar"></i></span>
								                    </div>
								                </div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12">割引クーポン</label>
											<div class="col-lg-9">
												<input type="text"  class="form-control" placeholder="⽥中太郎">
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
										<p class="form-heading mb-4 f-15">現在の⽀払いクレジットカード</p>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12">区分</label>
											<div class="col-lg-9">
												<div class="custom-control custom-radio custom-control-inline">
													<input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
													<label class="custom-control-label" for="customRadioInline1">法⼈</label>
												</div>
												<div class="custom-control custom-radio custom-control-inline">
													<input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
													<label class="custom-control-label" for="customRadioInline2">Or 個⼈</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12">会社名 / 屋号</label>
											<div class="col-lg-9">
												<input type="text"  class="form-control" placeholder="⽥中太郎">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12">主な業種</label>
											<div class="col-lg-9">
												<input type="text"  class="form-control" placeholder="⽥中太郎">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12">タイムゾーン</label>
											<div class="col-lg-9">
												<input type="text"  class="form-control" placeholder="⽥中太郎">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12">表⽰通貨</label>
											<div class="col-lg-9">
												<input type="text"  class="form-control" placeholder="⽥中太郎">
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

