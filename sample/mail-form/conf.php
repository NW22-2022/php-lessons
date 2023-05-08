<?php
  // XSS対策
  function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
  }

  // セッションの開始
  session_start();

  // セッションが空ならリダイレクト
  if ( empty( $_SESSION) ) {
    header('Location: ./');
    exit();
  }

  // CSRF対策 ・・・ トークンを生成
  if (!isset($_SESSION['token'])) {
      $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(16));
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

  <form action="send.php" method="post">
    <p><input type="hidden" name="token" value="<?php echo h($_SESSION['token']); ?>"></p>
    <ul>
      <li><a href="./">入力フォームへ</a></li>
      <li><input type="submit" value="送信"></li>
    </ul>
  </form>
</body>
</html>