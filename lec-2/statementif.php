<?php
$x = 15;
if ($x > 20) {
    print('変数$xは20より大きい。');
} elseif ($x > 10) {
    print('変数$xは10より大きく、20以下です。');
} else {
    print('変数$xは10以下です。');
}

print("" . "\n");

$period = '昭和';
switch ($period) {
    case '大正':
        print("あなたは、大正生まれです。");
        break;
    case '昭和':
        print("あなたは、昭和生まれです。");
        break;
    case '平成':
        print("あなたは、平成生まれです。");
        break;
    default:
        print("あなたは年齢未詳です。");
}
?>