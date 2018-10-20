<?php
function fetch_data($conn)
{
	$output= "";
	$q="SELECT empName,position,salary,age,sex FROM employee";
	$r=mysqli_query($conn,$q);
	$numrows=mysqli_num_rows($r);
	if($numrows>0)
	{
		while($row = mysqli_fetch_array($r))
		{
			$output.='
				<tr>
				<td>'.$row['empName'].'</td>
				<td>'.$row['position'].'</td>
				<td>'.$row['salary'].'</td>
				<td>'.$row['age'].'</td>
				<td>'.$row['sex'].'</td>		
				</tr>';
		}
	}
	else
	{
		$output.='
				<tr>
				<td colspan="5" align="center">No Records Found</td>
				</tr>';
	}
	return $output;
}

function get_count($sql,$status)
{
	$q = "SELECT COUNT(sex) as co FROM employee where sex='$status'";
	//echo $q; exit;
	$pie_r = mysqli_query($sql,$q);
	//echo $pie_r; exit;
	$data = mysqli_fetch_object($pie_r);
	$count = $data->co;
	return $count;
}
?>