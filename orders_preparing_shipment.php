<?php include('inc/header.php'); ?>

<div class="outer-page-wrap">
	<div class="container-fluid">
		<div class="d-flex">

			<?php include('inc/side_menu.php'); ?>

			<div class="inner-page-wrap">
				<div class="order-page w-100">
					<div class="top-block">
						<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
							<h3 class="page-title mb-1">
								<span>受注を管理</span>
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

						<ul class="nav top-nav mb-3">
							<li class="nav-item">
								<a class="nav-link" href="orders_unprocessed_order.php">
									未処理の受注
									<span class="selcted-counter">25</span>
								</a>
							</li>
							<li class="icon mr-2"><img src="dist/img/icons/icon-arrow.png" alt="Arrow Icon" /></li>
							<li class="nav-item">
								<a class="nav-link active" href="orders_preparing_shipment.php">
									出荷の準備中
									<span class="selcted-counter">6</span>
								</a>
							</li>
							<li class="icon mr-2"><img src="dist/img/icons/icon-arrow.png" alt="Arrow Icon" /></li>
							<li class="nav-item">
								<a class="nav-link" href="orders_processed.php">処理済み</a>
							</li>
							<li class="icon mr-2"><img src="dist/img/icons/icon-slash.png" alt="Slash Icon" /></li>
							<li class="nav-item">
								<a class="nav-link" href="orders_pending.php">
									保留中
									<span class="selcted-counter">1</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="order_modal.php">
									Modals
								</a>
							</li>
						</ul>
						<!--ul nav-->

						<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
							<div class="search-result mr-3">
								<span>全てを表示中:<span class="fontEN">30</span>件</span>
							</div>
							<ul class="nav top-nav status-box">
								<li class="nav-item">
									<a class="nav-link active">
										<span class="mr-2">倉庫：指定あり</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link">
										<span class="mr-2">タグ選択：あり</span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link btn-red csv-btn">
										<span class="mr-2">CSVで真き出す</span>
									</a>
								</li>
							</ul>
							<!--ul nav-->
						</div>
					</div>
					<!--top-block-->

					<div class="table-wrapper">
						<div class="card mb-3">
							<div class="card-body">
								<div class="table-responsive-lg">
									<table class="table order-table">
										<thead>
											<tr>
												<th class="col-checkbox">
													<input type="checkbox" class="form-check-input ml-0" id="checkall">
												</th>
												<th class="column-1">倉庫</th>
												<th class="column-2">出荷ID / 期限</th>
												<th class="column-3">ショップ情報</th>
												<th class="column-4">商品</th>
												<th class="column-5">種類</th>
												<th class="column-6">個数</th>
												<th class="column-7">出荷状況</th>
												<th class="column-8">配送情報</th>
												<th class="column-9">アクション</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="text-center" rowspan="2">
													<div class="position-relative">
														<input type="checkbox" class="form-check-input ml-0" id="selectedId" checked>
														<div id="showDiv" class="show-msg-div">
														    保留を解除する
														</div>
													</div>
												</td>
												<td class="text-center" rowspan="2">
													<p>横浜本社</p>
													<p>倉庫</p>
												</td>
												<td class="text-center" rowspan="2">
													<p><span class="badge badge-dark py-1 px-2">複数同梱</span></p>
													<p>田中太郎(東京都)</p>
													<p>出荷ID : FO00361500</p>
													<p><small class="text-muted">受生:2019711/30 15:00</small></p>
													<p><small class="text-muted">期恨:2019/12707 15:00</small></p>
												</td>
												<td class="text-center">
													<img src="dist/img/icons/icon-sm-shopify.png" alt="Shopify" />
													<p>ショップ名ABC</p>
													<p><small class="text-muted">114-181062</small></p>
													<p><small class="text-muted">8-1813868</small></p>
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
													<p>プラック</p>
													<p>Mサイズ</p>
												</td>
												<td class="text-center">
													<p>3個</p>
												</td>
												<td class="text-center" rowspan="2">
													<img src="dist/img/icons/icon-arrow-circle.png" alt="Shopify" />
													<p>出荷準備中</p>
												</td>
												<td class="text-center" rowspan="2">
													<p>ヤマト宅配便</p>
													<p>60サイズ</p>
													<p>02kg</p>
												</td>
												<td class="text-center" rowspan="2">
													<p><a href="#" class="btn btn-dark">出荷済みにする</a></p>
													<div class="btn-group">
														<button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														他のアクション
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">出荷詳細を見る</a>
															<a class="dropdown-item" href="#">未処理の受注へ戻す</a>
															<a class="dropdown-item" href="#">保留にする</a>
															<a class="dropdown-item clr-red" href="#">キャンセルにする</a>
														</div>
													</div>
												</td>
											</tr>
											<!--tr-->
											<tr>
												<td class="text-center">
													<img src="dist/img/icons/icon-sm-shopify.png" alt="Shopify" />
													<p>ショップ名ABC</p>
													<p><small class="text-muted">114-181062</small></p>
													<p><small class="text-muted">8-1813868</small></p>
												</td>
												<td class="d-flex align-items-center">
													<p>
														<img class="product-img" src="dist/img/2.jpg" alt="" />
													</p>
													<p>そらのおとしものf ねんどろいど フ レンスケール ABS素材-
														<small class="text-muted">JAN4582191967738</small>
													</p>
												</td>
												<td class="text-center">
													<p><span class="badge second-hand">中古</span></p>
													<p>プラック</p>
													<p>Mサイズ</p>
												</td>
												<td class="text-center">
													<p>3個</p>
												</td>
											</tr>
											<!--tr-->
										</tbody>
										<!--tbody-->
									</table>
									<!--table-->
								</div>
							</div>
							<!--card-body-->
						</div>
						<!--card-->

						<div class="card mb-3">
							<div class="card-body">
								<div class="table-responsive-lg">
									<table class="table order-table">
										<thead>
											<tr class="blank-tr">
												<th class="col-checkbox"></th>
												<th class="column-1"></th>
												<th class="column-2"></th>
												<th class="column-3"></th>
												<th class="column-4"></th>
												<th class="column-5"></th>
												<th class="column-6"></th>
												<th class="column-7"></th>
												<th class="column-8"></th>
												<th class="column-9"></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="text-center">
													<input type="checkbox" class="form-check-input ml-0" id="selectedId">
												</td>
												<td class="text-center">
													<p>横浜本社</p>
													<p>倉庫</p>
												</td>
												<td class="text-center">
													<p>複数同梱</p>
													<p>田中太郎(東京都)</p>
													<p>出荷ID : FO00361500</p>
													<p><small class="text-muted">受生:2019711/30 15:00</small></p>
													<p><small class="text-muted">期恨:2019/12707 15:00</small></p>
												</td>
												<td class="text-center">
													<img src="dist/img/icons/icon-sm-shopify.png" alt="Shopify" />
													<p>ショップ名ABC</p>
													<p><small class="text-muted">114-181062</small></p>
													<p><small class="text-muted">8-1813868</small></p>
												</td>
												<td class="d-flex align-items-center">
													<p>
														<img class="product-img" src="dist/img/4.jpg" alt="" />
													</p>
													<p>そらのおとしものf ねんどろいど フ レンスケール ABS素材-
														<small class="text-muted">JAN4582191967738</small>
													</p>
												</td>
												<td class="text-center">
													<p><span class="badge first-hand">直接</span></p>
													<p>プラック</p>
													<p>Mサイズ</p>
												</td>
												<td class="text-center">
													<p>3個</p>
												</td>
												<td class="text-center">
													<img src="dist/img/icons/icon-arrow-circle.png" alt="Shopify" />
													<p>出荷準備中</p>
												</td>
												<td class="text-center">
													<p>ヤマト宅配便</p>
													<p>60サイズ</p>
													<p>02kg</p>
												</td>
												<td class="text-center">
													<p><a href="#" class="btn btn-dark">出荷済みにする</a></p>
													<div class="btn-group">
														<button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														他のアクション
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">出荷詳細を見る</a>
															<a class="dropdown-item" href="#">未処理の受注へ戻す</a>
															<a class="dropdown-item" href="#">保留にする</a>
															<a class="dropdown-item clr-red" href="#">キャンセルにする</a>
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
							</div>
							<!--card-body-->
						</div>
						<!--card-->

						<div class="card">
							<div class="card-body">
								<div class="table-responsive-lg">
									<table class="table order-table">
										<thead>
											<tr class="blank-tr">
												<th class="col-checkbox"></th>
												<th class="column-1"></th>
												<th class="column-2"></th>
												<th class="column-3"></th>
												<th class="column-4"></th>
												<th class="column-5"></th>
												<th class="column-6"></th>
												<th class="column-7"></th>
												<th class="column-8"></th>
												<th class="column-9"></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="text-center">
													<input type="checkbox" class="form-check-input ml-0" id="selectedId">
												</td>
												<td class="text-center">
													<p>横浜本社</p>
													<p>倉庫</p>
												</td>
												<td class="text-center">
													<p>複数同梱</p>
													<p>田中太郎(東京都)</p>
													<p>出荷ID : FO00361500</p>
													<p><small class="text-muted">受生:2019711/30 15:00</small></p>
													<p><small class="text-muted">期恨:2019/12707 15:00</small></p>
												</td>
												<td class="text-center">
													<img src="dist/img/icons/icon-sm-shopify.png" alt="Shopify" />
													<p>ショップ名ABC</p>
													<p><small class="text-muted">114-181062</small></p>
													<p><small class="text-muted">8-1813868</small></p>
												</td>
												<td class="d-flex align-items-center">
													<p>
														<img class="product-img" src="dist/img/3.jpg" alt="" />
													</p>
													<p>そらのおとしものf ねんどろいど フ レンスケール ABS素材-
														<small class="text-muted">JAN4582191967738</small>
													</p>
												</td>
												<td class="text-center">
													<p><span class="badge first-hand">直接</span></p>
													<p>プラック</p>
													<p>Mサイズ</p>
												</td>
												<td class="text-center">
													<p>3個</p>
												</td>
												<td class="text-center">
													<img src="dist/img/icons/icon-arrow-circle.png" alt="Shopify" />
													<p>出荷準備中</p>
												</td>
												<td class="text-center">
													<p>ヤマト宅配便</p>
													<p>60サイズ</p>
													<p>02kg</p>
												</td>
												<td class="text-center">
													<p><a href="#" class="btn btn-dark">出荷済みにする</a></p>
													<div class="btn-group">
														<button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														他のアクション
														</button>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">出荷詳細を見る</a>
															<a class="dropdown-item" href="#">未処理の受注へ戻す</a>
															<a class="dropdown-item" href="#">保留にする</a>
															<a class="dropdown-item clr-red" href="#">キャンセルにする</a>
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

<!-- Modal Order Hold Modal-->
<div class="modal fade" id="orderHoldModal" tabindex="-1" role="dialog" aria-labelledby="orderHoldModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-md" role="document">
		<div class="modal-content bg-white">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 5">
				<span aria-hidden="true">❌</span>
			</button>
			<div class="modal-body py-5">
				<?php include('inc/order_hold_modal.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Order Hold Modal 1-->
<div class="modal fade" id="orderHoldModalOne" tabindex="-1" role="dialog" aria-labelledby="orderHoldModalOneTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content bg-white">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 6">
				<span aria-hidden="true">❌</span>
			</button>
			<div class="modal-body py-5">
				<?php include('inc/order_hold_modal_1.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Order Hold Modal 2-->
<div class="modal fade" id="orderHoldModalTwo" tabindex="-1" role="dialog" aria-labelledby="orderHoldModalTwoTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content bg-white">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 7">
				<span aria-hidden="true">❌</span>
			</button>
			<div class="modal-body py-5">
				<?php include('inc/order_hold_modal_2.php'); ?>
			</div>
		</div>
	</div>
</div>

