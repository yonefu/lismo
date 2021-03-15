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
									<div class="search-result mr-3">
										<span>全てを表示中:<span class="fontEN">30</span>件</span>
									</div>
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

						<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
							<div class="search-result mr-3">
								<span>タグ Apple , Apple で絞り込んで表⽰中:<span class="fontEN">30</span>件</span>
							</div>
							<div class="right-dropdown d-flex ml-auto">
								<div>
									<a class="nav-link dropdown-warehouse btn btn-sm dropdown-toggle bg-white br-25 mr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										倉庫：全て
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">横浜本社倉庫へ</a>
										<a class="dropdown-item" href="#">AmazonFAB</a>
									</div>
								</div>
								<div>
									<a class="nav-link btn dropdown-tags btn-sm dropdown-toggle bg-white br-25" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										タグ選択：あり
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
								<div class="table-responsive-lg">
									<table class="table stock-table">
										<thead>
											<tr>
												<th class="column-1">店護</th>
												<th class="column-2">製品</th>
												<th class="column-3">バリエーション</th>
												<th class="column-4">在庫総数</th>
												<th class="column-5">単価</th>
												<th class="column-6">在庫総作</th>
												<th class="column-7">入庫待ち</th>
												<th class="column-8">作成日・更新日</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="text-center">
													横浜本社倉庫
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
													<p class="font-weight-bold">プラック</p>
													<p class="font-weight-bold">Mサイズ</p>
												</td>
												<td class="text-center">
													<p class="font-weight-bold f-18">18</p>
													<p>すべての倉庫30</p>
												</td>
												<td class="text-center">
													<p class="original-price font-weight-bold">¥32,860</p>
												</td>
												<td class="text-center">
													<p class="original-price font-weight-bold">¥2,860</p>
												</td>
												<td class="text-center">
													なし
												</td>
												<td class="text-center">
													<p>2021/01/25 15:00</p>
													<p>2021/02/01 15:00</p>
												</td>
											</tr>
											<tr>
												<td class="text-center">
													amazonFBA
												</td>
												<td>
													<p>
														<img class="product-img" src="dist/img/2.jpg" alt="" />
													</p>
													<p>そらのおとしものf ねんどろいど フ レンスケール ABS素材-
														<small class="text-muted">JAN4582191967738</small>
													</p>
												</td>
												<td class="text-center">
													<p><span class="badge second-hand">中古</span></p>
													<p class="font-weight-bold">プラック</p>
													<p class="font-weight-bold">Mサイズ</p>
												</td>
												<td class="text-center">
													<p class="font-weight-bold clr-red f-18">0</p>
													<p>すべての倉庫30</p>
												</td>
												<td class="text-center">
													<p class="original-price font-weight-bold">¥32,860</p>
												</td>
												<td class="text-center">
													<p class="original-price font-weight-bold">¥2,860</p>
												</td>
												<td class="text-center">
													<img class="icon-img" src="dist/img/icons/icon-yellow.png" alt="" />
													<p>0/6</p>
												</td>
												<td class="text-center">
													<p>2021/01/25 15:00</p>
													<p>2021/02/01 15:00</p>
												</td>
											</tr>
											<tr>
												<td class="text-center">
													横浜本社倉庫
												</td>
												<td class="d-flex align-items-center">
													<p>
														<img class="product-img" src="dist/img/3.jpg" alt="" />
													</p>
													<p>Final Fantasy Plush - Chocobo 30th Anniversary
														<small class="text-muted">JAN45gz191967738</small>
													</p>
												</td>
												<td class="text-center">
													<p><span class="badge first-hand">直接</span></p>
													<p class="font-weight-bold">プラック</p>
													<p class="font-weight-bold">Mサイズ</p>
												</td>
												<td class="text-center">
													<p class="font-weight-bold f-18">18</p>
													<p>すべての倉庫30</p>
												</td>
												<td class="text-center">
													<p class="original-price font-weight-bold">¥32,860</p>
												</td>
												<td class="text-center">
													<p class="original-price font-weight-bold">¥2,860</p>
												</td>
												<td class="text-center">
													なし
												</td>
												<td class="text-center">
													<p>2021/01/25 15:00</p>
													<p>2021/02/01 15:00</p>
												</td>
											</tr>
											<tr>
												<td class="text-center">
													横浜本社倉庫
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
													<p class="font-weight-bold">プラック</p>
													<p class="font-weight-bold">Mサイズ</p>
												</td>
												<td class="text-center">
													<p class="font-weight-bold f-18">18</p>
													<p>すべての倉庫30</p>
												</td>
												<td class="text-center">
													<p class="original-price font-weight-bold">¥32,860</p>
												</td>
												<td class="text-center">
													<p class="original-price font-weight-bold">¥2,860</p>
												</td>
												<td class="text-center">
													なし
												</td>
												<td class="text-center">
													<p>2021/01/25 15:00</p>
													<p>2021/02/01 15:00</p>
												</td>
											</tr>
											<tr>
												<td class="text-center">
													amazonFBA
												</td>
												<td>
													<p>
														<img class="product-img" src="dist/img/2.jpg" alt="" />
													</p>
													<p>そらのおとしものf ねんどろいど フ レンスケール ABS素材-
														<small class="text-muted">JAN4582191967738</small>
													</p>
												</td>
												<td class="text-center">
													<p><span class="badge second-hand">中古</span></p>
													<p class="font-weight-bold">プラック</p>
													<p class="font-weight-bold">Mサイズ</p>
												</td>
												<td class="text-center">
													<p class="font-weight-bold clr-red f-18">0</p>
													<p>すべての倉庫30</p>
												</td>
												<td class="text-center">
													<p class="original-price font-weight-bold">¥32,860</p>
												</td>
												<td class="text-center">
													<p class="original-price font-weight-bold">¥2,860</p>
												</td>
												<td class="text-center">
													<img class="icon-img" src="dist/img/icons/icon-yellow.png" alt="" />
													<p>0/6</p>
												</td>
												<td class="text-center">
													<p>2021/01/25 15:00</p>
													<p>2021/02/01 15:00</p>
												</td>
											</tr>
											<tr>
												<td class="text-center">
													横浜本社倉庫
												</td>
												<td class="d-flex align-items-center">
													<p>
														<img class="product-img" src="dist/img/3.jpg" alt="" />
													</p>
													<p>Final Fantasy Plush - Chocobo 30th Anniversary
														<small class="text-muted">JAN45gz191967738</small>
													</p>
												</td>
												<td class="text-center">
													<p><span class="badge first-hand">直接</span></p>
													<p class="font-weight-bold">プラック</p>
													<p class="font-weight-bold">Mサイズ</p>
												</td>
												<td class="text-center">
													<p class="font-weight-bold f-18">18</p>
													<p>すべての倉庫30</p>
												</td>
												<td class="text-center">
													<p class="original-price font-weight-bold">¥32,860</p>
												</td>
												<td class="text-center">
													<p class="original-price font-weight-bold">¥2,860</p>
												</td>
												<td class="text-center">
													なし
												</td>
												<td class="text-center">
													<p>2021/01/25 15:00</p>
													<p>2021/02/01 15:00</p>
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
				<!--stock-page w-100-->
			</div>
			<!--"inner-page-wrap-->
		</div>
	</div>
	<!--container-fluid-->
</div>
<!--outer-page-wrap-->
<?php include('inc/footer.php'); ?>

