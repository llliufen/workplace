<!DOCTYPE html>
<html>
<head>
    <title>欢迎</title>
</head>
<body>
<p>欢迎来到首页</p>
        <?php

session_start();
if (isset($_SESSION['name'])) {
    echo "欢迎," . $_SESSION['name'] . "";
} else {
    session_start();
    //设置Cookie的失效时间为time（）-1
    setcookie('name', '', time() - 1);
    //函数清除存储在当前会话中的所有变量，它能有效的将会话重置为创建时的状态
    session_unset();
    //函数从存储机制完全删除会话，使当前会话失效
    session_destroy();
    //注销会话变量
    unset($_SESSION['name']);
    //跳转到Login界面
    header("Location: Login.php");
}
?>
        <a href="Login.php"? data-action="post">退出</a>
</body>
</html>


