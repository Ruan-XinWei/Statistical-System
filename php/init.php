<?php
include_once "db-inc.php";

//连接MYSQL
$link = db_init_connect();

//检查数据库是否存在，如果存在则重建
$query = 'DROP DATABASE IF EXISTS ' . DATABASE;
mysqli_query($link, $query);
$query = 'CREATE DATABASE ' . DATABASE;
mysqli_query($link, $query);

//连接到指定数据库
mysqli_select_db($link, DATABASE);

//赋值表名
$user_password_table = STUDENT_ACCOUNT_TABLE;
$student_table = STUDENT_TABLE;
$teacher_table = TEACHER_TABLE;
$team_table = TEAM_TABLE;
$activity_table = ACTIVITY_TABLE;
$achievement_table = ACHIEVEMENT_TABLE;
$student_team_table = STUDENT_TEAM_TABLE;

$query = <<<STRING
CREATE TABLE $student_table 
( 
    `id` BIGINT NOT NULL , 
    `name` VARCHAR(20) NOT NULL , 
    `sex` CHAR(1) NOT NULL CHECK(sex IN ('男', '女')) , 
    `age` INT NOT NULL , 
    PRIMARY KEY (`id`)
)
ENGINE = InnoDB;

CREATE TABLE $user_password_table 
(
    `id` BIGINT NOT NULL , 
    `password` VARCHAR(30) NOT NULL DEFAULT 'password' ,
    PRIMARY KEY (`id`) ,
    FOREIGN KEY (`id`) REFERENCES $student_table(`id`)
)
ENGINE = InnoDB;

CREATE TABLE $teacher_table
( 
    `id` BIGINT NOT NULL , 
    `name` VARCHAR(20) NOT NULL , 
    `sex` CHAR(1) NOT NULL CHECK(sex IN ('男', '女')) , 
    `age` INT NOT NULL , 
    PRIMARY KEY (`id`)
)
ENGINE = InnoDB;

CREATE TABLE $team_table 
( 
    `id` BIGINT NOT NULL , 
    `name` VARCHAR(30) NOT NULL , 
    `num` INT NOT NULL , 
    PRIMARY KEY (`id`)
) 
ENGINE = InnoDB;

CREATE TABLE $activity_table 
( 
    `id` BIGINT NOT NULL , 
    `name` VARCHAR(30) NOT NULL , 
    PRIMARY KEY (`id`)
) 
ENGINE = InnoDB;

CREATE TABLE $achievement_table 
( 
    `team_id` BIGINT NOT NULL , 
    `activity_id` BIGINT NOT NULL , 
    `time` DATE NOT NULL , 
    `teacher_id` BIGINT NOT NULL , 
    `academy` VARCHAR(30) NOT NULL , 
    PRIMARY KEY (`team_id`, `activity_id`) ,
    FOREIGN KEY (`team_id`) REFERENCES $team_table(`id`) ,
    FOREIGN KEY (`activity_id`) REFERENCES $activity_table(`id`) ,
    FOREIGN KEY (`teacher_id`) REFERENCES $teacher_table(`id`)
) 
ENGINE = InnoDB;

CREATE TABLE $student_team_table 
( 
    `student_id` BIGINT NOT NULL , 
    `team_id` BIGINT NOT NULL , 
    PRIMARY KEY (`student_id`, `team_id`) ,
    FOREIGN KEY (`student_id`) REFERENCES $student_table(`id`) ,
    FOREIGN KEY (`team_id`) REFERENCES $team_table(`id`)
) 
ENGINE = InnoDB;
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
    window.location.replace("../index.html");
</script>';
?>