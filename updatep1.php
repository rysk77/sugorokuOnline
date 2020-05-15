<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="stylesheet.css">
	<title>Sugoroku</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
	<?php
	//ファイル読み込み
	require_once("sugorokuClass.php");
	//インスタンス作成
	$game= new sugorokuClass();
	$game->sum1 = $_POST['sum1'];
	$game->count1 = $_POST['count1'];
	$game->dice1 = $_POST['dice1'];
	$game->eventNum = $_POST['event'];
	$game->state = 2;
	$pdo = new PDO('mysql:host=localhost;dbname=sugoroku;charset=utf8','aaa','aaa');
	$sql = "UPDATE masu SET sum1 = '$game->sum1', count1 = '$game->count1' WHERE id = 1";
	$pdo->query($sql);
	$sql = "UPDATE masu SET dice = '$game->dice1', eventNum = '$game->eventNum', flag = 1  WHERE id = 2";
	$pdo->query($sql);
	$pdo = null;
	?>
	<?php if(1 == 1) : ?>
			<script type="text/javascript">
				location.href = "watch1.php?";
			</script>
	<?php endif; ?>
</body>
</html>
