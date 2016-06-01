<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>
	大元氏
</title>

<!-- meta使用viewport以确保页面可自由缩放 -->
<meta name="viewport"
	content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

<!-- 引入 jQuery 库 -->
<script type="text/javascript" src="/Public/js/jm/jquery-1.11.3.min.js"></script>

<!-- 引入 jQuery Mobile 库 -->
<script type="text/javascript"
	src="/Public/js/jm/jquery.mobile-1.4.5.min.js"></script>

<!-- 引入 jQuery Mobile 样式 -->
<link rel="stylesheet" type="text/css"
	href="/Public/js/jm/jquery.mobile-1.4.5.min.css">



</head>
<body>

	<div data-role="page" id="pageone">

		
		<div data-role="panel" id="myPanel">asdsdsa</div>
		

		<div data-role="header" style="background-color: #fff;">
			
			<table border="0" width="100%">
				<tr>
					<td width="20%" align="center">
						<a href="#myPanel"
							class="ui-btn ui-corner-all ui-icon-bars ui-btn-icon-notext">图标</a>
					</td>
					<td width="60%" align="center">
						<a href="/index.php/Index/index">
							<img src="/Public/imgs/logo.png" alt="大元氏" title="大元氏" width="234"
								hight="60" />
						</a>
					</td>
					<td width="20%" align="center">
						<!-- <a href="#"
										class="ui-btn ui-corner-all ui-icon-search ui-btn-icon-notext">图标</a> -->
					</td>
				</tr>
			</table>
			

			
			<div data-role="navbar">
				<ul>
					<li>
						<a href="/index.php/News/index">资讯</a>
					</li>
					<li>
						<a href="/index.php/Campaign/index">活动</a>
					</li>
					<li>
						<a href="#anylink">餐饮</a>
					</li>
					<li>
						<a href="#anylink">商店</a>
					</li>
					<li>
						<a href="#anylink">论坛</a>
				</ul>
			</div>
			
		</div>

		<div data-role="main" class="ui-content">
			
<div id="slidy-container">
	<figure id="slidy">
		<img src="/Public/imgs/1.jpg" alt=""
			data-caption="jQuery之家-自由分享jQuery、html5、css3">
		<img src="/Public/imgs/2.jpg" alt="" data-caption="jQuery之家">
		<img src="/Public/imgs/3.jpg" alt=""
			data-caption="jQuery之家-自由分享jQuery、html5、css3">
		<img src="/Public/imgs/4.jpg" alt="" data-caption="jQuery之家">
	</figure>
</div>

<ul data-role="listview" data-inset="true">
	<li data-role="divider">
		<b>今日头条</b>
	</li>
	<li>
		<a href="#">
			<img src="chrome.png">
			<h2>Google Chrome</h2>
			<p>Google Chrome 是免费的开源 web 浏览器。发布于 2008 年。</p>
		</a>
	</li>
	<li>
		<a href="#">列表项</a>
	</li>
	<li>
		<a href="#">列表项</a>
	</li>
	<li>
		<a href="#">列表项</a>
	</li>
</ul>

<ul data-role="listview" data-inset="true">
	<li data-role="divider">
		<b>今日头条</b>
	</li>
	<li>
		<a href="#">
			<img src="chrome.png">
			<h2>Google Chrome</h2>
			<p>Google Chrome 是免费的开源 web 浏览器。发布于 2008 年。</p>
		</a>
	</li>
	<li>
		<a href="#">列表项</a>
	</li>
	<li>
		<a href="#">列表项</a>
	</li>
	<li>
		<a href="#">列表项</a>
	</li>
</ul>

		</div>

		<div data-role="footer" style="background-color: #fff;">
			

			<h1>版权</h1>
			
			
			 <script src="/Public/js/cssslidy.js"></script>
<script>
	cssSlidy({
		timeOnSlide : 5,
		timeBetweenSlides : .5,
		slidyContainerSelector : '#slidy-container',
		slidySelector : '#slidy',
		captionSource : 'data-caption',
		captionBackground : 'rgba(0,0,0,0.5)',
		captionColor : '#ff0',
		captionFont : 'Raleway, Brittanic Bold, Hevetica, sans-serif',
		captionPosition : 'bottom',
		captionAppear : 'perm',
		captionSize : '14px',
		captionPadding : '1em',
		/*fallbackFunction: function(){ alert("Oh noes! You can't animate!"); },*/
		cssAnimationName : 'slidy'
	});
</script> 
			</div>
		</div>
	</div>
</body>
</html>