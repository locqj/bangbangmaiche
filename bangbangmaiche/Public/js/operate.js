$(function(){
	
	$('#one').show();
	
	//表格序号
	var len = $('table tr').length - 2;
	//alert(len);
	for(var i=1;i<len+1;i++){
		$('table tr:eq('+i+') td:first').text(i);
	}

	//点击删除tr
	$('.delete').click(function(){
		//$(this).parents('tr').remove();
		len = len - 1;
		$('.count').html(len);
	//表格序号
	var len = $('table tr').length - 2;
	for(var i=1;i<len+1;i++){
		$('table tr:eq('+i+') td:first').text(i);
	}

	});
	//点击修改tr
	$('.modify').click(function(){
		$(this).parents('tr.tb-context').find('input').css('border','1px solid #ddd');
		$(this).parents('tr.tb-context').find('textarea').css('border','1px solid #ddd');
	});
	//点击保存tr
	$('.save').click(function(){
		$(this).parents('tr.tb-context').find('input').css('border','0');
		$(this).parents('tr.tb-context').find('textarea').css('border','0');
	});
// =============================================================================
	//分页中设置跳转链接
	$('#z').blur(function(){
		var url=$('.tiaozhuan').attr("href");
		var ye=$(this).val();
		var ss =url+ye;
		$('.tiaozhuan').attr("href",ss);
	})
	

	

 })