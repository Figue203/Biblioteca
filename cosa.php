
<!DOCTYPE html>
<html lang="pt-br">
   <head>
     <meta charset="utf-8">
         <link href="Framework/Bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
      <title> Artistas </title>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
     <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <style>

      </style>
      </head>

      <body>
          <div class="container">
          <h1 class="text-center">Informacion</h1>
          <?php
          $inclu=include("conex.php");
          if($inclu)
          {
          $consulta="SELECT * FROM `artistas`";
          $resul= mysqli_query ($conexion, $consulta);
          if($resul)
          {
          while($row=$resul->fetch_array())
          {
              $artista=$row['Artista'];
              $genero=$row['Género'];
              $descripcion=$row['Descripción'];
              $album=$row['Álbum'];
              $cancion=$row['Canción'];
          ?>
                <div class="row">
                  <div class="col-6">
                    <br><hr><br>
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th scope="col">Artista</th>
                          <th scope="col">Género</th>
                          <th scope="col">Descripción</th>
                          <th scope="col">Álbum</th>
                          <th scope="col">Canción</th>
                        </tr>
                      </thead>
                      <tbody>
                          <tr>
                            <th scope="row"><?php echo $nombre; ?></th>
                            <td> <?php echo $genero;?></td>
                            <td> <?php echo $descripcion;?></td>
                            <td> <?php echo $album;?> </td>
                            <td> <?php echo $cancion;?> </td>
                          </tr>
                        <tr>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
                </div>

          <?php
        }
      }
    }
  ?>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     </body>
  </html>
