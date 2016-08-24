<?php
class Str
{
    public function substr($str)
    {

        $len = strlen($str);
        if ($len < 11) { //判断字符长度，小于11则直接输出
            return $str;
        } else {
            return mb_substr($str, 0, 11) . '...'; //当字符长度大于21时，则从第1位到第11开始读取，多余的用...代替
        }
    }
}
/**
 * Created by PhpStorm.
 * User: liufen
 * Date: 2016/8/22
 * Time: 9:47
 */
