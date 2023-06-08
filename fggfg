<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 檢查是否按下計算費用的按鈕
    if (isset($_POST['calculate'])) {
        // 取得表單輸入的值
        $name = $_POST['name'];
        $drink = $_POST['drink'];
        $quantity = $_POST['quantity'];
        $pearl = isset($_POST['pearl']) ? $_POST['pearl'] : '';

        // 執行計算費用的邏輯
        $total = calculateTotalCost($drink, $quantity, $pearl);

        // 重新導向回原始頁面，並帶上總金額和訂購者姓名作為參數
        $url = 'orderview?total=' . $total . '&name=' . urlencode($name);
        header('Location: ' . $url);
        exit();
    }
}

// 計算總金額的函式
function calculateTotalCost($drink, $quantity, $pearl) {
    // 設定飲料價格
    $drinkPrice = 0;
    switch ($drink) {
        case 'soy-milk':
            $drinkPrice = 20;
            break;
        case 'milk-tea':
            $drinkPrice = 25;
            break;
    }

    // 計算總金額
    $total = $drinkPrice * $quantity;
    if ($pearl === 'pearl') {
        $total += 5;
    }

    return $total;
}
?>
