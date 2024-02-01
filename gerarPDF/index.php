<?php
use Mpdf\
require_once __DIR__."/vendor/autoload.php";

$date = new DateTime();
$hoje = $data->format('d/m/Y');

$pdf = new Mpdf();
$pdf_>WriteHTML("
    <h1>Primeiro PDF gerado</h1>
    <p>Data: {$hoje}</p>
");

$pdf->Output();
