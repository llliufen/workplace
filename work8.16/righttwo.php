<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<div class="righter">
    <div class="rightBox">
        <a href="guestbook.php" class="btn_s">我要留言</a>
    </div>
    <div class="blank10"></div>
    <div class="rightBox">
        <h3>最新公告<b class="cGrey fn">News</b></h3>
        <ul class="list_r">

            <?php foreach ($test->query("select * from news") as $row) {
    ?>
            <li><a href=<?php echo 'article.php?newsname=' . $row['id']; ?>><?php echo $one->substr($row['title']); ?></a></li>
            <?php }
;?>
        </ul>
    </div>
    <div class="blank10"></div>
    <div class="rightBox">
        <h3>友情链接<b class="cGrey fn">Links</b></h3>
        <ul class="list_r">
            <?php foreach ($test->query("select * from link") as $row) {
    ?>
            <li><a href=<?php echo $row['address']; ?>><?php echo $row['name']; ?></a></li>
            <?php }
;?>
        </ul>
    </div>
</div>
<div class="hackbox"></div>
</body>
</html>