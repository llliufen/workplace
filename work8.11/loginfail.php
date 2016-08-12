<?php

class Log
{
    public function userLogin()
    {
        if (isset($_POST['submit1'])) {
            //传入用户和密码信息
            $user     = $_POST['user'];
            $password = $_POST['password'];
            echo $user;
            //判断输入信息是否正确
            if ($user == "liufen" && $password == "12345") {
                session_start();
                $_SESSION['name'] = $user;
                var_dump($_SESSION);

                //跳转到Frist界面
                header("Location: Frist.php");
            } else {
                echo "密码错误";
            }
        }
    }
}
$test = new Log();
$test->userLogin();
/*
 * Created by PhpStorm.
 * User: liufen
 * Date: 2016/8/11
 * Time: 21:07
 */
