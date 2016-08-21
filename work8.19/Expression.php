<?php
//class Expression
//{
//  public function Expression()
// {
$array = array("Linux RedHat9.0", "Apache2.2.9", "MySQL5.0.51", "PHP5.2.6", "LAMP", "100");
foreach ($array as $row) {
    $arr   = preg_match("/^[a-zA-Z]\S*[0-9]/", $row);
    $str[] = $arr;
    return $str;
}
// }
//}
/**
 * Created by PhpStorm.
 * User: liufen
 * Date: 2016/8/21
 * Time: 15:57
 */
