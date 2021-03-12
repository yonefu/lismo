<?php include('inc/header.php'); ?>

<div class="outer-page-wrap">
	<div class="container-fluid">
		<div class="d-flex">

			<?php include('inc/side_menu.php'); ?>

			<div class="inner-page-wrap">
				<div class="list-page w-100">
					<div class="top-block">
						<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
							<h3 class="page-title mb-1">
								<span>出品を管理</span>
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
							<div class="right-dropdown d-flex">
								<div>
									<a class="nav-link dropdown-warehouse btn btn-sm dropdown-toggle bg-white br-25 mr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										ショップ：全て
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
								<div class="table-responsive-lg">
									<table class="table list-table">
										<thead>
											<tr>
												<th class="col-checkbox">
													<input type="checkbox" class="form-check-input ml-0" id="checkall">
												</th>
												<th class="column-1">出品場所</th>
												<th class="column-2">製品</th>
												<th class="column-3">ﾊﾞﾘｴｰｼｮﾝ</th>
												<th class="column-4">出品状況</th>
												<th class="column-5">在庫同期</th>
												<th class="column-6">最終更新⽇</th>
												<th class="column-7">&nbsp;</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="text-center">
													<input type="checkbox" class="form-check-input ml-0" id="selectedId">
												</td>
												<td class="text-center">
													<img class="" src="dist/img/icons/icon-sm-shopify.png" alt="Shopify" />
													<p>ショップ名ABC</p>
												</td>
												<td class="d-flex align-items-center">
													<p><img class="product-img" src="dist/img/1.jpg" alt="" /></p>
													<p>そらのおとしものf ねんどろ いど ニンフ (ノンスケール ABS来材</p>
												</td>
												<td class="text-center">
													<span class="mr-4 fontEN f-15">3</span><i class="fa fa-caret-right"></i>
												</td>
												<td class="text-center">
													<div class="checkbox switcher">
														<label for="switchIcon">
															<input type="checkbox" id="switchIcon" value="" checked>
															<span><small></small></span>
														</label>
												    </div>
													<p>出品中</p>
												</td>
												<td class="text-center">
													<div class="checkbox switcher">
														<label for="switchIcon2">
															<input type="checkbox" id="switchIcon2" value="" checked>
															<span><small></small></span>
														</label>
												    </div>
													<p>同期中</p>
												</td>
												<td>
													<p class="fontEN">2021/02/22</p>
													<p class="fontEN">15:00</p>
												</td>
												<td class="text-center">
													⾮表⽰にする
												</td>
											</tr>
											<!--tr-->
											<tr>
												<td class="text-center">
													<input type="checkbox" class="form-check-input ml-0" id="selectedId">
												</td>
												<td class="text-center">
													<img class="" src="dist/img/icons/icon-sm-amazon.png" alt="Shopify" />
													<p>ショップ名ABC</p>
												</td>
												<td class="d-flex align-items-center">
													<p><img class="product-img" src="dist/img/2.jpg" alt="" /></p>
													<p>そらのおとしものf ねんどろ いど ニンフ (ノンスケール ABS来材</p>
												</td>
												<td class="text-center">
													<span class="mr-4 fontEN f-15">1</span><i class="fa fa-caret-right"></i>
												</td>
												<td class="text-center">
													<div class="checkbox switcher">
														<label for="switchIcon3">
															<input type="checkbox" id="switchIcon3" value="" checked>
															<span><small></small></span>
														</label>
												    </div>
													<p>出品中</p>
												</td>
												<td class="text-center">
													<div class="checkbox switcher">
														<label for="switchIcon4">
															<input type="checkbox" id="switchIcon4" value="" checked>
															<span><small></small></span>
														</label>
												    </div>
													<p>同期中</p>
												</td>
												<td>
													<p class="fontEN">2021/02/22</p>
													<p class="fontEN">15:00</p>
												</td>
												<td class="text-center">
													⾮表⽰にする
												</td>
											</tr>
											<!--tr-->
											<tr>
												<td class="text-center">
													<input type="checkbox" class="form-check-input ml-0" id="selectedId">
												</td>
												<td class="text-center">
													<img class="" src="dist/img/icons/icon-sm-shopify.png" alt="Shopify" />
													<p>ショップ名ABC</p>
												</td>
												<td class="d-flex align-items-center">
													<p><img class="product-img" src="dist/img/3.jpg" alt="" /></p>
													<p>ピーダマン CB-10 チューンナップギア トルネードマガジン</p>
												</td>
												<td class="text-center">
													<span class="mr-4 fontEN f-15">2</span><i class="fa fa-caret-right"></i>
												</td>
												<td class="text-center">
													<div class="checkbox switcher">
														<label for="switchIcon5">
															<input type="checkbox" id="switchIcon5" value="">
															<span><small></small></span>
														</label>
												    </div>
													<p>出品中</p>
												</td>
												<td class="text-center">
													<div class="checkbox switcher">
														<label for="switchIcon6">
															<input type="checkbox" id="switchIcon6" value="">
															<span><small></small></span>
														</label>
												    </div>
													<p>同期中</p>
												</td>
												<td>
													<p class="fontEN">2021/02/22</p>
													<p class="fontEN">15:00</p>
												</td>
												<td class="text-center">
													⾮表⽰にする
												</td>
											</tr>
											<!--tr-->
											<tr>
												<td class="text-center">
													<input type="checkbox" class="form-check-input ml-0" id="selectedId">
												</td>
												<td class="text-center">
													<img class="" src="dist/img/icons/icon-sm-amazon.png" alt="Shopify" />
													<p>ショップ名ABC</p>
												</td>
												<td class="d-flex align-items-center">
													<p><img class="product-img" src="dist/img/4.jpg" alt="" /></p>
													<p>ピーダマン CB-10 チューンナップギア トルネードマガジン</p>
												</td>
												<td class="text-center">
													<span class="mr-4">なし</span><i class="fa fa-caret-right"></i>
												</td>
												<td class="text-center">
													<div class="checkbox switcher">
														<label for="switchIcon7">
															<input type="checkbox" id="switchIcon7" value="" checked>
															<span><small></small></span>
														</label>
												    </div>
													<p>出品中</p>
												</td>
												<td class="text-center">
													<div class="checkbox switcher">
														<label for="switchIcon8">
															<input type="checkbox" id="switchIcon8" value="" checked>
															<span><small></small></span>
														</label>
												    </div>
													<p>同期中</p>
												</td>
												<td>
													<p class="fontEN">2021/02/22</p>
													<p class="fontEN">15:00</p>
												</td>
												<td class="text-center">
													⾮表⽰にする
												</td>
											</tr>
											<!--tr-->
											<tr>
												<td class="text-center">
													<input type="checkbox" class="form-check-input ml-0" id="selectedId">
												</td>
												<td class="text-center">
													<img class="" src="dist/img/icons/icon-sm-shopify.png" alt="Shopify" />
													<p>ショップ名ABC</p>
												</td>
												<td class="d-flex align-items-center">
													<p><img class="product-img" src="dist/img/5.jpg" alt="" /></p>
													<p>Final Fantasy Plush - Chocobo 30th Anniversary</p>
												</td>
												<td class="text-center">
													<span class="mr-4 fontEN f-15">5</span><i class="fa fa-caret-right"></i>
												</td>
												<td class="text-center">
													<div class="checkbox switcher">
														<label for="switchIcon9">
															<input type="checkbox" id="switchIcon9" value="">
															<span><small></small></span>
														</label>
												    </div>
													<p>出品中</p>
												</td>
												<td class="text-center">
													<div class="checkbox switcher">
														<label for="switchIcon10">
															<input type="checkbox" id="switchIcon10" value="" checked>
															<span><small></small></span>
														</label>
												    </div>
													<p>同期中</p>
												</td>
												<td>
													<p class="fontEN">2021/02/22</p>
													<p class="fontEN">15:00</p>
												</td>
												<td class="text-center">
													⾮表⽰にする
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
					<?php include('inc/pagination.php'); ?>
				</div>
				<!--list-page w-100-->
			</div>
			<!--"inner-page-wrap-->
		</div>
	</div>
	<!--container-fluid-->
</div>
<!--outer-page-wrap-->
<?php include('inc/footer.php'); ?>

<!-- Modal-->
<div class="modal fade" id="ProductModalOption" tabindex="-1" role="dialog" aria-labelledby="ProductModalOptionTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-md" role="document">
		<div class="modal-content bg-white">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 5">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<div class="text-center popup-message px-4 f-15">
					全てのプラットフォームの同じ商品を <br/>リスモア上で⾮表⽰にしますか？
				</div>
			</div>
			<div class="modal-footer">
				<a href="javascript:void(0);" class="btn btn-transparent">選択したものだけ</a>
				<a href="javascript:void(0);" class="btn btn-dark"  data-toggle="modal" data-target="#ManagelistPopup">すべて⾮表⽰に</a>
			</div>
		</div>
	</div>
</div>

<!-- Modal list popup-->
<div class="modal fade" id="ManagelistPopup" tabindex="-1" role="dialog" aria-labelledby="ManagelistPopupTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 5">
				<span aria-hidden="true">❌</span>
			</button>
			<div class="modal-body py-5 px-1">
				<?php include('inc/list_modal.php'); ?>
			</div>
		</div>
	</div>
</div>



