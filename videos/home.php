<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>

<?php
  // Verifica si se proporcionó un ID de video válido
  if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: ../index.php");
    exit;
  }
  
  // Obtiene el ID del video de la URL
  $video_id = $_GET['id'];
  
  // Conecta a la base de datos
  $conexion = mysqli_connect('localhost', 'id20552785_id21780450_id23456789', 'id23456789&T', 'id20552785_id21780450_id23456789');
  
  // Consulta para obtener los detalles del video
  $consulta = "SELECT * FROM videos WHERE id = $video_id";
  $resultado = mysqli_query($conexion, $consulta);
  

  
  // Verifica si se encontró el video en la base de datos
  if (mysqli_num_rows($resultado) == 0) {
    header("Location: index.php");
    exit;
  }
  
  // Obtiene los detalles del video
  $video = mysqli_fetch_assoc($resultado);
  
  // Cierra la conexión a la base de datos
  mysqli_close($conexion);
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $video['titulo']; ?></title>
  	 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		 <!--Font Awesome-->
		 <meta name="color-scheme" content="dark light">
<meta name="keywords" content="Canales de television, en vivo, gratis">
<meta name="description" content="¡Sintoniza tus canales favoritos en tiempo real con nosotros!"> 
<meta name="googlebot" content="index,follow">
<meta name="robots" content="index,follow">
		<!--Font Awesome-->
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
		  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
		<!--Font Awesome-->
		<!--Favicon-->
<link rel="apple-touch-icon" sizes="192x192" href="../img/logo.png">
<link rel="apple-touch-icon" sizes="512x512" href="../img/logo.png">
<link rel="apple-touch-icon" sizes="512x512" href="../img/logo.png">
<link rel="icon" type="image/png" sizes="32x32" href="../img/logo.png">
<link rel="icon" type="image/png" sizes="16x16" href="../img/logo.png">
<link rel="icon" type="image/png" sizes="32x32" href="../img/logo.png">
<link rel="icon"  type="image/x-icon" href="../img/logo.png">
<link rel="manifest" href="../img/site.webmanifest">
<!--Favicon-->
</head>
<body>
  <div class="espacio-video">
  <a  href="javascript:history.back()" class="enlace-show"><i class="fad fa-angle-left fa-lg"></i></a> <label id="stateL">Gira tu dispositivo para ver mejor</label>
  </div>
   <script>
       // Función para comprobar si el dispositivo está en modo horizontal
function isHorizontal() {
  return window.matchMedia("(orientation: landscape)").matches;
}

// Función para mostrar una alerta
function showAlert() {
   document.getElementById("stateL").innerHTML = 'Horizontal: <i class="fal fa-check-circle fa-lg"></i>';
}
// Función para mostrar una alerta
function showAlertR() {
    document.getElementById("stateL").innerHTML = 'Por favor gira tu dispositivo <i class="far fa-sync-alt fa-lg"></i>';
}

// Función para girar el dispositivo al horizontal
function rotateToHorizontal() {
  // Verificar si el dispositivo ya está en modo horizontal
  if (isHorizontal()) {
    showAlert();
  } else {
    showAlertR();
  }
}

// Llamar a la función para girar el dispositivo al cargar la página
window.addEventListener("load", rotateToHorizontal);
	</script>
	
  <iframe src="<?php echo $video['url']; ?>"  frameborder="0" allowfullscreen="true" style="border:none;overflow:hidden"></iframe>
  <div class="align-video">
   <h2><?php echo $video['titulo']; ?></h2>
   <p><?php echo $video['descripcion']; ?></p>
   
   <p class="lp"><i class="fal fa-shapes fa-lg" id="LS"></i>  Duracion: <?php echo $video['duracion']; ?></p>
   <p class="lp"><i class="fas fa-users fa-lg" id="LS"></i> Reproducciones: <?php echo $video['reproducciones']; ?></p>
   <p class="lp"><i class="fal fa-book-heart fa-lg" id="LS"></i> Categoria: <?php echo $video['categoria']; ?></p>
   <p class="lp"><i class="fas fa-stars fa-lg" id="LS"></i> Calificacion: <?php echo $video['calificacion']; ?></p>
   <p class="lp"><i class="fas fa-calendar-day fa-lg" id="LS"></i> Fecha de publicacion: <?php echo $video['fecha_publicacion']; ?></p>
  
    
  </div>
 
  <style>
  #LS {
     color: #fff;
    background-color: #313131;
    padding: 10px;
    border-radius: 10px;
}
*{
margin: 0;
padding: 0;
}
body {
  background-color: #000;
}
::-webkit-scrollbar {
    display: none;
}
h2 {
 color: #fff;
     font-family: 'Play', sans-serif;
    font-size: 23px;
}
h1 {
 color: #fff;
}
h3 {
 color: #fff;
}
p {
color: #d1e5e7;
    font-family: 'Play', sans-serif;
    font-size: 20px;
    margin-inline: 10px;
    margin-bottom: 5px;
}
.lp {
    color: #d1e5e7;
    font-family: 'Play', sans-serif;
    font-size: 20px;
    margin-inline: 10px;
    margin-bottom: 10px;
    background-color: #4f4f4f;
    padding: 10px;
    border-radius: 10px;
}
a {
	text-decoration: none;
	color: #d1e5e7;
}
.espacio-video {
   margin-bottom: 0px;
    background: #474747;
    padding: 30px;
	width: auto;
}
.enlace-show {
text-decoration: none;
background-color: grey;
border-radius: 5px;
padding: 10px;
color:  #fff;
}

iframe { 
padding: 18px;
    backface-visibility: visible;
    margin: auto;
    display: block;
    background: linear-gradient(rgb(55 51 32), transparent);
    background-repeat: no-repeat;
    background-size: auto;
	width: 90%;
	height: 670px;
	}
	  @media (max-width: 952px) {
          iframe { 
padding: 18px;
    backface-visibility: visible;
    margin: auto;
    display: block;
    background: linear-gradient(rgb(55 51 32), transparent);
    background-repeat: no-repeat;
    background-size: auto;
	width: 90%;
	height: 200px;
	}  
        }
		@media all and (max-width: 780px) {
         iframe { 
padding: 18px;
    backface-visibility: visible;
    margin: auto;
    display: block;
    background: linear-gradient(rgb(55 51 32), transparent);
    background-repeat: no-repeat;
    background-size: auto;
	width: 90%;
	height: 200px;
	} 
		 }
		 
		 @media all and (max-width: 400px) {
			       iframe { 
padding: 18px;
    backface-visibility: visible;
    margin: auto;
    display: block;
    background: linear-gradient(rgb(55 51 32), transparent);
    background-repeat: no-repeat;
    background-size: auto;
	width: 90%;
	height: 200px;
	} 
			  }


	.align-video { 
    width: 90%;
    position: relative;
    left: 12px;
    overflow: scroll;
    align-items: center;
    display: inline-grid;
    background-color: rgb(10 12 12);
    border-radius: 5px;
    height: 100vh;
    margin-bottom: 20px;
    padding: 10px;
}
#stateL {
	  color: #f1ffff;
	   font-family: 'Play', sans-serif;
    font-size: 20px;
	  }
  </style>
</body>
</html>