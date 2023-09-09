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
                <div class="board_info">
                    <img src="../../assets/img/site_main_deco_main.png" class="header_icon_main" alt="">
                    <img src="../../assets/img/site_main_deco_main_heart.png" class="header_icon_01" alt="">
                    <img src="../../assets/img/site_main_deco_main_heart2.png" class="header_icon_02" alt="">
                    <img src="../../assets/img/site_main_deco_main_heart.png" class="header_icon_03" alt="">
                    <img src="../../assets/img/site_main_deco_main_heart2.png" class="header_icon_04" alt="">
                    <img src="../../assets/img/site_main_deco_main_heart.png" class="header_icon_05" alt="">
                    
                    <h2>DECO BOARD</h2>
                    <p>다른 사람들은 어떻게 만들었을까요?</p>
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
                    <a class='write_btn' href='boardWrite.php'>꾸미기</a>
                </div>
<style>
    .deco_list{
        width: 100%;
    }
    .deco_list_inner{
        align-items: start;
        width: 1160px;
        margin: 0 auto;
        height: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
        gap: 14px;

    }
    .deco_list_item_cont{
        min-width: 24%;
    }
    .deco_list_contents{
        flex-direction: column;
        background: #ffffff;
        border-radius: 25px;
        padding: 20px;
        box-sizing: border-box;
        /* margin-right: 10px; */
        height: 378px;
        display: flex;
        justify-content: end;
        cursor: pointer;
        position: relative;
        overflow: hidden;
        border: 1px solid #d6d3e066;
        /* box-shadow: 0px 30px 20px -26px #06166759; */
    }
    .deco_list_contents:last-child{
        margin-right: 0;
    }
    .deco_list_contents:hover{
        transform: translateY(-20px);
        transition: all 0.25s;
        box-shadow: 0px 0px 20px 0px #06166726, 0px 50px 40px -36px #0616675c;
        border: 1px solid #4746ac;
    }
    .deco_list_contents:not(:hover){
        transition: 0.25s;
    }
    .deco_list_contents::before,
    .deco_list_contents::after{
        content: '';
    }
    .deco_list_contents::after{
        /* background: linear-gradient(28deg, #d1cde1 10%, transparent 80%); */
        height: 100%;
        width: 100%;
        position: absolute;
        left: 0;
        bottom: 0;
    }
    .title, .reg_time, .desc, .profile_img{
        z-index: 10;
        color: #fff;
    }
    .deco_contents{
        width: 100px;
        height: 100px;
    }
    .profile_img{
        width: 50px;
        height: 50px;
        border-radius: 100px;
        padding: 3px;
        border: 1px solid rgb(191 191 214);
        margin-right: 10px;
    }
    .deco_list_desc{
        display: flex;
        align-items: center;
        margin-top: 20px;
    }
    .deco_list_desc h2,
    .deco_list_desc p{
        color: #363564;
    }
    .reg_time{
        background: #ffffff87;
        border-radius: 100px;
        padding: 8px 10px;
        font-size: 16px;
        display: in;
        display: inline;
        width: 80px;
        border: 1px solid #4746ac;
        color: #4746ac;
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        transform: translatey(100px);
        transition: 0.25s;
    }
    .deco_list_contents:hover .reg_time{
        transform: translateY(0px);
    }
    .deco_list_desc h2{
        font-size: 22px;
    }
