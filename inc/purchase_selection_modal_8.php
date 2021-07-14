<div class="inner-page-wrap">
	<div class="purchase-page w-100">
		<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
			<h3 class="page-title mb-1">
				<span>&nbsp;</span>
			</h3>

			<div class="search-box">
				<form class="form-inline">
					<div class="input-group align-items-center">
						<input type="text" class="form-control" placeholder="">
						<button type="search" class="btn-search">検索</button>
						<span class="clearable"><img src="dist/img/icons/icon-close.png" alt="" /></span>
					</div>
				</form>
			</div>
			<!--search box-->
		</div>
		<!--div-->

		<div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
			<div class="right-dropdown flex-wrap d-flex ml-auto">
				<div class="mb-2">
					<a class="nav-link dropdown-warehouse btn btn-sm dropdown-toggle bg-white br-25 mr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="demo-non-form">
						<!-- <input type="text" id="txtDateRange" name="txtDateRange" class="inputField shortInputField dateRangeField" placeholder="期間：今⽉" data-from-field="txtDateFrom" data-to-field="txtDateTo" /> -->
						<input type="text" id="txtDateRange" name="txtDateRange" class="inputField shortInputField dateRangeField" placeholder="期間：今⽉"  />
					</a>
					<div class="dropdown-menu dropdown-menu-right" style="width: 500px; max-width: 700px">
						<div class="d-flex flex-wrap registerd-tags">
							<div class="archive">
								<ul>
									<li class="active"><a href="">カレンダーで指定する</a></li>
									<li><a href="">本日</a></li>
									<li><a href="">今月</a></li>
									<li><a href="">先月</a></li>
									<li><a href="">直近1週間</a></li>
									<li><a href="">直近2週間</a></li>
									<li><a href="">直近30日</a></li>
									<li><a href="">直近60日</a></li>
									<li><a href="">直近90日</a></li>
									<li><a href="">直近1年</a></li>
									<li><a href="">2020年</a></li>
									<li><a href="">2019年</a></li>
								</ul>
							</div>
							<div class="calendar">
								<div id="calendar" style="float: left; width: 100%"></div>
							</div>
						</div>
						<div class="button-ok">
							<a class="btn btn-dark br-25" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								OK
							</a>
						</div>
					</div>
				</div>
				<div class="mb-2">
					<a class="nav-link dropdown-warehouse btn btn-sm dropdown-toggle bg-white br-25 mr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="min-width: 150px; text-align: right;">
						&nbsp;
					</a>
				</div>
				<div class="mb-2">
					<a class="nav-link dropdown-warehouse btn btn-sm dropdown-toggle bg-white br-25 mr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="min-width: 150px; text-align: right;">
						&nbsp;
					</a>
				</div>
			</div>
		</div>

		<div class="bg-white br-25">
			<p style="min-height: 300px;"></p>
		</div>

	</div>
	<!--purchase-page w-100-->
</div>
<!--inner-page-wrap-->


