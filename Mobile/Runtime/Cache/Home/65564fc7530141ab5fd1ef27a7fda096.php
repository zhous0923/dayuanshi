<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>标题</title>

<!-- meta使用viewport以确保页面可自由缩放 -->
<meta name="viewport"
	content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">




<style type="text/css">
.banner {
	position: relative;
	width: 100%;
	overflow: auto;

	font-size: 18px;
	line-height: 24px;
	text-align: center;

	color: rgba(255,255,255,.6);
	text-shadow: 0 0 1px rgba(0,0,0,.05), 0 1px 2px rgba(0,0,0,.3);

	background: #5b4d3d;
	box-shadow: 0 1px 2px rgba(0,0,0,.25);
}
	.banner ul {
		list-style: none;
		width: 300%;
	}
	.banner ul li {
		display: block;
		float: left;
		width: 33%;
		min-height: 350px;

		-o-background-size: 100% 100%;
		-ms-background-size: 100% 100%;
		-moz-background-size: 100% 100%;
		-webkit-background-size: 100% 100%;
		background-size: 100% 100%;

		box-shadow: inset 0 -3px 6px rgba(0,0,0,.1);
	}
</style>
</head>
<body>



	<div class="banner">
		<ul>

			<li style="background-image: url('/Public/imgs/1.jpg');width: 100px;height: 100px;">sss</li>

			<li style="background-image: url('/Public/imgs/1.jpg');width: 100px;height: 100px;">sss</li>

			<li style="background-image: url('/Public/imgs/1.jpg');width: 100px;height: 100px;">ssss</li>
		</ul>
	</div>
	<script src="/Public/js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="/Public/js/unslider.min.js" type="text/javascript"></script>
<script type="text/javascript">
			if(window.chrome) {
				$('.banner li').css('background-size', '100% 100%');
			}

			$('.banner').unslider({
				arrows: true,
				fluid: true,
				dots: true
			});

			//  Find any element starting with a # in the URL
			//  And listen to any click events it fires
			$('a[href^="#"]').click(function() {
				//  Find the target element
				var target = $($(this).attr('href'));

				//  And get its position
				var pos = target.offset(); // fallback to scrolling to top || {left: 0, top: 0};

				//  jQuery will return false if there's no element
				//  and your code will throw errors if it tries to do .offset().left;
				if(pos) {
					//  Scroll the page
					$('html, body').animate({
						scrollTop: pos.top,
						scrollLeft: pos.left
					}, 1000);
				}

				//  Don't let them visit the url, we'll scroll you there
				return false;
			});

			
		</script>
</body>
</html>