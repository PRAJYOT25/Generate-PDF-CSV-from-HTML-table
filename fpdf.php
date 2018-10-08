<?php
	include("include/common.php");
	require_once('tcpdf/tcpdf.php');

	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('');
	$pdf->SetTitle('PDF');
	$pdf->SetSubject('TCPDF');
	$pdf->SetKeywords('PDF');

	$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.'', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
	$pdf->setFooterData(array(0,64,0), array(0,64,128));

	$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
	$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

	$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
	$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

	$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
	if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
		require_once(dirname(__FILE__).'/lang/eng.php');
		$pdf->setLanguageArray($l);
	}
	$pdf->setFontSubsetting(true);
	$pdf->SetFont('dejavusans', '', 14, '', true);
	$pdf->AddPage();
	$xc = 40;
		$yc = 80;
		$r = 30;		
		$pass = get_count($conn,'male');
		$failure = get_count($conn,'female');
		$total=$pass+$failure;
		
		$greenXc = 90;
		$greenYc = 70;
		$greenR=2;
		$pdf->SetTextColor(0,0,0);

		$redXc=90;
		$redYc=75;
		$redR=2;
		$passing_percentage=round((($pass/$total)*100),2);
		$failing_percentage=100-$passing_percentage;
		if($total!=0)
		{
			$passPercentage=($pass/$total)*360;
			$pdf->SetFillColor(0,128 , 0);
			$pdf->PieSector($greenXc, $greenYc, $greenR, 0, 360, 'FD', false, 0, 2);
			$pdf->Text(95,67,$passing_percentage."%");
			$pdf->Text(115, 67, 'Male');
			
			$pdf->SetFillColor(255,0 , 0);		
			$pdf->PieSector($redXc, $redYc, $redR, 0, 360, 'FD', false, 0, 2);
			$pdf->Text(95,72,$failing_percentage."%");		
			$pdf->Text(115, 72, 'Female');
			
			$pdf->SetFillColor(0,128 , 0);
			$pdf->PieSector($xc, $yc, $r, 90, 90+$passPercentage, 'FD', false, 0, 2);

			$pdf->SetFillColor(255, 0, 0);
			$pdf->PieSector($xc, $yc, $r, 90+$passPercentage, 91, 'FD', false, 0, 2);
		}
	$content = '';  
	$content .= '
	<br><br><br><br><br><br><br><br><br> 
				<h3>Test case result</h3><br /><br />  
				<table border="1" cellspacing="0" cellpadding="5">  
				<tr>  
				<th width="25%">Name</th>  
				<th width="40%">Position</th>  
				<th width="15%">Salary</th>  
				<th width="8%">Age</th>  
				<th width="12%">Sex</th> 
				</tr>  
				';  
	$content .= fetch_data($conn);  
	$content .= '</table>';  
	$pdf->writeHTML($content);  

		//$obj_pdf->Text(105, 65, 'BLUE');
		// $obj_pdf->Text(155, 35, 'GREEN');
		// $obj_pdf->Text(160, 55, 'RED');

		$pdf->Output('sample.pdf', 'I');
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));
$pdf->Output('example_001.pdf', 'I');
?>