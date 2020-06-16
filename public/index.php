<?php
include "../vendor/autoload.php";

//$obj =  new \App\Controllers\Board;
if (!function_exists("controllerName")) {
    function controllerName()
    {
        $uri = trim($_SERVER['REQUEST_URI'],"/");
        $uris = \explode("/",$uri);
        if (isset($uris[0])) return $uris[0];
        else {
            echo "컨트롤러 이름이 없습니다.";
            exit;
        }
    }
}

//클래스의 객체를 생성
if(controllerName()) {
    $controller = "\App\Controllers\\".controllerName();
    $obj = new $controller; // 컨트롤러
} else {
    echo "컨트롤러를 선택해 주세요.";
}


