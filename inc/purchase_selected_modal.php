<div class="inner-page-wrap">
	<div class="purchase-page w-100">
		<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
			<h3 class="page-title mb-1">
				<span>仕入れる商品を選択</span>
			</h3>

			<?php include('inc/search_box.php'); ?>
		</div>
		<!--div-->

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

		<div class="table-wrapper">
			<div class="card mb-3">
				<div class="card-body">
					<div class="table-responsive-lg">
						<div class="table-title">
							<div class="d-flex flex-wrap justify-content-between align-items-center py-2 pl-4 pr-3">
								<div class="tt-lt-col mb-1">
									<span>横浜本社倉庫への仕入れ</span>
								</div>
							</div>
						</div>
						<table class="table purchase-selected-modal">
							<thead>
								<tr>
									<th class="col-checkbox">
										<input type="checkbox" class="form-check-input ml-0" id="checkall">
									</th>
									<th class="column-1">製品 <i class="fa fa-caret-down ml-1"></i></th>
									<th class="column-2">ﾊﾞﾘｴｰｼｮﾝ</th>
									<th class="column-3">在庫数</th>
									<th class="column-4">⼊庫待ち</th>
									<th class="column-5">&nbsp;</th>
									<th class="column-6">&nbsp;</th>
									<th class="column-7">&nbsp;</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-center">
										<input type="checkbox" class="form-check-input ml-0" id="selectedId">
									</td>
									<td class="d-flex align-items-center">
										<p><img class="product-img" src="dist/img/1.jpg" alt="" /></p>
										<p>そらのおとしものf ねんどろ
										いど ニンフ (ノンスケール
										ABS来材</p>
									</td>
									<td class="text-center">
										<p><span class="badge first-hand">新品</span></p>
										<p>プラック</p>
										<p>Mサイズ</p>
									</td>
									<td class="text-center">
										<p>18</p>
										<p class="warehouse-company">袖浜本社倉庫</p>
									</td>
									<td class="text-center">
										<p>なし</p>
									</td>
									<td class="text-center">
										&nbsp;
									</td>
									<td class="text-center">
										<a class="btn btn-golden add-to-purchase">仕入れるに追加する</a>
									</td>
									<td class="text-center">
										<div class="delete-row"><img src="dist/img/icons/icon-close-wh.png" alt="" /></div>
									</td>
								</tr>

								<tr>
									<td class="text-center">
										<input type="checkbox" class="form-check-input ml-0" id="selectedId">
									</td>
									<td class="d-flex align-items-center">
										<p><img class="product-img" src="dist/img/2.jpg" alt="" /></p>
										<p>そらのおとしものf ねんどろ
										いど ニンフ (ノンスケール
										ABS来材</p>
									</td>
									<td class="text-center">
										<p><span class="badge second-hand">中古</span></p>
										<p>ブラック</p>
										<p>Mサイズ</p>
									</td>
									<td class="text-center">
										<p class="clr-red">0</p>
										<p class="warehouse-company">AmazonFAB</p>
									</td>
									<td class="text-center">
										<img class="icon-img" src="dist/img/icons/icon-yellow.png" alt="" />
										<p>0/6</p>
									</td>
									<td class="text-center">
										&nbsp;
									</td>
									<td class="text-center">
										<a class="btn btn-golden add-to-purchase">仕入れるに追加する</a>
									</td>
									<td class="text-center">
										<div class="delete-row"><img src="dist/img/icons/icon-close-wh.png" alt="" /></div>
									</td>
								</tr>
								<tr>
									<td class="text-center">
										<input type="checkbox" class="form-check-input ml-0" id="selectedId">
									</td>
									<td class="d-flex align-items-center">
										<p><img class="product-img" src="dist/img/3.jpg" alt="" /></p>
										<p>そらのおとしものf ねんどろ
										いど ニンフ (ノンスケール
										ABS来材</p>
									</td>
									<td class="text-center">
										<p><span class="badge first-hand">新品</span></p>
										<p>プラック</p>
										<p>Mサイズ</p>
									</td>
									<td class="text-center">
										<p>18</p>
										<p class="warehouse-company">袖浜本社倉庫</p>
									</td>
									<td class="text-center">
										<p>なし</p>
									</td>
									<td class="text-center">
										&nbsp;
									</td>
									<td class="text-center">
										<a class="btn btn-golden add-to-purchase">仕入れるに追加する</a>
									</td>
									<td class="text-center">
										<div class="delete-row"><img src="dist/img/icons/icon-close-wh.png" alt="" /></div>
									</td>
								</tr>

								<tr>
									<td class="text-center">
										<input type="checkbox" class="form-check-input ml-0" id="selectedId">
									</td>
									<td class="d-flex align-items-center">
										<p><img class="product-img" src="dist/img/2.jpg" alt="" /></p>
										<p>そらのおとしものf ねんどろ
										いど ニンフ (ノンスケール
										ABS来材</p>
									</td>
									<td class="text-center">
										<p><span class="badge second-hand">中古</span></p>
										<p>ブラック</p>
										<p>Mサイズ</p>
									</td>
									<td class="text-center">
										<p class="clr-red">0</p>
										<p class="warehouse-company">AmazonFAB</p>
									</td>
									<td class="text-center">
										<img class="icon-img" src="dist/img/icons/icon-yellow.png" alt="" />
										<p>5/10</p>
									</td>
									<td class="text-center">
										&nbsp;
									</td>
									<td class="text-center">
										<a class="btn btn-gray add-to-purchase">Unpurchase</a>
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

	</div>
	<!--purchase-page w-100-->
</div>
<!--inner-page-wrap-->

