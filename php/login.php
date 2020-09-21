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
    if ($find_bool == true) {
        echo '
            <script>
                window.location.replace("../html/main_info.html?user='.$login_user.'"); 
            </script>';
        // header("location:https://www.baidu.com/");
        //history.back();
    } else {
        echo '
        <script>
            alert("登录失败，请重新登录"); 
            window.location.replace("../main.html"); 
        </script>';
    }
} else if ($login_user == "" && $login_password == "") {}
else {
    echo '
        <script>
            alert("用户名或密码不能为空");
            window.location.replace("../main.html"); 
        </script>';
}

//进行注册
// $query = 'INSERT INTO table1(user,password) VALUES("'.$login_user.'","'.$login_password.'");';
// if(!empty($_POST['enroll'])) {
//     if ($login_user != "" && $login_password != "") {
//         mysqli_query($link, $query);
//         $find_bool = find($link, $login_user, $login_password);
//         if($find_bool == true) {
//             echo '
//             <script>
//                 alert("注册成功");
//             </script>
//             ';
//         }
//         else {
//             echo '
//             <script>
//                 alert("注册失败");
//             </script>
//             ';
//         }
//     }
//     else {
//         echo '
//         <script>
//             alert("账号或密码不能为空");
//         </script>
//         ';
//     }
// }

//清空输入框内容
// echo '
// <script>
    // var login_user = document.getElementById("login_user");
    // var login_password = document.getElementById("login_password");
    // login_user.setAttribute("value", "");
    // login_password.setAttribute("value", "");
// </script>';