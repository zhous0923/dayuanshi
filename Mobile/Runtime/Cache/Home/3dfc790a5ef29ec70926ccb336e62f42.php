<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>camera 插件应用程序</title>
    <meta name="viewport" content="width=device-width, 
          initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" /> 
    
     <link  href="/Public/js/jm/jquery.mobile-1.4.5.min.css" 
           rel="Stylesheet" type="text/css" />
    
    <link  href="/Public/js/jm/jquery.mobile-1.4.5.min.js" 
           rel="Stylesheet" type="text/css" />
   
    <link  href="/Public/js/camera.css" 
           rel="Stylesheet" type="text/css" />
    
    <script src="/Public/js/jm/jquery-1.11.3.min.js" 
           type="text/javascript"></script>
    
    <script src="/Public/js/jm/jquery.mobile-1.4.5.min.js" 
           type="text/javascript"></script>
    
    <script src="/Public/js/jquery.easing.1.3.js" 
           type="text/javascript"></script>
   
    <script src="/Public/js/camera.min.js" 
           type="text/javascript"></script>
           
           
    <script type="text/javascript">
        $(function() {
            $('#camera_wrap_1').camera({
            time: 1000,
                thumbnails:false
            })
        });
    </script>
</head>
<body>
<div data-role="page">
   <div data-role="header"><h1>幻灯图片</h1></div>
     <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
       <div data-thumb="Images/Img6.2/thumb/list_1.jpg" 
            data-src="Images/Img6.2/list_1.jpg">
         <div class="camera_caption fadeFromBottom">
           第<em>1</em> 幅图片的说明文字
         </div>
       </div>
       <div data-thumb="Images/Img6.2/thumb/list_2.jpg" 
            data-src="Images/Img6.2/list_2.jpg">
         <div class="camera_caption fadeFromBottom">
           第<em>2</em> 幅图片的说明文字
         </div>
       </div>
       <div data-thumb="Images/Img6.2/thumb/list_3.jpg" 
            data-src="Images/Img6.2/list_3.jpg">
          <div class="camera_caption fadeFromBottom">
            第<em>3</em> 幅图片的说明文字
          </div>
       </div>
     </div>
   <div data-role="footer"><h4>phonegap100中文网</h4></div>
</div>
</body>
</html>