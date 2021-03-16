<?php include('inc/header.php'); ?>

<div class="outer-page-wrap">
	<div class="container-fluid">
		<div class="d-flex">

			<?php include('inc/side_menu.php'); ?>

			<div class="inner-page-wrap">
				<div class="report-page report-sales w-100">
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
									<a class="nav-link" href="report_dashboard.php">ダッシュボード</a>
								</li>
								<li class="nav-item">
									<a class="nav-link active" href="report_sales.php">売上レポート</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="report_product.php">商品レポート</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="report_inventory.php">在庫レポート</a>
								</li>
							</ul>
							<!--ul nav-->
							<div class="right-dropdown flex-wrap d-flex ml-auto">
								<div class="mb-2">
									<a class="nav-link btn btn-sm dropdown-toggle bg-white br-25 mr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										全てのショップ
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">横浜本社倉庫へ</a>
										<a class="dropdown-item" href="#">AmazonFAB</a>
									</div>
								</div>
								<!--div-->
								<div class="mb-2">
									<a class="nav-link btn btn-sm dropdown-toggle bg-white br-25 mr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										2021年12⽉
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">2021年13⽉</a>
										<a class="dropdown-item" href="#">2021年14⽉</a>
									</div>
								</div>
								<!--div-->
							</div>
							<!--right-dropdown d-flex-->
						</div>
						<!--d-flex flex-wrap justify-content-between align-items-center-->
					</div>
					<!--top-block-->

					<section class="mb-4 px-2">
						<!-- <p class="report-date f-18 mb-2">今⽉112⽉の速報</p> -->
						<div class="row">
							<div class="col-lg-6 px-1 mb-2">
								<div class="data-box bg-white br-25 p-3 d-flex flex-column justify-content-between h-100">
									<div class="data-top d-flex align-items-start justify-content-between mb-3">
										<div class="date f-14"><span>2020年12⽉の売上合計</span></div>
										<div class="see-detail-box text-right">
											<small class="text-muted f-12">詳細を⾒る</small>
											<p class="mb-1"><span class="btn btn-sm btn-navy">G.売上の推移詳細</span></p>
										</div>
									</div>
									<!--div-->
									<div class="data-middle d-flex flex-column align-items-center justify-content-around mb-3">
										<p class="f-20 mb-1"><span>¥121,972</span></p>
										<p class="clr-green f-12 mb-1"><span>+3.2%</span></p>
									</div>
									<!--div-->
									<div class="data-bottom d-flex align-items-center flex-column justify-content-between">
										<div class="chartWrapper">
											<canvas id="lineChart001" width="500"></canvas>
										</div>
									</div>
									<!--div-->
								</div>
								<!--data-box-->
							</div>
							<!--col-lg-6-->

							<div class="col-lg-6 px-1 mb-2">
								<div class="data-box bg-white br-25 p-3 d-flex flex-column justify-content-between h-100">
									<div class="data-top d-flex align-items-start justify-content-between mb-3">
										<div class="date f-14"><span>2020年12⽉の売上推移</span></div>
										<div class="see-detail-box text-right">
											<small class="text-muted f-12">詳細を⾒る</small>
											<p class="mb-1"><span class="btn btn-sm btn-navy">G.売上の推移詳細</span></p>
										</div>
									</div>
									<!--div-->
									<div class="data-middle d-flex flex-column align-items-center justify-content-around mb-3">
										<p class="f-20 mb-1"><span>¥121,972</span></p>
										<p class="clr-green f-12 mb-1"><span>+3.2%</span></p>
									</div>
									<!--div-->
									<div class="data-bottom d-flex align-items-center flex-column justify-content-between">
										<div class="chartWrapper">
											<canvas id="barChart001" width="500"></canvas>
										</div>
									</div>
									<!--div-->
								</div>
								<!--data-box-->
							</div>
							<!--col-lg-6-->
						</div>
						<!--row-->
					</section>
					<!--section-->

					<section class="mb-4">
						<!-- <p class="report-date f-18 mb-2">現在の在庫状況</p> -->
						<div class="store-sales bg-white br-25 p-3">
							<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
								<div class="f-15">2020年12⽉のストア売上⽐</div>
								<div class="see-detail-box text-right">
									<small class="text-muted f-12">詳細を⾒る</small>
									<p class="mb-1"><span class="btn btn-sm btn-navy">G.売上の推移詳細</span></p>
								</div>
							</div>
							<!--div-->
							<div class="row">
								<div class="col-lg-6 mb-2">
									<div class="d-flex align-items-center flex-column justify-content-center h-100">
										<div class="progress w-75 mb-3">
											<div class="progress-bar bg-pink" role="progressbar" style="width: 51%" aria-valuenow="51" aria-valuemin="0" aria-valuemax="100"></div>
											<div class="progress-bar bg-semiOrange" role="progressbar" style="width: 19%" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100"></div>
											<div class="progress-bar bg-yellow" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
											<div class="progress-bar bg-green" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<!--progress-->
										<div class="progressbar-data d-flex align-items-center justify-content-around w-75">
											<div class="progress-data px-2 text-center">
												<p class="mb-1 f-20 fontEN">51.0%</p>
												<p class="mb-1 f-12 clr-green">+3.2%</p>
												<p class="mb-1 f-12"><img width="16px" src="dist/img/icons/icon-sm-shopify.png" alt="" />ABCマーケット</p>
											</div>
											<!--progress-data-->
											<div class="progress-data px-2 text-center">
												<p class="mb-1 f-20 fontEN">21.0%</p>
												<p class="mb-1 f-12 clr-green">+3.2%</p>
												<p class="mb-1 f-12"><img width="16px" src="dist/img/icons/icon-sm-amazon.png" alt="" />ABCマーケット</p>
											</div>
											<!--progress-data-->
											<div class="progress-data px-2 text-center">
												<p class="mb-1 f-20 fontEN">18.0%</p>
												<p class="mb-1 f-12 clr-red">-3.2%</p>
												<p class="mb-1 f-12"><img width="16px" src="dist/img/icons/icon-sm-shopify.png" alt="" />よろず屋本舗</p>
											</div>
											<!--progress-data-->
											<div class="progress-data px-2 text-center">
												<p class="mb-1 f-20 fontEN">9.0%</p>
												<p class="mb-1 f-12 clr-red">-3.2%</p>
												<p class="mb-1 f-12"><img width="16px" src="dist/img/icons/icon-sm-amazon.png" alt="" />よろず屋本舗</p>
											</div>
											<!--progress-data-->
										</div>
										<!--progressbar-data-->
									</div>
								</div>
								<!--div-->
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
																	<p class="mb-1 f-12">
																		<img width="20px" src="dist/img/icons/icon-sm-shopify.png" alt="">
																		<span class="ml-1">ABCマーケッ</span>
																	</p>
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
																	<p class="mb-1 f-12">
																		<img width="20px" src="dist/img/icons/icon-sm-amazon.png" alt="">
																		<span class="ml-1">ABCマーケッ</span>
																	</p>
																</div>
															</div>
														</td>
														<td class="text-right">
															<span class="f-12">¥142,340</span>
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
																	<p class="mb-1 f-12">
																		<img width="20px" src="dist/img/icons/icon-sm-shopify.png" alt="">
																		<span class="ml-1">よろず屋本舗</span>
																	</p>
																</div>
															</div>
														</td>
														<td class="text-right">
															<span class="f-12">¥72,340</span>
														</td>
														<td class="text-right">
															<span class="f-12">6.0%</span>
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
																	<p class="mb-1 f-12">
																		<img width="20px" src="dist/img/icons/icon-sm-amazon.png" alt="">
																		<span class="ml-1">よろず屋本舗</span>
																	</p>
																</div>
															</div>
														</td>
														<td class="text-right">
															<span class="f-12">¥2,340</span>
														</td>
														<td class="text-right">
															<span class="f-12">4.0%</span>
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
							</div>
							<!--row-->
						</div>
						<!--product-analysis-->
					</section>
					<!--section-->

					<section class="mb-4 px-2">
						<!-- <p class="report-date f-18 mb-2">今⽉112⽉の速報</p> -->
						<div class="row">
							<div class="col-lg-6 px-1 mb-2">
								<div class="data-box bg-white br-25 p-3 d-flex flex-column justify-content-between h-100">
									<div class="data-top d-flex align-items-start justify-content-between mb-3">
										<div class="date f-14"><span>2020年12⽉の1注⽂の平均商品数</span></div>
										<div class="see-detail-box text-right">
											<small class="text-muted f-12">詳細を⾒る</small>
											<p class="mb-1"><span class="btn btn-sm btn-navy">G.売上の推移詳細</span></p>
										</div>
									</div>
									<!--div-->
									<div class="data-middle d-flex flex-column align-items-center justify-content-around mb-3">
										<p class="f-20 mb-1"><span>1.8個</span></p>
										<p class="clr-green f-12 mb-1"><span>+3.2%</span></p>
									</div>
									<!--div-->
									<div class="data-bottom d-flex align-items-center flex-column justify-content-between">
										<div class="chartWrapper">
											<canvas id="barChart002" width="500"></canvas>
										</div>
									</div>
									<!--div-->
								</div>
								<!--data-box-->
							</div>
							<!--col-lg-6-->

							<div class="col-lg-6 px-1 mb-2">
								<div class="data-box bg-white br-25 p-3 d-flex flex-column justify-content-between h-100">
									<div class="data-top d-flex align-items-start justify-content-between mb-3">
										<div class="date f-14"><span>2020年12⽉の平均注⽂単価</span></div>
										<div class="see-detail-box text-right">
											<small class="text-muted f-12">詳細を⾒る</small>
											<p class="mb-1"><span class="btn btn-sm btn-navy">G.売上の推移詳細</span></p>
										</div>
									</div>
									<!--div-->
									<div class="data-middle d-flex flex-column align-items-center justify-content-around mb-3">
										<p class="f-20 mb-1"><span>¥1,219</span></p>
										<p class="clr-green f-12 mb-1"><span>+3.2%</span></p>
									</div>
									<!--div-->
									<div class="data-bottom d-flex align-items-center flex-column justify-content-between">
										<div class="chartWrapper">
											<canvas id="lineChart002" width="500"></canvas>
										</div>
									</div>
									<!--div-->
								</div>
								<!--data-box-->
							</div>
							<!--col-lg-6-->
						</div>
						<!--row-->
					</section>
					<!--section-->

					<section class="mb-4 px-2">
						<!-- <p class="report-date f-18 mb-2">今⽉112⽉の速報</p> -->
						<div class="row">
							<div class="col-lg-4 px-1 mb-2">
								<div class="data-box bg-white br-25 p-3 d-flex flex-column justify-content-between h-100">
									<div class="data-top d-flex align-items-start justify-content-between mb-3">
										<div class="date f-14"><span>2020年12⽉のリピーター率</span></div>
										<div class="see-detail-box text-right">
											<!-- <small class="text-muted f-12">詳細を⾒る</small>
											<p class="mb-1"><span class="btn btn-sm btn-navy">G.売上の推移詳細</span></p> -->
										</div>
									</div>
									<!--div-->
									<div class="data-middle mb-5">
										<div class="d-flex align-items-center flex-column justify-content-center h-100">
											<div class="progress w-75 mb-3">
												<div class="progress-bar bg-pink" role="progressbar" style="width: 18.3%" aria-valuenow="18.3" aria-valuemin="0" aria-valuemax="100"></div>
												<div class="progress-bar bg-semiOrange" role="progressbar" style="width: 9.7%" aria-valuenow="9.7" aria-valuemin="0" aria-valuemax="100"></div>
												<div class="progress-bar bg-yellow" role="progressbar" style="width: 1.2%" aria-valuenow="1.2" aria-valuemin="0" aria-valuemax="100"></div>
												<div class="progress-bar bg-silver" role="progressbar" style="width: 75.6%" aria-valuenow="75.6" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
											<!--progress-->
											<div class="progressbar-data d-flex align-items-center justify-content-around w-75">
												<div class="progress-data px-2 text-center">
													<p class="mb-1 f-20 fontEN">18.3%</p>
													<p class="mb-1 f-12 clr-green">+3.2%</p>
													<p class="mb-1 f-12">リピーター</p>
												</div>
												<!--progress-data-->
												<div class="progress-data px-2 text-center">
													<p class="mb-1 f-20 fontEN">9.7%</p>
													<p class="mb-1 f-12 clr-green">+3.2%</p>
													<p class="mb-1 f-12">リピーター</p>
												</div>
												<!--progress-data-->
												<div class="progress-data px-2 text-center">
													<p class="mb-1 f-20 fontEN">1.2%</p>
													<p class="mb-1 f-12 clr-red">-3.2%</p>
													<p class="mb-1 f-12">リピーター</p>
												</div>
												<!--progress-data-->
												<div class="progress-data px-2 text-center">
													<p class="mb-1 f-20 fontEN">75.6%</p>
													<p class="mb-1 f-12 clr-red">-3.2%</p>
													<p class="mb-1 f-12">新規</p>
												</div>
												<!--progress-data-->
											</div>
											<!--progressbar-data-->
										</div>
									</div>
									<!--div-->
									<div class="data-bottom d-flex align-items-center flex-column justify-content-between">
										<div class="data-table-group">
											<div class="table-responsive-lg">
												<table class="table table-3-column">
													<thead>
														<tr class="blank-tr">
															<th class="column-1"></th>
															<th class="column-2"></th>
															<th class="column-3"></th>
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
																		<p class="mb-1 f-12">
																			<span class="ml-2">2回⽬のリピーター</span>
																		</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12">18.3%</span>
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
																		<p class="mb-1 f-12">
																			<span class="ml-2">3回⽬のリピーター</span>
																		</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12">9.7%</span>
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
																		<p class="mb-1 f-12">
																			<span class="ml-2">4回⽬以上のリピーター</span>
																		</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12">1.2%</span>
															</td>
															<td class="text-right">
																<span class="clr-green">+3.2%</span>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="label-status mr-2">
																		<span class="icon-circle bg-silver"></span>
																	</div>
																	<div class="info-status">
																		<p class="mb-1 f-12">
																			<span class="ml-2">新規</span>
																		</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12">75.6%</span>
															</td>
															<td class="text-right">
																<span class="clr-green">+3.2%</span>
															</td>
														</tr>
														<!--tr-->
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<!--div-->
								</div>
								<!--data-box-->
							</div>
							<!--col-lg-4-->

							<div class="col-lg-4 px-1 mb-2">
								<div class="data-box bg-white br-25 p-3 d-flex flex-column justify-content-between h-100">
									<div class="data-top d-flex align-items-start justify-content-between mb-3">
										<div class="date f-14"><span>2020年12⽉の決済割合</span></div>
										<div class="see-detail-box text-right">
											<!-- <small class="text-muted f-12">詳細を⾒る</small>
											<p class="mb-1"><span class="btn btn-sm btn-navy">G.売上の推移詳細</span></p> -->
										</div>
									</div>
									<!--div-->
									<div class="data-middle mb-3">
										<div class="d-flex align-items-center justify-content-center h-100">
											<div class="chartWrapper">
												<canvas id="doughnut001" width="500"></canvas>
											</div>
										</div>
									</div>
									<!--div-->
									<div class="data-bottom d-flex align-items-center flex-column justify-content-between">
										<div class="data-table-group">
											<div class="table-responsive-lg">
												<table class="table table-3-column">
													<thead>
														<tr class="blank-tr">
															<th class="column-1"></th>
															<th class="column-2"></th>
															<th class="column-3"></th>
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
																		<p class="mb-1 f-12">
																			<span class="ml-2">クレジットカード(JCB以外)</span>
																		</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12">75.6%</span>
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
																		<p class="mb-1 f-12">
																			<span class="ml-2">クレジットカード(JCB)</span>
																		</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12">18.3%</span>
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
																		<p class="mb-1 f-12">
																			<span class="ml-2">代引き</span>
																		</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12">3.7%</span>
															</td>
															<td class="text-right">
																<span class="clr-green">+3.2%</span>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="label-status mr-2">
																		<span class="icon-circle bg-silver"></span>
																	</div>
																	<div class="info-status">
																		<p class="mb-1 f-12">
																			<span class="ml-2">コンビニ⽀払い</span>
																		</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12">1.2%</span>
															</td>
															<td class="text-right">
																<span class="clr-green">+3.2%</span>
															</td>
														</tr>
														<!--tr-->
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<!--div-->
								</div>
								<!--data-box-->
							</div>
							<!--col-lg-4-->

							<div class="col-lg-4 px-1 mb-2">
								<div class="data-box bg-white br-25 p-3 d-flex flex-column justify-content-between h-100">
									<div class="data-top d-flex align-items-start justify-content-between mb-3">
										<div class="date f-14"><span>2020年12⽉のキャンセル</span></div>
										<div class="see-detail-box text-right">
											<small class="text-muted f-12">詳細を⾒る</small>
											<p class="mb-1"><span class="btn btn-sm btn-navy">C.キャンセル⼀覧</span></p>
										</div>
									</div>
									<!--div-->
									<div class="data-middle d-flex flex-column align-items-center justify-content-around mb-3">
										<div class="mb-3">
											<p class="f-20 mb-1"><span>95個</span></p>
											<p class="clr-green f-12 mb-1"><span>+3.2%</span></p>
										</div>
										<div class="mb-3">
											<p class="f-20 mb-1"><span>¥121,972</span></p>
											<p class="clr-green f-12 mb-1"><span>+3.2%</span></p>
										</div>
										<div class="mb-0">
											<p class="f-20 mb-1"><span>1.4%</span></p>
											<p class="clr-green f-12 mb-1"><span>+3.2%</span></p>
										</div>
									</div>
									<!--div-->
									<div class="data-bottom d-flex align-items-center flex-column justify-content-between">
										<div class="chartWrapper">
											<canvas id="barChart003" width="360"></canvas>
										</div>
									</div>
									<!--div-->
								</div>
								<!--data-box-->
							</div>
							<!--col-lg-4-->
						</div>
						<!--row-->
					</section>
					<!--section-->

					<section class="mb-4 px-2">
						<!-- <p class="report-date f-18 mb-2">今⽉112⽉の速報</p> -->
						<div class="row">
							<div class="col-lg-4 px-1 mb-2">
								<div class="data-box bg-white br-25 p-3 d-flex flex-column justify-content-between h-100">
									<div class="data-top d-flex align-items-start justify-content-between mb-3">
										<div class="date f-14"><span>2020年12⽉のコスト⽐率</span></div>
										<div class="see-detail-box text-right">
											<!-- <small class="text-muted f-12">詳細を⾒る</small>
											<p class="mb-1"><span class="btn btn-sm btn-navy">G.売上の推移詳細</span></p> -->
										</div>
									</div>
									<!--div-->
									<div class="data-middle mb-3">
										<div class="d-flex align-items-center justify-content-center h-100">
											<div class="chartWrapper">
												<canvas id="doughnut002" width="500"></canvas>
											</div>
										</div>
									</div>
									<!--div-->
									<div class="data-bottom d-flex align-items-center flex-column justify-content-between">
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
																		<span class="icon-circle bg-yellow"></span>
																	</div>
																	<div class="info-status">
																		<p class="mb-1 f-12">
																			<span class="ml-2">コスト</span>
																		</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12">¥36,972</span>
															</td>
															<td class="text-right">
																<span class="f-12">24.7%</span>
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
																		<span class="icon-circle bg-red"></span>
																	</div>
																	<div class="info-status">
																		<p class="mb-1 f-12">
																			<span class="ml-2">利益</span>
																		</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12">¥81,972</span>
															</td>
															<td class="text-right">
																<span class="f-12">65.3%</span>
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
																		<span class="icon-circle bg-offWhite"></span>
																	</div>
																	<div class="info-status">
																		<p class="mb-1 f-12">
																			<span class="ml-2">売上</span>
																		</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12">¥121,972</span>
															</td>
															<td class="text-right">
																<span class="f-12">10.0%</span>
															</td>
															<td class="text-right">
																<span class="clr-green">+3.2%</span>
															</td>
														</tr>
														<!--tr-->
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<!--div-->
								</div>
								<!--data-box-->
							</div>
							<!--col-lg-4-->

							<div class="col-lg-8 px-1 mb-2">
								<div class="data-box bg-white br-25 p-3 d-flex flex-column justify-content-between h-100">
									<div class="data-top d-flex align-items-start justify-content-between mb-3">
										<div class="date f-14"><span>2020年12⽉のコスト内訳</span></div>
										<div class="see-detail-box text-right">
											<!-- <small class="text-muted f-12">詳細を⾒る</small>
											<p class="mb-1"><span class="btn btn-sm btn-navy">G.売上の推移詳細</span></p> -->
										</div>
									</div>
									<!--div-->

									<div class="data-bottom d-flex align-items-center flex-column justify-content-between">
										<div class="data-table-group">
											<div class="table-responsive-lg">
												<table class="table breakdown-table">
													<thead>
														<tr class="blank-tr">
															<th class="column-1"></th>
															<th class="column-2"></th>
															<th class="column-3"></th>
															<th class="column-4"></th>
															<th class="column-5"></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="text-right">
																<span class="f-12">仕⼊原価</span>
															</td>
															<td class="text-right">
																<span class="f-12">¥1,972</span>
															</td>
															<td class="text-right">
																<span class="f-12">1.8%</span>
															</td>
															<td class="text-right">
																<span class="clr-blue f-12">+3.2%</span>
															</td>
															<td class="text-right">
																<div class="progress">
																	<div class="progress-bar bg-pink" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td class="text-right">
																<span class="f-12">物質コスト</span>
															</td>
															<td class="text-right">
																<span class="f-12">¥972</span>
															</td>
															<td class="text-right">
																<span class="f-12">4.6%</span>
															</td>
															<td class="text-right">
																<span class="clr-blue f-12">+3.2%</span>
															</td>
															<td class="text-right">
																<div class="progress">
																	<div class="progress-bar bg-pink" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td class="text-right">
																<span class="f-12">販売⼿数料</span>
															</td>
															<td class="text-right">
																<span class="f-12">¥21,972</span>
															</td>
															<td class="text-right">
																<span class="f-12">5.6%</span>
															</td>
															<td class="text-right">
																<span class="clr-blue f-12">+3.2%</span>
															</td>
															<td class="text-right">
																<div class="progress w-75">
																	<div class="progress-bar bg-pink" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td class="text-right">
																<span class="f-12">決済⼿数料</span>
															</td>
															<td class="text-right">
																<span class="f-12">¥14,972</span>
															</td>
															<td class="text-right">
																<span class="f-12">3.6%</span>
															</td>
															<td class="text-right">
																<span class="clr-blue f-12">+3.2%</span>
															</td>
															<td class="text-right">
																<div class="progress w-75">
																	<div class="progress-bar bg-pink" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td class="text-right">
																<span class="f-12">倉庫作業⼿数料</span>
															</td>
															<td class="text-right">
																<span class="f-12">¥0</span>
															</td>
															<td class="text-right">
																<span class="f-12">0.0%</span>
															</td>
															<td class="text-right">
																<span class="clr-blue f-12">+3.2%</span>
															</td>
															<td class="text-right">
																<div class="progress w-75">
																	<div class="progress-bar bg-pink" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td class="text-right">
																<span class="f-12">送料</span>
															</td>
															<td class="text-right">
																<span class="f-12">¥1,972</span>
															</td>
															<td class="text-right">
																<span class="f-12">75.6%</span>
															</td>
															<td class="text-right">
																<span class="clr-blue f-12">+3.2%</span>
															</td>
															<td class="text-right">
																<div class="progress w-75">
																	<div class="progress-bar bg-pink" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td class="text-right">
																<span class="f-12">プロモーション費⽤</span>
															</td>
															<td class="text-right">
																<span class="f-12">¥72</span>
															</td>
															<td class="text-right">
																<span class="f-12">75.6%</span>
															</td>
															<td class="text-right">
																<span class="clr-blue f-12">+3.2%</span>
															</td>
															<td class="text-right">
																<div class="progress w-75">
																	<div class="progress-bar bg-pink" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td class="text-right">
																<span class="f-12">広告費</span>
															</td>
															<td class="text-right">
																<span class="f-12">¥121,972</span>
															</td>
															<td class="text-right">
																<span class="f-12">75.6%</span>
															</td>
															<td class="text-right">
																<span class="clr-blue f-12">+3.2%</span>
															</td>
															<td class="text-right">
																<div class="progress w-75">
																	<div class="progress-bar bg-pink" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td class="text-right">
																<span class="f-12">在庫保管費⽤</span>
															</td>
															<td class="text-right">
																<span class="f-12">¥8,972</span>
															</td>
															<td class="text-right">
																<span class="f-12">75.6%</span>
															</td>
															<td class="text-right">
																<span class="clr-blue f-12">+3.2%</span>
															</td>
															<td class="text-right">
																<div class="progress w-75">
																	<div class="progress-bar bg-pink" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td class="text-right">
																<span class="f-12">その他経費</span>
															</td>
															<td class="text-right">
																<span class="f-12">¥199,972</span>
															</td>
															<td class="text-right">
																<span class="f-12">75.6%</span>
															</td>
															<td class="text-right">
																<span class="clr-blue f-12">+3.2%</span>
															</td>
															<td class="text-right">
																<div class="progress w-75">
																	<div class="progress-bar bg-pink" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td class="text-right">
																<span class="f-12">利益</span>
															</td>
															<td class="text-right">
																<span class="f-12">¥81,972</span>
															</td>
															<td class="text-right">
																<span class="f-12">65.3%</span>
															</td>
															<td class="text-right">
																<span class="clr-blue f-12">+3.2%</span>
															</td>
															<td class="text-right">
																<div class="progress w-75">
																	<div class="progress-bar bg-yellow" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
														</tr>
														<!--tr-->
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<!--div-->
								</div>
								<!--data-box-->
							</div>
							<!--col-lg-4-->
						</div>
						<!--row-->
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


	// doughnut chart
		var randomScalingFactor = function() {
			return Math.round(Math.random() * 100);
		};

		var configDoughnutChart001 = {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [
						75.6,
						18.3,
						3.7,
						1.2,
					],
					backgroundColor: [
						window.chartColors.red,
						window.chartColors.orange,
						window.chartColors.yellow,
						window.chartColors.silver,
					],
					label: 'Dataset 1'
				}],
				labels: [
					'Red',
					'Orange',
					'Yellow',
					'silver',
				]
			},
			options: {
				responsive: true,
				legend: {
					position: 'top',
				},
				title: {
					display: false,
					text: 'Chart.js Doughnut Chart'
				},
				animation: {
					animateScale: true,
					animateRotate: true
				}
			}
		};

		var configDoughnutChart002 = {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [
						24.7,
						65.3,
						10,
					],
					backgroundColor: [
						window.chartColors.yellow,
						window.chartColors.red,
						window.chartColors.white,
					],
					label: 'Dataset 1'
				}],
				labels: [
					'yellow',
					'red',
					'white',
				]
			},
			options: {
				responsive: true,
				legend: {
					position: 'top',
				},
				title: {
					display: false,
					text: 'Chart.js Doughnut Chart'
				},
				animation: {
					animateScale: true,
					animateRotate: true
				}
			}
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

		// line chart 002
			var lineChart002 = document.getElementById('lineChart002').getContext('2d');
			window.myLine = new Chart(lineChart002, configLine);

		// bar chart 002
			var barChart002 = document.getElementById('barChart002').getContext('2d');
			window.myBar = new Chart(barChart002, {
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

		// doughnut chart 001
			var doughnut001 = document.getElementById('doughnut001').getContext('2d');
			window.myDoughnut = new Chart(doughnut001, configDoughnutChart001);

		// bar chart 003
			var barChart003 = document.getElementById('barChart003').getContext('2d');
			window.myBar = new Chart(barChart003, {
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

		// doughnut chart 002
			var doughnut002 = document.getElementById('doughnut002').getContext('2d');
			window.myDoughnut = new Chart(doughnut002, configDoughnutChart002);
	};
</script>
