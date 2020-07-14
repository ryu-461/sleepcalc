<?php
include('./_header.php');
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>睡眠時間 計算ツール</title>
  <!--Bootstrap  css-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!--GOogleフォント-->
  <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
  <!-- mystyle -->
  <link rel="stylesheet" href="css/style.css">
  <!--Bootstrap js-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>
  <header>
    <a href=""><img id="logo" src="img/logo-removebg-preview.png"></a>
    <img id="sleep" src="img/suimin_man.png" alt="睡眠のイラスト">
    <hr>
  </header>
  <div id="tool">
    <h5>質のいい睡眠は日々のパフォーマンスを上げるのに必要不可欠です。<br> 自分の睡眠時間を見直して健康な体を作りましょう!!</h5>
    <br>
  </div>
    <div id="content" class="text-center">
      <form action="result.php" method="POST">
        <label>就寝時間　：　　　<input class="inp1" type="time" name="go"></label>
        <br>
        <label>起床時間　：　　　<input class="inp2" type="time" name="up"></label>
        <br>
        <input class="btn-lg btn-primary" type="submit" value="計算" id="btn">
      </form>
    </div>

  <script src="script/main.js"></script>

  <div class="row">
    <div class="col-sm-12 text-center">
      <small>© 2020 Rtakahashi</small>
    </div>
  </div>
</body>
</html>