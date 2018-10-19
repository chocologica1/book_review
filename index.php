<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>book_review</title>
  <link rel="stylesheet" href="style.css">
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
          <li><a href="http://localhost/book_review/index.php">トップ</a></li>
          <li><a href="XXX">本をさがす</a></li>
          <li><a href="XXX">ログイン</a></li>
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
          <div class="book-image">
            <img class="image" src="noimage.jpg" alt="no_image">
          </div>
          <div class="book-info">
            <p>著者</p>
            <p>出版社</p>
            <p>　</p>
            <p>　</p>
            <br>
            <a href="http://amazon.co.jp"><img src="amazon.png" alt="amazon"></a>
          </div>
        </div>
        <div class="box form">
          <p>この本のレビューを投稿してください　<span>(※は必須です)</span></p>
          <form method="post" action="review_confirm.php">
            <label>H N　<span> ※</span></label>
            <input type="text" method="post" name ="name">
            <br>
            <label>タイトル</label>
            <input type="text" size="40
            " method="post" name="title">
            <br>
            <label>本文　<span>※</span></label>
            <br>
            <textarea method="post" name="comments"  cols="50" rows="5"></textarea>
            <br>
            <input type="submit" class="submit" value="投稿する">
          </form>
        </div>
        <div class="review-wrapper">
          <div class="sentence">
            <h3>「本のタイトル」のレビュー</h3>
            <p>　投稿順 | 新着順</p>
          </div>
          <?php
          mb_internal_encoding("utf8");
          $pdo = new PDO("mysql:dbname=miliCoding;host=localhost;", "root", "");
          $stmt = $pdo->query("select * from book_review order by no desc");
          foreach ($stmt as $row) {
            echo "<div class='box review''>";
              echo "<p class='title'>".$row['title']."</p>";
              echo "<p class='comments'>".$row['comments']."</p>";
              echo "<p class='name'>by ".$row['name']."</p>";
            echo "</div>";
          }
          ?>
        </div>
      </div>
      <div class="right clum">
        <div class="sidemenu">
          <div class="menu">
            <h2>カテゴリ</h2>
            <ul>
              <li>文学</li>
              <li>ビジネス</li>
              <li>趣味・実用</li>
              <li>学習参考書</li>
              <li>漫画</li>
            </ul>
          </div>
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