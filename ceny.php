<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="ceny.css">
  <title>Porównaj swoje ceny!</title>
</head>

<body>
  <div class="middle"><h1>Wybierz produkty których ceny chcesz porównać:</h1></div>
  <form action="cenyafter.php" method="post" class="list">
    <input type="checkbox" id="mleko" name="mleko" value= "mleko">
    <label for="mleko"> Mleko </label><br>
    <input type="checkbox" id="masło" name="masło" value= "masło">
    <label for="masło"> Masło </label><br>
    <input type="checkbox" id="szpinak" name="szpinak" value= "szpinak">
    <label for="szpinak"> Szpinak </label><br>
    <input type="checkbox" id="chlebt" name="chlebt" value= "chlebt">
    <label for="chlebt"> Chleb Tostowy </label><br>
    <input type="checkbox" id="pomidor" name="pomidor" value= "pomidor">
    <label for="pomidor"> Pomidor </label><br>
    <input type="checkbox" id="hummus" name="hummus" value= "hummus">
    <label for="hummus"> Hummus </label><br><br>
    <input type="submit" value="Porównaj" class="button">
  </form>
</body>
</html>
