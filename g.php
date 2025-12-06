<?php 
  session_start();
  require 'database.php';
  $idgroup = $_GET['n'];
  $sqlgroup = "SELECT * FROM groups WHERE id = $idgroup";
  $query = $conn->query($sqlgroup);
  $result = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $result['groupname']?></title>
</head>
<style>
  .container-g{
    display: flex;
  }
</style>
<link rel="stylesheet" href="left.css">
<body>
  <div class="container-g" >
    <?php include('leftmenu.php');?>


  </div>
  
</body>
</html>