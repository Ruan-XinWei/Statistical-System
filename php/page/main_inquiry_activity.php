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
                <a href="main_info?<?php echo $url_user_id ?>">
                    <span>个人中心</span>
                </a>
            </li>
            <li class="inquiry_information">
                <a href="javascript:;">
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
                    </ul>
                </div>
            </nav>
            <div class="main_info">
                <div class="main_info_title">
                    <div class="main_info_title_span">
                        <span>查询信息</span>
                    </div>
                </div>
                <div class="main_info_top_nav">
                    <ul class="clearfix">
                        <li><a href="javascript:;"><span>查询学生</span></a></li>
                        <li><a href="javascript:;"><span>查询老师</span></a></li>
                        <li><a href="javascript:;"><span>查询团队</span></a></li>
                        <li><a href="javascript:;"><span>查询活动</span></a></li>
                        <li><a href="javascript:;"><span>查询成果</span></a></li>
                    </ul>
                </div>
                <div class="main_body clearfix">
                    <!-- <table>
                        
                    </table> -->
                    <form action="main_inquiry_activity.php?<?php echo $url_user_id ?>" method="post">
                        <label for="age">请输入年龄</label>
                        <input type="text" name="age" id="age">
                        <input type="submit" value="提交">
                    </form>

                    <div class="main_body_info">
                        <?php
                        $age = get_age();
                        $result = select_id_student_use_age($link, $age);
                        $array_count = count($result);
                        if ($array_count == 0) {
                            echo '没有查询到结果';
                        }
                        for ($i = 0; $i < $array_count; ++$i) {
                            echo $result[$i][0] . '</br>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>