<?php 
    include "../../connect/connect.php";
    include "../../connect/session.php";
    include "../../connect/sessionCheck.php";

    $myMemberID = $_SESSION['myMemberID'];

    // echo "<pre style='position:absolute; top:200px; left: 50px;'>";
    // var_dump($_SESSION);
    // echo "</pre>";
?>

<!DOCTYPE html>
<html lang="ko">
<?php include "../include/head.php" ?>
<body>
    <?php include "../include/header.php" ?>
    <main>
    <div class="wrap">
        <div class="site">
            <div class="board">
                <div class="board_info">
<?php
    $sql = "SELECT m.youName, m.youImageFile, t.myMemberID, m.regTime, t.color, t.testImageFile FROM test t JOIN myMember m ON(t.myMemberID = m.myMemberID) WHERE t.myMemberID = {$myMemberID}";
    $result = $connect -> query($sql);
    $info = $result -> fetch_array(MYSQLI_ASSOC);

    if(!isset($info['myMemberID'])){
        echo "<img src='../../assets/img/site_main_faq.png' class='header_icon_main' alt=''>";

        } else {
        echo "<style>";
        echo ".board_info{";
        echo "    margin-top: 200px !important;";
        echo "}";
        echo ".board_info h2{";
        echo "    margin-top: 0px !important;";
        echo "}";
        echo "</style>";

        echo "<div class='deco_book'>";
        echo "<div class='deco_book_inner'>";
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
        echo "</div>";
        echo "</div>";
    }
?>
                    <img src="../../assets/img/site_main_faq_heart.png" class="header_icon_01" alt="">
                    <img src="../../assets/img/site_main_faq_heart.png" class="header_icon_02" alt="">
                    <img src="../../assets/img/site_main_faq_heart.png" class="header_icon_03" alt="">
                    <img src="../../assets/img/site_main_faq_heart.png" class="header_icon_04" alt="">
                    <img src="../../assets/img/site_main_faq_heart.png" class="header_icon_05" alt="">
                    <h2>다이어리 꾸미기</h2>
                    <img src="../../assets/img/site_board_notice_cross.png" alt="">
                    <p>궁금하신 부분들에 대해 정리해봤어요!</p>
                </div>
                <div class="deco_list">
                    <div class="deco_list_inner" style="height:500px; margin-bottom:60px">
                        
                        <a href="decoDiary.php" class="decoDiary">
                            <img src="../../assets/img/site_main_deco_btn1.png" alt="">
                            <p>다이어리 만들기</p>
                            <span>내 다이어리를 만들어봐요!</span>
                        </a>
<?php
    // $sql = "SELECT m.youName, m.youImageFile, t.myMemberID, m.regTime, t.color, t.testImageFile FROM test t JOIN myMember m ON(t.myMemberID = m.myMemberID) WHERE t.myMemberID = {$myMemberID}";
    // $result = $connect -> query($sql);
    // $info = $result -> fetch_array(MYSQLI_ASSOC);

    if(!isset($info['myMemberID'])){
        echo "<a href='decoDiary.php' class='decoSticker'>";
    } else {
        echo "<a href='decoSticker_".$info['color'].".php' class='decoSticker'>";
    }
    echo "<img src='../../assets/img/site_main_deco_btn2.png' alt=''>";
    echo "<p>스티커 꾸미기</p>";
    echo "<span>나만의 스티커 꾸미기~</span>";
    if(!isset($info['myMemberID'])){
        echo "<p class='nothing' style='margin-top:10px; position:absolute; top:50px; font-size: 14px;'>아직 다이어리를 만들지 않았습니다.</p>";
    } else {
        echo "<p class='".$info['color']."' style='margin-top:10px; position:absolute; top:50px; font-size: 14px;'>현재 ".$info['color']." 색상이 생성되어져 있습니다.</p>";
    }
    // if($info['myMemberID']===$myMemberID){
    //     echo "<p class='".$info['color']."'style='font-size:14px; color: #000'>현재 ".$info['color']." 색상이 생성되어져 있습니다.</p>";
    // } else {
    //     echo "<p>아직 다이어리를 만들지 않았습니다.</p>";
    // }
    echo "</a>";

    // echo "<a href='decoSticker_".$info['color'].".php' class='input__Btn'>".'다꾸하러가기'."</a>";
?>
                        <!-- <a href="decoSticker_.php" class="decoSticker">
                            <img src="../../assets/img/site_main_deco_btn2.png" alt="">
                            <p>스티커 꾸미기</p>
                            <span>나만의 스티커 꾸미기~</span>
                        </a> -->
                        <a href="decoBoard.php" class="viewSticker">
                            <img src="../../assets/img/site_main_deco_btn3.png" alt="">
                            <p>다른 작품 보러가기</p>
                            <span>다른 사람들은 무엇을 만들었을까요?</span>
                        </a>
                    </div>
                </div>
                    <!-- test -->
            </div>
        </div>
        

    </div>

    </main>
    <?php include "../include/footer.php" ?>
</body>
<script src="../../assets/javascript/board.js"></script>
<!-- <script src="../../assets/javascript/search.js"></script> -->
<script src="../../assets/javascript/common.js"></script>
<script>document.querySelector(".header_inner a:nth-child(6)").classList.add("actived")</script>
</html>