
<style>
body .aws-absolute {
  margin-top: -197px;
  margin-left: -280px;
  position: absolute;
  top: 50%;
  left: 50%;
}

.aws-container {
  overflow: hidden;
  border-radius: 6px;
  font-family: "Open Sans";
  position: relative;
  margin: 0px auto;
  width: 560px;
  background-color: #4dae50;
  -moz-box-shadow: 1px 1px 0.5px 0.5px #e1e1e1;
  -webkit-box-shadow: 1px 1px 0.5px 0.5px #e1e1e1;
  box-shadow: 1px 1px 0.5px 0.5px #e1e1e1;
}
.aws-container .aws-content {
  padding: 32px;
}
.aws-container .aws-content nav {
  font-size: 16px;
  margin-bottom: 60px;
}
.aws-container .aws-content nav span {
  color: #87c98a;
  cursor: pointer;
  text-transform: uppercase;
}
.aws-container .aws-content nav span.aws-active {
  color: #f2f2f2;
}
.aws-container .aws-details {
  height: 100px;
  background-color: #fefefe;
  position: relative;
  overflow: hidden;
}
.aws-container .aws-details:after {
  content: " ";
  position: absolute;
  width: 1px;
  background-color: #e8e8e8;
  z-index: 1;
  right: 50%;
  top: 26px;
  bottom: 28px;
}
.aws-container .aws-details .aws-block-info {
  padding: 26px 15px 28px;
}
.aws-container .aws-details .aws-block-info h3 {
  margin: 0px 0px 5px;
  color: #4a4a4a;
}
.aws-container .aws-details .aws-block-info h3[data-status] {
  position: relative;
}
.aws-container .aws-details .aws-block-info h3[data-status]:before {
  content: " ";
  width: 0;
  height: 0;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  position: absolute;
  top: 8px;
}
.aws-container .aws-details .aws-block-info h3[data-status] span {
  padding-left: 22px;
}
.aws-container .aws-details .aws-block-info h3[data-status=up]:before {
  border-bottom: 8px solid #6caa32;
}
.aws-container .aws-details .aws-block-info h3[data-status=down]:before {
  border-top: 8px solid #b35d44;
}
.aws-container .aws-details .aws-block-info h5 {
  margin: 0px;
  color: #9d9c9c;
}
.aws-container .aws-tooltip {
  -moz-box-shadow: 1px 1px 0.5px 0.5px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 1px 1px 0.5px 0.5px rgba(0, 0, 0, 0.3);
  box-shadow: 1px 1px 0.5px 0.5px rgba(0, 0, 0, 0.3);
  position: absolute;
  z-index: 99;
  background-color: rgba(255, 255, 255, 0.8);
  padding: 9px;
  border-radius: 3px;
  text-align: center;
  width: 120px;
}
.aws-container .aws-tooltip.aws-for-file {
  width: 160px;
}
.aws-container .aws-tooltip:after {
  content: " ";
  width: 0;
  height: 0;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-top: 8px solid rgba(255, 255, 255, 0.8);
  position: absolute;
  left: 50%;
  margin-left: -6px;
  bottom: -8px;
}
.aws-container .aws-tooltip span {
  display: block;
}
.aws-container .aws-tooltip span:nth-child(1) {
  font-size: 11px !important;
}
.aws-container .aws-tooltip span:nth-child(2) {
  font-size: 13px !important;
}

.aws-author {
  position: fixed;
  bottom: 10px;
  right: 10px;
  color: dimgray;
  font-family: "Open Sans";
  font-size: 13px;
}
.aws-author:hover a:after {
  content: " ";
  position: absolute;
  left: 0;
  right: 0;
  bottom: -4px;
  height: 1px;
  background-color: #d8d8d8;
}
.aws-author a {
  text-decoration: none;
  color: inherit;
  position: relative;
}
.aws-author .fa {
  color: #db3131;
}

</style>



<?php 
$crud=new crud;
$end_date = date('Y-m-d', strtotime('-8 days'));
$start_date =  date('Y-m-d', strtotime('-14 days'));
$currentWeekStart =  date('Y-m-d', strtotime('-7 days'));
$currentWeekEnd =  date('Y-m-d');
$sql1="select COUNT(*) AS total from visitors where date BETWEEN '$start_date' AND '$end_date'";
$result1=$crud->getData($sql1);
$prevTotal=$result1[0]['total'];

