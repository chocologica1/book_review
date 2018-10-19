<?php
  mb_internal_encoding("utf8");
  $pdo = new PDO("mysql:dbname=miliCoding;host=localhost;","root","");
  $pdo->exec("insert into book_review(name,title,comments) values('".$_POST['name']."','".$_POST['title']."','".$_POST['comments']."');");
/*  header("Location:http://localhost/book_review/index.php");
*/
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>book_review 投稿完了</title>
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
          <P>投稿ありがとうございました。</P>
          <a href="http://localhost/book_review/index.php">本のページに戻る</a>
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
-->