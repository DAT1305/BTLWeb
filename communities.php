<?php 
    session_start();
    require 'database.php';
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>communities</title>
</head>
<style>
    .image-group{
        width: 50px;
    }
    .image-group img{
   object-fit: cover;
        

   width: 40px;
    height: 40px;
    border-radius: 50px;
    }
    .boc-ben-trong-group{
        display: flex;
    }
    .title-group{
        font-size: 12px;
    }
    .boc-abc-xyz{
        display: flex;
        gap: 5px;
        margin-right: 10px;
    }
    .boc-them-cai-nua{
        
    }
    .boc-abc-xyz{
        background-color: azure;
        padding: 10px;
        width: 200px;
        border: 2px solid black;
        border-radius: 10px;
        cursor: pointer;
    }
    .num{
        display: flex;
        align-items: center;
    }
    .group-button{
        background-color: transparent;
        border: none;
    }
    .name-group{
        width: 100%;
        text-align: left;
    }
    .mem-count-group{
        width: 100%;
        text-align: left;
    }
</style>
<link rel="stylesheet" href="style.css">
<?php
    require 'header.php'

?>
<body>
    <div class="create-group-container">
        <div class="ben-trong-group">
            <div class="group-tao-button">
                <button onclick = "groupcreate()" >tạo group</button>
            </div>
        </div>
    </div>
    <div class="show-group-container">
        <div class="boc-ben-trong-group">
            <?php 
                $sqlgroupGet = "SELECT * FROM groups ";
                $queryGroupGet = $conn->query($sqlgroupGet);
                $num =  1;
            ?>
            <?php while($resultGroupGet = $queryGroupGet->fetch_assoc()): ?>
                <button class = "group-button" onclick = "group_click()" data-id = "<?= $resultGroupGet['groupname'] ?>">
                 <div class="boc-abc-xyz">
                   
                        <div class="num"><?= $num ?></div>
                <div class="image-group"><img  src="<?= $resultGroupGet['image'] ?>" alt="">
                </div>
                    <div class="group-tilte-container">
                        <div class="name-group">
                        <?= $resultGroupGet['groupname'] ?>
                    </div>
                    <div class="title-group"><?= substr($resultGroupGet['title'] , 0 , 30 ) . "..."?> 
                </div>
                <div class="mem-count-group">thành viên <?= $resultGroupGet['mem_count'] ?>
                </div>
                    
                    </div>
                    
                </div>
               </button>
                <?php $num++?>
                
                <?php endwhile; ?>
        </div>
    </div>

</body>
<script>
    function groupcreate(){
        window.location.href = "group-create.php";
    }
    function group_click(){
        document.addEventListener('click' , function(e){
            
            let a =  e.target.closest(".group-button");
            let click_button = a.dataset.id ;
            window.location.href = "g.php?n=" + click_button;
        })
    }
</script>
</html>