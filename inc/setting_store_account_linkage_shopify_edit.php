<div class="inner-page-wrap">
	<div class="setting-modal-page w-100">
		<div class="d-flex justify-content-between align-items-center mb-3">
			<h3 class="page-title mb-1 f-28">
				<span>ShopifyストアABCを編集</span>
			</h3>
		</div>
		<!--div-->

		<form class="bg-white br-25 p-4 mb-3">
			<div class="form-heading mb-3 f-18">ストアアカウント連携</div>
			<div class="form-group row">
				<label for="staticEmail" class="col-lg-3 col-form-label text-right pr-0">プラットフォーム
					<span class="clr-red">＊</span></label>
				<div class="col-lg-9">
					<input type="text"  class="form-control" placeholder="amazon.co.jp">
				</div>
			</div>
			<!--form-group row-->
			<div class="form-group row">
				<label for="staticEmail" class="col-lg-3 col-form-label text-right pr-0">ストア名<span class="clr-red">＊</span></label>
				<div class="col-lg-9">
					<input type="text"  class="form-control" placeholder="ABC">
				</div>
			</div>
			<!--form-group row-->
			<div class="form-group row">
				<label for="staticEmail" class="col-lg-3 col-form-label text-right pr-0">サブドメイン<span class="clr-red">＊</span></label>
				<div class="col-lg-9">
					<input type="text"  class="form-control" placeholder="siamoa-jp">
				</div>
			</div>
			<!--form-group row-->
			<div class="form-group row">
				<label for="staticEmail" class="col-lg-3 col-form-label text-right pr-0">アプリ認証</label>
				<div class="col-lg-9">
					<span class="btn btn-palm-green py-2 px-4 br-25">ShopifyでLismoaを認証する</span>
				</div>
			</div>
			<!--form-group row-->
			<div class="form-group row">
				<label for="staticEmail" class="col-lg-3 col-form-label text-right pr-0">商品同期</label>
				<div class="col-lg-9">
					<div class="d-flex align-items-center">
						<div class="mr-2">
							<div class="checkbox switcher">
								<label for="switchIcon1">
									<input type="checkbox" id="switchIcon1" value="" checked>
									<span><small></small></span>
								</label>
						    </div>
						</div>
						<a href="#" class="btn btn-outline-dark br-25 f-12 px-4"><span>今すぐ商品同期を実⾏する</span></a>
					</div>
				</div>
			</div>
			<!--form-group row-->
			<div class="form-group row">
				<label for="staticEmail" class="col-lg-3 col-form-label text-right pr-0">注⽂取込</label>
				<div class="col-lg-9">
					<div class="d-flex align-items-center">
						<div class="mr-2">
							<div class="checkbox switcher">
								<label for="switchIcon2">
									<input type="checkbox" id="switchIcon2" value="">
									<span><small></small></span>
								</label>
						    </div>
						</div>
						<a href="#" class="btn btn-outline-dark br-25 f-12 px-4"><span>今すぐ商品同期を実⾏する</span></a>
					</div>
				</div>
			</div>
			<!--form-group row-->
			<div class="form-group row">
				<label for="staticEmail" class="col-lg-3 col-form-label text-right pr-0">在庫同期</label>
				<div class="col-lg-9">
					<div class="d-flex align-items-center">
						<div class="mr-2">
							<div class="checkbox switcher">
								<label for="switchIcon3">
									<input type="checkbox" id="switchIcon3" value="">
									<span><small></small></span>
								</label>
						    </div>
						</div>
						<a href="#" class="btn btn-outline-dark br-25 f-12 px-4"><span>今すぐ商品同期を実⾏する</span></a>
					</div>
				</div>
			</div>
			<!--form-group row-->
			<div class="form-group row">
				<label for="staticEmail" class="col-lg-3 col-form-label text-right pr-0">出荷通知</label>
				<div class="col-lg-9">
					<div class="d-flex align-items-center">
						<div class="mr-2">
							<div class="checkbox switcher">
								<label for="switchIcon4">
									<input type="checkbox" id="switchIcon4" value="">
									<span><small></small></span>
								</label>
						    </div>
						</div>
						<a href="#" class="btn btn-outline-dark br-25 f-12 px-4"><span>今すぐ商品同期を実⾏する</span></a>
					</div>
				</div>
			</div>
			<!--form-group row-->

			<div class="choose-option-box">
				<a class="f-12 pl-3 mb-3 d-flex align-items-center" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">同期オプション設定を閉じる <i class="fa fa-caret-up ml-1"></i></a>
				<div id="collapseTwo" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
					<div class="form-heading mb-3 f-18">注⽂取込</div>

					<div class="form-group row">
						<div class="col-lg-6">
							<div class="row">
								<label for="staticEmail" class="col-lg-5 col-form-label text-right pr-0">発送期限⽇数</label>
								<div class="col-lg-7">
									<input type="text"  class="form-control" placeholder="⾃動">
								</div>
							</div>
							<!--row-->
						</div>
						<div class="col-lg-6">
							<div class="row">
								<label for="staticEmail" class="col-lg-5 col-form-label text-right pr-0">販売⼿数料</label>
								<div class="col-lg-7">
									<input type="text"  class="form-control" placeholder="⾃動">
								</div>
							</div>
							<!--row-->
						</div>
					</div>
					<!--form-group row-->

					<div class="form-heading mb-3 f-18">在庫同期</div>

					<div class="form-group row">
						<div class="col-lg-6">
							<div class="row">
								<label for="staticEmail" class="col-lg-5 col-form-label text-right pr-0">在庫なし在庫数</label>
								<div class="col-lg-7">
									<input type="text"  class="form-control" placeholder="0">
								</div>
							</div>
							<!--row-->
						</div>
					</div>
					<!--form-group row-->

					<div class="form-group row">
						<div class="col-lg-6">
							<div class="row">
								<label for="staticEmail" class="col-lg-5 col-form-label text-right pr-0">在庫0ボーダーライン</label>
								<div class="col-lg-7">
									<input type="text"  class="form-control" placeholder="0">
								</div>
							</div>
							<!--row-->
						</div>
					</div>
					<!--form-group row-->

					<div class="form-group row">
						<div class="col-lg-6">
							<div class="row">
								<label for="staticEmail" class="col-lg-5 col-form-label text-right pr-0">リードタイム</label>
								<div class="col-lg-7">
									<input type="text"  class="form-control" placeholder="0">
								</div>
							</div>
							<!--row-->
						</div>
					</div>
					<!--form-group row-->
					<div class="d-flex justify-content-end mt-4">
						<a href="#" class="btn btn-cancel mr-1"><span>キャンセル</span></a>
						<a href="#" class="btn btn-dark"><span>保存する</span></a>
					</div>
					<!--div-->
				</div>
			</div>
		</form>
		<!--form-->

		<form class="bg-white br-25 p-4 mb-3">
			<div class="form-heading mb-3 f-18">注⽂⾃動割当</div>
			<!-- <div class="form-heading mb-1 f-18">トリガー</div>
			<p class="f-12">設定したストアの受注に対して下記アクションを実⾏します</p>
			<div class="form-group row">
				<label for="staticEmail" class="col-lg-3 col-form-label text-right pr-0">プラットフォーム</label>
				<div class="col-lg-9">
					<select class="custom-select">
						<option selected>amazon.co.jp</option>
						<option value="1">amazon.co.jp</option>
					</select>
				</div>
			</div> -->
			<!--form-group row-->
			<!-- <div class="form-group row">
				<label for="staticEmail" class="col-lg-3 col-form-label text-right pr-0">ストアアカウント</label>
				<div class="col-lg-9">
					<select class="custom-select">
						<option selected>ABC</option>
						<option value="1">XYZ</option>
					</select>
				</div>
			</div> -->
			<!--form-group row-->

			<div class="form-heading mb-1 f-18">アクション</div>
			<p class="f-12">トリガーに設定したストアの受注に対して実⾏するアクション</p>
			<div class="form-group row">
				<label for="staticEmail" class="col-lg-3 col-form-label text-right pr-0">配送拠点 <span class="clr-red">＊</span></label>
				<div class="col-lg-9">
					<select class="custom-select">
						<option selected>FBA</option>
						<option value="1">FBA</option>
					</select>
				</div>
			</div>
			<!--form-group row-->

			<div class="form-heading mb-1 f-18">配送キャリア</div>
			<div class="table-wrapper">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive-lg">
							<table class="table delivery-carrier-table">
								<thead>
									<tr class="blank-tr">
										<th class="column-1">&nbsp;</th>
										<th class="column-2">&nbsp;</th>
										<th class="column-3">&nbsp;</th>
										<th class="column-4">&nbsp;</th>
									</tr>
								</thead>
								<!--thead-->
								<tbody>
									<tr>
										<td class="text-center">
											<span>通常便</span>
										</td>
										<td class="text-center">
											<span>無料配送</span>
										</td>
										<td class="text-right">
											<select class="custom-select">
												<option selected></option>
												<option value="1"></option>
											</select>
										</td>
										<td class="text-left">
											<div class="delete-row"><img src="dist/img/icons/icon-close-wh.png" alt=""></div>
										</td>
									</tr>
									<!--tr-->
									<tr class="tr-clone1">
										<td class="text-center">
											<span>速達配送</span>
										</td>
										<td class="text-center">
											<span>速達配送</span>
										</td>
										<td class="text-right">
											<select class="custom-select">
												<option selected></option>
												<option value="1"></option>
											</select>
										</td>
										<td class="text-left">
											<div class="delete-row"><img src="dist/img/icons/icon-close-wh.png" alt=""></div>
										</td>
									</tr>
									<!--tr-->
								</tbody>
								<!--tbody-->
							</table>
							<!--table-->
							<div class="d-flex justify-content-end mt-2 mb-5 mr-5">
								<a href="#" class="btn btn-outline-dark br-25 add-more-1"><span>追加する</span></a>
							</div>
							<!--div-->
						</div>
						<!--table-responsive-lg-->
					</div>
				</div>
			</div>

			<div class="d-flex justify-content-end mt-4">
				<a href="#" class="btn btn-cancel mr-1"><span>キャンセル</span></a>
				<a href="#" class="btn btn-dark"><span>保存する</span></a>
			</div>
			<!--div-->
		</form>
		<!--form-->

		<form class="bg-white br-25 p-4 mb-3">
			<div class="form-heading mb-3 f-18">在庫同期配送拠点</div>
			<div class="table-wrapper">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive-lg">
							<table class="table inventory-delivery-base-table">
								<thead>
									<tr>
										<th class="column-1 text-left">倉庫</th>
										<th class="column-2 text-right pr-4">同期</th>
									</tr>
								</thead>
								<!--thead-->
								<tbody>
									<tr>
										<td class="text-left">
											<span>FBA</span>
										</td>
										<td class="text-right">
											<div class="d-flex justify-content-end">
												<div class="mr-2">
													<div class="checkbox switcher">
														<label for="switchIcon5">
															<input type="checkbox" id="switchIcon5" value="" checked>
															<span><small></small></span>
														</label>
												    </div>
												</div>
											</div>
										</td>
									</tr>
									<!--tr-->
									<tr>
										<td class="text-left">
											<span>横浜本社倉庫</span>
										</td>
										<td class="text-right">
											<div class="d-flex justify-content-end">
												<div class="mr-2">
													<div class="checkbox switcher">
														<label for="switchIcon6">
															<input type="checkbox" id="switchIcon6" value="">
															<span><small></small></span>
														</label>
												    </div>
												</div>
											</div>
										</td>
									</tr>
									<!--tr-->
									<tr>
										<td class="text-left">
											<span>渋⾕倉庫</span>
										</td>
										<td class="text-right">
											<div class="d-flex justify-content-end">
												<div class="mr-2">
													<div class="checkbox switcher">
														<label for="switchIcon7">
															<input type="checkbox" id="switchIcon7" value="">
															<span><small></small></span>
														</label>
												    </div>
												</div>
											</div>
										</td>
									</tr>
									<!--tr-->
								</tbody>
								<!--tbody-->
							</table>
							<!--table-->
						</div>
						<!--table-responsive-lg-->
					</div>
				</div>
			</div>
		</form>
		<!--form-->

		<form class="bg-white br-25 p-4 mb-3">
			<div class="form-heading mb-3 f-18">決済⽅法</div>
			<div class="table-wrapper">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive-lg">
							<table class="table settelment-method-table">
								<thead>
									<tr>
										<th class="column-1">名称</th>
										<th class="column-2">表⽰</th>
										<th class="column-3">上乗せ売上</th>
										<th class="column-4">固定⼿数料</th>
										<th class="column-5">⼿数料(%)</th>
										<th class="column-6">アクション</th>
									</tr>
								</thead>
								<!--thead-->
								<tbody>
									<tr>
										<td class="text-center">
											<span>other</span>
										</td>
										<td class="text-center">
											<span>amazon</span>
										</td>
										<td class="text-center">
											<span>なし</span>
										</td>
										<td class="text-center">
											<span>なし</span>
										</td>
										<td class="text-center">
											<span>なし</span>
										</td>
										<td class="text-center">
											<a href="#" class="btn btn-outline-dark br-25"><span>編集する</span></a>
										</td>
									</tr>
									<!--tr-->
									<tr>
										<td class="text-center">
											<span>CVS</span>
										</td>
										<td class="text-center">
											<span>CVS</span>
										</td>
										<td class="text-center">
											<span>なし</span>
										</td>
										<td class="text-center">
											<span>なし</span>
										</td>
										<td class="text-center">
											<span>なし</span>
										</td>
										<td class="text-center">
											<a href="#" class="btn btn-outline-dark br-25"><span>編集する</span></a>
										</td>
									</tr>
									<!--tr-->
								</tbody>
								<!--tbody-->
							</table>
							<!--table-->
						</div>
						<!--table-responsive-lg-->
					</div>
				</div>
			</div>
		</form>
		<!--form-->

		<form class="bg-white br-25 p-4 mb-3">
			<div class="form-heading mb-3 f-18">ストアの連携削除</div>

			<div class="d-flex justify-content-end mt-4">
				<a href="#" class="btn btn-red mr-1"><span>このストアの連携を削除する</span></a>
			</div>
			<!--div-->
		</form>
		<!--form-->

	</div>
	<!--order-hold-modal-page w-100-->
</div>
<!--inner-page-wrap-->