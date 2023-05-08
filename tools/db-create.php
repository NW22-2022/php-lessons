<?php
  $os = 'win'; // win or mac

  if ($os === 'win') {
    $cd = 'C:\\xampp\\mysql\\bin\\';
    $pass = '';
  } 
  
  if ($os === 'mac') {
    $cd = '/Applications/MAMP/Library/bin/';
    $pass = 'root';
  }
  $db = mysqli_connect('localhost', 'root', $pass);

  //　接続チェック
  if ( !$db ) {
    // 接続失敗時はエラーを出力し、処理を終了
    echo mysqli_connect_error();
    exit();
  }

  // 文字コードの設定
  if ( !mysqli_set_charset($db, 'utf8') ) {
    echo mysqli_error($db);
    exit();
  }

  $sql = 'drop database if exists mini_cms_app';
  $result = mysqli_query($db, $sql);
  if (!$result) {
    echo mysqli_error($db);
    exit();
  }

  $sql = 'create database mini_cms_app default character set utf8';
  $result = mysqli_query($db, $sql);
  if ($result) {

    // ファイル名
    $fileName = dirname(__FILE__). '/db_backup_latest.sql';
    if(file_exists($fileName) && filesize($fileName) > 0){

      $cmd  = $cd;
      $cmd .= 'mysql';
      $cmd .= ' -u root';
      $cmd .= ' -p' . $pass;
      $cmd .= ' mini_cms_app';
      $cmd .= ' < ' . $fileName;

      //実行
      system($cmd);
      echo 'バックアップファイル「'. htmlspecialchars($fileName, ENT_QUOTES, 'UTF-8'). '」を復元できたかと・・・';
    } else {
      echo 'ファイルが存在しないか空っぽですね';
    }

  } else {
    echo 'データベースの作成に失敗';
  }
?>
