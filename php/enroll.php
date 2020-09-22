<?php
include_once "db-inc.php";

//连接数据库
$link = db_connect();

//获取需要注册的账号密码
$enroll_user = get_user();
$enroll_password = get_password();
$enroll_name = get_name();
$enroll_sex = get_sex();
$enroll_age = get_age();

if ($enroll_user != "" && $enroll_name != "" && $enroll_sex != "" && $enroll_age != "") {
    if (!is_numeric($enroll_user)) {
        echo '
        <script>
            alert("用户名必须为数字组合");
            window.location.replace("../html/enroll.html"); 
        </script>';
    }
    if (strlen($enroll_name) > 20) {
        echo '
        <script>
            alert("姓名不能超过20个字符");
            window.location.replace("../html/enroll.html"); 
        </script>';
    }
    if ($enroll_sex != '男' && $enroll_sex != '女') {
        echo '
        <script>
            alert("性别必须为男或女"); 
            window.location.replace("../html/enroll.html"); 
        </script>';
    }
    if ($enroll_age < 0 || $enroll_age > 120) {
        echo '
        <script>
            alert("年龄必须大于0并且小于120"); 
            window.location.replace("../html/enroll.html"); 
        </script>';
    }
    if ($enroll_password != "") {
        $insert_student_bool = insert_student($link, $enroll_user, $enroll_name, $enroll_sex, $enroll_age);
        $insert_student_account_bool = insert_student_account($link, $enroll_user, $enroll_password);
        if ($insert_student_bool && $insert_student_account_bool) {
            echo '
            <script>
                alert("注册成功"); 
                window.location.replace("../index.html"); 
            </script>';
        } else {
            echo '
            <script>
                alert("注册失败，请更换用户名重试"); 
                window.location.replace("../html/enroll.html"); 
            </script>';
        }
    }
    else {
        $insert_student_bool = insert_student($link, $enroll_user, $enroll_name, $enroll_sex, $enroll_age);
        $insert_student_account_bool = insert_student_account($link, $enroll_user);

        if ($insert_student_bool && $insert_student_account_bool) {
            echo '
            <script>
                alert("注册成功"); 
                window.location.replace("../index.html"); 
            </script>';
        } else {
            echo '
            <script>
                alert("注册失败，请更换用户名重试"); 
                window.location.replace("../html/enroll.html"); 
            </script>';
        }
    }
}
else {
    echo '
        <script>
            alert("用户名、姓名、性别、年龄都不能为空"); 
            window.location.replace("../html/enroll.html"); 
        </script>';
}