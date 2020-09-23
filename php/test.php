<?php
$id = '21312';
$name = '阮新伟';
$sex = '男';
$age = '20';
$index = 0;
if ($id != '')  $index += 1000;
if ($name != '')  $index += 100;
if ($sex != '')  $index += 10;
if ($age != '')  $index += 1;
$error_info = '';
if ($index / 1000 >= 1) {
    $error_info = $error_info . ',id="' . $id . '"';
    $index -= 1000;
}
if ($index / 100 >= 1) {
    $error_info = $error_info . ',name="' . $name . '"';
    $index -= 100;
}
if ($index / 10 >= 1) {
    $error_info = $error_info . ',sex="' . $sex . '"';
    $index -= 10;
}
if ($index >= 1) {
    $error_info = $error_info . ',age="' . $age . '"';
    $index = 0;
}
$error_info = substr($error_info, 1);
$error_info = '在' . $error_info . '的条件下查询不到数据';

echo "alert(\"{$error_info}\")";
?>