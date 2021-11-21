<?php
$array = [3,7,45,1,6,75,85,24,11,87,619];
//配列の数字を一つずつ分ける
foreach ($array as $value) {
$count = 0;
//素数は１を除く
if($value != 1){
//１とその数字以外の数で２から順番に割っていく
//割り切れた数があればcountで数える
for($i = 2; $i < $value; $i++){
if($value % $i == 0 ){
$count++;
}
}
//countが０の時が素数なので、配列に入れて保存していく
if($count == 0){
$primeNumber[] = $value;
}
}
}
echo print_r($primeNumber, true);