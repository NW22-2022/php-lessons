<?php
  // 変数に値を代入
  $html = '<ul>';

  // 右辺6tyggggggggggggggggggggggggggggggggggggggggggggggyの文字列を連結して代入
  $html .= '<li>リスト1</li>';
  $html .= '<li>リスト2</li>';
  $html .= '<li>リスト3</li>';
  $html .= '</ul>';


  $name = '<strong>柴田</strong>';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>代入演算子</title>
</head>
<body>
  <h1>代入演算子</h1>
  <p><?php echo '僕は{$name}です。' ?> </p>
  <p><?php echo "僕は{$name}です。" ?> </p>

  <?php echo $html; ?>
</body>
</html>
