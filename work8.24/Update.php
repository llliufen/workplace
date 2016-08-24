<?php
include "PdoTest.php";
if (isset($_POST['comit'])) {
    $username  = $_POST['username'];
    $password  = $_POST['password'];
    $comfirm   = $_POST['comfirm'];
    $sex       = $_POST['sex'];
    $hobby     = implode($_POST['love']);
    $location  = $_POST['city'];
    $photo     = $_POST['photo'];
    $introduce = $_POST['content'];

//将传入的值传入数组中
    $arr = array('username' => $username, 'password' => $password, 'comfirm' => $comfirm, 'sex' => $sex, 'hobby' => $hobby, 'location' => $location, 'photo' => $photo, 'introduce' => $introduce);
//插入数据库
    $test->insert('register', $arr);
    echo "注册成功";

}
/**
 * Created by PhpStorm.
 * User: liufen
 * Date: 2016/8/22
 * Time: 22:02
 */
