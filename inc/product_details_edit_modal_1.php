<div class="inner-page-wrap">
	<div class="product-details--modal-page w-100">
		<div class="d-flex justify-content-between align-items-center mb-3">
			<h3 class="page-title mb-1 f-15">
				<span>画像を編集</span>
			</h3>
		</div>
		<!--div-->

		<div class="product-image">
			<div class="text-center mb-4"><img src="dist/img/mob-b-1.png" alt="" /></div>
		</div>

		<form class="mb-4">
			<div class="form-group row">
				<label for="staticEmail" class="col-lg-4 col-form-label text-right pr-0">ファイルを選択</label>
				<div class="col-lg-8">
					<div class="custom-file">
						<input type="file" class="custom-file-input form-control" id="customFile">
						<label class="custom-file-label form-control" for="customFile"></label>
					</div>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword" class="col-lg-4 col-form-label text-right pr-0">画像URLから</label>
				<div class="col-lg-8">
					<input type="text"  class="form-control" placeholder="erothree.sub.jp/php/mbckana">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword" class="col-lg-4 col-form-label text-right pr-0"></label>
				<div class="col-lg-8">
					<div class="form-group inputDnD">
						<input type="file" class="form-control-file" id="inputFile" onchange="readUrl(this)" data-title="ここに画像をドラッグ">
					</div>
				</div>
			</div>
			</div>
		</form>

		<div class="d-flex justify-content-end">
			<a href="#" class="btn btn-red mr-1"><span>キャンセル</span></a>
			<a href="#" class="btn btn-dark"><span>保存する</span></a>
		</div>

	</div>
	<!--order-hold-modal-page w-100-->
</div>
<!--inner-page-wrap-->

