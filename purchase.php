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
								<span>仕入る</span>
							</h3>
						</div>
						<!--d-flex flex-wrap justify-content-between align-items-center-->

						<ul class="nav top-nav mb-3">
							<li class="nav-item">
								<a class="nav-link active li-product-order" href="purchase_selected.php">今回の仕⼊
									<span class="selcted-counter">4</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link li-order-history" href="purchase_order_history.php">仕⼊た履歴</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="purchase_modal.php">Purchase Modals</a>
							</li>
						</ul>
						<!--nav top-nav mb-3-->

						<div class="supplier-warehouse-option">
							<img class="warehouese-icon" src="dist/img/icons/icon-warehouse.png" alt="warehouse" />
							<div class="warehouse-title mb-4 text-center">仕⼊れ先の倉庫を選択</div>
							<div class="button-group btn-group-vertical">
								<a class="btn btn-dark mb-4" href="javascript:void();" role="button"><span>横浜本社倉庫へ</span></a>
								<a class="btn btn-dark mb-4" href="javascript:void(0);" role="button"><span>amazonFBAへ</span></a>
							</div>
						</div>
						<!--supplier-warehouse-option-->
					</div>
					<!--top-block-->
				</div>
				<!--purchase-page w-100-->
			</div>
			<!--inner-page-wrap-->

		</div>
		<!--d-flex-->
	</div>
	<!--container-fluid-->
</div>
<!--outer-page-wrap-->

<?php include('inc/footer.php'); ?>

