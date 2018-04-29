<html>
<head>
  <title>HTMLパラメータ</title>
</head>
<body>
  <form method="post" action="post2.php">
    名前：<br />
    <input type="text" name="name" size="20" /><br />

    すきな食べ物：<br />
    <input type="checkbox" name="food[]" value="humberg" />ハンバーグ
    <input type="checkbox" name="food[]" value="curry" />カレー
    <input type="checkbox" name="food[]" value="noodle" />ラーメン<br />
    <input type="submit" value="送信" />
  </form>
</body>
</html>