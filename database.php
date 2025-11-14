<?php 
    $servername = 'localhost';
    $username = 'root';      
    $password = '';          
    $dbname = 'webtl'; 
$conn = new mysqli($servername , $username , $password , $dbname);
if($conn -> connect_error){
    echo('kết nối thất bại');
}
else {
    echo('kết nối thành công');

}

?>