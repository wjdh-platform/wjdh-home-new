<?php 
include $_SERVER['DOCUMENT_ROOT'].'/menu.php'; 
include $_SERVER['DOCUMENT_ROOT'].'/headerWrapper.php'; 
include $_SERVER['DOCUMENT_ROOT'].'/footerWrapper.php'; 
include $_SERVER['DOCUMENT_ROOT'].'/businesses.php'; 
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

</head>
<body><script>!(function(c,b,d,a){c[a]||(c[a]={});c[a].config={pid:"ggcvhz3u94@8f03de3e59271b7",appType:"web",imgUrl:"https://arms-retcode.aliyuncs.com/r.png?",enableSPA:true,useFmp:true,sendResource:true};with(b)with(body)with(insertBefore(createElement("script"),firstChild))setAttribute("crossorigin","",src=d)})(window,document,"https://retcode.alicdn.com/retcode/bl.js","__bl");</script>
    <div class="headerWrapper">
        <?=$headerWrapper?> 
    </div>
    <div class="nav">
    <?=$menu_content?>
    </div>
<div class="wrapper"><div class="container nopadding" id="businesses">
	<div class="container">
        <h1 class="title">业务范畴</h1>
        <p>万家灯火科技经营多项业务，另外也有赖关联公司的业务和服务支持我们智慧城市大平台的运作。万家灯火科技智慧城市大平台的主要业务包括：</p>
    </div>

    <div class="gridWrapper clearfix">
        <?php foreach($businesses as $k=>$v){ ?>
    	<div class="gridBlock" id="<?=$v['id']?>">
        	<div class="desc">
            	<div class="title"><?=$v['title']?></div>
            	<div class="subTitle"><?$v['subTitle']?></div>
                <p><?=$v['content']?><p>
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