<?php 
include $_SERVER['DOCUMENT_ROOT'].'/menu.php'; 
include $_SERVER['DOCUMENT_ROOT'].'/headerWrapper.php'; 
include $_SERVER['DOCUMENT_ROOT'].'/footerWrapper.php'; 
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
#home.container{position:relative;}
.wrapper{
	/*background:#fff1c4;*/
	background-image:url(../picture/bgc.png);
}
#home .text{
	position:absolute;
	left:496px;
	top:176px;
}
#home .title{
	font-size:40px;
	font-weight:400;
	color:#ff6600;
	margin-bottom:5px;
}
#home .paragraph{
	font-size:21px;
	line-height:26px;
	font-weight:400;
	color:#666666;
}
#home .paragraph span{font-weight:600;}
#mobileBanner div#JackMa_btn1{height:5%; width:13%; position:absolute; top:49%; left:14%;}
#mobileBanner div#JackMa_btn2{height:5%; width:13%; position:absolute; top:49%; left:28%;}
#mobileBanner div#DanielZhang_btn1{height:5%; width:13%; position:absolute; top:71%; left:14%;}
#mobileBanner div#DanielZhang_btn2{height:5%; width:13%; position:absolute; top:71%; left:28%;}
	
	html { height: auto; }
	.mfp-bg, .mfp-wrap { z-index: 100000; }	
	#home-popup { position: relative; background: #fff; margin: 40px auto; padding: 30px 30px; width: 95%; max-width: 530px; }
	#home-popup .report-wrapper .cover { width: 100%; max-width: 450px; /*float: left;*/text-align: center; margin: 0 auto; }
	#home-popup .report-wrapper .cover img { width: 100%; }
	#home-popup .report-wrapper .content { width: 100%; /*float: right;*/ padding: 0; text-align: center; }
	#home-popup .report-wrapper .content h1 { margin-bottom: 30px; padding: 0 10px; }
	#home-popup .report-wrapper .content .tools { line-height: 30px; padding-top: 25px; }
	
	@media screen and (max-width: 767px) {
		#home-popup { padding: 30px 20px; }
		/*#home-popup .report-wrapper .cover { width: 145px; }*/
		#home-popup .report-wrapper .content { width: 100%; padding: 0 20px; }
		#home-popup .report-wrapper .content h1 { line-height: 24px; }
	}
	
</style>
<script>

$(function(){
	/*
	$("#desktopBanner").cycle({
		fx:"scrollLeft"
	});
	
	$("#mobileBanner").cycle({
		fx:"scrollUp"
	});
	
	$(window).bind("resize",function(){
		window.location.href=window.location.href;	
	});
	*/
	
	/*$(window).on('load', function(){
		$.magnificPopup.open({
			items: {
				src: '#home-popup'
			},
			type: 'inline'
		}, 0)
	})*/
})
</script>
</head>
<body><script>!(function(c,b,d,a){c[a]||(c[a]={});c[a].config={pid:"ggcvhz3u94@8f03de3e59271b7",appType:"web",imgUrl:"https://arms-retcode.aliyuncs.com/r.png?",enableSPA:true,useFmp:true,sendResource:true};with(b)with(body)with(insertBefore(createElement("script"),firstChild))setAttribute("crossorigin","",src=d)})(window,document,"https://retcode.alicdn.com/retcode/bl.js","__bl");</script>
	<div class="headerWrapper">
		<?=$headerWrapper?>
	</div>
<div class="nav">
	<?=$menu_content?>
</div>
<div class="wrapper"><div class="container nopadding" id="home">
	<!--
    <img src="/picture/home_banner.png">
    <div class="text">
        <div class="title">Our Vision</div>
        <div class="paragraph">We envision that our customers will <span>meet, work and live</span> at Alibaba, and that we will be a company that lasts 102 years.</div>
	</div>
    -->
    <div class="cycle-slideshow homeBanner" data-cycle-timeout="10000" data-cycle-slides="> div" id="desktopBanner">
    	<!--<div><img src="/picture/vision.png"></div>-->
        <!--<div><img src="/picture/mission.png"></div>-->
		<!--<div><img src="/picture/home_banner_4.png" usemap="#Map">
			<map name="Map">
				<area shape="rect" coords="122,372,176,399" href="/../cn/ir/article?news=p161013" target="_blank">
				<area shape="rect" coords="189,372,233,399" href="/../en/ir/article?news=p161013" target="_blank">
				<area shape="rect" coords="503,371,557,400" href="/../cn/ir/article?news=p161013a" target="_blank">
				<area shape="rect" coords="571,371,613,399" href="/../en/ir/article?news=p161013a" target="_blank">
			</map>
		</div>-->
        <div><img src="/picture/home-banner.png"></div>
        <!--<div><a href="https://esg.alibabagroup.com/" target="_blank"><img src="/picture/home_banner_5.png"></a></div>-->
                <!--<div><a href="http://ar.alibabagroup.com/2015/index.html" target="_blank"><img src="/picture/home_banner_2.png"></a></div>-->
    </div>
    
    <div class="cycle-slideshow homeBanner" data-cycle-timeout="10000" data-cycle-slides="> div" id="tabletBanner">
    	<!--<div><img src="/picture/vision_mobile.png"></div>-->
        <!--<div><img src="/picture/mission_mobile.png"></div>-->
        <!--<div><img src="/picture/home_banner_4_tablet.png" usemap="#Map2">
			<map name="Map2">
				<area shape="rect" coords="108,297,147,320" href="/../cn/ir/article?news=p161013" target="_blank">
				<area shape="rect" coords="155,297,187,320" href="/../en/ir/article?news=p161013" target="_blank">
				<area shape="rect" coords="379,298,418,318" href="/../cn/ir/article?news=p161013a" target="_blank">
				<area shape="rect" coords="429,296,457,319" href="/../en/ir/article?news=p161013a" target="_blank">
			</map>
        </div>-->
        <div><img src="/picture/home-banner1.png"></div>
                        <!--<div><a href="http://ar.alibabagroup.com/2015/index.html" target="_blank"><img src="/picture/home_banner_2_tablet.png"></a></div>-->
    </div>
    
    <div class="cycle-slideshow homeBanner" data-cycle-timeout="10000" data-cycle-slides="> div" id="mobileBanner">
    	<!--<div><img src="/picture/vision_mobile.png"></div>-->
        <!--<div><img src="/picture/mission_mobile.png"></div>-->
        <!--<div>
			<a href="/../cn/ir/article?news=p161013" target="_blank"><div id="JackMa_btn1"></div></a>
			<a href="/../en/ir/article?news=p161013" target="_blank"><div id="JackMa_btn2"></div></a>
			<a href="/../cn/ir/article?news=p161013a" target="_blank"><div id="DanielZhang_btn1"></div></a>
			<a href="/../en/ir/article?news=p161013a" target="_blank"><div id="DanielZhang_btn2"></div></a>
			<img src="/picture/home_banner_4_mobile.png">
        </div>-->
        <div><img src="/picture/home-banner2.png"></div>
                        <!--<div><a href="http://ar.alibabagroup.com/2015/index.html" target="_blank"><img src="/picture/home_banner_2_mobile.png"></a></div>-->
    </div>
</div>
<div class="push"></div>
</div>
<div class="footerWrapper">
<?=$footerWrapper?>
</div>
</body>
</html>