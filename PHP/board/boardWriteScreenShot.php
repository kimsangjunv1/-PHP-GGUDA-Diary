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
    <title>공지사항-글쓰기</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/board.css">
</head>
<body>
    
    <?php include "../include/header.php" ?>
    <div class="wrap">
        <div class="site">
            <div class="board">
                <div class="board_info">
                    <img src="../../assets/img/board_header_01.png" class="header_icon_01" alt="">
                    <img src="../../assets/img/board_header_02.png" class="header_icon_02" alt="">
                    <img src="../../assets/img/board_header_03.png" class="header_icon_03" alt="">
                    <img src="../../assets/img/board_header_04.png" class="header_icon_04" alt="">
                    <img src="../../assets/img/board_header_05.png" class="header_icon_05" alt="">
                    <h2>내 글 작성</h2>
                    <p>작성할 내용을 확인하여 주세요!</p>
                    <img src="../../assets/img/site_board_notice_cross.png" alt="">
                </div>
                <div class="section_selector">
                </div>
                <hr>
                <div class="board__view">
                    <form name="boardWrite" action="boardWriteSave.php" method="post">
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
                                        <label for="boardTitle" class="ir">제목</label>
                                        <input type="text" name="boardTitle" id="youtitle" placeholder="제목을 입력해주세요" class="input__style view-title edit write new" required>
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
                                    <label for="boardContents" class="ir">내용</label>
                                    <textarea name="boardContents" id="youCont" placeholder="내용을 입력해주세요" name="opinion" cols="20" rows="3" class="input__style view-cont edit" required></textarea>
                                </div>
                                <button type="submit" class="select edit_btn">완료</button>
                                <!-- 전체 부분-->
                                <button onclick=bodyShot()>bodyShot</button>
                                <!-- 일부분 부분-->
                                <button onclick=partShot()>partShot</button>

                                <div class="container" id='container'>
                                <!-- 로컬에서 불러온 파일 -->
                                <img src="img/1534347627.jpg">
                                <!-- 웹에서 불러온 파일 -->
                                <img src="https://www.w3schools.com/html/img_girl.jpg">
                                <!-- <img src="https://source.unsplash.com/user/erondu/400x400"> -->
                                </div>
                                <!-- 결과화면을 그려줄 canvas -->
                                <canvas id="canvas" width="900" height="600"
                                style="border:1px solid #d3d3d3;"></canvas>
                            </section>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <?php include "../include/footer.php" ?>

    </div>
</body>
<script>
    function bodyShot() {
    //전체 스크린 샷하기
    html2canvas(document.body)
    //document에서 body 부분을 스크린샷을 함.
    .then(
    function (canvas) {
    //canvas 결과값을 drawImg 함수를 통해서
    //결과를 canvas 넘어줌.
    //png의 결과 값
    drawImg(canvas.toDataURL('image/png'));

    //appendchild 부분을 주석을 풀게 되면 body
    //document.body.appendChild(canvas);

    //특별부록 파일 저장하기 위한 부분.
    saveAs(canvas.toDataURL(), 'file-name.png');
    }).catch(function (err) {
    console.log(err);
    });
    }

    function partShot() {
    //특정부분 스크린샷
    html2canvas(document.getElementById("container"))
    //id container 부분만 스크린샷
    .then(function (canvas) {
    //jpg 결과값
    drawImg(canvas.toDataURL('image/jpeg'));
    //이미지 저장
    saveAs(canvas.toDataURL(), 'file-name.jpg');
    }).catch(function (err) {
    console.log(err);
    });
    }

    function drawImg(imgData) {
    console.log(imgData);
    //imgData의 결과값을 console 로그롤 보실 수 있습니다.
    return new Promise(function reslove() {
    //내가 결과 값을 그릴 canvas 부분 설정
    var canvas = document.getElementById('canvas');
    var ctx = canvas.getContext('2d');
    //canvas의 뿌려진 부분 초기화
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    var imageObj = new Image();
    imageObj.onload = function () {
    ctx.drawImage(imageObj, 10, 10);
    //canvas img를 그리겠다.
    };
    imageObj.src = imgData;
    //그릴 image데이터를 넣어준다.

    }, function reject() { });

    }
    function saveAs(uri, filename) {
    var link = document.createElement('a');
    if (typeof link.download === 'string') {
    link.href = uri;
    link.download = filename;
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
    } else {
    window.open(uri);
    }
    }
</script>
<script src="../../assets/javascript/html2canvas.js"></script>
<script src="../../assets/javascript/board.js"></script>
<script src="../../assets/javascript/common.js"></script>

</html>