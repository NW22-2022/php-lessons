<?php
  // ファイルの読み込み
  require_once('inc/config.php'); // 設定ファイル

  // データベースの接続
  $dbh = new PDO(DSN, DB_USER, DB_PASSWORD); // XAMPPは空
  echo '接続成功';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>新着記事一覧</title>
</head>
<body>
  <h1>新着記事一覧</h1>
</body>
</html>
