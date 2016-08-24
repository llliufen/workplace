<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include 'head.php';?>
</head>

<body>
<div class="header">
	<h1 class="logo" title="金陵贸易有限公司"><a href="index.php"><img src="images/logo.gif" alt="金陵贸易有限公司" /></a></h1>
    <p class="top_r"><a href="#" class="btn_i">设为主页</a><a href="#" class="btn_f">收藏本站</a></p>
</div>
<div class="nav">
	<div class="nav_left"></div>
    <ul>
     	<li><a href="index.php">首  页</a></li>
        <li class="sel"><a href="aboutUs.php">公司简介</a></li>
        <li><a href="productList.php">产品展示</a></li>
        <li><a href="info.php">行业资讯</a></li>
        <li><a href="guestbook.php">客户留言</a></li>
        <li><a href="contactUs.php" class="nobg">联系我们</a></li>
     </ul>
     <div class="time">2009-07-10 8:00</div>
    <div class="nav_right"></div>
</div>
<div class="banner">
	<a href="#"><img src="images/banner.jpg" align="banner" /></a>
</div>
<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">产品信息<b class="cGrey fn">Product Info</b></h2>
        </div>
        <div class="product">
			<img src="images/prod1.gif" alt="网格布" />
			<p><strong>产品名称</strong>：网格布</p>
			<p><strong>产品描述</strong>：</p>
        	<p>日前，广东广州检验检疫局对广州汽车集团商贸有限公司进口钢材实施“诚信管理+企业验收+检验检疫抽批检验和定期检查”的检验监管新模式。这一新检验监管模式，既保证了工作质量，又提高了通关效率，受到了企业的高度评价。</p>
        	<p>广州汽车集团商贸有限公司进口的钢板属大宗进口商品，若采用常规的批批抽样检验监管模式，将影响企业的物流效率，且增加其运营成本。为减轻企业负担，助推产业发展，广州局对该企业及进口钢材使用方进行了诚信评估后，决定对其实施检验监管新模式</p>

        </div>
    </div>
	<?php

include 'PdoTest.php';
include 'righttwo.php';?>


</div>
<?php include 'bottom.php';?>
</body>
</html>
