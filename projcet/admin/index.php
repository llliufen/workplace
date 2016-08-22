<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>金陵贸易 后台管理系统</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link media="all" href="styles/style.css" type="text/css" rel="stylesheet">
</head>
<?php
session_start();
if (isset($_SESSION['username'])) {
    $_SESSION['username'];
} else {
    session_start();
//设置Cookie的失效时间为time（）-1
    setcookie('username', '', time() - 1);
//函数清除存储在当前会话中的所有变量，它能有效的将会话重置为创建时的状态
    session_unset();
//函数从存储机制完全删除会话，使当前会话失效
    session_destroy();
//注销会话变量
    unset($_SESSION['username']);
//跳转到Login界面
    header("Location: Login.php");
}
?>

<body scroll="no">
<table height="100%" cellspacing="0" cellpadding="0" width="100%">
    <tbody>
        <tr>
            <td colspan="2" height="69">
            	<iframe name="header" src="top.php" frameBorder="0" width="100%" scrolling="no" height="69"></iframe>
            </td>
        </tr>
        <tr>
            <td valign="top" width="160">
            <iframe name="menu" src="menu.php" frameBorder="0" width="160" scrolling="no" height="100%" target="main"></iframe>
            </td>
            <td valign="top" width="100%">

            <iframe style="overflow:visible" name="main" src="sysInfo.php" frameBorder="0" width="100%" scrolling="yes" height="100%"></iframe>
            </td>
        </tr>
    </tbody>
</table>
</body>
</html>
