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
                <a href="../personal_center_page/main_info?<?php echo $url_user_id ?>">
                    <span>个人中心</span>
                </a>
            </li>
            <li class="select_information">
                <a href="../select_page/select_student.php?<?php echo $url_user_id ?>">
                    <span>查询信息</span>
                </a>
            </li>
            <li class="update_information">
                <a href="../update_page/update_student.php?<?php echo $url_user_id ?>">
                    <span>更改信息</span>
                </a>
            </li>
            <li class="insert_information">
                <a href="../insert_page/insert_student.php?<?php echo $url_user_id ?>">
                    <span>添加信息</span>
                </a>
            </li>
            <li class="delete_information">
                <a href="../delete_page/delete_student.php?<?php echo $url_user_id ?>">
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
                        <li><a href="../personal_center_page/main_info?<?php echo $url_user_id ?>"><span>个人信息</span></a></li>
                        <li><a href="../personal_center_page/main_change_info?<?php echo $url_user_id ?>"><span>修改信息</span></a></li>
                    </ul>
                </div>
                <div class="left_select_information left_nav_li">
                    <span class="left_nav_title">查询信息</span>
                    <ul>
                        <li><a href="../select_page/select_student.php?<?php echo $url_user_id ?>"><span>查询学生</span></a></li>
                        <li><a href="../select_page/select_teacher.php?<?php echo $url_user_id ?>"><span>查询老师</span></a></li>
                        <li><a href="../select_page/select_team.php?<?php echo $url_user_id ?>"><span>查询团队</span></a></li>
                        <li><a href="../select_page/select_activity.php?<?php echo $url_user_id ?>"><span>查询活动</span></a></li>
                        <li><a href="../select_page/select_achievement.php?<?php echo $url_user_id ?>"><span>查询成果</span></a></li>
                        <li><a href="../select_page/select_student_team.php?<?php echo $url_user_id ?>"><span>查询组队</span></a></li>
                    </ul>
                </div>
                <div class="left_update_information left_nav_li">
                    <span class="left_nav_title">更改信息</span>
                    <ul>
                        <li><a href="../update_page/update_student.php?<?php echo $url_user_id ?>"><span>更改学生信息</span></a></li>
                        <li><a href="../update_page/update_teacher.php?<?php echo $url_user_id ?>"><span>更改老师信息</span></a></li>
                        <li><a href="../update_page/update_team.php?<?php echo $url_user_id ?>"><span>更改团队信息</span></a></li>
                        <li><a href="../update_page/update_activity.php?<?php echo $url_user_id ?>"><span>更改活动信息</span></a></li>
                        <li><a href="../update_page/update_achievement.php?<?php echo $url_user_id ?>"><span>更改成果信息</span></a></li>
                        <li><a href="../update_page/update_student_team.php?<?php echo $url_user_id ?>"><span>更改组队信息</span></a></li>
                    </ul>
                </div>
                <div class="left_insert_information left_nav_li">
                    <span class="left_nav_title">添加信息</span>
                    <ul>
                        <li><a href="../insert_page/insert_student.php?<?php echo $url_user_id ?>"><span>添加学生信息</span></a></li>
                        <li><a href="../insert_page/insert_teacher.php?<?php echo $url_user_id ?>"><span>添加老师信息</span></a></li>
                        <li><a href="../insert_page/insert_team.php?<?php echo $url_user_id ?>"><span>添加团队信息</span></a></li>
                        <li><a href="../insert_page/insert_activity.php?<?php echo $url_user_id ?>"><span>添加活动信息</span></a></li>
                        <li><a href="../insert_page/insert_achievement.php?<?php echo $url_user_id ?>"><span>添加成果信息</span></a></li>
                        <li><a href="../insert_page/insert_student_team.php?<?php echo $url_user_id ?>"><span>添加组队信息</span></a></li>
                    </ul>
                </div>
                <div class="left_delete_information left_nav_li">
                    <span class="left_nav_title">删除信息</span>
                    <ul>
                        <li><a href="../delete_page/delete_student.php?<?php echo $url_user_id ?>"><span>删除学生信息</span></a></li>
                        <li><a href="../delete_page/delete_teacher.php?<?php echo $url_user_id ?>"><span>删除老师信息</span></a></li>
                        <li><a href="../delete_page/delete_team.php?<?php echo $url_user_id ?>"><span>删除团队信息</span></a></li>
                        <li><a href="../delete_page/delete_activity.php?<?php echo $url_user_id ?>"><span>删除活动信息</span></a></li>
                        <li><a href="../delete_page/delete_achievement.php?<?php echo $url_user_id ?>"><span>删除成果信息</span></a></li>
                        <li><a href="../delete_page/delete_student_team.php?<?php echo $url_user_id ?>"><span>删除组队信息</span></a></li>
                    </ul>
                </div>
            </nav>
            <div class="main_info">
                <div class="main_info_title">
                    <div class="main_info_title_span">
                        <span>更改信息</span>
                    </div>
                </div>
                <div class="main_info_top_nav">
                    <ul class="clearfix">
                        <li><a href="../update_page/update_student.php?<?php echo $url_user_id ?>"><span>更改学生信息</span></a></li>
                        <li><a href="../update_page/update_teacher.php?<?php echo $url_user_id ?>"><span>更改老师信息</span></a></li>
                        <li><a href="../update_page/update_team.php?<?php echo $url_user_id ?>"><span>更改团队信息</span></a></li>
                        <li><a href="../update_page/update_activity.php?<?php echo $url_user_id ?>"><span>更改活动信息</span></a></li>
                        <li class="hightlight"><a href="../update_page/update_achievement.php?<?php echo $url_user_id ?>"><span>更改成果信息</span></a></li>
                        <li><a href="../update_page/update_student_team.php?<?php echo $url_user_id ?>"><span>更改组队信息</span></a></li>
                    </ul>
                </div>
                <div class="main_body clearfix">
                    <form action="<?php echo $_SERVER['PHP_SELF'] . '?' . urldecode($_SERVER['QUERY_STRING']); ?>" method="post">
                        <input type="text" name="team_id" id="team_id" placeholder="请输入需要更改的团队号">
                        <input type="text" name="activity_id" id="activity_id" placeholder="请输入需要更改的课外活动编号">
                        <input type="text" name="time" id="time" placeholder="请输入需要更改的完成时间">
                        <input type="text" name="teacher_id" id="teacher_id" placeholder="请输入需要更改的指导老师编号">
                        <input class="have_border_botom" type="text" name="academy" id="academy" placeholder="请输入需要更改的报送学院">
                        </br>
                        <input type="text" name="newteam_id" id="newteam_id" placeholder="请输入新团队号">
                        <input type="text" name="newactivity_id" id="newactivity_id" placeholder="请输入新课外活动编号">
                        <input type="text" name="newtime" id="newtime" placeholder="请输入新完成时间">
                        <input type="text" name="newteacher_id" id="newteacher_id" placeholder="请输入新指导老师编号">
                        <input type="text" name="newacademy" id="newacademy" placeholder="请输入新报送学院">
                        <input type="submit" name="submit" id="submit" value="提交">
                        <input type="reset" name="reset" id="reset">
                    </form>

                    <div class="main_body_info">
                        <?php
                        $team_id = get_team_id();
                        $activity_id = get_activity_id();
                        $time = get_input("time");
                        $teacher_id = get_teacher_id();
                        $academy = get_academy();
                        $newteam_id = get_input("newteam_id");
                        $newactivity_id = get_input("newactivity_id");
                        $newtime = get_input("newtime");
                        $newteacher_id = get_input("newteacher_id");
                        $newacademy = get_input("newacademy");

                        if ($team_id != '' || $activity_id != '' || $time != '' || $teacher_id != '' || $academy != '') {
                            $index = 0;
                            if ($team_id != '')  $index += 10000;
                            if ($activity_id != '')  $index += 1000;
                            if ($time != '')  $index += 100;
                            if ($teacher_id != '')  $index += 10;
                            if ($academy != '') $index += 1;

                            $error_info = '';
                            if ($index / 10000 >= 1) {
                                $error_info = $error_info . ',team_id=\'' . $team_id . '\'';
                                $index -= 10000;
                            }
                            if ($index / 1000 >= 1) {
                                $error_info = $error_info . ',activity_id=\'' . $activity_id . '\'';
                                $index -= 1000;
                            }
                            if ($index / 100 >= 1) {
                                $error_info = $error_info . ',time=\'' . $time . '\'';
                                $index -= 100;
                            }
                            if ($index / 10 >= 1) {
                                $error_info = $error_info . ',teacher_id=\'' . $teacher_id . '\'';
                                $index -= 10;
                            }
                            if ($index >= 1) {
                                $error_info = $error_info . ',academy=\'' . $academy . '\'';
                                $index = 0;
                            }
                            $error_info = substr($error_info, 1);
                            $error_info = '在' . $error_info . '的条件下查询不到数据';

                            $where_section = ($team_id == '' ? '' : (' AND team_id="' . $team_id . '"')) . ($activity_id == '' ? '' : (' AND activity_id="' . $activity_id . '"')) . ($time == '' ? '' : (' AND time="' . $time . '"')) . ($teacher_id == '' ? '' : (' AND teacher_id="' . $teacher_id . '"')) . ($academy == '' ? '' : (' AND academy="' . $academy . '"'));
                            $where_section = 'WHERE ' . substr($where_section, 5);
                            $query = 'SELECT * FROM ' . ACHIEVEMENT_TABLE . ' ' . $where_section;

                            $result = mysqli_query($link, $query);
                            $array = @mysqli_fetch_all($result);
                            $array_count = @count($array);

                            if ($array_count == 0) {
                                echo "<script>alert(\"{$error_info}\")</script>";
                            } else {
                                $set_section = ($newteam_id == '' ? '' : (', team_id="' . $newteam_id . '"')) . ($newactivity_id == '' ? '' : (', activity_id="' . $newactivity_id . '"')) . ($newtime == '' ? '' : (', time="' . $newtime . '"')) . ($newteacher_id == '' ? '' : (', teacher_id="' . $newteacher_id . '"')) . ($newacademy == '' ? '' : (', academy="' . $newacademy . '"'));
                                $set_section = 'SET ' . substr($set_section, 1);
                                $query = 'UPDATE ' . ACHIEVEMENT_TABLE . ' ' . $set_section . ' ' . $where_section . ';';
                                $result = mysqli_real_query($link, $query);
                                if ($result == true) {
                                    echo '<script>alert("更新成功");</script>';
                                } else {
                                    echo '<script>alert("更新失败，请重试");</script>';
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>