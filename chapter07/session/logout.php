<?php
  // セッションの開始
  session_start();

  // セッションの配列を空にする
  // （住人の退去）
  $_SESSION = [];

  // クッキーのセッションIDを削除
  // （整理券を捨てる）
  setcookie(session_name(), '', time() - 3600);

  // セッションの破壊
  session_destroy();

  // リダイレクト
  header('Location: ./');
  exit();
?>
