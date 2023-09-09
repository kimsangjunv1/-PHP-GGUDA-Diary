<?php 
    include "../../connect/connect.php";
    include "../../connect/session.php";
    include "../../connect/sessionCheck.php";

    
    $myMemberID = $_SESSION['myMemberID'];
    $boardTitle = $_POST['boardTitle'];
    $boardSection = $_POST['boardSection'];
    $boardContents = nl2br($_POST['boardContents']);
    $boardImgFile = $_FILES['boardFile'];
    $boardImgSize = $_FILES['boardFile']['size'];
    $boardImgType = $_FILES['boardFile']['type'];
    $boardImgName = $_FILES['boardFile']['name'];
    $boardImgTmp = $_FILES['boardFile']['tmp_name'];
    $boardView = 0;
    $regTime = time();

    // $boardTitle = $connect -> real_escape_string($boardTitle);
    // $boardSection = $connect -> real_escape_string($boardSection);
    // $boardContents = $connect -> real_escape_string($boardContents);

    echo "<pre>";
    var_dump($boardImgFile);
    echo "</pre>";

    // $sql = "INSERT INTO myBoard(myMemberID, boardTitle, boardSection, boardContents, boardImgFile, boardImgSize, boardView, regTime) VALUES('$myMemberID', '$boardTitle', '$boardSection', '$boardContents', '$boardImgFile', '$boardImgSize', '$boardView', '$regTime')";Img_default.jpg
    
    // var_dump($result);

    // 이미지 파일명 확인
    if($boardImgFile){
        $fileTypeExtension = explode("/", $boardImgType);
        $fileType = $fileTypeExtension[0];      //image
        $fileExtension = $fileTypeExtension[1]; //png
        //이미지 타입 확인
        if($fileType == "image"){
            if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
                $boardImgDir = "../../assets/img/blog_board/";
                $boardImgName = "Img_".time().rand(1,99999)."."."{$fileExtension}";
                // echo "이미지 파일이 맞네요!";
                $sql = "INSERT INTO myBoard(myMemberID, boardTitle, boardSection, boardContents, boardImgFile, boardImgSize, boardView, regTime) VALUES('$myMemberID', '$boardTitle', '$boardSection', '$boardContents', '$boardImgName', '$boardImgSize', '$boardView', '$regTime')";
            } else {
                echo "<script>alert('지원하는 이미지 파일이 아닙니다.'); history.back(1)</script>";
            }
        } else {
            echo "이미지 파일이 첨부하지 않았습니다.";
            $sql = "INSERT INTO myBoard(myMemberID, boardTitle, boardSection, boardContents, boardImgFile, boardImgSize, boardView, regTime)  VALUES('$myMemberID', '$boardTitle', '$boardSection', '$boardContents', 'Img_default.jpg', '$boardImgSize', '$boardView', '$regTime')";
        }
    }
    //이미지 사이즈 확인
    if($boardImgSize > 1000000){
        echo "<script>alert('이미지 용량이 1메가를 초과했습니다.'); history.back(1)</script>";
        exit;
    }
    $result = $connect -> query($sql);
    $result = move_uploaded_file($boardImgTmp, $boardImgDir.$boardImgName);


    Header("Location: board.php");


    // $sql = "INSERT INTO myBoard(myMemberID, boardTitle, boardSection, boardContents, boardView, regTime) VALUES('$myMemberID','$boardTitle', '$boardSection','$boardContents', '$boardView', '$regTime')";
    // // $sql = "INSERT INTO myboard(myMemberID, boardTitle, boardContents, boardView, regTime) VALUES('$myMemberID','$boardTitle', '$boardContents', '$boardView', '$regTime')";
    
    // $connect -> query($sql);
    // echo $result;
?>
<script>
    // location.href = "board.php";
</script>