<?php
   include "../../connect/connect.php";
   include "../../connect/session.php";
   include "../../connect/sessionCheck.php";
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
    <?php include "../include/header.php" ?>
    <div class="wrap">
        <div class="site">
            <div class="remove">
                <div class="remove_info">
                    <img class="notice_logo" src="../../assets/img/site_board_edit_delete.png" alt="">
<?php
    $myBoardID = $_GET['myBoardID'];
    $myMemberID = $_SESSION['myMemberID'];

    $myBoardID = $connect -> real_escape_string($myBoardID);
    $myMemberID = $connect -> real_escape_string($myMemberID);


    $sql = "SELECT myBoardID, myMemberID FROM myBoard WHERE myMemberID = {$myMemberID} && myBoardID = {$myBoardID}";
    $result = $connect -> query($sql);

    $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);

    // echo $myMemberID;
    // echo $memberInfo['myBoardID'];
    // echo $myBoardID;
    // echo $memberInfo['myMemberID'];
    if($memberInfo['myBoardID'] === $myBoardID && $memberInfo['myMemberID'] === $myMemberID){
        $sql = "DELETE FROM myBoard WHERE myBoardID = {$myBoardID} && myMemberID = {$myMemberID}";
        $connect -> query($sql);
    } else {
        echo "<script>alert('본인이 작성한 글이 아닙니다 X3'); history.back();</script>";

    }
?>
                    <p class="cross">삭제되었습니다, 하단의 버튼을 눌러 확인해주세요!</p>
                    <img src="../assets/img/site_board_notice_cross.png" alt="">
                    <button style="width:216px;" type="submit" class="input__Btn"><a href="board.php">확인</a></button>
                </div>
            </div>
        </div>
        <?php include "../include/footer.php" ?>
    </div>
</body>
<script src="../../assets/javascript/common.js"></script>
<script src="../../assets/javascript/board.js"></script>
</html>