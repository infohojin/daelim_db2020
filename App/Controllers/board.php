<?php

namespace App\Controllers;

class Board
{
    public $_view;
    public function __construct()
    {
        $uri = trim($_SERVER['REQUEST_URI'],"/");
        $uris = \explode("/",$uri);
       
        $this->_view = new \Modules\Jiny\View($this);
        
        $method = $uris[1];
        if(isset($uris[1])) {
            if (method_exists($this, $method)) {
                $this->$method();
            } else {
                echo "오류] 존재하지 않는 메서드(함수)를 호출 했습니다.";
            }
        } else {
            $method = "list";
            $this->$method();
        }


    }

    public function list()
    {
        // echo "계시판 목록입니다.";
        // 데이터베이스 설정값
        $dbinfo = \jiny\dbinfo();
        $db = new \Jiny\Mysql\Connection($dbinfo);

        // select 객체 얻기
        $dataObj = $db->select("members4");
        if ($rows = $dataObj->all()) {
        } else {
            $rows = "데이터목록이 없습니다.";
        }

        $body = $this->_view->listView($rows);
        echo $body;
    }

    public function new()
    {
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "DB에 데이터를 삽입합니다.";
            $dbinfo = \jiny\dbinfo();
            $db = new \Jiny\Mysql\Connection($dbinfo);

            $data = [
                'firstname' => $_POST['firstname'] // $_GET
            ];
            
            $insert = $db->insert("members4", $data);
            if ($id = $insert->save()) {
                echo "데이터 삽입 성공 = ".$id;
            } else {
                echo "데이터 삽입 실패";
            }

            // post redirect get pattern
            header("HTTP/1.1 301 Moved Permanently");
            header("location:"."/board");

        } else {
            // GET
            // echo "데이터 삽입";
            $body = $this->_view->newView();
            echo $body;
        }        
    }

    public function edit()
    {
        // echo "데이터 수정";
        $body = $this->_view->editView();
        echo $body;
    }

    public function delete()
    {
        // echo "데이터 삭제";
        $body = $this->_view->deleteView();
        echo $body;
    }
}