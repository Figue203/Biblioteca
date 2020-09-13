<?php
  /**
   *
   */
  class User
  {

    function __construct()
    {
      // code...
    }

    public function Login()
    {
      //var_dump($_POST);
      $smarty=new Smarty();
      $con=new Usuarios();
      $User=$_POST['Nombre'];
      $Password=$_POST['Password'];

      $consulta=$con->BuscarUsuario($User,$Password);

      //var_dump($consulta);

      if($consulta->num_rows==1)
      {
        $smarty->display('SubmitArtist.tpl');
      }
      else
      {
        $smarty->display('login.tpl');

      }
    }

  }

?>
