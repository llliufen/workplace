<?php include '../PdoTest.php';
if (isset($_POST['submitone'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $arr      = array('name' => $username, 'password' => $password);
    $test->insert('administrator', $arr);
    header('Location:userList.php');
}
if (isset($_POST['submittwo'])) {
    $title   = $_POST['title'];
    $content = $_POST['content'];
    $arr     = array('title' => $title, 'conten' => $content);
    $test->insert('news', $arr);
    header('Location:newsList.php');}

if (isset($_POST['submitthree'])) {
    $content = $_POST['content'];
    $arr     = array('introduction' => $content);
    $test->insert('company', $arr);
    header('Location:contactUs.php');}
