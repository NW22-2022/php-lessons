<?php
  // 変数の練習
  $page_name = '変数の実践';

  $x = 10;
  $y = 5;

  $result = $x + $y;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title><?php echo $page_name; ?></title>
</head>
<body>
  <h1><?php echo $page_name; ?></h1>
  <p>このページは「<?php echo $page_name; ?>」ページです</p>

  <p>
    <?php echo $x; ?> + <?php echo $y; ?> = <?php echo $result; ?>
  </p>

</body>
</html>
