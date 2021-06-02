<?php include('inc/header.php'); ?>

<div class="outer-page-wrap">
	<div class="container-fluid">
		<div class="d-flex">

			<?php include('inc/side_menu.php'); ?>

			<div class="inner-page-wrap">
				<div class="report-page report-dashboard w-100">
					<div class="top-block">
						<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
							<h3 class="page-title mb-1">
								<span>レポート</span>
							</h3>
						</div>
						<!--div-->

						<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
							<ul class="nav top-nav status-box">
								<li class="nav-item">
									<a class="nav-link active" href="report_dashboard.php">ダッシュボード</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="report_sales.php">売上レポート</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="report_product.php">商品レポート</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="report_inventory.php">在庫レポート</a>
								</li>
							</ul>
							<!--ul nav-->
							<div class="right-dropdown d-flex ml-auto">
								<div class="mb-2">
									<a class="nav-link btn btn-sm dropdown-toggle bg-white br-25 mr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										全てのショップ
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">横浜本社倉庫へ</a>
										<a class="dropdown-item" href="#">AmazonFAB</a>
									</div>
								</div>
							</div>
							<!--right-dropdown d-flex-->
						</div>
						<!--d-flex flex-wrap justify-content-between align-items-center-->
					</div>
					<!--top-block-->

					<section class="mb-4 px-2">
						<p class="report-date f-18 mb-2">本⽇12⽉3 ⽇の速報</p>
						<div class="row">
							<div class="col-sm-6 col-lg-3 px-1 mb-2">
								<div class="data-box bg-white br-25 p-3 d-flex flex-column justify-content-between h-100">
									<div class="data-top d-flex align-items-start justify-content-between mb-3">
										<div class="date f-15"><span>12/30⽇の売上合計</span></div>
										<div class="see-detail-box text-right">
											<small class="text-muted f-12">詳細を⾒る</small>
											<p class="mb-1"><span class="btn btn-sm btn-navy">A.受注した商品</span></p>
										</div>
									</div>
									<!--div-->
									<div class="data-middle d-flex flex-column align-items-center justify-content-around mb-3">
										<p class="f-20 mb-1"><span>¥421,972</span></p>
										<p class="clr-green f-12 mb-1"><span>+3.2%</span></p>
									</div>
									<!--div-->
									<div class="data-bottom d-flex align-items-center flex-column justify-content-between">
										<div class="emo">
											<img class="img-fluid" src="dist/img/emo-lovely.png" alt="とても好調" />
										</div>
									</div>
									<!--div-->
								</div>
								<!--data-box-->
							</div>
							<!--col-md-6 col-lg-3-->

							<div class="col-sm-6 col-lg-3 px-1 mb-2">
								<div class="data-box bg-white br-25 p-3 d-flex flex-column justify-content-between h-100">
									<div class="data-top d-flex align-items-start justify-content-between mb-3">
										<div class="date f-15"><span>12⽉30⽇の注⽂数</span></div>
										<div class="see-detail-box text-right">
											<small class="text-muted f-12">詳細を⾒る</small>
											<p class="mb-1"><span class="btn btn-sm btn-navy">A.受注した商品</span></p>
										</div>
									</div>
									<!--div-->
									<div class="data-middle d-flex flex-column align-items-center justify-content-around mb-3">
										<p class="f-20 mb-1"><span>92件</span></p>
										<p class="clr-green f-12 mb-1"><span>+3.2%</span></p>
									</div>
									<!--div-->
									<div class="data-bottom d-flex align-items-center flex-column justify-content-between">
										<div class="emo">
											<img class="img-fluid" src="dist/img/emo-no-problem.png" alt="まあ問題なし" />
										</div>
									</div>
									<!--div-->
								</div>
								<!--data-box-->
							</div>
							<!--col-md-6 col-lg-3-->

							<div class="col-sm-6 col-lg-3 px-1 mb-2">
								<div class="data-box bg-white br-25 p-3 d-flex flex-column justify-content-between h-100">
									<div class="data-top d-flex align-items-start justify-content-between mb-3">
										<div class="date f-15"><span>12⽉30⽇の平均注⽂単価</span></div>
										<div class="see-detail-box text-right">
											<small class="text-muted f-12">詳細を⾒る</small>
											<p class="mb-1"><span class="btn btn-sm btn-navy">A.受注した商品</span></p>
										</div>
									</div>
									<!--div-->
									<div class="data-middle d-flex flex-column align-items-center justify-content-around mb-3">
										<p class="f-20 mb-1"><span>¥1,219</span></p>
										<p class="clr-red f-12 mb-1"><span>-15.2%</span></p>
									</div>
									<!--div-->
									<div class="data-bottom d-flex align-items-center flex-column justify-content-between">
										<div class="emo graph">
											<img class="img-fluid" src="dist/img/emo-sad.png" alt="ちょっとマズい" />
										</div>
									</div>
									<!--div-->
								</div>
								<!--data-box-->
							</div>
							<!--col-md-6 col-lg-3-->

							<div class="col-sm-6 col-lg-3 px-1 mb-2">
								<div class="data-box bg-white br-25 p-3 d-flex flex-column justify-content-between h-100">
									<div class="data-top d-flex align-items-start justify-content-between mb-3">
										<div class="date f-15"><span>12⽉30⽇のストア割合</span></div>
										<div class="see-detail-box text-right">
											<small class="text-muted f-12">詳細を⾒る</small>
											<p class="mb-1"><span class="btn btn-sm btn-navy">A.受注した商品</span></p>
										</div>
									</div>
									<!--div-->
									<div class="data-middle d-flex align-items-center justify-content-around mb-3">
										<div>
											<p class="f-20 mb-1"><span>79.0%</span></p>
											<p class="f-12 mb-1"><span>Amazon</span></p>
										</div>
										<div>
											<p class="f-20 mb-1"><span>21.0%</span></p>
											<p class="f-12 mb-1"><span>Shopify</span></p>
										</div>
									</div>
									<!--div-->

									<div class="d-flex flex-column align-items-center justify-content-center h-25">
										<div class="progressbar-data d-flex mx-auto w-75">
											<div class="progress-data px-2 text-center" style="width: 79%">
												<p class="mb-1 f-20 fontEN">
													<img src="dist/img/icons/icon-sm-shopify.jpg" alt="" />
												</p>
											</div>
											<!--progress-data-->
											<div class="progress-data px-2 text-center">
												<p class="mb-1 f-20 fontEN">
													<img src="dist/img/icons/icon-sm-amazon.jpg" alt="" />
												</p>
											</div>
											<!--progress-data-->
										</div>
										<!--progressbar-data-->
										<div class="progress w-75 mb-3">
											<div class="progress-bar bg-pink" role="progressbar" style="width: 79%" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100"></div>
											<div class="progress-bar bg-yellow" role="progressbar" style="width: 21%" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100">	</div>
										</div>
										<!--progress-->
									</div>
									<!--div-->
								</div>
								<!--data-box-->
							</div>
							<!--col-md-6 col-lg-3-->
						</div>
						<!--row-->
					</section>
					<!--section-->

					<section class="mb-4 px-2">
						<p class="report-date f-18 mb-2">今⽉112⽉の速報</p>
						<div class="row">
							<div class="col-lg-4 px-1 mb-2">
								<div class="data-box bg-white br-25 p-3 d-flex flex-column justify-content-between h-100">
									<div class="data-top d-flex align-items-start justify-content-between mb-3">
										<div class="date f-15"><span>12⽉の売上合計</span></div>
										<div class="see-detail-box text-right">
											<small class="text-muted f-12">詳細を⾒る</small>
											<p class="mb-1"><span class="btn btn-sm btn-navy">G.売上の推移詳細</span></p>
										</div>
									</div>
									<!--div-->
									<div class="data-middle d-flex flex-column align-items-center justify-content-around mb-3">
										<p class="f-20 mb-1"><span>¥9,121,972</span></p>
										<p class="clr-green f-12 mb-1"><span>+3.2%</span></p>
									</div>
									<!--div-->
									<div class="data-bottom d-flex align-items-center flex-column justify-content-between">
										<div class="chartWrapper">
											<canvas id="lineChart001" width="360"></canvas>
										</div>
									</div>
									<!--div-->
								</div>
								<!--data-box-->
							</div>
							<!--col-md-6 col-lg-3-->

							<div class="col-lg-4 px-1 mb-2">
								<div class="data-box bg-white br-25 p-3 d-flex flex-column justify-content-between h-100">
									<div class="data-top d-flex align-items-start justify-content-between mb-3">
										<div class="date f-15"><span>12⽉の注⽂数合計</span></div>
										<div class="see-detail-box text-right">
											<small class="text-muted f-12">詳細を⾒る</small>
											<p class="mb-1"><span class="btn btn-sm btn-navy">G.売上の推移詳細</span></p>
										</div>
									</div>
									<!--div-->
									<div class="data-middle d-flex flex-column align-items-center justify-content-around mb-3">
										<p class="f-20 mb-1"><span>374件</span></p>
										<p class="clr-red f-12 mb-1"><span>-3.2%</span></p>
									</div>
									<!--div-->
									<div class="data-bottom d-flex align-items-center flex-column justify-content-between">
										<div class="chartWrapper">
											<canvas id="barChart001" width="360"></canvas>
										</div>
									</div>
									<!--div-->
								</div>
								<!--data-box-->
							</div>
							<!--col-md-6 col-lg-3-->

							<div class="col-lg-4 px-1 mb-2">
								<div class="data-box bg-white br-25 p-3 d-flex flex-column justify-content-between h-100">
									<div class="data-top d-flex align-items-start justify-content-between mb-3">
										<div class="date f-15"><span>12⽉の売上着地予想</span></div>
										<div class="see-detail-box text-right">
											<!-- <small class="text-muted f-12">詳細を⾒る</small>
											<p class="mb-1"><span class="btn btn-sm btn-navy">G.売上の推移詳細</span></p> -->
										</div>
									</div>
									<!--div-->
									<div class="data-middle d-flex flex-column align-items-center justify-content-between mb-3">
										<div class="d-flex align-items-center mb-4">
											<p class="mr-4 mb-0">12⽉予想</p>
											<div class="text-center">
												<p class="f-20 mb-1"><span>¥9,121,900</span></p>
												<p class="clr-red f-12 mb-1"><span>-12.2%</span></p>
											</div>
										</div>
										<div class="d-flex align-items-center">
											<p class="mr-4 mb-0">11⽉確定</p>
											<div class="text-center">
												<p class="f-20 mb-1"><span>¥29,121,972</span></p>
												<!-- <p class="clr-red f-12 mb-1"><span>-12.2%</span></p> -->
											</div>
										</div>
									</div>
									<!--div-->
									<div class="data-bottom d-flex align-items-center flex-column justify-content-between">
										<!-- <div class="emo graph">
											<img class="img-fluid" src="dist/img/emo-no-problem.png" alt="とても好調" />
										</div> -->
									</div>
									<!--div-->
								</div>
								<!--data-box-->
							</div>
							<!--col-md-6 col-lg-3-->
						</div>
						<!--row-->
					</section>
					<!--section-->

					<section class="mb-4">
						<!-- <p class="report-date f-18 mb-2">今⽉112⽉の速報</p> -->
						<div class="sales-ranking bg-white br-25 p-3">
							<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
								<div class="f-15">12⽉の売上上昇ランキング</div>
								<div><span class="btn btn-sm btn-navy mr-2">D.販売した商品</span><small class="text-muted f-12">詳細を⾒る</small></div>
							</div>
							<div class="sales-ranking-slider">
								<div>
									<div class="data-box bg-white br-25 p-3 d-flex flex-column justify-content-between h-100">
										<div class="data-top d-flex mb-3">
											<div class="ranking-col mr-2">
												<span class="rank-no f-20">
													<i class="mr-2 fontEN">1</i>
													<img src="dist/img/icons/icon-diagonal-arrow.png" alt="" />
												</span>
												<span class="rank-percentage clr-blue f-15 fontEN">+6.8%</span>
											</div>
											<div class="img-col mx-auto">
												<img src="dist/img/1.jpg" alt="" />
											</div>
										</div>
										<!--data-top-->
										<div class="data-bottom d-flex justify-content-between">
											<div class="info-1 f-12 mr-3">そらのおとしものf ねんどろいど  ニ ンフ (ノンスケールモデル)そ…</div>
											<div class="info-2 text-center f-12">
												<p class="mb-0"><span class="badge first-hand py-1 px-3">直接</span></p>
												<p class="mb-0">ブラック</p>
												<p class="mb-0">Mサイズ</p>
											</div>
										</div>
										<!--data-bottom-->
									</div>
									<!--data-box-->
								</div>
								<!--div-->

								<div>
									<div class="data-box bg-white br-25 p-3 d-flex flex-column justify-content-between h-100">
										<div class="data-top d-flex mb-3">
											<div class="ranking-col mr-2">
												<span class="rank-no f-20">
													<i class="mr-2 fontEN">2</i>
													<img src="dist/img/icons/icon-diagonal-arrow.png" alt="" />
												</span>
												<span class="rank-percentage clr-blue f-15 fontEN">+5.8%</span>
											</div>
											<div class="img-col mx-auto">
												<img src="dist/img/2.jpg" alt="" />
											</div>
										</div>
										<!--data-top-->
										<div class="data-bottom d-flex justify-content-between">
											<div class="info-1 f-12 mr-3">そらのおとしものf ねんどろいど  ニ ンフ (ノンスケールモデル)そ…</div>
											<div class="info-2 text-center f-12">
												<p class="mb-0"><span class="badge first-hand py-1 px-3">直接</span></p>
												<p class="mb-0">ブラック</p>
												<p class="mb-0">Mサイズ</p>
											</div>
										</div>
										<!--data-bottom-->
									</div>
									<!--data-box-->
								</div>
								<!--div-->

								<div>
									<div class="data-box bg-white br-25 p-3 d-flex flex-column justify-content-between h-100">
										<div class="data-top d-flex mb-3">
											<div class="ranking-col mr-2">
												<span class="rank-no f-20">
													<i class="mr-2 fontEN">3</i>
													<img src="dist/img/icons/icon-diagonal-arrow.png" alt="" />
												</span>
												<span class="rank-percentage clr-blue f-15 fontEN">+4.8%</span>
											</div>
											<div class="img-col mx-auto">
												<img src="dist/img/3.jpg" alt="" />
											</div>
										</div>
										<!--data-top-->
										<div class="data-bottom d-flex justify-content-between">
											<div class="info-1 f-12 mr-3">そらのおとしものf ねんどろいど  ニ ンフ (ノンスケールモデル)そ…</div>
											<div class="info-2 text-center f-12">
												<p class="mb-0"><span class="badge first-hand py-1 px-3">直接</span></p>
												<p class="mb-0">ブラック</p>
												<p class="mb-0">Mサイズ</p>
											</div>
										</div>
										<!--data-bottom-->
									</div>
									<!--data-box-->
								</div>
								<!--div-->

								<div>
									<div class="data-box bg-white br-25 p-3 d-flex flex-column justify-content-between h-100">
										<div class="data-top d-flex mb-3">
											<div class="ranking-col mr-2">
												<span class="rank-no f-20">
													<i class="mr-2 fontEN">4</i>
													<img src="dist/img/icons/icon-diagonal-arrow.png" alt="" />
												</span>
												<span class="rank-percentage clr-blue f-15 fontEN">+5.8%</span>
											</div>
											<div class="img-col mx-auto">
												<img src="dist/img/4.jpg" alt="" />
											</div>
										</div>
										<!--data-top-->
										<div class="data-bottom d-flex justify-content-between">
											<div class="info-1 f-12 mr-3">そらのおとしものf ねんどろいど  ニ ンフ (ノンスケールモデル)そ…</div>
											<div class="info-2 text-center f-12">
												<p class="mb-0"><span class="badge first-hand py-1 px-3">直接</span></p>
												<p class="mb-0">ブラック</p>
												<p class="mb-0">Mサイズ</p>
											</div>
										</div>
										<!--data-bottom-->
									</div>
									<!--data-box-->
								</div>
								<!--div-->

								<div>
									<div class="data-box bg-white br-25 p-3 d-flex flex-column justify-content-between h-100">
										<div class="data-top d-flex mb-3">
											<div class="ranking-col mr-2">
												<span class="rank-no f-20">
													<i class="mr-2 fontEN">5</i>
													<img src="dist/img/icons/icon-diagonal-arrow.png" alt="" />
												</span>
												<span class="rank-percentage clr-blue f-15 fontEN">+3.8%</span>
											</div>
											<div class="img-col mx-auto">
												<img src="dist/img/5.jpg" alt="" />
											</div>
										</div>
										<!--data-top-->
										<div class="data-bottom d-flex justify-content-between">
											<div class="info-1 f-12 mr-3">そらのおとしものf ねんどろいど  ニ ンフ (ノンスケールモデル)そ…</div>
											<div class="info-2 text-center f-12">
												<p class="mb-0"><span class="badge first-hand py-1 px-3">直接</span></p>
												<p class="mb-0">ブラック</p>
												<p class="mb-0">Mサイズ</p>
											</div>
										</div>
										<!--data-bottom-->
									</div>
									<!--data-box-->
								</div>
								<!--div-->
							</div>
						</div>
					</section>
					<!--section-->

					<section class="mb-4">
						<!-- <p class="report-date f-18 mb-2">現在の在庫状況</p> -->
						<div class="product-analysis bg-white br-25 p-3">
							<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
								<div class="f-15">12⽉の商品ABC分析</div>
								<div><span class="btn btn-sm btn-navy mr-2">B.在庫を管理</span><small class="text-muted f-12">詳細を⾒る</small></div>
							</div>
							<!--div-->
							<div class="row">
								<div class="col-lg-6 mb-2">
									<div class="data-table-group">
										<div class="table-responsive-lg">
											<table class="table table-4-column">
												<thead>
													<tr class="blank-tr">
														<th class="column-1"></th>
														<th class="column-2"></th>
														<th class="column-3"></th>
														<th class="column-4"></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div class="label-status mr-2">
																	<span class="icon-circle bg-red"></span>
																</div>
																<div class="info-status">
																	<p class="mb-1 f-12">Aクラス</p>
																	<p class="mb-1 f-12 text-muted">収益の80%を占めている商品群</p>
																</div>
															</div>
														</td>
														<td class="text-right">
															<span class="f-12">¥372,340</span>
														</td>
														<td class="text-right">
															<span class="f-12">71.0%</span>
														</td>
														<td class="text-right">
															<span class="clr-blue f-12">+3.2%</span>
														</td>
													</tr>
													<!--tr-->
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div class="label-status mr-2">
																	<span class="icon-circle bg-orange"></span>
																</div>
																<div class="info-status">
																	<p class="mb-1 f-12">Bクラス</p>
																	<p class="mb-1 f-12 text-muted">収益の15%を占めている商品群</p>
																</div>
															</div>
														</td>
														<td class="text-right">
															<span class="f-12">¥72,340</span>
														</td>
														<td class="text-right">
															<span class="f-12">19.0%</span>
														</td>
														<td class="text-right">
															<span class="clr-blue f-12">+3.2%</span>
														</td>
													</tr>
													<!--tr-->
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div class="label-status mr-2">
																	<span class="icon-circle bg-yellow"></span>
																</div>
																<div class="info-status">
																	<p class="mb-1 f-12">Cクラス</p>
																	<p class="mb-1 f-12 text-muted">収益の5%を占めている商品群</p>
																</div>
															</div>
														</td>
														<td class="text-right">
															<span class="f-12">¥2,340</span>
														</td>
														<td class="text-right">
															<span class="f-12">10.0%</span>
														</td>
														<td class="text-right">
															<span class="clr-red">-3.2%</span>
														</td>
													</tr>
													<!--tr-->
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!--div-->
								<div class="col-lg-6 mb-2">
									<div class="d-flex flex-column align-items-center justify-content-center h-100">
										<div class="progress w-75 mb-3">
											<div class="progress-bar bg-pink" role="progressbar" style="width: 71%" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100"></div>
											<div class="progress-bar bg-semiOrange" role="progressbar" style="width: 19%" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100"></div>
											<div class="progress-bar bg-yellow" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">	</div>
										</div>
										<!--progress-->
										<div class="progressbar-data d-flex mx-auto justify-content-around w-75">
											<div class="progress-data px-2 text-center">
												<p class="mb-1 f-20 fontEN">71.0%</p>
												<p class="mb-1 f-12">Aクラス</p>
												<p class="mb-1 f-12 clr-green">+3.2%</p>
											</div>
											<!--progress-data-->
											<div class="progress-data px-2 text-center">
												<p class="mb-1 f-20 fontEN">19.0%</p>
												<p class="mb-1 f-12">Bクラス</p>
												<p class="mb-1 f-12 clr-green">+3.2%</p>
											</div>
											<!--progress-data-->
											<div class="progress-data px-2 text-center">
												<p class="mb-1 f-20 fontEN">10.0%</p>
												<p class="mb-1 f-12">Cクラス</p>
												<p class="mb-1 f-12 clr-green">+3.2%</p>
											</div>
											<!--progress-data-->
										</div>
										<!--progressbar-data-->
									</div>
									<!--div-->
								</div>
								<!--div-->
							</div>
							<!--row-->
						</div>
						<!--product-analysis-->
					</section>
					<!--section-->

					<section class="mb-4">
						<p class="report-date f-18 mb-2">現在の在庫状況</p>
						<div class="current-stock-status bg-white br-25 p-3">
							<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
								<div class="f-15">在庫の保管期間</div>
								<div><span class="btn btn-sm btn-navy mr-2">B.在庫を管理</span><small class="text-muted f-12">詳細を⾒る</small></div>
							</div>
							<!--div-->
							<div class="row">
								<div class="col-lg-6 mb-2">
									<div class="data-table-group">
										<div class="table-responsive-lg">
											<table class="table table-4-column">
												<thead>
													<tr class="blank-tr">
														<th class="column-1"></th>
														<th class="column-2"></th>
														<th class="column-3"></th>
														<th class="column-4"></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div class="label-status mr-2">
																	<span class="icon-circle bg-red"></span>
																</div>
																<div class="info-status">
																	<p class="mb-1 f-12">0〜90⽇間保管</p>
																</div>
															</div>
														</td>
														<td class="text-right">
															<span class="f-12">¥372,340</span>
														</td>
														<td class="text-right">
															<span class="f-12">50.0%</span>
														</td>
														<td class="text-right">
															<span class="clr-blue f-12">+3.2%</span>
														</td>
													</tr>
													<!--tr-->
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div class="label-status mr-2">
																	<span class="icon-circle bg-orange"></span>
																</div>
																<div class="info-status">
																	<p class="mb-1 f-12">91〜180⽇間保管</p>
																</div>
															</div>
														</td>
														<td class="text-right">
															<span class="f-12">¥142,340</span>
														</td>
														<td class="text-right">
															<span class="f-12">20.0%</span>
														</td>
														<td class="text-right">
															<span class="clr-blue f-12">+3.2%</span>
														</td>
													</tr>
													<!--tr-->
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div class="label-status mr-2">
																	<span class="icon-circle bg-yellow"></span>
																</div>
																<div class="info-status">
																	<p class="mb-1 f-12">181〜270⽇間保管</p>
																</div>
															</div>
														</td>
														<td class="text-right">
															<span class="f-12">¥72,340</span>
														</td>
														<td class="text-right">
															<span class="f-12">12.0%</span>
														</td>
														<td class="text-right">
															<span class="clr-red">-3.2%</span>
														</td>
													</tr>
													<!--tr-->
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div class="label-status mr-2">
																	<span class="icon-circle bg-green"></span>
																</div>
																<div class="info-status">
																	<p class="mb-1 f-12">271〜365⽇間保管</p>
																</div>
															</div>
														</td>
														<td class="text-right">
															<span class="f-12">¥2,340</span>
														</td>
														<td class="text-right">
															<span class="f-12">12.0%</span>
														</td>
														<td class="text-right">
															<span class="clr-red">-3.2%</span>
														</td>
													</tr>
													<!--tr-->
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div class="label-status mr-2">
																	<span class="icon-circle bg-dark"></span>
																</div>
																<div class="info-status">
																	<p class="mb-1 f-12">365⽇以上保管</p>
																</div>
															</div>
														</td>
														<td class="text-right">
															<span class="f-12">¥111</span>
														</td>
														<td class="text-right">
															<span class="f-12">6.0%</span>
														</td>
														<td class="text-right">
															<span class="clr-red">-3.2%</span>
														</td>
													</tr>
													<!--tr-->
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!--div-->
								<div class="col-lg-6 mb-2">
									<div class="d-flex align-items-center flex-column justify-content-center h-100">
										<div class="progress w-75 mb-3">
											<div class="progress-bar bg-pink" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
											<div class="progress-bar bg-semiOrange" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
											<div class="progress-bar bg-yellow" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
											<div class="progress-bar bg-green" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
											<div class="progress-bar bg-dark" role="progressbar" style="width: 6%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<!--progress-->
										<div class="progressbar-data d-flex mx-auto justify-content-around w-75">
											<div class="progress-data px-2 text-center">
												<p class="mb-1 f-20 fontEN">50.0%</p>
												<p class="mb-1 f-12">0〜90⽇</p>
											</div>
											<!--progress-data-->
											<div class="progress-data px-2 text-center">
												<p class="mb-1 f-20 fontEN">20.0%</p>
												<p class="mb-1 f-12">91〜180⽇</p>
											</div>
											<!--progress-data-->
											<div class="progress-data px-2 text-center">
												<p class="mb-1 f-20 fontEN">12.0%</p>
												<p class="mb-1 f-12">181〜270⽇</p>
											</div>
											<!--progress-data-->
											<div class="progress-data px-2 text-center">
												<p class="mb-1 f-20 fontEN">12.0%</p>
												<p class="mb-1 f-12">271〜365⽇</p>
											</div>
											<!--progress-data-->
											<div class="progress-data px-2 text-center">
												<p class="mb-1 f-20 fontEN">6%</p>
												<p class="mb-1 f-12">365⽇以上</p>
											</div>
											<!--progress-data-->
										</div>
										<!--progressbar-data-->
									</div>
								</div>
								<!--div-->
							</div>
							<!--row-->
						</div>
						<!--product-analysis-->
					</section>
					<!--section-->

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

