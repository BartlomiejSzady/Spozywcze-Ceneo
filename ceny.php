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
    <label for="mleko"> Mleko 3,2% 1l </label>
    <input type="text" name="mlekoszt" maxlength="2" value="0" id="mlekoszt"> szt.
    <br>
    <input type="checkbox" id="masło" name="masło" value= "masło">
    <label for="masło"> Masło 200g</label>
    <input type="text" name="masłoszt" maxlength="2" value="0" id="mlekoszt"> szt.
    <br>
    <input type="checkbox" id="szpinak" name="szpinak" value= "szpinak">
    <label for="szpinak"> Szpinak 450g</label>
    <input type="text" name="szpinakszt" maxlength="2" value="0" id="szpinakszt"> szt.
    <br>
    <input type="checkbox" id="chlebt" name="chleb" value= "chlebt">
    <label for="chlebt"> Chleb Tostowy 250g</label>
    <input type="text" name="chlebtszt" maxlength="2" value="0" id="chlebtszt"> szt.
    <br>
    <input type="checkbox" id="czekolada" name="czekolada" value= "czekolada">
    <label for="czekolada"> Czekolada 100g </label>
    <input type="text" name="czekoladaszt" maxlength="2" value="0" id="czekoladaszt"> tabliczka.
    <br>
    <input type="checkbox" id="sól" name="sól" value= "sól">
    <label for="sól"> Sól 1kg </label>
    <input type="text" name="sólszt" maxlength="2" value="0" id="sólszt"> szt.
    <br>
    <input type="checkbox" id="olej" name="olej" value= "olej">
    <label for="olej"> Olej 1l</label>
    <input type="text" name="olejszt" maxlength="2" value="0" id="olejszt"> szt.
    <br>
    <input type="checkbox" id="jajka" name="jajka" value= "jajka">
    <label for="jajka"> 10 jajek</label>
    <input type="text" name="jajkaszt" maxlength="2" value="0" id="jajkaszt"> paczka.
    <br>
    <input type="checkbox" id="banany" name="banany" value= "banany">
    <label for="banany"> Banany 1kg </label>
    <input type="text" name="bananyszt" maxlength="2" value="0" id="bananyszt"> kg.
    <br><br>
    <input type="submit" value="Porównaj" class="button">
  </form>
</body>
</html>
