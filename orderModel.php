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

CREATE TABLE orders (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        drink VARCHAR(255) NOT NULL,
        quantity INT(11) NOT NULL,
        total DECIMAL(10,2) NOT NULL,
        order_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )"

INSERT INTO orders (name, drink, quantity, total) VALUES ('John Doe', '豆漿', 2, 40.00);

