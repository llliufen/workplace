<?php
class Unlink
{
    /**
     * @param $path 文件夹的位置
     * 首先打开文件路径
     * 循环读取文件，是文件则删除
     * 不是文件则遍历
     * 最后删除空的文件夹
     */
    public function UnlinkFile($path)
    {
        if ($handle = opendir($path)) { //打开路径成功
            while (($file = readdir($handle)) !== false) { //循环读取目录中的文件名并赋值给$file
                if ($file != "." && $file != "..") {
                    $fh = $path . "/" . $file;
                    if (!is_dir($fh)) { //判断是不是目录
                        unlink($fh); //删除文件
                        echo "删除的文件有：", $fh;
                    } else {
                        $this->UnlinkFile($fh); //循环遍历
                    }

                }
            }
            closedir($handle);
            rmdir($path); //删除空的文件夹
        }
    }

}

/**
 * Created by PhpStorm.
 * User: liufen
 * Date: 2016/8/10
 * Time: 21:06
 */
