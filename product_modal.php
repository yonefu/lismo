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
								<span>Product Modals</span>
							</h3>
						</div>
						<!--d-flex flex-wrap justify-content-between align-items-center-->
					</section>
					<!--top-block-->

					<section class="table-wrapper">
						<ul class="nav flex-column">
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#productDetailsEditModal1">商品の詳細_編集モーダル_1</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#productDetailsEditModal2">商品の詳細_編集モーダル_2</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#productDetailsEditModal2a">商品の詳細_編集モーダル_2_a</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#productDetailsEditModal2b">商品の詳細_編集モーダル_2_b</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#productDetailsEditModal3">商品の詳細_編集モーダル_3</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#productDetailsEditModal3a">商品の詳細_編集モーダル_3_a</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#productDetailsEditModal3b">品の詳細_編集モーダル_3_b</a></li>

							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#productDetailsEditModal4">商品の詳細_編集モーダル_4</a></li>

							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#productDetailsVariationRegistrationModal1">商品の詳細_バリエーション登録：1</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#productDetailsVariationRegistrationModal2">商品の詳細_バリエーション登録：2以上</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#productDetailsVariationRegistrationModal3">商品の詳細_バリエーション登録：なし</a></li>
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


<!-- Modal Product Details_Edit Modal_1-->
<div class="modal fade" id="productDetailsEditModal1" tabindex="-1" role="dialog" aria-labelledby="productDetailsEditModal1Title" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xs" role="document">
		<div class="modal-content bg-white">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 5">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/product_details_edit_modal_1.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Product Details_Edit Modal_2-->
<div class="modal fade" id="productDetailsEditModal2" tabindex="-1" role="dialog" aria-labelledby="productDetailsEditModal2Title" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content bg-white">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 6">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/product_details_edit_modal_2.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Product Details_Edit Modal_2a-->
<div class="modal fade" id="productDetailsEditModal2a" tabindex="-1" role="dialog" aria-labelledby="productDetailsEditModal2aTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content bg-white">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 6">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/product_details_edit_modal_2a.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Product Details_Edit Modal_2b-->
<div class="modal fade" id="productDetailsEditModal2b" tabindex="-1" role="dialog" aria-labelledby="productDetailsEditModal2bTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xs" role="document">
		<div class="modal-content bg-white">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 6">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/product_details_edit_modal_2b.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Product Details_Edit Modal_3-->
<div class="modal fade" id="productDetailsEditModal3" tabindex="-1" role="dialog" aria-labelledby="productDetailsEditModal3Title" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content bg-white">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 7">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/product_details_edit_modal_3.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Product Details_Edit Modal_3-->
<div class="modal fade" id="productDetailsEditModal3a" tabindex="-1" role="dialog" aria-labelledby="productDetailsEditModal3aTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content bg-white">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 7">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/product_details_edit_modal_3a.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Product Details_Edit Modal_3b-->
<div class="modal fade" id="productDetailsEditModal3b" tabindex="-1" role="dialog" aria-labelledby="productDetailsEditModal3bTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content bg-white">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 7">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/product_details_edit_modal_3b.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Product Details_Edit Modal_4-->
<div class="modal fade" id="productDetailsEditModal4" tabindex="-1" role="dialog" aria-labelledby="productDetailsEditModal4Title" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content bg-white">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 15">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/product_details_edit_modal_4.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Product details_Variation registration 1-->
<div class="modal fade" id="productDetailsVariationRegistrationModal1" tabindex="-1" role="dialog" aria-labelledby="productDetailsVariationRegistrationModal1Title" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-full" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 8">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/product_details_variation_registration_modal_1.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Product details_Variation registration 2 or more-->
<div class="modal fade" id="productDetailsVariationRegistrationModal2" tabindex="-1" role="dialog" aria-labelledby="productDetailsVariationRegistrationModal2Title" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-full" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 9">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/product_details_variation_registration_modal_2.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Product details_Variation registration None-->
<div class="modal fade" id="productDetailsVariationRegistrationModal3" tabindex="-1" role="dialog" aria-labelledby="productDetailsVariationRegistrationModal3Title" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-full" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 10">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/product_details_variation_registration_modal_3.php'); ?>
			</div>
		</div>
	</div>
</div>

