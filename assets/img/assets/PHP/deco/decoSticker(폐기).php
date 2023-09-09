<?php 
    include "../../connect/connect.php";
    include "../../connect/session.php";
    // include "../../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>다이어리 꾸미기</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/board.css">
</head>
<body>
    <div style="display:none" class="scroll">
        <p>아래로 스크롤 해주세요.</p>
        <img src="../../assets/img/site_intro_scroll.png" alt="">
    </div>
    <div class="wrap">
        <div class="deco__Diary">
            <div class="diary__inner__black">
                <div class="edit_stiker" alt="스티커 붙이기">
                    <button id="btn-stk01">
                        <div><img src="../../assers/img/function_edit_sticker_01.png" alt=""></div>
                    </button>
                    <button id="btn-stk02">
                        <div><img src="../../assers/img/function_edit_sticker_02.png" alt=""></div>
                    </button>
                    <button id="btn-stk03">
                        <div><img src="../../assers/img/function_edit_sticker_03.png" alt=""></div>
                    </button>
                    <button id="btn-stk04">
                        <div><img src="../../assers/img/function_edit_sticker_04.png" alt=""></div>
                    </button>
                    <button id="btn-stk05">
                        <div><img src="../../assers/img/function_edit_sticker_05.png" alt=""></div>
                    </button>
                </div>
                <div class="diaryDesc">
                    <label for="diaryContents" class="ir">내용</label>
                    <textarea name="diaryBox" id="diaryBox" placeholder="사진을 꾸며보세요" cols="20" rows="3" class="diaryBox" required></textarea>
                </div>
                <button type="submit" class="diary__btn">완료</button>
            </div>
        </div>
    </div>
</body>
<script src="../../assets/javascript/board.js"></script>
<!-- <script src="../../assets/javascript/search.js"></script> -->
<script src="../../assets/javascript/common.js"></script>
</html>