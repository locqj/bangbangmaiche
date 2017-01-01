$(function(){

	//默认情况
	$('.price-list').hide();
	$('.lastest').css('color','#ea5857');

	//点击显示与隐藏
	$('.lastest').click(function(){
		$('.lastest-list').show();
		$('.price-list').hide();
		$('.search-list').hide();

		$(this).css('color','#ea5857');
		$('.price').css('color','#333');
	});

	$('.price').click(function(){
		$('.price-list').show();
		$('.lastest-list').hide();
		$('.search-list').hide();

		$(this).css('color','#ea5857');
		$('.lastest').css('color','#333');
	});

	$('.search2').click(function(){
		var id= $('#search').val();
		$('#a1').attr('href','http://xwj.565tech.com/Ucar/index.php?m=Phoneshop&a=showsearch&combine='+id);		
		$('.price-list').hide();
		$('.lastest-list').hide();
		$('.search-list').show();
	});

})