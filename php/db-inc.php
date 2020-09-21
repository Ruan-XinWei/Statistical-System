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

//检测账号密码是否在数据库中，返回bool
function find($link, $user, $password)
{
    //获取数据库内的账号密码
    // $query = 'SELECT * FROM table1';
    $query = 'SELECT * FROM '.USER_PASSWORD_TABLE;
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
    $query = 'SELECT * FROM ' . USER_PASSWORD_TABLE;
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

//将账号密码存入数据库中，返回bool
function add($link, $user, $password) {
    $query = "INSERT INTO ".USER_PASSWORD_TABLE."(user,password) VALUES('".$user."','".$password."');";
    $result = mysqli_real_query($link, $query);
    return $result;
}