<?php 
    require 'database.php';
    $sql_user = "SELECT * FROM users";
    $result_user = $conn->query($sql_user);
    
?>
<table border="1" >
            <tr>
             <td>ID</td>
             <td>Tên người dùng</td>
             <td>trạng thái</td>
              <td>ban acc</td>
            </tr>
            
            
<?php while($get_user = $result_user->fetch_assoc()): ?>
       
          
                <tr>
                    <th><?= $get_user['id'] ?></th>
                    <th ><?= $get_user['username'] ?></th>
                    <?php if($get_user['is_banned']== 1) :?>
                      <th>đã ban</th>
                      <?php else : ?>
                    <th>hoạt động</th>
                    <?php endif;?>
                    <th>
                        <?php if($get_user['is_banned']== 1) :?>
                      <button class = "ban-button" onclick="ban()" data-id = "<?= $get_user['id'] ?>">mở khóa</button>
                      <?php else : ?>
                    <button class = "ban-button" onclick="ban()" data-id = "<?= $get_user['id'] ?>">ban</button>
                    <?php endif;?>
                      
                    </th>
                </tr>
                <?php endwhile ;?>
            </table>
            <script src="ban.js"></script>

            
        
        
        
        



    
