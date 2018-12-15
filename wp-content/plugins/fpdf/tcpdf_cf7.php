<?php
class CREATE_FPDFCF7
{
function CREATE_FPDFCF7Fn($name,$address,$city,$postcode,$phone,$savepath)
{
// include the main TCPDF library
require_once('config/tcpdf_config_alt.php');
require_once('tcpdf.php');
// create new pdf document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Admin');
$pdf->SetTitle('Contact Form 7 Submission');
$pdf->SetSubject('Contact Form 7 Submission');
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetHeaderMargin(0);
// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
require_once(dirname(__FILE__).'/lang/eng.php');
$pdf->setLanguageArray($l);
}
// set default font subsetting mode
$pdf->setFontSubsetting(true);
// add a page
$pdf->AddPage();
//content to print
$html .='<h3 style="font-size:12px;text-align:center;">Contact Form 7 Submission</h3>';
$html .='<div style="font-family:arial;font-weight:normal;font-size:8px;">Name :   '.$name.'</div>';
$html .='<div style="font-family:arial;font-weight:normal;font-size:8px;">Address :   '.$address.'</div>';
$html .='<div style="font-family:arial;font-weight:normal;font-size:8px;">City :    '.$city.'</div>';
$html .='<div style="font-family:arial;font-weight:normal;font-size:8px;">Postcode :   '.$postcode.'</div>';
$html .='<div style="font-family:arial;font-weight:normal;font-size:8px;">Phone Number :   '.$phone.'</div>';
// print text
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
$filename =rand().'_'.time().'.pdf';
$pdf->Output($savepath.$filename,'F');
return $filename;
}
}
