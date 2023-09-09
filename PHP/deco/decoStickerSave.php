<?php 
    include "../../connect/connect.php";
    include "../../connect/session.php";
    include "../../connect/sessionCheck.php";

    $myMemberID = $_SESSION['myMemberID'];
    // 추가
    $sql = "SELECT m.youName, m.youImageFile, t.myMemberID, m.regTime, t.color, t.testImageFile FROM test t JOIN myMember m ON(t.myMemberID = m.myMemberID) WHERE t.myMemberID = {$myMemberID}";
    $result = $connect -> query($sql);
    $info = $result -> fetch_array(MYSQLI_ASSOC);

    
    $myMemberID = $_SESSION['myMemberID'];
    $decoTitle = $_POST['DecoTitle'];
    $decoSection =  $info['color'];
    $decoContents = nl2br($_POST['DecoContents']);
    $decoImgFile = $_FILES['DecoFile'];
    $decoImgSize = $_FILES['DecoFile']['size'];
    $decoImgType = $_FILES['DecoFile']['type'];
    $decoImgName = $_FILES['DecoFile']['name'];
    $decoImgTmp = $_FILES['DecoFile']['tmp_name'];
    $decoView = 0;
    $regTime = time();
    // var_dump($decoImgFile);

    // 이미지 파일명 확인
    if($decoImgFile){
        $fileTypeExtension = explode("/", $decoImgType);
        $fileType = $fileTypeExtension[0];      //image
        $fileExtension = $fileTypeExtension[1]; //png
        //이미지 타입 확인
        if($fileType == "image"){
            if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
                $decoImgDir = "../../assets/img/deco_board/";
                $decoImgName = "Img_".time().rand(1,99999)."."."{$fileExtension}";
                // echo "이미지 파일이 맞네요!";
                $sql = "INSERT INTO myDecoBoard(myMemberID, DecoTitle, DecoSection, DecoContents, DecoImgFile, DecoImgSize, DecoView, regTime) VALUES('$myMemberID', '$decoTitle', '$decoSection', '$decoContents', '$decoImgName', '$decoImgSize', '$decoView', '$regTime')";
            } else {
                echo "<script>alert('지원하는 이미지 파일이 아닙니다.'); history.back(1)</script>";
            }
        } else {
            echo "이미지 파일이 첨부하지 않았습니다.";
            $sql = "INSERT INTO myDecoBoard(myMemberID, DecoTitle, DecoSection, DecoContents, DecoImgFile, DecoImgSize, DecoView, regTime)  VALUES('$myMemberID', '$decoTitle', '$decoSection', '$decoContents', 'Img_default.jpg', '$decoImgSize', '$decoView', '$regTime')";
        }
    }
    //이미지 사이즈 확인
    if($decoImgSize > 5000000){
        echo "<script>alert('이미지 용량이 1메가를 초과했습니다.'); history.back(1)</script>";
        exit;
    }
    var_dump($sql);
    $result = $connect -> query($sql);
    $result = move_uploaded_file($decoImgTmp, $decoImgDir.$decoImgName);
    
    var_dump($result);

    Header("Location: decoBoard.php");
?>
<script>
    // location.href = "board.php";
</script>