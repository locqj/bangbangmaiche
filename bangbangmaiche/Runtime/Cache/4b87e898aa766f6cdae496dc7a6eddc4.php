<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<style type="text/css">
		body, html,#allmap {width: 100%;height: 100%;overflow: hidden;margin:0;font-family:"微软雅黑";}
		#l-map{height:100%;width:78%;float:left;border-right:2px solid #bcbcbc;}
		#r-result{height:100%;width:20%;float:left;}
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=aN9ylc0SPBCPP9PlTnpNqpozMQWyNTXg"></script>
	<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
	<title>商城地图</title>
	<link rel="stylesheet" href="./Public/css/map.css">
	<link rel="stylesheet" href="./wechatpublic/css/public.css">
</head>
<body>

	<div class="contain">
		<!-- <?php echo ($data); ?> -->
		<div class="select">
			<select name="" id="city" onchange="changecity()">
				<option value="苏州">苏州</option>
				<option value="上海">上海</option>	
				<option value="杭州">杭州</option>
				<option value="南京">南京</option>
				<option value="合肥">合肥</option>
			</select>
		</div>
		 
	</div>
	<div id="allmap"></div>

	<script type="text/javascript">
	var data_info = new Array();
	var myobj=eval(<?php echo ($data); ?>);
	var temp=new Array();
// 	for(var i=0;i<myobj.length;i++){ 
// alert(myobj[i].point); 
// alert(myobj[i].imageurl); 
// } 
	


	// 百度地图API功能
	var map = new BMap.Map("allmap");
	/*添加地图缩放控件*/
	map.addControl(new BMap.NavigationControl());
	//用户是否能滑动鼠标放大缩小地图
	map.enableScrollWheelZoom(true);
	var i;

	//默认显示苏州情况
	 var point = new BMap.Point(120.619907,31.317987);
	map.centerAndZoom(point,11);  
	//后台传入的数据，坐标，图片，名称
	//三个数据分别表示坐标，信息框，文字标签
	// var data_info =[ [point,"<a href='javascript:void(0)' class='mes'><div class='meslf'><img src='./Public/img/logo.jpg' alt='图片'></div><div class='mesrg'><span class='sname'>4s店名字</span><br><span class='scar'>主推车型</span></div></a>","4s店名字"],
	// 		];	
	// 		alert(data_info[0][0]);
			
			for(var i=0;i<myobj.length;i++){
				var p =myobj[i].point;
				//alert(p);
				temp=myobj[i].point.split(",");
				
				var ping=myobj[i].pingpai;
				// document.getElementById('img').href=h;
				var point1 = new BMap.Point(temp[0],temp[1]);
				 // document.getElementById('img').src='h';

				// alert(p);
				var h ="<a class='mes' href='http://xwj.565tech.com/Ucar/index.php?m=Phoneshop&a=index&carsource="+myobj[i].carsource+"'><div class='meslf'><img id='img' src="+myobj[i].imageurl+" /></div><div class='mesrg'><span class='sname'>"+myobj[i].pingpai+"</span><br><span class='scar'>"+ myobj[i].carsource+"</span></div></a>";
	 		    data_info[i] =[point1,h,myobj[i].carsource]; 		

	 	}
		
	//设置弹窗样式
	var opts = {
		width : 80,
		height : 40,
		// title : '4s店名字'
	};
	//根据信息循环录入标注
	for(var i=0;i<data_info.length;i++){
		// var pointMarker = new BMap.Point(data_info[i][0]);
		var marker = new BMap.Marker(data_info[i][0]);//创建标注
		var content = data_info[i][1]; 
		map.addOverlay(marker);//将标注添加到地图中
		
		//给标注添加文本
		var label = new BMap.Label(data_info[i][2],{offset:new BMap.Size(20,-10)});
		marker.setLabel(label);
		//添加监听器
		addClickHandler(content,marker);
	}
	//创建点击事件的监听器
	function addClickHandler(content,marker){
		marker.addEventListener("click",function(e){    //click可选择事件
				openInfo(content,e)}
		);
	}
	function openInfo(content,e){
		var p = e.target;
		var point = new BMap.Point(p.getPosition().lng, p.getPosition().lat);
		var infoWindow = new BMap.InfoWindow(content,opts);  // 创建信息窗口对象 
		map.openInfoWindow(infoWindow,point); //开启信息窗口
	}


	
	
	//点击下拉列表切换城市
	function changecity(){
		//切换城市
		var city = document.getElementById("city").value;
		map.centerAndZoom(city,11);      // 用城市名设置地图中心点
		//解析城市中心点,并显示标注点
		geocodeSearch(city); 		
	}	
	
	//将城市名解析成经纬度，显示标注
	function geocodeSearch(add){
		var myGeo = new BMap.Geocoder();		 
		myGeo.getPoint(add, function(point){
			//默认为城市中心点
			var address = new BMap.Point(point.lng, point.lat);	 
			//后台传入的数据，坐标，图片，名称
			//三个数据分别表示坐标，信息框，文字标签
			for(var i=0;i<myobj.length;i++){
				var p =myobj[i].point;
				temp=myobj[i].point.split(",");
				
				var ping=myobj[i].pingpai;
				// document.getElementById('img').href=h;
				var point1 = new BMap.Point(temp[0],temp[1]);
				 // document.getElementById('img').src='h';

				// alert(p);
				var h ="<a class='mes' href='http://xwj.565tech.com/Ucar/index.php?m=Phoneshop&a=index&carsource="+myobj[i].carsource+"'><div class='meslf'><img id='img' src="+myobj[i].imageurl+" /></div><div class='mesrg'><span class='sname'>"+myobj[i].pingpai+"</span><br><span class='scar'>"+ myobj[i].carsource+"</span></div></a>";

	 		    data_info[i] =[point1,h,myobj[i].carsource];
	 		

	 	}

			// var data_info =[ [address,"<a href='javascript:void(0)' class='mes'><div class='meslf'><img src='./Public/img/logo.jpg' alt='图片'></div><div class='mesrg'><span class='sname'>4s店名字</span><br><span class='scar'>主推车型</span></div></a>","4s店名字"],
			//  [new BMap.Point(120.7815,31.593236),"<a href='javascript:void(0)'><img src='' alt='图片' /><p>主推车型</p></a>","4s店名字2"]];	
			//设置弹窗样式
			var opts = {
				width : 100,
				height : 50,
				// title : '4s店名字'
			};
			//根据信息循环录入标注
			for(var i=0;i<data_info.length;i++){
				var marker = new BMap.Marker(data_info[i][0]);//创建标注
				var content = data_info[i][1]; 
				map.addOverlay(marker);//将标注添加到地图中
				//给标注添加文本
				var label = new BMap.Label(data_info[i][2],{offset:new BMap.Size(20,-10)});
				marker.setLabel(label);
				//添加监听器
				addClickHandler(content,marker);
			}
			//创建点击事件的监听器
			function addClickHandler(content,marker){
				marker.addEventListener("click",function(e){    //click可选择事件
					openInfo(content,e)}
				);
			}
			function openInfo(content,e){
				var p = e.target;
				var point = new BMap.Point(p.getPosition().lng, p.getPosition().lat);
				var infoWindow = new BMap.InfoWindow(content,opts);  // 创建信息窗口对象 
				map.openInfoWindow(infoWindow,point); //开启信息窗口
			}
		});	
	}
	
</script>

</body>
</html>