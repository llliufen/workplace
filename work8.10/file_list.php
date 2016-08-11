<?php
/**
 * 1.首先打开文件夹路径
 * 2.用while语句循环读取目录中的文件名并赋值给$file
 * 3.排除与当前路径和前一路径
 */
class File
{
    public function fileList($path)
    {
        if ($handle = opendir($path)) { //打开路径成功
            while (($file = readdir($handle)) !== false) { //循环读取目录中的文件名并赋值给$file
                if ($file != "." && $file != "..") {
                    if (is_dir($path . "/" . $file)) { //判断文件是不是目录
                        echo $path . "/" . $file . "<br>"; //输出目录文件
                        $this->fileList($path . "/" . $file);
                    } else {
                        echo $path . ":" . $file . "<br>";
                    }

                }
            }
        }
    }
}
