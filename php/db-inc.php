<?php
include_once 'config.php';

//连接MYSQL，返回连接
function db_init_connect($host = HOST, $user = USER, $password = PASSWORD, $database = '', $port = PORT) {
    return mysqli_connect($host, $user, $password, $database, $port);
}

//连接信息管理系统数据库，返回连接
function db_connect($host=HOST,$user=USER,$password=PASSWORD,$database=DATABASE,$port=PORT) {
    return mysqli_connect($host, $user, $password, $database, $port);
}

//获取当前URL网址参数
function geturl_string() {
    return urldecode($_SERVER['QUERY_STRING']);
}

//获取输入框中的账号，返回变量
function get_user()
{
    return @$_POST['user'];
}
function get_id() {
    return @$_POST['id'];
}

//获取输入框中的密码，返回变量
function get_password()
{
    return @$_POST['password'];
}

//获取输入框中的姓名
function get_name() {
    return @$_POST['name'];
}

//获取输入框中的性别
function get_sex() {
    return @$_POST['sex'];
}

//获取输入框中的年龄
function get_age() {
    return @$_POST['age'];
}

//获取输入框中的数量
function get_num() {
    return @$_POST['num'];
}

//获取输入框中的口号
function get_slogan() {
    return @$_POST['slogan'];
}

//获取输入框中的团队号
function get_team_id() {
    return @$_POST['team_id'];
}

//获取输入框中的活动编号
function get_activity_id()
{
    return @$_POST['activity_id'];
}

//获取输入框中的最早时间
function get_time_start()
{
    return @$_POST['time_start'];
}

//获取输入框中的最晚时间
function get_time_end()
{
    return @$_POST['time_end'];
}

//获取输入框中的指导老师编号
function get_teacher_id()
{
    return @$_POST['teacher_id'];
}

//获取输入框中的报送学院
function get_academy() {
    return @$_POST['academy'];
}

//通用获取
function get_input($name) {
    return @$_POST["{$name}"];
}

//检测账号密码是否在数据库中，返回bool
function find($link, $user, $password)
{
    //获取数据库内的账号密码
    // $query = 'SELECT * FROM table1';
    $query = 'SELECT * FROM '.STUDENT_ACCOUNT_TABLE;
    $result = mysqli_query($link, $query);
    $user_password = mysqli_fetch_all($result);

    //账号密码总数
    $lines = mysqli_affected_rows($link);

    //循环检测
    $flag = 0;
    for ($i = 0; $i < $lines; $i++) {
        if ($user == $user_password[$i][0] && $password == $user_password[$i][1]) {
            $flag = 1;
            break;
        }
    }
    if ($flag == 0) {
        return false;
    } else {
        return true;
    }
}

//检测账号密码是否为管理员中，返回bool
function find_admin($link, $user, $password)
{
    //获取数据库内的账号密码
    $query = 'SELECT * FROM ' . ADMIN_TABLE;
    $result = mysqli_query($link, $query);
    $user_password = mysqli_fetch_all($result);

    //账号密码总数
    $lines = mysqli_affected_rows($link);

    //循环检测
    $flag = 0;
    for ($i = 0; $i < $lines; $i++) {
        if ($user == $user_password[$i][0] && $password == $user_password[$i][1]) {
            $flag = 1;
            break;
        }
    }
    if ($flag == 0) {
        return false;
    } else {
        return true;
    }
}

//检测账号是否在数据库中，返回bool
function find_user($link, $user)
{
    //获取数据库内的账号密码
    // $query = 'SELECT * FROM table1';
    $query = 'SELECT * FROM ' . STUDENT_ACCOUNT_TABLE;
    $result = mysqli_query($link, $query);
    $user_password = mysqli_fetch_all($result);

    //账号密码总数
    $lines = mysqli_affected_rows($link);

    //循环检测
    $flag = 0;
    for ($i = 0; $i < $lines; $i++) {
        if ($user == $user_password[$i][0]) {
            $flag = 1;
            break;
        }
    }
    if ($flag == 0) {
        return false;
    } else {
        return true;
    }
}

//将账号密码存入student_account中，返回bool
function insert_student_account($link, $user, $password="password") {
    $query = "INSERT INTO ".STUDENT_ACCOUNT_TABLE."(id,password) VALUES('".$user."','".$password."');";
    $result = mysqli_real_query($link, $query);
    return $result;
}

