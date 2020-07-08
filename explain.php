<?php
  include('./_header.php');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アプリの紹介</title>
  <!--Bootstrap  css-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!--Googleフォント-->
  <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
  <!-- mystyle -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="img/favicon.ico">
  <!--Bootstrap js-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
</head>
<body>

  <header>
    <a href=""><img id="logo" src="img/logo-removebg-preview.png"></a>
    <img id="sleep" src="img/suimin_man.png" alt="睡眠のイラスト">
    <hr>
  </header>
  <div class="container-fruid">
    <div class="row">
      <div class="col-md-9">
        <div class="jumbotron text-center">
          <h2>このアプリについて<small class="text-muted">welcome to myapp!</small></h2>
          <br>
          <p>LAMP環境の構築、データベース接続の練習に作成したアプリとなります。<br></p>
        </div>
      </div>

      <div class="col-md-3">
      <a class="twitter-timeline" data-lang="ja" data-width="500" data-height="630" href="https://twitter.com/Ry86163204?ref_src=twsrc%5Etfw">Tweets by Ry86163204</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
    </div>
  </div>
  
  <script src="script/main.js"></script>
</body>