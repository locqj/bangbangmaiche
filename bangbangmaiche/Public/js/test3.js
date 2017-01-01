$(function(){
	alert("bhfj");
	//$('#one').show();
	
	// //表格序号
	// var len = $('table tr').length - 2;
	// //alert(len);
	// for(var i=1;i<len+1;i++){
	// 	$('table tr:eq('+i+') td:first').html(i);
	// }

	// //点击删除tr
	// $('.delete').click(function(){
	// 	$(this).parents('tr').remove();
	// 	len = len - 1;
	// 	$('.count').html(len);
	// //表格序号
	// var len = $('table tr').length - 2;
	// for(var i=1;i<len+1;i++){
	// 	$('table tr:eq('+i+') td:first').text(i);
	// }

	// });
	// //点击修改tr
	// $('.modify').click(function(){
	// 	$(this).parents('tr.tb-context').find('input').css('border','1px solid #ddd');
	// 	$(this).parents('tr.tb-context').find('textarea').css('border','1px solid #ddd');
	// });
	// //点击保存tr
	// $('.save').click(function(){
	// 	$(this).parents('tr.tb-context').find('input').css('border','0');
	// 	$(this).parents('tr.tb-context').find('textarea').css('border','0');
	// });
	
	// // 分页效果
	// var sum = $('table tr').length - 2;
	// alert(sum);
	// var pagesize = 5;
	// var totalpage = Math.ceil(sum/5);
	// //alert(totalpage);
 //  //获取当前显示的第一个tr的序号
 //  var firstshowtr = $('table :visible').find('tr:eq(1)').find('td:eq(0)').html();
 //  var lastshowtr = $('table :visible').find('tr:last-child').prev('tr').find('td:eq(0)').html();
 //  var nowpage =Math.ceil( sum / 5);

 //  //设置当前页码以及总页数
 //  $('table .totalpage').html(totalpage);
 //  $('table .nowpage').html(nowpage);
 // 	//先把所有的tr隐藏
 // 	//slice(i,j)方法：截取第i+1个到第j个tr
 // 	$('table tr').slice(1,sum+1).hide();
 // 	//先显示第一页
 // 	if (pagesize>1) {
 // 		$('table tr').slice(1,6).show();
 // 	}else{
 // 		$('table tr').slice(1,lastshowtr).show();
 // 	}
 	

 // 	//跳转到下一页的方法:先判断，再把当前页隐藏，显示下一页
 // 	$('table a.nextpage').click(function(){
 // 		//alert('123');
	// 	//判断当前页与最后一页的关系 		
	// 	if(nowpage==totalpage){
	// 		alert('当前为最后一页！');
	// 	}else{
 // 			//先隐藏当前页
 // 			//$('table tr').slice(firstshowtr,parseInt(firstshowtr)+parseInt(pagesize)).hide();
 // 				$('table tr').slice(1,sum+1).hide();
 // 			//显示下一页
 // 		 	//序号更新
 // 		 	firstshowtr = parseInt(firstshowtr) + parseInt(pagesize);	
 // 		 	$('table tr').slice(firstshowtr,parseInt(firstshowtr) + parseInt(pagesize)).show();
 // 			//显示页码
 // 			nowpage=parseInt(nowpage)+1;
 // 			$('table .nowpage').html(nowpage);	
 // 		}
 // 	});

 // 	//跳转到上一页的方法：先判断，再把当前页隐藏，显示上一页
 // 	$('table a.beforepage').click(function(){
 // 		//判断当前页与第一页的关系
 // 		if(nowpage==1){
 // 			alert('当前为第一页！');
 // 		}else{
 // 			//先把当前页隐藏，最后一页的时候，，判断
 // 			// if(nowpage==totalpage){
 // 			// 	$('table tr').slice(firstshowtr,lastshowtr).hide();
 // 			// }else{
 // 			// 	$('table tr').slice(firstshowtr,parseInt(firstshowtr) + parseInt(pagesize)).hide();
 // 			// }
 // 				$('table tr').slice(1,sum+1).hide();
 // 			//显示上一页
 // 			//序号更新
 // 			firstshowtr = parseInt(firstshowtr) - parseInt(pagesize);
 // 			//alert(firstshowtr);
 // 			//alert(lastshowtr);
 // 			$('table tr').slice(firstshowtr,parseInt(firstshowtr) + parseInt(pagesize)).show();
 // 			nowpage=parseInt(nowpage)-1;
 // 			$('table .nowpage').html(nowpage);	
 // 		}
 // 	})

 // 	//跳转到某一页
 // 	$('table .turnpage').click(function(){
 // 		var turntopage=$('table .topage').val(); 
	// 	//更新	
	// 	var nowfirstshowtr = $('table :visible').find('tr:eq(1)').find('td:eq(0)').html();
 // 		//alert(nowpage);
 // 	//	alert(turntopage);
 // 		$('table tr').slice(1,sum+1).hide();
 // 	//$('table tr').slice(nowfirstshowtr,parseInt(nowfirstshowtr) + parseInt(pagesize)).hide();
 // 	$('table tr').slice(turntopage* pagesize-1,turntopage*pagesize +1).show();
 // 	$('table .nowpage').html(turntopage);
 // })
 	

 })