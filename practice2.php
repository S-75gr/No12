<?php

//課題1
$name = "AKIHIRO";
if ($name = "AKIHIRO") {
    echo "私はAKIHIROです。";
} else {
    echo "AKIHIROではありません。";
}
$total =0;


//課題2
for($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

//課題3
$fruits = array("Orange", "Apple", "Kiwi", "Grape", "Banana");
foreach($fruits as $Fruits){
    echo "" . $Fruits;
    echo "\n";
}

//課題4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
    if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}