<?php 
     session_start();
     require 'database.php';
     $userid = $_GET['id'] ?? null;
     
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container-group-create{
        
        display: flex;
    }
    .ben-trong-create{
        width: 100%;
        background-color: #51dee8;
        border: 2px solid black;
        border-left: none;
        display: flex;
        align-items: center;
        justify-content: center;
       
    }
    .name-group{
        margin-top: 10px;
        display: flex;
        justify-content: center;
    }
     .name-group input {
        width: 400px;
        height: 40px;
     }
      .tieu-de-group textarea {
        width: 400px;
        height: 200px;
     }
    .tieu-de-group {
       margin-top: 10px;
        display: flex;
        justify-content: center;
    }
    .bg-group{
        margin-top: 10px;
         display: flex;
        justify-content: center;
    }


    .button-g-c{
        display: flex;
        margin-top: 20px;

        justify-content: center;
    }
    .form-create{
        background-color: #bac5cd;
        padding : 40px;
        border: 2px solid black;
        border-radius: 10px;

    }
    .button-g-c button{
        width: 100px;
height: 30px;
background-color: orange;
cursor: pointer;
    }
</style>
<link rel="stylesheet" href="left.css">
<body>
   
    <div class="container-group-create">
         <?php 
               include ('leftmenu.php')

    ?>
        <div class="ben-trong-create">
            
            <form class = "form-create"action="gcreate.php" method="POST" enctype="multipart/form-data">
             <div class="name-group"> <input placeholder = "nhập tên group"type="text" name = "namegroup"></div>
                <div class="tieu-de-group"> <textarea placeholder = "nhập mô tả" name = "grouptitle" ></textarea></div>
                <div class="bg-group"><input type="file" name="image-group"></div>
               <div class ="button-g-c" > <button  type = "submit">tạo</button></div>
            </form>
        </div>
    </div>
</body>
</html>


