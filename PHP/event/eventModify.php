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
    <title>이벤트-수정하기</title>
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
                    <img class="notice_logo" src="../../assets/img/site_board_edit.png" alt="">
                    <h2>내 글 수정</h2>
                    <p>수정할 내용을 확인하여 주세요!</p>
                    <img src="../../assets/img/site_board_notice_cross.png" alt="">
                    <!-- <div class="section_selector">
                        <a class="select" href="#">공지사항</a>
                        <a href="#">이벤트</a>
                    </div> -->
                </div>
                <hr>
                <div class="board__view">
                <form action="eventModifySave.php" name="eventModify" method="post">
                        <fieldset>
                            <legend class="blind">게시판 작성 영역</legend>
<?php
    $myEventID = $_GET['myEventID'];
    $sql = "SELECT myEventID, eventTitle, eventContents FROM myEvent WHERE myEventID = {$myEventID}";
    $result = $connect -> query($sql);

    if($result){
        $info = $result -> fetch_array(MYSQLI_ASSOC);
        echo "<div style='display:none'><label for='myEventID'>번호</label><input type='text' name='myEventID' id='myBoardID' value='".$info['myEventID']."'></div><div><label for='eventTitle' class='blind'>제목</label><input type='text' name='eventTitle' id='boardTitle' value='".$info['eventTitle']."'></div>";
        echo "<div><label for='eventContents' class='blind'>내용</label><textarea name='eventContents' id='boardContents' rows='20'>".$info['eventContents']."</textarea></div>";
    }
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
                            <a class="select remove_btn" href="eventDelete.php?myEventID=<?=$_GET['myEventID']?>" onclick="alert('정말 삭제하시겠습니까? ;3')">삭제(다른방식)</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../../assets/javascript/common.js"></script>
<script src="../../assets/javascript/board.js"></script>
</html>