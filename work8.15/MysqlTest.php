<?php
/**
 * Created by PhpStorm.
 * User: liufen
 * Date: 2016/8/16
 * Time: 10:07
 */
require 'Mysql.php';
$mysql = new Ycf\Lession\Db\mysql();
echo $mysql->connect('localhost', 'root', 'root', 'list');
