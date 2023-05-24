<?php
  // セッションの開始
  session_start();

  // ダイレクトでアクセスしてきたユーザーにおかえり頂く
  if( empty($_POST) ) {
    header('Location: ./');
    exit();
  }

  // エラーメッセージ格納用の配列を初期化
  // 送信される度にエラーメッセージを空っぽにする
  $_SESSION['error'] = [];

  // 名前のエラーチェック
  // 必須項目チェック
  if ($_POST['name'] === '') {
    $_SESSION['error']['name'] = 'お名前は必須項目やで';
  }

  // メルアドのエラーチェック
  // 形式チェック
  if( !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
    $_SESSION['error']['email'] = 'メルアドの形式が正しくないよ';
  }

  // 必須項目チェック
  if ($_POST['email'] === '') {
    $_SESSION['error']['email'] = 'メルアドは必須項目やで';
  }

  // メッセージのエラーチェック
   // 必須項目チェック
  if ($_POST['message'] === '') {
    $_SESSION['error']['message'] = 'メッセージは必須項目やで';
  }

  // セッションにユーザーの入力内容を格納
  $_SESSION['post'] = $_POST;

  // エラーの有無
  if ( empty($_SESSION['error']) ) {
    // エラーなし
    header('Location: ./conf.php');
  } else {
    // エラーあり
    header('Location: ./');
  }
  exit();

  // 味見
  // echo '<pre>';
  // print_r($_SESSION);
  // echo '</pre>';
