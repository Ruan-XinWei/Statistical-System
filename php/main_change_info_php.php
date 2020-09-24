<?php
include_once "db-inc.php";

$link = db_connect();
$url_user_id = geturl_string();
$start = strpos($url_user_id, "id=") + 3;
$oldid = substr($url_user_id, $start);

$name = get_name();
$id = get_id();
$sex = get_sex();
$age = get_age();
$admin = get_input("admin");
$main_change_info = "";

if(substr($url_user_id, 5, 9) != "管理员") {
    $main_change_info = "main_change_info_student";
}
else {
    $main_change_info = "main_change_info";
}

if($name != "") {
    if (strlen($name) > 20) {
        echo '
        <script>
            alert("姓名不能超过20个字符");
            window.location.replace("page/main_change_info.php?'.$url_user_id.'"); 
        </script>';
    }
    else {
        $result = update_name_student_use_id($link, $name, $oldid);
        if($result == true) {
            echo '
            <script>
                alert("姓名修改成功，请重新登录");
                window.location.replace("../index.html"); 
            </script>';
        }
        else {
            echo '
            <script>
                alert("姓名修改失败，请重新修改");
                window.location.replace("page/personal_center_page/'.$main_change_info.'.php?' . $url_user_id . '"); 
            </script>';
        }
    }
}

if($id != "") {
    if (!is_numeric($id)) {
        echo '
        <script>
            alert("学号必须为数字组合");
            window.location.replace("page/personal_center_page/'.$main_change_info.'.php?' . $url_user_id . '"); 
        </script>';
    }
    else {
        $result = update_id_student_use_id($link, $id, $oldid);
        if ($result == true) {
            echo '
            <script>
                alert("学号修改成功，请重新登录");
                window.location.replace("../index.html"); 
            </script>';
        } else {
            echo '
            <script>
                alert("学号修改失败，请重新修改");
                window.location.replace("page/personal_center_page/'.$main_change_info.'.php?' . $url_user_id . '"); 
            </script>';
        }
    }
}

if ($sex != "") {
    if ($sex != '男' && $sex != '女') {
        echo '
        <script>
            alert("性别必须为男或女"); 
            window.location.replace("page/personal_center_page/'.$main_change_info.'.php?' . $url_user_id . '"); 
        </script>';
    } else {
        $result = update_sex_student_use_id($link, $sex, $oldid);
        if ($result == true) {
            echo '
            <script>
                alert("性别修改成功");
                window.location.replace("page/personal_center_page/'.$main_change_info.'.php?' . $url_user_id . '"); 
            </script>';
        } else {
            echo '
            <script>
                alert("性别修改失败，请重新修改");
                window.location.replace("page/personal_center_page/'.$main_change_info.'.php?' . $url_user_id . '"); 
            </script>';
        }
    }
}

if($age != "") {
    if ($age < 0 || $age > 120) {
        echo '
        <script>
            alert("年龄必须大于0并且小于120"); 
            window.location.replace("page/personal_center_page/'.$main_change_info.'.php?' . $url_user_id . '"); 
        </script>';
    }
    else {
        $result = update_age_student_use_id($link, $age, $oldid);
        if ($result == true) {
            echo '
            <script>
                alert("年龄修改成功");
                window.location.replace("page/personal_center_page/'.$main_change_info.'.php?' . $url_user_id . '");        
            </script>';
        } else {
            echo '
            <script>
                alert("年龄修改失败，请重新修改");
                window.location.replace("page/personal_center_page/'.$main_change_info.'.php?' . $url_user_id . '"); 
            </script>';
        }
    }
}

if($admin != "") {
    $result = update_id_admin_use_id($link, $admin, $oldid);
    $newurl = substr($url_user_id, 0, 14) .'&id='.$admin;
    // echo $newurl;
    if($result == true) {
        $URL = <<<URLSTRING
            <script>
                alert("修改成功");
                window.location.replace("page/personal_center_page/main_change_info.php?$newurl"); 
            </script>
        URLSTRING;
        echo $URL;
    }
}
?>