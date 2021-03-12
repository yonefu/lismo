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
								<a class="nav-link active li-product-order" href="purchase_selected.php">
									今回発注する商品
									<span class="selcted-counter">4</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link li-order-history" href="purchase_order_history.php">発注履歴</a>
							</li>
						</ul>
						<!--nav top-nav-->

						<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
							<div class="search-result mr-3">
								<span>全てを表示中:<span class="fontEN">30</span>件</span>
							</div>
							<div class="right-dropdown d-flex">
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
									<div class="d-flex flex-wrap justify-content-between align-items-center py-2 pl-4 pr-3">
										<div class="tt-lt-col mb-1">
											<span>横浜本社倉庫への仕⼊れ </span>
										</div>
										<!--div-->
										<div class="tt-rt-col d-flex flex-wrap align-items-center">
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
										<!--div-->
									</div>
								</div>
								<!--table-title-->
								<div class="table-responsive-lg">
									<table class="table purchase-selected-table">
										<thead>
											<tr>
												<th class="col-checkbox">
													<input type="checkbox" class="form-check-input ml-0" id="checkall">
												</th>
												<th class="column-1">商品 <i class="fa fa-caret-down ml-1"></i></th>
												<th class="column-2">ﾊﾞﾘｴｰｼｮﾝ</th>
												<th class="column-3">サプライヤー</th>
												<th class="column-4">発注単価</th>
												<th class="column-5">発注数</th>
												<th class="column-6">発注額 <i class="fa fa-caret-down ml-1"></i></th>
												<th class="column-7">コメント <i class="fa fa-caret-down ml-1"></i></th>
												<th class="column-8">&nbsp;</th>
											</tr>
										</thead>
										<!--thead-->
										<tbody>
											<tr>
												<td class="text-center">
													<div class="position-relative">
														<input type="checkbox" class="form-check-input ml-0" id="selectedId" checked>
														<div id="showDiv" class="show-msg-div">
														    保留を解除する
														</div>
													</div>
												</td>
												<td class="d-flex align-items-center">
													<p><img class="product-img" src="dist/img/1.jpg" alt="" /></p>
													<p><span>そらのおとしものf ねんどろいど ニンフ (ノンスケール ABS素材</span>
														<small class="text-muted mt-2 fontEN">JAN4582191967738</small>
													</p>
												</td>
												<td class="text-center">
													<p><span class="badge first-hand">新品</span></p>
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
													<input type="text" class="form-control text-center box-80 fontEN" placeholder="¥1200">
												</td>
												<td class="text-center">
													<input type="text" class="form-control text-center box-60 fontEN" placeholder="1">
												</td>
												<td class="text-right pr-4">
													<p class="original-price mb-0 fontEN">¥1200</p>
												</td>
												<td class="text-center">
													<textarea class="form-control" rows="2" placeholder="連そらの ⽇の在お庫としも不⾜のにf よねり通んどろ常より"></textarea>
												</td>
												<td class="text-center">
													<div class="delete-row"><img src="dist/img/icons/icon-close-wh.png" alt="" /></div>
												</td>
											</tr>
											<!--tr-->
											<tr>
												<td class="text-center">
													<input type="checkbox" class="form-check-input ml-0" id="selectedId">
												</td>
												<td class="d-flex align-items-center">
													<p><img class="product-img" src="dist/img/2.jpg" alt="" /></p>
													<p><span>Good Smile No Game No Life: Shiro Nendoroid Action Figure</span>
														<small class="text-muted mt-2 fontEN">JAN4582191967738</small>
													</p>
												</td>
												<td class="text-center">
													<p><span class="badge second-hand">中古</span></p>
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
													<input type="text" class="form-control text-center box-80 fontEN" placeholder="¥990">
												</td>
												<td class="text-center">
													<input type="text" class="form-control text-center box-60 fontEN" placeholder="99">
												</td>
												<td class="text-right pr-4">
													<p class="original-price mb-0 fontEN">¥1200</p>
												</td>
												<td class="text-center">
													<textarea class="form-control" rows="2" placeholder="任意でコメントを⼊⼒"></textarea>
												</td>
												<td class="text-center">
													<div class="delete-row"><img src="dist/img/icons/icon-close-wh.png" alt="" /></div>
												</td>
											</tr>
											<!--tr-->
											<tr>
												<td class="text-center">
													<input type="checkbox" class="form-check-input ml-0" id="selectedId">
												</td>
												<td class="d-flex align-items-center">
													<p><img class="product-img" src="dist/img/3.jpg" alt="" /></p>
													<p><span>そらのおとしものf ねんどろいど ニンフ (ノンスケール ABS素材</span>
														<small class="text-muted mt-2 fontEN">JAN4582191967738</small>
													</p>
												</td>
												<td class="text-center">
													<p><span class="badge first-hand">新品</span></p>
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
													<input type="text" class="form-control text-center box-80 fontEN" placeholder="¥1200">
												</td>
												<td class="text-center">
													<input type="text" class="form-control text-center box-60 fontEN" placeholder="1">
												</td>
												<td class="text-right pr-4">
													<p class="original-price mb-0 fontEN">¥1200</p>
												</td>
												<td class="text-center">
													<textarea class="form-control" rows="2" placeholder="連そらの ⽇の在お庫としも不⾜のにf よねり通んどろ常より"></textarea>
												</td>
												<td class="text-center">
													<div class="delete-row"><img src="dist/img/icons/icon-close-wh.png" alt="" /></div>
												</td>
											</tr>
											<!--tr-->
											<tr class="tr-clone">
												<td class="text-center">
													<input type="checkbox" class="form-check-input ml-0" id="selectedId">
												</td>
												<td class="d-flex align-items-center">
													<p><img class="product-img" src="dist/img/4.jpg" alt="" /></p>
													<p><span>Good Smile No Game No Life: Shiro Nendoroid Action Figure</span>
														<small class="text-muted mt-2 fontEN">JAN4582191967738</small>
													</p>
												</td>
												<td class="text-center">
													<p><span class="badge second-hand">中古</span></p>
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
													<input type="text" class="form-control text-center box-80 fontEN" placeholder="¥990">
												</td>
												<td class="text-center">
													<input type="text" class="form-control text-center box-60 fontEN" placeholder="99">
												</td>
												<td class="text-right pr-4">
													<p class="original-price mb-0 fontEN">¥1200</p>
												</td>
												<td class="text-center">
													<textarea class="form-control" rows="2" placeholder="任意でコメントを⼊⼒"></textarea>
												</td>
												<td class="text-center">
													<div class="delete-row"><img src="dist/img/icons/icon-close-wh.png" alt="" /></div>
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