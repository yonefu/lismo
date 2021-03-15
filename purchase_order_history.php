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
								<span>仕⼊れる</span>
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
								<a class="nav-link li-product-order" href="purchase_selected.php">今回発注する商品
								<span class="selcted-counter">4</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active li-order-history" href="purchase_order_history.php">発注履歴</a>
							</li>
						</ul>
						<!--ul nav-->

						<div class="d-flex flex-wrap justify-content-between align-items-center mb-0">
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

					<div class="table-wrapper">
						<div id="accordion">
							<div class="card">
								<div class="card-header p-0" id="headingOne">
									<h5 class="mb-0">
										<button class="btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										<i class="fa fa-caret-up mr-2"></i><span class="mr-4">2020年08月15日</span><small>(2件)</small>
										</button>
									</h5>
								</div>

								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
									<div class="card-body">
										<div class="table-responsive-lg">
											<div class="table-title">
												<div class="d-flex justify-content-between align-items-center py-2 px-4">
													<div class="tt-lt-col mb-1">
														<span>横浜本社倉庫への仕⼊れ </span>
													</div>
													<div class="tt-rt-col row mb-1 px-3 align-items-center">
														<div class="date ml-4 f-12">
															<span class="mr-1">2020年08月15日</span> <span>15:35</span>
														</div>
														<div class="order-no ml-4">
															<span class="f-12">発注ID:PO0453-00000010643</span>
														</div>
														<div class="total ml-4">
															<span class="t-label">合計:</span><span class="t-price">¥206,582</span>
														</div>
													</div>
												</div>
											</div>
											<table class="table purchase-order-history-table">
												<thead>
													<tr>
														<th class="column-1">倉庫 <i class="fa fa-caret-down ml-1"></i></th>
														<th class="column-2">商品</th>
														<th class="column-3">ﾊﾞﾘｴｰｼｮﾝ</th>
														<th class="column-4">サプライヤー</th>
														<th class="column-5">入荷状況</th>
														<th class="column-6">個数</th>
														<th class="column-7">コメント <i class="fa fa-caret-down ml-1"></i></th>
														<th class="column-8">発注額</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="text-center">横浜本社倉庫</td>
														<td class="d-flex align-items-center">
															<img class="product-img" src="dist/img/1.jpg" alt="" />
															そらのおとしものf ねんどろ
															いど ニンフ (ノンスケール
															ABS来材
														</td>
														<td class="text-center">
															<p><span class="badge first-hand">直接</span></p>
															<p>ブラック</p>
															<p>Mサイズ</p>
														</td>
														<td class="text-center">Amazon.co.jp</td>
														<td class="text-center">
															<img class="icon-img" src="dist/img/icons/icon-red.png" alt="" />
															<p>入荷済み</p>
														</td>
														<td class="text-center">1</td>
														<td class="text-center">連⽇の在庫不⾜により通</td>
														<td class="text-right pr-4">
															<p class="original-price mb-0">940円</p>
															<p class="discounted-price mb-0">940円</p>
														</td>
													</tr>
													<tr>
														<td class="text-center">横浜本社倉庫</td>
														<td class="d-flex align-items-center">
															<img class="product-img" src="dist/img/2.jpg" alt="" />
															Good Smile No Game No
															ife: Shiro Nendoroid
															Action Figure
														</td>
														<td class="text-center">
															<p><span class="badge second-hand">中古</span></p>
															<p>ブラック</p>
															<p>Mサイズ</p>
														</td>
														<td class="text-center">Amazon.co.jp</td>
														<td class="text-center">
															<img class="icon-img" src="dist/img/icons/icon-yellow.png" alt="" />
															<p>0/6</p>
														</td>
														<td class="text-center">20</td>
														<td class="text-center">なし</td>
														<td class="text-right pr-4">
															<p class="original-price mb-0">8400円</p>
															<p class="discounted-price mb-0">4200円</p>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<!--card-body-->

									<div class="card-body">
										<div class="table-responsive-lg">
											<div class="table-title">
												<div class="d-flex justify-content-between align-items-center py-2 px-4">
													<div class="tt-lt-col mb-1">
														<span>横浜本社倉庫への仕⼊れ </span>
													</div>
													<div class="tt-rt-col row mb-1 px-3 align-items-center">
														<div class="date ml-4 f-12">
															<span class="mr-1">2020年08月15日</span> <span>15:35</span>
														</div>
														<div class="order-no ml-4">
															<span class="f-12">発注ID:PO0453-00000010643</span>
														</div>
														<div class="total ml-4">
															<span class="t-label">合計:</span><span class="t-price">¥12,582</span>
														</div>
													</div>
												</div>
											</div>
											<table class="table purchase-order-history-table">
												<thead>
													<tr>
														<th class="column-1">倉庫 <i class="fa fa-caret-down ml-1"></i></th>
														<th class="column-2">商品</th>
														<th class="column-3">ﾊﾞﾘｴｰｼｮﾝ</th>
														<th class="column-4">サプライヤー</th>
														<th class="column-5">入荷状況</th>
														<th class="column-6">個数</th>
														<th class="column-7">コメント <i class="fa fa-caret-down ml-1"></i></th>
														<th class="column-8">発注額</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="text-center">横浜本社倉庫</td>
														<td>
															<p><img class="product-img" src="dist/img/3.jpg" alt="" /></p>
															<p>そらのおとしものf ねんどろ
															いど ニンフ (ノンスケール
															ABS来材</p>
														</td>
														<td class="text-center">
															<p><span class="badge first-hand">直接</span></p>
															<p>ブラック</p>
															<p>Mサイズ</p>
														</td>
														<td class="text-center">Amazon.co.jp</td>
														<td class="text-center">
															<img class="icon-img" src="dist/img/icons/icon-red.png" alt="" />
															<p>入荷済み</p>
														</td>
														<td class="text-center">1</td>
														<td class="text-center">連⽇の在庫不⾜により通</td>
														<td class="text-right pr-4">
															<p class="original-price mb-0">940円</p>
															<p class="discounted-price mb-0">940円</p>
														</td>
													</tr>
												</tbody>
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
										<button class="btn collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										<i class="fa fa-caret-up mr-2"></i><span class="mr-4">2020年08月14日</span><small>(1件)</small>
										</button>
									</h5>
								</div>
								<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
									<div class="card-body">
										<div class="table-responsive-lg">
											<div class="table-title">
												<div class="d-flex justify-content-between align-items-center py-2 px-4">
													<div class="tt-lt-col mb-1">
														<span>Amazonへの仕入れ </span>
													</div>
													<div class="tt-rt-col row mb-1 px-3 align-items-center">
														<div class="date ml-4 f-12">
															<span class="mr-1">2020年08月15日</span> <span>15:35</span>
														</div>
														<div class="order-no ml-4">
															<span class="f-12">発注ID:PO0453-00000010643</span>
														</div>
														<div class="total ml-4">
															<span class="t-label">合計:</span><span class="t-price">¥12,582</span>
														</div>
													</div>
												</div>
											</div>
											<table class="table purchase-order-history-table">
												<thead>
													<tr>
														<th class="column-1">倉庫 <i class="fa fa-caret-down ml-1"></i></th>
														<th class="column-2">商品</th>
														<th class="column-3">ﾊﾞﾘｴｰｼｮﾝ</th>
														<th class="column-4">サプライヤー</th>
														<th class="column-5">入荷状況</th>
														<th class="column-6">個数</th>
														<th class="column-7">コメント <i class="fa fa-caret-down ml-1"></i></th>
														<th class="column-8">発注額</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="text-center">横浜本社倉庫</td>
														<td>
															<p><img class="product-img" src="dist/img/1.jpg" alt="" /></p>
															<p>そらのおとしものf ねんどろ
															いど ニンフ (ノンスケール
															ABS来材</p>
														</td>
														<td class="text-center">
															<p><span class="badge first-hand">直接</span></p>
															<p>ブラック</p>
															<p>Mサイズ</p>
														</td>
														<td class="text-center">Amazon.co.jp</td>
														<td class="text-center">
															<img class="icon-img" src="dist/img/icons/icon-red.png" alt="" />
															<p>入荷済み</p>
														</td>
														<td class="text-center">1</td>
														<td class="text-center">なし</td>
														<td class="text-right pr-4">
															<p class="original-price mb-0">940円</p>
															<p class="discounted-price mb-0">940円</p>
														</td>
													</tr>
													<tr>
														<td class="text-center">横浜本社倉庫</td>
														<td>
															<img class="product-img" src="dist/img/2.jpg" alt="" />
															Good Smile No Game No
															ife: Shiro Nendoroid
															Action Figure
														</td>
														<td class="text-center">
															<p><span class="badge second-hand">中古</span></p>
															<p>ブラック</p>
															<p>Mサイズ</p>
														</td>
														<td class="text-center">Amazon.co.jp</td>
														<td class="text-center">
															<img class="icon-img" src="dist/img/icons/icon-red.png" alt="" />
															<p>入荷済み</p>
														</td>
														<td class="text-center">20</td>
														<td class="text-center">なし</td>
														<td class="text-right pr-4">
															<p class="original-price mb-0">8400円</p>
															<p class="discounted-price mb-0">4200円</p>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<!--card-body-->
								</div>
							</div>
							<!--card-->

							<div class="card">
								<div class="card-header p-0" id="headingThree">
									<h5 class="mb-0">
										<button class="btn collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										<i class="fa fa-caret-up mr-2"></i><span class="mr-4">2020年08月14日</span><small>(3件)</small>
										</button>
									</h5>
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
									<div class="card-body">
										<div class="table-responsive-lg">
											<div class="table-title">
												<div class="d-flex justify-content-between align-items-center py-2 px-4">
													<div class="tt-lt-col mb-1">
														<span>Amazonへの仕入れ </span>
													</div>
													<div class="tt-rt-col row mb-1 px-3 align-items-center">
														<div class="date ml-4 f-12">
															<span class="mr-1">2020年08月15日</span> <span>15:35</span>
														</div>
														<div class="order-no ml-4">
															<span class="f-12">発注ID:PO0453-00000010643</span>
														</div>
														<div class="total ml-4">
															<span class="t-label">合計:</span><span class="t-price">¥12,582</span>
														</div>
													</div>
												</div>
											</div>
											<table class="table purchase-order-history-table">
												<thead>
													<tr>
														<th class="column-1">倉庫 <i class="fa fa-caret-down ml-1"></i></th>
														<th class="column-2">商品</th>
														<th class="column-3">ﾊﾞﾘｴｰｼｮﾝ</th>
														<th class="column-4">サプライヤー</th>
														<th class="column-5">入荷状況</th>
														<th class="column-6">個数</th>
														<th class="column-7">コメント <i class="fa fa-caret-down ml-1"></i></th>
														<th class="column-8">発注額</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="text-center">横浜本社倉庫</td>
														<td>
															<img class="product-img" src="dist/img/1.jpg" alt="" />
															そらのおとしものf ねんどろ
															いど ニンフ (ノンスケール
															ABS来材
														</td>
														<td class="text-center">
															<p><span class="badge first-hand">直接</span></p>
															<p>ブラック</p>
															<p>Mサイズ</p>
														</td>
														<td class="text-center">Amazon.co.jp</td>
														<td class="text-center">
															<img class="icon-img" src="dist/img/icons/icon-red.png" alt="" />
															<p>入荷済み</p>
														</td>
														<td class="text-center">1</td>
														<td class="text-center">なし</td>
														<td class="text-right pr-4">
															<p class="original-price mb-0">940円</p>
															<p class="discounted-price mb-0">940円</p>
														</td>
													</tr>
													<tr>
														<td class="text-center">横浜本社倉庫</td>
														<td>
															<img class="product-img" src="dist/img/2.jpg" alt="" />
															Good Smile No Game No
															ife: Shiro Nendoroid
															Action Figure
														</td>
														<td class="text-center">
															<p><span class="badge second-hand">中古</span></p>
															<p>ブラック</p>
															<p>Mサイズ</p>
														</td>
														<td class="text-center">Amazon.co.jp</td>
														<td class="text-center">
															<img class="icon-img" src="dist/img/icons/icon-red.png" alt="" />
															<p>入荷済み</p>
														</td>
														<td class="text-center">20</td>
														<td class="text-center">なし</td>
														<td class="text-right pr-4">
															<p class="original-price mb-0">8400円</p>
															<p class="discounted-price mb-0">4200円</p>
														</td>
													</tr>
												</tbody>
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

