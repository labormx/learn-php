<?php
// 配列
$data = array(
    0 => "PHP",
    1 => "Java",
    2 => "Python",
    3 => "Pascal"
);
print($data[3]."\n");

$data2 = array("神奈川" => "横浜", "埼玉" => "さいたま", "群馬" => "高崎");
print($data2["埼玉"]);
$data3 = array("東京", "神奈川", "埼玉");
$data3[0] = "千葉";
$data3[] = "群馬";
print_r($data3);
?>

