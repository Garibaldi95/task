



























Сделайте функцию getDigitsSum (digit - это цифра),
которая параметром принимает целое число и возвращает сумму его цифр.
<?php
$arr = [1,2,6,4,12,-5,22,44,1];
function isNumberInRange($num){

    return $num > 0 and $num < 10;
}
foreach ($arr as $item){
if (isNumberInRange($item)){
    $arr1[] = $item;
}}
echo '<pre>';
print_r($arr1);
echo '</pre>';
?>


















