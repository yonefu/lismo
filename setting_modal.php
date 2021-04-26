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
								<span>Setting Modals</span>
							</h3>
						</div>
						<!--d-flex flex-wrap justify-content-between align-items-center-->
					</section>
					<!--top-block-->

					<section class="table-wrapper">
						<ul class="nav flex-column">
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#settingAccountEdit">設定_アカウント_編集 – 1</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#settingPaymentPlanChange">設定_お支払いプラン_プラン変更 (Design not completed)</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#settingSupplierEdit">設定_サプライヤー_編集</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#settingSupplierAdd">設定_サプライヤー_追加</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#settingStoreAccountLinkageAmazonEdit">設定_ストアアカウント連携_amazon編集</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#settingStoreAccountLinkageShopifyEdit">設定_ストアアカウント連携_Shopify編集</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#settingTeamMemberEdit">設定_チームメンバー_編集</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#settingPendingStatusEdit">設定_保留ステータス_編集</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#settingPendingStatusAdd">設定_保留ステータス_追加</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#settingDeliveryWarehouseEdit">設定_配送倉庫_編集</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#settingDeliveryWarehouseEditInventoryTagEdit">設定_配送倉庫_編集_在庫タグ編集</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#settingDeliveryWarehouseEditInventoryTagAdd">設定_配送倉庫_編集_在庫タグ追加</a></li>
							<li class="nav-item py-1"><a class="btn btn-dark" href="javascript:void();" data-toggle="modal" data-target="#settingDeliveryWarehouseEditShipping">設定_配送倉庫_編集_送料設定</a></li>
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


<!-- Modal settingAccountEdit-->
<div class="modal fade" id="settingAccountEdit" tabindex="-1" role="dialog" aria-labelledby="settingAccountEditTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 5">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/setting_account_edit.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal settingPaymentPlanChange-->
<div class="modal fade" id="settingPaymentPlanChange" tabindex="-1" role="dialog" aria-labelledby="settingPaymentPlanChangeTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content bg-white">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 6">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/setting_payment_plan_change.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal settingSupplierEdit-->
<div class="modal fade" id="settingSupplierEdit" tabindex="-1" role="dialog" aria-labelledby="settingSupplierEditTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 6">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/setting_supplier_edit.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal settingSupplierAdd-->
<div class="modal fade" id="settingSupplierAdd" tabindex="-1" role="dialog" aria-labelledby="settingSupplierAddTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 6">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/setting_supplier_add.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal settingStoreAccountLinkageAmazonEdit-->
<div class="modal fade" id="settingStoreAccountLinkageAmazonEdit" tabindex="-1" role="dialog" aria-labelledby="settingStoreAccountLinkageAmazonEditTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 7">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/setting_store_account_linkage_amazon_edit.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal settingStoreAccountLinkageShopifyEdit-->
<div class="modal fade" id="settingStoreAccountLinkageShopifyEdit" tabindex="-1" role="dialog" aria-labelledby="settingStoreAccountLinkageShopifyEditTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 7">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/setting_store_account_linkage_shopify_edit.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal settingTeamMemberEdit-->
<div class="modal fade" id="settingTeamMemberEdit" tabindex="-1" role="dialog" aria-labelledby="settingTeamMemberEditTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 7">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/setting_team_member_edit.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal settingPendingStatusEdit-->
<div class="modal fade" id="settingPendingStatusEdit" tabindex="-1" role="dialog" aria-labelledby="settingPendingStatusEditTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 8">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/setting_pending_status_edit.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal settingPendingStatusAdd-->
<div class="modal fade" id="settingPendingStatusAdd" tabindex="-1" role="dialog" aria-labelledby="settingPendingStatusAddTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 9">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/setting_pending_status_add.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal settingDeliveryWarehouseEdit-->
<div class="modal fade" id="settingDeliveryWarehouseEdit" tabindex="-1" role="dialog" aria-labelledby="settingDeliveryWarehouseEditTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 10">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/setting_delivery_warehouse_edit.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal settingDeliveryWarehouseEditInventoryTagEdit-->
<div class="modal fade" id="settingDeliveryWarehouseEditInventoryTagEdit" tabindex="-1" role="dialog" aria-labelledby="settingDeliveryWarehouseEditInventoryTagEditTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 10">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/setting_delivery_warehouse_edit_inventory_tag_edit.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal settingDeliveryWarehouseEditInventoryTagAdd-->
<div class="modal fade" id="settingDeliveryWarehouseEditInventoryTagAdd" tabindex="-1" role="dialog" aria-labelledby="settingDeliveryWarehouseEditInventoryTagAddTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 10">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/setting_delivery_warehouse_edit_inventory_tag_add.php'); ?>
			</div>
		</div>
	</div>
</div>

<!-- Modal settingDeliveryWarehouseEditShipping-->
<div class="modal fade" id="settingDeliveryWarehouseEditShipping" tabindex="-1" role="dialog" aria-labelledby="settingDeliveryWarehouseEditShippingTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-full" role="document">
		<div class="modal-content">
			<button type="button" class="close position-absolute p-2" data-dismiss="modal" aria-label="Close" style="z-index: 10">
				<span aria-hidden="true"><img src="dist/img/icons/icon-modal-close.png" alt="" /></span>
			</button>
			<div class="modal-body py-4 px-1">
				<?php include('inc/setting_delivery_warehouse_edit_shipping.php'); ?>
			</div>
		</div>
	</div>
</div>

