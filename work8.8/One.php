<?php
namespace work;

class Sort
{
    public function Operation()
    {
        $empty = '';
        $null  = null;
        $bool  = false;
        $array = array();
        $a     = 1;
        $x     = &$a;
        $b     = $a++;
        echo $b; //$b的值为1
    }
    public function maxNum()
    {
        $a   = 1;
        $b   = 2;
        $c   = 3;
        $max = ($a > $b ? $a : $b) > $c ? ($a > $b ? $a : $b) : $c;
        echo $max;

    }
    public function Value()
    {
        $b = 201;
        $c = 40;
        $a = $b > $c ? 4 : 5; //对比$b和$c，如果$b大，则将4赋值给$a,否则则将5赋值给$a.
        echo $a; //输出结果为4.
    }
    /**
     * 无输出结果，因为没有输出语句。
     * 加上输出语句后输出为2.
     */
    public function ValueTwo($int)
    {
        $int    = $int * 2;
        $int    = 2;
        $result = $this->timesTwo($int);
        return $result;
    }
//因为在PHP中变量是以C语言的结构体来存储的，空字符串和NULL,false都是以值为0存储的
    public function Compare()
    {
        $str1 = null;
        $str2 = false;
        echo $str1 == $str2 ? '相等' : '不相等'; //结果是相等
        $str3 = '';
        $str4 = 0;
        echo $str3 == $str4 ? '相等' : '不相等'; //结果是相等
        $str5 = 0;
        $str6 = '0';
        echo $str5 === $str6 ? '相等' : '不相等'; //结果是不相等
    }
    /**
         * 1.isset（）和empty（）的区别和使用场景：(php手册中解释：empty（）描述bool empty( mixed var )
         * 如果 var 是非空或非零的值，则 empty() 返回 FALSE。
         * 换句话说，”"、0、”0″、NULL、FALSE、array()、var $var;
         * 以及没有任何属性的对象都将被认为是空的，如果 var 为空，则返回 TRUE。
         * isset()检测变量是否设置，描述bool isset ( mixed var [, mixed var [, ...]] )
         * 如果 var 存在则返回 TRUE，否则返回 FALSE。
         * 如果已经使用 unset() 释放了一个变量之后，它将不再是 isset()。
         * 若使用 isset() 测试一个被设置成 NULL 的变量，将返回 FALSE。
         * 同时要注意的是一个 NULL 字节（”?”）并不等同于 PHP 的 NULL 常数。
         * 警告: isset() 只能用于变量，因为传递任何其它参数都将造成解析错误。）
         * */
    public function Functions()
    {
        $a1 = null;
        $a2 = false;
        $a3 = 0;
        $a4 = '';
        $a5 = '0';
        $a6 = 'null';
        $a7 = array();
        $a8 = array(array());

        echo empty($a1) ? 'true' : 'false';
        echo empty($a2) ? 'true' : 'false';
        echo empty($a3) ? 'true' : 'false';
        echo empty($a4) ? 'true' : 'false';
        echo empty($a5) ? 'true' : 'false';
        echo empty($a6) ? 'true' : 'false';
        echo empty($a7) ? 'true' : 'false';
        echo empty($a8) ? 'true' : 'false';
    }
    /**
     *第一个echo是将5赋值给$count后直接打印出$count，输出为5.
     *第二个echo是调用get_count方法，将0赋值给$count,$count++是先输出再加一，所以直接输出0；
     *第三个echo是get_count方法中$count加上一后输出。输出为5.
     */
    public function get_count()
    {
        $count        = 5;
        static $count = 0;
        return $count++;
        echo $count; //输出5
        ++$count;
        echo get_count(); //输出0
        echo get_count(); //输出1
    }
    public function Exchange()
    {
        //将$a,$b想象为数周上的两点。

        $a = 5;
        $b = 7;
        $a = $b - $a; //求出两点之间的距离并赋值给$a;
        $b = $b - $a; //求出$a到原点的距离并赋值给$b;
        $a = $b + $a; //求出$b到原点的距离并赋值给$a;
        echo $a;
        echo $b;
    }
    public function Arrays()
    {
        //使用inplode函数连接。
        $arr = ['zhangsan', 'lisi', 'wangwu'];
        $str = implode(',', $arr);
        echo $str;
    }
    public function changeArray()
    {
        $arrOne = array(
            0 => array('fid' => 1, 'tid' => 1, 'name' => 'xiaoming'),
            1 => array('fid' => 1, 'tid' => 2, 'name' => 'zhangsan'),
            2 => array('fid' => 1, 'tid' => 5, 'name' => 'lisi'),
            3 => array('fid' => 1, 'tid' => 7, 'name' => 'wangwu'),
            4 => array('fid' => 3, 'tid' => 9, 'name' => 'zhaoliu'),
        );
        echo '<pre>';

        echo '<pre>';
        $arrTwo = array();
        $arrTen = array();
        foreach ($arrOne as $key => $value) {
            $arrTwo[$value['fid']][] = array_slice($value, 1);}

        foreach ($arrTwo as $valus) {
            $arrTen[] = $valus;
        }

        print_r($arrOne);
        print_r($arrTwo);
        print_r($arrTen);
    }
    public function Index()
    {

        for ($i = 1; $i < 10; $i++) {
            echo '<pre>';
            for ($j = 1; $j <= $i; $j++) {

                echo $m = $i * $j;
            }

        }
        var_dump($this->Thirteen($m));
    }

}
/**
 * Created by PhpStorm.
 * User: liufen
 * Date: 2016/8/8
 * Time: 9:43
 */
