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
							<div class="right-dropdown d-flex ml-auto">
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

					<a href="javascript:void(0);" class="view-hidden-products br-25 btn btn-lg f-12 text-dark mb-2 mt-0 ml-auto position-static"  data-toggle="modal" data-target="#ProductModalOption"><span>⾮表⽰にした商品を⾒る</span></a>

					<div class="no-item-found w-100">
						<span class="f-18">表⽰できる項⽬がありませんでした</span>
					</div>
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

<!-- Modal ProductModalOption-->
<div class="modal fade" id="ProductModalOption" tabindex="-1" role="dialog" aria-labelledby="ProductModalOptionTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xs" role="document">
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
				<a href="javascript:void(0);" class="btn btn-dark" data-toggle="modal" data-target="#listAll">すべて⾮表⽰に</a>
			</div>
		</div>
	</div>
</div>

<!-- Modal listAll-->
<div class="modal fade" id="listAll" tabindex="-1" role="dialog" aria-labelledby="listAllTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-full" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 6">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/list_modal.php'); ?>
			</div>
		</div>
	</div>
</div>



