<?php

//获取前一个页面的地址
$main_url = $_SERVER['HTTP_REFERER'];
$url = $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
echo $url;
// if(substr($url , -1) != "?") {
//     $user_location = strpos($main_url, '=') + 1;

//     $end_location = strpos($main_url, '/') + 1;

//     echo '
//     <script>
//         window.location.replace("../html/main_info.html?' . $main_url[$user_location] . '+' . $main_url[$end_location] . '/end"); 
//     </script>
//     ';
// }
?>