<!-- [START] script for date range picker-->
<script src="dist/js/jquery-ui.min.js"></script>
<script type="text/javascript">
	(function($) {
	    function compareDates(startDate, endDate, format) {
	        var temp, dateStart, dateEnd;
	        try {
	            dateStart = $.datepicker.parseDate(format, startDate);
	            dateEnd = $.datepicker.parseDate(format, endDate);
	            if (dateEnd < dateStart) {
	                temp = startDate;
	                startDate = endDate;
	                endDate = temp;
	            }
	        } catch (ex) {}
	        return {
	            start: startDate,
	            end: endDate
	        };
	    }

	    $.fn.dateRangePicker = function(options) {
	        options = $.extend({
	            "changeMonth": false,
	            "changeYear": false,
	            "numberOfMonths": 1,
	            "rangeSeparator": " - ",
	            "useHiddenAltFields": false
	        }, options || {});

	        var myDateRangeTarget = $(this);
	        var onSelect = options.onSelect || $.noop;
	        var onClose = options.onClose || $.noop;
	        var beforeShow = options.beforeShow || $.noop;
	        var beforeShowDay = options.beforeShowDay;
	        var lastDateRange;

	        function storePreviousDateRange(dateText, dateFormat) {
	            var start, end;
	            dateText = dateText.split(options.rangeSeparator);
	            if (dateText.length > 0) {
	                start = $.datepicker.parseDate(dateFormat, dateText[0]);
	                if (dateText.length > 1) {
	                    end = $.datepicker.parseDate(dateFormat, dateText[1]);
	                }
	                lastDateRange = {
	                    start: start,
	                    end: end
	                };
	            } else {
	                lastDateRange = null;
	            }
	        }

	        options.beforeShow = function(input, inst) {
	            var dateFormat = myDateRangeTarget.datepicker("option", "dateFormat");
	            storePreviousDateRange($(input).val(), dateFormat);
	            beforeShow.apply(myDateRangeTarget, arguments);
	        };

	        options.beforeShowDay = function(date) {
	            var out = [true, ""],
	                extraOut;
	            if (lastDateRange && lastDateRange.start <= date) {
	                if (lastDateRange.end && date <= lastDateRange.end) {
	                    out[1] = "ui-datepicker-range";
	                }
	            }

	            if (beforeShowDay) {
	                extraOut = beforeShowDay.apply(myDateRangeTarget, arguments);
	                out[0] = out[0] && extraOut[0];
	                out[1] = out[1] + " " + extraOut[1];
	                out[2] = extraOut[2];
	            }
	            return out;
	        };

	        options.onSelect = function(dateText, inst) {
	            var textStart;
	            if (!inst.rangeStart) {
	                inst.inline = true;
	                inst.rangeStart = dateText;
	            } else {
	                inst.inline = false;
	                textStart = inst.rangeStart;
	                if (textStart !== dateText) {
	                    var dateFormat = myDateRangeTarget.datepicker("option", "dateFormat");
	                    var dateRange = compareDates(textStart, dateText, dateFormat);
	                    myDateRangeTarget.val(dateRange.start + options.rangeSeparator + dateRange.end);
	                    inst.rangeStart = null;
	                    if (options.useHiddenAltFields) {
	                        var myToField = myDateRangeTarget.attr("data-to-field");
	                        var myFromField = myDateRangeTarget.attr("data-from-field");
	                        $("#" + myFromField).val(dateRange.start);
	                        $("#" + myToField).val(dateRange.end);
	                    }
	                }
	            }
	            onSelect.apply(myDateRangeTarget, arguments);
	        };

	        options.onClose = function(dateText, inst) {
	            inst.rangeStart = null;
	            inst.inline = false;
	            onClose.apply(myDateRangeTarget, arguments);
	        };

	        return this.each(function() {
	            if (myDateRangeTarget.is("input")) {
	                myDateRangeTarget.datepicker(options);
	            }
	            myDateRangeTarget.wrap("<div class=\"dateRangeWrapper\"></div>");
	        });
	    };
	}(jQuery));

	$(document).ready(function() {
	    // $("#txtDateRange").dateRangePicker({
	    //     showOn: "focus",
	    //     rangeSeparator: " to ",
	    //     dateFormat: "yy-mm-dd",
	    //     useHiddenAltFields: true,
	    //     constrainInput: true
	    // });

		$('#calendar').datepicker({
			numberOfMonths: 2
		});
		// $('#calendar2').datepicker({
		// 	format: 'L',
		// 	inline: true,
		// 	defaultDate: moment().add(1, 'months'));
		// });
		// $("#calendar").on("update.datetimepicker", function (e) {
		// 	e.viewDate.add(1, 'months');
		// 	$('#calendar2').datetimepicker('date', e.viewDate);
		// });
	});
</script>
<!-- [END] script for date range picker-->