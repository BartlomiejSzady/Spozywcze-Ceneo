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

  if (isset($_POST['mleko'])) {
    $kosztlidl = $kosztlidl + 4.3;
    $kosztżabka = $kosztżabka + 3.8;
    $kosztbiedronka = $kosztbiedronka + 3.3;
  }

  if (isset($_POST['masło'])) {
    $kosztlidl = $kosztlidl + 8.3;
    $kosztżabka = $kosztżabka + 12;
    $kosztbiedronka = $kosztbiedronka + 9.3;
  }

  if (isset($_POST['szpinak'])) {
    $kosztlidl = $kosztlidl + 5.1;
    $kosztżabka = $kosztżabka + 3.6;
    $kosztbiedronka = $kosztbiedronka + 4.3;
  }

  if (isset($_POST['chlebt'])) {
    $kosztlidl = $kosztlidl + 5.1;
    $kosztżabka = $kosztżabka + 3.6;
    $kosztbiedronka = $kosztbiedronka + 4.3;
  }

  if (isset($_POST['pomidor'])) {
    $kosztlidl = $kosztlidl + 5.1;
    $kosztżabka = $kosztżabka + 3.6;
    $kosztbiedronka = $kosztbiedronka + 4.3;
  }

  if (isset($_POST['hummus'])) {
    $kosztlidl = $kosztlidl + 5.1;
    $kosztżabka = $kosztżabka + 3.6;
    $kosztbiedronka = $kosztbiedronka + 4.3;
  }
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
