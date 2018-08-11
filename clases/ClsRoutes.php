<?php
    class ClsRoutes{

      public function routes($enlaces){

        if ($enlaces == "inicio"||
            $enlaces == "cursos"||
            $enlaces == "grupos"||
            $enlaces == "personal") {
          $modulo = "vista/modulos/man".$enlaces.".php";
        }else if ($enlaces == "index") {
          $modulo = "vista/modulos/manInicio.php";
        }
        return $modulo;

      }





    }


 ?>
