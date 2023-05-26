<?php
  // セッションの開始
  session_start();


  // XSS対策
  //（htmlspecialcharsを短くする関数）
  function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
  }

  // ダイレクトでアクセスしてきたユーザーにはお帰り頂く
  if ( empty($_SESSION['post']) ) {
    header('Location: ./');
    exit();
  }


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
      <?php echo h($_SESSION['post']['name']); ?>
    </dd>
    <dt>メールアドレス</dt>
    <dd>
     <?php echo h($_SESSION['post']['email']); ?>
    </dd>
    <dt>お問い合わせ内容</dt>
    <dd>
      <?php echo nl2br(h($_SESSION['post']['message'])); ?>
    </dd>
  </dl>

  <ul>
    <li><a href="./">入力フォームへ</a></li>
    <li><a href="send.php">送信</a></li>
  </ul>
</body>
</html>
