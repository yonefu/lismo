<?php include('inc/header.php'); ?>

<div class="outer-page-wrap">
	<div class="container-fluid">
		<div class="d-flex">

			<?php include('inc/side_menu.php'); ?>

			<div class="inner-page-wrap">
				<div class="stock-page w-100">
					<div class="top-block">
						<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
							<h3 class="page-title mb-1">
								<span>在庫を管理</span>
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
						<!--d-flex flex-wrap justify-content-between align-items-center-->

						<ul class="nav top-nav mb-1">
							<li class="nav-item">
								<a class="nav-link li-product-order" href="stock.php">⼊庫済み
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active li-order-history" href="waiting_storage.php">⼊庫待ち<span class="selcted-counter">3</span></a>
							</li>
						</ul>
						<!--ul nav-->

						<div class="d-flex flex-wrap justify-content-between align-items-center mb-0">
							<div class="search-result mr-3">
								<span>全てを表示中:<span class="fontEN">30</span>件</span>
							</div>
							<div class="right-dropdown flex-wrap d-flex ml-auto">
								<div class="mb-3">
									<a class="nav-link dropdown-warehouse btn btn-sm dropdown-toggle bg-white br-25 mr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										倉庫：全て
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">横浜本社倉庫へ</a>
										<a class="dropdown-item" href="#">AmazonFAB</a>
									</div>
								</div>
								<div class="mb-3">
									<a class="nav-link dropdown-warehouse btn btn-sm dropdown-toggle bg-white br-25 mr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										サプライヤー：全て
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">横浜本社倉庫へ</a>
										<a class="dropdown-item" href="#">AmazonFAB</a>
									</div>
								</div>
								<div class="mb-3">
									<a class="nav-link dropdown-warehouse btn btn-sm dropdown-toggle bg-white br-25 mr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										⼊庫キャリア：全て
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">横浜本社倉庫へ</a>
										<a class="dropdown-item" href="#">AmazonFAB</a>
									</div>
								</div>
								<div class="mb-3">
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

					<div class="table-wrapper">
							<div class="card">
								<div class="card-body">
									<div class="table-title">
										<div class="d-flex flex-wrap justify-content-between align-items-center py-2 px-4">
											<div class="tt-lt-col mb-1">
												<span>横浜本社倉庫への⼊庫待ち </span>
											</div>
											<div class="tt-rt-col row mb-1 px-3 align-items-center">
												<div class="total ml-4">
													<span class="t-label">⼊庫予定合計:</span><span class="t-price">¥206,582</span>
												</div>
											</div>
										</div>
									</div>
									<div class="table-responsive-lg">
										<table class="table storage-waiting-table">
											<thead>
												<tr>
													<th class="col-checkbox">
														<div class="position-relative custom-control custom-checkbox">
															<input type="checkbox" class="form-check-input custom-control-input ml-0" id="checkall">
															<label class="custom-control-label" for="checkall"></label>
														</div>
													</th>
													<th class="column-1 text-left pl-4">発注⽇ <i class="fa fa-caret-down ml-1"></i></th>
													<th class="column-2 product-col">商品</th>
													<th class="column-3">ﾊﾞﾘｴｰｼｮﾝ</th>
													<th class="column-4">サプライヤー</th>
													<th class="column-5">入荷状況</th>
													<th class="column-6 text-right">仕⼊額</th>
													<th class="column-7">⼊庫キャリア</th>
													<th class="column-8">⼊庫した数</th>
													<th class="column-9">アクション</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-center">
														<div class="position-relative custom-control custom-checkbox">
															<input type="checkbox" class="form-check-input custom-control-input ml-0 selectedId" id="selectedId" name="a">
															<label class="custom-control-label" for="selectedId"></label>
															<div id="showDiv" class="show-msg-div d-none">
															    全数量を⼊庫済にする</br>
																⼊庫を中⽌にする
															</div>
														</div>
													</td>
													<td class="text-left pl-4">
														<p>2019/11/30</p><p>15:00</p>
													</td>
													<td class="d-flex align-items-center">
														<p>
															<img class="product-img" src="dist/img/1.jpg" alt="" />
														</p>
														<p>そらのおとしものf ねんどろいど フ レンスケール ABS素材-
															<small class="text-muted">JAN4582191967738</small>
														</p>
													</td>
													<td class="text-center">
														<p><span class="badge first-hand">直接</span></p>
														<p>ブラック</p>
														<p>Mサイズ</p>
													</td>
													<td class="text-center">1688.com</td>
													<td class="text-center">
														<img class="icon-img" src="dist/img/icons/icon-yellow.png" alt="" />
														<p>165/200</p>
													</td>
													<td class="text-right">
														<p>¥40,000</p>
														<p>¥200</p>
													</td>
													<td class="text-center">⽇本郵便</td>
													<td class="text-center">
														<input type="text" class="form-control text-center box-60 fontEN" placeholder="1">
													</td>
													<td class="text-center">
														<a class="btn btn-dark">⼊庫済にする</a>
														<div class="delete-row" data-toggle="modal" data-target="#closeModalOption"><img src="dist/img/icons/icon-close-wh.png" alt=""></div>
													</td>
												</tr>
												<tr>
													<td class="text-center">
														<div class="position-relative custom-control custom-checkbox">
															<input type="checkbox" class="form-check-input custom-control-input ml-0 selectedId" id="selectedId1" name="a">
															<label class="custom-control-label" for="selectedId1"></label>
															<div id="showDiv" class="show-msg-div d-none">
															    全数量を⼊庫済にする</br>
																⼊庫を中⽌にする
															</div>
														</div>
													</td>
													<td class="text-left pl-4">
														<p>2019/11/30</p><p>15:00</p>
													</td>
													<td class="d-flex align-items-center">
														<p>
															<img class="product-img" src="dist/img/1.jpg" alt="" />
														</p>
														<p>Good Smile No Game No Life: Shiro Nendoroid Action Figure
															<small class="text-muted">JAN4582191967738</small>
														</p>
													</td>
													<td class="text-center">
														<p><span class="badge first-hand">直接</span></p>
														<p>ブラック</p>
														<p>Mサイズ</p>
													</td>
													<td class="text-center">1688.com</td>
													<td class="text-center">
														<img class="icon-img" src="dist/img/icons/icon-yellow.png" alt="" />
														<p>165/200</p>
													</td>
													<td class="text-right">
														<p>¥40,000</p>
														<p>¥200</p>
													</td>
													<td class="text-center">⽇本郵便</td>
													<td class="text-center">
														<input type="text" class="form-control text-center box-60 fontEN" placeholder="1">
													</td>
													<td class="text-center">
														<a class="btn btn-dark">⼊庫済にする</a>
														<div class="delete-row"><img src="dist/img/icons/icon-close-wh.png" alt=""></div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<!--card-body-->

								<div class="card-body">
									<div class="table-title">
										<div class="d-flex flex-wrap justify-content-between align-items-center py-2 px-4">
											<div class="tt-lt-col mb-1">
												<span>横浜本社倉庫への⼊庫待ち </span>
											</div>
											<div class="tt-rt-col row mb-1 px-3 align-items-center">
												<div class="total ml-4">
													<span class="t-label">⼊庫予定合計:</span><span class="t-price">¥206,582</span>
												</div>
											</div>
										</div>
									</div>
									<div class="table-responsive-lg">
										<table class="table storage-waiting-table">
											<thead>
												<tr>
													<th class="col-checkbox">
														<div class="position-relative custom-control custom-checkbox">
															<input type="checkbox" class="form-check-input custom-control-input ml-0" id="checkall">
															<label class="custom-control-label" for="checkall"></label>
														</div>
													</th>
													<th class="column-1">発注⽇ <i class="fa fa-caret-down ml-1"></i></th>
													<th class="column-2 product-col">商品</th>
													<th class="column-3">ﾊﾞﾘｴｰｼｮﾝ</th>
													<th class="column-4">サプライヤー</th>
													<th class="column-5">入荷状況</th>
													<th class="column-6 text-right">仕⼊額</th>
													<th class="column-7">⼊庫キャリア</th>
													<th class="column-8">⼊庫した数</th>
													<th class="column-9">アクション</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-center">
														<div class="position-relative custom-control custom-checkbox">
															<input type="checkbox" class="form-check-input custom-control-input ml-0 selectedId" id="selectedId3" checked name="a">
															<label class="custom-control-label" for="selectedId3"></label>
															<div id="showDiv" class="show-msg-div">
															    全数量を⼊庫済にする</br>
																⼊庫を中⽌にする
															</div>
														</div>
													</td>
													<td class="text-left pl-4">
														<p>2019/11/30</p><p>15:00</p>
													</td>
													<td class="d-flex align-items-center">
														<p>
															<img class="product-img" src="dist/img/1.jpg" alt="" />
														</p>
														<p>Good Smile No Game No Life: Shiro Nendoroid Action Figure
															<small class="text-muted">JAN4582191967738</small>
														</p>
													</td>
													<td class="text-center">
														<p><span class="badge first-hand">直接</span></p>
														<p>ブラック</p>
														<p>Mサイズ</p>
													</td>
													<td class="text-center">1688.com</td>
													<td class="text-center">
														<img class="icon-img" src="dist/img/icons/icon-yellow.png" alt="" />
														<p>165/200</p>
													</td>
													<td class="text-right">
														<p>¥40,000</p>
														<p>¥200</p>
													</td>
													<td class="text-center">⽇本郵便</td>
													<td class="text-center">
														<input type="text" class="form-control text-center box-60 fontEN" placeholder="1">
													</td>
													<td class="text-center">
														<a class="btn btn-dark">⼊庫済にする</a>
														<div class="delete-row"><img src="dist/img/icons/icon-close-wh.png" alt=""></div>
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
						<!--accordion-->
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

<!-- Modal closeModalOption-->
<div class="modal fade" id="closeModalOption" tabindex="-1" role="dialog" aria-labelledby="closeModalOptionTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xs" role="document">
		<div class="modal-content bg-white">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 5">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<div class="text-center popup-message px-4 f-15 font-weight-bold">
					入庫を中止にしますか?
				</div>
			</div>
			<div class="modal-footer">
				<div class="d-flex mx-auto">
					<a href="#" class="btn btn-cancel mr-1"><span>キャンセル</span></a>
					<a href="#" class="btn btn-dark btn-red br-0"><span>中止にする</span></a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('inc/footer.php'); ?>

