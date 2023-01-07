<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="ceny.css">
  <title>Twoje Ceny</title>
</head>
<body>
<?php
  $kosztlidl = 0;
  $kosztżabka = 0;
  $kosztbiedronka = 0;

  $mlekoszt = ($_POST['mlekoszt']);
    $kosztlidl = $kosztlidl + $mlekoszt*4.49;
    $kosztżabka = $kosztżabka + $mlekoszt*4.8;
    $kosztbiedronka = $kosztbiedronka + $mlekoszt*3.99;

  $masloszt = ($_POST['masłoszt']);
    $kosztlidl = $kosztlidl + $masloszt*6.99;
    $kosztżabka = $kosztżabka + $masloszt*8.5;
    $kosztbiedronka = $kosztbiedronka + $masloszt*6.99;

    $szpinakszt = ($_POST['szpinakszt']);
    $kosztlidl = $kosztlidl + $szpinakszt*3.35;
    $kosztżabka = $kosztżabka + $szpinakszt*3.99;
    $kosztbiedronka = $kosztbiedronka + $szpinakszt*3.19;

    $chlebtszt = ($_POST['chlebtszt']);
    $kosztlidl = $kosztlidl + $chlebtszt*4.68;
    $kosztżabka = $kosztżabka + $chlebtszt*6.39;
    $kosztbiedronka = $kosztbiedronka + $chlebtszt*4.66;

    $czekoladaszt = ($_POST['czekoladaszt']);
    $kosztlidl = $kosztlidl + $czekoladaszt*4.43;
    $kosztżabka = $kosztżabka + $czekoladaszt*6.11;
    $kosztbiedronka = $kosztbiedronka + $czekoladaszt*3.99;

    $sólszt = ($_POST['sólszt']);
    $kosztlidl = $kosztlidl + $masloszt*1.29;
    $kosztżabka = $kosztżabka + $masloszt*3.2;
    $kosztbiedronka = $kosztbiedronka + $masloszt*1.29;

    $olejszt = ($_POST['olejszt']);
    $kosztlidl = $kosztlidl + $masloszt*12.99;
    $kosztżabka = $kosztżabka + $masloszt*14.99;
    $kosztbiedronka = $kosztbiedronka + $masloszt*12.99;

    $jajkaszt = ($_POST['jajkaszt']);
    $kosztlidl = $kosztlidl + $jajkaszt*7.49;
    $kosztżabka = $kosztżabka + $jajkaszt*9.99;
    $kosztbiedronka = $kosztbiedronka + $jajkaszt*7.99;

    $bananyszt = ($_POST['bananyszt']);
    $kosztlidl = $kosztlidl + $bananyszt*6.99;
    $kosztżabka = $kosztżabka + $bananyszt*6.99;
    $kosztbiedronka = $kosztbiedronka + $bananyszt*6.99;
?> 
  <div class="middleafter"><h1>Za zakupy zapłacisz:</h1></div>
  <hr> <br>
  <div class="żabkalogo"><img src="img/żabka.jpg" alt="żabka" width="180" height="120"></div>
  <div class="żabka">Za zakupy w Żabce zapłacisz <strong><?php echo $kosztżabka?> </strong> pln.</div>
  <div class="lidllogo"><img src="img/lidl.jpg" alt="lidl" width="150" height="150"></div>
  <div class="lidl">Za zakupy w Lidlu zapłacisz <strong><?php echo $kosztlidl?> </strong> pln.</div>
  <div class="biedronkalogo"><img src="img/biedronka.jpg" alt="biedronka" width="235" height="150"></div>
  <div class="biedronka">Za zakupy w Biedronce zapłacisz <strong><?php echo $kosztbiedronka?> </strong> pln. </div> 
</body>
</html>
