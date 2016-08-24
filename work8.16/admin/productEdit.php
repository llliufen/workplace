<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑用户资料</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>

<body>
<form action="productEdit.php" method="post" enctype="multipart/form-data">
<div class="container">
    <h3 class="marginbot">添加新品<a href="productList.php" class="sgbtn">返回产品管理</a></h3>

    <div class="mainbox">
        <form name="form1" method="post" action="" >
            <table class="opt" style="width:600px;">
                <tbody>
                <tr>
                    <th>新品名称：</th>
                </tr>
                <tr>
                    <td>
                        <input name="usernames" class="txt" style="width:400px;" type="text">
                    </td>
                </tr>
                <tr>
                    <th>新品图片：</th>
                </tr>
                <tr>
                    <td>
                        <input name="image" class="txt" style="width:400px;" type="file">
                    </td>
                </tr>
                <tr>
                    <th>新品资料：</th>
                </tr>
                <tr>
                    <td><textarea style="width:400px; height:150px" name="contents" type="text"></textarea></td>
                </tr>
                </tbody>
            </table>
            <div class="opt"><input name="buttons" value=" 提 交 " class="btn" tabindex="3" type="submit"></div>
        </form>
    </div>
</div>
</form>
</body>
</html>
