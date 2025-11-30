<?php 
    require 'database.php';
    $sql_user = "SELECT * FROM users";
    $result_user = $conn->query($sql_user);
    
?>
<table border="1" >
            <tr 
             class="table-tab"
            >
             <td>ID</td>
             <td>Tên người dùng</td>
             <td>trạng thái</td>
              <td>ban acc</td>
            </tr>
            
            
<?php while($get_user = $result_user->fetch_assoc()): ?>
       <style>
          .table-user th{
            width: 200px;
            height:50px ;
            
          }
          .table-tab{
            text-align: center;
          }
          .table-user th button {
            width: 100%;
            height: 100%;
            background-color: red;
            color: white;
            font-weight: bold;
            cursor: pointer;
          }
          .un-ban-button{
            background-color: blue;
          }

       </style>
          
                <tr class="table-user">
                    <th><?= $get_user['id'] ?></th>
                    <th ><?= $get_user['username'] ?></th>
                    <?php if($get_user['is_banned']== 1) :?>
                      <th  style="background-color: red; color: white;">đã ban</th>
                      <?php else : ?>
                    <th style="background-color: green; color: white;">hoạt động</th>
                    <?php endif;?>
                    <th>
                        <?php if($get_user['is_banned']== 1) :?>
                      <button class = "ban-button" onclick="ban()" data-id = "<?= $get_user['id'] ?>">mở khóa</button>
                      <?php else : ?>
                    <button style="background-color: blue;" class = "ban-button" onclick="ban()" data-id = "<?= $get_user['id'] ?>">ban</button>
                    <?php endif;?>
                      
                    </th>
                </tr>
                <?php endwhile ;?>
            </table>
            <script src="ban.js"></script>

            
        
        
        
        



    
