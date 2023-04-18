<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
      href="https://fonts.googleapis.com/css?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./stylebg.css" />
    <title>Pictopedia</title>
  
</head>
  <body>
  <nav>
   <label class="logo">PICTOPEDIA</label> 
<ul >
       <li style="color: rgb(12, 14, 13);"><a href="./home.html">HOME</a></li>
       <li><a href="./Library.html">LIBRARY</a></li>
       <li><a href="./view.php">CONTRIBUTE</a></li>
       <li><a href="./About.html">ABOUT</a></li>
	     <li><a href="./logout.php">LOGOUT</a></li>
       
    </ul>
 
    <div class="content">
      <br>
	
    <h1>  WELCOME TO PICTOPEDIA!! </h1>
      <br></br>
      <br></br>
      <h2>   Are you in search of pictures??<br> Don't worry ! PICTOPEDIA is here for you... </br> </h2>
      <h2>  The images in our website are COPYRIGHT-FREE.</h2>
      <br></br>
      <h3> Are you wondering what a copyright-free image is?</h3>
      <h3> The permission given by the owner to access his images.</h3>


    </div>
    

  </html>
  