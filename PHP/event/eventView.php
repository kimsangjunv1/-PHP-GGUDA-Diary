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
    <title>이벤트</title>
    <link rel="stylesheet" href="../../assets/css/board.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
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
                <a class="modify_btn" href="eventModify.php?myEventID=<?=$_GET['myEventID']?>">수정</a>
                <div class="board_info">
                    <img src="../../assets/img/board_header_01.png" class="header_icon_01" alt="">
                    <img src="../../assets/img/board_header_02.png" class="header_icon_02" alt="">
                    <img src="../../assets/img/board_header_03.png" class="header_icon_03" alt="">
                    <img src="../../assets/img/board_header_04.png" class="header_icon_04" alt="">
                    <img src="../../assets/img/board_header_05.png" class="header_icon_05" alt="">
                    <!-- <img class="notice_logo" src="../../assets/img/site_board_notice_logo.png" alt=""> -->
                    <h2>NOTICE</h2>
                    <p>게시물 내용을 확인해주세요!</p>
                    <img src="../../assets/img/site_board_notice_cross.png" alt="">
                    <!-- <div class="section_selector">
                        <a class="select" href="#">공지사항</a>
                        <a href="#">이벤트</a>
                    </div> -->
                </div>
                <div class="section_selector">
                    <div class="section_container">
                        <a href="../board/board.php">공지사항</a>
                        <a class="select" href="event.php">이벤트</a>
                    </div>
                    <form action="eventSearch.php" name="eventSearch" method="get" id="board_search">
                        <fieldset>
                            <legend class="ir">게시판 검색 영역</legend>
                            <select name="searchOption" id="searchOption">
                                <option value="title">제목</option>
                                <option value="content">내용</option>
                                <option value="name">닉네임</option>
                            </select>
                            <input type="search" name="searchKeyword" id="searchKeyword" placeholder="검색어를 입력하세요!"
                            aria-label="search" class="board_search" required>
                        </fieldset>
                    </form>
                    <!-- <a class="section_search_button" href="#">
                        <img src="../../assets/img/search_btn.png" alt="">
                    </a> -->
                    <a class="write_btn" href="eventWrite.php">글쓰기</a>
                </div>
                <hr>
                <div class="board__view">   
<?php
    $myEventID = $_GET['myEventID'];

    //보드뷰 + 1(업데이트)
    $sql = "UPDATE myEvent SET eventView = eventView + 1 WHERE myEventID = {$myEventID}";
    $connect -> query($sql);
  
    // echo $myBoardID;
    $sql = "SELECT e.eventTitle, e.boardSection , e.regTime, e.eventView, e.eventContents FROM myEvent e JOIN myMember m ON(m.myMemberID = e.myMemberID) WHERE e.myEventID = {$myEventID}";
    $result = $connect -> query($sql);


    if($result){
       $info = $result -> fetch_array(MYSQLI_ASSOC);
    //    echo "<pre>";
    //    var_dump($info);
    //    echo "</pre>";
        echo "<h3 class='view-title'>".$info['eventTitle']."</h3>";
        echo "<div class='view-info'>";
        echo "<p class='view-time'> ".$info['boardSection']." | ".date('Y-m-d H:i',$info['regTime'])." </p>";
        echo "<p class='view-num'> 조회수 | ".$info['eventView']." </p>";
        echo "</div>";
        echo " <div class='view-cont'>".$info['eventContents']."</div>";
   }
?>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../../assets/javascript/board.js"></script>
<script src="../../assets/javascript/common.js"></script>
<script src="../../assets/javascript/search.js"></script>
</html>