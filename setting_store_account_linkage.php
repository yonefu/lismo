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
									<div class="form-heading mb-2 f-28">ストアアカウント連携</div>
									<div class="d-flex align-items-center">
										<div class="mb-2 mr-4">
											<span class="badge storage text-white py-1 px-2 mr-2 text-dark">PROプラン</span>
											<span class="f-12">連携上限数：残り4件</span>
										</div>
										<a href="#" class="btn btn-dark mb-2 px-4"><span>ストアを追加する</span></a>
									</div>
								</div>
								<!--div-->
							</div>
							<!--top-block-->
							<div class="bg-white br-25">
								<div class="table-wrapper">
									<div class="card">
										<div class="card-body">
											<div class="table-responsive-lg">
												<table class="table store-account-table">
													<thead>
														<tr>
															<th class="column-1">ﾌﾟﾗｯﾄﾌｫｰﾑ</th>
															<th class="column-2">ストア名</th>
															<th class="column-3 text-left pl-4">有効期限</th>
															<th class="column-4">商品同期</th>
															<th class="column-5">注⽂取込</th>
															<th class="column-6">在庫同期</th>
															<th class="column-7">出荷通知</th>
															<th class="column-8">アクション</th>
														</tr>
													</thead>
													<!--thead-->
													<tbody>
														<tr>
															<td class="text-center">
																<img src="dist/img/icons/icon-shopify.png" alt="shopify" />
															</td>
															<td class="text-center">
																<span>ショップ名ABC</span>
															</td>
															<td class="text-left pl-4">
																<p class="mb-0">2019/11/30</p>
																<p class="mb-0">15:00</p>
															</td>
															<td class="text-center">
																<div class="d-flex">
																	<div class="mr-2">
																		<div class="checkbox switcher">
																			<label for="switchIcon1">
																				<input type="checkbox" id="switchIcon1" value="" checked>
																				<span><small></small></span>
																			</label>
																	    </div>
																	</div>
																</div>
															</td>
															<td class="text-center">
																<div class="d-flex">
																	<div class="mr-2">
																		<div class="checkbox switcher">
																			<label for="switchIcon1">
																				<input type="checkbox" id="switchIcon1" value="" checked>
																				<span><small></small></span>
																			</label>
																	    </div>
																	</div>
																</div>
															</td>
															<td class="text-center">
																<div class="d-flex">
																	<div class="mr-2">
																		<div class="checkbox switcher">
																			<label for="switchIcon2">
																				<input type="checkbox" id="switchIcon2" value="" checked>
																				<span><small></small></span>
																			</label>
																	    </div>
																	</div>
																</div>
															</td>
															<td class="text-center">
																<div class="d-flex">
																	<div class="mr-2">
																		<div class="checkbox switcher">
																			<label for="switchIcon3">
																				<input type="checkbox" id="switchIcon3" value="" checked>
																				<span><small></small></span>
																			</label>
																	    </div>
																	</div>
																</div>
															</td>
															<td class="text-center">
																<a href="#" class="btn btn-outline-dark br-25"><span>編集する</span></a>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td class="text-center">
																<img src="dist/img/icons/icon-shopify.png" alt="shopify" />
															</td>
															<td class="text-center">
																<span>ショップ名EFG</span>
															</td>
															<td class="text-left pl-4">
																<p class="mb-0 clr-red">2019/11/30</p>
																<p class="mb-0 clr-red">15:00</p>
															</td>
															<td class="text-center">
																<div class="d-flex">
																	<div class="mr-2">
																		<div class="checkbox switcher">
																			<label for="switchIcon4">
																				<input type="checkbox" id="switchIcon4" value="" checked>
																				<span><small></small></span>
																			</label>
																	    </div>
																	</div>
																</div>
															</td>
															<td class="text-center">
																<div class="d-flex">
																	<div class="mr-2">
																		<div class="checkbox switcher">
																			<label for="switchIcon5">
																				<input type="checkbox" id="switchIcon5" value="">
																				<span><small></small></span>
																			</label>
																	    </div>
																	</div>
																</div>
															</td>
															<td class="text-center">
																<div class="d-flex">
																	<div class="mr-2">
																		<div class="checkbox switcher">
																			<label for="switchIcon6">
																				<input type="checkbox" id="switchIcon6" value="">
																				<span><small></small></span>
																			</label>
																	    </div>
																	</div>
																</div>
															</td>
															<td class="text-center">
																<div class="d-flex">
																	<div class="mr-2">
																		<div class="checkbox switcher">
																			<label for="switchIcon7">
																				<input type="checkbox" id="switchIcon7" value="">
																				<span><small></small></span>
																			</label>
																	    </div>
																	</div>
																</div>
															</td>
															<td class="text-center">
																<a href="#" class="btn btn-outline-dark br-25"><span>編集する</span></a>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td class="text-center">
																<img src="dist/img/icons/icon-shopify.png" alt="shopify" />
															</td>
															<td class="text-center">
																<span>ショップ名HJK</span>
															</td>
															<td class="text-center">
																<span>なし</span>
															</td>
															<td class="text-center">
																<div class="d-flex">
																	<div class="mr-2">
																		<div class="checkbox switcher">
																			<label for="switchIcon9">
																				<input type="checkbox" id="switchIcon9" value="">
																				<span><small></small></span>
																			</label>
																	    </div>
																	</div>
																</div>
															</td>
															<td class="text-center">
																<div class="d-flex">
																	<div class="mr-2">
																		<div class="checkbox switcher">
																			<label for="switchIcon10">
																				<input type="checkbox" id="switchIcon10" value="">
																				<span><small></small></span>
																			</label>
																	    </div>
																	</div>
																</div>
															</td>
															<td class="text-center">
																<div class="d-flex">
																	<div class="mr-2">
																		<div class="checkbox switcher">
																			<label for="switchIcon11">
																				<input type="checkbox" id="switchIcon11" value="">
																				<span><small></small></span>
																			</label>
																	    </div>
																	</div>
																</div>
															</td>
															<td class="text-center">
																<div class="d-flex">
																	<div class="mr-2">
																		<div class="checkbox switcher">
																			<label for="switchIcon12">
																				<input type="checkbox" id="switchIcon12" value="">
																				<span><small></small></span>
																			</label>
																	    </div>
																	</div>
																</div>
															</td>
															<td class="text-center">
																<a href="#" class="btn btn-outline-dark br-25"><span>編集する</span></a>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td class="text-center">
																<img src="dist/img/icons/icon-amazon.png" alt="shopify" />
															</td>
															<td class="text-center">
																<span>ショップ名ABC</span>
															</td>
															<td class="text-center">
																<span>なし</span>
															</td>
															<td class="text-center">
																<div class="d-flex">
																	<div class="mr-2">
																		<div class="checkbox switcher">
																			<label for="switchIcon13">
																				<input type="checkbox" id="switchIcon13" value="">
																				<span><small></small></span>
																			</label>
																	    </div>
																	</div>
																</div>
															</td>
															<td class="text-center">
																<div class="d-flex">
																	<div class="mr-2">
																		<div class="checkbox switcher">
																			<label for="switchIcon14">
																				<input type="checkbox" id="switchIcon14" value="">
																				<span><small></small></span>
																			</label>
																	    </div>
																	</div>
																</div>
															</td>
															<td class="text-center">
																<div class="d-flex">
																	<div class="mr-2">
																		<div class="checkbox switcher">
																			<label for="switchIcon15">
																				<input type="checkbox" id="switchIcon15" value="">
																				<span><small></small></span>
																			</label>
																	    </div>
																	</div>
																</div>
															</td>
															<td class="text-center">
																<div class="d-flex">
																	<div class="mr-2">
																		<div class="checkbox switcher">
																			<label for="switchIcon16">
																				<input type="checkbox" id="switchIcon16" value="">
																				<span><small></small></span>
																			</label>
																	    </div>
																	</div>
																</div>
															</td>
															<td class="text-center">
																<a href="#" class="btn btn-outline-dark br-25"><span>編集する</span></a>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td class="text-center">
																<img src="dist/img/icons/icon-amazon.png" alt="shopify" />
															</td>
															<td class="text-center">
																<span>ショップ名EFG</span>
															</td>
															<td class="text-center">
																<span>なし</span>
															</td>
															<td class="text-center">
																<div class="d-flex">
																	<div class="mr-2">
																		<div class="checkbox switcher">
																			<label for="switchIcon16">
																				<input type="checkbox" id="switchIcon16" value="">
																				<span><small></small></span>
																			</label>
																	    </div>
																	</div>
																</div>
															</td>
															<td class="text-center">
																<div class="d-flex">
																	<div class="mr-2">
																		<div class="checkbox switcher">
																			<label for="switchIcon17">
																				<input type="checkbox" id="switchIcon17" value="" checked>
																				<span><small></small></span>
																			</label>
																	    </div>
																	</div>
																</div>
															</td>
															<td class="text-center">
																<div class="d-flex">
																	<div class="mr-2">
																		<div class="checkbox switcher">
																			<label for="switchIcon18">
																				<input type="checkbox" id="switchIcon18" value="">
																				<span><small></small></span>
																			</label>
																	    </div>
																	</div>
																</div>
															</td>
															<td class="text-center">
																<div class="d-flex">
																	<div class="mr-2">
																		<div class="checkbox switcher">
																			<label for="switchIcon19">
																				<input type="checkbox" id="switchIcon19" value="" checked>
																				<span><small></small></span>
																			</label>
																	    </div>
																	</div>
																</div>
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

