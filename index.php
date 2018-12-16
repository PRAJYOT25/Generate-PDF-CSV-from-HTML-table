<?php
include_once('include/common.php');

//pie chart
$male = get_count($conn,'male');
$female = get_count($conn,'female');

?>
<!DOCTYPE html>
<html lang="en">
<?php include('header.php');?>
<body>
<h4 class="text-center pt-2">Export Data to PDF & Excel</h4>
<div class="container">
	<div class="row pb-2">
		<div class="offset-sm-8 col-sm-4">
			<button type="button" class="btn btn-primary">
			<a href="fpdf.php">Generate PDF</a></button>
			<span class="p-2"></span>
			<button type="button" class="btn btn-primary">
			<a href="excel.php">Export to Excel</a>
			</button>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-9">
			<table id="example" class="table table-striped table-responsive-sm table-bordered">
				<thead>
					<tr>
						<th>Name</th>
						<th>Position</th>
						<th>Salary</th>
						<th>Age</th>
						<th>Sex</th>
						</tr>
				</thead>
				<tbody>		
				<?php echo fetch_data($conn); ?>
				</tbody>
			</table>
		</div>
		<div class="col-sm-3">
			<div id="piechart"></div>
		</div>
	</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<script>
	$(document).ready(function() {
    $('#example').DataTable();
      } );
	</script>
	</body>
</html>  
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);
	var female=<?php echo $female;?>;
	var male=<?php echo $male;?>;
	function drawChart() {
	  var data = google.visualization.arrayToDataTable([
	  ['Task', 'Result'],
	  ['Male', male],
	  ['Female', female],
	]);
			  var options = {
			  pieStartAngle: 0,
              'is3D':true,
			  width:300,
			  height:250,
			  slices: {
				0: { color: 'Green' },
				1: { color: '#ff0000' },
			  },
			};
	  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
	  chart.draw(data, options);
	}
	</script> 

