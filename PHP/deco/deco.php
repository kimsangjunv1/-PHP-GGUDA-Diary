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
    
    <div class="wrap">
        <div class="site">
            <div class="test">
                <div class="hamburger_menu">
                    <img class="header_menu_close" src="../../assets/img/login_cross.png" alt="">
                    <a href="../board/board.php">공지사항</a>
                    <a href="../event/event.php">이벤트</a>
                    <!-- <a href="../rank/rank.php">이달의 순위</a> -->
                    <a href="../deco/deco.php">다이어리 만들기</a>
                    <a href="../deco/deco.php">꾸미기/자랑</a>
                    <a href="../tip/tip.php">정보</a>
                    <a href="../faq/faq.php">FAQ</a>
                </div>
                <div class="header">
                    <div class="header_inner">
                        <a href="../main/main.php"><img src="../../assets/img/site_header_logo.png" alt="logo"></a>
                        <img class="hamburger_menu_open" src="../../assets/img/hamburger_btn.png" alt="">
                        <a href="../board/board.php">공지사항</a>
                        <a href="../event/event.php">이벤트</a>
                        <!-- <a href="../rank/rank.php">이달의 순위</a> -->
                        <a href="../deco/decoDiary.php">다이어리 만들기</a>
                        <a href="../deco/deco.php">꾸미기/자랑</a>
                        <a href="../tip/tip.php">정보</a>
                        <a href="../faq/faq.php">FAQ</a>
                    </div>
                </div>
                <div class="profile_cont" alt="로그인한 프로파일 이미지">
                    <?php if( isset($_SESSION['myMemberID'])){ ?>
                        <span><a href="../login/logout.php" class="profile_cont_close"><img src="../../assets/img/login_cross.png" alt="로그아웃"></a></span>
                        <!-- <img src="../../assets/img/site_header_profile.png" alt="logo"> -->
                        <?php echo "<img src='../../assets/img/blog/".$_SESSION['youImageFile']."' alt='프로필 이미지' class='profile_image'>"; ?>
                        <?php
                            echo "<p>";
                            echo "<a href='../mypage/myPage.php' class='mypage__btn'></a>안녕하세요 <em>".$_SESSION['youName']."님!</em>";
                            echo "</p>";
                            ?>
                            <span class="btn_scroll_top">
                                <a href="#">^</a>
                            </span>
                    <?php } else { ?>
                        <a style="display:none" href="../login/logout.php" class="profile_cont_close"><img src="../../assets/img/login_cross.png" alt="로그아웃"></a>
                        <img src="../../assets/img/site_header_profile_no.png" class="loginplz" alt="logo">
                        <p style="margin-left:0">여기를 눌러 로그인!</p>
                        <span class="btn_scroll_top">
                            <a href="#">^</a>
                        </span>
                        <script>
                            document.querySelector(".btn-close").addEventListener("click", ()=>{
                                document.querySelector(".login__popup").classList.remove("show");
                            })
                
                            document.querySelector(".loginplz").addEventListener("click", ()=>{
                                document.querySelector(".login__popup").classList.add("show");
                            })
                        </script>
                    <?php } ?> 
                </div>
                <script>
                    //모바일시 햄버거 메뉴 구현
                    const menuOpen = document.querySelector(".hamburger_menu_open");
                    menuOpen.addEventListener("click", ()=>{
                        document.querySelector(".hamburger_menu").style.display="flex"
                        document.querySelector("body").style.overflow="hidden"
                    })
                    const menuClose = document.querySelector(".header_menu_close");
                    menuClose.addEventListener("click", ()=>{
                        document.querySelector(".hamburger_menu").style.display="none"
                        document.querySelector("body").style.overflow="auto"
                    })
                </script>
            </div>
            <!-- 헤더 -->


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
        


        <!-- 푸터 -->
        <div class="test">
            <footer class="footer">
                <div class="footer_inner">
                    <div>
                        <img src="../../assets/img/footer__logo.png" alt="푸터 로고">
                        <p>CODING CODI ALL Rrights Reserved</p>
                        <p>Contact : to_before@naver.com</p>
                    </div>
                    <!-- <button>사이트맵</button> -->
                </div>
            </footer>
        </div>
    </div>
</body>
<script src="../../assets/javascript/board.js"></script>
<!-- <script src="../../assets/javascript/search.js"></script> -->
<script src="../../assets/javascript/common.js"></script>
<script>document.querySelector(".header_inner a:nth-child(6)").classList.add("actived")</script>
</html>