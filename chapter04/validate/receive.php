<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>if文による入力内容のチェック</title>
</head>
<body>
<?php
  // 名前の必須項目チェック
  if ( $_POST['your_name'] === '') {
    echo '<p>名前はちゃんと入力してな！</p>';
  }

  // メルアドの形式チェック
  if( filter_var($_POST['your_email'], FILTER_VALIDATE_EMAIL) === false ) {
    echo '<p>メルアドの形式で入力してな！</p>';
  }
?>
</body>
</html>
