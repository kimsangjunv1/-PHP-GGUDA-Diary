<?php
    include "../../connect/connect.php";
    include "../../connect/session.php";
    include "../../connect/sessionCheck.php";

 
    // 파일 정보
    $myMemberID = $_SESSION['myMemberID'];
    $youImageFile = $_FILES['changFile'];
    $youImageSize = $_FILES['changFile']['size'];
    $youImageType = $_FILES['changFile']['type'];
    $youImageName = $_FILES['changFile']['name'];
    $youImageTmp = $_FILES['changFile']['tmp_name'];

    echo "<pre>";
    var_dump($youImageFile);
    echo "</pre>";

    if($youImageType){
        $fileTypeExtension = explode("/", $youImageType);
        $fileType = $fileTypeExtension[0];      //image
        $fileExtension = $fileTypeExtension[1]; //png

        //이미지 타입 확인
        if($fileType == "image"){
            if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
                $youImageDir = "../../assets/img/blog/";
                $youImageName = "Img_".time().rand(1,99999).".".$fileExtension;
                // echo "이미지 파일이 맞네요!";
                // $sql = "INSERT INTO myMember(youImageFile, youImageSize) VALUES('$youImageName', '$youImageSize')";
                $sql = "SELECT myMemberID FROM myMember WHERE '$myMemberID'";
                // var_dump($sql);
            } else {
                echo "<script>alert('지원하는 이미지 파일이 아닙니다.'); history.back(1)</script>";
            }
        }
    } else {
        echo "이미지 파일이 첨부하지 않았습니다.";
        // echo "<script>alert('프로필 사진 변경을 취소하셨습니다.'); history.back(1)</script>";
    }
    //이미지 사이즈 확인
    if($youImageSize > 1000000){
        echo "<script>alert('이미지 용량이 1메가를 초과했습니다.'); history.back(1)</script>";
        exit;
    }
    // $result = $connect -> query($sql);
    // $sql = "UPDATE myMember SET youImageFile = '" . $youImageName . "' WHERE youImageSize = '" . $youImageSize . "'";

    $sql = "UPDATE myMember SET youImageFile = '".$youImageName."', youImageSize = '".$youImageSize."' WHERE myMemberID = '".$myMemberID."'";
    var_dump($sql);
    $result = $connect -> query($sql);
    if($youImageSize >= 1){
        $result = move_uploaded_file($youImageTmp, $youImageDir.$youImageName);
        echo "<script>alert('프로필 사진 변경이 완료되었습니다.'); history.back(1)</script>";
    }
    // var_dump($youImageTmp,  $youImageDir.$youImageName);
    // var_dump($result);
    // if($result){
    //     echo "<script>alert('프로필 사진 변경이 완료되었습니다.'); history.back(1)</script>";
    // } else {
    //     echo "<p class='loginComple-word'> 에러 - ;3 </p>";
    // }
    
?>