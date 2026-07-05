<?php
//変数の定義
$product_name = "ノートパソコン";
$price = 80000;
$quantity = 2;
$tax_rate = 0.1;
//計算処理
$subtotal = $price*$quantity;
$tax_amount = $subtotal*$tax_rate;
$total = $subtotal+$tax_amount;
?>
<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo "商品名： " . $product_name . "<br>";
      echo "単価： " . number_format($price) . "円<br>";
      echo "数量： " . $quantity . "個<br>";
      echo "小計： " . number_format($subtotal) . "円<br>";
      echo "消費税(10%)： " . number_format($tax_amount) . "円<br>";
      echo "<strong>合計金額： " . number_format($total) . "円<br></strong>";            
?>    
</body>
</html>
