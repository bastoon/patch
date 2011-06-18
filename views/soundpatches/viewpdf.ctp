<?php
//print_r($soundpatch);
App::import('Vendor','xtcpdf'); 
$tcpdf = new XTCPDF();
	$textfont = 'freesans'; // looks better, finer, and more condensed than 'dejavusans'
	$tcpdf->SetAuthor("A service from Wethli Network http://www.weth.li");
	$tcpdf->SetAutoPageBreak( false );
	$tcpdf->xfootertext = 'A service from Wethli\'s Network http://www.weth.li. All rights reserved.';

// add a page (required with recent versions of tcpdf)
	$tcpdf->AddPage();
	$tcpdf->SetLineWidth(0.3);

// Title
    $tcpdf->SetFillColor(0, 61, 76);
	$tcpdf->SetTextColor(255, 255, 255);
	$tcpdf->SetFont($textfont,'B',20);
	$tcpdf->Cell(0,14, $soundpatch['User']['name'], 0,1,'L',1);
	$tcpdf->SetFont($textfont,'B',15);
	$tcpdf->Cell(0,8, $soundpatch['Soundpatch']['title'], 0,1,'L',1);
	$tcpdf->Ln();

// Created/Modified dates
    $tcpdf->SetTextColor(0, 0, 0);
	$tcpdf->SetFont($textfont,'',6);
	$create = $soundpatch['Soundpatch']['created'];
	$tcpdf->Cell(40, 5, '[Created] : '.$create, 1, 'L', 1, 0, '', '', true);
    $tcpdf->Ln();

// Array - title

    $w = array(10, 30, 45, 30, 25, 25, 25);
    $tcpdf->SetFillColor(244, 244, 244);
    $tcpdf->SetDrawColor(128, 0, 0);
    $tcpdf->SetFont('', 'B','8');
        
	$header=array("Piste","Musicien","Instrument","Micro","Insert","Effet","Pied");
    $num_headers = count($header);
    for($i = 0; $i < $num_headers; ++$i) {
        $tcpdf->Cell($w[$i], 5, $header[$i], 1, 0, 'C', 1, 1);
    }
    $tcpdf->Ln();

// Array - Data
    // Color and font restoration
    $tcpdf->SetFillColor(244, 244, 244);
    $tcpdf->SetTextColor(0);
    $tcpdf->SetFont('','','8');	
    
    $fill = 0;
    foreach($soundpatch['Track'] as $row) {
        $tcpdf->Cell($w[0], 5, $row['rank'], 'LR', 0, 'C', $fill);
        $tcpdf->Cell($w[1], 5, $row['Contact']['name'], 'LR', 0, 'L', $fill);
        $tcpdf->Cell($w[2], 5, $row['Instrument']['title'], 'LR', 0, 'L', $fill);
        $tcpdf->Cell($w[3], 5, $row['Micro']['title'], 'LR', 0, 'C', $fill);
        $tcpdf->Cell($w[4], 5, $row['Teffect']['title'], 'LR', 0, 'C', $fill);
        $tcpdf->Cell($w[5], 5, $row['Tinsert']['title'], 'LR', 0, 'C', $fill);
        $tcpdf->Cell($w[6], 5, $row['Stand']['title'], 'LR', 0, 'C', $fill);
        $tcpdf->Ln();
        $fill=!$fill;
    }
    $tcpdf->Cell(array_sum($w), 0, '', 'T');
    $tcpdf->Ln();

echo $tcpdf->Output('filename.pdf', 'D');
?> 