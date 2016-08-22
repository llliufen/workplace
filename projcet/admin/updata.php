<?php
include '../PdoTest.php';
if (isset($_POST['submitone'])) {
    $id       = $_POST['id'];
    $name     = $_POST['username'];
    $password = $_POST['password'];
    $arr      = array('name' => $name, 'password' => $password);
    $test->update('administrator', $arr, "id=$id");

    header("Location:userList.php");
}
if (isset($_POST['submittwo'])) {
    $id       = $_POST['id'];
    $name     = $_POST['title'];
    $password = $_POST['content'];
    $arr      = array('title' => $name, 'conten' => $password);
    $test->update('news', $arr, "id=$id");

    header("Location:newsList.php");
}
/**
 * Created by PhpStorm.
 * User: liufen
 * Date: 2016/8/19
 * Time: 18:00
 */
{

}
