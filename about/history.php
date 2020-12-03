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

<script>
$(function(){
	var yearNavSwiper = $('.swiper-yearnav').swiper({
		visibilityFullFit: true,
		slidesPerView:"auto"
	});
	
	setTimeout(function(){
		console.log($(".swiper-slide#year2019").index());
		yearNavSwiper.swipeTo($(".swiper-slide#year2019").index());
	},500);
});
</script>
</head>
<body><script>!(function(c,b,d,a){c[a]||(c[a]={});c[a].config={pid:"ggcvhz3u94@8f03de3e59271b7",appType:"web",imgUrl:"https://arms-retcode.aliyuncs.com/r.png?",enableSPA:true,useFmp:true,sendResource:true};with(b)with(body)with(insertBefore(createElement("script"),firstChild))setAttribute("crossorigin","",src=d)})(window,document,"https://retcode.alicdn.com/retcode/bl.js","__bl");</script>
    <div class="headerWrapper">
        <?=$headerWrapper?> 
    </div>
    <div class="nav">
    <?=$menu_content?>
    </div>
<div class="wrapper"><div class="yearWrapper">
    <div class="yearBanner">
    	<img src="https://face-100k.oss-cn-beijing.aliyuncs.com/wjdh-platform/wjdh-home/picture/history_year_2019.png" usemap="#Map">
        <map name="Map">
        	        	        	            
            <area shape="rect" coords="603,97,661,124" href="?year=2018">
                    	            <area shape="rect" coords="729,99,790,124" href="?year=2017">
                    </map>
        		        <div class="next"><a href="?year=2018"><img src="https://face-100k.oss-cn-beijing.aliyuncs.com/wjdh-platform/wjdh-home/picture/history_next.png"></a></div>
                
    </div>
</div>
<div class="_container nopadding">
	    
    
    
    <div class="swiper-container swiper-yearnav" id="yearNavMobile">
		<div class="swiper-wrapper navigation">
			<div class="swiper-slide act" id="year2019"><a href="?year=2019">2019</a></div><div class="swiper-slide" id="year2018"><a href="?year=2018">2018</a></div><div class="swiper-slide" id="year2017"><a href="?year=2017">2017</a></div><div class="swiper-slide" id="year2016"><a href="?year=2016">2016</a></div><div class="swiper-slide" id="year2015"><a href="?year=2015">2015</a></div><div class="swiper-slide" id="year2014"><a href="?year=2014">2014</a></div><div class="swiper-slide" id="year2013"><a href="?year=2013">2013</a></div><div class="swiper-slide" id="year2012"><a href="?year=2012">2012</a></div><div class="swiper-slide" id="year2011"><a href="?year=2011">2011</a></div><div class="swiper-slide" id="year2010"><a href="?year=2010">2010</a></div><div class="swiper-slide" id="year2009"><a href="?year=2009">2009</a></div><div class="swiper-slide" id="year2008"><a href="?year=2008">2008</a></div><div class="swiper-slide" id="year2007"><a href="?year=2007">2007</a></div><div class="swiper-slide" id="year2006"><a href="?year=2006">2006</a></div><div class="swiper-slide" id="year2005"><a href="?year=2005">2005</a></div><div class="swiper-slide" id="year2004"><a href="?year=2004">2004</a></div><div class="swiper-slide" id="year2003"><a href="?year=2003">2003</a></div><div class="swiper-slide" id="year2002"><a href="?year=2002">2002</a></div><div class="swiper-slide" id="year2001"><a href="?year=2001">2001</a></div><div class="swiper-slide" id="year2000"><a href="?year=2000">2000</a></div><div class="swiper-slide" id="year1999"><a href="?year=1999">1999</a></div>  
        </div>
    </div>
	<div class="mobilePointer"></div>
