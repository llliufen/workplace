<?php
class Log
{
    public function userLogin()
    {
        if (isset($_POST['submit'])) {
            //传入用户和密码信息
            $user     = $_POST['username'];
            $password = $_POST['password'];
            echo $user;
            //判断输入信息是否正确
            if ($user == "liufen" && $password == "123456") {
                session_start();
                $_SESSION['username'] = $user;
                var_dump($_SESSION);

                //跳转到Frist界面
                header("Location: index.php");
            } else {
                echo "密码错误";
            }
        }
    }
}
$test = new Log();
$test->userLogin();
/**
 * Created by PhpStorm.
 * User: liufen
 * Date: 2016/8/17
 * Time: 16:17
 */
