$(function(){
	//光标放在列表上，变颜色
	$('.left .lname').hover(function(){
		$(this).find('a').css('color','#66D9EF');
	},function(){
		$(this).find('a').css('color','#333');
	});

	// =初始情况，ul全部隐藏
	 $('.left ul').hide();
	// 点击标题，分别显示与隐藏下面的小标题
	$('.left .lname').click(function(){
			var state=$(this).parent().find('ul').css('display');
			if(state=='none'){
				$(this).parent().find('ul').show();
			}else if(state=='block'){
				$(this).parent().find('ul').hide();
			}
	});
	//点击了小标题后，其他大标题里面的小标题全部隐藏,并且颜色也变回去
	$('.left ul li').click(function(){		

		$('.left ul').hide();
		// 每个小页面公共的#one是那个ul，点击进入小页面后，才显示。
		//#two是改变当前的小页面标题的id
		$('#one').show();
	})
	// =====点击标题显示与隐藏结束============================================================
	//汽车图片上传与删除
	$('.cimg-hide').hide();
	//点击添加照片
	var i=0;
	$('.cadd-img').click(function(){
		$('.ctianjia').append($('.cimag').eq(0).clone(true));
		$('#picture').name=i;
		i++;
	})
	//点击删除
	$('.cdelet').click(function(){
		$(this).parent('.cimag').remove();
	})
	//商城首页照片上传与删除
	$('.img-hide').hide();
	//点击添加照片
	$('.add-img').click(function(){
		$('.tianjia').append($('.imag').eq(0).clone(true));
	})
	//点击删除
	$('.delet').click(function(){
		$(this).parent('.imag').remove();
	})

	// ===============================================================


})