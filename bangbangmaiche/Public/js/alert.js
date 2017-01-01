$(function(){
	// 默认隐藏
	$('.alert').hide();
	$('.alertmap').hide();
	// $('.alertmoney').hide();
	$('.alert-context').hide();

	// 添加管理员
	$('.addmanage').click(function(){
		$('.alert-context').show();
		$('.alert').show();
	});
	$('.close').click(function(){
		$('.alert-context').hide();
		$('.alert').hide();
	});
	// 修改地图
	$('.modifymap').click(function(){
		$('.alert-mapcontext').show();
		$('.alertmap').show();
	});
	$('.close').click(function(){
		$('.alert-mapcontext').hide();
		$('.alertmap').hide();
	});
	// 修改定金
	$('.modifymoney').click(function(){
		$('.alert-moneycontext').show();
		$('.alertmoney').show();
	});
	$('.close').click(function(){
		$('.alert-moneycontext').hide();
		$('.alertmoney').hide();
	});
})