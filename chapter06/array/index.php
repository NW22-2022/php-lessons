<?php
  // 配列の作成
  $members = [
    '指原', '山本', '柏木', '横山'
  ]
;
  // 配列の要素を変更
  $members[1] = 'まゆゆ';

  // 配列に要素を末尾に追加
  $members[] = '柴田';


?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>配列</title>
</head>
<body>
  <h1>配列</h1>
  <p><?php echo $members[1]; ?></p>

  <?php
    for ($i = 0; $i < count($members); $i++) {
      echo $members[$i] . '<br>';
    }
  ?>
</body>
</html>
