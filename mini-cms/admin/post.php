<?php
// ファイルの読み込み（DBの設定ファイル、関数定義ファイル）
require_once('../inc/config.php');
require_once('../inc/functions.php');


try {
  // データベースの接続
  $dbh = new PDO(DSN, DB_USER, DB_PASSWORD);

  // SQLのエラーがあったら例外を投げる設定
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  // SQL文の作成（categoriesテーブルの全レコード）
  $sql = 'select * from categories';

  // SQLクエリの実行
  $stmt = $dbh->query($sql);

  // 実行結果を連想配列に格納
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // 味見
  // echo '<pre>';
  // print_r($result);
  // echo '</pre>';

  // データベースの切断

} catch (PDOException $e) {
  // 例外があった時
  // エラーメッセージを出して処理終了
  echo 'エラー' . h($e->getMessage());
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>投稿フォーム</title>
</head>

<body>
  <h1>投稿フォーム</h1>
  <form action="add.php" method="post">
    <dl>
      <dt><label for="title">記事のタイトル</label></dt>
      <dd>
        <input type="text" id="title" name="title">
      </dd>
      <dt><label for="category_id">カテゴリー</label></dt>
      <dd>
        <select name="category_id" id="category_id">
          <?php foreach ($result as $row) : ?>
            <option value="<?php echo h($row['id']); ?>"><?php echo h($row['category_name']); ?></option>
          <?php endforeach; ?>
        </select>
      </dd>
      <dt><label for="content">記事の内容</label></dt>
      <dd>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
      </dd>
    </dl>
    <p><input type="submit" value="投稿"></p>
  </form>
</body>

</html>
