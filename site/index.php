<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
require '_lp.php';

$url = t(v('url'));
if (filter_var($url, FILTER_VALIDATE_URL) === FALSE) {
    die('Not a valid URL');
}

$uuid = uniqid();
$pdf_file = "/tmp/".$uuid.".pdf";

shell_exec("/bin/wkhtmltopdf  $url $pdf_file ");
header('Content-Disposition: inline; filename="OUT.pdf"');
header('Content-type: application/pdf');
readfile($pdf_file);
unlink($pdf_file);