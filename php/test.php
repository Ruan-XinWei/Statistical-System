<?php
include_once "db-inc.php";
$id = '21312';
$name = '阮新伟';
$sex = '男';
$age = '20';

$newid = '123';
$newname = '阮';
$newsex = '男';
$newage = '200';

$where_section = ($id == '' ? '' : (' AND id="' . $id . '"')) . ($name == '' ? '' : (' AND name="' . $name . '"')) . ($sex == '' ? '' : (' AND sex="' . $sex . '"')) . ($age == '' ? '' : ' AND age="' . $age . '"');
$where_section = 'WHERE ' . substr($where_section, 5);

$set_section = ($newid == '' ? '' : (',id="' . $newid . '"')) . ($newname == '' ? '' : (', name="' . $newname . '"')) . ($newsex == '' ? '' : (', sex="' . $newsex . '"')) . ($newage == '' ? '' : ', age="' . $newage . '"');
$set_section = 'SET ' . substr($set_section, 1);
$query = 'UPDATE ' . STUDENT_TABLE . ' ' . $set_section . ' ' . $where_section.';';
echo $query;
?>