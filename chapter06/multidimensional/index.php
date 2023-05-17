<?php
  // 多次元配列
  $posts = [
    [
      'title'   => 'はじめてのブログ',
      'date'    => '2023/05/13',
      'author'  => '柴田',
      'content' => 'はじめまして、ブログ始めました。'
    ],
    [
      'title'   => '2回目のブログ',
      'date'    => '2023/05/14',
      'author'  => '柴田',
      'content' => 'こんにちはブログ2日めになりました。'
    ],
    [
      'title'   => '最後のブログ',
      'date'    => '2023/05/14',
      'author'  => '柴田',
      'content' => 'こんにちは今日でブログが最後になりました。'
    ],
  ];


?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>多次元配列</title>
</head>
<body>
  <h1>記事一覧</h1>
  <?php foreach($posts as $post) : ?>
  <article>
    <h2><?php echo $post['title']; ?></h2>
    <ul>
      <li>
        公開日： <time><?php echo $post['date']; ?></time>
      </li>
      <li>
        著者： <?php echo $post['author']; ?>
      </li>
    </ul>

    <p>
      <?php echo $post['content']; ?>
    </p>
  </article>
  <?php endforeach; ?>








</body>
</html>