<!--for slider-->
<script src="dist/js/slick.min.js"></script>

<script type="text/javascript">
	$('.sales-ranking-slider').slick({
        dots: false,
        centerMode: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: false,
        arrows: true,
        responsive: [{
            breakpoint: 991,
            settings: {
                arrows: true,
                slidesToShow: 3
            }
        }, {
            breakpoint: 769,
            settings: {
                arrows: true,
                slidesToShow: 2
            }
        }, {
            breakpoint: 576,
            settings: {
                arrows: true,
                slidesToShow: 1
            }
        }]
    });
</script>

<!--for chart-->
<script src="dist/js/Chart.min.js"></script>
<script src="dist/js/Chart.bundle.min.js"></script>
<script src="dist/js/utils.js"></script>

<script>

	// line chart
		var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var randomScalingFactor = function() {
			return Math.round(Math.random() * 100);
		};
		var configLine = {
			type: 'line',
			data: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
				datasets: [{
					label: 'My First dataset',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()
					],
					fill: false,
				}, {
					label: 'My Second dataset',
					fill: false,
					backgroundColor: window.chartColors.blue,
					borderColor: window.chartColors.blue,
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()
					],
				}]
			},
			options: {
				responsive: true,
				title: {
					display: false,
					text: 'Chart.js Line Chart'
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Month'
						}
					}],
					yAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Value'
						},
						ticks: {
							min: 0,
							max: 100,

							// forces step size to be 5 units
							stepSize: 5
						}
					}]
				}
			}
		};


	// bar chart
		var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var color = Chart.helpers.color;
		var barChartData = {
			labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
			datasets: [{
				label: 'Dataset 1',
				backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
				borderColor: window.chartColors.red,
				borderWidth: 1,
				data: [
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor()
				]
			}, {
				label: 'Dataset 2',
				backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
				borderColor: window.chartColors.blue,
				borderWidth: 1,
				data: [
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor()
				]
			}]
		};


	//window.onload
	window.onload = function() {
		// line chart 001
			var lineChart001 = document.getElementById('lineChart001').getContext('2d');
			window.myLine = new Chart(lineChart001, configLine);

		// bar chart 001
			var barChart001 = document.getElementById('barChart001').getContext('2d');
			window.myBar = new Chart(barChart001, {
				type: 'bar',
				data: barChartData,
				options: {
					responsive: true,
					legend: {
						position: 'top',
					},
					title: {
						display: false,
						text: 'Chart.js Bar Chart'
					}
				}
			});
	};
</script>