<?php
$data = [
    "name" =>"大泉",
    "gender" =>"男性",
    "age" =>"46"
];
$data['children'] = ["太郎", "次郎", "三郎"];

var_dump($data);

print($data['children']);
?>