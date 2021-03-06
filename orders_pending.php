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
								<a class="nav-link" href="orders_preparing_shipment.php">
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
								<a class="nav-link active" href="orders_pending.php">
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

						<div class="d-flex flex-wrap justify-content-between align-items-center mb-0">
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
								</li>
							</ul>
							<!--ul nav-->
						</div>
					</div>
					<!--top-block-->

					<div class="table-wrapper order-table-wrapper">
						<div id="accordion">
							<div class="card">
								<div class="card-header p-0" id="headingOne">
									<h5 class="mb-0">
										<button class="btn" data-toggle="collapse" data-target="#collapseOne">
										<i class="fa fa-caret-up mr-2"></i><span class="mr-4">2020年08月15日</span><small>(1件)</small>
										</button>
									</h5>
								</div>

								<div id="collapseOne" class="collapse show">
									<div class="card-body">
										<div class="table-responsive-lg">
											<table class="table order-table">
												<thead>
													<tr>
														<th class="col-checkbox">
															<div class="position-relative custom-control custom-checkbox">
																<input type="checkbox" class="form-check-input custom-control-input ml-0" id="checkall">
																<label class="custom-control-label" for="checkall"></label>
															</div>
														</th>
														<th class="column-1">倉庫 <i class="fa fa-caret-down ml-1"></i></th>
														<th class="column-2">出荷ID / 期限 <i class="fa fa-caret-down ml-1"></i></th>
														<th class="column-3">ショップ情報 <i class="fa fa-caret-down ml-1"></i></th>
														<th class="column-4 product-col">商品 <i class="fa fa-caret-down ml-1"></i></th>
														<th class="column-5">種類 <i class="fa fa-caret-down ml-1"></i></th>
														<th class="column-6">個数 <i class="fa fa-caret-down ml-1"></i></th>
														<th class="column-7">出荷状況 <i class="fa fa-caret-down ml-1"></i></th>
														<th class="column-8 text-left pl-4">配送情報 <i class="fa fa-caret-down ml-1"></i></th>
														<th class="column-9">アクション</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="text-center " rowspan="2">
															<div class="position-relative custom-control custom-checkbox">
																<input type="checkbox" class="form-check-input custom-control-input ml-0 selectedId" id="selectedId1">
																<label class="custom-control-label" for="selectedId1"></label>
																<div id="showDiv" class="show-msg-div d-none">
																    保留を解除する
																</div>
															</div>
														</td>
														<td class="text-center" rowspan="2">
															<p>横浜本社</p>
															<p>倉庫</p>
														</td>
														<td class="text-center" rowspan="2">
															<p><span class="badge badge-dark py-1 px-2">生川隊(沖旨)</span></p>
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
															<img src="dist/img/icons/icon-pause.png" alt="Shopify" />
															<p>保留中</p>
															<p>先⽅と連絡がつかな</p>
														</td>
														<td class=" text-left pl-4" rowspan="2">
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
																	<a class="dropdown-item" href="#">出荷詳細を⾒る</a>
																	<a class="dropdown-item" href="#">出荷を分割する</a>
																</div>
															</div>
														</td>
													</tr>
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
												</tbody>
												<!--tbody-->
											</table>
										</div>
									</div>
									<!--card-body-->
								</div>
							</div>
							<!--card-->

							<div class="card">
								<div class="card-header p-0" id="headingTwo">
									<h5 class="mb-0">
										<button class="btn collapsed" data-toggle="collapse" data-target="#collapseTwo">
										<i class="fa fa-caret-up mr-2"></i><span class="mr-4">2020年08月15日</span><small>(2件)</small>
										</button>
									</h5>
								</div>
								<div id="collapseTwo" class="collapse">
									<div class="card-body">
										<div class="table-responsive-lg">
											<table class="table order-table">
												<thead>
													<tr>
														<th class="col-checkbox">
															<div class="position-relative custom-control custom-checkbox">
																<input type="checkbox" class="form-check-input custom-control-input ml-0" id="checkall">
																<label class="custom-control-label" for="checkall"></label>
															</div>
														</th>
														<th class="column-1">倉庫 <i class="fa fa-caret-down ml-1"></i></th>
														<th class="column-2">出荷ID / 期限 <i class="fa fa-caret-down ml-1"></i></th>
														<th class="column-3">ショップ情報 <i class="fa fa-caret-down ml-1"></i></th>
														<th class="column-4 product-col">商品 <i class="fa fa-caret-down ml-1"></i></th>
														<th class="column-5">種類 <i class="fa fa-caret-down ml-1"></i></th>
														<th class="column-6">個数 <i class="fa fa-caret-down ml-1"></i></th>
														<th class="column-7">出荷状況 <i class="fa fa-caret-down ml-1"></i></th>
														<th class="column-8">配送情報 <i class="fa fa-caret-down ml-1"></i></th>
														<th class="column-9">アクション</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="text-center ">
															<div class="position-relative custom-control custom-checkbox">
																<input type="checkbox" class="form-check-input custom-control-input ml-0 selectedId" id="selectedId2">
																<label class="custom-control-label" for="selectedId2"></label>
																<div id="showDiv" class="show-msg-div d-none">
																    保留を解除する
																</div>
															</div>
														</td>
														<td class="text-center">
															<p>横浜本社</p>
															<p>倉庫</p>
														</td>
														<td class="text-center">
															<p><span class="badge badge-dark py-1 px-2">生川隊(沖旨)</span></p>
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
															<img src="dist/img/icons/icon-pause.png" alt="Shopify" />
															<p>保留中</p>
															<p>先⽅と連絡がつかな</p>
														</td>
														<td class="text-center" rowspan="2">
															<p>ヤマト宅配便</p>
															<p>60サイズ</p>
															<p>02kg</p>
														</td>
														<td class="text-center" rowspan="2">
															<div class="btn-group">
																<button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																他のアクション
																</button>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" href="#">出荷詳細を見る</a>
																	<a class="dropdown-item" href="#">未処理の受注へ戻す</a>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
												<!--tbody-->
											</table>
										</div>
									</div>
									<!--card-body-->
								</div>
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

<?php include('inc/footer.php'); ?>

