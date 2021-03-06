<?php include('inc/header.php'); ?>

<div class="outer-page-wrap">
	<div class="container-fluid">
		<div class="d-flex">

			<?php include('inc/side_menu.php'); ?>

			<div class="inner-page-wrap">
				<div class="report-page report-inventory w-100">
					<div class="top-block">
						<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
							<h3 class="page-title mb-1">
								<span>レポート</span>
							</h3>
							<a href="#" class="icon-upload pr-2">
								<img src="dist/img/icons/icon-upload.png" alt="upload icon" />
							</a>
						</div>
						<!--div-->

						<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
							<ul class="nav top-nav status-box">
								<li class="nav-item">
									<a class="nav-link" href="report_dashboard.php">ダッシュボード</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="report_sales.php">売上レポート</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="report_product.php">商品レポート</a>
								</li>
								<li class="nav-item">
									<a class="nav-link active" href="report_inventory.php">在庫レポート</a>
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
								<!--div-->
								<div class="mb-2">
									<a class="nav-link btn btn-sm dropdown-toggle bg-white br-25 mr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										直近30⽇
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">直近30⽇</a>
										<a class="dropdown-item" href="#">直近30⽇</a>
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
							<div class="col-lg-12 px-1 mb-2">
								<div class="data-box bg-white br-25 p-3 d-flex flex-column justify-content-between h-100">
									<div class="data-top d-flex align-items-start justify-content-between mb-3">
										<div class="date f-15"><span>直近30⽇の在庫推移と売上</span></div>
										<div class="see-detail-box text-right">
											<div class="d-flex float-left mr-5 label-status">
													<div class="mr-3 f-12">
														<span class="icon-circle bg-orange mr-1"></span>
														<span>在庫総額</span>
													</div>
													<div class="mr-2 f-12">
														<span class="icon-capsule bg-pink mr-1"></span>
														<span>売上</span>
													</div>
											</div>
											<small class="text-muted f-12">詳細を⾒る</small>
											<p class="mb-1"><span class="btn btn-sm btn-navy">F.在庫変動の詳細</span></p>
										</div>
									</div>
									<!--div-->
									<div class="data-bottom d-flex align-items-center flex-column justify-content-between">
										<div class="chartWrapper">
											<canvas id="lineStyleChart001" width="1000"></canvas>
										</div>
									</div>
									<!--div-->
								</div>
								<!--data-box-->
							</div>
							<!--col-lg-12-->
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
										<div class="date f-15"><span>直近30⽇の返品商品数</span></div>
										<div class="see-detail-box text-right">
											<small class="text-muted f-12">詳細を⾒る</small>
											<p class="mb-1"><span class="btn btn-sm btn-navy">E.⼊出庫した商品</span></p>
										</div>
									</div>
									<!--div-->
									<div class="data-middle d-flex flex-column align-items-center justify-content-around mb-3">
										<p class="f-20 mb-1"><span>12個</span></p>
										<p class="clr-green f-12 mb-1"><span class="text-muted mr-2">XXXX⽐</span><span>+3.2%</span></p>
									</div>
									<!--div-->
									<div class="data-bottom d-flex align-items-center flex-column justify-content-between">
										<div class="chartWrapper">
											<canvas id="barChart001" width="300"></canvas>
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
										<div class="date f-15"><span>直近30⽇の返品率</span></div>
										<div class="see-detail-box text-right">
											<!-- <small class="text-muted f-12">詳細を⾒る</small>
											<p class="mb-1"><span class="btn btn-sm btn-navy">G.売上の推移詳細</span></p> -->
										</div>
									</div>
									<!--div-->
									<div class="data-middle d-flex flex-column align-items-center justify-content-around mb-3">
										<p class="f-20 mb-1"><span>1.2%</span></p>
										<p class="clr-green f-12 mb-1"><span class="text-muted mr-2">XXXX⽐</span><span>+3.2%</span></p>
									</div>
									<!--div-->
									<div class="data-bottom d-flex align-items-center flex-column justify-content-between">
										<div class="chartWrapper">
											<canvas id="lineChart001" width="300"></canvas>
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
										<div class="date f-15"><span>直近30⽇の返品⾦額合計</span></div>
										<div class="see-detail-box text-right">
											<small class="text-muted f-12">詳細を⾒る</small>
											<p class="mb-1"><span class="btn btn-sm btn-navy">E.⼊出庫した商品</span></p>
										</div>
									</div>
									<!--div-->
									<div class="data-middle d-flex flex-column align-items-center justify-content-around mb-3">
										<p class="f-20 mb-1 font-weight-bold"><span>¥51,219</span></p>
										<p class="clr-green f-12 mb-1"><span class="text-muted mr-2">XXXX⽐</span><span>+3.2%</span></p>
									</div>
									<!--div-->
									<div class="data-bottom d-flex align-items-center flex-column justify-content-between">
										<div class="chartWrapper">
											<canvas id="lineStyleChart002" width="300"></canvas>
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
							<div class="col-lg-6 px-1 mb-2">
								<div class="data-box bg-white br-25 p-3 d-flex flex-column justify-content-between h-100">
									<div class="data-top d-flex align-items-start justify-content-between mb-3">
										<div class="date f-15 font-weight-bold"><span>在庫の保管期間</span></div>
										<div class="see-detail-box text-right">
											<small class="text-muted f-12">詳細を⾒る</small>
											<p class="mb-1"><span class="btn btn-sm btn-navy">B.在庫を管理</span></p>
										</div>
									</div>
									<!--div-->
									<div class="data-middle mb-5">
										<div class="d-flex align-items-center flex-column justify-content-center h-100">
											<div class="progress w-75 mb-3">
												<div class="progress-bar bg-pink" role="progressbar" style="width: 51%" aria-valuenow="51" aria-valuemin="0" aria-valuemax="100"></div>
												<div class="progress-bar bg-semiOrange" role="progressbar" style="width: 21%" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100"></div>
												<div class="progress-bar bg-yellow" role="progressbar" style="width: 18%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
												<div class="progress-bar bg-green" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
												<div class="progress-bar bg-dark" role="progressbar" style="width: 2.2%" aria-valuenow="2.2" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
											<!--progress-->
											<div class="progressbar-data d-flex mx-auto justify-content-around w-75">
												<div class="progress-data px-2 text-center">
													<p class="mb-1 f-20 fontEN">51.0%</p>
													<p class="mb-1 f-12">0〜90⽇</p>
												</div>
												<!--progress-data-->
												<div class="progress-data px-2 text-center">
													<p class="mb-1 f-20 fontEN">21.0%</p>
													<p class="mb-1 f-12">91〜180⽇</p>
												</div>
												<!--progress-data-->
												<div class="progress-data px-2 text-center">
													<p class="mb-1 f-20 fontEN">18.0%</p>
													<p class="mb-1 f-12">181〜270⽇</p>
												</div>
												<!--progress-data-->
												<!--progress-data-->
												<div class="progress-data px-2 text-center">
													<p class="mb-1 f-20 fontEN">9.0%</p>
													<p class="mb-1 f-12">271〜365⽇</p>
												</div>
												<!--progress-data-->
												<!--progress-data-->
												<div class="progress-data px-2 text-center">
													<p class="mb-1 f-20 fontEN">2.2%</p>
													<p class="mb-1 f-12">365⽇以上</p>
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
												<table class="table table-4-column">
													<thead>
														<tr>
															<th class="column-1 text-left">保管期間</th>
															<th class="column-2 text-right">在庫総額</th>
															<th class="column-3 text-right">割合</th>
															<th class="column-4 text-right">先⽉⽐</th>
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
																			<span class="ml-2">0〜90⽇間保管</span>
																		</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12 font-weight-bold">¥372,340</span>
															</td>
															<td class="text-right">
																<span class="f-12">78.0%</span>
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
																			<span class="ml-2">91〜180⽇間保</span>
																		</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12 font-weight-bold">¥142,340</span>
															</td>
															<td class="text-right">
																<span class="f-12">19.0%</span>
															</td>
															<td class="text-right">
																<span class="clr-green f-12">+3.2%</span>
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
																			<span class="ml-2">181〜270⽇間保管</span>
																		</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12 font-weight-bold">¥72,340</span>
															</td>
															<td class="text-right">
																<span class="f-12">6.0%</span>
															</td>
															<td class="text-right">
																<span class="clr-red f-12">-3.2%</span>
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
																			<span class="ml-2">271〜365⽇間保管</span>
																		</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12 font-weight-bold">¥2,340</span>
															</td>
															<td class="text-right">
																<span class="f-12">4.0%</span>
															</td>
															<td class="text-right">
																<span class="clr-red f-12">-3.2%</span>
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
																		<p class="mb-1 f-12">
																			<span class="ml-2">365⽇以上保管</span>
																		</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12 font-weight-bold">¥111</span>
															</td>
															<td class="text-right">
																<span class="f-12">0.4%</span>
															</td>
															<td class="text-right">
																<span class="clr-red f-12">-3.2%</span>
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
							<!--col-lg-6-->

							<div class="col-lg-6 px-1 mb-2">
								<div class="data-box bg-white br-25 p-3 d-flex flex-column justify-content-between h-100">
									<div class="data-top d-flex align-items-start justify-content-between mb-3">
										<div class="date f-15 font-weight-bold"><span>拠点ごとの在庫割合</span></div>
										<div class="see-detail-box text-right">
											<small class="text-muted f-12">詳細を⾒る</small>
											<p class="mb-1"><span class="btn btn-sm btn-navy">B.在庫を管理</span></p>
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
												<table class="table table-4-column">
													<thead>
														<tr>
															<th class="column-1 text-left">倉庫</th>
															<th class="column-2 text-right">在庫総額</th>
															<th class="column-3 text-right">割合</th>
															<th class="column-4 text-right">先⽉⽐</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="label-status mr-2">
																		<span class="icon-circle" style="background: #ffcd56;"></span>
																	</div>
																	<div class="info-status ml-2">
																		<p class="mb-1 f-12">AmazonFAB</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12 font-weight-bold">¥3,142,340</span>
															</td>
															<td class="text-right">
																<span class="f-12">38.3%</span>
															</td>
															<td class="text-right">
																<span class="clr-blue f-12">+10%</span>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="label-status mr-2">
																		<span class="icon-circle " style="background: #ff6384;"></span>
																	</div>
																	<div class="info-status ml-2">
																		<p class="mb-1 f-12">AmazonFAB</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12 font-weight-bold">¥3,142,340</span>
															</td>
															<td class="text-right">
																<span class="f-12">38.3%</span>
															</td>
															<td class="text-right">
																<span class="clr-blue f-12">+10%</span>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="label-status mr-2">
																		<span class="icon-circle " style="background: #4bc0c0;"></span>
																	</div>
																	<div class="info-status ml-2">
																		<p class="mb-1 f-12">AmazonFAB</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12 font-weight-bold">¥3,142,340</span>
															</td>
															<td class="text-right">
																<span class="f-12">38.3%</span>
															</td>
															<td class="text-right">
																<span class="clr-blue f-12">+10%</span>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="label-status mr-2">
																		<span class="icon-circle " style="background: #e5e5e5;"></span>
																	</div>
																	<div class="info-status ml-2">
																		<p class="mb-1 f-12">AmazonFAB</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12 font-weight-bold">¥3,142,340</span>
															</td>
															<td class="text-right">
																<span class="f-12">38.3%</span>
															</td>
															<td class="text-right">
																<span class="clr-blue f-12">+10%</span>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="label-status mr-2">
																		<span class="icon-circle " style="background: #ff9f40;"></span>
																	</div>
																	<div class="info-status ml-2">
																		<p class="mb-1 f-12">AmazonFAB</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12 font-weight-bold">¥3,142,340</span>
															</td>
															<td class="text-right">
																<span class="f-12">38.3%</span>
															</td>
															<td class="text-right">
																<span class="clr-blue f-12">+10%</span>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="label-status mr-2">
																		<span class="icon-circle " style="background: #36a2eb;"></span>
																	</div>
																	<div class="info-status ml-2">
																		<p class="mb-1 f-12">AmazonFAB</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12 font-weight-bold">¥3,142,340</span>
															</td>
															<td class="text-right">
																<span class="f-12">38.3%</span>
															</td>
															<td class="text-right">
																<span class="clr-blue f-12">+10%</span>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="label-status mr-2">
																		<span class="icon-circle " style="background: #9966ff;"></span>
																	</div>
																	<div class="info-status ml-2">
																		<p class="mb-1 f-12">AmazonFAB</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12 font-weight-bold">¥3,142,340</span>
															</td>
															<td class="text-right">
																<span class="f-12">38.3%</span>
															</td>
															<td class="text-right">
																<span class="clr-blue f-12">+10%</span>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="label-status mr-2">
																		<span class="icon-circle " style="background: #00ff00;"></span>
																	</div>
																	<div class="info-status ml-2">
																		<p class="mb-1 f-12">AmazonFAB</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12 font-weight-bold">¥3,142,340</span>
															</td>
															<td class="text-right">
																<span class="f-12">38.3%</span>
															</td>
															<td class="text-right">
																<span class="clr-blue f-12">+10%</span>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="label-status mr-2">
																		<span class="icon-circle " style="background: #800000;"></span>
																	</div>
																	<div class="info-status ml-2">
																		<p class="mb-1 f-12">AmazonFAB</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12 font-weight-bold">¥3,142,340</span>
															</td>
															<td class="text-right">
																<span class="f-12">38.3%</span>
															</td>
															<td class="text-right">
																<span class="clr-blue f-12">+10%</span>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="label-status mr-2">
																		<span class="icon-circle " style="background: #cddc39;"></span>
																	</div>
																	<div class="info-status ml-2">
																		<p class="mb-1 f-12">AmazonFAB</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12 font-weight-bold">¥3,142,340</span>
															</td>
															<td class="text-right">
																<span class="f-12">38.3%</span>
															</td>
															<td class="text-right">
																<span class="clr-blue f-12">+10%</span>
															</td>
														</tr>
														<!--tr-->
														<tr>
															<td>
																<div class="d-flex align-items-center">
																	<div class="label-status mr-2">
																		<span class="icon-circle " style="background: #ff00ff;"></span>
																	</div>
																	<div class="info-status ml-2">
																		<p class="mb-1 f-12">AmazonFAB</p>
																	</div>
																</div>
															</td>
															<td class="text-right">
																<span class="f-12 font-weight-bold">¥3,142,340</span>
															</td>
															<td class="text-right">
																<span class="f-12">38.3%</span>
															</td>
															<td class="text-right">
																<span class="clr-blue f-12">+10%</span>
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
							<!--col-lg-6-->
						</div>
						<!--row-->
					</section>
					<!--section-->



					<section class="mb-4">
						<!-- <p class="report-date f-18 mb-2">現在の在庫状況</p> -->
						<div class="product-analysis bg-white br-25 p-3">
							<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
								<div class="f-15  font-weight-bold">在庫のABC分析</div>
								<div><span class="btn btn-sm btn-navy mr-2">B.在庫を管理</span><small class="text-muted f-12">詳細を⾒る</small></div>
							</div>
							<!--div-->
							<div class="row">
								<div class="col-lg-6 mb-2">
									<div class="data-table-group">
										<div class="table-responsive-lg">
											<table class="table table-4-column">
												<thead>
													<tr>
														<th class="column-1 text-left">クラス</th>
														<th class="column-2 text-right">在庫総額</th>
														<th class="column-3 text-right">在庫割合</th>
														<th class="column-4 text-right">先⽉⽐</th>
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
																	<p class="mb-1 f-12 ml-2">Aクラス</p>
																	<p class="mb-1 f-12 ml-2 text-muted">収益の80%を占めている商品群</p>
																</div>
															</div>
														</td>
														<td class="text-right">
															<span class="f-12 font-weight-bold">¥372,340</span>
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
																	<p class="mb-1 f-12 ml-2">Bクラス</p>
																	<p class="mb-1 f-12 ml-2 text-muted">収益の15%を占めている商品群</p>
																</div>
															</div>
														</td>
														<td class="text-right">
															<span class="f-12 font-weight-bold">¥72,340</span>
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
																	<p class="mb-1 f-12 ml-2">Cクラス</p>
																	<p class="mb-1 f-12 ml-2 text-muted">収益の5%を占めている商品群</p>
																</div>
															</div>
														</td>
														<td class="text-right">
															<span class="f-12 font-weight-bold">¥2,340</span>
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
									<div class="d-flex align-items-center flex-column justify-content-center h-100">
										<div class="progress w-75 mb-3">
											<div class="progress-bar bg-pink" role="progressbar" style="width: 71%" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100"></div>
											<div class="progress-bar bg-semiOrange" role="progressbar" style="width: 19%" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100"></div>
											<div class="progress-bar bg-yellow" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
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

