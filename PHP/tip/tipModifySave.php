<?php 
   include "../../connect/connect.php";
   include "../../connect/session.php";
   include "../../connect/sessionCheck.php";

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
    <title>Tip-수정하기</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/board.css">
</head>
<body>

    <?php include "../include/header.php" ?>
    <div class="wrap">
        <div class="site">
            <div class="modify">
                <div class="modify_info">
                    <img class="notice_logo" src="../../assets/img/site_board_edit_complete.png" alt="">
<?php
    $myTipID = $_POST['myTipID'];
    $myMemberID = $_SESSION['myMemberID'];
    
    $tipTitle = $_POST['tipTitle'];
    $tipContents = $_POST['tipContents'];
    $youPass = $_POST['youPass'];

    $youPass = sha1("web".$youPass);

    $tipTitle = $connect -> real_escape_string($tipTitle);
    $tipContents = $connect -> real_escape_string($tipContents);

    $sql = "SELECT youPass, myMemberID FROM myMember WHERE myMemberID = {$myMemberID}";
    $result = $connect -> query($sql);

    $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);

    if($memberInfo['youPass'] === $youPass && $memberInfo['myMemberID'] === $myMemberID){
        $sql = "UPDATE myTip SET tipTitle = '{$tipTitle}', tipContents = '{$tipContents}' WHERE myTipID = '{$myTipID}'";
        $connect -> query($sql);

        // var_dump ($sql);
    } else {
        echo "<script>alert('비밀번호가 일치하지 않습니다. 다시 한 번 확인해주세요.')</script>";
        echo "<script>history.back();</script>";
    }
?>
                    <!-- <h2>수정완료</h2> -->
                    <p class="cross">수정하신 내용이 반영되었습니다, 하단의 버튼을 눌러 확인해주세요!</p>
                    <img src="../../assets/img/site_board_notice_cross.png" alt= "">
                    <button style="width:216px;" type="submit" class="input__Btn" ><a href="tip.php">확인</a></button>
                </div>
            </div>
        </div>
        <?php include "../include/footer.php" ?>

    </div>
</body>
<script src="../../assets/javascript/common.js"></script>
<script src="../../assets/javascript/board.js"></script>
</html>