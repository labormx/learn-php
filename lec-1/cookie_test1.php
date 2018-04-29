<html>
<head>
  <title>クッキー情報確認</title>
</head>
<body>
  <form method="post" action="cookie_test2.php">
  メールアドレス：<input type="text" name="email" size="50"
    value="<?php print($_COOKIE['email2']); ?>" />
    <input type="submit" value="送信" />
  </form>
</body>
</html>
