<?php
include 'Expression.php';
$one   = new Expre();
$array = array("Linux RedHat9.0", "Apache2.2.9", "MySQL5.0.51", "PHP5.2.6", "LAMP", "100");
print_r($one->expression($array));
$url = 'http://www.yaochufa.com/index.php';
print_r($one->url($url));
$url = '<tr><td><a  href="http://qzone.qq.com">QQ 空 间 </a></td><td><a href="http://www.ganji.com">赶 集 网</a></td><td><a href="http://www.baixing.com">百 姓 网 </a></td><td><a href="http://www.taobao.com">  淘  宝  网  </a></td><td><a href="http://tuan.baidu.com"> 百 度 团 购 </a></td><td><a href="http://www.dianping.com"> 大众点评网</a></td><tr>';
echo "<pre>";
print_r($one->expreHttp($url));
$url = "这个文本中有<b>粗体</b>和<u>带有下划线</u>以及斜体</i>还有<font color=\'red\' size=\'7\'>带有颜色和字体大小</font>的标记";
print_r($one->expreDelete($url));

/**
 * Created by PhpStorm.
 * User: liufen
 * Date: 2016/8/21
 * Time: 22:14
 */
