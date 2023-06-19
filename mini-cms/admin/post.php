<?php
// ファイルの読み込み（DBの設定ファイル、関数定義ファイル）


try {
  // データベースの接続

  // SQLのエラーがあったら例外を投げる設定

  // SQL文の作成（categoriesテーブルの全レコード）

  // SQLクエリの実行

  // 実行結果を連想配列に格納

  // 味見

  // データベースの切断

} catch() {
  // 例外があった時
  // エラーメッセージを出して処理終了

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
      <dt><label for="category_id">カテゴリーID</label></dt>
      <dd>
        <input type="text" id="category_id" name="category_id">
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
