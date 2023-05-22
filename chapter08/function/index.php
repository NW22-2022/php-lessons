<?php
  // 独自関数の登録

  function area_of_triangle( $base, $height  ) {
    $result = $base * $height / 2;
    // echo $result;
    return $result;
  }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>独自関数</title>
</head>
<body>
  <h1>独自関数</h1>
  <p>底辺が 6cm 、高さが 4cm の三角形の面積は？</p>
  <p><?php echo area_of_triangle(6, 4); ?>cm</p>

  <?php
    $cup =  area_of_triangle(6, 4);
    if ($cup > 10) {
      echo '大きい三角形やなぁ！';
    }
  ?>

</body>
</html>
