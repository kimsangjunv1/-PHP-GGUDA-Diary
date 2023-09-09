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
    <title>공지사항-수정하기</title>
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
            <div class="board">
                <div class="board_info">
                    <img src="../../assets/img/board_header_01.png" class="header_icon_01" alt="">
                    <img src="../../assets/img/board_header_02.png" class="header_icon_02" alt="">
                    <img src="../../assets/img/board_header_03.png" class="header_icon_03" alt="">
                    <img src="../../assets/img/board_header_04.png" class="header_icon_04" alt="">
                    <img src="../../assets/img/board_header_05.png" class="header_icon_05" alt="">
                    <h2>내 글 수정</h2>
                    <p>수정할 내용을 확인하여 주세요!</p>
                    <img src="../../assets/img/site_board_notice_cross.png" alt="">
                </div>
                <div class="section_selector">
                    <div class="section_container">
                        <a class="select" href="board.php">공지사항</a>
                        <a href="../event/event.php">이벤트</a>
                    </div>
                    <div class="modify_cont">
                        <a class="select remove_btn" href="boardDelete.php?myBoardID=<?=$_GET['myBoardID']?>" onclick="alert('정말 삭제하시겠습니까? ;3')">삭제(다른방식)</a>
                    </div>
                </div>
                <hr>
                <div class="board__view">
                <form action="boardModifySave.php" name="boardModify" method="post">
                        <fieldset>
                            <legend class="blind">게시판 작성 영역</legend>
<?php
    $myBoardID = $_GET['myBoardID'];
    $sql = "SELECT myBoardID, boardTitle, boardContents FROM myBoard WHERE myBoardID = {$myBoardID}";
    $result = $connect -> query($sql);

    if($result){
        $info = $result -> fetch_array(MYSQLI_ASSOC);
        echo "<div style='display:none'><label for='myBoardID'>번호</label><input type='text' name='myBoardID' id='myBoardID' value='".$info['myBoardID']."'></div><div><label for='boardTitle' class='blind'>제목</label><input type='text' name='boardTitle' id='boardTitle' value='".$info['boardTitle']."'></div>";
        // echo "<div><label for='boardContents' class='blind'>내용</label><textarea name='boardContents' id='boardContents' rows='20'>".$info['boardContents']."</textarea></div>";
    }
?>
<?php
    $boardCount = $result -> fetch_array(MYSQLI_ASSOC);
    $boardCount = $boardCount['count(myBoardID)'];

    $connect -> query($sql);

    // echo $myBoardID;
    $sql = "SELECT b.boardTitle, b.boardSection, m.youImageFile, b.regTime, b.boardView, b.boardContents FROM myBoard b JOIN myMember m ON(m.myMemberID = b.myMemberID) WHERE b.myBoardID = {$myBoardID}";
    $result = $connect -> query($sql);


    if($result){
    $info = $result -> fetch_array(MYSQLI_ASSOC);
        echo "<div class='view-info'>";
        echo "<img src='../../assets/img/blog/".$info['youImageFile']."' alt='프로필 이미지'>";
        echo "<p class='view-time'> ".$info['boardSection']." | ".date('Y-m-d H:i',$info['regTime'])." </p>";
        echo "<p class='view-num'> 조회수 ".$info['boardView']." </p>";
        echo "</div>";
    }
?>
<?php
    echo "<div><label for='boardContents' class='blind'>내용</label><textarea name='boardContents' id='boardContents' rows='20'>".$info['boardContents']."</textarea></div>";
?>
                            <div>
<?php
    if($result){
        $info = $result -> fetch_array(MYSQLI_ASSOC);
        echo "<input type='password' class='psss-btn' name='youPass' id='youPass' placeholder='내 비밀번호 입력해주세요!' autocomplete='off' required>";
    }
?>
                                <button type="submit" value="수정하기">수정하기</button>
                            </div>
                        </fieldset>
                    </form>
                        <!-- <form name="boardDelete" action="boardDelete.php" method="post">
                            <fieldset>
                                <button class="select remove_btn" type="submit">삭제</button>
                            </fieldset>
                        </form> -->
                        <div class="wail">
                            <!-- <a class="modify_btn" href="boardModify.php?myBoardID=&lt;?=$_GET['myBoardID']?>">수정(다른방식)</a> -->
                            <!-- <a class="select remove_btn" href="boardDelete.php?myBoardID=<?=$_GET['myBoardID']?>" onclick="alert('정말 삭제하시겠습니까? ;3')">삭제(다른방식)</a> -->
                        </div>
                </div>
            </div>
        </div>
        <?php include "../include/footer.php" ?>

    </div>
</body>
<script src="../../assets/javascript/common.js"></script>
<script src="../../assets/javascript/board.js"></script>
</html>