$sql2="select COUNT(*) AS total from visitors where date BETWEEN '$currentWeekStart' AND '$currentWeekEnd'";
$result2=$crud->getData($sql2);
$endTotal=$result2[0]['total'];

$sql="select COUNT(*) AS total from visitors";
$result=$crud->getData($sql);
$total=$result[0]['total'];

$sql="select COUNT(*) AS totalVendors from users";
$result=$crud->getData($sql);
$totalVendors = 0;

$sql="select COUNT(*) AS totalProducts from products";
$result=$crud->getData($sql);
$totalProducts = $result[0]['totalProducts'];

$sql="select COUNT(*) AS totalCategories from categories";
$result=$crud->getData($sql);
$totalCategories = $result[0]['totalCategories'];


if($prevTotal >0){
	$percentageDifference = ((($endTotal - $prevTotal) / $prevTotal) * 100);
}else{
	$percentageDifference = 0;
}
?>
<div class="container">
    <div class="wrapper">
        <div class="callouts">
            <ul>
                <li>
                    <div class="last_diff">
                        <span><?php echo ceil($percentageDifference); ?>%</span>
                        <p>From Previous Period</p>
                    </div>
                    <div class="info">
                        <p>
                            Customers on site
                            <span><?php echo $total ;?></span>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="last_diff">
                        <span>+0%</span>
                        <p>From Previous Period</p>
                    </div>
                    <div class="info">
                        <p>
                            Orders on site
                            <span><?php echo $totalVendors ;?></span>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="last_diff">
                        <span>+0%</span>
                        <p>From Previous Period</p>
                    </div>
                    <div class="info">
                        <p>
                            Products on site
                            <span><?php echo $totalProducts ;?></span>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="last_diff">
                        <span>+0%</span>
                        <p>From Previous Period</p>
                    </div>
                    <div class="info">
                        <p>
                            Categories on site
                            <span><?php echo $totalCategories ;?></span>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="aws-container">
  <div class="aws-content">
    <nav>
      <div class="col-md-6 col-xs-6 col-sm-6">
        <span data-btn-chart="webVisit" class="aws-active">
          Web Visit
        </span>
      </div>
     
    </nav>
    <div class="aws-chart">
      <canvas height="100"></canvas>
    </div>
  </div>
  
  <div class="clearfix"></div>
  
</div>

	<?php
	$m= date("m");

