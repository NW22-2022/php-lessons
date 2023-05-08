<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>if文による入力内容のチェック</title>
</head>
<body>
<?php
  // 必須項目チェック
  if ( $_POST['your_name'] == '' ) {
    // $_POST['your_name'] が 空白 と等しい時の処理
    echo '<p>お名前を入力して下さい。</p>';
  }

  // メールアドレスの形式チェック
  if ( !filter_var($_POST['your_email'], FILTER_VALIDATE_EMAIL) ) {
    // $_POST['your_email'] のメールアドレス形式が false（データ型も含む） と等しい時の処理
    echo '<p>メールアドレスの形式が正しくありません。</p>';
  }

  // 文字数のチェック
  if ( mb_strlen( $_POST['your_password'] ) < 4) {
    // $_POST['your_password'] の文字数が 4 より小さい時の処理
    echo '<p>パスワードは4文字以上で入力して下さい。</p>';
  }
?>
</body>
</html>