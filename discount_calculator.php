<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>追加演習</title>
</head>
<body>
<?php
//課題1: 割引計算プログラム
$original_price = 5000;
$discount_rate = 0.20;
$discount_amount = $original_price * $discount_rate;
$final_price = $original_price - $discount_amount;
      echo "元の価格： " . $original_price . "<br>";
      echo "割引率： " . ($discount_rate*100) . "%<br>";
      echo "割引後の価格： " . $final_price . "円<br>";
//課題1: 割引計算プログラム
$number = 6;

if ($number % 2 == 0) {
    echo "{$number}は偶数です<br>";
} else {
    echo "{$number}は奇数です<br>";
}
//課題3: 複数条件の判定
$age = 25;
$is_member = true;
$is_student = true;

// 条件1: 18歳以上かつ会員
if ($age >= 18 && $is_member) {
    echo "割引が適用されます<br>";
}

// 条件2: 65歳以上または学生
if ($age >= 65 || $is_student) {
    echo "シニア・学生割引が適用されます<br>";
}

//課題4: 複合代入演算子の練習
$score = 100;
echo "初期スコア: {$score}点<br>";

$score += 50;  // ボーナスステージクリア
echo "ボーナス後: {$score}点<br>";

$score -= 30;  // ダメージ
echo "ダメージ後: {$score}点<br>";

$score *= 2;   // 2倍アイテム
echo "最終スコア: {$score}点<br>";
echo "<br>";

//関数の基礎
// 関数の定義
/*function sayHello()
{
    echo "こんにちは！<br>";
}

// 関数の呼び出し
sayHello(); // "こんにちは！" が出力される
sayHello(); // もう一度呼び出せる
// 引数 $name を受け取る関数
function sayHelloTo($name)
{
    echo "こんにちは、" . $name . "さん！<br>";
}

// 関数を呼び出す際に、引数を渡す
sayHelloTo("山田"); // "こんにちは、山田さん！" が出力される
sayHelloTo("佐藤"); // "こんにちは、佐藤さん！" が出力される
// 2つの数値を受け取り、その合計を返す関数
/*function add($a, $b)
{
    $sum = $a + $b;
    return $sum; // 計算結果を返す
}

// 関数の戻り値を、変数 $result に代入する
$result = add(3, 5);

echo $result; // "8" が出力される

echo add(10, 20); // "30" が出力される

function testReturn()
{
    return "ここで処理は終わり";
    echo "この行は実行されません";
}

echo testReturn();*/

//引数の型宣言と戻り値の型宣言
// 引数 $a と $b は、必ず整数(int)でなければならない、と宣言
/*function add(int $a, int $b)
{
    return $a + $b;
}

// OK: 整数を渡している
echo add(3, 5); // 8
*/
// 戻り値は、必ず整数(int)でなければならない、と宣言
/*function add(int $a, int $b): int
{
    return $a + $b;
}

// OK: 整数を返す
$result = add(3, 5);
echo $result; // 8
// 戻り値の型が違う関数;
function add_and_format(int $a, int $b): int
{

    $sum = $a + $b;

    // NG: 文字列を返そうとすると、TypeErrorが発生する
    return "合計は: " . $sum; // Fatal error: Uncaught TypeError: ...
}
echo add_and_format(3, 5);*/
/*function sayHello(string $name): void
{
    echo "こんにちは、" . $name . "さん！";
    // return は書かない
}

sayHello("鈴木");
*/

?>
</body>
</html>