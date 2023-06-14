<?php
// ファイルの読み込み
require_once('inc/config.php'); // 設定ファイル
require_once('inc/functions.php'); // 関数定義ファイル


// GETパラメーターがなかったらおかえり頂く
if (empty($_GET['id'])) {
  header('Location: ./');
  exit;
}

try {
  // データベースの接続
  $dbh = new PDO(DSN, DB_USER, DB_PASSWORD); // XAMPPは空

  // SQLのエラーが発生したときに「PDOException」という形の例外を投げる設定
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // SQL文の作成（変数を埋め込みたいところは「?」を入れておく）
  $sql = 'select p.*, c.category_name
          from posts as p join categories as c
          on p.category_id = c.id where p.id = ?'; // ? はプレースホルダー

  // プリペアドステートメントの作成（テンプレートのようなもの）
  $stmt = $dbh->prepare($sql); // プレースホルダーを指定したSQLを渡す

  // ?に値をガッチャンコ（SQL文内の「?」の数だけ実行する）
  $stmt->bindValue(1, (int)$_GET['id'], PDO::PARAM_INT); // 1つめの「?」に数値型のGETパラメータをガッチャンコ

  // ステートメントの実行
  $stmt->execute();

  // SQLクエリの実行
  // $stmt = $dbh->query($sql);

  // 実行結果を連想配列に変換
  $result = $stmt->fetch(PDO::FETCH_ASSOC);

  // 味見
  echo '<pre>';
  print_r($result);
  echo '</pre>';

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
  <title><?php echo h($result['title']); ?></title>
</head>

<body>
  <h1><?php echo h($result['title']); ?></h1>
  <ul>
    <li>公開日： <time datetime="<?php echo h($result['created']); ?>"><?php echo h(date('Y年m月d日', strtotime($result['created']))); ?></time></li>
    <li>カテゴリー：<?php echo h($result['category_name']); ?></li>
  </ul>
  <p>
    <?php echo h($result['content']); ?>
  </p>
  <p>
    <a href="./">一覧に戻る</a>
  </p>
</body>

</html>
