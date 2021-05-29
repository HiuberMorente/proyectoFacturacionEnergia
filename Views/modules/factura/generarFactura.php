<?php

  require "vendor/autoload.php";

  $html = '
    <html>
      <head>
        <meta charset="utf-8">
        <style>
          
        </style>    
      </head>
      <body>
        <h1>Energy GT</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa delectus earum ex harum officiis soluta vitae. Amet cum cupiditate doloremque ipsa ipsam laudantium obcaecati quos reprehenderit, sit velit vero, voluptate. </p>        
      </body>   
    </html>';

  use Dompdf\Dompdf;
  $dompdf = new Dompdf();
  $dompdf -> loadHtml($html);
  $dompdf -> render();

  $dompdf -> stream('doumento.pdf', array('Attachment' => '0'));
