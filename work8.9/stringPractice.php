<?php
namespace work;

class Str
{
    /**
     * 1.首先建立一个空的字符串。
     * 2.使用while循环每隔三个字符插入一个“，”。
     * 3.删除第一个“，”。
     * 4.返向输出。
     */
    public function stingRev()
    {
        $i   = 0;
        $num = '';
        $str = "1112223334445";
        while ($i <= strlen($str)) { //使用while循环每隔三个字符插入一个“，”。
            $num = $num . "," . substr($str, $i, 3);
            $i   = $i + 3;
        }
        $num = substr($num, 1, strlen($num)); //删除第一个“，”。
        echo strrev($num); //返向输出。
    }

    /**
     * 1.输入字符串。
     * 2.从第三个字符开始截取。
     * 3.反转输出。
     */
    public function strRev()
    {
        $str  = 'www.yaochufa.com'; //输入字符串。
        $str1 = substr($str, 3); //从第三个字符开始截取。
        echo strrev($str1); //反转输出。
    }

    /**
     * 1.用空格替换原字符串中的_;
     * 2.将每个单词的首字母变成大写
     * 3.去掉空格
     */
    public function arrayTo()
    {
        $str  = 'my_leader';
        $str1 = 'make_by_name';
        $str2 = str_replace('_', ' ', $str); //用空格替换原字符串中的_
        $str3 = str_replace('_', ' ', $str1);

        echo ucwords($str2);
        echo ucwords($str3);
    }

    /**
     * 1.直接从第7个字符截取并翻转
     * 2.直接替换再翻转
     */
    public function strSub()
    {
        $mail = 'liming@yaochufa.com';

        echo strrev(substr($mail, 7));
        echo "<pre>";
        $num = str_replace('liming@', '', $mail);
        echo strrev($num);
    }

    /**
     * 1.先将字符串截成单词
     * 2.for语句实现翻转
     */
    public function arrayRev($arr)
    {
        $arr1 = '';
        $num  = str_word_count($arr, 1); //先将字符串截成单词
        for ($i = count($num) - 1; $i >= 0; $i--) { //for语句实现翻转
            $arr1 = $arr1 . ' ' . $num[$i];
        }
        return $arr1;
    }

    /**
     * 1.建立一个空字符串
     * 2.截取从第一个汉字开始的前20个汉字
     * 3.输出并加上省略号
     */
    public function strArray()
    {
        $str  = ''; //建立一个空字符串
        $str1 = md_substr($str, 1, 60); //截取从第一个汉字开始的前20个汉字
        echo $str1, '.....'; //输出并加上省略号
    }
}
/**
 * Created by PhpStorm.
 * User: liufen
 * Date: 2016/8/9
 * Time: 10:09
 */
