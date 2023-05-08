<?php
  // セッションの開始
  session_start();

  // 日本語の設定
  mb_language('ja');
  mb_internal_encoding('UTF-8');

  // メールアドレスが空の場合はリダイレクト
  if ( empty($_SESSION['email']) ) {
    header('Location: ./');
    exit();
  }

  // 値を変数に格納
  $to = '[メールアドレス]'; // お問い合わせを受け取れるメールアドレスに変更
  $subject = '【ダミー】お問い合わせありがありました。';
  $message = $_SESSION['message'];
  $from = mb_encode_mimeheader($_SESSION['name']) . '<'. $_SESSION['email'] .'>';

  // メールの送信
  $resulut = mb_send_mail($to, $subject, $message, 'From: '. $from);

  // 送信に成功したかをチェック
  if ($resulut) {
    // 送信成功時

    // セッションの初期化で、値を削除
    $_SESSION = array();

    // クッキーのセッションIDを削除
    setcookie(session_name(), '', time() - 3600);

    // セッションの破壊
    session_destroy();

    // 送信成功ページにリダイレクト
    header('Location: thanks.html');
  } else {
    // 送信失敗時

    // 送信失敗ページにリダイレクト
    header('Location: error.html');
  }
  exit();