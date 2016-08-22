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
        <li><a href="aboutUs.php">公司简介</a></li>
        <li><a href="productList.php">产品展示</a></li>
        <li><a href="info.php">行业资讯</a></li>
        <li class="sel"><a href="guestbook.php">客户留言</a></li>
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
        	<h2 class="cBlue fB">客户留言<b class="cGrey fn">Guestbook</b></h2>
        </div>
        <?php
include 'articleSubstr.php';
$one = new Str();
?>

        <div class="intro" style="padding-top:16px">
        	<label>呢称：</label><input name="username" type="text" /><br />
			<label>内容：</label><textarea name="content" cols="" rows="" style="width:545px;height:138px"></textarea>
            <input name="btn" type="button" value="提交" class="btn_input" />
        </div>
        </form>

</div>
    <?php

include 'PdoTest.php';
include 'righttwo.php';?>


</div>
<?php include 'bottom.php';?>
</body>
</html>
