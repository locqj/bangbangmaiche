$(function(){
	angular.module('myApp',[]).controller('myCtrl', function($scope){

	});

	// 获取当前时间
	function current(){
		var dt = new Date();
		var year = dt.getFullYear();
		var month = dt.getMonth() + 1;
		var day = dt.getDate();
		var h = dt.getHours();
		var m = dt.getMinutes();
		var s = dt.getSeconds();

		//补全位数
		var month=month>9?month:('0'+month);
		var day=day>9?day:('0'+day);
		var h=h>9?h:('0'+h);
		var m=m>9?m:('0'+m);
		var s=s>9?s:('0'+s);

		
		var str = year+'-'+month+'-'+day+' '+h+':'+m+':'+s;
		return str;

	}
	setInterval(function(){$(".time").html(current)},1000); 
})

