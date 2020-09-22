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

//获取输入框中的账号，返回变量
function get_user()
{
    return @$_POST['user'];
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