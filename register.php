<?php
  //接続情報の変数化
  $dsn = 'mysql:dbname=sleepcalc;host=localhost';
  $user = 'root';
  $password = 'Ryu_1146';
  
    // 変数の初期化
  $sql = null;
  $stmt = null;

  if (isset($_POST["today"]) && isset($_POST["intime"])) {
    // 今日の日付
    $today = $_POST["today"];
    // 就寝時間
    $sleeptime = $_POST["intime"];

    try {
      $pdh = new PDO($dsn, $user, $password);
      // SQL作成
      $sql = "INSERT INTO sleeplogs (
        日付, 睡眠時間
      ) VALUES (
        :today,:sleeptime
      )";
  
      // SQL実行
      $stmt = $pdh->prepare($sql);
  
      // 挿入する値を配列に格納する
      $params = array(':today' => $today, ':sleeptime' => $sleeptime);
  
      // 挿入する値が入った変数をexecuteにセットしてSQLを実行
      $stmt->execute($params);
  
    } catch (\PDOException $e) {
      throw new \PDOException($e->getMessage(), (int) $e->getCode());
      echo '登録失敗しました';
    }
  }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&display=swap" rel="stylesheet">
  <title>登録結果</title>
  
  <link rel="shortcut icon" href="img/favicon.ico">
  <!--Bootstrap js-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- sweetalert-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
    include('./_header.php');
  ?>

  <header>
    <a href=""><img id="logo" src="img/logo-removebg-preview.png"></a>
    <img id="sleep" src="img/suimin_man.png" alt="寝てる人のイラスト">
    <hr>
  </header>
  <div id="tool">
    <h3>今日の日付 : <?php echo $today; ?></h3>
    <h3>睡眠時間を登録しました!</h3>
    <br>
    <small>登録した睡眠時間はDATAタブから見ることができます。</small>
    <br>
    <input class="btn-lg btn-primary back text-center" type="button" onclick="location.href='index.php'" value="戻る" id="btn">
  </div>
</body>
</html>