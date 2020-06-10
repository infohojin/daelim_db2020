<?php

$args = [
    'hello' => "안녕",
    'msg' => "대림이"
];
// 매개변수 
function greeting($args) // 매개변수
{
    extract($args); // 로컬변수 분해
    echo $hello . " " . $msg . ".";
}

// 선언->호출
// 1
greeting($args); // 인자값
