<?php


require_once('tcpdf_include.php');

$pdf=new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->startPageGroup();

$pdf->AddPage();



$bloque1 = <<<EOD
<h1 style="text-align: center;">Energy Gt!</h1>
<h4 style="text-align: center; padding:0;">DISTRIBUIDORA DE ELECTRICIDAD DE ORIENTE, SA (DEORSA) – 149620-3</h4>
<h4 style="text-align: center; padding:0;">Dialogo 6 10-50 z10 | Inter Americas Wordl Center Torre Sur Nivel 14</h4>
<h5 style="text-align: center; padding:0;"> www.electric.com - atencionalcleinte@electric.com </h5>
<h5 style="text-align: center; padding:0;">ATENCION AL CLIENTE , TELEFONO 45854565 </h5>
<h5 style="text-align: center; padding:0;">GUATEMALA , GUATEMALA </h5>
<h5 style="text-align: center;">Factura en Contingencia </h5>

<div></div>
<div></div>

<div style="text-align: center; border: #1b1e21; padding: 0">
<table style="text-align: center; padding: 0;">
<tr>
<td>Hiuber Morente</td>
<td>NIS</td>
<td>54658465</td>
</tr>
<tr>
<td>Aldea Los Jocotes, San Jeronimo</td>
<td>No Acceso</td>
<td>25656565</td>
</tr>
<tr>
<td>SALAMA </td>
<td>Mes:</td>
<td>Marzo </td>
</tr>
<tr>
<td>NIR: 0.00025.55222 </td>
<td>Fecha Emisión</td>
<td>12/08/2021  </td>
</tr>
</table>

<p>hiuber@gmail.com</p>
</div>



<div style="text-align: center; border: #1b1e21; padding: 0">
<table style="text-align: center; padding: 0;">
<tr>
<td>Tipo Tarifa</td>
<td>Precio</td>
</tr>
<tr>
<td>Residencial</td>
<td>Q. 2.5 por KW </td>
</tr>
<tr>
<td>Industria  </td>
<td>Q 5.87 por KW :</td>
</tr>
<tr>
<td>Residencial Tipo A  </td>
<td>Q. 3.84 por KW </td>
</tr>
</table>
</div>


<div style="text-align: center; border: #1b1e21; padding: 0">
<table style="text-align: center; padding: 0;">
<tr>
<td>Concepto de Facturación </td>
<td>Lectura Anterior </td>
<td>Lectura Actual</td>
<td>Consumo </td>
</tr>
<tr>
<td>Activa KW </td>
<td>6998</td>
<td>7299 </td>
<td>301</td>
</tr>
</table>
</div>


<div style="text-align: center; border: #1b1e21; padding: 0">
<table style="text-align: center; padding: 0;">
<tr>
<td>TOTAL A PAGAR </td>
<td>CIFRAS </td>
<td>ENERGIA DEL MES</td>
</tr>

<tr>
<td> </td>
<td>Q.42.56 Tasa de Alumbrado Publico</td>
<td></td>
</tr>

<tr>
<td>Q 545 </td>
<td>Q.  Pago convenido </td>
<td>Q. 301 KW</td>
</tr>

<tr>
<td></td>
<td>Q.0 Factura Pagada  </td>
<td></td>
</tr>

<tr>
<td></td>
<td> Cuenta Corriente   </td>
<td></td>
</tr>

</table>
</div>

<div></div>
<div></div>

<div>
<h5>
Recuerde mantener su cuenta al dia y evite pagar intereses sobre montos adeudados. El plazo de vencimiento de la 
factura es de 30 dias despues de su efecto de emision. Se emitira corte de suministro con 2 facturas vencidas
</h5>
</div>
EOD;

$pdf->writeHTMLCell(0, 0, '', '', $bloque1, 0, 1, 0, true, '', true);

$pdf->Output('factura.pdf');


