<?php
include_once "db-inc.php";

//连接数据库
$link = db_connect();

//获取需要注册的账号密码
$enroll_user = get_user();
$enroll_password = get_password();

if ($enroll_user != "" && $enroll_password != "") {
    if(is_numeric($enroll_user)) {
        $find_bool = find_user($link, $enroll_user);
        if ($find_bool == true) {
            echo '
        <script>
            alert("此用户已存在"); 
            window.location.replace("../index.html"); 
        </script>';
        } else {
            $add_bool = add($link, $enroll_user, $enroll_password);
            if ($add_bool == true) {
                echo '
            <script>
                alert("注册成功"); 
                window.location.replace("../index.html"); 
            </script>';
            } else {
                echo '
            <script>
                alert("注册失败，请再试一次"); 
                window.location.replace("../index.html"); 
            </script>';
            }
        }
    }
    else {
        echo '
            <script>
                alert("用户名必须为数字组合"); 
                window.location.replace("../index.html"); 
            </script>';
    }
}
else{
    echo '
        <script>
            alert("用户名或密码不能为空"); 
            history.back();
        </script>';
}
