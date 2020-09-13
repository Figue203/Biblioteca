<?php
  /**
   *
   */
  class Artistas
  {
    public function GuardarArtistas($nombre,$genero,$descripcion,$album,$canciones)
    {
      $con =new Conexion();
      $q ="INSERT INTO `artistas`(`Nombre artista o grupo`, `Genero musical`, `Descripcion general`, `Album`, `Canciones`) VALUES ('$nombre','$genero','$descripcion','$album','$canciones');";
      $t = $con->query($q);
      $con->close();
      return $t;
    }
    /*public function BuscarArtistas($nombre,$genero,$descripcion,$album,$canciones)
    {
      $con =new Conexion();
      $q ="SELECT * FROM `artistas` WHERE `Nombre artista o grupo`='$nombre' AND `Genero musical`='$genero' AND `Descripcion general`='$descripcion' AND `Album`='$album' AND `Canciones`='$canciones';";
      $tis = $con->query($q);
      $con->close();
      return $tis;

    }*/
      //"SELECT * FROM notas WHERE 1";
    }

?>
