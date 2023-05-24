<?php
  // セッションの開始
  session_start();

  // 味見
  // echo '<pre>';
  // print_r($_SESSION);
  // echo '</pre>';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>入力確認</title>
</head>
<body>
  <h1>入力確認</h1>
  <dl>
    <dt>お名前</dt>
    <dd>
      <?php echo htmlspecialchars($_SESSION['post']['name'], ENT_QUOTES, 'UTF-8'); ?>
    </dd>
    <dt>メールアドレス</dt>
    <dd>
     <?php echo htmlspecialchars($_SESSION['post']['email'], ENT_QUOTES, 'UTF-8'); ?>
    </dd>
    <dt>お問い合わせ内容</dt>
    <dd>
      <?php echo htmlspecialchars($_SESSION['post']['message'], ENT_QUOTES, 'UTF-8'); ?>
    </dd>
  </dl>

  <ul>
    <li><a href="./">入力フォームへ</a></li>
    <li><a href="send.php">送信</a></li>
  </ul>
</body>
</html>
