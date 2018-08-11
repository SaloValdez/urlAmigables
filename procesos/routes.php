<?php
    class  routes{


      #===================================
      #llamada  al aplantilla
      public function plantilla(){


        include "./vista/plantilla.php";

      }

      #=====================================
      #interaccion con el ususario
      public function enlacesPaginas(){
        if ( isset($_GET["action"])) {
            $enlaces = $_GET["action"];
        }else {
            $enlaces = "index";
        }


        $respuesta  = ClsRoutes::routes($enlaces);
        include $respuesta;
      }

    }

 ?>
