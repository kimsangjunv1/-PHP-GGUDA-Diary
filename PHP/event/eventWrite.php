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
    <title>이벤트-글쓰기</title>
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
                    <img src="../../assets/img/board_header_01.png" class="header_icon_01" alt="">
                    <img src="../../assets/img/board_header_02.png" class="header_icon_02" alt="">
                    <img src="../../assets/img/board_header_03.png" class="header_icon_03" alt="">
                    <img src="../../assets/img/board_header_04.png" class="header_icon_04" alt="">
                    <img src="../../assets/img/board_header_05.png" class="header_icon_05" alt="">
                    <!-- <img class="notice_logo" src="../../assets/img/site_board_notice_logo.png" alt=""> -->
                    <h2>내 글 작성</h2>
                    <p>작성할 내용을 확인하여 주세요!</p>
                    <img src="../../assets/img/site_board_notice_cross.png" alt="">
                    <!-- <div class="section_selector">
                        <a class="select" href="#">공지사항</a>
                        <a href="#">이벤트</a>
                    </div> -->
                </div>
                <div class="section_selector">
                    <!-- <a class="select edit_btn" href="board.php">완료</a>
                    <a class="select remove_btn" href="board.php">취소</a> -->  
                    <!-- form안에 있어야지 세이브로 넘어가서 빼둠 -->
                </div>
                <hr>
                <div class="board__view">
                    <form name="eventWrite" action="eventWriteSave.php" method="post">
                        <fieldset>
                            <legend class="ir">회원가입을 위한 정보 입력영역</legend>
                            <section class="boardWrite">
                                <div style="display: flex; justify-content:center; margin-bottom: 20px; height: 52px;">
                                    <div class="Option write" style="margin-right:10px; width: 25%;">
                                        <select name="boardSection" id="searchOption">
                                            <option value="notion">공지</option>
                                            <option value="event">이벤트</option>
                                        </select>
                                    </div>
                                    <div class="Title write">
                                        <label for="eventTitle" class="ir">제목</label>
                                        <input type="text" name="eventTitle" id="youtitle" placeholder="제목을 입력해주세요" class="input__style view-title edit write new" required>
                                    </div>
                                </div>
                                <!-- <p class="write-time"> notice | 2022.09.19 </p> -->
                                <div class="edit_function" alt="편집기능 이미지">
                                    <button id="btn-bold">
                                        <b>가</b>
                                    </button>
                                    <button id="btn-italic">
                                        <i>가</i>
                                    </button>
                                    <button id="btn-underline">
                                        <u>가</u>
                                    </button>
                                    <button id="btn-strike">
                                        <s>가</s>
                                    </button>
                                    <button id="btn-ordered-list">
                                        1.
                                    </button>
                                    <button id="btn-unordered-list">
                                        •.
                                    </button>
                                    <button id="btn-image">
                                        이미지
                                    </button>
                                    <input type="file" name="uploadfile" id="img-selector" accept="image/*" style="display:none;"/>
                                </div>
                                <div class="Desc">
                                    <label for="eventContents" class="ir">내용</label>
                                    <!-- <input type="text" name="youCont" id="youCont" placeholder="내용을 입력해주세요" class="input__style view-cont edit" required> -->
                                    <textarea name="eventContents" id="youCont" placeholder="내용을 입력해주세요" name="opinion" cols="20" rows="3" class="input__style view-cont edit" required></textarea>
                                </div>
                                <button type="submit" class="select edit_btn">완료</button>
                            </section>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../../assets/javascript/board.js"></script>
<script src="../../assets/javascript/common.js"></script>

</html>