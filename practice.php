<?php
echo 'hello php!';

$a = 3;
$b = 7;
$c = $a + $b;
echo $c;

$array_month = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"];
echo $array_month[7];

$hello = "Hello, ";
$name = "Akihiro";
$world = "'s World!";
echo $hello . $name . $world;

$tech_boost = 'tech';
$tech_boost .= ' boost';
echo $tech_boost;


//　$2018_calenddar を $calendar_2018 に変更
// {} を　[] に変更
// 10月 を　"10月"に変更
// [December] を　["December"]　に変更

$calendar_2018 = [
    "January" => "1月",
    "February" => "2月",
    "March" => "3月",
    "April" => "4月",
    "May" => "5月",
    "June" => "6月",
    "August" => "8月",
    "Septenber" => "9月",
    "October" => "10月",
    "November" => "11月",
    "December" => "12月",
];

echo $calendar_2018["December"];