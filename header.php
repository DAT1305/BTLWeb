<?php 

  require 'database.php';  
?>
<header style="margin-bottom: 20px;">
    <div class = "Header-container">
        <a href="#" class = "head-logo">
            <div><img width="50px" src="nike-lich-su-thiet-ke-logo.jpg"></div>
            <div>FORUM </div>

        </a>
        <div class = "head-mid-items">
            <!-- nút về trang chủ  -->
            <a href="index.php" class = "head-return"><svg width = "30px" xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 42 42">
    <path fill="currentColor" d="M2.68 15.726c-.1.039-.16.09-.18.149l.18-.149zm-.18.149v20.627c0 2.509.49 2.998 3 2.998h7c2.51 0 3-.461 3-3v-8h9v8.031c0 2.51.51 2.979 3 2.969c.04.031 7 0 7 0c2.529 0 3-.526 3-2.997V16.495c0-.08-.09-.15-.27-.23L20 1.5L2.68 15.726l-.18.149z"/>
</svg></a>
            <!-- nút lịch để tạo sự kiện cho 1 vấn đề nào đó  -->
            <a href="postcreate.php" class = "head-calendar"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 512 512"><path fill="#000000" d="M256 0Q150 0 75 75T0 256t75 181t181 75t181-75t75-181t-75-181T256 0zm0 469q-88 0-150.5-62.5T43 256t62.5-150.5T256 43t150.5 62.5T469 256t-62.5 150.5T256 469zm107-234h-86v-86q0-21-21-21t-21 21v86h-86q-21 0-21 21t21 21h86v86q0 21 21 21t21-21v-86h86q21 0 21-21t-21-21z"/></svg></a>
            <!-- nút truy cập nhóm /group -->
            <a href="group.php" class = "head-group"><svg width = "30px" xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 1200 1200">
    <path fill="currentColor" d="M596.847 188.488c-103.344 0-187.12 97.81-187.12 218.465c0 83.678 40.296 156.352 99.468 193.047l-68.617 31.801l-182.599 84.688c-17.64 8.821-26.444 23.778-26.444 44.947v201.102c1.451 25.143 16.537 48.577 40.996 48.974h649.62c27.924-2.428 42.05-24.92 42.325-48.974V761.436c0-21.169-8.804-36.126-26.443-44.947l-175.988-84.688l-73.138-34.65c56.744-37.521 95.061-108.624 95.061-190.197c-.001-120.656-83.778-218.466-187.121-218.466zm-301.824 76.824c-44.473 1.689-79.719 20.933-106.497 51.596c-29.62 36.918-44.06 80.75-44.339 124.354c1.819 64.478 30.669 125.518 82.029 157.446L21.163 693.997C7.05 699.289 0 711.636 0 731.041v161.398c1.102 21.405 12.216 39.395 33.055 39.703h136.284V761.436c2.255-45.639 23.687-82.529 62.196-100.531l136.247-64.817c10.584-6.175 20.731-14.568 30.433-25.152c-56.176-86.676-63.977-190.491-27.773-281.801c-23.547-14.411-50.01-23.672-75.419-23.823zm608.586 0c-29.083.609-55.96 11.319-78.039 26.444c35.217 92.137 25.503 196.016-26.482 276.52c11.467 13.23 23.404 23.377 35.753 30.434l130.965 62.195c39.897 21.881 60.47 59.098 60.866 100.532v170.707h140.235c23.063-1.991 32.893-20.387 33.093-39.704V731.042c0-17.641-7.05-29.987-21.163-37.045l-202.431-96.618c52.498-38.708 78.859-96.72 79.369-156.117c-1.396-47.012-15.757-90.664-44.339-124.354c-29.866-32.399-66.91-51.253-107.827-51.596z"/>
