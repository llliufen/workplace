<?php
include '../PdoTest.php';

if (isset($_POST['one'])) {
    foreach ($arr = $_POST['arr'] as $row) {
        $test->delete('news ', "id=$row");
    }
    header('Location:newsList.php');
}
if (isset($_POST['two'])) {
    foreach ($arr = $_POST['pro'] as $row) {
        $test->delete('product', "id=$row");
    }
    header('Location:productList.php');
}
if (isset($_POST['three'])) {
    foreach ($arr = $_POST['user'] as $row) {
        $test->delete('administrator ', "id=$row");
    }
    header('Location:userList.php');
}

/**
 * Created by PhpStorm.
 * User: liufen
 * Date: 2016/8/19
 * Time: 10:19
 */
