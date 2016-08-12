<?php
class Login
{
    public function cookie()
    { //设置cookie的名字，值，时间和日期
        setcookie("cookiename", "admin", time() + 60 * 60);
        $_COOKIE["cookiename"];
        //调用只带有name参数的setcookie，那么名为这个cookie将从客户机删除
        setcookie("MyCookie");
        //设置Cookie的失效时间为time（）或者time（）-1
        setcookie("username", "admin", time() - 1);
    }
    public function session()
    {

        session_start();
        //注销会话变量
        unset($_SESSION['username']);
        //函数清除存储在当前会话中的所有变量，它能有效的将会话重置为创建时的状态
        session_unset();
        //函数从存储机制完全删除会话，使当前会话失效
        session_destroy();
    }
}
$a = new Login();
$a->session();
/**
 * Created by PhpStorm.
 * User: liufen
 * Date: 2016/8/11
 * Time: 16:28
 */