</div>
<div class="container nopadding" id="history">
	<div class="title">历史及里程碑</div>
        <p class="desc">阿里巴巴集团由曾担任英语教师的马云为首的18人，于1999年在中国杭州创立。从一开始，所有创始人就深信互联网能够创造公平的竞争环境，让小企业通过创新与科技扩展业务，并在参与国内或全球市场竞争时处于更有利的位置。自推出让中国的小型出口商、制造商及创业者接触全球买家的首个网站以来，阿里巴巴集团不断成长，成为了网上及移动商务的全球领导者。阿里巴巴集团及其关联公司目前经营领先业界的批发平台和零售平台，以及云计算丶数字媒体和娱乐以及创新项目和其他业务。</p>
        <div class="timeline"><div class="row clearfix">
	<div class="col r">
    	<div class="textWrapper">
	    	<span class="month">1月<br></span>阿里巴巴集团推出“阿里巴巴商业操作系统”，提供全方位的一站式解决方案，助企业伙伴加快数码转型步伐
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col l">
    	<div class="textWrapper">
	    	<span class="month">2月<br></span>阿里云发起“Tech for Change”倡议，旨在以创新科技应对全球社会和人道主义挑战
		</div>
	</div>
	<div class="col r noBg">
    	<div class="imgWrapper clearfix">
        	<div class="img">
            	<div class="imgBorder"><img src="https://face-100k.oss-cn-beijing.aliyuncs.com/wjdh-platform/wjdh-home/picture/history_2019_photo1.png"></div>
                <div class="caption">阿里云提出Tech for Change倡议</div>
			</div>
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col r">
    	<div class="textWrapper">
	    	<span class="month">3月<br></span>阿里巴巴集团获得阿里影业控股权
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col l">
    	<div class="textWrapper">
	    	<span class="month">3月<br></span>阿里巴巴经济体技术公益委员会成立，致力用技术做公益
		</div>
	</div>
	<div class="col r noBg">
    	<div class="imgWrapper clearfix">
        	<div class="img">
            	<div class="imgBorder"><img src="https://face-100k.oss-cn-beijing.aliyuncs.com/wjdh-platform/wjdh-home/picture/history_2019_photo2.png"></div>
                <div class="caption">阿里巴巴经济体技术公益委员会成立</div>
			</div>
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col r">
    	<div class="textWrapper">
	    	<span class="month">6月<br></span>阿里巴巴集团与中国浙江省义乌市政府签署eWTP战略合作协议
		</div>
	</div>
	<div class="col l noBg">
    	<div class="imgWrapper clearfix">
        	<div class="img">
            	<div class="imgBorder"><img src="https://face-100k.oss-cn-beijing.aliyuncs.com/wjdh-platform/wjdh-home/picture/history_2019_photo3.png"></div>
                <div class="caption">全球最大的小商品批发市场义乌加入eWTP</div>
			</div>
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col l">
    	<div class="textWrapper">
	    	<span class="month">9月<br></span>阿里巴巴集团收购中国进口电商平台考拉
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col r">
    	<div class="textWrapper">
	    	<span class="month">9月<br></span>阿里巴巴集团六个核心价值观于集团成立20周年之际全面升级为“新六脉神剑”
		</div>
	</div>
	<div class="col l noBg">
    	<div class="imgWrapper clearfix">
        	<div class="img">
            	<div class="imgBorder"><img src="https://face-100k.oss-cn-beijing.aliyuncs.com/wjdh-platform/wjdh-home/picture/history_2019_photo4.png"></div>
                <div class="caption">阿里巴巴集团成立20周年</div>
			</div>
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col l">
    	<div class="textWrapper">
	    	<span class="month">9月<br></span>阿里巴巴集团收到蚂蚁金服新发行的33%股份
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col r">
    	<div class="textWrapper">
	    	<span class="month">9月<br></span>阿里巴巴集团宣布目标至2024财年底，通过旗下中国消费业务服务超过10亿年度活跃消费者并实现超过10万亿元人民币的年度商品交易额
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col l">
    	<div class="textWrapper">
	    	<span class="month">11月<br></span>阿里巴巴集团增持菜鸟网络，持股比例提升至约63%
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col r">
    	<div class="textWrapper">
	    	<span class="month">11月<br></span>埃塞俄比亚政府与阿里巴巴集团签署协议共建eWTP据点
		</div>
	</div>
	<div class="col l noBg">
    	<div class="imgWrapper clearfix">
        	<div class="img">
            	<div class="imgBorder"><img src="https://face-100k.oss-cn-beijing.aliyuncs.com/wjdh-platform/wjdh-home/picture/history_2019_photo6.png"></div>
                <div class="caption">eWTP落户埃塞俄比亚</div>
			</div>
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col l">
    	<div class="textWrapper">
	    	<span class="month">11月<br></span>阿里巴巴集团于香港联合交易所主板正式挂牌上市
		</div>
	</div>
	<div class="col r noBg">
    	<div class="imgWrapper clearfix">
        	<div class="img">
            	<div class="imgBorder"><img src="https://face-100k.oss-cn-beijing.aliyuncs.com/wjdh-platform/wjdh-home/picture/history_2019_photo5.png"></div>
                <div class="caption">阿里巴巴集团于香港上市</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<div class="push"></div>
</div>
<div class="footerWrapper">
    <?=$footerWrapper?>
    </div>
</body>
</html>