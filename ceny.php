<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="ceny.css">
  <title>Porównaj swoje ceny!</title>
</head>

<body>
  <div class="middle"><h1>Wybierz produkty których ceny chcesz porównać:</h1></div>
  <form action="cenyafter.php" method="post" class="list">
    <input type="checkbox"  id="mleko" name="mleko" value= "mleko" onclick="visibilitymleko()" checked="checked">
    <label for="mleko"> Mleko 3,2% 1l </label>
    <input type="number" min="0" style="width: 33px" name="mlekoszt" maxlength="2" value="0" id="mlekoszt"> szt.
    <script>
      function visibilitymleko() {
        if (document.getElementById("mleko").checked == true) {
          document.getElementById("mlekoszt").style.visibility = "visible";
        } 
        else {
          document.getElementById("mlekoszt").style.visibility = "hidden";
        }
      }
    </script>
    <br>
    <input type="checkbox" id="masło" name="masło" value= "masło" onclick="visibilitymasło()" checked="checked">
    <label for="masło"> Masło 200g</label>
    <input type="number" min="0" style="width: 33px" name="masłoszt" maxlength="2" value="0" id="masłoszt"> szt.
    <script>
      function visibilitymasło() {
        if (document.getElementById("masło").checked == true) {
          document.getElementById("masłoszt").style.visibility = "visible";
        } 
        else {
          document.getElementById("masłoszt").style.visibility = "hidden";
        }
      }
    </script>
    <br>
    <input type="checkbox" id="szpinak" name="szpinak" value= "szpinak" onclick="visibilityszpinak()" checked="checked">
    <label for="szpinak"> Szpinak 450g</label>
    <input type="number" min="0" style="width: 33px" name="szpinakszt" maxlength="2" value="0" id="szpinakszt"> szt.
    <script>
      function visibilityszpinak() {
        if (document.getElementById("szpinak").checked == true) {
          document.getElementById("szpinakszt").style.visibility = "visible";
        } 
        else {
          document.getElementById("szpinakszt").style.visibility = "hidden";
        }
      }
    </script>
    <br>
    <input type="checkbox" id="chlebt" name="chleb" value= "chlebt" onclick="visibilitychlebt()" checked="checked">
    <label for="chlebt"> Chleb Tostowy 250g</label>
    <input type="number" min="0" style="width: 33px" name="chlebtszt" maxlength="2" value="0" id="chlebtszt"> szt.
    <script>
      function visibilitychlebt() {
        if (document.getElementById("chlebt").checked == true) {
          document.getElementById("chlebtszt").style.visibility = "visible";
        } 
        else {
          document.getElementById("chlebtszt").style.visibility = "hidden";
        }
      }
    </script>
    <br>
    <input type="checkbox" id="czekolada" name="czekolada" value= "czekolada" onclick="visibilityczekolada()" checked="checked">
    <label for="czekolada"> Czekolada 100g </label>
    <input type="number" min="0" style="width: 33px" name="czekoladaszt" maxlength="2" value="0" id="czekoladaszt"> tabliczka.
    <script>
      function visibilityczekolada() {
        if (document.getElementById("czekolada").checked == true) {
          document.getElementById("czekoladaszt").style.visibility = "visible";
        } 
        else {
          document.getElementById("czekoladaszt").style.visibility = "hidden";
        }
      }
    </script>
    <br>
    <input type="checkbox" id="sól" name="sól" value= "sól" onclick="visibilitysól()" checked="checked">
    <label for="sól"> Sól 1kg </label>
    <input type="number" min="0" style="width: 33px" name="sólszt" maxlength="2" value="0" id="sólszt"> szt.
    <script>
      function visibilitysól() {
        if (document.getElementById("sól").checked == true) {
          document.getElementById("sólszt").style.visibility = "visible";
        } 
        else {
          document.getElementById("sólszt").style.visibility = "hidden";
        }
      }
    </script>
    <br>
    <input type="checkbox" id="olej" name="olej" value= "olej" onclick="visibilityolej()" checked="checked">
    <label for="olej"> Olej 1l</label>
    <input type="number" min="0" style="width: 33px" name="olejszt" maxlength="2" value="0" id="olejszt"> szt.
    <script>
      function visibilityolej() {
        if (document.getElementById("olej").checked == true) {
          document.getElementById("olejszt").style.visibility = "visible";
        } 
        else {
          document.getElementById("olejszt").style.visibility = "hidden";
        }
      }
    </script>
    <br>
    <input type="checkbox" id="jajka" name="jajka" value= "jajka" onclick="visibilityjajka()" checked="checked">
    <label for="jajka"> 10 jajek</label>
    <input type="number" min="0" style="width: 33px" name="jajkaszt" maxlength="2" value="0" id="jajkaszt"> paczka.
    <script>
      function visibilityjajka() {
        if (document.getElementById("jajka").checked == true) {
          document.getElementById("jajkaszt").style.visibility = "visible";
        } 
        else {
          document.getElementById("jajkaszt").style.visibility = "hidden";
        }
      }
    </script>
    <br>
    <input type="checkbox" id="banany" name="banany" value= "banany" onclick="visibilitybanany()" checked="checked">
    <label for="banany"> Banany 1kg </label>
    <input type="number" min="0" style="width: 33px" name="bananyszt" maxlength="2" value="0" id="bananyszt"> kg.
    <script>
      function visibilitybanany() {
        if (document.getElementById("banany").checked == true) {
          document.getElementById("bananyszt").style.visibility = "visible";
        } 
        else {
          document.getElementById("bananyszt").style.visibility = "hidden";
        }
      }
    </script>
    <br><br>
    <input type="submit" value="Porównaj" class="button">
  </form>
  <script>
      function uncheckAll() {
        document.querySelectorAll('input[type="checkbox"]')
        .forEach(el => el.checked = false);
      }    
    </script>
  <button onclick="uncheckAll()">Clear</button>
</body>
</html>
