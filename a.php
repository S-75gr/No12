test3.php
<?php
$html_code = "<html><body><title>侍エンジニア塾</title><p>今日はいい天気です</p></body></html>";
$html_code_result = strip_tags($html_code, '<title>');
echo $html_code_result . "\n";

$fruits = ['apple', 'orange', 'melon'];

array_push($fruits, 'banana', 'pineapple');

print_r($fruits);

$items1 =['item1', 'item2', 'item3'];
$items2 =['item4', 'item5'];
$items3 =['item6', 'item7'];

$item_merge = array_merge($items1, $items2, $items3);

print_r($item_merge);

echo '現在のUNIXタイムスタンプ;'.time() . "\n";

$nweek = time() + (3* 24* 60* 60);
echo '3日後のUNIXタイムスタンプ'.$nweek . "\n";

$timestamp = mktime(0, 0, 0, 8, 1, 2017);
echo $timestamp;
?>