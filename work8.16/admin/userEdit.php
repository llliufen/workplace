<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑用户资料</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<?php include '../PdoTest.php';
$username = $_GET['username'];
foreach ($test->query("select * from administrator where id=$username") as $row) {?>
<body>
<div class="container">
    <h3 class="marginbot">编辑用户资料<a href="userList.php" class="sgbtn">返回用户列表</a></h3>
    <div class="mainbox">
        <form action="updata.php" method="post">
            <table class="opt">
                <tbody>
                    <tr>
                        <th>用户名:</th>
                    </tr>
                    <tr>
                        <td>
                        <input name="username" class="txt" type="text"value=<?php echo $row['name']; ?> >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input name="id" class="txt" type="hidden"value=<?php echo $row['id']; ?> >
                        </td>
                    </tr>
                    <tr>
                        <th>密　码:<span style="font-weight:normal"> [密码留空，保持不变]</span></th>
                    </tr>
                    <tr>
                        <td>
                        <input name="password" class="txt" type="password" value=<?php echo $row['password']; ?> >
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="opt"><input name="submitone" value=" 提 交 " class="btn" tabindex="3" type="submit"></div>
            <?php }
;?> </form>
    </div>
</div>
</body>
</html>