<!--for chart-->
<script src="dist/js/Chart.min.js"></script>
<script src="dist/js/Chart.bundle.min.js"></script>
<script src="dist/js/utils.js"></script>

<script>

	// bar chart
		var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var color = Chart.helpers.color;
		var barChartData = {
			labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
			datasets: [{
				label: 'Dataset 1',
				backgroundColor: color("#4b5365").alpha(0.5).rgbString(),
				borderColor: "#4b5365",
				borderWidth: 0,
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
				backgroundColor: color("e0e0e0").alpha(0.5).rgbString(),
				borderColor: "e0e0e0",
				borderWidth: 0,
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
					backgroundColor: "#4b5365",
					borderColor: "#4b5365",
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
					backgroundColor: "e0e0e0",
					borderColor: "e0e0e0",
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

	// line style chart
		var configStyleLine = {
			type: 'line',
			data: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
				datasets: [{
					label: '売上',
					fill: false,
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [
						2, 6, 10, 4, 8, 14, 12, 20, 16, 18
					],
				}, {
					label: '在庫総額',
					backgroundColor: window.chartColors.orange,
					borderColor: window.chartColors.orange,
					data: [
						3,  9, 6, 18, 12, 15, 21, 30, 24, 27
					],
					fill: true,
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
						}
					}]
				}
			}
		};

		var configStyleLine002 = {
			type: 'line',
			data: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
				datasets: [ {
					label: '在庫総額',
					backgroundColor: "#4b5365",
					borderColor: "#4b5365",
					data: [
						3,  9, 6, 18, 12, 15, 21, 30, 24, 27
					],
					fill: true,
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
						}
					}]
				}
			}
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
						10.0,
						10.0,
						10.0,
						10.0,
						10.0,
						10.0,
						10.0,
						10.0,
						10.0,
						5.0,
						5.0,
					],
					backgroundColor: [
						window.chartColors.yellow,
						window.chartColors.red,
						window.chartColors.green,
						window.chartColors.white,
						window.chartColors.orange,
						window.chartColors.blue,
						window.chartColors.purple,
						"#00ff00",
                  		"#800000",
                  		"#ff00ff",
                  		"#cddc39",
					],
					label: 'Dataset 1'
				}],
				labels: [
					'Yellow',
					'Red',
					'Green',
					'white',
					'orange',
					'blue',
					'purple',
					"Lime",
                  	"Maroon",
                  	"Magenta",
                  	"PepperMint",
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

		// line Style chart 001
			var lineStyleChart001 = document.getElementById('lineStyleChart001').getContext('2d');
			window.myLine = new Chart(lineStyleChart001, configStyleLine);


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

		// line chart 001
			var lineChart001 = document.getElementById('lineChart001').getContext('2d');
			window.myLine = new Chart(lineChart001, configLine);


		// line Style chart 002
			var lineStyleChart002 = document.getElementById('lineStyleChart002').getContext('2d');
			window.myLine = new Chart(lineStyleChart002, configStyleLine002);


		// doughnut chart 001
			var doughnut001 = document.getElementById('doughnut001').getContext('2d');
			window.myDoughnut = new Chart(doughnut001, configDoughnutChart001);

	};
</script>


