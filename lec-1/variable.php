<?php
  define("URL", "www.yahoo.co.jp");

  echo URL;

  //URL = "google";

  print "\n";
  print __LINE__ ."\n";
  print __FILE__."\n";
  print __DIR__."\n";

  $name = "一太郎";

  $data1 = "こんばんは、${name}さん\n";
  print($data1);
  $data2 = 'こんばんは、${name}さん';
  print($data2);

  $x = 10 / 3;
  $y = 10 % 3;
  $z = 10.1 /3;
  $w = 10.1 % 3;
  var_dump($x);
  var_dump($y);
  var_dump($z);
  var_dump($w);

  ?>