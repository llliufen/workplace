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
     	<li class="sel"><a href="index.php">首  页</a></li>
        <li><a href="aboutUs.php">公司简介</a></li>
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
        	<h2 class="cBlue fB">产品展示<b class="cGrey fn">Products</b></h2>
        </div>
        <?php
include 'PdoTest.php';
$typename = $_GET['typename'];
$data     = $test->query("select * from product where  typeid=$typename");
"select * from product where  typeid=$typename";
foreach ($data as $row) {?>
        <ul class="list_l">
        	<li>
                <span class="listimg">
                    <img src="<?php echo $row['picture']; ?>" /><a href="productInfo.php"></a>
                </span>
                <span class="listtxt"><a href="productInfo.php"><?php echo $row['name'] . $row['picture']; ?></a></span>
            </li>
               <?php }
;?>
        </ul>

</div>
	<div class="righter">
    	<div class="rightBox">
        	<h3>产品分类</h3>
            <ul class="list_r">
                <?php

foreach ($test->query("select * from product_type ") as $row) {?>
            	<li><a href=<?php echo "product_list.php?typename=" . $row['id']; ?>><?php echo $row['name']; ?></a></li>
<?php }
;?>
            </ul>
        </div>
    </div>
    <div class="hackbox"></div>


</div>
<?php include 'bottom.php';?>
</body>
</html>
