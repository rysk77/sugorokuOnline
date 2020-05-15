var $id = function(id){ return document.getElementById(id); };
var diceFig; //サイコロの図を決定
var diceNum; //サイコロの価
var eventNum;

  //駒を進める　
  var move = function(){
  		$id(masuId).classList.remove("red");
  		sum++;
  		if(sum>=100){
  			masuId="m"+100;
  		}else{
  			masuId = "m" + sum;
  		}
  		$id(masuId).classList.add("red");
  }

  //駒を戻す
  var back = function(){
  		$id(masuId).classList.remove("red");
  		sum--;
  		if(sum<=0){
  			sum = 0;
  			masuId="m"+0;
  		}else{
  			masuId = "m" + sum;
  		}
  		$id(masuId).classList.add("red");
  }
  //スクロール
  var scroll = function(){
    $id('board').scrollTo(0,0);
    $id('board').scrollLeft += sum*104;
  }

//サイコロの出目作成と結果出力
var result = function(){
	return new Promise(function(resolve, reject) {
		diceNum = Math.floor(Math.random() * 6) + 1;
		diceFig = diceNum + ".png";
		$id('result').innerHTML = "<img src='" + diceFig + "' width='70' height='70'>"
		switch(diceNum){
	 			case 1:
	 				setTimeout(move,500);
	 				break;

	 			case 2:
	 				for (  var i = 0;  i < 2;  i++  ) {
	 					setTimeout(move,i*500);
	 					}
	 				break;

	 			case 3:
	 				for (  var i = 0;  i < 3;  i++  ) {
	 					setTimeout(move,i*500);
	 					}
	 				break;

	 			case 4:
	 				for (  var i = 0;  i < 4;  i++  ) {
	 					setTimeout(move,i*500);
	 					}
	 				break

	 			case 5:
	 				for (  var i = 0;  i < 5;  i++  ) {
	 					setTimeout(move,i*500);
	 					}
	 				break;

	 			case 6:
	 				for (  var i = 0;  i < 6;  i++  ) {
	 					setTimeout(move,i*500);
	 					}
	 				break;
	 		}
		});
}

//イベント
var events = function(){
	//入れ替えイベント
 if($id(masuId).classList.contains('exchange') == true && player>1){
	 var change1;
	 var change2;
	  $id('eventText').innerHTML = "イベント発生！ player2と入れ替え";
	  $id(masuId).classList.remove("red");
		$id(masuId2).classList.remove("blue");
    change1 = sum;
		change2 = sum2;
    sum = change2;
		sum2 = change1;
		masuId = "m" + sum;
		masuId2 = "m" + sum2;
		$id(masuId).classList.add("red");
		$id(masuId2).classList.add("blue");
 }else{
 var separateNum = Math.floor(Math.random() * 2) + 1;
 var eventNum = Math.floor(Math.random() * 6) + 1;
//進むイベント
 if( separateNum === 1){
	 $id('eventText').innerHTML = "イベント発生！　"+eventNum+ "マス進む";
	 setTimeout(function () {
	 	 switch(eventNum){
	 		 case 1:
          move();
	 			 break;

	 		 case 2:
	 			 for (  var i = 0;  i < 2;  i++  ) {
  			 	move();
	 				 }
	 			 break;

	 		 case 3:
	 			 for (  var i = 0;  i < 3;  i++  ) {
					 move();
	 				 }
	 			 break;

	 		 case 4:
	 			 for (  var i = 0;  i < 4;  i++  ) {
					 move();
	 				 }
	 			 break;

	 		 case 5:
	 			 for (  var i = 0;  i < 5;  i++  ) {
					 move();
	 				 }
	 			 break;

	 		 case 6:
	 			 for (  var i = 0;  i < 6;  i++  ) {
	 				 	move();
	 				 }
	 			 break;
	 	 }
	 },2500);
 }
//戻るイベント
 if( separateNum === 2){
　　$id('eventText').innerHTML = "イベント発生！　"+eventNum+ "マス戻る";
   setTimeout(function () {
			switch(eventNum){
					case 1:
						back();
					break;

					case 2:
						for (  var i = 0;  i < 2;  i++  ) {
							back();
						}
					break;

					case 3:
						for (  var i = 0;  i < 3;  i++  ) {
							back();
						}
					break;

					case 4:
						for (  var i = 0;  i < 4;  i++  ) {
							back();
							}
						break;

					case 5:
						for (  var i = 0;  i < 5;  i++  ) {
						  back();
							}
						break;

					case 6:
						for (  var i = 0;  i < 6;  i++  ) {
							back();
							}
						break;
				}
			},2500);
 }
}
}
var turn = function(){
	$id("sum1").value = sum;
	$id("count1").value = countVal;
	$id("dice1").value = diceNum;
	$id("event").value = eventNum;
	$id("sb").click();
}

//サイコロを降った際に行われる処理
var rollDiceRed =function(){
	//1つ目
	$id("rollBtn").disabled = "true";
	$id('eventText').innerHTML = "";
	for(var i = 0; i<15; i++){
		setTimeout(shuffle,i*50);
	}
	//2つ目　800ms
	setTimeout(function () {
		result();
		//3つ目　3800ms
			setTimeout(function () {
			 　　//カウント
				 countVal++;
					$id('count').innerHTML = countVal + "投目";
				 leftVal = 100 - sum;
				 $id('position').innerHTML = "ゴールまで"+leftVal+"マス";
			 　　
				 //ゴール判定
				 if(leftVal<=0){
					 $id('goal').innerHTML = "ゴールです！おめでとうございます"
					 $id('position').innerHTML = "";
					 $id('rollBtn').onclick = "";
					 player=0;
			 }
			 setTimeout(function () {
			 if( $id(masuId).classList.contains('event') == true){
			  events();
				setTimeout(function () {
					scroll();
					leftVal = 100 - sum;
			 	 $id('position').innerHTML = "ゴールまで"+leftVal+"マス";
				 setTimeout(function () {
					 turn();
			 },1500);
			 },4000);
			}else{
				eventNum = 0;
			  setTimeout(function () {
			 　	turn();
			  },500);
			}
			},500);
			}, 3000);
}, 800);
}

