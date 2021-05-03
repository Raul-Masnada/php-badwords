<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>
<?php

   $paragrafo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore";

   $badword = $_GET['badword'];

   $risultatoFinale = str_replace($badword,"******",$paragrafo);

   $lunghezza =strlen($paragrafo);

   echo $risultatoFinale;
   echo $lunghezza;
?>
</p>
  </body>
</html>
