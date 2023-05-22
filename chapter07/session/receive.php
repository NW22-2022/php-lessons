<?php
  // セッションの開始
  session_start();

  // ログインユーザーの管理
  $name = 'dummy';
  $password = 'dummy';

  // ログイン認証
  if ( $_POST['name'] === $name && $_POST['password'] === $password ) {
    // ログイン成功

    // セッションにユーザ名を保存
    $_SESSION['name'] = $_POST['name'];

    $msg = 'ようこそ！' . $_SESSION['name'] . 'さん';

  } else {
    // ログイン失敗
    $msg = 'ログインできませんでした';
  }

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Sessionの利用</title>
</head>
<body>
  <h1>Sessionの利用</h1>

  <p>
    <?php
      echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8');
    ?>
  </p>

  <ul>
    <li><a href="./">入力フォームに戻る</a></li>
    <li><a href="mypage.php">マイページへ</a></li>
  </ul>
</body>
</html>
