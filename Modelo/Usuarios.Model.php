<?php
  /**
   *
   */
  class Usuarios
  {

    function __construct()
    {
      // code...
    }

    public function BuscarUsuario($User,$Pass)
    {
               $Us = new Conexion();
               $querey ="SELECT * FROM `usuarios` WHERE `Usuario`='$User' AND `Contraseña`='$Pass';";
               $Bruker=$Us->query($querey);
               $Us->close();
               return $Bruker;
    }

  }

?>
