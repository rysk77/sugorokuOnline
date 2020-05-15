var player =2;//プレイ人数

//サイコロを振る演出
  var shuffle = function(){
		var fakeNum = Math.floor(Math.random() * 6) + 1;
		var fakeFig = fakeNum + ".png";
		$id('result').innerHTML = "<img src='" + fakeFig + "' width='70 height='70'>";
	}
