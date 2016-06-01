<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>
	标题-活动-大元氏
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

		
		<div data-role="panel" id="myPanel">
			asdsdsa
			<a href="#pageone" data-rel="close"
				class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-b ui-icon-delete ui-btn-icon-left">Close</a>
		</div>
		

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
		<a href="/index.php/Campaign/index"
			class="ui-btn-active ui-state-persist">活动</a>
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
			

<ul data-role="listview" data-inset="false" style="margin-top: 0px;">
	<li data-role="divider">
		<div style="text-align: center;font-weight: 700;">活动标题</div>
	</li>
	<li>
		<div>
			dasdasd
		</div>
	</li>
	<li>
		<b>精品推荐</b>
	</li>
	<li>
		
	</li>
	<li>
		<b>评论</b>
	</li>
	<li>
		
	</li>
	<li>
		
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