<?php
    $host = "localhost";
    $user = "vvv0032";
    $pass = "Hhd3712493!";
    $db = "vvv0032";

    $connect = new mysqli($host, $user, $pass, $db);    
    $connect -> set_charset("utf8");

    // if (mysqli_connect_errno($connect)) {

    //     echo "데이터베이스 연결 실패: " . mysqli_connect_error();
        
    //     } else {
        
    //     echo "데이터베이스 연결 성공";
        
    //     }
        
?>
