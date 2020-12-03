<?php 
include $_SERVER['DOCUMENT_ROOT'].'/menu.php'; 
include $_SERVER['DOCUMENT_ROOT'].'/headerWrapper.php'; 
include $_SERVER['DOCUMENT_ROOT'].'/footerWrapper.php';
include $_SERVER['DOCUMENT_ROOT'].'/videos.php';

$clip = isset($_GET['clip'])?$_GET['clip']:'xuanchuan';

?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
<link rel= "shortcut icon" media="all" type="image/x-icon" href="/favicon.ico" />
<link rel= "icon" media="all" type="image/vnd.microsoft.icon" href="/favicon.ico" /><title>万家灯火科技</title>
<link href="/css/jquery.swiper.css" rel="stylesheet" type="text/css">
<link href="/css/easydropdown.css" rel="stylesheet" type="text/css">
<link href="/css/magnific-popup.css" rel="stylesheet" type="text/css">
<link href="/css/reset.css" rel="stylesheet" type="text/css">
<link href="/css/style.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
    <link href="/css/style_1024.css" rel="stylesheet" type="text/css" />
<![endif]-->
<link href="/css/style_1024.css" rel="stylesheet" type="text/css" media="screen and (min-width:960px)" />
<link href="/css/style_768.css" rel="stylesheet" type="text/css" media="screen and (max-width:959px) and (min-width:768px)" />
<link href="/css/style_320.css" rel="stylesheet" type="text/css" media="screen and (max-width:767px)" />


<link href="/css/style_mobile_nav.css" rel="stylesheet" type="text/css" media="screen and (max-width:767px)" />


<link href="/css/style_1024.css" rel="stylesheet" type="text/css" media="print" />
<link href="/css/print.css" rel="stylesheet" type="text/css" media="print" />
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery-ui.min.js"></script>
<script src="/js/jquery.easydropdown.js"></script>
<script src="/js/jquery.scrollto.js"></script>
<script src="/js/jquery.cycle2.min.js"></script>
<script src="/js/jquery.swiper-2.0.min.js"></script>
<script src="/js/jquery.swiper.hashnav.min.js"></script>
<script src="/js/jquery.appear.js"></script>
<!--<script type="text/javascript" src="/js/addthis_widget.js"></script>-->
<script src="/js/highcharts.js"></script>
<script src="/js/exporting.js"></script>
<script src="/js/grid.js"></script>
<script src="/js/appear_animate.js"></script>
<script src="/js/jquery.redirect.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/common.js"></script>

<style type="text/css">
@media (min-width:960px){#video .clip:nth-child(4n+4){margin-right:0px;}}
@media (max-width:959px) and (min-width:768px){#video .clip:nth-child(3n+3){margin-right:0px;}}
@media (max-width:767px){#video .clip{margin-right:0px;}}
.playerContainer video {width:100%}
</style>
</head>
<body><script>!(function(c,b,d,a){c[a]||(c[a]={});c[a].config={pid:"ggcvhz3u94@8f03de3e59271b7",appType:"web",imgUrl:"https://arms-retcode.aliyuncs.com/r.png?",enableSPA:true,useFmp:true,sendResource:true};with(b)with(body)with(insertBefore(createElement("script"),firstChild))setAttribute("crossorigin","",src=d)})(window,document,"https://retcode.alicdn.com/retcode/bl.js","__bl");</script>
    <div class="headerWrapper">
        <?=$headerWrapper?> 
    </div>
    <div class="nav">
    <?=$menu_content?>
    </div>
<div class="wrapper"><div class="container" id="video">
    <h1 class="title">视频</h1>
	<div class="videoContainer clearfix">
		<div class="playerContainer">
			<video controls poster="<?=$video_path.$clip.'/'.$videos[$clip]['big']?>" controlsList="nodownload">
				<source src="<?=$video_path.$clip.'/'.$videos[$clip]['url']?>" type="video/mp4">
			</video> 
		</div>
    	<div class="caption">
        	<h1><?=$videos[$clip]['introduction']?></h1>
		</div>
	</div>
    
    <div class="videoList clearfix"> 
    <?php foreach($videos as $k=>$v){  ?>   
            <div class="clip">
                <div class="imgWrapper">
                    <?=($clip==$k)?'':'<a href="?clip='.$k.'">'?><img src="<?=($clip==$k)?$smallplaying:$smallwait?>" class="mask"><?=($clip==$k)?'':'</a>'?>
                    <img src="<?=$video_path.$k.'/'.$v['small']?>">
                </div>
                <div class="caption">
                    <h1><?=$v['introduction']?></h1>
                </div>
            </div>
    <?php } ?>
    </div>
</div>
<div class="push"></div>
</div>
<div class="footerWrapper">
    <?=$footerWrapper?>
</div>
</body>
</html>