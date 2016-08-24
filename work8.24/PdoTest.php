<?php
/**
 * Created by PhpStorm.
 * User: liufen
 * Date: 2016/8/16
 * Time: 10:08
 */

require 'Pdo.php';
$test = new PdoDb();
$test->construct("mysql:host=192.168.72.130;dbname=list", "root", "root");
