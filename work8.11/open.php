<?php

session_start();
//设置Cookie的失效时间为time（）-1
setcookie('name', '', time() - 1);
session_unset();
//函数从存储机制完全删除会话，使当前会话失效
session_destroy();
//注销会话变量
unset($_SESSION['name']);
header("Location: Login.php");
?>
/**
 * Created by PhpStorm.
 * User: liufen
 * Date: 2016/8/11
 * Time: 22:23
 */
