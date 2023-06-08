<!DOCTYPE html>
<html>
<head>
  <title>早餐費用試算</title>
  <style>
    .error-message {
      color: red;
    }
  </style>
</head>
<body>
  <h2>早餐訂購</h2>
  <form action="orderController.php" method="POST">
    <div>
      <label for="name">訂購者姓名：</label>
      <input type="text" id="name" name="name" required>
    </div>
    <div>
      <label>飲料選擇：</label>
      <div>
        <input type="radio" id="soy-milk" name="drink" value="soy-milk" required>
        <label for="soy-milk">豆漿（$20）</label>
      </div>
      <div>
        <input type="radio" id="milk-tea" name="drink" value="milk-tea" required>
        <label for="milk-tea">奶茶（$25）</label>
        <input type="checkbox" id="pearl" name="pearl" value="pearl">
        <label for="pearl">珍珠（$5）</label>
      </div>
    </div>
    <div>
      <label for="quantity">數量：</label>
      <input type="number" id="quantity" name="quantity" min="1" required>
    </div>
    <div>
      <button type="submit" name="calculate">計算費用</button>
    </div>
  </form>
  <?php
    if (isset($_GET['error'])) {
      $error = $_GET['error'];
      echo '<p class="error-message">錯誤！' . $error . '</p>';
    }
    if (isset($_GET['total'])) {
      $total = $_GET['total'];
      $name = $_GET['name'];
      echo '<p>訂購者姓名：' . $name . '</p>';
      echo '<p>總金額：$' . $total . '</p>';
    }
  ?>
</body>
</html>
