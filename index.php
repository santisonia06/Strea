<?php
session_start();
if(isset($_SESSION['username'])){
    $username = $_SESSION["username"];
	echo "<div id='pedidoT'>";
	echo "<label>";
    echo "<button id='btn' class='icon-close'  title='Cerrar Ads'>✖</button>";
	echo "<p id='text-pedi'>Bienvenido ";
	echo $username = $_SESSION['username'];
    echo  ", a nuestra comunidad de videos. </p>";
    echo "</label>";
	echo "</div>";
	echo "<script>
 document.getElementById('btn').addEventListener('click', function() { document.getElementById('pedidoT').style.display = 'block'; setTimeout(function() { document.getElementById('pedidoT').style.display = 'none'; }, 1000); });
		</script>";
		
	echo "<style>";
	echo "
	#btn {
		border: white;
		 }
	#pedidoT {
   display: block;
   background-color: #fff;
    padding: 20px;
    margin-bottom: 10px;
    position: relative;
    left: auto;
    border-radius: 20px;
    width: auto;
          }
		#pedidoR {
   display: block;
   background-color: #fff;
    padding: 20px;
    margin-bottom: 10px;
    position: relative;
    left: auto;
    border-radius: 20px;
    width: auto;
          }	
           #pedido-correct {
			   color: #28ff28;
           	 }	
#text-pedi {
	color: #a54747;
    font-family: 'Play', sans-serif;
    margin-bottom: 30px;
    margin-inline: 20px;
	    font-size: 20px;
           	 }	
.icon-close {
	color: #000;
    text-decoration: none;
    padding: 10px;
    background-color: #ffeded;
    margin: auto;
    border-radius: 15px;
    left: -20px;
    position: relative;
    top: -10px;
	}
	.icon-close:focus {
	color: #fff;
    text-decoration: none;
    padding: 10px;
   background-color: #474242;
    margin: auto;
    border-radius: 15px;
	transition: all 1s ease-out;
	}";
	echo "</style>";
	  session_write_close();
} else {
    echo "<div id='pedidoR'>";
	echo "<label>";
    echo "<button id='btn' class='icon-close'  title='Cerrar Ads'>✖</button>";
	echo "<p id='text-pedi'>Unete a nuestra comunidad de videos para acceder a su contenido.</p>";
	echo "<p id='text-pedi'><a href='login.php' class='login-o'>Acceder <i class='fal fa-check-circle fa-lg' id='pedido-correct'></i></a></p>";
    echo "</label>";
	echo "</div>";
	echo "<script>
 document.getElementById('btn').addEventListener('click', function() { document.getElementById('pedidoR').style.display = 'block'; setTimeout(function() { document.getElementById('pedidoR').style.display = 'none'; }, 1000); });
		</script>";
	echo "<style>";
	echo " 
	#btn {
		border: white;
		 }
	#pedidoT {
   display: block;
   background-color: #fff;
    padding: 20px;
    margin-bottom: 10px;
    position: relative;
    left: auto;
    border-radius: 20px;
    width: auto;
          }
		#pedidoR {
   display: block;
   background-color: #fff;
    padding: 20px;
    margin-bottom: 10px;
    position: relative;
    left: auto;
    border-radius: 20px;
    width: auto;
          }	
           #pedido-correct {
			   color: #28ff28;
           	 }	
#text-pedi {
	color: #a54747;
    font-family: 'Play', sans-serif;
    margin-bottom: 30px;
    margin-inline: 20px;
	    font-size: 20px;
           	 }	
.icon-close {
	color: #000;
    text-decoration: none;
    padding: 10px;
    background-color: #ffeded;
    margin: auto;
    border-radius: 15px;
    left: -20px;
    position: relative;
    top: -10px;
	}
	.icon-close:focus {
	color: #fff;
    text-decoration: none;
    padding: 10px;
   background-color: #474242;
    margin: auto;
    border-radius: 15px;
	transition: all 1s ease-out;
	}";
	echo "</style>";
}

?>
<!--Estado de Pedido-->
<!DOCTYPE html>
<html lang="es">
	<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Strea: Lista de Videos</title>
		 <!--Font Awesome-->
		 <meta name="color-scheme" content="dark light">
         <meta name="keywords" content="plataforma, videos, Strea, estudios, contenido audiovisual, peliculas">
         <meta name="description" content="Strea es una revolucionaria plataforma de videos en línea que brinda a los usuarios acceso a una vasta colección de contenido audiovisual de alta calidad. Con Strea, puedes disfrutar de tus películas, series, documentales y videos favoritos en cualquier momento y desde cualquier dispositivo."> 
         <meta name="googlebot" content="index,follow">
         <meta name="robots" content="index,follow">
		<!--Font Awesome-->
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
		  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
		<!--Font Awesome-->
		<!--Favicon-->
