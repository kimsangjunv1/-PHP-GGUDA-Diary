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
    <link rel="stylesheet" href="../../assets/css/deco.css">
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
                    <img src="../../assets/img/site_main_notice.png" class="header_icon_main" alt="">
                    <img src="../../assets/img/site_main_notice_heart.png" class="header_icon_01" alt="">
                    <img src="../../assets/img/site_main_notice_heart.png" class="header_icon_02" alt="">
                    <img src="../../assets/img/site_main_notice_heart.png" class="header_icon_03" alt="">
                    <img src="../../assets/img/site_main_notice_heart.png" class="header_icon_04" alt="">
                    <img src="../../assets/img/site_main_notice_heart.png" class="header_icon_05" alt="">
                    
                    <h2>DIARY BOARD</h2>
<?php
    if(isset($_GET['page'])){
        $page = (int) $_GET['page'];
    } else {
        $page = 1;
    }

    function msg($alert){
        echo "<p>".$alert."개의 꾸민 다이어리가 있어요!</p>";
    }

    $sql = "SELECT b.myDecoID, b.DecoTitle, b.DecoContents, m.youName, m.youImageFile, b.regTime, b.DecoView, b.DecoSection, b.DecoImgFile, t.testImageFile, t.color FROM myDecoBoard b JOIN myMember m ON(b.myMemberID = m.myMemberID) JOIN test t ON(t.myMemberID = m.myMemberID)";


    $result = $connect -> query($sql);

    // 전체 게시글 개수($count)
    $totalCount = $result -> num_rows;
    msg($totalCount);
?>
                    <img src="../../assets/img/site_board_notice_cross.png" alt="">
                </div>
                <div class="section_selector">
                    <div class="section_container">
                        <a class="select" href="board.php">공지사항</a>
                        <a href="../event/event.php"">이벤트</a>
                    </div>
                    <form action="boardSearch.php" name="boardSearch" method="get" id="board_search">
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
                    <a class='write_btn' href='boardWrite.php'>글쓰기</a>
                        <!-- if($_SESSION['myMemberID']=='1'||'2'||'3'){ -->
                            <!-- $page = (int) $_GET['page']; -->
                            <!-- echo "<a class='write_btn' href='boardWrite.php'>글쓰기</a>"; -->
                        <!-- } else { -->
                            <!-- echo "<a class='write_btn' style='display:none' href='boardWrite.php'>글쓰기</a>"; -->
                        <!-- } -->
                </div>
                <div class="deco_list">
                    <div class="deco_list_inner">
                        <!-- <div class='deco_list_header'>
                            <span>No.</span>
                            <span>PROFILE</span>
                            <span>TITLE</span>
                            <span>BOARD</span>
                            <span>DATE</span>
                            <span>VIEW</span>
                            <span>NAME</span>
                        </div> -->
<?php
    $viewNum = 10;
    $viewLimit = ($viewNum * $page) - $viewNum;

    $sql = $sql."ORDER BY myDecoID DESC LIMIT {$viewLimit}, {$viewNum}";
    $result = $connect -> query($sql);

    $sql = "ALTER TABLE myBoard AUTO_INCREMENT = 1";
    $connect -> query($sql);

    if($result){
        $count = $result -> num_rows;
    
        if($count > 0){
            for($i=1; $i <= $count; $i++){
                $info = $result -> fetch_array(MYSQLI_ASSOC);
                echo "<div class='deco_list_item_cont'>";
                echo "<div class='deco_list_contents' style='background-image:url(../../assets/img/deco_board/".$info['DecoImgFile'].");'>";
                

                echo "<div class='book_item'>";
                echo "<div class='book_item_img_cont'>";
                echo "<img src='../../assets/img/testImg/".$info['testImageFile']."' alt='표지 이미지'>";
                echo "</div>";
                echo "<div class='book_desc'>";
                echo "<p>".$info['color']."</p>";
                echo "<p>".$info['youName']."</p>";
                echo "</div>";
                echo "<div class='book_front ".$info['color']."_front'></div>";
                echo "<div class='book_back'></div>";
                echo "</div>";


                echo "<p class='reg_time'>".date('Y-m-d H:i',$info['regTime'])."</p>";
                echo "</div>";
                echo "<div class='deco_list_desc'>";
                echo "<img class='profile_img' src='../../assets/img/blog/".$info['youImageFile']."' alt='프로필 사진'>";
                echo "<div>";
                echo "<h2 class='title'>".$info['DecoTitle']."</h2>";
                echo "<p class='desc'>".$info['DecoContents']."</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";

                // echo "<div class='board_list_contents'>";
                // echo "<p class='contents_boardId'>".$info['myDecoID']."</p>";
                // echo "<img src='../../assets/img/blog/".$info['youImageFile']."' alt='프로필 이미지'>";
                // echo "<h2><a href='decoView.php?myDecoID={$info['myDecoID']}'>".$info['DecoTitle']."</a><a href='decoView.php?myDecoID={$info['myDecoID']}'>".$info['DecoContents']."</a></h2>";
                // echo "<div class='board_list_contents_info'>";
                // echo "<p class='contents_section'>".$info['decoSection']."</p>";
                // echo "<p class='contents_date'>".date('Y-m-d H:i',$info['regTime'])."</p>";
                // echo "<p class='contents_view'>".$info['decoView']." VIEW</p>";
                // echo "<p class='contents_view'>".$info['youName']."</p>";
                // echo "</div>";
                // echo "</div>";
                // echo "<hr>";
            }
        } else {
            echo "앗? 게시물이 아직 없네요!";    
        }
    }
?>
                    </div>
                </div>
                <div class="board__pages">
                    <ul>
<?php
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
        echo "<li><a  href='decoBoard.php?page=1'>처음</a></li>";
        echo "<li><a  href='decoBoard.php?page={$prevPage}'>이전</a></li>";
    } 

    //페이지 넘버 표시
    for($i=$startPage; $i<=$endPage; $i++){
        $active = "";
        if($i == $page) $active = "active";

        echo "<li class='{$active}'><a href = 'decoBoard.php?page={$i}'>{$i}</a></li>";
    }

    //다음 페이지, 마지막 페이지
    if($page != $endPage) {
        $nextPage = $page + 1;
        echo "<li><a href='decoBoard.php?page={$nextPage}'>다음</a></li>";
        echo "<li><a href='decoBoard.php?page={$boardCount}'>마지막</a></li>";
    }
?>
                    </ul>
                </div>
                    <!-- test -->
            </div>
        </div>
        <?php include "../include/footer.php" ?>
    </div>
</body>
<script src="../../assets/javascript/board.js"></script>
<!-- <script src="../../assets/javascript/search.js"></script> -->
<script src="../../assets/javascript/common.js"></script>
</html>