<?php
// セッションの開始
session_start();

// 日本語の設定
mb_language('ja');
mb_internal_encoding('UTF-8');

// CSRF対策 ・・・ トークンの確認
if (empty($_POST['token']) || $_POST['token'] != $_SESSION['token']) {
  exit('不正な投稿です。');
}

// メールアドレスが空の場合はリダイレクト
if ( empty($_SESSION['email']) ) {
  header('Location: ./');
  exit();
}

// 値を変数に格納
$to = $_SESSION['email']; // お問い合わせを受け取れるメールアドレスに変更
$subject = '【ダミー】お問い合わせありがありました。';
$message = $_SESSION['message'];
$from = 'From: '. mb_encode_mimeheader($_SESSION['name']). ' <'. $_SESSION['email'] .'>';

// メールの送信
$resulut = mb_send_mail($to, $subject, $message, $from);

// 送信に成功したらセッションを破棄してリダイレクト
if ($resulut) {

  // セッションの初期化で、値を削除
  $_SESSION = array();

  // クッキーのセッションIDを削除
  setcookie(session_name(), '', time() - 3600);

  // セッションの破壊
  session_destroy();

  header('Location: thanks.html');
} else {
  // 送信失敗
  header('Location: error.html');
}
exit();