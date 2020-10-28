<?php
$name="彩";
if($name="彩"){
    echo "私は彩です。";
}else{
    echo "彩ではありません。";
}

for($i=0; $i<=10000; $i++){
    $total+=$i;
}
echo $total;

$fruits=array("apple","orange","lemon","peach","cherry");
foreach($fruits as $fruit){
    echo "要素は".$fruit;
    echo "\n";
}

//for文の始めの値を定義する
$start=5;
//for文の終わりの値を定義する
$end=100;

for($i=$start; $i<$end; $i+=5){
    echo $i;
    echo "\n";
}