$de= date("d");
$y= date("Y");
 $p= array();
 for($i=0; $i<=6; $i++){

$datefield= date('Y-m-d',mktime(0,0,0,$m,($de-$i),$y)); 
$date1= date('Y-m-d h:i:s',mktime(0,0,0,$m,($de-$i),$y)); 
$datetime = new DateTime($date1);
$date = $datetime->format('Y-m-d\Th:i:s.000\Z');

$sql="select COUNT(date) as count,date from visitors  where date='$datefield'";
$result=$crud->getData($sql);
if(!empty($result)){
$count=$result[0]['count'];
$p[]=array(
'date'=>$date,
'value'=>$count
);
         
	
	}
	}
	
	?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.2/underscore-min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/accounting.js/0.4.1/accounting.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script>
	$(document).ready(function(){

  var ChartBuilder = function () {
    var self = this, 
        chartData, chartDataInitial, chartSchema, chartContext, chartConfig, chartLine,
        updateBlockInfo;

    chartData = {
      webVisit: {
        title: 'Web Visits',
        prevTotalDataPoints: 3000,
        dataPoints:<?php echo json_encode ($p); ?>
      }
    };

    _.each(chartData, function (e) {
      e.value = _.reduce(e.dataPoints, function (p, f) { return p + f.value; }, 0);
      e.percentage = (e.value - e.prevTotalDataPoints) / e.prevTotalDataPoints * 100;
      e.status = (e.value > e.prevTotalDataPoints) ? 'up' : 'down';
    });

    chartDataInitial = chartData.webVisit;

    chartSchema = {
      labels: _.map(chartDataInitial.dataPoints, function (e, i) {
        return moment(e.date).format('D. MMM');
      }),
      datasets: [{
        fillColor: '#3d9e40',
        strokeColor: '#fefefe',
        pointColor: 'transparent',
        pointStrokeColor: 'transparent',
        pointHighlightFill: '#fefefe',
        pointHighlightStroke: 'rgba(255,255,255,0.3)',
        data: _.map(chartDataInitial.dataPoints, function (e) {
          return e.value;
        }),
      }]
    };

    chartConfig = {
      responsive: true,
      animationSteps: 30,
      scaleFontColor: '#fefefe',
      datasetStrokeWidth: 6,
      pointDotRadius: 6,
      pointDotStrokeWidth: 6,
      scaleShowVerticalLines: false,
      scaleLineColor: '#9ec3b8',
      scaleGridLineColor: "#54b858",
      scaleGridLineWidth: 1,
      customTooltips: function(tooltip) {
        var tooltipEl = $('.aws-tooltip'),
            whichChart = $("[data-btn-chart].aws-active").attr('data-btn-chart'),
            currentData, text;

        if (!tooltip) {
            tooltipEl.css({ opacity: 0 });
            return;
        }

        currentData = _.find(chartData[whichChart].dataPoints, function (e) {
          return moment(e.date).format('D. MMM') == $.trim(tooltip.text.split(':')[0]);
        });

        tooltipEl.removeClass('above below aws-for-file');
        tooltipEl.addClass(tooltip.yAlign);

        text = accounting.formatNumber(currentData.value);

        if (chartData[whichChart].title.toLowerCase().indexOf('web') == -1)
          tooltipEl.addClass('aws-for-file');

        tooltipEl.html([
          '<span>' + moment(currentData.date).format("ddd, MMM DD, YYYY") + '</span>',
          '<span>' + chartData[whichChart].title + ': <b>' + text + '</b></span>'
        ].join(''));

        tooltipEl.css({
            opacity: 1,
            left: tooltip.chart.canvas.offsetLeft + tooltip.x - (parseInt(tooltipEl.css('width').replace('px', ''), 0) / 2.0) + 'px',
            top: tooltip.chart.canvas.offsetTop + tooltip.y - 68 + 'px',
        });
      }
    };

    chartContext = $('.aws-chart canvas')[0].getContext('2d');

    updateBlockInfo = function (whichChartData, isOnInit) {
      isOnInit = (typeof isOnInit === String(undefined)) ? false : isOnInit;

      var $block1After, $block1Before,
          $block2After, $block2Before;

      $block1Before = $block1After = $('.aws-details .col-md-6:eq(0) .aws-block-info:eq(0)');
      $block2Before = $block2After = $('.aws-details .col-md-6:eq(1) .aws-block-info:eq(0)');

      if (!isOnInit) {
        $block1After.clone().appendTo($block1After.parent());
        $block2After.clone().appendTo($block2After.parent());

        $block1After = $block1After.next();
        $block2After = $block2After.next();
      }

      $block1After.find('h3 span').html([
        accounting.formatNumber(whichChartData.value), 
        whichChartData.title.split(' ')[1]
      ].join(' '));

      $block2After.find('h3 span').html(
        accounting.formatNumber(whichChartData.percentage, 2)
      );

      if (whichChartData.hasOwnProperty('status'))
        $block2After.find('h3').attr('data-status', whichChartData.status);

      if (!isOnInit) {
        $block1Before.animate({
          marginTop: -100
        }, 300, 'easeOutCubic', function () {
          $block1Before.remove();
        });

        $block2Before.animate({
          marginTop: -100
        }, 300, 'easeOutCubic', function () {
          $block2Before.remove();
        });
      }
    };
    
    self.run = function () {
      chartLine = new Chart(chartContext).Line(chartSchema, chartConfig);
      updateBlockInfo(chartDataInitial, true);
    };

    self.registerEvent = function () {
      $('[data-btn-chart]').on('click', function () {
        var $self = $(this), 
            dataBtnChart = $self.attr('data-btn-chart'),
            whichChartData = chartData[dataBtnChart],
            targetDataPoints = whichChartData.dataPoints,
            points = chartLine.datasets[0].points;

        if ($self.hasClass('aws-active'))
          return;

        $self.closest('nav').find('.aws-active').removeClass('aws-active');
        $self.addClass('aws-active');

        for (var i in points) {
          points[i].value = targetDataPoints[i].value;
        }

        chartLine.update();
        updateBlockInfo(whichChartData);
      });
    };
  };

  $(function () {
    var chartBuilder = new ChartBuilder();
    chartBuilder.run();
    chartBuilder.registerEvent();
  });
}());
	</script>