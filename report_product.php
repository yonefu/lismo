<?php include('inc/header.php'); ?>

<div class="outer-page-wrap">
	<div class="container-fluid">
		<div class="d-flex">

			<?php include('inc/side_menu.php'); ?>

			<div class="inner-page-wrap">
				<div class="report-page report-product w-100">
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
									<a class="nav-link" href="report_sales.php">売上レポート</a>
								</li>
								<li class="nav-item">
									<a class="nav-link active" href="report_product.php">商品レポート</a>
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
								<div class="mb-2">
									<a class="nav-link btn btn-sm dropdown-toggle bg-white br-25 mr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										直近30⽇
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">直近30⽇</a>
										<a class="dropdown-item" href="#">直近30⽇</a>
									</div>
								</div>
							</div>
							<!--right-dropdown d-flex-->
						</div>
						<!--d-flex flex-wrap justify-content-between align-items-center-->
					</div>
					<!--top-block-->

					<section class="mb-4">
						<!-- <p class="report-date f-18 mb-2">今⽉112⽉の速報</p> -->
						<div class="sales-ranking bg-white br-25 p-3">
							<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
								<ul class="nav top-nav status-box">
									<li class="nav-item">
										<a class="nav-link active" id="riseRateRanking-tab" data-toggle="tab" href="#riseRateRanking" role="tab" aria-controls="riseRateRanking" aria-selected="true">上昇率ランキング</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="decreaseRateRanking-tab" data-toggle="tab" href="#decreaseRateRanking" role="tab" aria-controls="decreaseRateRanking" aria-selected="false">減少率ランキング</a>
									</li>
								</ul>
								<!--ul nav-->
								<div><span class="btn btn-sm btn-navy mr-2">D.販売した商品</span><small class="text-muted f-12">詳細を⾒る</small></div>
							</div>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="riseRateRanking" role="tabpanel" aria-labelledby="riseRateRanking-tab">
									<div class="sales-ranking-slider">
										<div>
											<div class="data-box bg-white br-25 pt-3 d-flex flex-column justify-content-between h-100">
												<div class="data-top d-flex mb-3 px-3">
													<div class="ranking-col mr-2">
														<span class="rank-no f-20">
															<i class="mr-2 fontEN">1</i>
															<img src="dist/img/icons/icon-diagonal-arrow.png" alt="" />
														</span>
													</div>
													<div class="img-col mx-auto">
														<img src="dist/img/1.jpg" alt="" />
													</div>
												</div>
												<!--data-top-->
												<div class="data-bottom d-flex justify-content-between mb-3 px-3">
													<div class="info-1 f-12 mr-3">そらのおとしものf ねんどろいど  ニ ンフ (ノンスケールモデル)そ…</div>
													<div class="info-2 text-center f-12">
														<p class="mb-0"><span class="badge first-hand py-1 px-3">直接</span></p>
														<p class="mb-0">ブラック</p>
														<p class="mb-0">Mサイズ</p>
														<p class="mb-0">Mサイズ</p>
													</div>
												</div>
												<!--data-bottom-->
												<div class="data-table-group">
													<div class="table-responsive-lg">
														<table class="table table-report-product">
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
																		<div class="info-status mb-1 f-12">売上</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">¥723,113</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">利益</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">¥323,536</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">販売個数</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">334個</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">利益率</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">67.4%</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-red f-12">-3.2%</span>
																	</td>
																</tr>
																<!--tr-->
															</tbody>
														</table>
														<!--table-->
													</div>
													<!--table-responsive-lg-->
												</div>
												<!--data-table-group-->
											</div>
											<!--data-box-->
										</div>
										<!--div-->

										<div>
											<div class="data-box bg-white br-25 pt-3 d-flex flex-column justify-content-between h-100">
												<div class="data-top d-flex mb-3 px-3">
													<div class="ranking-col mr-2">
														<span class="rank-no f-20">
															<i class="mr-2 fontEN">2</i>
															<img src="dist/img/icons/icon-diagonal-arrow.png" alt="" />
														</span>
													</div>
													<div class="img-col mx-auto">
														<img src="dist/img/2.jpg" alt="" />
													</div>
												</div>
												<!--data-top-->
												<div class="data-bottom d-flex justify-content-between mb-3 px-3">
													<div class="info-1 f-12 mr-3">そらのおとしものf ねんどろいど  ニンフ (ノンスケールモデル)そらのおとしものf ね …</div>
													<div class="info-2 text-center f-12">
														<p class="mb-0"><span class="badge first-hand py-1 px-3">直接</span></p>
														<p class="mb-0">ブラック</p>
														<p class="mb-0">Mサイズ</p>
													</div>
												</div>
												<!--data-bottom-->
												<div class="data-table-group">
													<div class="table-responsive-lg">
														<table class="table table-report-product">
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
																		<div class="info-status mb-1 f-12">売上</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">¥723,113</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">利益</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">¥323,536</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">販売個数</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">334個</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">利益率</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">67.4%</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-red f-12">-3.2%</span>
																	</td>
																</tr>
																<!--tr-->
															</tbody>
														</table>
														<!--table-->
													</div>
													<!--table-responsive-lg-->
												</div>
												<!--data-table-group-->
											</div>
											<!--data-box-->
										</div>
										<!--div-->

										<div>
											<div class="data-box bg-white br-25 pt-3 d-flex flex-column justify-content-between h-100">
												<div class="data-top d-flex mb-3 px-3">
													<div class="ranking-col mr-2">
														<span class="rank-no f-20">
															<i class="mr-2 fontEN">3</i>
															<img src="dist/img/icons/icon-diagonal-arrow.png" alt="" />
														</span>
													</div>
													<div class="img-col mx-auto">
														<img src="dist/img/3.jpg" alt="" />
													</div>
												</div>
												<!--data-top-->
												<div class="data-bottom d-flex justify-content-between mb-3 px-3">
													<div class="info-1 f-12 mr-3">そらのおとしものf ねんどろいど  ニ ンフ (ノンスケールモデル)そ…</div>
													<div class="info-2 text-center f-12">
														<p class="mb-0"><span class="badge first-hand py-1 px-3">直接</span></p>
														<p class="mb-0">ブラック</p>
														<p class="mb-0">Mサイズ</p>
													</div>
												</div>
												<!--data-bottom-->
												<div class="data-table-group">
													<div class="table-responsive-lg">
														<table class="table table-report-product">
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
																		<div class="info-status mb-1 f-12">売上</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">¥723,113</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">利益</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">¥323,536</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">販売個数</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">334個</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">利益率</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">67.4%</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-red f-12">-3.2%</span>
																	</td>
																</tr>
																<!--tr-->
															</tbody>
														</table>
														<!--table-->
													</div>
													<!--table-responsive-lg-->
												</div>
												<!--data-table-group-->
											</div>
											<!--data-box-->
										</div>
										<!--div-->

										<div>
											<div class="data-box bg-white br-25 pt-3 d-flex flex-column justify-content-between h-100">
												<div class="data-top d-flex mb-3 px-3">
													<div class="ranking-col mr-2">
														<span class="rank-no f-20">
															<i class="mr-2 fontEN">4</i>
															<img src="dist/img/icons/icon-diagonal-arrow.png" alt="" />
														</span>
													</div>
													<div class="img-col mx-auto">
														<img src="dist/img/4.jpg" alt="" />
													</div>
												</div>
												<!--data-top-->
												<div class="data-bottom d-flex justify-content-between mb-3 px-3">
													<div class="info-1 f-12 mr-3">そらのおとしものf ねんどろいど  ニ ンフ (ノンスケールモデル)そ…</div>
													<div class="info-2 text-center f-12">
														<p class="mb-0"><span class="badge first-hand py-1 px-3">直接</span></p>
														<p class="mb-0">ブラック</p>
														<p class="mb-0">Mサイズ</p>
													</div>
												</div>
												<!--data-bottom-->
												<div class="data-table-group">
													<div class="table-responsive-lg">
														<table class="table table-report-product">
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
																		<div class="info-status mb-1 f-12">売上</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">¥723,113</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">利益</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">¥323,536</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">販売個数</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">334個</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">利益率</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">67.4%</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-red f-12">-3.2%</span>
																	</td>
																</tr>
																<!--tr-->
															</tbody>
														</table>
														<!--table-->
													</div>
													<!--table-responsive-lg-->
												</div>
												<!--data-table-group-->
											</div>
											<!--data-box-->
										</div>
										<!--div-->

										<div>
											<div class="data-box bg-white br-25 pt-3 d-flex flex-column justify-content-between h-100">
												<div class="data-top d-flex mb-3 px-3">
													<div class="ranking-col mr-2">
														<span class="rank-no f-20">
															<i class="mr-2 fontEN">5</i>
															<img src="dist/img/icons/icon-diagonal-arrow.png" alt="" />
														</span>
													</div>
													<div class="img-col mx-auto">
														<img src="dist/img/5.jpg" alt="" />
													</div>
												</div>
												<!--data-top-->
												<div class="data-bottom d-flex justify-content-between mb-3 px-3">
													<div class="info-1 f-12 mr-3">そらのおとしものf ねんどろいど  ニ ンフ (ノンスケールモデル)そ…</div>
													<div class="info-2 text-center f-12">
														<p class="mb-0"><span class="badge first-hand py-1 px-3">直接</span></p>
														<p class="mb-0">ブラック</p>
														<p class="mb-0">Mサイズ</p>
													</div>
												</div>
												<!--data-bottom-->
												<div class="data-table-group">
													<div class="table-responsive-lg">
														<table class="table table-report-product">
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
																		<div class="info-status mb-1 f-12">売上</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">¥723,113</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">利益</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">¥323,536</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">販売個数</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">334個</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">利益率</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">67.4%</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-red f-12">-3.2%</span>
																	</td>
																</tr>
																<!--tr-->
															</tbody>
														</table>
														<!--table-->
													</div>
													<!--table-responsive-lg-->
												</div>
												<!--data-table-group-->
											</div>
											<!--data-box-->
										</div>
										<!--div-->
									</div>
								</div>
								<div class="tab-pane fade" id="decreaseRateRanking" role="tabpanel" aria-labelledby="decreaseRateRanking-tab">
									<div class="sales-ranking-slider1">
										<div>
											<div class="data-box bg-white br-25 pt-3 d-flex flex-column justify-content-between h-100">
												<div class="data-top d-flex mb-3 px-3">
													<div class="ranking-col mr-2">
														<span class="rank-no f-20">
															<i class="mr-2 fontEN">5</i>
															<img src="dist/img/icons/icon-diagonal-arrow.png" alt="" />
														</span>
													</div>
													<div class="img-col mx-auto">
														<img src="dist/img/4.jpg" alt="" />
													</div>
												</div>
												<!--data-top-->
												<div class="data-bottom d-flex justify-content-between mb-3 px-3">
													<div class="info-1 f-12 mr-3">そらのおとしものf ねんどろいど  ニ ンフ (ノンスケールモデル)そ…</div>
													<div class="info-2 text-center f-12">
														<p class="mb-0"><span class="badge first-hand py-1 px-3">直接</span></p>
														<p class="mb-0">ブラック</p>
														<p class="mb-0">Mサイズ</p>
													</div>
												</div>
												<!--data-bottom-->
												<div class="data-table-group">
													<div class="table-responsive-lg">
														<table class="table table-report-product">
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
																		<div class="info-status mb-1 f-12">売上</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">¥723,113</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">利益</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">¥323,536</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">販売個数</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">334個</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">利益率</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">67.4%</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-red f-12">-3.2%</span>
																	</td>
																</tr>
																<!--tr-->
															</tbody>
														</table>
														<!--table-->
													</div>
													<!--table-responsive-lg-->
												</div>
												<!--data-table-group-->
											</div>
											<!--data-box-->
										</div>
										<!--div-->
										<div>
											<div class="data-box bg-white br-25 pt-3 d-flex flex-column justify-content-between h-100">
												<div class="data-top d-flex mb-3 px-3">
													<div class="ranking-col mr-2">
														<span class="rank-no f-20">
															<i class="mr-2 fontEN">4</i>
															<img src="dist/img/icons/icon-diagonal-arrow.png" alt="" />
														</span>
													</div>
													<div class="img-col mx-auto">
														<img src="dist/img/5.jpg" alt="" />
													</div>
												</div>
												<!--data-top-->
												<div class="data-bottom d-flex justify-content-between mb-3 px-3">
													<div class="info-1 f-12 mr-3">そらのおとしものf ねんどろいど  ニ ンフ (ノンスケールモデル)そ…</div>
													<div class="info-2 text-center f-12">
														<p class="mb-0"><span class="badge first-hand py-1 px-3">直接</span></p>
														<p class="mb-0">ブラック</p>
														<p class="mb-0">Mサイズ</p>
													</div>
												</div>
												<!--data-bottom-->
												<div class="data-table-group">
													<div class="table-responsive-lg">
														<table class="table table-report-product">
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
																		<div class="info-status mb-1 f-12">売上</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">¥723,113</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">利益</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">¥323,536</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">販売個数</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12">334個</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">利益率</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12">67.4%</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-red f-12">-3.2%</span>
																	</td>
																</tr>
																<!--tr-->
															</tbody>
														</table>
														<!--table-->
													</div>
													<!--table-responsive-lg-->
												</div>
												<!--data-table-group-->
											</div>
											<!--data-box-->
										</div>
										<!--div-->
										<div>
											<div class="data-box bg-white br-25 pt-3 d-flex flex-column justify-content-between h-100">
												<div class="data-top d-flex mb-3 px-3">
													<div class="ranking-col mr-2">
														<span class="rank-no f-20">
															<i class="mr-2 fontEN">3</i>
															<img src="dist/img/icons/icon-diagonal-arrow.png" alt="" />
														</span>
													</div>
													<div class="img-col mx-auto">
														<img src="dist/img/5.jpg" alt="" />
													</div>
												</div>
												<!--data-top-->
												<div class="data-bottom d-flex justify-content-between mb-3 px-3">
													<div class="info-1 f-12 mr-3">そらのおとしものf ねんどろいど  ニ ンフ (ノンスケールモデル)そ…</div>
													<div class="info-2 text-center f-12">
														<p class="mb-0"><span class="badge first-hand py-1 px-3">直接</span></p>
														<p class="mb-0">ブラック</p>
														<p class="mb-0">Mサイズ</p>
													</div>
												</div>
												<!--data-bottom-->
												<div class="data-table-group">
													<div class="table-responsive-lg">
														<table class="table table-report-product">
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
																		<div class="info-status mb-1 f-12">売上</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">¥723,113</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">利益</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">¥323,536</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">販売個数</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12">334個</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">利益率</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12">67.4%</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-red f-12">-3.2%</span>
																	</td>
																</tr>
																<!--tr-->
															</tbody>
														</table>
														<!--table-->
													</div>
													<!--table-responsive-lg-->
												</div>
												<!--data-table-group-->
											</div>
											<!--data-box-->
										</div>
										<!--div-->
										<div>
											<div class="data-box bg-white br-25 pt-3 d-flex flex-column justify-content-between h-100">
												<div class="data-top d-flex mb-3 px-3">
													<div class="ranking-col mr-2">
														<span class="rank-no f-20">
															<i class="mr-2 fontEN">2</i>
															<img src="dist/img/icons/icon-diagonal-arrow.png" alt="" />
														</span>
													</div>
													<div class="img-col mx-auto">
														<img src="dist/img/5.jpg" alt="" />
													</div>
												</div>
												<!--data-top-->
												<div class="data-bottom d-flex justify-content-between mb-3 px-3">
													<div class="info-1 f-12 mr-3">そらのおとしものf ねんどろいど  ニ ンフ (ノンスケールモデル)そ…</div>
													<div class="info-2 text-center f-12">
														<p class="mb-0"><span class="badge first-hand py-1 px-3">直接</span></p>
														<p class="mb-0">ブラック</p>
														<p class="mb-0">Mサイズ</p>
													</div>
												</div>
												<!--data-bottom-->
												<div class="data-table-group">
													<div class="table-responsive-lg">
														<table class="table table-report-product">
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
																		<div class="info-status mb-1 f-12">売上</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">¥723,113</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">利益</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12 font-weight-bold">¥323,536</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">販売個数</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12">334個</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-blue f-12">+3.2%</span>
																	</td>
																</tr>
																<!--tr-->
																<tr>
																	<td>
																		<div class="info-status mb-1 f-12">利益率</div>
																	</td>
																	<td class="text-right">
																		<span class="f-12">67.4%</span>
																	</td>
																	<td class="text-right">
																		<span class="clr-red f-12">-3.2%</span>
																	</td>
																</tr>
																<!--tr-->
															</tbody>
														</table>
														<!--table-->
													</div>
													<!--table-responsive-lg-->
												</div>
												<!--data-table-group-->
											</div>
											<!--data-box-->
										</div>
										<!--div-->
									</div>
								</div>
							</div>
						</div>
					</section>
					<!--section-->

					<section class="mb-4">
						<!-- <p class="report-date f-18 mb-2">現在の在庫状況</p> -->
						<div class="product-analysis bg-white br-25 p-3">
							<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
								<ul class="nav top-nav status-box">
									<li class="nav-item">
										<a class="nav-link active" id="salesRanking-tab" data-toggle="tab" href="#salesRanking" role="tab" aria-controls="salesRanking" aria-selected="true">売上額ランキング</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="salesQtyRanking-tab" data-toggle="tab" href="#salesQtyRanking" role="tab" aria-controls="salesQtyRanking" aria-selected="false">売上個数ランキング</a>
									</li>
								</ul>
								<!--ul nav-->
								<div><span class="btn btn-sm btn-navy mr-2">D.販売した商品</span><small class="text-muted f-12">詳細を⾒る</small></div>
							</div>
							<!--div-->
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="salesRanking" role="tabpanel" aria-labelledby="salesRanking-tab">
									<div class="row">
										<div class="col-lg-6 mb-2">
											<div class="data-table-group">
												<div class="table-responsive-lg">
													<table class="table table-report-ranking">
														<thead>
															<tr>
																<th class="column-1">&nbsp;</th>
																<th class="column-2">商品</th>
																<th class="column-3">ﾊﾞﾘｴｰｼｮﾝ</th>
																<th class="column-4 text-right">売上合計</th>
																<th class="column-5 text-right">粗利益</th>
																<th class="column-6 text-right">販売個数</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td class="text-center">
																	<span class="f-20">1</span>
																</td>
																<td class="d-flex align-items-center">
																	<p><img class="product-img" src="dist/img/1.jpg" alt="" /></p>
																	<p>そらのおとしものf ねんどろいど ニン フ (ノンスケそらのおとしもノンスケノ ンスケ…</p>
																</td>
																<td class="text-center">
																	<p><span class="badge first-hand">直接</span></p>
																	<p>ブラック</p>
																	<p>Mサイズ</p>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">¥862,200</span>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">¥362,200</span>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">232個</span>
																</td>
															</tr>
															<!--tr-->
															<tr>
																<td class="text-center">
																	<span class="f-20">2</span>
																</td>
																<td class="d-flex align-items-center">
																	<p><img class="product-img" src="dist/img/2.jpg" alt="" /></p>
																	<p>Good Smile No Game No Life: Shiro Nendoro</p>
																</td>
																<td class="text-center">
																	<p><span class="badge first-hand">直接</span></p>
																	<p>ブラック</p>
																	<p>Mサイズ</p>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">¥462,200</span>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">¥262,200</span>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">182個</span>
																</td>
															</tr>
															<!--tr-->
															<tr>
																<td class="text-center">
																	<span class="f-20">3</span>
																</td>
																<td class="d-flex align-items-center">
																	<p><img class="product-img" src="dist/img/3.jpg" alt="" /></p>
																	<p>そらのおとしものf ねんどろいど ニン フ (ノンスケそらのおとしもノンスケノ ンスケ…</p>
																</td>
																<td class="text-center">
																	<p><span class="badge first-hand">直接</span></p>
																	<p>ブラック</p>
																	<p>Mサイズ</p>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">¥162,200</span>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">¥62,200</span>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">334個</span>
																</td>
															</tr>
															<!--tr-->
															<tr>
																<td class="text-center">
																	<span class="f-20">4</span>
																</td>
																<td class="d-flex align-items-center">
																	<p><img class="product-img" src="dist/img/4.jpg" alt="" /></p>
																	<p>Good Smile No Game No Life: Shiro Nendoro</p>
																</td>
																<td class="text-center">
																	<p><span class="badge first-hand">直接</span></p>
																	<p>ブラック</p>
																	<p>Mサイズ</p>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">¥862,200</span>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">¥562,200</span>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">74個</span>
																</td>
															</tr>
															<!--tr-->
															<tr>
																<td class="text-center">
																	<span class="f-20">5</span>
																</td>
																<td class="d-flex align-items-center">
																	<p><img class="product-img" src="dist/img/5.jpg" alt="" /></p>
																	<p>そらのおとしものf ねんどろいど ニン フ (ノンスケそらのおとしもノンスケノ ンスケ…</p>
																</td>
																<td class="text-center">
																	<p><span class="badge first-hand">直接</span></p>
																	<p>ブラック</p>
																	<p>Mサイズ</p>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">¥62,200</span>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">¥32,200</span>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">423個</span>
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
											<div class="d-flex align-items-center justify-content-center h-100">
												<div class="chartWrapper">
													<canvas id="doughnut001" width="500"></canvas>
												</div>
											</div>
										</div>
										<!--div-->
									</div>
									<!--row-->
								</div>
								<div class="tab-pane fade" id="salesQtyRanking" role="tabpanel" aria-labelledby="salesQtyRanking-tab">
									<div class="row">
										<div class="col-lg-6 mb-2">
											<div class="data-table-group">
												<div class="table-responsive-lg">
													<table class="table table-report-ranking">
														<thead>
															<tr>
																<th class="column-1">&nbsp;</th>
																<th class="column-2">商品</th>
																<th class="column-3">ﾊﾞﾘｴｰｼｮﾝ</th>
																<th class="column-4 text-right">売上合計</th>
																<th class="column-5 text-right">粗利益</th>
																<th class="column-6 text-right">販売個数</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td class="text-center">
																	<span class="f-20">1</span>
																</td>
																<td class="d-flex align-items-center">
																	<p><img class="product-img" src="dist/img/1.jpg" alt="" /></p>
																	<p>そらのおとしものf ねんどろいど ニン フ (ノンスケそらのおとしもノンスケノ ンスケ…</p>
																</td>
																<td class="text-center">
																	<p><span class="badge first-hand">直接</span></p>
																	<p>ブラック</p>
																	<p>Mサイズ</p>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">¥862,200</span>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">¥362,200</span>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">232個</span>
																</td>
															</tr>
															<!--tr-->
															<tr>
																<td class="text-center">
																	<span class="f-20">2</span>
																</td>
																<td class="d-flex align-items-center">
																	<p><img class="product-img" src="dist/img/2.jpg" alt="" /></p>
																	<p>Good Smile No Game No Life: Shiro Nendoro</p>
																</td>
																<td class="text-center">
																	<p><span class="badge first-hand">直接</span></p>
																	<p>ブラック</p>
																	<p>Mサイズ</p>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">¥462,200</span>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">¥262,200</span>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">182個</span>
																</td>
															</tr>
															<!--tr-->
															<tr>
																<td class="text-center">
																	<span class="f-20">3</span>
																</td>
																<td class="d-flex align-items-center">
																	<p><img class="product-img" src="dist/img/3.jpg" alt="" /></p>
																	<p>そらのおとしものf ねんどろいど ニン フ (ノンスケそらのおとしもノンスケノ ンスケ…</p>
																</td>
																<td class="text-center">
																	<p><span class="badge first-hand">直接</span></p>
																	<p>ブラック</p>
																	<p>Mサイズ</p>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">¥162,200</span>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">¥62,200</span>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">334個</span>
																</td>
															</tr>
															<!--tr-->
															<tr>
																<td class="text-center">
																	<span class="f-20">4</span>
																</td>
																<td class="d-flex align-items-center">
																	<p><img class="product-img" src="dist/img/4.jpg" alt="" /></p>
																	<p>Good Smile No Game No Life: Shiro Nendoro</p>
																</td>
																<td class="text-center">
																	<p><span class="badge first-hand">直接</span></p>
																	<p>ブラック</p>
																	<p>Mサイズ</p>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">¥862,200</span>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">¥562,200</span>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">74個</span>
																</td>
															</tr>
															<!--tr-->
															<tr>
																<td class="text-center">
																	<span class="f-20">5</span>
																</td>
																<td class="d-flex align-items-center">
																	<p><img class="product-img" src="dist/img/5.jpg" alt="" /></p>
																	<p>そらのおとしものf ねんどろいど ニン フ (ノンスケそらのおとしもノンスケノ ンスケ…</p>
																</td>
																<td class="text-center">
																	<p><span class="badge first-hand">直接</span></p>
																	<p>ブラック</p>
																	<p>Mサイズ</p>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">¥62,200</span>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">¥32,200</span>
																</td>
																<td class="text-right">
																	<span class="f-12 font-weight-bold">423個</span>
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
											<div class="d-flex align-items-center justify-content-center h-100">
												<div class="chartWrapper">
													<canvas id="doughnut002" width="500"></canvas>
												</div>
											</div>
										</div>
										<!--div-->
									</div>
									<!--row-->
								</div>
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

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
	  e.preventDefault()
	  $('.sales-ranking-slider1').slick({
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
	})
</script>

<!--for chart-->
<script src="dist/js/Chart.min.js"></script>
<script src="dist/js/Chart.bundle.min.js"></script>
<script src="dist/js/utils.js"></script>

<script>
	// doughnut chart
		var randomScalingFactor = function() {
			return Math.round(Math.random() * 100);
		};

		var configDoughnutChart001 = {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [
						20.0,
						5.0,
						15.0,
						10.0,
						30.0,
						5.0,
						15.0,
					],
					backgroundColor: [
						window.chartColors.yellow,
						window.chartColors.red,
						window.chartColors.green,
						window.chartColors.white,
						window.chartColors.orange,
						window.chartColors.blue,
						window.chartColors.purple,
					],
					label: 'Dataset 1'
				}],
				labels: [
					'yellow',
					'red',
					'green',
					'white',
					'orange',
					'blue',
					'purple',
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
		// doughnut chart 001
			var doughnut001 = document.getElementById('doughnut001').getContext('2d');
			var doughnut002 = document.getElementById('doughnut002').getContext('2d');
			window.myDoughnut = new Chart(doughnut001, configDoughnutChart001);
			window.myDoughnut = new Chart(doughnut002, configDoughnutChart001);
	};
</script>
