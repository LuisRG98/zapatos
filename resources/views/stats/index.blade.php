@extends('layout')

@section('content')
<div class="container">
	<div style="overflow-x:auto;" class=" bg-white rounded mx-auto mb-3">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <style type="text/css">
     .box{
      width:800px;
      margin:0 auto;
     }
    </style>
    <script type="text/javascript">
     var analytics = <?php echo $clase; ?>

     google.charts.load('current', {'packages':['corechart']});

     google.charts.setOnLoadCallback(drawChart);

     function drawChart()
     {
      var data = google.visualization.arrayToDataTable(analytics);
      var options = {
       title : 'Porcentajes de Embarcaciones según clase/tipo'
      };
      var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
      chart.draw(data, options);
     }
    </script>

    <div class="container">
     <h1  class="display-5">Estadísticas</h1><hr>

     <div class="panel panel-default">
      <div class="panel-heading">
       <h3 class="panel-title">Porcentajes</h3>
      </div>
      <div class="panel-body" align="center">
       <div id="pie_chart" style="width:750px; height:450px;">

       </div>
      </div>
     </div>

    </div>


	</div>
</div>
@endsection


