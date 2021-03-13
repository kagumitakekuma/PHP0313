<?php

echo "PHP勉強中";
echo "5+7";
echo "<p>"."5＋7"."</p>";
echo "<br>";

$name=1;
echo $name;


$keisan=7;
$kei=$keisan*$keisan;
echo $kei;
echo "<br>";

$apple ="りんご";
$num=10+10;

echo $apple;
echo $num;
echo "<br>";

$a=1;
$b=2;

if($a=1){
    echo "1が表示されました";
    echo "<br>";
}
if($b=2){
    echo "2が表示されました";
}

echo "<br>";
echo "<br>";
echo "<br>";
//いまからおみくじアプリ


$num=rand(1,4);

if($num===1){ 
    echo "大吉です";
}


if($num===2){
    echo "中吉です";
}

if($num===3){
    echo "小吉です";
}
if($num===4){
    echo "凶です";
}
 



?>