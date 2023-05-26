<?php
  // セッションの開始
  session_start();

  // 日本語の設定
  mb_language('ja');
  mb_internal_encoding('UTF-8');


  // メールアドレスが空ならお帰り頂く
  if( empty($_SESSION['post']['email'] )) {
    header('Location: ./');
    exit();
  }

  // mb_send_mailの準備
  $to = 'shibatest@icloud.com';
  $subject = '【NW22】お問い合わせがありました';
  $body = $_SESSION['post']['message'];
  $form = mb_encode_mimeheader($_SESSION['post']['name']) . '<' . $_SESSION['post']['email'] .'>';

  // メール送信
  $result = mb_send_mail($to, $subject, $body, 'From: ' . $from);

  if ($result) {
    // 送信成功

    // Sessionの削除

    // $_SESSIONを空っぽに
    $_SESSION = [];

    // クッキーにあるセッションIDを削除
    setcookie(session_name(), '', time() - 3600);

    // セッションの破壊
    session_destroy();


    header('Location: thanks.html');
  } else {
    // 送信失敗
    header('Location: error.html');
  }

  exit();
