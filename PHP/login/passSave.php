<?php 
   include "../../connect/connect.php";
   include "../../connect/session.php";
//    include "../../connect/sessionCheck.php";

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/board.css">
</head>
<body>
    <div style="display:none" class="scroll">
        <p>아래로 스크롤 해주세요.</p>
        <img src="../../assets/img/site_intro_scroll.png" alt="">
    </div>
    <div class="wrap">
        <div class="site">
            <?php include "../include/header.php" ?>
            <div class="modify">
                <div class="modify_info">
                    <img class="notice_logo" src="../../assets/img/site_board_edit_complete.png" alt="">
<?php
    if($_POST['checkPW'] == $_POST['recheckPW']){

        $youEmail = $_POST['youEmail'];
        $changePW = $_POST['checkPW'];
        $changePW = sha1("web".$changePW);
        
        $youEmail = $_SESSION['youEmail'];

        $sql = "SELECT youPass, youEmail FROM myMember WHERE youEmail = '{$youEmail}'";
        $result = $connect -> query($sql);

        $sql = "UPDATE myMember SET youPass = '{$changePW}' WHERE youEmail = '{$youEmail}'";
        $connect -> query($sql);
    
    }else{
        echo "<script>alert('이메일과 답변을 다시 확인해주세요 :3.'); history.back();</script>";
    }
?>
                    <!-- <h2>수정완료</h2> -->
                    <p class="cross">수정하신 내용이 반영되었습니다, 하단의 버튼을 눌러 확인해주세요!</p>
                    <img src="../../assets/img/site_board_notice_cross.png" alt= "">
                    <button style="width:216px;" type="submit" class="input__Btn" ><a href="../main/main.php">확인</a></button>
                </div>
            </div>
        </div>
        <?php include "../include/footer.php" ?>

    </div>
</body>
<script src="../../assets/javascript/common.js"></script>
<script src="../../assets/javascript/board.js"></script>
</html>