<?php

require_once __DIR__ . '/mpdf_2/mpdf/mpdf/src/Mpdf.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world! YES - العالم عربي</h1>');
$mpdf->Output();
