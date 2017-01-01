<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test</title>
	<script src='http://res.wx.qq.com/open/js/jweixin-1.0.0.js'></script>
</head>
<body>
	<script>
	wx.config({
    debug: true, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
    appId: 'wx5016b96d756975f3', // 必填，公众号的唯一标识
    timestamp: 1477271808 , // 必填，生成签名的时间戳
    nonceStr: 'wx5016b96d756975f3', // 必填，生成签名的随机串
    signature: 'e3c332eabaade1696e25535461fa6123281ad266',// 必填，签名，见附录1
    jsApiList: [
    	'onMenuShareTimeline',
		'onMenuShareAppMessage',
		'onMenuShareQQ',
		'onMenuShareWeibo'
		
] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
});
	wx.ready(function(){
		  document.querySelector('#onMenuShareTimeline').click(function(){
    	wx.onMenuShareTimeline({
      title: '互联网之子 方倍工作室',
      link: 'http://movie.douban.com/subject/25785114/',
      imgUrl: 'http://img3.douban.com/view/movie_poster_cover/spst/public/p2166127561.jpg',
      trigger: function (res) {
        alert('用户点击分享到朋友圈');
      },
      success: function (res) {
        alert('已分享');
      },
      cancel: function (res) {
        alert('已取消');
      },
      fail: function (res) {
        alert(JSON.stringify(res));
      }
    });
    alert('已注册获取“分享到朋友圈”状态事件');
  });

    // config信息验证后会执行ready方法，所有接口调用都必须在config接口获得结果之后，config是一个客户端的异步操作，所以如果需要在页面加载时就调用相关接口，则须把相关接口放在ready函数中调用来确保正确执行。对于用户触发时才调用的接口，则可以直接调用，不需要放在ready函数中。
});

	</script>
	 <h3 id="menu-share">分享接口</h3>
      <span class="desc">获取“分享到朋友圈”按钮点击状态及自定义分享内容接口</span>
      <button class="btn btn_primary" id="onMenuShareTimeline">onMenuShareTimeline</button>
      <span class="desc">获取“分享给朋友”按钮点击状态及自定义分享内容接口</span>
      <button class="btn btn_primary" id="onMenuShareAppMessage">onMenuShareAppMessage</button>
      <span class="desc">获取“分享到QQ”按钮点击状态及自定义分享内容接口</span>
      <button class="btn btn_primary" id="onMenuShareQQ">onMenuShareQQ</button>
      <span class="desc">获取“分享到腾讯微博”按钮点击状态及自定义分享内容接口</span>
      <button class="btn btn_primary" id="onMenuShareWeibo">onMenuShareWeibo</button>
	
</body>
</html>