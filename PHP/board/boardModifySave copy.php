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
    $myBoardID = $_POST['myBoardID'];
    $boardTitle = $_POST['boardTitle'];
    $boardContents = $_POST['boardContents'];
    $youPass = $_POST['youPass'];
    $myMemberID = $_SESSION['myMemberID'];
    // $youPass = sha1("web".$youPass);

    $boardTitle = $connect -> real_escape_string($boardTitle);
    $boardContents = $connect -> real_escape_string($boardContents);

    $sql = "SELECT youPass, myMemberID FROM myMember WHERE myMemberID = {$myMemberID}";
    $result = $connect -> query($sql);

    $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
    
    echo $myBoardID;

    if($memberInfo['youPass'] === $youPass && $memberInfo['myMemberID'] === $myMemberID){
        $sql = "UPDATE myBoard SET boardTitle = '{$boardTitle}', boardContents = '{$boardContents}' WHERE myBoardID = '{$myBoardID}'";
        $connect -> query($sql);

        echo var_dump($sql);
        // echo "<script>location.href = 'board.php';</script>";
    } else {
        echo "<script>alert('비밀번호가 일치하지 않습니다. 다시 한 번 확인해주세요.')</script>";
        echo "<script>history.back();</script>";
    }
?>
                    <!-- <h2>수정완료</h2> -->
                    <p class="cross">수정하신 내용이 반영되었습니다, 하단의 버튼을 눌러 확인해주세요!</p>
                    <img src="../../assets/img/site_board_notice_cross.png" alt= "">
                    <button style="width:216px;" type="submit" class="input__Btn" ><a href="board.php">확인</a></button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../../assets/javascript/board.js"></script>
</html>