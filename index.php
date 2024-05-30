<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp8 Grupo XA</title>
    <link rel="stylesheet" href="css/Stem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      
      <nav>
      <ul>
        <li><a href="index.php" class="current">CiTIM Grupo XA</a></li>
        
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
        <h2>Problema: Cálcular cuantas veces se tendria que recorrer la altura del pico de orizaba</h2>
        <p>Descripción:</p>
        <p> Para cubrir la distancia que existe entre:
         <br> a. La tierra y jupiter.
          <br>b. La tierra y saturno.<br>
        </p>
      </section>
      <section  class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
        <img class="imgProblema" src="images/pico.jpg">
        </center>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        <br>recorrido= distancia/altura<br>
      
      </section>
      <section class="datos">
        <h2>Datos:</h2>
           Altura del pico de orizaba= 5.636 km
          <br>tierra y jupiter distancia=778,000,000 Km.
          <br>tierra y saturno distancia= 1429,000,000 km
      </section>
      <section class="calculos">
        <h2>Solución</h2>
        <p>a)Las veces que se tendria que recorrer el pico de orizaba es:<br>
       a) recorrido1= 778000000 Km/5.636 km <br>
       b) recorrido2= 1429000000 Km/5.636 km <br>
       
       </p>
       </section>
<?php
     function calcula_distancia() {
      $distancia1 = 778000000;
      $distancia2 = 1429000000;
      $altura = 5.636;
      $recorrido1 = $distancia1 / $altura;
      $recorrido2 = $distancia2 / $altura;
      echo 'a) ' . $recorrido1 . ' veces ' . ' b) ' . $recorrido2 . ' veces';
  }

?>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<?php
 print "<h1> ".calcula_distancia(). " </h1>";
?>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2024
    </footer>
   </section>
</body>
</html>
