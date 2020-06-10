<?php

$args = [
    'hello' => "안녕",
    'msg' => "대림이"
];
// 매개변수 
function greeting($args) // 매개변수
{
    echo $args['hello'] . " " . $args['msg'] . ".";
}

// 선언->호출
// 1
greeting($args); // 인자값

$args2 = [
    'msg' => "대림이",
    'hello' => "안녕",
    'num' => "123456"
];
greeting($args); // 인자값