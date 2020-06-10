<?php
namespace Modules\Jiny;
use PDO;

//
// 클래스 선언
class Hello
{
    // 상수선언
    const MYNAME = "jiny";

    // 클래스의 함수
    // 메소드 함.
    public function main()
    {
        // connection 객체
        $db = $this->db->connect();
        $db2 = $this->db->conn();

        $query = "SELECT title FROM `db2020`.`board` where id=:id";
        $stmt = $db2->prepare($query);
        $id = 1;
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        /*
        $this->db->setQuery($query);
        $data = [
            'id' => 1
        ];
        $this->db->run($data); // mysql db로 쿼리가 전송됨.
        // PDOstatement값 저장.
        */
        
        // PDO::FETCH_NUM : 숫자 인덱스 배열 반환
        // PDO::FETCH_ASSOC : 컬럼명이 키인 연관배열 반환
        // PDO::FETCH_BOTH : 위 두가지 모두
        // PDO::FETCH_OBJ : 컬럼명이 프로퍼티인 인명 객체 반환
        /*
        while ($row = $this->db->fetchObj()) {
            $rows []= $row;
        }
        */
        // $rows = $this->db->fetchObjAll();
        $rows = $stmt->fetch();
        echo "<pre>";
        print_r($rows);
        echo "</pre>";

        /*
        $select = $this->db->select("board"); // select 객체 생성(메소드, 팩토리)
        $rows = $select->runObjAll();
        
        echo "<pre>";
        print_r($rows);
        echo "</pre>";

        // 데이터목록
        echo "<table border=1>";
        if ($rows) {
            // 데이터가 있으면 이중반복문 실행
            foreach($rows as $row) {
                echo "<tr>";
                foreach($row as $key => $value) {
                    // echo $key. "=". $value. "\t";
                    echo "<td>".$value."</td>";
                }
                echo "</tr>";
            }
        } else {
            // 단순 메시지
            echo "데이터목록이 없습니다.";
        }
        echo "</table>";
        */
    }

    // 생성자
    private $db;
    public function __construct()
    {
        // echo __CLASS__ . "객체를 생성합니다. <br>";
        // 데이터베이스 설정값
        $dbinfo = include("../dbinfo.php");
        $this->db = new \Jiny\Mysql\Connection($dbinfo); // 라이브러리, 컴포저
        // 접속정보 설정
        $this->db->connect(); //PDO 객체를 연결.

        $this->main();
    }
}
