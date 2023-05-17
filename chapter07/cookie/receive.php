<?php
  if ( isset( $_POST['save'] ) &&  $_POST['save'] === 'on'  ) {
    // $_POST['save']が存在しているとき〜 で、かつ
    // $_POST['save'] の中身が「on」と一致している時

    // クッキーにユーザ名を保存する
    setcookie('name', $_POST['name'], time() + 60 * 60 * 24 * 14 );
    $msg = 'ユーザー名を保存しました';


  } else {
    // ユーザ名を削除する
    setcookie('name', '', time() - 3600 );
    $msg = 'ユーザー名を保存しませんでした';
  }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Cookieの利用</title>
</head>
<body>
  <h1>Cookieの利用</h1>
  <?php echo $msg ;?>
  <p><a href="./">入力フォームに戻る</a></p>
</body>
</html>
