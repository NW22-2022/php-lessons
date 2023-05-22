<?php
  // セッションの開始
  session_start();

  // $_SESSION['name']が存在していない、または、
  // $_SESSION['name']が空っぽ。
  if ( !isset($_SESSION['name']) || empty($_SESSION['name'])  ) {
    // ログインユーザーではない

    // トップにリダイレクト
    header('Location: ./');
    exit();
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
  <h2>マイページ</h2>

  <p><a href="logout.php">ログアウト</a></p>
</body>
</html>
