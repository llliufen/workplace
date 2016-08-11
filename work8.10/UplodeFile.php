<?php
class FileUpload
{
    /**
     * 用$_POST传入信息
     * 用for语句将文件循环上传
     *判断文件是否过大
     * 设置汉字命名
     */
    public function file($file)
    {
        $fileName = $_FILES["file"]['name'];
        $tempName = $_FILES["file"]['tmp_name'];
        $fileSize = $_FILES["file"]['size'];
        if (is_array($fileName)) {
            for ($i = 0; $i < count($fileName); $i++) {
                $temp = $tempName[$i];
                $size = $fileSize[$i];
                $name = $fileName[$i];
                $this->singleUpload($temp, $name, $size); //调用递归
                echo "文件上传成功<>";
            }
        } else {
        }
    }

    public function singleUpload($temp, $fileName, $size)
    {
        $finalName = $this->finalName($fileName);
        if (is_bool($this->checkFileSize($size))) {
            move_uploaded_file($temp, $finalName); //将文件上传
        }

    }
    public function checkFileSize($size) //检查文件是否过大

    {
        if ($size > 1000000) {
            echo "文件过大";
            return false;

        } else {
            return true;}
    }
    public function finalName($name)
    {
        $finalName = iconv("utf-8", "gb2312", $name); //设置文件最后的名字能用汉字输出
        return $finalName;
    }
}

/**
 * Created by PhpStorm.
 * User: liufen
 * Date: 2016/8/10
 * Time: 16:51
 */