//将数据存入student，返回bool
function insert_student($link, $id, $name, $sex, $age) {
    $query = 'INSERT INTO '.STUDENT_TABLE.'(`id`, `name`, `sex`, `age`) VALUES ("'.$id.'","'.$name.'","'.$sex.'","'.$age.'");';
    $result = mysqli_real_query($link, $query);
    return $result;
}

//注册管理员账户，返回bool
function insert_admin_account($link, $user, $password = "password")
{
    $query = "INSERT INTO " . ADMIN_TABLE . "(id,password) VALUES('" . $user . "','" . $password . "');";
    $result = mysqli_real_query($link, $query);
    return $result;
}

//通过学号查找学生姓名
function select_name_student($link, $id) {
    $query = 'SELECT `name` FROM '.STUDENT_TABLE.' WHERE id='.$id.';';
    $result = mysqli_query($link, $query);
    $name = mysqli_fetch_all($result);
    return $name[0][0];
}

//通过学号查找学生性别
function select_sex_student_use_id($link, $id) {
    $query = 'SELECT `sex` FROM ' . STUDENT_TABLE . ' WHERE id=' . $id . ';';
    $result = mysqli_query($link, $query);
    $sex = mysqli_fetch_all($result);
    return $sex[0][0];
}

//通过学号查找学生年龄
function select_age_student_use_id($link, $id)
{
    $query = 'SELECT `age` FROM ' . STUDENT_TABLE . ' WHERE id=' . $id . ';';
    $result = mysqli_query($link, $query);
    $age = mysqli_fetch_all($result);
    return $age[0][0];
}

function select_id_student_use_age($link, $age) {
    $query = 'SELECT `id` FROM '.STUDENT_TABLE.' WHERE age="'.$age.'";';
    $result = mysqli_query($link, $query);
    return mysqli_fetch_all($result);
}

function select_num_team_use_id($link, $id) {
    $query = 'SELECT `num` FROM '.TEAM_TABLE.' WHERE id = "'.$id.'";';
    $result = mysqli_query($link, $query);
    $num = mysqli_fetch_all($result);
    return $num[0][0];
}

//通过学号修改学号
function update_id_student_use_id($link, $newid, $oldid) {
    $query = 'UPDATE `student` SET `id`="'.$newid.'" WHERE id="'.$oldid.'";';
    return mysqli_real_query($link, $query);
}

function update_id_admin_use_id($link, $newid, $oldid)
{
    $query = 'UPDATE `admin` SET `id`="' . $newid . '" WHERE id="' . $oldid . '";';
    return mysqli_real_query($link, $query);
}

//通过学号修改姓名
function update_name_student_use_id($link, $name, $oldid)
{
    $query = 'UPDATE `student` SET `name`="' . $name . '" WHERE id=' . $oldid . ';';
    return mysqli_real_query($link, $query);
}

//通过学号修改性别
function update_sex_student_use_id($link, $sex, $oldid)
{
    $query = 'UPDATE `student` SET `sex`="' . $sex . '" WHERE id=' . $oldid . ';';
    return mysqli_real_query($link, $query);
}

//通过学号修改年龄
function update_age_student_use_id($link, $age, $oldid)
{
    $query = 'UPDATE `student` SET `age`="' . $age . '" WHERE id=' . $oldid . ';';
    return mysqli_real_query($link, $query);
}

function check_url() {
    $url_user_id = geturl_string();
    $url_start = $_SERVER['PHP_SELF'];
    if(strpos($url_start, "login") == true || strpos($url_start, "enroll") == true || strpos($url_start, "init") == true) {}
    else {
        $bool = false;
        if (strlen($url_user_id) <= 9) {
        } else {    //检测URL是否规范
            $start = strpos($url_user_id, "user=") + 5;
            $end = strpos($url_user_id, "&id=");
            $name = substr($url_user_id, $start, $end - $start);
            $start = strpos($url_user_id, "id=") + 3;
            $id = substr($url_user_id, $start);
            if ($name != "" && $id != "") {
                $bool = true;
            }
        }
        if ($bool == false) {
            echo '
            <script>
                alert("参数不正确，请重新登录");
                window.location.replace("../../../index.html"); 
            </script>';
        }
    }
}

check_url();