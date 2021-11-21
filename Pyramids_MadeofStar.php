<?php
$c = 9; //段の数
//星の数は (2 * $c) - 1
//空白は $c - 1
for($i = 1; $i <= $c; $i++){
//1行分の配列を作成
$line = [];
//左側に空欄を入れる
for($j = 1; $j <= ($c - $i); $j++){
$line[] = " ";
}
//空欄の次に星を入れる
for($j = 1; $j <= (2 * $i) - 1; $j++){
$line[] = "☆";
}
//１行ずつ出力
foreach($line as $value) {
echo $value;
}
echo "<br>";
}