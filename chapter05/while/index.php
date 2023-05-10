<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>while文</title>
</head>
<body>
<h1>while文</h1>
<?php
  $i = 1;
  while ( $i <= 10 ) {
    echo $i . '回目のループ<br>';
    $i++; // インクリメント（自身に1を加算）
  }
?>
</body>
</html>
