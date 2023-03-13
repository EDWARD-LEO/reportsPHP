<?php

require_once '../vendor/autoload.php';
require_once '../models/Country.php';
$country = new Country();
$listaPaises = $country->getCountryForContinent($_GET['continent']);

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

try{

  ob_start();

  $data = "";

  //Estilos CSS
  include '../views/reports/estilos.report.html';

  //Páginas:
  include '../views/reports/reporte3.php';  

  $data .= ob_get_clean();

  //Creando espacio
  $html2pdf = new Html2Pdf('P', 'A4', 'fr', true, 'utf-8', array(15,10,10,10));
  $html2pdf->setDefaultFont('Arial');
  $html2pdf->writeHTML($data);

  $html2pdf->output("MiReporte.pdf");

}
catch(Html2PdfException $e){
  $html2pdf->clean();
  $formatter = new ExceptionFormatter($e);
  echo $formatter->getHtmlMessage();
}

?>