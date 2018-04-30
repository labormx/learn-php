<?php
for($i=1;$i<10;$i++){
    print("$i 回目のループ\n");
}

$i = 1;
while($i < 10){
    print("$i ループ目の処理だよ。\n");
    $i = $i + 1;
}

$data = array('すいか'=>'野菜', 'いちご'=>'果物', '大根'=>'野菜',);
foreach ($data as $key=>$value) {
    print("$key : $value <br />\n");
    print($data[$key]."\n");
}
?>