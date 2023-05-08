<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>if文による入力内容のチェック</title>
</head>
<body>
<?php
  // エラーメッセージ格納用の変数を初期化
  $error = '';

  // 名前の必須項目チェック
  if ( $_POST['your_name'] === '') {
    // echo '<p>名前はちゃんと入力してな！</p>';
    $error .= '<p>名前はちゃんと入力してな！</p>';
  }

  // メルアドの形式チェック
  if( !filter_var($_POST['your_email'], FILTER_VALIDATE_EMAIL) ) {
    $error .= '<p>メルアドの形式で入力してな！</p>';
  }

  // パスワードの文字数チェック
  if( mb_strlen( $_POST['your_password'] ) < 4 ) {
    $error .= '<p>パスワードは4文字以上で！！</p>';
  }


  // エラーがあるかないか
  if ( !empty($error)) {
    // エラーがある

    // エラーメッセージを画面に出す
    echo $error;
  } else {
    // エラーがない
    // 「エラーなし」って画面に出す
    echo 'エラーなし';
  }
?>
</body>
</html>