//イベント
var eventsw = function(){
	//入れ替えイベント
 if($id(masuId).classList.contains('exchange') == true && player>1){
	 var change1;
	 var change2;
	  $id('eventText').innerHTML = "イベント発生！ player2と入れ替え";
	  $id(masuId).classList.remove("red");
		$id(masuId2).classList.remove("blue");
    change1 = sum;
		change2 = sum2;
    sum = change2;
		sum2 = change1;
		masuId = "m" + sum;
		masuId2 = "m" + sum2;
		$id(masuId).classList.add("red");
		$id(masuId2).classList.add("blue");
 }else{
 var separateNum = Math.floor(Math.random() * 2) + 1;
//進むイベント
 if( separateNum === 1){
	 $id('eventText').innerHTML = "イベント発生！　"+eventNum+ "マス進む";
	 setTimeout(function () {
	 	 switch(eventNum){
	 		 case 1:
          move();
	 			 break;

	 		 case 2:
	 			 for (  var i = 0;  i < 2;  i++  ) {
  			 	move();
	 				 }
	 			 break;

	 		 case 3:
	 			 for (  var i = 0;  i < 3;  i++  ) {
					 move();
	 				 }
	 			 break;

	 		 case 4:
	 			 for (  var i = 0;  i < 4;  i++  ) {
					 move();
	 				 }
	 			 break;

	 		 case 5:
	 			 for (  var i = 0;  i < 5;  i++  ) {
					 move();
	 				 }
	 			 break;

	 		 case 6:
	 			 for (  var i = 0;  i < 6;  i++  ) {
	 				 	move();
	 				 }
	 			 break;
	 	 }
	 },2500);
 }
//戻るイベント
 if( separateNum === 2){
　　$id('eventText').innerHTML = "イベント発生！　"+eventNum+ "マス戻る";
   setTimeout(function () {
			switch(eventNum){
					case 1:
						back();
					break;

					case 2:
						for (  var i = 0;  i < 2;  i++  ) {
							back();
						}
					break;

					case 3:
						for (  var i = 0;  i < 3;  i++  ) {
							back();
						}
					break;

					case 4:
						for (  var i = 0;  i < 4;  i++  ) {
							back();
							}
						break;

					case 5:
						for (  var i = 0;  i < 5;  i++  ) {
						  back();
							}
						break;

					case 6:
						for (  var i = 0;  i < 6;  i++  ) {
							back();
							}
						break;
				}
			},2500);
 }
}
}

//サイコロの出目作成と結果出力
var resultw = function(){
	return new Promise(function(resolve, reject) {
		diceFig = dice2 + ".png";
		$id('result').innerHTML = "<img src='" + diceFig + "' width='70' height='70'>"
		switch(dice2){
	 			case 1:
	 				setTimeout(move,500);
	 				break;

	 			case 2:
	 				for (  var i = 0;  i < 2;  i++  ) {
	 					setTimeout(move,i*500);
	 					}
	 				break;

	 			case 3:
	 				for (  var i = 0;  i < 3;  i++  ) {
	 					setTimeout(move,i*500);
	 					}
	 				break;

	 			case 4:
	 				for (  var i = 0;  i < 4;  i++  ) {
	 					setTimeout(move,i*500);
	 					}
	 				break;

	 			case 5:
	 				for (  var i = 0;  i < 5;  i++  ) {
	 					setTimeout(move,i*500);
	 					}
	 				break;

	 			case 6:
	 				for (  var i = 0;  i < 6;  i++  ) {
	 					setTimeout(move,i*500);
	 					}
	 				break;
	 		}
		});
}
//サイコロを降った際に行われる処理
var rollRed =function(){
	//1つ目
	$id("rollBtn").disabled = "true";
	$id('eventText').innerHTML = "";
	for(var i = 0; i<15; i++){
		setTimeout(shuffle,i*50);
	}
	//2つ目　800ms
	setTimeout(function () {
		resultw();
		//3つ目　3800ms
			setTimeout(function () {
			 　　//カウント
				 countVal++;
					$id('count').innerHTML = countVal + "投目";
				 leftVal = 100 - sum;
				 $id('position').innerHTML = "ゴールまで"+leftVal+"マス";
			 　　
				 //ゴール判定
				 if(leftVal<=0){
					 $id('goal').innerHTML = "ゴールです！おめでとうございます"
					 $id('position').innerHTML = "";
					 $id('rollBtn').onclick = "";
					 player=0;
			 }
			 setTimeout(function () {
			 if( $id(masuId).classList.contains('event') == true){
			  eventsw();
				setTimeout(function () {
					scroll();
					leftVal = 100 - sum;
			 	 $id('position').innerHTML = "ゴールまで"+leftVal+"マス";
				 setTimeout(function () {
				 send2();
			 },1500);
			 },4000);
			}else{
			  setTimeout(function () {
			   send2();
			  },500);
			}
			},500);
			}, 3000);
}, 800);
}
