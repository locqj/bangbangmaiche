$(function(){

	$('.ucar').hide();
	$('.re-toplf a').css('color','#F08619');
	$('.re-toplf').css('border-bottom','1px solid #F08619');
	$('.re-toprg a').css('color','#333');

	//点击左边推荐用户
	$('.re-toplf').click(function(){
		$('.user').show();
		$('.ucar').hide();
		$('.re-toplf a').css('color','#F08619');
		$(this).css('border-bottom','1px solid #F08619');
		$('.re-toprg a').css('color','#333');
		$('.re-toprg').css('border-bottom','0');


	});
	//点击右边推荐车源
	$('.re-toprg').click(function(){
		$('.user').hide();
		$('.ucar').show();
		$('.re-toprg a').css('color','#F08619');
		$(this).css('border-bottom','1px solid #F08619');
		$('.re-toplf a').css('color','#333');
		$('.re-toplf').css('border-bottom','0');

	});

		//判断记录条数
		var len1=$('.user ul li').length;
		$('.user .num').text(len1);
		var len2=$('.ucar ul li').length;
		$('.ucar .num').text(len2);
		$('.count .num').css('font-weight','bold');

})