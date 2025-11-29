<?php 
    session_start();
    require 'database.php';
    require 'checkadmin.php';

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin panel</title>
</head>
<style>
    .tab-mana li a{
        text-decoration: none;
        color: black;
        font-weight: bold;
        
    }
    .tab-mana li{
        list-style: none;
    }
    .tab-mana{
        background-color: aqua;
        height: 40px;
        align-items: center;
border: 2px solid black;

    }
</style>
<header>
    <ul class = "tab-mana" style="display: flex; margin: auto; gap: 50px;  ">
        <li><a href="admin.php?tab=usermana">quản lí user</a></li>
        <li><a href="admin.php?tab=usermana">quản lí user</a></li>
        <li><a href="admin.php?tab=usermana">quản lí user</a></li>
        <li><a href="admin.php?tab=usermana">quản lí user</a></li>
        

    </ul>
</header>
<body>
    <?php
        if(isset($_GET['tab'])){
            switch($_GET['tab']){
                case 'usermana':
                    include('user.php');
            }
        }
    
    ?>
    
</body>
</html>