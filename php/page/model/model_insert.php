<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>学生课外活动成果统计系统</title>
    <link rel="stylesheet" href="../../../style/reset.css">
    <link rel="stylesheet" href="../../../style/main_info.css">
    <script src="../../../script/getUrlParam.js"></script>
    <script src="../../../script/myFunction.js"></script>
    <script src="../../../script/main_info.js"></script>
    <?php
    include_once "../../db-inc.php";
    $link = db_connect();
    $url_user_id = geturl_string();
    ?>
</head>

<body>
    <header class="header">
        <div class="header_main clearfix">
            <div class="img">
                <a href="javascript:;">
                    <img src="../../../img/wust_logo(no background).jpg" alt="wust_logo">
                </a>
            </div>
            <div class="info">
                <div class="div_name">
                    <span>姓名：</span>
                    <span id="name"></span>
                </div>
                <div class="div_id">
                    <span>学号：</span>
                    <span id="id"></span>
                </div>
            </div>
        </div>
    </header>
    <div class="title">
        <div class="title_main">
            <span>学生课外活动成果统计系统</span>
        </div>
    </div>
    <div class="top_list">
        <ul class="top_list_main clearfix">
            <li class="personal_center">
                <a href="main_info?<?php echo $url_user_id ?>">
                    <span>个人中心</span>
                </a>
            </li>
            <li class="inquiry_information">
                <a href="javascript:;">
                    <span>查询信息</span>
                </a>
            </li>
            <li class="update_information">
                <a href="javascript:;">
                    <span>更改信息</span>
                </a>
            </li>
            <li class="insert_information">
                <a href="javascript:;">
                    <span>添加信息</span>
                </a>
            </li>
            <li class="delete_information">
                <a href="javascript:;">
                    <span>删除信息</span>
                </a>
            </li>
        </ul>
    </div>
    <main class="main">
        <div class="main_main clearfix">
            <nav class="left_nav">
                <div class="left_personal_center left_nav_li">
                    <span class="left_nav_title">个人中心</span>
                    <ul>
                        <li><a href="main_info?<?php echo $url_user_id ?>"><span>个人信息</span></a></li>
                        <li><a href="main_change_info?<?php echo $url_user_id ?>"><span>修改信息</span></a></li>
                    </ul>
                </div>
                <div class="left_inquiry_information left_nav_li">
                    <span class="left_nav_title">查询信息</span>
                    <ul>
                        <li><a href="javascript:;"><span>查询学生</span></a></li>
                        <li><a href="javascript:;"><span>查询老师</span></a></li>
                        <li><a href="javascript:;"><span>查询团队</span></a></li>
                        <li><a href="javascript:;"><span>查询活动</span></a></li>
                        <li><a href="javascript:;"><span>查询成果</span></a></li>
                        <li><a href="javascript:;"><span>查询组队</span></a></li>
                    </ul>
                </div>
                <div class="left_update_information left_nav_li">
                    <span class="left_nav_title">更改信息</span>
                    <ul>
                        <li><a href="javascript:;"><span>更改学生信息</span></a></li>
                        <li><a href="javascript:;"><span>更改老师信息</span></a></li>
                        <li><a href="javascript:;"><span>更改团队信息</span></a></li>
                        <li><a href="javascript:;"><span>更改活动信息</span></a></li>
                        <li><a href="javascript:;"><span>更改成果信息</span></a></li>
                        <li><a href="javascript:;"><span>更改组队信息</span></a></li>
                    </ul>
                </div>
                <div class="left_insert_information left_nav_li">
                    <span class="left_nav_title">添加信息</span>
                    <ul>
                        <li><a href="javascript:;"><span>添加学生信息</span></a></li>
                        <li><a href="javascript:;"><span>添加老师信息</span></a></li>
                        <li><a href="javascript:;"><span>添加团队信息</span></a></li>
                        <li><a href="javascript:;"><span>添加活动信息</span></a></li>
                        <li><a href="javascript:;"><span>添加成果信息</span></a></li>
                        <li><a href="javascript:;"><span>添加组队信息</span></a></li>
                    </ul>
                </div>
                <div class="left_delete_information left_nav_li">
                    <span class="left_nav_title">删除信息</span>
                    <ul>
                        <li><a href="javascript:;"><span>删除学生信息</span></a></li>
                        <li><a href="javascript:;"><span>删除老师信息</span></a></li>
                        <li><a href="javascript:;"><span>删除团队信息</span></a></li>
                        <li><a href="javascript:;"><span>删除活动信息</span></a></li>
                        <li><a href="javascript:;"><span>删除成果信息</span></a></li>
                        <li><a href="javascript:;"><span>删除组队信息</span></a></li>
                    </ul>
                </div>
            </nav>
            <div class="main_info">
                <div class="main_info_title">
                    <div class="main_info_title_span">
                        <span>添加信息</span>
                    </div>
                </div>
                <div class="main_info_top_nav">
                    <ul class="clearfix">
                        <li><a href="javascript:;"><span>添加学生信息</span></a></li>
                        <li><a href="javascript:;"><span>添加老师信息</span></a></li>
                        <li><a href="javascript:;"><span>添加团队信息</span></a></li>
                        <li><a href="javascript:;"><span>添加活动信息</span></a></li>
                        <li><a href="javascript:;"><span>添加成果信息</span></a></li>
                        <li><a href="javascript:;"><span>添加组队信息</span></a></li>
                    </ul>
                </div>
                <div class="main_body clearfix">
                    <form action="" method="post">
                    </form>

                    <div class="main_body_info">
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>