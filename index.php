<?php
//資料庫資訊
$servername = "localhost";
$username = "sarah";
$password = "00000";
$dbname ="testdb";
$conn = new mysqli($servername, $username, $password,$dbname);

// Check確認 connection連線
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

//接著撈資料
$sql = "SELECT * FROM Post;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $posts=$result->fetch_all(MYSQLI_ASSOC);
} else {
  echo "0 results";
}
$conn->close();
?>
