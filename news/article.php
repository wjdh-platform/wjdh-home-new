<?php 
include $_SERVER['DOCUMENT_ROOT'].'/menu.php'; 
include $_SERVER['DOCUMENT_ROOT'].'/headerWrapper.php'; 
include $_SERVER['DOCUMENT_ROOT'].'/footerWrapper.php';
include $_SERVER['DOCUMENT_ROOT'].'/news.php';

$id = isset($_GET['id'])?$_GET['id']:'0';
require_once $_SERVER['DOCUMENT_ROOT']."/jssdk.php";
$jssdk = new JSSDK("wx5c60b88691c0d193", "fa45f037203b0f67bdf7cacb92f10cc6");
$signPackage = $jssdk->GetSignPackage();
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
    <div class="wrapper"><div class="container" id="integrity">
	<h1 class="title shownIn320Only">图片新闻</h1>
	    <div class="articleLeft">
    	<div class="title">新闻发布</div>
        <div class="logoArea">
        	<div><img src="https://face-100k.oss-cn-beijing.aliyuncs.com/wjdh-platform/wjdh-home/picture/library_logos_wjdh.png"></div>
        </div>
		<div class="contactInfo">
        	<h2>媒体联络</h2>
            <div class="contactInfo">
            	<p>杨哲<br />
                万家灯火科技（河北）有限责任公司<br />
                +0335 7108669<br />
                <a href="mailto:mg@mg.cool">mg@mg.cool</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    
    <div class="articleMain">
        <div class="date">
        <?=$news[$id]['title']?>
        </div>
        <h1><?=$news[$id]['heading_article']?></h1>
        <h2><?=$news[$id]['heading_article2']?></h2>
        <div class="titlePadding"></div>
        
        <div class="photoArea">
        	<div class="image">
                <img src="<?=$news[$id]['image']?>">
            </div>
            <div class="caption"></div>
            <div class="downloadImg">付钰（图左）和穆永峰（图右）</div>
            <div class="clearfix"></div>
        </div>

       <div class="clearfix"></div>
       <?=$news[$id]['content']?>
		<div class="contactInfo_Tablet">
        	<h2>媒体联络</h2>
            <div class="contactInfo">
            	<p>杨哲<br />
                万家灯火科技（河北）有限责任公司<br />
                +0335 7108669<br />
                <a href="mailto:mg@mg.cool">mg@mg.cool</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="clearfix"></div>
    
<style>
	.remark{ font-size:85%; }
</style>
</div>
<div class="push"></div>
</div>
<div class="footerWrapper">
    <?=$footerWrapper?>
</div>
</body>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
  /*
   * 注意：
   * 1. 所有的JS接口只能在公众号绑定的域名下调用，公众号开发者需要先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。
   * 2. 如果发现在 Android 不能分享自定义内容，请到官网下载最新的包覆盖安装，Android 自定义分享接口需升级至 6.0.2.58 版本及以上。
   * 3. 常见问题及完整 JS-SDK 文档地址：http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html
   *
   * 开发中遇到问题详见文档“附录5-常见错误及解决办法”解决，如仍未能解决可通过以下渠道反馈：
   * 邮箱地址：weixin-open@qq.com
   * 邮件主题：【微信JS-SDK反馈】具体问题
   * 邮件内容说明：用简明的语言描述问题所在，并交代清楚遇到该问题的场景，可附上截屏图片，微信团队会尽快处理你的反馈。
   */
  wx.config({
    debug: true,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
        'onMenuShareTimeline',
        'onMenuShareAppMessage'
    ]
  });
  wx.ready(function () {
var shareData = {
title: '中国船舶工业集团公司',
desc: '中国船舶工业集团公司',
link: 'http://www.flashtek.com.cn/cssc/index.php',
imgUrl: 'http://www.flashtek.com.cn/cssc/img/logo.png'
};
wx.onMenuShareAppMessage(shareData);
wx.onMenuShareTimeline(shareData);
  });
</script>
</html>