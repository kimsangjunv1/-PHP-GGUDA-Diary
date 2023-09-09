<?php
    include "../../connect/connect.php";
    include "../../connect/session.php";
    include "../../connect/sessionCheck.php";

 
    // 파일 정보
    $myMemberID = $_SESSION['myMemberID'];
    $youBirth = $_POST['youBirthChange'];

    var_dump($youBirth);

    if(!is_null( $youBirth )){
        $sql = "UPDATE myMember SET youBirth = '".$youBirth."' WHERE myMemberID = '".$myMemberID."'";
        var_dump($sql);
        $result = $connect -> query($sql);
        var_dump($result);
        echo "<script>alert('생년월일 변경을 완료했습니다.'); history.back(1)</script>";
    }else {
        echo "<script>alert('생년월일 변경을 취소합니다.'); history.back(1)</script>";
        // echo "<script>alert('프로필 사진 변경을 취소하셨습니다.'); history.back(1)</script>";
    }
    
?>
