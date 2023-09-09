<?php 
    include "../../connect/connect.php";
    include "../../connect/session.php";
    include "../../connect/sessionCheck.php";

    
    $myMemberID = $_SESSION['myMemberID'];
    $tipTitle = $_POST['tipTitle'];
    $tipSection = $_POST['tipSection'];
    $tipContents = nl2br($_POST['tipContents']);
    $tipImgFile = $_FILES['tipFile'];
    $tipImgSize = $_FILES['tipFile']['size'];
    $tipImgType = $_FILES['tipFile']['type'];
    $tipImgName = $_FILES['tipFile']['name'];
    $tipImgTmp = $_FILES['tipFile']['tmp_name'];
    $tipView = 0;
    $regTime = time();

    // $boardTitle = $connect -> real_escape_string($boardTitle);
    // $boardSection = $connect -> real_escape_string($boardSection);
    // $boardContents = $connect -> real_escape_string($boardContents);

    echo "<pre>";
    var_dump($tipImgFile);
    echo "</pre>";

    // $sql = "INSERT INTO myBoard(myMemberID, boardTitle, boardSection, boardContents, boardImgFile, boardImgSize, boardView, regTime) VALUES('$myMemberID', '$boardTitle', '$boardSection', '$boardContents', '$boardImgFile', '$boardImgSize', '$boardView', '$regTime')";Img_default.jpg
    
    // var_dump($result);

    // 이미지 파일명 확인
    if($tipImgFile){
        $fileTypeExtension = explode("/", $tipImgType);
        $fileType = $fileTypeExtension[0];      //image
        $fileExtension = $fileTypeExtension[1]; //png
        //이미지 타입 확인
        if($fileType == "image"){
            if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
                $tipImgDir = "../../assets/img/blog_tip/";
                $tipImgName = "Img_".time().rand(1,99999)."."."{$fileExtension}";
                echo "이미지 파일이 맞네요!";
                $sql = "INSERT INTO myTip(myMemberID, tipTitle, tipSection, tipContents, tipImgFile, tipImgSize, tipView, regTime) VALUES('$myMemberID', '$tipTitle', '$tipSection', '$tipContents', '$tipImgName', '$tipImgSize', '$tipView', '$regTime')";
                // var_dump($sql);
            } else {
                echo "<script>alert('지원하는 이미지 파일이 아닙니다.'); history.back(1)</script>";
            }
        } else {
            echo "이미지 파일이 첨부하지 않았습니다.";
            $sql = "INSERT INTO myTip(myMemberID, tipTitle, tipSection, tipContents, tipImgFile, tipImgSize, tipView, regTime)  VALUES('$myMemberID', '$tipTitle', '$tipSection', '$tipContents', 'Img_default.jpg', '$tipImgSize', '$tipView', '$regTime')";
            // var_dump($sql);
        }
    }
    //이미지 사이즈 확인
    if($tipImgSize > 1000000){
        echo "<script>alert('이미지 용량이 1메가를 초과했습니다.'); history.back(1)</script>";
        exit;
    }
    $result = $connect -> query($sql);
    var_dump($sql);
    var_dump($result);
    $result = move_uploaded_file($tipImgTmp, $tipImgDir.$tipImgName);
    var_dump($result);

                                                                           
    Header("Location: tip.php");


    // $sql = "INSERT INTO myBoard(myMemberID, boardTitle, boardSection, boardContents, boardView, regTime) VALUES('$myMemberID','$boardTitle', '$boardSection','$boardContents', '$boardView', '$regTime')";
    // // $sql = "INSERT INTO myboard(myMemberID, boardTitle, boardContents, boardView, regTime) VALUES('$myMemberID','$boardTitle', '$boardContents', '$boardView', '$regTime')";
    
    // $connect -> query($sql);
    // echo $result;
?>
<script>
    // location.href = "board.php";
</script>