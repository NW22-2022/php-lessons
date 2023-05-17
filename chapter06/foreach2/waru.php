<?php
  // 配列の生成
  $themes = [
    'red'   => '赤',
    'blue'  => '青',
    'green' => '緑'
  ];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>foreach文2</title>
</head>
<body>
  <h1>foreach文2</h1>

  <form action="receive.php" method="post">
    <dl>
      <dt><label for="theme">テーマカラーを選択して下さい</label></dt>
      <dd>
        <textarea name="theme" id="" cols="30" rows="10"></textarea>
      </dd>
    </dl>
    <p><input type="submit" value="送信"></p>
  </form>
</body>
</html>
