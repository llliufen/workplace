<?php
/**
 * Created by PhpStorm.
 * User: liufen
 * Date: 2016/8/16
 * Time: 10:07
 */
require 'Mysqli.php';
$mysqli = new Ycf\Lession\Db\mysqli();
echo $mysqli->connect('localhost', 'root', 'root', 'list');
