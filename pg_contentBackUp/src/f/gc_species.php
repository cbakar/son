	<div class='row'>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Total', 'All Species'],
          ['089-LKC',     11],
          ['091-WHT',     8],
          ['094-BLT',  45]
        ]);

        var options = {
          title: 'Species',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

    <div id="piechart_3d" style="width: 561px; height: 350px;"></div>
	</div>