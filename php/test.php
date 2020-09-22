<?php
$array[] = "王生安";
$array[] = "李鑫灏";
$array[] = "t";
$array[] = "薛佛世";
$array[] = "t";
$array[] = "蔡壮保";
$array[] = "t";
$array[] = "钱勤堃";
$array[] = "t";
$array[] = "潘恩依";
$array[] = "t";
$array[] = "陈国柏";
$array[] = "t";
$array[] = "魏皑虎";
$array[] = "t";
$array[] = "周卓浩";
$array[] = "t";
$array[] = "汤辟邦";
$array[] = "t";
$array[] = "张顺谷";
$array[] = "t";
$array[] = "张悌斯";
$array[] = "t";
$array[] = "张灶冲";
$array[] = "t";
$array[] = "易江维";
$array[] = "t";
$array[] = "孙来笙";
$array[] = "t";
$array[] = "饶展林";
$array[] = "t";
$array[] = "岳列洋";
$array[] = "t";
$array[] = "时党舒";
$array[] = "t";
$array[] = "周迟蒲";
$array[] = "t";
$array[] = "廉梦容";
$array[] = "t";
$array[] = "张淮森";
$array[] = "t";
$array[] = "夏劲釜";
$array[] = "t";
$array[] = "王好隐";
$array[] = "t";
$array[] = "刘昼星";
$array[] = "t";
$array[] = "池荣弈";
$array[] = "t";
$array[] = "邹包幼";
$array[] = "t";
$array[] = "王施峪";
$array[] = "t";
$array[] = "武慎萌";
$array[] = "t";
$array[] = "范千皋";
$array[] = "t";
$array[] = "潘佩焱";
$array[] = "t";
$array[] = "周逸依";
$array[] = "t";
$array[] = "齐寒昇";
$array[] = "t";
$array[] = "邱栾树";
$array[] = "t";
$array[] = "卢钦钧";
$array[] = "t";
$array[] = "文壮翔";
$array[] = "t";
$array[] = "蔡沐壮";
$array[] = "t";
$array[] = "唐盎正";
$array[] = "t";
$array[] = "王腾振";
$array[] = "t";
$array[] = "蔡容富";
$array[] = "t";
$array[] = "宁雨御";
$array[] = "t";
$array[] = "朱付流";
$array[] = "t";
$array[] = "陆丛枫";
$array[] = "t";
$array[] = "汤丞昱";
$array[] = "t";
$array[] = "萧百徽";
$array[] = "t";
$array[] = "田稻善";
$array[] = "t";
$array[] = "莫立恩";
$array[] = "t";
$array[] = "戚渊苏";
$array[] = "t";
$array[] = "郭磊留";
$array[] = "t";
$array[] = "邱靖祈";
$array[] = "t";
$array[] = "刘鲜发";
$array[] = "t";
$array[] = "李彩早";
$array[] = "t";
$array[] = "卓互知";
$array[] = "t";
$array[] = "岳繁粟";
$array[] = "t";
$array[] = "莫两敬";
$array[] = "t";
$array[] = "贺易";
$array[] = "t";
$array[] = "t";
$array[] = "岑贝澄";
$array[] = "t";
$array[] = "陶臣杜";
$array[] = "t";
$array[] = "卫惇琰";
$array[] = "t";
$array[] = "王赫颢";
$array[] = "t";
$array[] = "何刚名";
$array[] = "t";
$array[] = "梁澄静";
$array[] = "t";
$array[] = "卢全煦";
$array[] = "t";
$array[] = "严席华";
$array[] = "t";
$array[] = "张顺廉";
$array[] = "t";
$array[] = "欧贡界";
$array[] = "t";
$array[] = "汤始青";
$array[] = "t";
$array[] = "张鸿鹤";
$array[] = "t";
$array[] = "车亚忠";
$array[] = "t";
$array[] = "龙璨禄";
$array[] = "t";
$array[] = "柯纤翊";
$array[] = "t";
$array[] = "池慕营";
$array[] = "t";
$array[] = "吴登菘";
$array[] = "t";
$array[] = "齐奋厦";
$array[] = "t";
$array[] = "夏莱冶";
$array[] = "t";
$array[] = "夏吏克";
$array[] = "t";
$array[] = "殷蒙共";
$array[] = "t";
$array[] = "齐聪纪";
$array[] = "t";
$array[] = "金图康";
$array[] = "t";
$array[] = "秦尝乐";
$array[] = "t";
$array[] = "丘存心";
$array[] = "t";
$array[] = "俞灶迟";
$array[] = "t";
$array[] = "元感棋";
$array[] = "t";
$array[] = "陆示笙";
$array[] = "t";
$array[] = "简胜琰";
$array[] = "t";
$array[] = "云介融";
$array[] = "t";
$array[] = "梁夜翊";
$array[] = "t";
$array[] = "成昀澄";
$array[] = "t";
$array[] = "卞然倌";
$array[] = "t";
$array[] = "林静育";
$array[] = "t";
$array[] = "王成文";

// $id = 10000000;
// for($i = 0; $i < 179; ++$i) {
//     if($array[$i] == "t") continue;
//     $id++;
//     $age = rand(17, 30);
//     $sex_bool = rand(0, 1);
//     $sex = '男';
//     if($sex_bool == 0) {
//         $sex = '女';
//     }
//     $STR = <<<STRING
//     ("$id","$array[$i]","$sex","$age"),
//     STRING;
//     echo $STR.'</br>';
// }

for($i = 1; $i <= 90; ++$i) {
    $id = 10000000+$i;
    $STR = <<<STRING
    ("$id","password"),
    STRING;
    echo $STR . '</br>';
}

// include_once "config.php";
// $teacher_table = TEACHER_TABLE;
// $STR = <<<STRING
// INSERT
// INTO $teacher_table(id, name, sex, age)
// VALUES
// ("20000000","张明活","男","30"),
// ("20000001","张京楚","男","31"),
// ("20000002","张意昌","男","32"),
// ("20000003","张瑞政","男","33"),
// ("20000004","张太展","男","34"),
// ("20000005","张原凡","男","35"),
// ("20000006","张彬华","男","36"),
// ("20000007","张鼐望","男","37"),
// ("20000008","张鼐奉","男","38"),
// ("20000009","张鹤镛","男","39"),
// ("20000010","张鲸念","男","40"),
// ("20000011","张鲸听","男","41"),
// ("20000012","张鲸双","男","42"),
// ("20000013","张鲁欲","男","43"),
// ("20000014","张鲁大","男","44"),
// ("20000015","张鲁之","男","45"),
// ("20000016","张骞通","男","46"),
// ("20000017","张骞西","男","47"),
// ("20000018","张骞至","男","48"),
// ("20000019","张骞复","男","49"),
// ("20000020","张首春","男","50"),
// ("20000021","张顺魂","男","51"),
// ("20000022","张顺引","男","52"),
// ("20000023","张顺大","男","53"),
// ("20000024","张镇芳","男","54"),
// ("20000025","张钟俊","男","55"),
// ("20000026","张金称","男","56"),
// ("20000027","张金牙","男","57");
// STRING;

// echo $STR;