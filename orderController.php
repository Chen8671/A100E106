<?php
// 載入db.php來連結資料庫
require_once 'orderModel.php';
?>

<?php
    $name = $_POST['name'];
    $drink = $_POST['drink'];
    $quantity = $_POST['quantity'];
    $pearl = $_POST['pearl'];
    $total = 0;

    if ($drink === 'soy-milk' && isset($_POST['pearl'])) {
      $error = '豆漿不能加珍珠';
      header('Location: orderView.php?error=' . urlencode($error));
      exit();
    }

    if ($drink === 'soy-milk') {
      $total = 20 * $quantity;
    } elseif ($drink === 'milk-tea') {
      $total = (25 + (isset($_POST['pearl']) ? 5 : 0)) * $quantity;
    }
    $meals = "INSERT INTO `meals`(`name`,`drink`,`pearl`,`number`)VALUES('$name','$drink','$pearl','$quantity')";
    $result = mysqli_query($link,$meals);
    header("Location: orderView.php?total=".$total."&name=".urlencode($name));
    exit();
?>