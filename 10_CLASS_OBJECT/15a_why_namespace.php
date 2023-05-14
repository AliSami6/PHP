<?php 

class GenerateFile
{
	public function downloadFile()
	{
		echo "Download Excel File";
	}
}

class GenerateFile
{
	public function downloadFile()
	{
		echo "Download PDF File";
	}
}

$excelObject = new GenerateFile;
$pdfObject = new GenerateFile;

$excelObject->downloadFile;
$pdfObject->downloadFile;

?>