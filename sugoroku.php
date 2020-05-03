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
    //入力された名前を取得
    $name = $_GET['name'];
    //DBに接続
    $pdo = new PDO('mysql:host=localhost;dbname=sugorokuOnline;charset=utf8','aaa','aaa');

    $sql = "UPDATE data SET name_a ={$name}, WHERE id = 1";

    $res = $pdo->query($sql);

?>

  <div class="container">
    <h1><i class="fas fa-dice"></i>すごろく<i class="fas fa-dice"></i></h1>
  <div id="sugoroku">
  		<div class="upperPart">
  			<div class="information">
					<p>player1<?= $game->name_a; ?> player2<?= $game->name_b; ?></p>
					<p><?= $game->state; ?>sas</p>
  				<p id="turn"><?= $name ?>のターン</p>
  				<p><input type="button"  id="rollBtn" value="さいころを振る" onclick="rollDiceRed()"></p>
  				<p id="count">1投目</p>
  				<p id="position">ゴールまで100マス</p>
  				<p id="goal"></p>
  		  </div>
  			<div id="result"></div>
  		</div>
  		<div id="eventText">	</div>
  	  	<div class="sugorokuArea">
  			<div id="board">
  				<table>
  					<tr>
  						<td id="m0" class="red blue">スタート</td>
  						<td id="m1">1</td>
  						<td id="m2">2</td>
  						<td id="m3">3</td>
  						<td id="m4">4</td>
  						<td id="m5" class="event">5</td>
  						<td id="m6">6</td>
  						<td id="m7">7</td>
  						<td id="m8">8</td>
  						<td id="m9">9</td>
  						<td id="m10" class="event">10</td>
  						<td id="m11">11</td>
  						<td id="m12">12</td>
  						<td id="m13">13</td>
  						<td id="m14">14</td>
  						<td id="m15" class="event">15</td>
  						<td id="m16">16</td>
  						<td id="m17">17</td>
  						<td id="m18">18</td>
  						<td id="m19">19</td>
  						<td id="m20" class="event exchange">20</td>
  						<td id="m21">21</td>
  						<td id="m22">22</td>
  						<td id="m23">23</td>
  						<td id="m24">24</td>
  						<td id="m25" class="event">25</td>
  						<td id="m26">26</td>
  						<td id="m27">27</td>
  						<td id="m28">28</td>
  						<td id="m29">29</td>
  						<td id="m30" class="event">30</td>
  						<td id="m31">31</td>
  						<td id="m32">32</td>
  						<td id="m33">33</td>
  						<td id="m34">34</td>
  						<td id="m35" class="event">35</td>
  						<td id="m36">36</td>
  						<td id="m37">37</td>
  						<td id="m38">38</td>
  						<td id="m39">39</td>
  						<td id="m40" class="event exchange">40</td>
  						<td id="m41">41</td>
  						<td id="m42">42</td>
  						<td id="m43">43</td>
  						<td id="m44">44</td>
  						<td id="m45" class="event">45</td>
  						<td id="m46">46</td>
  						<td id="m47">47</td>
  						<td id="m48">48</td>
  						<td id="m49">49</td>
  						<td id="m50" class="event">50</td>
  						<td id="m51">51</td>
  						<td id="m52">51</td>
  						<td id="m53">53</td>
  						<td id="m54">54</td>
  						<td id="m55" class="event">55</td>
  						<td id="m56">56</td>
  						<td id="m57">57</td>
  						<td id="m58">58</td>
  						<td id="m59">59</td>
  						<td id="m60" class="event exchange">60</td>
  						<td id="m61">61</td>
  						<td id="m62">62</td>
  						<td id="m63">63</td>
  						<td id="m64">64</td>
  						<td id="m65" class="event">65</td>
  						<td id="m66">66</td>
  						<td id="m67">67</td>
  						<td id="m68">68</td>
  						<td id="m69">69</td>
  						<td id="m70" class="event">70</td>
  						<td id="m71">71</td>
  						<td id="m72">72</td>
  						<td id="m73">73</td>
  						<td id="m74">74</td>
  						<td id="m75" class="event">75</td>
  						<td id="m76">76</td>
  						<td id="m77">77</td>
  						<td id="m78">78</td>
  						<td id="m79">79</td>
  						<td id="m80" class="event exchange">80</td>
  						<td id="m81">81</td>
  						<td id="m82">82</td>
  						<td id="m83">83</td>
  						<td id="m84">84</td>
  						<td id="m85" class="event">85</td>
  						<td id="m86">86</td>
  						<td id="m87">87</td>
  						<td id="m88">88</td>
  						<td id="m89">89</td>
  						<td id="m90" class="event">90</td>
  						<td id="m91">91</td>
  						<td id="m92">92</td>
  						<td id="m93">93</td>
  						<td id="m94">94</td>
  						<td id="m95" class="event">95</td>
  						<td id="m96">96</td>
  						<td id="m97">97</td>
  						<td id="m98">98</td>
  						<td id="m99">99</td>
  						<td id="m100" class="r_none">ゴール</td>
  					</tr>
  				</table>
  			</div>
  		</div>
  	</div>
  </div>
	</div>
	<script type="text/javascript">
	function update(){
		   var name = "<?php echo $name;?>";
			 str = "sugoroku.php?name=" + name;
			 //画面遷移
			 location.href = str;
		 }
		//10秒に１回画面遷移させる
	setTimeout('update()',10000);
	</script>
  <script src="main.js"></script>
  <script src="player1.js"></script>
	<script src="player2.js"></script>
</body>
</html>
