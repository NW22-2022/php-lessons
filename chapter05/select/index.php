<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>セレクトボックスの生成</title>
</head>
<body>
  <h1>あなたは何歳ですか？</h1>

  <form action="" method="post">
    <dl>
      <dt><label for="age">年齢</label></dt>
      <dd>
        <select name="age" id="age">
          <?php
            for ($i = 10; $i <= 70; $i++) {
              echo '<option class="" id="">'. $i .'歳</option>';
            }
          ?>
        </select>
      </dd>
    </dl>
    <p><input type="submit"　value="送信"></p>
  </form>
</body>
</html>
