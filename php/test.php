<?php
include_once "db-inc.php";
$id = '21312';
$name = '阮新伟';
$sex = '男';
$age = '20';

if ($id != '' && $name != '' && $sex != '' && $age != '') {
$values_section = <<<STRING
("$id", "$name", "$sex", "$age");
STRING;
    $query = 'INSERT INTO ' . STUDENT_TABLE . '(id, name, sex, age) VALUES ' . $values_section;
echo $query;
}
?>