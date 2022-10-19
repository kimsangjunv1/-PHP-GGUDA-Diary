<?php
    include "../../connect/connect.php";

    //변수 설정
    $type = $_POST['type'];

    //쿼리문
    // $sql = "SELECT youEmail, youNickName FROM myAdminMember WHERE youEmail = '{$youEmail}'";
    // $sql = "SELECT youEmail, youNickName FROM myAdminMember WHERE youNickName = '{$youNickName}'";

    $sql = "SELECT youEmail FROM myMember ";

    if( $type == "emailCheck"){
        $youEmail = $connect -> real_escape_string(trim($_POST['youEmail']));
        $sql .= "WHERE youEmail = '{$youEmail}'";
    }

    $result = $connect -> query($sql);
    $jsonResult = "bad";

    if( $result -> num_rows == 0 ){
        $jsonResult = "good";
    }

    echo json_encode(array("result" => $jsonResult));
?>