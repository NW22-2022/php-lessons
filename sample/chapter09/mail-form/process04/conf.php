<?php
  // セッションの開始
  session_start();

  // XSS対策
  function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
  }

  // セッションが空ならリダイレクト
  if ( empty( $_SESSION) ) {
    header('Location: ./');
    exit();
  }
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
      <?php echo h($_SESSION['name']); ?>
    </dd>
    <dt>メールアドレス</dt>
    <dd>
      <?php echo h($_SESSION['email']); ?>
    </dd>
    <dt>お問い合わせ内容</dt>
    <dd>
      <?php echo nl2br( h($_SESSION['message']), false); ?>
    </dd>
  </dl>

  <ul>
    <li><a href="./">入力フォームへ</a></li>
    <li><a href="send.php">送信</a></li>
  </ul>
</body>
</html>