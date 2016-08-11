
<html>
<body>
<form action="UplodeFile.php" method="post" enctype="multipart/form-data">
    <label for="file">Filename:</label>
//设置三个上传文件接口
    <input type="file" name="file[]" id="file3"/>
    <input type="file" name="file[]" id="file3"/>
    <input type="file" name="file[]" id="file3"/>
    <br />
    <input type="submit"name="submit" value="Submit"/>
</form>
</body>
</html>
<?php
/*//设置编码为UTF-8，以避免中文乱码
header('Content-Type:text/html;charset=utf-8');
 */;?><!--
<!DOCTYPE html>
<html>
<head>
    <title>文件上传表单页面</title>
</head>
<body>
<form action="UplodeFile.php" method="post" enctype="multipart/form-data">
    文件1：<input name="file1" type="file" /><br/>
    文件2：<input name="file2" type="file" /><br/>
    <input type="submit" value="上传" />
</form>
</body>
</html>
-->/**
 * Created by PhpStorm.
 * User: liufen
 * Date: 2016/8/10
 * Time: 16:43
 */
