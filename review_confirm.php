<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>book_review 入力内容確認</title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>
  <header>
    <div id="header-image">
      <div class="container">
        <h1>book_review</h1>
      </div>
    </div>
    <div class="menubar">
      <div class="container">
        <ul>
          <li>トップ</li>
          <li>本をさがす</li>
          <li>ログイン</li>
        </ul>
      </div>
    </div>
  </header>
  <main>
    <div class="container">
      <div class="left clum">
        <div class="book-wrapper">
          <div class="book-title">
            <h1>本のタイトル</h1>
          </div>
        </div>
        <div class="box form">
          <p class="confirm">この内容で投稿します。よろしいですか？</p>
          <br>
          <p>H N<br>　<?php echo $_POST['name'];?></p>
          <br>
          <p>タイトル<br>　<?php echo $_POST['title'];?></p>
          <br>
          <p>本文<br>　
          <?php echo $_POST['comments'];?></p>
          <br>
          <form action="index.php" method="post">
            <input type="submit" class="button back" value="戻って修正する">
          </form>
          <form action="insert.php" method="post">
            <input type="submit" class="button submit" value="投稿する">
            <input type="hidden" name="name" value="<?php echo $_POST['name'];?>">
            <input type="hidden" name="title" value="<?php echo $_POST['title'];?>">
            <input type="hidden" name="comments" value="<?php echo $_POST['comments'];?>">
          </form>
          <div class="clear"></div>
        </div>

      </div>
      <div class="right clum">
        <div class="sidemenu">
          
        </div>
      </div>
    </div>
  </main>
  <footer>
    <div class="container">
      <p>hogehoge</p>
    </div>
  </footer>
</body>
</html>