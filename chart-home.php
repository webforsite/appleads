

<?php 
$pdo = new PDO("mysql:host=sql106.epizy.com; dbname=epiz_21528787_leads", "epiz_21528787", "012714");
$pdo->exec("set names utf8_general_ci"); 
$sql = "select * from bk_01 where empresa like 'net'";
$result = $pdo->query( $sql );
$rows = $result->fetchAll( PDO::FETCH_ASSOC );
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_OBJ); // Retorna um array de objetos

for($i = 0; $i < count($result); $i++){
$meta =  $result[$i]->leads;
}

?>

<!--
<span><?php echo "Projeção " . " " . "Média" . "  |". " " . $meta . " " . "leads". "/dia"; ?></span>

-->
<style> body {background: #2a2a2a; color: #fff; }
#chartdiv {
	width	: 100%;
	height	: 220px;
}	

</style>


<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/black.js"></script>
<div id="chartdiv" style="background: #2a2a2a; height: 220px"></div>	


<script>var chartData = generateChartData();
var chart = AmCharts.makeChart("chartdiv", {
    "type": "serial",
"hideCredits":true,
    "theme": "black",
    "marginRight": 80,
    "autoMarginOffset": 20,
    "marginTop": 7,
    "dataProvider": chartData,
    "valueAxes": [{
        "axisAlpha": 0.2,
        "dashLength": 1,
        "position": "left"
    }],
    "mouseWheelZoomEnabled": true,
    "graphs": [{
        "id": "g1",
        "balloonText": "[[value]]",
        "bullet": "round",
        "bulletBorderAlpha": 1,
        "bulletColor": "#FFFFFF",
        "hideBulletsCount": 50,
        "title": "red line",
        "valueField": "meta",
        "useLineColorForBulletBorder": true,
        "balloon":{
            "drop":true
        }
    }],
    "chartScrollbar": {
        "autoGridCount": true,
        "graph": "g1",
        "scrollbarHeight": 40
    },
    "chartCursor": {
       "limitToGraph":"g1"
    },
    "categoryField": "date",
    "categoryAxis": {
        "parseDates": true,
        "axisColor": "#DADADA",
        "dashLength": 1,
        "minorGridEnabled": true
    },
    "export": {
        "enabled": true
    }
});

chart.addListener("rendered", zoomChart);
zoomChart();

// this method is called when chart is first inited as we listen for "rendered" event
function zoomChart() {
    // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
    chart.zoomToIndexes(chartData.length - 40, chartData.length - 1);
}


function generateChartData() {
    var chartData = [];
    var firstDate = new Date();
    firstDate.setDate(firstDate.getDate() +1);
    var meta = 0;
    for (var i = 0; i < 20; i++) {
       
        var newDate = new Date(firstDate);
        newDate.setDate(newDate.getDate() + i);
        
        meta += Math.round((Math.random()<0.5?1:-1)*Math.random()*10) + <?php 
       $resultado =  $meta *50/100 * 2;
       echo $resultado; ?> ;

        chartData.push({
            date: newDate,
            meta: meta
        });
    }
    return chartData;
}</script>		

