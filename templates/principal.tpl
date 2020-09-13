<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title> Hamlet S.A. </title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <style>
      html, body {
      margin: 0;
      padding: 0;
      width: 100%;
}

body {
      font-family: "Helvetica Neue",sans-serif;
      font-weight: lighter;
}

header {
      width: 100%;
      height: 100vh;
      background: url(https://i.pinimg.com/originals/24/5c/5f/245c5f0995979b1d74f14b50eb53d512.jpg) no-repeat 50% 50%;
      background-size: cover;
}

.content {
      width: 94%;
      margin: 4em auto;
      font-size: 20px;
      line-height: 30px;
      text-align: justify;
}

.logo {
      line-height: 60px;
      position: fixed;
      float: left;
      margin: 16px 46px;
      color: #fff;
      font-weight: bold;
      font-size: 20px;
      letter-spacing: 2px;
}

nav {
      position: fixed;
      width: 100%;
      line-height: 60px;
}

nav ul {
      line-height: 60px;
      list-style: none;
      background: rgba(0, 0, 0, 0);
      overflow: hidden;
      color: #fff;
      padding: 0;
      text-align: right;
      margin: 0;
      padding-right: 40px;
      transition: 1s;
}

nav.black ul {
      background: #000;
}

nav ul li {
      display: inline-block;
      padding: 16px 40px;;
}

nav ul li a {
      text-decoration: none;
      color: #fff;
      font-size: 16px;
}

.menu-icon {
      line-height: 60px;
      width: 100%;
      background: #000;
      text-align: right;
      box-sizing: border-box;
      padding: 15px 24px;
      cursor: pointer;
      color: #fff;
      display: none;
}

@media(max-width: 786px) {

      .logo {
            position: fixed;
            top: 0;
            margin-top: 16px;
      }

      nav ul {
            max-height: 0px;
            background: #000;
      }

      nav.black ul {
            background: #000;
      }

      .showing {
            max-height: 34em;
      }

      nav ul li {
            box-sizing: border-box;
            width: 100%;
            padding: 24px;
            text-align: center;
      }

      .menu-icon {
            display: block;
      }

}

      </style>
   </head>
   <body>
      <div class="wrapper">
         <header>
           <nav>
              <div class="menu-icon">
                 <i class="fa fa-bars fa-2x"></i>
              </div>
              <div class="menu">
                 <ul>
                    <li><a href="#">Home</a></li>
                    <li><a class="nav-link active" href="Mostrar.php">Artists information</a></li>
                    <li><a href="?controller=Operaciones&action=VentanaRegistro">Sign In</a></li>
                    <li><a href="?controller=User&action=Login"> Administrador </a></li>
                 </ul>
              </div>
           </nav>
         </header>
         <div class="content">
            <p>
               Se dedica a dar a conocer nuevos talentos en el ámbito musical y ver a los artistas o grupos que puedan promocionar con sellos discográficos de alto renombre.
            </p>
            <p>
              Queremos que diferentes personas de diferentes lados del mundo, conozcan, apoyen y se enamoren de la música promocionada por nosotros, pero totalmente escrita, tocada y
              compuesta por estos artistas jovenes que buscan una oportunidad en la industria musical. Son jovenes talentosos, vienen con música realmente fresca, nueva, movida y pegajosa, que no solo hará
              que más de alguna persona se ponga a bailar, o se vuelva su nueva canción favorita, son una promesa, nueva y renovada para la música.
            </p>
            <p>
              ¡Las proximas estrellas del momento y con exitos deslumbrantes!
           </p>
           <div align="center">
             <p>
              Fresco, nuevo, incandescente. El descubrimiento de un artista ... ¡la nueva luz de una estrella!
            </p>
          <video src="Imagen/HAMLET.mp4" autoplay muted loop></video>
         </div>
         </div>
      </div>
      <div>
      </div>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   </body>
</html>
