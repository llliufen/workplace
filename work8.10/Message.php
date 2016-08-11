<?php
class Message
{
    /**
     * 用$_POST传入信息
     * 打开文件并写入
     * 关闭文件并向客户端发送原始的 HTTP 报头
     */
    public function SaveFile()
    {
        $date     = date("Y-m-d H:i:s");
        $username = $_POST["username"];
        $cotent   = $_POST["content"];
        $fh       = fopen("Information.txt", "a+"); //打开文件
        fwrite($fh, "$username" . "$cotent" . $date . "\r\n"); //写入文件
        fclose($fh); //关闭文件
        header('Location: guest.php'); //向客户端发送原始的 HTTP 报头
    }
}
if (isset($_POST['one'])) { //设置按钮
    $new = new Message();
    $new->SaveFile();
}
/**
 * Created by PhpStorm.
 * User: liufen
 * Date: 2016/8/10
 * Time: 11:32
 */
