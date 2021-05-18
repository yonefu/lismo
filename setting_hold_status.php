<?php include('inc/header.php'); ?>

<div class="outer-page-wrap">
	<div class="container-fluid">
		<div class="d-flex">

			<?php include('inc/side_menu.php'); ?>

			<div class="inner-page-wrap">
				<div class="setting-page w-100">
					<div class="setting-inner-wrap d-flex">
						<?php include('inc/side_setting_menu.php'); ?>
						<div class="setting-wrap w-100">
							<div class="top-block">
								<div class="d-flex flex-wrap justify-content-between align-items-center">
									<div class="form-heading mb-2 f-28">保留ステータス</div>
									<div><a href="#" class="btn btn-dark mb-2"><span>サプライヤーを追加する</span></a></div>
								</div>
								<!--div-->
							</div>
							<!--top-block-->
							<div class="bg-white br-25">
								<div class="table-wrapper">
									<div class="card">
										<div class="card-body">
											<div class="table-responsive-lg">
												<table class="table hold-status-table">
													<thead>
														<tr>
															<th class="column-1 text-left">ステータス</th>
															<th class="column-2">アクション</th>
														</tr>
													</thead>
													<!--thead-->
													<tbody>
														<tr>
															<td class="text-left">
																<span>保留中</span>
															</td>
															<td class="text-center">
																<a href="#" class="btn btn-outline-dark br-25"><span>編集する</span></a>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td class="text-left">
																<span>⽀払い待ち</span>
															</td>
															<td class="text-center">
																<a href="#" class="btn btn-outline-dark br-25"><span>編集する</span></a>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td class="text-left">
																<span>住所確認中</span>
															</td>
															<td class="text-center">
																<a href="#" class="btn btn-outline-dark br-25"><span>編集する</span></a>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td class="text-left">
																<span>購⼊者へ確認中</span>
															</td>
															<td class="text-center">
																<a href="#" class="btn btn-outline-dark br-25"><span>編集する</span></a>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td class="text-left">
																<span>在庫到着待ち</span>
															</td>
															<td class="text-center">
																<a href="#" class="btn btn-outline-dark br-25"><span>編集する</span></a>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td class="text-left">
																<span>同梱商品⼊荷待ち</span>
															</td>
															<td class="text-center">
																<a href="#" class="btn btn-outline-dark br-25"><span>編集する</span></a>
															</td>
														</tr>
														<!--tr-->
													</tbody>
													<!--tbody-->
												</table>
												<!--table-->
											</div>
											<!--table-responsive-lg-->
										</div>
										<!--card-body-->
									</div>
									<!--card-->
								</div>
								<!--table-wrapper-->
							</div>
							<!--bg-white br-25-->
						</div>
						<!--setting-wrap-->
					</div>
					<!--setting-inner-wrap d-flex-->
				</div>
				<!--setting-page w-100-->
			</div>
			<!--"inner-page-wrap-->
		</div>
	</div>
	<!--container-fluid-->
</div>
<!--outer-page-wrap-->
<?php include('inc/footer.php'); ?>

