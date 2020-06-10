<?php
// 헬퍼 파일
namespace jiny;
if (!function_exists("template")) {
    function template($file, $vars=[]) :string
    {
        extract($vars); // 키명으로 변수화
        ob_start(); // 출력 버퍼링
        include($file);
        return ob_get_clean(); // 버퍼를 반환합니다.
    }
}