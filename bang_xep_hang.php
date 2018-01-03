<?php
include("models/m_index.php");
$m_index = new M_index();
$xuat = $m_index->xepHangBaiHat();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript">

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
      ['Năm', <?php foreach ($xuat as $x) { ?><?php echo "'".$x->tenBaiHat."',"?><?php } ?>],
      ['2017', <?php foreach ($xuat as $x) { ?><?php echo $x->luotNghe.","?><?php } ?>],
      ]);

      var options = {
        title : 'Bảng xếp hạng',
        vAxis: {title: 'Lượt Nghe'},
        hAxis: {title: 'NĂm'},
        seriesType: 'bars',
        series: {5: {type: 'line'}}
      };

    var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
    chart.draw(data, options);
    }
    </script>
    </head>
    <body>
      <div id="chart_div" style="width: 900px; height: 500px;"></div>
    </body>
</html>