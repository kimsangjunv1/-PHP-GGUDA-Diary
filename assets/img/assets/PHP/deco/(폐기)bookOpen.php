<?php 
    include "../../connect/connect.php";
    include "../../connect/session.php";

    $color = $_GET['color'];
    $colorSql = "SELECT * FROM test WHERE color = '$color' ORDER BY testID DESC";
    $colorResult = $connect -> query($colorSql);
    $categoryInfo = $colorResult -> fetch_array(MYSQLI_ASSOC);
    $categoryCount = $colorResult -> num_rows; //갯수세기

    // include "../../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>다이어리 꾸미기</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/board.css">
</head>
<body>
<?php

    $myMemberID = $_SESSION['myMemberID'];
    $testImgFile = $_FILES['testImage'];
    $testImgSize = $_FILES['testImage']['size'];
    $testImgType = $_FILES['testImage']['type'];
    $testImgName = $_FILES['testImage']['name'];
    $testImgTmp = $_FILES['testImage']['tmp_name'];
    $color = $_POST['color'];
    echo "<pre>";
    var_dump($testImgFile);
    echo "</pre>";

    if($testImgType){
        $fileTypeExtension = explode("/", $testImgType);
        $fileType = $fileTypeExtension[0];      //image
        $fileExtension = $fileTypeExtension[1]; //png
        //이미지 타입 확인
        if($fileType == "image"){
            if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
                $blogImgDir = "../../assets/img/testImg/";
                $testImgName = "Img_".time().rand(1,99999)."."."{$fileExtension}";
                echo $testImgName;
                $sql = "INSERT INTO test(myMemberID, testImageFile, testImageSize, color) VALUES('$myMemberID', '$testImgFile', '$testImgSize', '$color')";
            } else {
                echo "<script>alert('지원하는 이미지 파일이 아닙니다.'); history.back(1)</script>";
            }
        }
    } else {
        //echo "이미지 파일이 첨부하지 않았습니다.";
        $sql = "INSERT INTO test(myMemberID, testImageFile, testImageSize, color) VALUES('$myMemberID', 'Img_default.jpg', '$testImgSize', '$color')";
    }
    //이미지 사이즈 확인
    if($testImgSize > 1000000){
        echo "<script>alert('이미지 용량이 1메가를 초과했습니다.'); history.back(1)</script>";
        exit;
    }
    $result = $connect -> query($sql);
    $result = move_uploaded_file($testImgTmp, $blogImgDir.$testImgName);

    var_dump($result);

?>
</body>
<script src="../../assets/javascript/board.js"></script>
<!-- <script src="../../assets/javascript/search.js"></script> -->
<script src="../../assets/javascript/common.js"></script>
</html>