</svg></a>
            <!-- thanh tìm kiếm -->
             <form action="" method ="GET">
         <div class = "head-search">
        

        <input class = "search-bar" type="text" name = "search" placeholder="nhập vào đâu để tìm kiếm">
            <button type = "submit" style = "background-color: transparent; border: none;">
                <svg  class = "search-svg" width = "30px"xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 16 16">
    <path fill="currentColor" d="m15.7 14.3l-4.2-4.2c-.2-.2-.5-.3-.8-.3c.8-1 1.3-2.4 1.3-3.8c0-3.3-2.7-6-6-6S0 2.7 0 6s2.7 6 6 6c1.4 0 2.8-.5 3.8-1.4c0 .3 0 .6.3.8l4.2 4.2c.2.2.5.3.7.3s.5-.1.7-.3c.4-.3.4-.9 0-1.3zM6 10.5c-2.5 0-4.5-2-4.5-4.5s2-4.5 4.5-4.5s4.5 2 4.5 4.5s-2 4.5-4.5 4.5z"/>
</svg></button>
        
        </div>
</form>
        </div>
        
        <!-- những item bên phải  -->
         <div class = "head-right-item">
            <a href="#" class = "head-message"><svg width = "30px" xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 20 20">
    <path fill="currentColor" d="M10 0c5.342 0 10 4.41 10 9.5c0 5.004-4.553 8.942-10 8.942a11.01 11.01 0 0 1-3.43-.546c-.464.45-.623.603-1.608 1.553c-.71.536-1.378.718-1.975.38c-.602-.34-.783-1.002-.66-1.874l.4-2.319C.99 14.002 0 11.842 0 9.5C0 4.41 4.657 0 10 0Zm0 1.4c-4.586 0-8.6 3.8-8.6 8.1c0 2.045.912 3.928 2.52 5.33l.02.017l.297.258l-.067.39l-.138.804l-.037.214l-.285 1.658a2.79 2.79 0 0 0-.03.337v.095c0 .005-.001.007-.002.008c.007-.01.143-.053.376-.223l2.17-2.106l.414.156a9.589 9.589 0 0 0 3.362.605c4.716 0 8.6-3.36 8.6-7.543c0-4.299-4.014-8.1-8.6-8.1ZM5.227 7.813a1.5 1.5 0 1 1 0 2.998a1.5 1.5 0 0 1 0-2.998Zm4.998 0a1.5 1.5 0 1 1 0 2.998a1.5 1.5 0 0 1 0-2.998Zm4.997 0a1.5 1.5 0 1 1 0 2.998a1.5 1.5 0 0 1 0-2.998Z"/>
</svg></a>
            <a href="#" class = "head-noti"><svg width = "30px" xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24">
    <path fill="currentColor" d="M10.146 3.248a2 2 0 0 1 3.708 0A7.003 7.003 0 0 1 19 10v4.697l1.832 2.748A1 1 0 0 1 20 19h-4.535a3.501 3.501 0 0 1-6.93 0H4a1 1 0 0 1-.832-1.555L5 14.697V10c0-3.224 2.18-5.94 5.146-6.752zM10.586 19a1.5 1.5 0 0 0 2.829 0h-2.83zM12 5a5 5 0 0 0-5 5v5a1 1 0 0 1-.168.555L5.869 17H18.13l-.963-1.445A1 1 0 0 1 17 15v-5a5 5 0 0 0-5-5z"/>
</svg></a>
            <!-- user item  -->
            <a href="#" class = "head-user-items">
            
               <?php if(isset($_SESSION['username'])): ?>

    <div class="head-user-avata">
        <div class="user-avata"></div>
    </div>

    <div class="head-user-name">
        <button><?= $_SESSION['username'] ?></button>
        <div class="dropdown-menu">
        <div class="dropdown-menu-item">
        <button onclick="window.location.href = 'logout.php'">đăng xuất</button>
            </div>
        </div>
    </div>

    <?php else: ?>

    <div class="login-button"><a href="login.html">Đăng Nhập</a></div>
    <div class="signup-button"><a href="signup.html">Đăng kí</a></div>

    <?php endif; ?>
                

            </a>
            
         </div>
        
    </div>    
    
</header>