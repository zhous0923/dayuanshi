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
	



<style type="text/css">
#WSCSlideWrapperIndex img {
	border: 0;
	*display: inline;
}

#WSCSlideWrapperIndex li {
	border: 0;
	list-style-type: none;
}

#WSCSlideWrapperIndex ul {
	list-style: none;
	margin: 0;
	padding: 0;
}

#WSCSlideWrapperIndex {
	position : relative;
	margin: 10px auto;
	cursor: move;
	position: relative;
	height: 230px;
	width: 100%;
}

</style>




</head>
<body>

	<div data-role="page" id="pageone">
	<script type="text/javascript" src="/Public/js/LoadSlide.js"></script>
		
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
						<a href="/index.php/Index/index" rel="external">
							<img src="/Public/img/logo.png" alt="大元氏" title="大元氏" width="234"
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
						<a href="/index.php/News/index" rel="external">资讯</a>
					</li>
					<li>
						<a href="/index.php/Campaign/index" rel="external">活动</a>
					</li>
					<li>
						<a href="/index.php/Restaurant/index" rel="external">餐饮</a>
					</li>
					<li>
						<a href="/index.php/Shop/index" rel="external">商店</a>
					</li>
					<li>
						<a href="#anylink">论坛</a>
				</ul>
				
			</div>
		</div>

		<div data-role="main" class="ui-content" style="margin-top: 0px;padding: 3px;">
			
<div class="WSCSlideWrapperIndex" id="WSCSlideWrapperIndex" style="width: 100%;">
	<div>
		<a><img
			src="/Public/img/1.jpg" /></a> <a><img
			src="/Public/img/2.jpg" /></a> <a><img
			src="/Public/img/3.jpg" /></a> <a><img
			src="/Public/img/4.jpg" /></a>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		/* 
		$('.WSCSlideWrapper').height(
		 $('.WSCSlideWrapper').width() * 0.3);

		 $('#WSCSlideWrapperTwo').height(
		 $('#WSCSlideWrapperTwo').width() * 1.5);
		 */
		$('.WSCSlideWrapperIndex').touchslide({
			timecontrol : 3000,
			animatetime : 300,
			direction : 'left',
			navshow : true,
			canvassuport : true
		});
	});
</script> 

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

			
			 
		</div>
	</div>
	</div>
</body>
</html>