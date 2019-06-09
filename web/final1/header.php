<?php
session_start();

require 'db.php';
?>
<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" type="text/css" href="Style.css" />
      <Title>Rusty Blue</Title>
   </head>
   <h1> 
<body>
       <div class="nav">
         <ul>
         <li><a href="index.php" class="button-class">Home</a></li>
         <li><a href="menu.php" class="button-class">Menu</a></li>
         <li><a href="request.php" class="button-class">Request to Play</a></li>
         <!--only to view the admin page will not be here if not needed to be seen-->
         <li><a href="admin.php" class="button-class">Admin</a></li>
         </ul>
       </div>