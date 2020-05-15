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
			//DBからデータ取得
			$game->get1();
			//名前取得
			if($game->login == 0){
				$name = $_POST['name'];
				$game->name1 = $name;
				$game->login = 1;

			}
			//DB更新
		  $game->update();

			 if($game->state == 1){
			 	header("location: play1.php");
		 	 }
	?>
  <div class="container">
    <h1><i class="fas fa-dice"></i>すごろく<i class="fas fa-dice"></i></h1>
		<p>対戦相手が来るまでお待ちください</p>

		<script type="text/javascript">
		 var str = "sugoroku.php?";
			function update(){
				    //画面遷移
	    location.href = "waiting.php";
	}
	setTimeout('update()',3000);
		</script>
</body>
</html>
