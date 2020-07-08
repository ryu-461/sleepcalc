<?php
    include('./_header.php');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>睡眠時間記録</title>
  <!--Bootstrap  css-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/log.css">
  <link rel="shortcut icon" href="img/favicon.ico">
  <!--Bootstrap js-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
<?php
  //接続情報の変数化
  $dsn = 'mysql:dbname=sleepcalc;host=localhost';
  $user = 'root';
  $password = 'MYpass_108746';
  
  try {
    $pdh = new PDO($dsn, $user, $password);

  // 受け取ったidのレコードの削除
  if (isset($_POST["delete_id"])) {
    $delete_id = $_POST["delete_id"];
    $sql  = "DELETE FROM sleeplogs WHERE ID = :delete_id;";
    $stmt = $pdh->prepare($sql);
    $stmt -> bindValue(":delete_id", $delete_id, PDO::PARAM_INT);
    $stmt -> execute();
  }

  } catch (\PDOException $e) {
      throw new \PDOException($e->getMessage(), (int) $e->getCode());
  }
  ?>



  <table class="table thead-light table-hover">
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">日付</th>
        <th class="text-center">睡眠時間</th>
        <th class="text-center">操作</th>
    </tr>

  <?php
    $pdh = new PDO($dsn, $user, $password);
    foreach ( $pdh->query ( 'select * from sleeplogs' ) as $row ) { ?>
    <tr class="text-center">
        <td><?= $row ['ID'] ?></td>
        <td><?= $row ['日付'] ?></td>
        <td><?= $row ['睡眠時間'] ?></td>
        <td>
					<form action="log.php" method="post">
						<input type="hidden" name="delete_id" value=<?= $row["ID"] ?>>
						<button type="submit" class="btn btn-danger">削除</button>
					</form>
				</td>
    </tr> 
  <?php  } ?>
  </table>
  <script src="script/main.js"></script>
</body>