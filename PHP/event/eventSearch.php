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
            <div class="board">
                <a class="write_btn" href="eventWrite.php">글쓰기</a>
                <div class="board_info">
                    <img class="notice_logo" src="../../assets/img/site_board_notice_logo.png" alt="">
                    <h2>EVENT : 검색결과</h2>
<?php
    if(isset($_GET['page'])){
        $page = (int) $_GET['page'];
    } else {
        $page = 1;
    }

    function msg($alert){
        echo "<p>총 ".$alert."건이 검색되었습니다.</p>";
    }


    $searchKeyword = $_GET['searchKeyword'];
    $searchOption = $_GET['searchOption'];

    //echo $searchKeyword, $searchOption; //제대로 가져왔는지 확인 => 게시판title 뜨는거로 확인완

    $searchKeyword = $connect -> real_escape_string(trim($searchKeyword));
    $searchOption = $connect -> real_escape_string(trim($searchOption));

    $sql = "SELECT e.myEventID, e.eventTitle, e.eventContents, m.youName, e.regTime, e.eventView, e.boardSection FROM myEvent e JOIN myMember m ON(e.myMemberID = m.myMemberID)";

    switch($searchOption){
        case "title":
            $sql .= "WHERE e.eventTitle LIKE '%{$searchKeyword}%' ORDER BY myEventID DESC ";
            break;
        case "content":
            $sql .= "WHERE e.eventContents LIKE '%{$searchKeyword}%' ORDER BY myEventID DESC ";
            break;
        case "name":
            $sql .= "WHERE m.youName LIKE '%{$searchKeyword}%' ORDER BY myEventID DESC ";
            break;
    }

    //echo $sql;  //쿼리문 나오는지 확인

    $result = $connect -> query($sql);

    // 전체 게시글 개수($count)
    $totalCount = $result -> num_rows;
    msg($totalCount);
?>
                    <img src="../../assets/img/site_board_notice_cross.png" alt="">
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
                <div class="board_list">
                    <div class="board_list_inner">
                    <!-- <div class="board_list_contents">
                            <h2><a href="board_view.html">대전 다이어리 꾸미기 페스티벌 일정 및 장소</a></h2>
                            <div class="board_list_contents_info">
                                <p class="contents_section">NOTICE</p>
                                <p class="contents_date">2022.09.28</p>
                                <p class="contents_view">조회 수 : 3</p>
                            </div>
                        </div> -->
                    </div>
                    <!-- test -->
                </div>
<?php
    $viewNum = 10;
    $viewLimit = ($viewNum * $page) - $viewNum;

    $sql = $sql."LIMIT {$viewLimit}, {$viewNum}";
    $result = $connect -> query($sql);

    if($result){
        $count = $result -> num_rows;
    
        if($count > 0){
            for($i=1; $i <= $count; $i++){
                $info = $result -> fetch_array(MYSQLI_ASSOC);
                echo "<div class='board_list_contents'>";
                echo "<img src='../../assets/img/site_header_profile.png' alt='프로필 이미지'>";
                echo "<h2><a href='eventView.php?myEventID={$info['myEventID']}'>".$info['eventTitle']."</a><a href='eventView.php?myEventID={$info['myEventID']}'>".$info['eventContents']."</a></h2>";
                echo "<div class='board_list_contents_info'>";
                echo "<p class='contents_section'>".$info['boardSection']."</p>";
                echo "<p class='contents_date'>".date('Y-m-d H:i',$info['regTime'])."</p>";
                echo "<p class='contents_view'>".$info['eventView']." VIEW</p>";
                echo "<p class='contents_view'>".$info['youName']."</p>";
                echo "</div>";
                echo "</div>";
                echo "<hr>";
            }
        } else {
            echo "앗? 게시물이 아직 없네요!";    
        }
    }
?>
                <div class="board__pages">
                    <ul>
<?php
    //echo $totalCount;

    //총 페이지 갯수
    $boardCount = ceil($totalCount/$viewNum);

    //현재 페이지를 기준으로 보여주고 싶은 갯수
    $pageCurrent = 5;
    $startPage = $page - $pageCurrent;
    $endPage = $page + $pageCurrent;

    //처음 페이지 초기화
    if($startPage < 1) $startPage = 1;

    //마지막 페이지 초기화
    if($endPage >= $boardCount) $endPage = $boardCount;

    //이전 페이지, 처음 페이지
    if($page != 1){
        $prevPage = $page - 1;
        echo "<li><a href='eventSearch.php?page=1&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>처음</a></li>";
        echo "<li><a href='eventSearch.php?page={$prevPage}'>이전</a></li>";
    } 

    //페이지 넘버 표시
    for($i=$startPage; $i<=$endPage; $i++){
        $active = "";
        if($i == $page) $active = "active";

        echo "<li class='{$active}'><a href='eventSearch.php?page={$i}&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>{$i}페이지</a></li>";
    }

    //다음 페이지, 마지막 페이지
    if($page != $endPage) {
        $nextPage = $page + 1;
        echo "<li><a href='eventSearch.php?page={$nextPage}&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>다음</a></li>";
        echo "<li><a href='eventSearch.php?page={$boardCount}&searchKeyword={$searchKeyword}&searchOption={$searchOption}'>마지막</a></li>";
    }
?>
                    </ul>
                </div>
                    <!-- test -->
            </div>
        </div>
    </div>
</body>
<script src="../../assets/javascript/board.js"></script>
<script src="../../assets/javascript/search.js"></script>
<script src="../../assets/javascript/common.js"></script>

</html>