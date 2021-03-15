<div class="inner-page-wrap">
	<div class="purchase-page w-100">
		<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
			<h3 class="page-title mb-1">
				<span>在庫変動の詳細</span>
			</h3>
		</div>
		<!--div-->

		<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
			<div class="left-data-col d-flex flex-wrap">
				<div class="total-data">
					<p class="p-label f-14">在庫合計</p>
					<p class="p-price f-15">1,192個</p>
					<p class="p-percentage clr-blue f-12">+3.2%</p>
				</div>
				<div class="total-data">
					<p class="p-label f-14">在庫総額</p>
					<p class="p-price f-15">¥421,972</p>
					<p class="p-percentage clr-blue f-12">+3.2%</p>
				</div>
			</div>
			<!--left-col-->
			<div class="right-dropdown flex-wrap d-flex ml-auto">
				<div class="mb-2">
					<a class="nav-link btn btn-sm dropdown-toggle bg-white br-25 mr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						期間：過去30⽇
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="#">Option</a>
						<a class="dropdown-item" href="#">Option</a>
						<a class="dropdown-item" href="#">Option</a>
					</div>
				</div>
				<!--div-->
				<div class="mb-2">
					<a class="nav-link btn btn-sm dropdown-toggle bg-white br-25 mr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						倉庫：全て
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="#">Option</a>
						<a class="dropdown-item" href="#">Option</a>
						<a class="dropdown-item" href="#">Option</a>
					</div>
				</div>
				<!--div-->
			</div>
			<!--right-dropdown-->
		</div>
		<!--d-flex flex-wrap justify-content-between align-items-center mb-3-->

		<div class="graph-wrapper mb-3">
			<div class="bg-white">
				<div class="chartWrapper">
					<canvas id="lineStyleChart001" width="800"></canvas>
				</div>
			</div>
		</div>

		<div class="table-wrapper">
			<div class="card mb-3">
				<div class="card-body">
					<div class="table-responsive-lg">
						<table class="table purchase-selected-modal-6">
							<thead>
								<tr>
									<th class="column-1">⽇時</th>
									<th class="column-2">発注個数</th>
									<th class="column-3">発注⾦額</th>
									<th class="column-4">返品個数</th>
									<th class="column-5">返品⾦額</th>
									<th class="column-6">受注個数</th>
									<th class="column-7">原価合計</th>
									<th class="column-8">在庫合計</th>
									<th class="column-9">在庫総額</th>
									<th class="column-10">売上</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-center">
										<p>2019/11/30</p>
										<p>15:00</p>
									</td>
									<td class="text-center">
										<p>43</p>
									</td>
									<td class="text-center">
										<p>¥1,972</p>
									</td>
									<td class="text-center">
										<p>3</p>
									</td>
									<td class="text-center">
										<p>¥1,972</p>
									</td>
									<td class="text-center">
										<p>3</p>
									</td>
									<td class="text-center">
										<p>¥1,972</p>
									</td>
									<td class="text-center">
										<p>¥13.255</p>
									</td>
									<td class="text-center">
										<p>¥631,972</p>
										<p class="clr-blue">+2.8%</p>
									</td>
									<td class="text-center">
										<p>¥221,972</p>
										<p class="clr-blue">+2.8%</p>
									</td>
								</tr>
								<!--tr-->
								<tr>
									<td class="text-center">
										<p>2019/11/30</p>
										<p>15:00</p>
									</td>
									<td class="text-center">
										<p>3</p>
									</td>
									<td class="text-center">
										<p>¥61,972</p>
									</td>
									<td class="text-center">
										<p>37</p>
									</td>
									<td class="text-center">
										<p>¥61,972</p>
									</td>
									<td class="text-center">
										<p>15</p>
									</td>
									<td class="text-center">
										<p>¥61,972</p>
									</td>
									<td class="text-center">
										<p>¥53,255</p>
									</td>
									<td class="text-center">
										<p>¥761,972</p>
										<p class="clr-blue">+2.8%</p>
									</td>
									<td class="text-center">
										<p>¥691,972</p>
										<p class="clr-blue">+2.8%</p>
									</td>
								</tr>
								<!--tr-->
								<tr>
									<td class="text-center">
										<p>2019/11/30</p>
										<p>15:00</p>
									</td>
									<td class="text-center">
										<p>3</p>
									</td>
									<td class="text-center">
										<p>¥21,972</p>
									</td>
									<td class="text-center">
										<p>3</p>
									</td>
									<td class="text-center">
										<p>¥21,972</p>
									</td>
									<td class="text-center">
										<p>3</p>
									</td>
									<td class="text-center">
										<p>¥21,972</p>
									</td>
									<td class="text-center">
										<p>¥53,255</p>
									</td>
									<td class="text-center">
										<p>¥1,661,972</p>
										<p class="clr-blue">+2.8%</p>
									</td>
									<td class="text-center">
										<p>¥156,972</p>
										<p class="clr-blue">+2.8%</p>
									</td>
								</tr>
								<!--tr-->
							</tbody>
							<!--tbody-->
						</table>
					</div>
				</div>
				<!--card-body-->
			</div>
			<!--card-->
		</div>
		<!--table-wrapper-->

	</div>
	<!--purchase-page w-100-->
</div>
<!--inner-page-wrap-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js" integrity="sha512-SuxO9djzjML6b9w9/I07IWnLnQhgyYVSpHZx0JV97kGBfTIsUYlWflyuW4ypnvhBrslz1yJ3R+S14fdCWmSmSA==" crossorigin="anonymous"></script>
<script src="dist/js/utils.js"></script>


<script>

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

	//window.onload
	window.onload = function() {

		// line Style chart 001
			var lineStyleChart001 = document.getElementById('lineStyleChart001').getContext('2d');
			window.myLine = new Chart(lineStyleChart001, configStyleLine);
	};
</script>



