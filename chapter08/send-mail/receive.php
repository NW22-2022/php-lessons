<?php
  // 1.言語の設定
  mb_language('ja'); // me_send_mailで利用する言語（日本語は「ja」）

  // 2.文字コードの設定
  mb_internal_encoding('UTF-8'); // ページの文字コードをUTF-8で設定

  // メールアドレスが空っぽならリダイレクト
  if( $_POST['email'] === '' ) {
    header('Location: ./');
    exit();
  }

  // 3.mb_send_mailの準備
  $to = $_POST['email']; // 送り先
  $subject = 'PHPからの送信テスト'; // 件名
  $body = 'こんにちは。PHPからの送信テストです。';
  $from = mb_encode_mimeheader('NW22') . '<shibatest@icloud.com>';

  /*
    送り主：
      メルアドだけ ・・・ 'メールアドレス'
      メルアドと名前 ・・・ '名前<メールアドレス>' だけどこのままではだめなので↓のようにする
      　　　　　　　　　　　　mb_encode_mimeheader('名前') . '<メールアドレス>';
  */

  // 4. メールの送信
  $resulut = mb_send_mail($to, $subject, $body, 'From: ' . $from);

  // 送信成功か失敗かを分岐
  if ( $resulut ) {
    // 送信成功
    $msg = '送信成功！';
  } else {
  // 送信失敗
    $msg = '送信失敗！';
  }


?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>メールの送信</title>
</head>
<body>
  <h1>メールの送信</h1>
  <p>
    <?php echo $msg; ?>
  </p>

  <p><a href="./">入力フォームに戻る</a></p>
</body>
</html>
