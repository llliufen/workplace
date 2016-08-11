
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>我的留言本</title>
    <style type="text/css">
        h1, h2 {
            font-size:20px;
            font-weight:normal;
            border-bottom:1px solid #ccc;
            padding-bottom:10px;
            width:800px;
        }

        h2 {
            margin-top:100px;
        }

        .txt {
            width:400px;
        }

        textarea {
            width:400px;
            height:100px;
        }

        dl dt {
            line-height:30px;
        }

        dl dd {
            color:#666;
        }

    </style>
</head>

<body>

<h1>我的留言本</h1>
<dl>

        <dt>2016-08-10 10：43：50 李思思:</dt>
        <dd>这是第一个留言</dd>
		<dt>2016-08-10 10：43：50 李思思:</dt>
        <dd>这是第一个留言</dd>
		<dt>2016-08-10 10：43：50 李思思:</dt>
        <dd>这是第一个留言</dd>
    //逐行读取文件
    <?php
$handle = fopen("Information.txt", "r+");
while (!feof($handle)) {
    $content = fgets($handle);
    echo $content;
}
fclose($handle);
?>
</dl>
<h2>我要留言</h2>
<form action="Message.php" method="post">
    <table>
        <tbody><tr>


            <th>昵称：</th>
            <td><input class="txt" type="text" name="username"></td>
        </tr>
        <tr>
            <th>内容：</th>
            <td>
                <textarea name="content"></textarea>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <input value="提交" type="submit" name="one"></td>
        </tr>
        </tbody>
    </table>
</form>

</body>
</html>
