<?php
  // 連想配列の作成
  $post = [
    'title'   => 'はじめてのブログ',
    'author'  => '柴田',
    'date'    => '2023/05/12',
    'content' => 'はじめまして、どうも。これからブログを始めます。'
  ];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>連想配列</title>
</head>
<body>
  <h1><?php echo $post['title']; ?></h1>
  <dl>
    <dt>公開日</dt>
    <dd>
      <time><?php echo $post['date']; ?></time>
    </dd>
    <dt>著者</dt>
    <dd>
      <?php echo $post['author']; ?>
    </dd>
  </dl>
  <p>
    <?php echo $post['content']; ?>
  </p>
</body>
</html>
