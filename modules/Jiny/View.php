<?php

namespace Modules\Jiny;

class View
{
    private $_board;
    public function __construct($board)
    {
        // echo __CLASS__;
        $this->_board = $board;
    }

    private $_path="../Resource/view/";

    public function listView($rows)
    {
        // $body = file_get_contents($this->_path."list.html");
        // $body = str_replace("{{datalist}}", $table, $body); // 치환

        // html 템플릿, 내부에 php 코드가 동작하게금
        $body = \jiny\template($this->_path."list.html", ['rows'=>$rows]);
        
        return $body;
    }

    public function newView()
    {
        $body = file_get_contents($this->_path."new.html");
        return $body;
    }

    public function editView()
    {
        $body = file_get_contents($this->_path."edit.html");
        return $body;
    }

    public function deleteView()
    {
        $body = file_get_contents($this->_path."delete.html");
        return $body;
    }
}