(function () {
    document.addEventListener('DOMContentLoaded', function () {
		var deviceWidth = document.documentElement.clientWidth;
		if(parseFloat(deviceWidth)>=720){
             document.documentElement.style.fontSize=100+'px';
		}else{
			document.documentElement.style.fontSize = deviceWidth / 7.2 + 'px';
		}
		
    }, false);
	window.onresize = function(){
		var deviceWidth = document.documentElement.clientWidth;
		if(parseFloat(deviceWidth)>=720){
             document.documentElement.style.fontSize=100+'px';
		}else{
			document.documentElement.style.fontSize = deviceWidth / 7.2 + 'px';
		}
};
})(); 