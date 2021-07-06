<?php include('inc/header.php'); ?>

<div class="outer-page-wrap">
	<div class="container-fluid">
		<div class="d-flex">

			<?php include('inc/side_menu.php'); ?>

			<div class="inner-page-wrap">
				<div class="purchase-page w-100">
					<div class="top-block">
						<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
							<h3 class="page-title mb-1">
								<span>仕入る</span>
							</h3>

							<div class="search-box">
								<form class="form-inline">
									<div class="input-group align-items-center">
										<input type="text" class="form-control" placeholder="検索ワードを⼊⼒">
										<button type="search" class="btn-search">検索</button>
										<span class="clearable"><img src="dist/img/icons/icon-close.png" alt="" /></span>
									</div>
								</form>
							</div>
							<!--search box-->
						</div>
						<!--div-->

						<ul class="nav top-nav mb-1">
							<li class="nav-item">
								<a class="nav-link active li-product-order" href="purchase_selected.php">
									今回の仕⼊
									<span class="selcted-counter">2</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link li-order-history" href="purchase_order_history.php">仕⼊た履歴</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="purchase_modal.php">Purchase Modals</a>
							</li>
						</ul>
						<!--ul nav-->

						<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
							<div class="search-result mr-3">
								<span>全てを表示中:<span class="fontEN">30</span>件</span>
							</div>
							<div class="right-dropdown flex-wrap d-flex ml-auto">
								<div class="mb-2">
									<a class="nav-link dropdown-warehouse btn btn-sm dropdown-toggle bg-white br-25 mr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										倉庫：全て
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">横浜本社倉庫へ</a>
										<a class="dropdown-item" href="#">AmazonFAB</a>
									</div>
								</div>
								<div class="mb-2">
									<a class="nav-link btn dropdown-tags btn-sm dropdown-toggle bg-white br-25" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										タグ選択：なし
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">*************</a>
										<a class="dropdown-item" href="#">*************</a>
									</div>
								</div>
							</div>
						</div>
						<!--d-flex flex-wrap justify-content-between align-items-center-->
					</div>
					<!--top-block-->

					<div class="table-wrapper purchase-table-wrapper">
						<div class="card mb-3">
							<div class="card-body">
								<div class="table-title">
									<div class="d-flex flex-wrap justify-content-between align-items-center py-2 px-4">
										<div class="tt-lt-col mb-1">
											<span>横浜本社倉庫への仕⼊れ </span>
										</div>
										<div class="tt-rt-col row mb-1 align-items-center">
											<div class="order-no mr-4">
												<span class="f-12">発注ID:PO0453-00000010643</span>
											</div>
											<div class="total mr-0">
												<span class="t-label">合計:</span><span class="t-price">¥206,582</span>
											</div>
											<a href="#" class="btn btn-200 btn-dark ml-4 my-1">
												<span>仕入れる商品を追加する</span>
											</a>
											<a href="purchase_selected_multiple.php" class="btn btn-200 btn-golden ml-2 my-1">
												<span>以下の商品を全て発注する</span>
											</a>
										</div>
									</div>
								</div>
								<div class="table-responsive-lg">
									<table class="table purchase-selected-table">
										<thead>
											<tr>
												<th class="col-checkbox">
													<div class="position-relative custom-control custom-checkbox">
														<input type="checkbox" class="form-check-input custom-control-input ml-0" id="checkall">
														<label class="custom-control-label" for="checkall"></label>
													</div>
												</th>
												<th class="column-1 product-col">商品 <i class="fa fa-caret-down ml-1"></i></th>
												<th class="column-2">ﾊﾞﾘｴｰｼｮﾝ</th>
												<th class="column-3">サプライヤー</th>
												<th class="column-4">発注単価</th>
												<th class="column-5">発注数</th>
												<th class="column-6">発注額 <i class="fa fa-caret-down ml-1"></i></th>
												<th class="column-7">コメント <i class="fa fa-caret-down ml-1"></i></th>
												<th class="column-8">&nbsp;</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="text-center">
													<div class="position-relative custom-control custom-checkbox">
														<input type="checkbox" class="form-check-input custom-control-input ml-0 selectedId" id="selectedId1">
														<label class="custom-control-label" for="selectedId1"></label>
														<div id="showDiv" class="show-msg-div d-none">
														    リストから削除する
														</div>
													</div>
												</td>
												<td class="d-flex align-items-center">
													<p><img class="product-img" src="dist/img/1.jpg" alt="" /></p>
													<p>そらのおとしものf ねんどろ いど ニンフ (ノンスケール ABS来材</p>
												</td>
												<td class="text-center">
													<p><span class="badge first-hand">直接</span></p>
													<p>ブラック</p>
													<p>Mサイズ</p>
												</td>
												<td class="text-center">
													<select class="custom-select">
														<option selected>Amazon.co.jp</option>
														<option value="1">Amazon.co.jp</option>
														<option value="2">Amazon.co.jp</option>
													</select>
												</td>
												<td class="text-center">
													<div class="input-group">
														<div class="input-group-prepend">
												          <div class="input-group-text">¥</div>
												        </div>
												        <input type="text" class="form-control text-center box-80 fontEN" placeholder="¥1200">
												    </div>
												</td>
												<td class="text-center">
													<input type="text" class="form-control text-center box-80" placeholder="1">
												</td>
												<td class="text-right pr-4">
													<p class="original-price mb-0 ">¥1200</p>
												</td>
												<td class="text-center">
													<textarea class="form-control" rows="2" placeholder="連そらの ⽇の在お庫としも不⾜のにf よねり通んどろ常より"></textarea>
												</td>
												<td class="text-center">
													<div class="delete-row"><img src="dist/img/icons/icon-close-wh.png" alt="" /></div>
												</td>
											</tr>
											<tr class="tr-clone">
												<td class="text-center">
													<div class="position-relative custom-control custom-checkbox">
														<input type="checkbox" class="form-check-input custom-control-input ml-0 selectedId" id="selectedId2">
														<label class="custom-control-label" for="selectedId2"></label>
														<div id="showDiv" class="show-msg-div d-none">
														    リストから削除する
														</div>
													</div>
												</td>
												<td class="d-flex align-items-center">
													<p><img class="product-img" src="dist/img/2.jpg" alt="" /></p>
													<p><span>そらのおとしものf ねんどろいど ニンフ (ノンスケール ABS素材</span>
														<small class="text-muted mt-2">JAN4582191967738</small>
													</p>
												</td>
												<td class="text-center">
													<p><span class="badge first-hand">直接</span></p>
													<p>ブラック</p>
													<p>Mサイズ</p>
												</td>
												<td class="text-center">
													<select class="custom-select">
														<option selected>Amazon.co.jp</option>
														<option value="1">Amazon.co.jp</option>
														<option value="2">Amazon.co.jp</option>
													</select>
												</td>
												<td class="text-center">
													<div class="input-group">
														<div class="input-group-prepend">
												          <div class="input-group-text">¥</div>
												        </div>
												        <input type="text" class="form-control text-center box-80 fontEN" placeholder="¥1200">
												    </div>
												</td>
												<td class="text-center">
													<input type="text" class="form-control text-center box-80" placeholder="1">
												</td>
												<td class="text-right pr-4">
													<p class="original-price mb-0 ">¥1200</p>
												</td>
												<td class="text-center">
													<textarea class="form-control" rows="2" placeholder="連そらの ⽇の在お庫としも不⾜のにf よねり通んどろ常より"></textarea>
												</td>
												<td class="text-center">
													<div class="delete-row"><img src="dist/img/icons/icon-close-wh.png" alt="" /></div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!--card-body-->
						</div>
						<!--card-->
						<div class="card">
							<div class="card-body">
								<div class="table-title">
									<div class="d-flex flex-wrap justify-content-between align-items-center py-2 px-4">
										<div class="tt-lt-col mb-1">
											<span>AmazonFBAへの仕入れ </span>
										</div>
										<div class="tt-rt-col row mb-1 align-items-center">
											<div class="total mr-0">
												<span class="t-label">合計:</span><span class="t-price">¥54,582</span>
											</div>
											<a href="#" class="btn btn-200 btn-dark ml-4 my-1" data-toggle="modal" data-target="#purchaseSelectedModal">
												<span>仕入れる商品を追加する</span>
											</a>
											<a href="purchase_selected_multiple.php" class="btn btn-200 btn-golden ml-2 my-1">
												<span>以下の商品を全て発注する</span>
											</a>
										</div>
									</div>
								</div>
								<div class="table-responsive-lg">
									<table class="table purchase-selected-table">
										<thead>
											<tr>
												<th class="col-checkbox">
													<div class="position-relative custom-control custom-checkbox">
														<input type="checkbox" class="form-check-input custom-control-input ml-0" id="checkall">
														<label class="custom-control-label" for="checkall"></label>
													</div>
												</th>
												<th class="column-1 product-col">商品 <i class="fa fa-caret-down ml-1"></i></th>
												<th class="column-2">ﾊﾞﾘｴｰｼｮﾝ</th>
												<th class="column-3">サプライヤー</th>
												<th class="column-4">発注単価</th>
												<th class="column-5">発注数</th>
												<th class="column-6">発注額 <i class="fa fa-caret-down ml-1"></i></th>
												<th class="column-7">コメント <i class="fa fa-caret-down ml-1"></i></th>
												<th class="column-8">&nbsp;</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="text-center">
													<div class="position-relative custom-control custom-checkbox">
														<input type="checkbox" class="form-check-input custom-control-input ml-0 selectedId" id="selectedId3">
														<label class="custom-control-label" for="selectedId3"></label>
														<div id="showDiv" class="show-msg-div d-none">
														    リストから削除する
														</div>
													</div>
												</td>
												<td class="d-flex align-items-center">
													<p><img class="product-img" src="dist/img/3.jpg" alt="" /></p>
													<p><span>そらのおとしものf ねんどろいど ニンフ (ノンスケール ABS素材</span>
														<small class="text-muted mt-2">JAN4582191967738</small>
													</p>
												</td>
												<td class="text-center">
													<p><span class="badge first-hand">直接</span></p>
													<p>ブラック</p>
													<p>Mサイズ</p>
												</td>
												<td class="text-center">
													<select class="custom-select">
														<option selected>Amazon.co.jp</option>
														<option value="1">Amazon.co.jp</option>
														<option value="2">Amazon.co.jp</option>
													</select>
												</td>
												<td class="text-center">
													<div class="input-group">
														<div class="input-group-prepend">
												          <div class="input-group-text">¥</div>
												        </div>
												        <input type="text" class="form-control text-center box-80 fontEN" placeholder="¥1200">
												    </div>
												</td>
												<td class="text-center">
													<input type="text" class="form-control text-center box-80" placeholder="1">
												</td>
												<td class="text-right pr-4">
													<p class="original-price mb-0 ">¥1200</p>
												</td>
												<td class="text-center">
													<textarea class="form-control" rows="2" placeholder="連そらの ⽇の在お庫としも不⾜のにf よねり通んどろ常より"></textarea>
												</td>
												<td class="text-center">
													<div class="delete-row"><img src="dist/img/icons/icon-close-wh.png" alt="" /></div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!--card-body-->
						</div>
						<!--card-->
					</div>
					<!--table-wrapper-->

					<?php include('inc/pagination.php'); ?>

				</div>
				<!--purchase-page w-100-->
			</div>
			<!--inner-page-wrap-->
		</div>
	</div>
	<!--container-fluid-->
</div>
<!--outer-page-wrap-->

<?php include('inc/footer.php'); ?>