</style>
                <div class="deco_list">
                    <div class="deco_list_inner">
                        <div class="deco_list_item_cont">
                            <div class="deco_list_contents" style="background-image:url(../../assets/img/file-name.png);">
                                <p class="reg_time">2022.10.20</p>
                        
                            </div>
                            <div class="deco_list_desc">
                                <img class="profile_img" src="../../../assets/slider/effect_img_10.jpg" alt="프로필 사진">
                                <div>
                                    <h2 class="title">제목</h2>
                                    <p class="desc">내용</p>
                                </div>
                            </div>
                        </div>
                        <div class="deco_list_item_cont">
                            <div class="deco_list_contents" style="background-image:url(../../assets/img/file-name.png);">
                                <p class="reg_time">2022.10.20</p>
                        
                            </div>
                            <div class="deco_list_desc">
                                <img class="profile_img" src="../../../assets/slider/effect_img_10.jpg" alt="프로필 사진">
                                <div>
                                    <h2 class="title">제목</h2>
                                    <p class="desc">내용</p>
                                </div>
                            </div>
                        </div>
                        <div class="deco_list_item_cont">
                            <div class="deco_list_contents" style="background-image:url(../../assets/img/file-name.png);">
                                <p class="reg_time">2022.10.20</p>
                        
                            </div>
                            <div class="deco_list_desc">
                                <img class="profile_img" src="../../../assets/slider/effect_img_10.jpg" alt="프로필 사진">
                                <div>
                                    <h2 class="title">제목</h2>
                                    <p class="desc">내용</p>
                                </div>
                            </div>
                        </div>
                        <div class="deco_list_item_cont">
                            <div class="deco_list_contents" style="background-image:url(../../assets/img/file-name.png);">
                                <p class="reg_time">2022.10.20</p>
                        
                            </div>
                            <div class="deco_list_desc">
                                <img class="profile_img" src="../../../assets/slider/effect_img_10.jpg" alt="프로필 사진">
                                <div>
                                    <h2 class="title">제목</h2>
                                    <p class="desc">내용</p>
                                </div>
                            </div>
                        </div>
                        <div class="deco_list_item_cont">
                            <div class="deco_list_contents" style="background-image:url(../../assets/img/file-name.png);">
                                <p class="reg_time">2022.10.20</p>
                        
                            </div>
                            <div class="deco_list_desc">
                                <img class="profile_img" src="../../../assets/slider/effect_img_10.jpg" alt="프로필 사진">
                                <div>
                                    <h2 class="title">제목</h2>
                                    <p class="desc">내용</p>
                                </div>
                            </div>
                        </div>
                        <div class="deco_list_item_cont">
                            <div class="deco_list_contents" style="background-image:url(../../assets/img/file-name.png);">
                                <p class="reg_time">2022.10.20</p>
                        
                            </div>
                            <div class="deco_list_desc">
                                <img class="profile_img" src="../../../assets/slider/effect_img_10.jpg" alt="프로필 사진">
                                <div>
                                    <h2 class="title">제목</h2>
                                    <p class="desc">내용</p>
                                </div>
                            </div>
                        </div>
                        <div class="deco_list_item_cont">
                            <div class="deco_list_contents" style="background-image:url(../../assets/img/file-name.png);">
                                <p class="reg_time">2022.10.20</p>
                        
                            </div>
                            <div class="deco_list_desc">
                                <img class="profile_img" src="../../../assets/slider/effect_img_10.jpg" alt="프로필 사진">
                                <div>
                                    <h2 class="title">제목</h2>
                                    <p class="desc">내용</p>
                                </div>
                            </div>
                        </div>
                        <div class="deco_list_item_cont">
                            <div class="deco_list_contents" style="background-image:url(../../assets/img/file-name.png);">
                                <p class="reg_time">2022.10.20</p>
                        
                            </div>
                            <div class="deco_list_desc">
                                <img class="profile_img" src="../../../assets/slider/effect_img_10.jpg" alt="프로필 사진">
                                <div>
                                    <h2 class="title">제목</h2>
                                    <p class="desc">내용</p>
                                </div>
                            </div>
                        </div>
                        <div class="deco_list_item_cont">
                            <div class="deco_list_contents" style="background-image:url(../../assets/img/file-name.png);">
                                <p class="reg_time">2022.10.20</p>
                        
                            </div>
                            <div class="deco_list_desc">
                                <img class="profile_img" src="../../../assets/slider/effect_img_10.jpg" alt="프로필 사진">
                                <div>
                                    <h2 class="title">제목</h2>
                                    <p class="desc">내용</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="board__pages">
                    <ul>

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