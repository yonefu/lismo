<div class="inner-page-wrap">
	<div class="list-page w-100">
		<div class="top-block">
			<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
				<h3 class="page-title mb-1">
					<span>リスモア上で非表示にした商品</span>
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

			<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
				<div class="search-result mr-3">
					<span>全てを表示中:<span class="fontEN">30</span>件</span>
				</div>
				<div class="right-dropdown d-flex ml-auto">
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
			<div class="card mb-3">
				<div class="card-body">
					<div class="table-responsive-lg">
						<table class="table list-table-modal">
							<thead>
								<tr>
									<th class="col-checkbox">
										<div class="position-relative custom-control custom-checkbox">
											<input type="checkbox" class="form-check-input custom-control-input ml-0" id="checkall">
											<label class="custom-control-label" for="checkall"></label>
										</div>
									</th>
									<th class="column-1">製品</th>
									<th class="column-2">ﾊﾞﾘｴｰｼｮﾝ</th>
									<th class="column-3">出品をやめた⽇時</th>
									<th class="column-4">アクション</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-center">
										<div class="position-relative custom-control custom-checkbox">
											<input type="checkbox" class="form-check-input custom-control-input ml-0 selectedId" id="selectedId5" checked>
											<label class="custom-control-label" for="selectedId5"></label>
											<div id="showDiv" class="show-msg-div">
											    <span class="clr-red">完全に⾮表⽰にする</span>
											</div>
										</div>
									</td>
									<td class="d-flex align-items-center">
										<p><img class="product-img" src="dist/img/1.jpg" alt="" /></p>
										<p>そらのおとしものf ねんどろ	いど ニンフ (ノンスケール ABS来材</p>
									</td>
									<td class="text-center">
										<p class="fontEN f-15">3</p>
									</td>
									<td class="text-center">
										<p class="fontEN">2019/11/30 15:00</p>
									</td>
									<td class="text-center">
										<a class="btn btn-dark"><span>出品管理に戻す</span></a>
										<a class="btn btn-transparent clr-red d-block"><span>完全に⾮表⽰にする</span></a>
									</td>
								</tr>
								<!--tr-->
								<tr>
									<td class="text-center font-weight-bold">
										<div class="position-relative custom-control custom-checkbox">
											<input type="checkbox" class="form-check-input custom-control-input ml-0 selectedId" id="selectedId6">
											<label class="custom-control-label" for="selectedId6"></label>
											<div id="showDiv" class="show-msg-div d-none">
											    <span class="clr-red">完全に⾮表⽰にする</span>
											</div>
										</div>
									</td>
									<td class="d-flex align-items-center">
										<p><img class="product-img" src="dist/img/2.jpg" alt="" /></p>
										<p>Final Fantasy Plush - Chocobo 30th Anniversary</p>
									</td>
									<td class="text-center">
										<p class="fontEN">3</p>
									</td>
									<td class="text-center">
										<p class="fontEN f-15">2019/11/30 15:00</p>
									</td>
									<td class="text-center">
										<a class="btn btn-dark"><span>出品管理に戻す</span></a>
										<a class="btn btn-transparent clr-red d-block"><span>完全に⾮表⽰にする</span></a>
									</td>
								</tr>
								<!--tr-->
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
	<!--list-page w-100-->
</div>
<!--inner-page-wrap-->

<?php include('inc/pagination.php'); ?>
