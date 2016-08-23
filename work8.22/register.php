<html>
<style>
.layout{width:500px;
    height:30px;
    border:2px solid #F2F9FD;
    background:#ccc;
    margin:0px auto;
}
.foot{width:500px;
    height:100px;
    border:2px solid #F2F9FD;
    background:#ccc;
    margin:0px auto;
}
</style>
<head>
    <title>用户注册页面 </title>
</head>
<?php include 'PdoTest.php';?>
<body>
<form action="Update.php" method="post" enctype="">
<h1>用户注册页面</h1>
        <br/>

<div class="layout">
<div class="layout">

        <td>用户名:</td>
        <td><input name="username" class="txt" type="txt" /></td>
</div>

    <div class="layout">
<td>密   码：</td>
<td><input name="password" class="txt" type="password"/>
    </div>
    <div class="layout">

<td>确认密码：</td>
<td><input name="comfirm" class="txt" type="password"></td>
    </div>

    <div class="layout">
<td>性别：</td>

<td><input type="radio" name="sex" value="1" checked="checked"/>男</td>

<td><input type="radio" name="sex" value="0"/>女</td>
    </div>

        <div class="layout">
<td>爱好：</td>
<td><input type="checkbox" name="love"value="music" checked="checked"/> 听音乐<td/>

<td><input type="checkbox" name="love" value="movie"/> 看电影<td/>

<td><input type="checkbox"name="love" value="game"/> 玩游戏<td/>
        </div>
            <div class="layout">
<td>您所在的城市：</td>
<td><select name="city">
<option value="">请选择</option>
<option value="bj">北京</option>
<option value="gz">广州</option>
<option value="hn">海南</option>
    </select> </td>
            </div>
                <div class="layout">
<td>照片：</td>
<input type="file" name="photo"/>

</div>
    <div class="foot">
<tr>个人简介：</tr>
<tr><textarea name="content" rows="5" cols="50"></textarea> </tr>

<br/><br/><br/>
<input name="comit" type="submit" value="提交"/>
<input name="reset" type="reset" value="重写"/>
</div>


</div>
</form>

</body>
</html>
