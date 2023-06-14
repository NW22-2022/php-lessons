<?php
// ファイルの読み込み
require_once('inc/config.php'); // 設定ファイル
require_once('inc/functions.php'); // 関数定義ファイル


try {
  // データベースの接続
  $dbh = new PDO(DSN, DB_USER, DB_PASSWORD); // XAMPPは空

  // SQLのエラーが発生したときに「PDOException」という形の例外を投げる設定
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // SQL文の作成
  $sql = 'select * from posts order by created desc';

  // SQLクエリの実行
  $stmt = $dbh->query($sql);

  // 実行結果を連想配列に変換
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // 味見
  // echo '<pre>';
  // print_r($result);
  // echo '</pre>';

  // データベースの切断
  $dbh = null;
} catch (PDOException $e) {
  // 例外が発生したときの処理
  echo 'エラー：' . h($e->getMessage());
  exit();
}


// echo '接続成功';
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>新着記事一覧</title>
</head>

<body>
  <h1>新着記事一覧</h1>

  <?php foreach ($result as $row) :  ?>
    <article>
      <a href="detail.php?id=<?php echo h($row['id']); ?>">
        <h2><?php echo h($row['title']); ?></h2>
        <p>
          <time datetime="<?php echo h($row['created']); ?>">
            <?php echo h(date('Y年m月d日', strtotime($row['created']))); ?>
          </time>
        </p>
      </a>
    </article>
  <?php endforeach; ?>

</body>

</html>
