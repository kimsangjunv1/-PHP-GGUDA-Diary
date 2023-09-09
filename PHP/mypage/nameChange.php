<?php
    include "../../connect/connect.php";
    include "../../connect/session.php";
    include "../../connect/sessionCheck.php";

 
    // 파일 정보
    $myMemberID = $_SESSION['myMemberID'];
    $youName = $_POST['youNameChange'];

    var_dump($youBirth);

    if(!is_null( $youName )){
        $sql = "UPDATE myMember SET youName = '".$youName."' WHERE myMemberID = '".$myMemberID."'";
        var_dump($sql);
        $result = $connect -> query($sql);
        var_dump($result);
        echo "<script>alert('이름 변경을 완료했습니다.'); history.back(1)</script>";
    }else {
        echo "<script>alert('이름 변경을 취소합니다.'); history.back(1)</script>";
        // echo "<script>alert('프로필 사진 변경을 취소하셨습니다.'); history.back(1)</script>";
    }
    
?>