<link rel="apple-touch-icon" sizes="192x192" href="img/logo.png">
<link rel="apple-touch-icon" sizes="512x512" href="img/logo.png">
<link rel="apple-touch-icon" sizes="512x512" href="img/logo.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/logo.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/logo.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/logo.png">
<link rel="icon"  type="image/x-icon" href="img/logo.png">
<link rel="manifest" href="img/site.webmanifest">
<!--Favicon-->
</head>
<body>
 
		  
 <div class="espacio-video">
  <h1>Lista de canales <a href="#" title="<?php echo $username = $_SESSION['username']; ?>"><img id="imf-kd" src="https://objetivoligar.com/wp-content/uploads/2017/03/blank-profile-picture-973460_1280-768x768.jpg" alt="<?php echo $username = $_SESSION['username']; ?>" title="<?php echo $username = $_SESSION['username']; ?>"></a></h1>
  <p id="userF">Usuario: <?php echo $username = $_SESSION["username"]; ?></p>
  <p id="stateL"></p>
  <p id="year"></p>
  
  </div>
 



  <ul>
    <?php
      // Conecta a la base de datos
      $conexion = mysqli_connect('localhost', 'id20552785_id21780450_id23456789', 'id23456789&T', 'id20552785_id21780450_id23456789');
      
      // Consulta para obtener la lista de videos
      $consulta = "SELECT * FROM videos";
      $resultados = mysqli_query($conexion, $consulta);
      
      // Itera sobre los resultados obtenidos de la base de datos
      while ($fila = mysqli_fetch_assoc($resultados)) {
        echo "<li><a id='enlace-l' href='./videos/home.php?id=" . $fila['id'] . "'>" . $fila['titulo'] . "</a></li>";
      }
      
      // Cierra la conexión a la base de datos
      mysqli_close($conexion);
    ?>
  </ul>
  <script>
  new Date().getFullYear()
document.getElementById("year").innerHTML = new Date().getFullYear();
  </script>
  <script>
       // Obtener el agente de usuario del navegador
var userAgent = navigator.userAgent;

// Bloquear usuarios de Android
if (userAgent.includes("Android")) {
  // Bloquear al usuario
 document.getElementById("stateL").innerHTML = 'Estas en <i class="fas fa-mobile-android-alt fa-lg"></i>';
}

// Bloquear usuarios de iPhone
if (userAgent.includes("iPhone")) {
  // Bloquear al usuario
 document.getElementById("stateL").innerHTML = 'Estas en <i class="fas fa-mobile fa-lg"></i>';
}

// Bloquear usuarios de computadoras
if (!userAgent.includes("Android") && !userAgent.includes("iPhone")) {
 document.getElementById("stateL").innerHTML = 'Estas en <i class="fas fa-desktop-alt fa-lg"></i>'; 
}

  </script>
  <style>
    #imf-kd {
		background-color: rgb(245 245 220 / 23%);
    padding: 10px;
  width: 40px;
  height: 40px;
  border-radius: 20px;
  position: relative;
  left: 800px;
  }
  @media (max-width: 952px) {
	  #imf-kd {
  width: 40px;
  height: 40px;
  border-radius: 20px;
  position: relative;
  left: 400px;
  }
	 } 
	 @media all and (max-width: 780px) {
		  #imf-kd {
  width: 40px;
  height: 40px;
  border-radius: 20px;
  position: relative;
  left: 250px;
  }
		  } 
		  
		   @media all and (max-width: 400px) {
			    #imf-kd {
  width: 40px;
  height: 40px;
  border-radius: 20px;
  position: relative;
  left: 0px;
  }
			    } 
		
  .login-o {
	     background-color: beige;
    color: #3b5959;
    text-decoration: none;
    padding: 10px;
    border: 2px solid #deebeb;
    border-radius: 10px;

	  }
	  .login-o:focus {
	 background-color: #cfcfcf;
    color: #ebffff;
    text-decoration: none;
    padding: 10px;
    border: 2px solid #deebeb;
	   border-radius: 10px;
	  }
	  
	  #userF {
	  color: #f1ffff;
	  font-family: 'Play', sans-serif;
    font-size: 18px;
	    overflow: scroll;

	  }
  #year {
	  color: #f1ffff;
	  font-family: 'Play', sans-serif;
    font-size: 15px;
	  }
  #stateL {
	  color: #f1ffff;
	 font-family: 'Play', sans-serif;
    font-size: 15px;
	  }
  ::-webkit-scrollbar {
    display: none;
}
ul {
	overflow: scroll;
	height: 100vh;
	}

  li {
   color: #f1ffff;
    padding: 15px;
    list-style: none;
	}
  body  {
      background-color: black;
	  }
   h1 {
	  color: #fff;
	  font-family: 'Play', sans-serif;
	 }
  #enlace-l {
	    text-decoration: none;
    color: #fff;
    background-color: #292b3775;
    border-radius: 10px;
    padding: 10px;
	font-family: 'Play', sans-serif;
    font-size: 15px;
	 }
  .espacio-video {
   margin-bottom: 0px;
    padding: 30px;
	width: auto;
	border-radius: 30px 30px 0px 0px;
	background: linear-gradient(#ffea77, transparent);
}
  </style>

		
</body>
</html>