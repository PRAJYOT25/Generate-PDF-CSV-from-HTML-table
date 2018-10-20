<?php
	include("include/common.php");
	session_start();
	date_default_timezone_set("Asia/Kolkata");
	$timeDate=date("Y-m-d h:i:sa");
	header('Content-Type:text/csv; charset=utf-8');
	header('Content-Disposition:attachment; filename=Result.csv');
	$output=fopen("php://output","w");

	fputcsv($output,array('Employee Name','Position','Salary','Age','Sex'));
	$query="SELECT empName,position,salary,age,sex FROM employee";
	$result=mysqli_query($conn,$query);
	while($row=mysqli_fetch_assoc($result))
	{
		fputcsv($output,$row);
	}
	fclose($output);

?>