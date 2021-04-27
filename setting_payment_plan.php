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
								<div class="d-flex flex-wrap justify-content-between align-items-center">
									<div class="form-heading mb-2 f-28">お⽀払いプラン</div>
								</div>
								<!--div-->
							</div>
							<!--top-block-->
							<div class="br-25">
								<div class="form-box mb-3">
									<form>
										<p class="form-heading mb-4 f-18">現在のお⽀払いプラン</p>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12 pr-0">プラン名</label>
											<div class="col-lg-9">
												<div class="d-flex justify-content-between align-items-center">
													<div class="plan-status">
														<span class="bg-yellow py-1 px-2">PROプラン</span>
													</div>
													<div class="btn-change-plan">
														<a href="#" class="btn btn-outline-dark br-25 f-12"><span>プランを変更する</span></a>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12 pr-0">⽀払い予定⽇</label>
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
											<label class="col-lg-3 col-form-label f-12 pr-0">割引クーポン</label>
											<div class="col-lg-9">
												<input type="text"  class="form-control" placeholder="⽥中太郎">
											</div>
										</div>
										<div class="form-group row justify-content-end mt-4 mb-0">
											<div class="pr-3">
												<a href="#" class="btn btn-dark mb-2"><span>クーポンを実⾏する</span></a>
											</div>
										</div>
									</form>
								</div>
								<!--form-box-->

								<div class="form-box mb-3">
									<form>
										<p class="form-heading mb-4 f-18">⽀払い⽅法</p>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12 pr-0">カード番号</label>
											<div class="col-lg-9">
												<p class="mb-1">下四ケタのみ表⽰</p>
												<p class="mb-1 pl-2">************9767</p>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12 pr-0">カード有効期限</label>
											<div class="col-lg-9">
												<p class="mb-1">⽉/年</p>
												<p class="mb-1">07/2022</p>
											</div>
										</div>
									</form>
								</div>
								<!--form-box-->

								<div class="form-box">
									<form>
										<p class="form-heading mb-4 f-18">クレジットカード情報を更新</p>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12 pr-0">対応ブランド</label>
											<div class="col-lg-9">
												<img src="dist/img/icons/icon-payment.jpg" alt="" />
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12 pr-0">クレジットカード</label>
											<div class="col-lg-9">
												<input type="text"  class="form-control" placeholder="カード番号 ⽉/年/CVC">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label f-12 pr-0">都道府県</label>
											<div class="col-lg-9">
												<input type="text"  class="form-control" placeholder="都道府県">
											</div>
										</div>
										<div class="form-group row justify-content-end mt-4 mb-0">
											<div class="pr-3">
												<a href="#" class="btn btn-dark mb-2"><span>更新する</span></a>
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

