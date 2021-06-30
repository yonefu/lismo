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
									<div class="form-heading mb-2 f-28">サプライヤー</div>
									<div><a href="#" class="btn btn-dark mb-2 px-4"><span>サプライヤーを追加する</span></a></div>
								</div>
								<!--div-->
							</div>
							<!--top-block-->
							<div class="bg-white br-25">
								<div class="table-wrapper">
									<div class="card">
										<div class="card-body">
											<div class="table-responsive-lg">
												<table class="table supplier-table">
													<thead>
														<tr>
															<th class="column-1 text-left">サプライヤー名</th>
															<th class="column-2 text-left">通貨</th>
															<th class="column-3">アクション</th>
														</tr>
													</thead>
													<!--thead-->
													<tbody>
														<tr>
															<td class="text-left">
																<span>amazon.co.jp</span>
															</td>
															<td class="text-left">
																<span>JPY</span>
															</td>
															<td class="text-center">
																<a href="#" class="btn btn-outline-dark br-25"><span>編集する</span></a>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td class="text-left">
																<span>サプライヤーABC</span>
															</td>
															<td class="text-left">
																<span>CNY</span>
															</td>
															<td class="text-center">
																<a href="#" class="btn btn-outline-dark br-25"><span>編集する</span></a>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td class="text-left">
																<span>サプライヤーABC</span>
															</td>
															<td class="text-left">
																<span>CNY</span>
															</td>
															<td class="text-center">
																<a href="#" class="btn btn-outline-dark br-25"><span>編集する</span></a>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td class="text-left">
																<span>サプライヤーABC</span>
															</td>
															<td class="text-left">
																<span>JPY</span>
															</td>
															<td class="text-center">
																<a href="#" class="btn btn-outline-dark br-25"><span>編集する</span></a>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td class="text-left">
																<span>サプライヤーABC</span>
															</td>
															<td class="text-left">
																<span>JPY</span>
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

