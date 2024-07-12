<?php
session_start();
if(isset($_SESSION['username'])){
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "../index.php";
    header("Location: $url");
}

?>
<!DOCTYPE html>
<html lang="es">
	<head>
	 <title>Enviar a Strea</title>
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
<style>
input {
padding: 10px;
    background-color: #ddfdff;
    border: white;
    border-radius: 10px;
    color: dimgrey;
    font-size: 15px;
	margin-bottom: 10px;
	  }
	  body {
	      background-color: #bfbfbf;
		  }
		  label {
    font-size: 17px;
    font-family: 'Play', sans-serif;
	color: #66795b;
	 }
</style>
<form method="POST" action="enviar_video.php" style="margin-bottom: 20px;display:inline-grid;padding: 10px;background-color: #34ffc7;border-radius: 10px;height: 600px;width: 310px;position: relative;left: 13px;">

    <label for="titulo">Titulo:</label>
    <input type="text" name="titulo" placeholder="Titulo.." required>

    <label for="duracion">Duracion:</label>
    <input type="time" name="duracion" placeholder="Duracion" required>
    
	<label for="descripcion">Descripcion:</label>
    <input type="text" name="descripcion" placeholder="Descripcion" required>
	
	<label for="fecha_publicacion">Fecha de publicacion:</label>
    <input type="date" name="fecha_publicacion" placeholder="Fecha de publicacion" required>
	
    <label for="categoria">Categoria:</label>
    <input type="text" name="categoria" placeholder="Categoria" required>
	
	<label for="calificacion">Calificacion:</label>
    <input type="float" name="calificacion" placeholder="Calificacion" required>
   
    <label for="reproducciones">Reproducciones:</label>
    <input type="int" name="reproducciones" placeholder="Reproducciones" required>
	
	<label for="url">Url del Video:</label>
    <input type="varchar" name="url" placeholder="Url del video.." required>
	
	
    <input type="submit" value="Enviar">

	 </form>
</body>
</html>