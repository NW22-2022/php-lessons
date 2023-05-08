<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>論理演算子を使ったログインチェック</title>
</head>
<body>
<?php
// ログインできるメルアドとパスワードを決める
$email = "shibatest@icloud.com";
$password = "shibashibashiba";

// ログインチェック
if (
   $_POST['your_email'] ===  $email &&
   $_POST['your_password'] === $password
   ) {
  // ログイン成功
  echo '<p>ログイン成功</p>';
} else {
  // ログイン失敗
  echo 'メールアドレスかパスワードが間違っています';
}

?>
</body>
</html>
