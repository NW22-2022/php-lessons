<?php

  // $nameß = ''; // ユーザー名の初期値
  // // クッキーの読み込み
  // if ( isset($_COOKIE['name'] ) ) {
  //   // クッキーの「name」部屋が存在する時
  //   $name = $_COOKIE['name'];
  // }

  $name = isset($_COOKIE['name'] ) ? $_COOKIE['name'] : '';

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Cookieの利用</title>
</head>
<body>
  <h1>Cookieの利用</h1>
<form action="receive.php" method="post">
  <dl>
    <dt><label for="name">ユーザー名</label></dt>
    <dd>
      <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
    </dd>
    <dt><label for="password">パスワード</label></dt>
    <dd>
      <input type="password" name="password" id="password">
    </dd>
  </dl>
  <p><label><input type="checkbox" name="save" value="on" checked> ユーザー名を保存する</label></p>
  <p><input type="submit" value="ログイン"></p>
</form>
</body>
</html>
