<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>foreach文2</title>
  <style>
    .red {
      background-color: #FFCDD2;
    }
    .blue {
      background-color: #BBDEFB;
    }
    .green {
      background-color: #C8E6C9;
    }
  </style>
</head>
<body class="<?php echo htmlspecialchars($_POST['theme'], ENT_QUOTES, 'UTF-8'); ?>">
  <h1>foreach文2</h1>
  <p>テーマを変更しました。</p>

  <p><a href="./">テーマ選択に戻る</a></p>
  </form>
</body>
</html>