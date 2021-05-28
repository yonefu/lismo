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
								<span>Purchase Modals</span>
							</h3>
						</div>
						<!--d-flex flex-wrap justify-content-between align-items-center-->
					</section>
					<!--top-block-->

					<section class="table-wrapper">
						<ul class="nav flex-column">
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#purchaseSelectedModal">仕入れる_選択画面</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#purchaseSelectionModal1">仕入れる_選択画面 – 1</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#purchaseSelectionModal2">仕入れる_選択画面 – 2</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#purchaseSelectionModal3">仕入れる_選択画面 – 3</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#purchaseSelectionModal4">仕入れる_選択画面 – 4</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#purchaseSelectionModal5">仕入れる_選択画面 – 5</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#purchaseSelectionModal6">仕入れる_選択画面 – 6</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#purchaseSelectionModal7">仕入れる_選択画面 – 7</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#purchaseSelectionModal8">仕入れる_選択画面 – 8</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#purchaseSelectionModal9">仕入れる_選択画面 – 9</a></li>
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

<!-- Modal Purchase Selected Modal-->
<div class="modal fade" id="purchaseSelectedModal" tabindex="-1" role="dialog" aria-labelledby="purchaseSelectedModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-full" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 5">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/purchase_selected_modal.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Purchase Selection 1-->
<div class="modal fade" id="purchaseSelectionModal1" tabindex="-1" role="dialog" aria-labelledby="purchaseSelectionModal1Title" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-full" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 6">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/purchase_selection_modal_1.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Purchase Selection 2-->
<div class="modal fade" id="purchaseSelectionModal2" tabindex="-1" role="dialog" aria-labelledby="purchaseSelectionModal2Title" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-full" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 7">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/purchase_selection_modal_2.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Purchase Selection 3-->
<div class="modal fade" id="purchaseSelectionModal3" tabindex="-1" role="dialog" aria-labelledby="purchaseSelectionModal3Title" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-full" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 8">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/purchase_selection_modal_3.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Purchase Selection 4-->
<div class="modal fade" id="purchaseSelectionModal4" tabindex="-1" role="dialog" aria-labelledby="purchaseSelectionModal4Title" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-full" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 9">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/purchase_selection_modal_4.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Purchase Selection 5-->
<div class="modal fade" id="purchaseSelectionModal5" tabindex="-1" role="dialog" aria-labelledby="purchaseSelectionModal5Title" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-full" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 10">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/purchase_selection_modal_5.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Purchase Selection 6-->
<div class="modal fade" id="purchaseSelectionModal6" tabindex="-1" role="dialog" aria-labelledby="purchaseSelectionModal6Title" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-full" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 11">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/purchase_selection_modal_6.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Purchase Selection 7-->
<div class="modal fade" id="purchaseSelectionModal7" tabindex="-1" role="dialog" aria-labelledby="purchaseSelectionModal7Title" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 12">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/purchase_selection_modal_7.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Purchase Selection 8-->
<div class="modal fade" id="purchaseSelectionModal8" tabindex="-1" role="dialog" aria-labelledby="purchaseSelectionModal8Title" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 13">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/purchase_selection_modal_8.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Purchase Selection 9-->
<div class="modal fade" id="purchaseSelectionModal9" tabindex="-1" role="dialog" aria-labelledby="purchaseSelectionModal9Title" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-full" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 14">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/purchase_selection_modal_9.php'); ?>
			</div>
		</div>
	</div>
</div>