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
        <select name="theme" id="theme">
        <?php
          foreach( $themes as $key => $val  ) {
            echo '<option value="'. $key .'">'. $val .'</option>';
          }
        ?>
        </select>
      </dd>
    </dl>
    <p><input type="submit" value="送信"></p>
  </form>
</body>
</html>
