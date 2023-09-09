<?php 
    include "../../connect/connect.php";
    include "../../connect/session.php";
    include "../../connect/sessionCheck.php";
    include "../../connect/bookCheck.php";

    echo "<pre style='position:absolute; top:200px; left: 50px;'>";
    var_dump($_SESSION);
    echo "</pre>";
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
    <link rel="stylesheet" href="../../assets/css/faq.css">
</head>
<body>
    <div style="display:none" class="scroll">
        <p>아래로 스크롤 해주세요.</p>
        <img src="../../assets/img/site_intro_scroll.png" alt="">
    </div>
    <!-- <img class="grid_bg" src="../../assets/img/grid_box.png" alt=""> -->
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
<style>
    body{
        height: 100vh;
        background: none !important;
    }
    .header{
        background: rgba(0, 0, 0, 0);
        backdrop-filter: saturate(100%);
        border-bottom: 1px solid #ededed2b;
    }
    .header_inner a{
        color: #fff;
    }
    .hamburger_menu_open{
        filter: invert(1);
    }
    .deco_Diary_list{
        width: 100%;
        height: 100vh;
    }
    .deco_info{
        max-width: 1160px;
        margin: 0 auto;
        height: 100%;
        height: 500px;
        margin-bottom: 30px;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        z-index: 1;
        text-align: center;
    }
    .deco_Diary_list_inner h2{
        color: #fff;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        animation: updown4 1.2s alternate 0s infinite;
        text-shadow: 0px 3px 0px #0000001f;
        font-size: 55px;
    }
    .deco_info h2{
        font-size: 36px;
        font-weight: bold;
        color: #fff;
    }
    .one{background:linear-gradient(129deg, #e0f3b0, #01b0bb); filter: hue-rotate(44deg) !important;}
    .two{background:linear-gradient(129deg, #e0f3b0, #01b0bb); filter: hue-rotate(161deg) !important;}
    .third{background:linear-gradient(129deg, #e0f3b0, #01b0bb); filter: hue-rotate(96deg) !important;}
    .one, .two, .third{position: relative;}

    .site_inner{
        scroll-snap-type: y mandatory;
        overflow: scroll;
        height: 100vh;
        position: relative;
    }
    .deco_Diary_list{
        scroll-snap-align: start;
        /* overflow: hidden; */
    }
    .grid_bg{
        width: 100%;
        
        /* position: absolute; */
        /* height: 100vh; */
    }
    .deco_info select{
        border: 1px solid #fff;
        background: none;
        border-radius: 100px;
        padding: 10px;
        font-size: 18px;
        color: #fff;
        padding-left: 100px;
        /* margin-bottom: 20px; */
        width: 186px;
        cursor: pointer;
    }
    .deco_info button{
        padding: 10px;
        border-radius: 100px;
        box-shadow: 0px 10px 20px -10px #00000045;
        font-size: 16px;
        cursor: pointer;
        margin-top: 20px;
        width: 160px;
        height: 56px;
    }
    .deco_title{
        display: flex;
        align-items: center;
        flex-direction: column;
    }
    .deco_title h2,
    .deco_title img{
        margin-bottom: 10px;
    }
    .deco_info p,
    .deco_info h2{
        color: #fff;
    }
    .deco_info p{
        margin-bottom: 10px;
    }
    .color_selection{
        position: relative;
        margin-bottom: 44px;
    }
    .color_selection label{
        position: absolute;
        top: 50%;
        transform: translate(0,-50%);
        left: 20px;
        color: #fff;
    }
    .deco_info form fieldset{
        display: flex;
        align-items: center;
        flex-direction: column;
    }
    .file_selection{
        text-align: center;
        display: flex;
        /* justify-content: center; */
        background: #00000012;
        border-radius: 100px;
        color: #fff;
        width: 160px;
        align-items: center;
        justify-content: center;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #0000000d;
        position: relative;
    }

    .file_selection label{
        width: 30%;
    }

    .file_selection input{
        width: 70%;
        color: #fff;
    }
    .file_selection::before{
        position: absolute;
        content: '다이어리에 꾸미고 싶은 이미지를 골라주세요';
        /* width: 100%; */
        white-space: nowrap;
        top: -30px;
        left: 50%;
        transform: translate(-50%,0);
        font-size: 14px;
        color: #ffffffbf;
    }
    .file_selection::after{
        position: absolute;
        content: '!';
        width: 25px;
        background: #fff6;
        border-radius: 100%;
        color: #879eac;
        top: -35px;
        left: -65px;
        height: 25px;
        line-height: 1.4;
        box-sizing: border-box;
        font-weight: bold;
    }
</style>
            <div class="site_inner">

            
                <div class="deco_info">
                    <div class="deco_title">

                        <h2>다이어리 꾸미기</h2>
                        <img style="filter: invert(1);" src="../../assets/img/site_board_notice_cross.png" alt="">
                        <p>스크롤을 위아래로 조정해<br>좋아하는 색감을 찾아보세요 :3</p>
                    </div>
                    
                    <form action="bookSave.php" name="bookOpen" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <legend class="ir">블로그 게시글 작성 영역</legend>
                            <!-- <p>좋아하는 색상을 골라주세요 :3</p> -->
                            <div class="color_selection">
                                <label for="color">색상 : </label>
                                <select name="color" id="color">
                                    <option value="blue">블루</option>
                                    <option value="pink">핑크</option>
                                    <option value="purple">퍼플</option>
                                </select>
                            </div>
                            
                            <div class="file_selection">
                                <label for="testImage">파일 : </label>
                                <input type="file" name="testImage" id="testImage" accept=".jpg, .jpeg, .png, .gif" placeholder="jpg, gif, png 파일만 넣어주세요">
                                <!-- <input type="file" name="uploadfile" id="img-selector" accept="image/*"/> -->
                            </div>
                            <button type="submit" value="저장하기">저장하기</button>
                        </fieldset>
                    </form>
                </div>
                
                <div class="deco_Diary_list one">
                    <div class="deco_Diary_list_inner">
                        <h2>블루</h2>
                    </div>
                </div>
                <div class="deco_Diary_list two">
                    <div class="deco_Diary_list_inner">
                        <h2>핑크</h2>
                        
                    </div>
                </div>
                <div class="deco_Diary_list third">
                    <div class="deco_Diary_list_inner">
                        <h2>퍼플</h2>
                        
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
                    <!-- test -->
            </div>


    </div>
</body>

<!-- <button id="btn-image">
    이미지
</button> -->
<!-- <input type="file" name="uploadfile" id="img-selector" accept="image/*" style="display:none;"/> -->
<!-- <div class="text_cont">
    <div style="font-size:10px; color:rgba(0, 0, 0, 0.175)">텍스트박스</div>
    <textarea name="text" id="text" cols="30" rows="10" placeholder="여기에 텍스트를 입력하세요">ㅇㅇ</textarea>
</div> -->
<script src="../../assets/javascript/board.js"></script>
<!-- <script src="../../assets/javascript/search.js"></script> -->
<script src="../../assets/javascript/common.js"></script>
</html>