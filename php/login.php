<?php
include_once "db-inc.php";

//连接数据库
$link = db_connect();

//获取输入框中的账号密码
// function get_user() {
//     return @$_POST['user'];
// }
// function get_password() {
//     return @$_POST['password'];
// }

//进行登录
$login_user = get_user();
$login_password = get_password();
if ($login_user != "" && $login_password != "") {
    $find_bool = find($link, $login_user, $login_password);
    if ($find_bool == true) {   //如果在学生端查找成功
        echo '
            <script>
                window.location.replace("../php/page/personal_center_page/main_info_student.php?user='.select_name_student($link, $login_user).'&id='.$login_user.'"); 
            </script>';
        // header("location:https://www.baidu.com/");
        //history.back();
    } else {
        $find_admin_bool = find_admin($link, $login_user, $login_password);
        if($find_admin_bool == true) {  //如果在管理员端查找成功
            echo '
            <script>
                window.location.replace("../php/page/personal_center_page/main_info.php?user=管理员' . '&id=' . $login_user . '"); 
            </script>';
        }
        else {  //如果都没有成功
            echo '
            <script>
                alert("登录失败，请重新登录"); 
                window.location.replace("../index.html"); 
            </script>';
        }
    }
} 
else if ($login_user == "" && $login_password == "") {
    echo '
        <script>
            alert("用户名和密码不能为空");
            window.location.replace("../index.html"); 
        </script>';
}
else {
    echo '
        <script>
            alert("用户名或密码不能为空");
            window.location.replace("../index.html"); 
        </script>';
}