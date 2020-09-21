<?php
include_once "db-inc.php";

//连接MYSQL
$link = db_init_connect();

$query = 'DROP DATABASE IF EXISTS ' . DATABASE;
mysqli_query($link, $query);
$query = 'CREATE DATABASE ' . DATABASE;
mysqli_query($link, $query);

mysqli_select_db($link, DATABASE);
$user_password_table = USER_PASSWORD_TABLE;
$query = <<<STRING
CREATE TABLE $user_password_table
(
    user CHAR(20) UNIQUE NOT NULL,
    password CHAR(20) NOT NULL,
    PRIMARY KEY(user)
);

INSERT
INTO $user_password_table (user, password)
VALUES
("user","password");
STRING;
$result = mysqli_multi_query($link, $query);

if($result == true) {
    echo '
    <script>
        alert("初始化成功");
    </script>';
}
else {
    echo '
    <script>
        alert("初始化失败，请再试一次");
    </script>';
}

echo '
<script>
    window.location.replace("../main.html");
</script>';
?>