<?php 
    include "../../connect/connect.php";
    include "../../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>랭크</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/board.css">
    <link rel="stylesheet" href="../../assets/css/rank.css">

</head>
<body>
    <?php include "../include/header.php" ?>
    <div class="wrap">
        <div class="site">

            <div class="board">
                <div class="board_info">
                    <img src="../../assets/img/site_main_rank.png" class="header_icon_main" alt="">
                    <img src="../../assets/img/site_main_rank_heart.png" class="header_icon_01" alt="">
                    <img src="../../assets/img/site_main_rank_heart.png" class="header_icon_02" alt="">
                    <img src="../../assets/img/site_main_rank_heart.png" class="header_icon_03" alt="">
                    <img src="../../assets/img/site_main_rank_heart.png" class="header_icon_04" alt="">
                    <img src="../../assets/img/site_main_rank_heart.png" class="header_icon_05" alt="">
                    
                    <h2>RANKING</h2>
                    <p>오늘의 인기 게시물 순위!!!</p>
                    <img src="../../assets/img/site_board_notice_cross.png" alt="">
                </div>
                <div class="board__rank__view">
                    <div class="board__rank__inner">
                        <div class="rank_header">
                            <div class="rank_header_left">
                                <h2>이달의 랭크</h2>
                                <p>Month</p>
                            </div>
                            <div class="rank_header_right">
                                <div>사용빈도 1위</div>
                                <div>?</div>
                            </div>
                        </div>
                        <div class="rank_cont">
                            <div class="rank_cont_inner">
<?php
    // 두개의 테이블 join
    $viewSql = "SELECT b.myBoardID, b.boardTitle, b.boardView FROM myBoard b JOIN myMember m ON (b.myMemberID = m.myMemberID) ORDER BY boardView DESC LIMIT 0, 3";
    $viewResult = $connect -> query($viewSql);
    if($viewResult){
        $viewCount = $viewResult -> num_rows;
        if($viewCount > 0){
            for($i=1; $i<=3; $i++){
                $info = $viewResult -> fetch_array(MYSQLI_ASSOC);
                switch ($i) {
                    case 3 :
                        echo "<div class='rank_item'>";
                        echo "<p class='rank_title'>".$info['boardTitle']."</p>";
                        echo "<div class='rank_item_03'><a href='../board/boardView.php?myBoardID={$info['myBoardID']}'>";
                        echo "<p class='rank_three'>3등</p></a>";
                        echo "</div>";
                        echo "</div>";
                    break;
                    case 1 :
                        echo "<div class='rank_item'>";
                        echo "<p class='rank_title'>".$info['boardTitle']."</p>";
                        echo "<div class='rank_item_01'><a href='../board/boardView.php?myBoardID={$info['myBoardID']}'>";
                        echo "<img src='../../assets/img/site_main_ranking.png' alt=''>";
                        echo "<p class='rank_one'>1등</p></a>";
                        echo "</div>";
                        echo "</div>";
                    break;
                    case 2 :
                        echo "<div class='rank_item'>";
                        echo "<p class='rank_title'>".$info['boardTitle']."</p>";
                        echo "<div class='rank_item_02'><a href='../board/boardView.php?myBoardID={$info['myBoardID']}'>";
                        echo "<p class='rank_two'>2등</p></a>";
                        echo "</div>";
                        echo "</div>";
                    break;
                }
            }
        }
        else {
            echo "<div class='rank_item'>게시글 오류입니다. 관리자에게 문의하세요!</div>";
        }
    }
?>
                        
                            
                            </div>
                        </div>
                            <div class="rank_cont_small">
                                <div class="rank_sum2">
                                    <div class="num2">4</div>
                                    <a href="#"><img src="../../assets/img/function_edit_sticker_01.png" alt="4등"></a>
                                    <div class="name4">동물 스티커</div>
                                </div>
                                <div class="rank_sum2">
                                    <div class="num2">5</div>
                                    <a href="#"><img src="../../assets/img/function_edit_sticker_01.png" alt="5등"></a>
                                    <div class="name4">식물 스티커</div>
                                </div>
                                <div class="rank_sum2">
                                    <div class="num2">6</div>
                                    <a href="#"><img src="../../assets/img/function_edit_sticker_01.png" alt="6등"></a>
                                    <div class="name4">인간 스티커</div>
                                </div>
                                <div class="rank_sum2">
                                    <div class="num2">7</div>
                                    <a href="#"><img src="../../assets/img/function_edit_sticker_01.png" alt="7등"></a>
                                    <div class="name4">옷 스티커</div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        <?php include "../include/footer.php" ?>
    </div>
</body>
<script>document.querySelector(".header_inner a:nth-child(5)").classList.add("actived")</script>
</html>