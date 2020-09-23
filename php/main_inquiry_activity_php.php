<?php
include_once "db-inc.php";

$link = db_connect();
$url_user_id = geturl_string();

$GLOBALS['age'] = get_age();

$array_count = 0;
if($age != "") {
    $result = select_id_student_use_age($link, $age);
    $array_count = count($result, 0);
}

echo '
    <script>
        window.location.replace("page/main_inquiry_activity.php?' . $url_user_id . '"); 
    </script>';
?>