<?php
  // ファイルの読み込み
  require_once('config.php');
  require_once('functions.php');
  
  // GETパラメータのチェック
  if ( empty($_GET['id']) ) {
    // $_GET['id'] が 空 の場合
    header('Location: index.php');
    exit();
  }

  try {
    // データベースへ接続
    $dbh = new PDO(DSN, DB_USER, DB_PASSWORD);
    
    // エラー発生時に「PDOExceotion」という例外を投げる設定に変更
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL文の作成
    $sql = 'DELETE FROM categories WHERE id = ?';

    // ステートメント用意
    $stmt = $dbh->prepare($sql);

    // プレースホルダーに値をガッチャンコ
    $stmt->bindValue(1, (int)$_GET['id'] , PDO::PARAM_INT);

    // ステートメントを実行
    $stmt->execute();
    
    // データベースとの接続を終了
    $dbh = null;

  } catch (PDOException $e) {
    //　例外発生時の処理
    echo 'エラー' . h($e->getMessage());
    exit();
  }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>カテゴリの削除</title>
</head>
<body>
  <h1>カテゴリの削除</h1>
  <p>カテゴリを削除しました。</p>
  
  <p><a href="./">一覧に戻る</a></p>
</body>
</html>