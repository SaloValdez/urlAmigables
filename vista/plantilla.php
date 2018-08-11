<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

    <link rel="stylesheet" href="./rcs/estilos.css">
  <body>

    <?php
        include "./vista/modulos/menu.php";
    ?>

    <div class="modulos">

      <?php
          $routes = new routes();
          $routes->enlacesPaginas();

       ?>

    </div>



    <div class="piePagina">
      <P>Soy  el pie de pagina</P>
    </div>


  </body>
</html>
