<?php
$host = 'localhost';
$dbuser ='root';//帳號
$dbpassword = '';//密碼
$dbname = 'final_exam';
$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
if($link){
    mysqli_query($link,'SET NAMES utf8');
    // echo "正確連接資料庫";
}
else {
    echo "不正確連接資料庫</br>" . mysqli_connect_error();
}
?>
