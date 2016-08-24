/**
 * Created by liufen on 2016/8/24.
 */

function check(form) {
    if(form.username.value==''){
        alert('请输入账号');
        form.username.focus();
        return false;
    }
    if(form.password.value==''){
        alert('请输入密码');
        form.password.focus();
        return false;
    }
    if(form.password.value!=form.comfirm.value){
        alert("两次密码不一致");
        form.comfirm.focus();
        return false;
    }

    if (!(form.love0.checked+form.love1.checked+form.love2.checked)){
        alert("请选择爱好!");
        form.love0.focus();
        return false;
    }

    if(form.city.value==0){
        alert('请选择城市');
        form.city.focus();
        return false;
    }
    if(form.content.value==''){
        alert('请介绍自己');
        form.content.focus();
        return false;
    }

}
