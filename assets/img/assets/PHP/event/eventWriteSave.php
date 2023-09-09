<?php 
    include "../../connect/connect.php";
    include "../../connect/session.php";
    include "../../connect/sessionCheck.php";

    
    $myMemberID = $_SESSION['myMemberID'];
    $eventTitle = $_POST['eventTitle'];
    $eventSection = $_POST['eventSection'];
    $eventContents = nl2br($_POST['eventContents']);
    $eventImgFile = $_FILES['eventFile'];
    $eventImgSize = $_FILES['eventFile']['size'];
    $eventImgType = $_FILES['eventFile']['type'];
    $eventImgName = $_FILES['eventFile']['name'];
    $eventImgTmp = $_FILES['eventFile']['tmp_name'];
    $eventView = 0;
    $regTime = time();

    // $boardTitle = $connect -> real_escape_string($boardTitle);
    // $boardSection = $connect -> real_escape_string($boardSection);
    // $boardContents = $connect -> real_escape_string($boardContents);

    echo "<pre>";
    var_dump($eventImgFile);
    echo "</pre>";

    // $sql = "INSERT INTO myBoard(myMemberID, boardTitle, boardSection, boardContents, boardImgFile, boardImgSize, boardView, regTime) VALUES('$myMemberID', '$boardTitle', '$boardSection', '$boardContents', '$boardImgFile', '$boardImgSize', '$boardView', '$regTime')";Img_default.jpg
    
    // var_dump($result);

    // 이미지 파일명 확인
    if($eventImgFile){
        $fileTypeExtension = explode("/", $eventImgType);
        $fileType = $fileTypeExtension[0];      //image
        $fileExtension = $fileTypeExtension[1]; //png
        //이미지 타입 확인
        if($fileType == "image"){
            if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
                $eventImgDir = "../../assets/img/blog_event/";
                $eventImgName = "Img_".time().rand(1,99999)."."."{$fileExtension}";
                // echo "이미지 파일이 맞네요!";
                $sql = "INSERT INTO myEvent(myMemberID, eventTitle, eventSection, eventContents, eventImgFile, eventImgSize, eventView, regTime) VALUES('$myMemberID', '$eventTitle', '$eventSection', '$eventContents', '$eventImgName', '$eventImgSize', '$eventView', '$regTime')";
            } else {
                echo "<script>alert('지원하는 이미지 파일이 아닙니다.'); history.back(1)</script>";
            }
        } else {
            echo "이미지 파일이 첨부하지 않았습니다.";
            $sql = "INSERT INTO myEvent(myMemberID, eventTitle, eventSection, eventContents, eventImgFile, eventImgSize, eventView, regTime)  VALUES('$myMemberID', '$eventTitle', '$eventSection', '$eventContents', 'Img_default.jpg', '$eventImgSize', '$eventView', '$regTime')";
        }
    }
    //이미지 사이즈 확인
    if($eventImgSize > 1000000){
        echo "<script>alert('이미지 용량이 1메가를 초과했습니다.'); history.back(1)</script>";
        exit;
    }
    $result = $connect -> query($sql);
    $result = move_uploaded_file($eventImgTmp, $eventImgDir.$eventImgName);

                                                                           
    Header("Location: event.php");


    // $sql = "INSERT INTO myBoard(myMemberID, boardTitle, boardSection, boardContents, boardView, regTime) VALUES('$myMemberID','$boardTitle', '$boardSection','$boardContents', '$boardView', '$regTime')";
    // // $sql = "INSERT INTO myboard(myMemberID, boardTitle, boardContents, boardView, regTime) VALUES('$myMemberID','$boardTitle', '$boardContents', '$boardView', '$regTime')";
    
    // $connect -> query($sql);
    // echo $result;
?>
<script>
    // location.href = "board.php";
</script>