<?php include('inc/header.php'); ?>

<div class="outer-page-wrap">
	<div class="container-fluid">
		<div class="d-flex">

			<?php include('inc/side_menu.php'); ?>

			<div class="inner-page-wrap">
				<div class="purchase-page w-100">
					<section class="top-block">
						<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
							<h3 class="page-title mb-1">
								<span>Order Modals</span>
							</h3>
						</div>
						<!--d-flex flex-wrap justify-content-between align-items-center-->
					</section>
					<!--top-block-->

					<section class="table-wrapper">
						<ul class="nav flex-column">
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#orderHoldModal">受注を管理_保留モーダル</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#orderHoldModalOne">受注を管理_保留モーダル – 1</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#orderHoldModalTwo">受注を管理_保留モーダル – 2</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#orderHoldModalThree">受注を管理_保留モーダル – 3</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#orderReturnWarehouseModal">受注を管理_倉庫へ返送モーダル</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#orderSplitConfirmation">受注を管理_分割確認</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#orderConfirmationInclusionModal">受注を管理_同梱確認</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#orderUnprocessedDuplicateModal">受注を管理_未処理に複製モーダル</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#orderDetailsModal">受注を管理_注文詳細</a></li>
						</ul>
					</section>
					<!--table-wrapper-->
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
	<div class="modal-dialog modal-dialog-centered modal-xs" role="document">
		<div class="modal-content bg-white">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 5">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/order_hold_modal.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Order Hold Modal 1-->
<div class="modal fade" id="orderHoldModalOne" tabindex="-1" role="dialog" aria-labelledby="orderHoldModalOneTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content bg-white">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 6">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/order_hold_modal_1.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Order Hold Modal 2-->
<div class="modal fade" id="orderHoldModalTwo" tabindex="-1" role="dialog" aria-labelledby="orderHoldModalTwoTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-md" role="document">
		<div class="modal-content bg-white">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 7">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/order_hold_modal_2.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Order Hold Modal 3-->
<div class="modal fade" id="orderHoldModalThree" tabindex="-1" role="dialog" aria-labelledby="orderHoldModalThreeTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xs" role="document">
		<div class="modal-content bg-white">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 7">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/order_hold_modal_3.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Order return warehouse -->
<div class="modal fade" id="orderReturnWarehouseModal" tabindex="-1" role="dialog" aria-labelledby="orderReturnWarehouseModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-md" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 8">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/order_return_warehouse_modal.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Order Split confirmation Modal-->
<div class="modal fade" id="orderSplitConfirmation" tabindex="-1" role="dialog" aria-labelledby="orderSplitConfirmationTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-md" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 9">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/order_split_confirmation_modal.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Order confirmation Inclusion Modal-->
<div class="modal fade" id="orderConfirmationInclusionModal" tabindex="-1" role="dialog" aria-labelledby="orderConfirmationInclusionModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-md" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 10">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/order_confirmation_inclusion_modal.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Order Unprocessed Duplicate -->
<div class="modal fade" id="orderUnprocessedDuplicateModal" tabindex="-1" role="dialog" aria-labelledby="orderUnprocessedDuplicateModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-md" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 11">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/order_unprocessed_duplicate_modal.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Order details-->
<div class="modal fade" id="orderDetailsModal" tabindex="-1" role="dialog" aria-labelledby="orderDetailsModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-md" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 12">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/order_details_modal.php'); ?>
			</div>
		</div>
	</div>
</div>