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
    
    <?php include "../include/header.php" ?>
    <div class="wrap">
        <div class="site">
            <div class="board">
                <div class="board_info">
                    <img src="../../assets/img/site_main_notice.png" class="header_icon_main" alt="">
                    <img src="../../assets/img/site_main_notice_heart.png" class="header_icon_01" alt="">
                    <img src="../../assets/img/site_main_notice_heart.png" class="header_icon_02" alt="">
                    <img src="../../assets/img/site_main_notice_heart.png" class="header_icon_03" alt="">
                    <img src="../../assets/img/site_main_notice_heart.png" class="header_icon_04" alt="">
                    <img src="../../assets/img/site_main_notice_heart.png" class="header_icon_05" alt="">
                    <!-- <img class="notice_logo" src="../../assets/img/site_board_notice_logo.png" alt=""> -->
                    <h2>내 글 작성</h2>
                    <p>작성할 내용을 확인하여 주세요!</p>
                    <img src="../../assets/img/site_board_notice_cross.png" alt="">
                    <!-- <div class="section_selector">
                        <a class="select" href="#">공지사항</a>
                        <a href="#">이벤트</a>
                    </div> -->
                </div>
                
                <hr>
                <div class="board__view">
                    <form name="eventWrite" action="eventWriteSave.php" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <legend class="ir">회원가입을 위한 정보 입력영역</legend>
                            <section class="boardWrite">
                                <div style="display: flex; justify-content:space-between;">
                                    <!-- <div class="Option write">
                                    </div> -->
                                    <div class="Title write">
                                        <select name="eventSection" id="searchOptions">
                                            <option value="event">이벤트</option>
                                            <option value="notion">공지</option>
                                        </select>
                                        <label for="boardTitle" class="ir">제목</label>
                                        <input type="text" name="eventTitle" id="youtitle" placeholder="제목을 입력해주세요" class="input__style view-title edit write new" required>
                                    </div>
                                </div>
                                <div class="Desc">
                                    <label for="boardContents" class="ir">내용</label>
                                    <textarea name="eventContents" id="youCont" placeholder="내용을 입력해주세요" name="opinion" cols="20" rows="3" class="input__style view-cont edit" required></textarea>
                                </div>
                                <div class ="contImg">
                                    <label for="boardFile">이미지 첨부 : </label>
                                    <input type="file" name="eventFile" id="boardFile" accept=".jpg, .jpeg, .png, .gif" placeholder="jpg, gif, png 파일만 넣어주세요 :3">
                                 </div>
                                <button type="submit" class="select edit_btn">완료</button>
                            </section>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <?php include "../include/footer.php" ?>
    </div>
</body>
<script src="../../assets/javascript/board.js"></script>
<script src="../../assets/javascript/common.js"></script>
</html>