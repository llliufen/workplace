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
	<div class="w475_l">
    	<div class="title">
        	<h2 class="cBlue fB">公司简介<b class="cGrey fn">About us</b></h2>
        </div>
        <?php
include 'PdoTest.php';
include 'articleSubstr.php';
$one = new Str();
//$sql  = 'select * from company';
//$data = $test->query($sql);
foreach ($test->query('select * from company') as $row) {
    echo $row['name'];
}
; //$sql = "selet * from company where id='1';";; /*$preObj = $pdo->prepare($sql);; //$preObj->execute(array(20));; //$arr = $preObj->fetchAll(PDO::FETCH_ASSOC);
?>

        <div class="intro">
                <a href="aboutUs.php" class="cBlue"> 查看更多...</a>
                <div class="hackbox"></div>
        </div>
        <div class="blank10"></div>
        <div class="title">
        	<h2 class="cBlue fB">产品展示<b class="cGrey fn">Products</b></h2><span class="more"><a href="productList.php" class="cBlue"> 更多...</a></span>
        </div>
        <ul class="list_l">
        <?php
$data = $test->query("select * from product order by id");

foreach ($data as $arr) {
    ;?>
<li>
                <span class="listimg">
                    <a href=<?php echo "productInfo.php?productName=" . $arr['id']; ?>><img src="<?php echo $arr['picture']; ?>" alt="图片" /></a>
                </span>
            <span class="listtxt"><a href="productInfo.php"><?php echo $arr['name']; ?>  </a></span>

            <?php }
;?>


    </div>
    <div class="w370_r">
        <div class="title">
            <h2 class="cBlue fB">最新公告<b class="cGrey fn">News</b></h2>
        </div>
        <ul class="list_r">
            <?php

foreach ($test->query('select * from news') as $row) {;?>
                <li>
                    <a title="<?php echo $row['title']; ?>" href=<?php echo "article.php?newsname=" . $row['id']; ?>><?php echo $one->substr($row['title']); ?></a>
                    <span class="time1"><?php echo $row['time']; ?></span>
                </li>
            <?php }
;?>

        </ul>
        <div class="blank29"></div>
        <div class="title">
            <h2 class="cBlue fB">行业资讯<b class="cGrey fn">Information</b></h2><span class="more"><a href="info.php" class="cBlue"> 更多...</a></span>
        </div>
        <ul class="list_r">
            <?php foreach ($test->query('select * from information') as $row) {;?>
                <li><a  title="<?php echo $row['infotitle']; ?>" href=<?php echo "articleinformation.php?informationname=" . $row['id']; ?>><?php echo $row['infotitle']; ?></a>
                    <span class="time1"><?php echo $row['time']; ?></span></li>
            <?php }
;?></ul>
            <div class="hackbox"></div>


</div>
    <div class="title">
        <h2 class="cBlue fB">友情链接<b class="cGrey fn">Links</b></h2>
    </div>
    <?php foreach ($test->query('select * from link') as $row) {?>
    <p class="links" style="float: left;">
        <a href=<?php echo $row['address']; ?>><?php echo $row['name']; ?></a>
        <?php }
;?>
    </p>
    </div>

<?php include 'bottom.php';?>
</body>
</html>
