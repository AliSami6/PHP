<?php 

include("Library/Pdf/GenerateFile.php");
include("Library/Excel/GenerateFile.php");

use \Library\Pdf\GenerateFile as PdfGenerateClass;
use \Library\Excel\GenerateFile as ExcelGenerateClass;

$pdf = new PdfGenerateClass;
$excel = new ExcelGenerateClass;

$pdf->downloadFile();
$excel->downloadFile();

?>