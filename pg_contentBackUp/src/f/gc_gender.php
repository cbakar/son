

	<div class='row' style="background-color: white;">
	    <script type='text/javascript' src='https://www.google.com/jsapi'></script>
	    <script type='text/javascript'>
	      google.load('visualization', '1', {packages:['corechart']});
	      google.setOnLoadCallback(drawChart);
	      function drawChart() {
	        var data = google.visualization.arrayToDataTable([
	          ['Year', 'Male', 'Female', 'Not Entered'],
	          ['2004',  1000,      400,		200],
	          ['2005',  1170,      460, 		120],
	          ['2006',  660,       1120, 		220],
	          ['2007',  1030,      540, 		45]
	        ]);
	
	        var options = {
	          title: 'Gender Records',
	          hAxis: {title: 'Year', titleTextStyle: {color: 'black'} }

	        };
	
	        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
	        chart.draw(data, options);
	      }
	    </script>
	    <div id='chart_div' style='width: 561px; height: 350px;'></div>
	</div>	
