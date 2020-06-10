<?php
// 매개변수 
function greeting($msg, $hello="hi") // 매개변수
{
    echo $hello . " " . $msg . ".";
    // 문자열 결합 + , 1 + 1 = 2 / 1 + '1' = 11
}

// 선언->호출
// 1
greeting("대림이", "안녕"); // 인자값

// 2
greeting("안녕", "대림이"); // 인자값


