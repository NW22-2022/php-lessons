<?php
  // タイムゾーンの設定
  date_default_timezone_set('Asia/Tokyo');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>date関数による日付の取得</title>
</head>
<body>
<h1>date関数による日付の取得</h1>
<?php

  echo date('Y年m月d日 H:i:s');
?>
</body>
</html>
