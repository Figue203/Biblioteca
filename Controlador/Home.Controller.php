<?php
  /**
   * Clase home que permite la primera carga del sistema
   */
  class Home
  {

    function __construct()
    {
      // code...
    }

    public function Inicio()
    {
      $smarty=new Smarty();
      $smarty->display('principal.tpl');
    }

  }

 ?>
