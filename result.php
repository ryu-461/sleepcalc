<?php
  include('./_header.php');
?>

<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <title>計算結果</title>
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
  <!-- sweetalert-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
  <div class="row">
    <div class="col-lg-12 text-center">
      <a href="index.php"><img id="logo" src="img/logo-removebg-preview.png" class="img-fluid"></a>
      <img id="sleep" src="img/suimin_man.png" alt="睡眠のイラスト">
    </div>
  </div>

  <?php
    // 起床時間
    $gosleep = $_POST["go"];
    // 就寝時間
    $wakeup = $_POST["up"];
    // インプットが空欄だったらアラートを表示
    if (empty($gosleep) or empty($wakeup)) {
      echo '<script>
      swal({ title: "空欄です",
        text: "計算するには就寝・起床時間を入力してください",
        confirmButtonText : "戻る",
        icon: "error"}).then(okay => {
          if (okay) {
          window.location.href = "index.php";
        }
      });
      </script>';
      return;
    }
    // エラー処理
    if ($gosleep > $wakeup) {
      echo '<script>

      swal({ title: "エラー",
        text: "計算に失敗しました。値を見直してください。",
        confirmButtonText : "戻る",
        icon: "error"}).then(okay => {
          if (okay) {
          window.location.href = "index.php";
        }
      });
      </script>';
      return;
    }

    //日付
    $today = date("Y/m/d");
    $gotobed = new DateTimeImmutable("$gosleep");
    $wakeup = new DateTimeImmutable("$wakeup");
    $gotobed->format("H:i");
    $wakeup->format("H:i");
    $resultmsg = $gotobed->diff($wakeup)->format("あなたの睡眠時間は%h時間%i分です。");
    $sleepingtime = $gotobed->diff($wakeup)->format("%H:%i");

    echo "<div id='content' class='text-center'>";
    echo "<h3>$resultmsg</h3>"; // 結果
    echo "</div>"; 
  ?>

  <br>

  <div class="row">
    <div class="col-sm-12 text-center">
      <input class="btn-block btn-primary" type="button" onclick="location.href='index.php'" value="戻る"> 
      <form method="POST" action="register.php">
        <input type="hidden" name="today" value="<?php echo $today ?>">
        <input type="hidden" name="intime" value="<?php echo $sleepingtime ?>">
        <input class="btn-block btn-primary" id="gobtn" type="submit" value="登録">
      </form>
    </div>
  </div>

  <?php
    include('./_footer.php');
  ?>
  
</body>
</html>