<?php

    class Operaciones
    {
      public function GuardarArtistas()
      {
        $dato=new Artistas();
        $smarty=new Smarty();
        $nombre=$_POST['nombre'];
        $genero=$_POST['genero'];
        $descripcion=$_POST['descripcion'];
        $album=$_POST['album'];
        $canciones=$_POST['canciones'];

        $nadia=$dato->GuardarArtistas($nombre,$genero,$descripcion,$album,$canciones);

       if($nadia)
       {
          $smarty->display('SubmitArtist.tpl');
        }
        else {
          echo "Artista no guardado";
         }
      }

      public function VentanaRegistro()
      {
        $smarty = new Smarty();
        $smarty->display('Register.tpl');
      }

    /*  public function VerArtistas()
      {
        //session_start();
        $artistas = new Artistas();
        $smarty = new Smarty();
        $at = $artistas->BuscarArtistas($nombre,$genero,$descripcion,$album,$canciones);

      while($row=mysqli_fetch_assoc($at))
      {
        echo $row['Nombre artista o grupo'];
        echo $row['Genero musical'];
        echo $row['Descripcion general'];
        echo $row['Album'];
        echo $row['Canciones'];
      }
      $nombre = $row['Nombre artista o grupo'];
      $genero = $row['Genero musical'];
      $descripcion = $row['Descripcion general'];
      $album = $row['Album'];
      $canciones = $row['Canciones'];

        //$smarty->display('informacion.tpl');
      }*/
    }
 ?>
