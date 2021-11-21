<?php
//1~100を順番に表示する
for($i = 1; $i <= 100; $i++){
//毎回countを0でリセット
$count = 0;
//偶数奇数で分ける
if($i % 2 != 0) {
echo "{$i}は奇数です<br>";
}else {
//偶数を2で割れる間繰り返す
$a = $i;
while($a % 2 == 0){
$a = $a / 2;
$count++;
}
echo "{$i}は{$count}回<br>";
}
}