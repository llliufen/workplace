<?php
class Expre
{
    /**
     * 用正则找出数组中以字母开始和以数字结束，并且没有空格的单元
     */
    public function expression($array)
    {
        foreach ($array as $row) {
            preg_match('/^[a-zA-Z]\S*[0-9]$/', $row, $result);
            $arr[] = $result;
        }
        return $arr;
    }
    /**
     * 用正则取出url中的协议，主机名，域名和文件名。
     */
    public function url($url)
    {
        $str = '@^(http://)(\w+.)(\w+.\w+.)(\w+.*)@i';
        if (preg_match($str, $url, $result)) {
            $arr[] = $result;
        }
        return $arr;
    }
    /**
     * 用正则找出字符串中所有的网址
     */
    public function expreHttp($url)
    {
        $str = '@http://\w+.\w+.\w+@i';
        if (preg_match_all($str, $url, $result)) {
            $arr = $result[0];
        }
        return $arr;
    }
    /**
     * 用正则去除所有的html标签
     */
    public function expreDelete($url)
    {
        $str = '/<\/?[^>]+>/';
        $arr = preg_replace($str, '', $url);
        return $arr;
    }
}

/**
 * Created by PhpStorm.
 * User: liufen
 * Date: 2016/8/21
 * Time: 15:57
 */
