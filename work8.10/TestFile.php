<?php

include "file_list.php";
$new = new File();
var_dump($new->fileList("D:/wamp"));

include "unlink.php";
$new  = new Unlink();
$path = "D:/sygs";
$new->UnlinkFile($path);
/**
 * Created by PhpStorm.
 * User: liufen
 * Date: 2016/8/10
 * Time: 22:53
 */
