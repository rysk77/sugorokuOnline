<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="stylesheet.css">
	<title>Sugoroku</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1><i class="fas fa-dice"></i>すごろく<i class="fas fa-dice"></i></h1>
		<?php
				$pdo = new PDO('mysql:host=localhost;dbname=sugoroku;charset=utf8','aaa','aaa');
				$sql = "SELECT login from data where id = 1";
	      $stmt = $pdo->query($sql);
	      $stmt->execute();
	      $login = $stmt->fetchColumn();
		?>

		<?php if( $login == 0 ) : ?>

				<form class="" action="waiting.php" method="post" name="name">
					<input type="text" name="name" placeholder="名前を入力してね">
					<input type="submit" name="" value="対戦を始める"　onclick="location.href='waiting.php'">
				</form>

		<?php else: ?>

				<form class="" action="watch2.php" method="post" name="name">
					<input type="text" name="name" placeholder="名前を入力してね">
					<input type="submit" name="" value="対戦を始める"　onclick="location.href='watch2.php'">
				</form>

		<?php endif; ?>
</body>
</html>
