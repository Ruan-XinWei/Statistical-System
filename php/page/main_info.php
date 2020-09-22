<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>学生课外活动成果统计系统</title>
    <link rel="stylesheet" href="../../style/reset.css">
    <link rel="stylesheet" href="../../style/main_info.css">
    <script src="../../script/getUrlParam.js"></script>
    <script src="../../script/myFunction.js"></script>
    <script src="../../script/main_info.js"></script>
    <?php
    include_once "../db-inc.php";
    $link = db_connect();
    $url_user_id = geturl_string();
    ?>
</head>

<body>
    <header class="header">
        <div class="header_main clearfix">
            <div class="img">
                <a href="javascript:;">
                    <img src="../../img/wust_logo(no background).jpg" alt="wust_logo">
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
                <a href="">
                    <span>个人中心</span>
                </a>
            </li>
            <li class="inquiry_information">
                <a href="main_inquiry_activity?<?php echo $url_user_id ?>">
                    <span>查询信息</span>
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
                        <li><a href="javascript:;"><span>个人信息</span></a></li>
                        <li><a href="main_change_info?<?php echo $url_user_id ?>"><span>修改信息</span></a></li>
                    </ul>
                </div>
                <div class="left_inquiry_information left_nav_li">
                    <span class="left_nav_title">查询信息</span>
                    <ul>
                        <li><a href="main_inquiry_activity?<?php echo $url_user_id ?>"><span>查询活动</span></a></li>
                        <li><a href="javascript:;"><span>查询成果</span></a></li>
                    </ul>
                </div>
            </nav>
            <div class="main_info">
                <div class="main_info_title">
                    <div class="main_info_title_span">
                        <span>个人中心</span>
                    </div>
                </div>
                <div class="main_info_top_nav">
                    <ul class="clearfix">
                        <li><a href="javascript:;"><span>个人信息</span></a></li>
                        <li><a href="main_change_info?<?php echo $url_user_id ?>"><span>修改信息</span></a></li>
                    </ul>
                </div>
                <div class="main_body clearfix">
                    <table>
                        <tr>
                            <td>姓名：</td>
                            <td>
                                <?php
                                $start = strpos($url_user_id, "user=") + 5;
                                $end = strpos($url_user_id, "&id=");
                                $name = substr($url_user_id, $start, $end - $start);
                                echo $name;
                                ?>
                            </td>
                            <td>学号：</td>
                            <td>
                                <?php
                                $start = strpos($url_user_id, "id=") + 3;
                                $id = substr($url_user_id, $start);
                                echo $id;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>性别：</td>
                            <td>
                                <?php echo select_sex_student_use_id($link, $id); ?>
                            </td>
                            <td>年龄：</td>
                            <td>
                                <?php echo select_age_student_use_id($link, $id); ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>

</html>