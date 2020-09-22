<?php
include_once "db-inc.php";
$link = db_connect();
function unique_rand($min, $max, $num)
{
    $count = 0;
    $return = array();
    while ($count < $num) {
        $return[] = mt_rand($min, $max);
        $return = array_flip(array_flip($return));
        $count = count($return);
    }
    //打乱数组，重新赋予数组新的下标
    shuffle($return);
    return $return;
}

for($i = 1000; $i<1049; $i++) {
    $num = select_num_team_use_id($link, $i);
    $student_id = unique_rand(10000001, 10000090, $num);
    // echo '有'.$num.'人'.'</br>';
    for($j = 0; $j < $num; ++$j) {
        $STR = <<<STRING
        ("$student_id[$j]", "$i"),
        STRING;
        echo $STR.'</br>';
    }
}
?>