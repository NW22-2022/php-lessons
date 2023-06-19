<?php
// ファイルの読み込み（DBの設定ファイル、関数定義ファイル）
require_once('../inc/config.php');
require_once('../inc/functions.php');


// ダイレクトでこのページに来た方にはお帰り頂く
// httpリクエストのメソッドが POST以外
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: ./');
  exit;
}


try {
  // DBの接続
  $dbh = new PDO(DSN, DB_USER, DB_PASSWORD);

  // SQLのエラーがあった時例外を投げる設定
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // SQL文の作成（レコードの挿入：変数を埋め込むところは「?」をを入れておく）
  $sql = 'insert posts(title, content, category_id, created)
    values(?, ?, ?, now())';

  // ステートメントの作成
  $stmt = $dbh->prepare($sql);

  // 「?」に値をガッチャンコ（?の数だけ記述）
  $stmt->bindValue(1, $_POST['title'], PDO::PARAM_STR);
  $stmt->bindValue(2, $_POST['content'], PDO::PARAM_STR);
  $stmt->bindValue(3, (int)$_POST['category_id'], PDO::PARAM_INT);

  // ステートメントを実行
  $stmt->execute();

  // DBの切断
  $dbh = null;
} catch (PDOException $e) {
  // 例外があった時
  // エラーメッセージを画面に出して処理終了
  echo 'エラー' . h($e->getMessage());
  exit;
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登録完了</title>
</head>

<body>
  <h1>登録完了</h1>
  <p>新着情報を登録しました。</p>

</body>

</html>
