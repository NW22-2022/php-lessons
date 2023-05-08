<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>データの受け取り</title>
</head>
<body>
  <h1>データの受取</h1>
  <?php
    // echo $_GET['your_name'];
    // echo $_POST['your_name'];

    echo htmlspecialchars($_POST['your_name'], ENT_QUOTES, 'utf-8');
  ?>

</body>
</html>
