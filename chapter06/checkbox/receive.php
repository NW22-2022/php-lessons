<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>チェックボックスの受信</title>
</head>
<body>
  <h1>チェックボックスの受信</h1>
  <?php
    echo htmlspecialchars($_POST['soft'], ENT_QUOTES, 'utf-8');
  ?>

  <p><a href="./">入力フォームに戻る</a></p>
</body>
</html>
