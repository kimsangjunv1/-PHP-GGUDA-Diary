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
    <title>TIP</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/board.css">
</head>
<body>
    
    <?php include "../include/header.php" ?>
    <div class="wrap">
        <div class="site">
            <div class="board">
                <div class="board_info">
                    <img src="../../assets/img/site_main_info.png" class="header_icon_main" alt="">
                    <img src="../../assets/img/site_main_info_heart.png" class="header_icon_01" alt="">
                    <img src="../../assets/img/site_main_info_heart.png" class="header_icon_02" alt="">
                    <img src="../../assets/img/site_main_info_heart.png" class="header_icon_03" alt="">
                    <img src="../../assets/img/site_main_info_heart.png" class="header_icon_04" alt="">
                    <img src="../../assets/img/site_main_info_heart.png" class="header_icon_05" alt="">
                    
                    <h2>TIP</h2>
                    <?php
    if(isset($_GET['page'])){
        $page = (int) $_GET['page'];
    } else {
        $page = 1;
    }

    function msg($alert){
        echo "<p>".$alert."건의 Tip이 있어요!</p>";
    }

    $sql = "SELECT t.myTipID, t.tipTitle, t.tipContents, m.youName, m.youImageFile, t.regTime, t.tipView , t.tipSection FROM myTip t JOIN myMember m ON(t.myMemberID = m.myMemberID)";


    $result = $connect -> query($sql);

    // 전체 게시글 개수($count)
    $totalCount = $result -> num_rows;
    msg($totalCount);
?>
                    <img src="../../assets/img/site_board_notice_cross.png" alt="">
                </div>
                <div class="section_selector">
                    <form action="tipSearch.php" name="tipSearch" method="get" id="board_search">
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
                    <a class='write_btn' href='tipWrite.php'>글쓰기</a>
                        <!-- if($_SESSION['myMemberID']=='1'||'2'||'3'){ -->
                            <!-- $page = (int) $_GET['page']; -->
                            <!-- echo "<a class='write_btn' href='boardWrite.php'>글쓰기</a>"; -->
                        <!-- } else { -->
                            <!-- echo "<a class='write_btn' style='display:none' href='boardWrite.php'>글쓰기</a>"; -->
                        <!-- } -->
                </div>
                <div class="board_list">
                    <div class="board_list_inner">
                        <div class='board_list_header'>
                            <!-- <span>No.</sspan> -->
                            <span>PROFILE</span>
                            <span>TITLE</span>
                            <span>Tip</span>
                            <span>DATE</span>
                            <span>VIEW</span>
                            <span>NAME</span>
                        </div>
<?php
    $viewNum = 10;
    $viewLimit = ($viewNum * $page) - $viewNum;

    $sql = $sql."ORDER BY myTipID DESC LIMIT {$viewLimit}, {$viewNum}";
    $result = $connect -> query($sql);

    $sql = "ALTER TABLE myTip AUTO_INCREMENT = 1";
    $connect -> query($sql);

    if($result){
        $count = $result -> num_rows;
    
        if($count > 0){
            for($i=1; $i <= $count; $i++){
                $info = $result -> fetch_array(MYSQLI_ASSOC);
                echo "<div class='board_list_contents'>";
                echo "<p class='contents_boardId'>".$info['myTip']."</p>";
                echo "<img src='../../assets/img/blog/".$info['youImageFile']."' alt='프로필 이미지'>";
                echo "<h2><a href='tipView.php?myTipID={$info['myTipID']}'>".$info['tipTitle']."</a><a href='tipView.php?myTipID={$info['myTipID']}'>".$info['tipContents']."</a></h2>";
                echo "<div class='board_list_contents_info'>";
                echo "<p class='contents_section'>".$info['tipSection']."</p>";
                echo "<p class='contents_date'>".date('Y-m-d H:i',$info['regTime'])."</p>";
                echo "<p class='contents_view'>".$info['tipView']." VIEW</p>";
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
                    </div>
                </div>
                <div class="board__pages">
                    <ul>
<?php
    //총 페이지 갯수
    $tipCount = ceil($totalCount/$viewNum);

    //현재 페이지를 기준으로 보여주고 싶은 갯수
    $pageCurrent = 5;
    $startPage = $page - $pageCurrent;
    $endPage = $page + $pageCurrent;

    //처음 페이지 초기화
    if($startPage < 1) $startPage = 1;

    //마지막 페이지 초기화
    if($endPage >= $tipCount) $endPage = $tipCount;

    //이전 페이지, 처음 페이지
    if($page != 1){
        $prevPage = $page - 1;
        echo "<li><a  href='tip.php?page=1'>처음</a></li>";
        echo "<li><a  href='tip.php?page={$prevPage}'>이전</a></li>";
    } 

    //페이지 넘버 표시
    for($i=$startPage; $i<=$endPage; $i++){
        $active = "";
        if($i == $page) $active = "active";

        echo "<li class='{$active}'><a href = 'tip.php?page={$i}'>{$i}</a></li>";
    }

    //다음 페이지, 마지막 페이지
    if($page != $endPage) {
        $nextPage = $page + 1;
        echo "<li><a href='tip.php?page={$nextPage}'>다음</a></li>";
        echo "<li><a href='tip.php?page={$tipCount}'>마지막</a></li>";
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
<script>document.querySelector(".header_inner a:nth-child(7)").classList.add("actived")</script>
</html>