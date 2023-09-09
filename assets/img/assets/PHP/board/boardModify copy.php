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
    <title>공지사항-수정하기</title>
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
                    <img class="notice_logo" src="../../assets/img/site_board_edit.png" alt="">
                    <h2>내 글 수정</h2>
                    <p>수정할 내용을 확인하여 주세요!</p>
                    <img src="../../assets/img/site_board_notice_cross.png" alt="">
                    <!-- <div class="section_selector">
                        <a class="select" href="#">공지사항</a>
                        <a href="#">이벤트</a>
                    </div> -->
                </div>
                <hr>
                <div class="board__view">
                    <form name="boardModify" action="boardModifySave.php" method="post">
                        <fieldset>
                            <legend class="ir">회원가입을 위한 정보 입력영역</legend>
                            <section class="modify">
                                <div style="height:52px; margin-bottom:20px;" class="Title write">
<?php
    $myBoardID = $_GET['myBoardID'];

    $sql = "SELECT myBoardID, boardTitle, boardSection , regTime, boardView, boardContents FROM myBoard WHERE myBoardID = {$myBoardID}";
    $result = $connect -> query($sql);
    
    if($result){
        $info = $result->fetch_array(MYSQLI_ASSOC);
        echo "<div contenteditable='true' class='input__style view-title edit write'>".$info{'boardTitle'}."</div>";
    }
?>
                                </div>
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
<?php
    if($result){
        $info = $result->fetch_array(MYSQLI_ASSOC); 
        echo "<div contenteditable='true' class='input__style view-cont edit'>".$info{'boardContents'}."</div>";
        echo "<div><label for='youPass'>비밀번호</label><input type='password' name='youPass' id='youPass' placeholder='내 비밀번호 입력해주세요!' autocomplete='off' required></input></div>";
    }
?>
                                    <!-- <label for="youEmal" class="ir">내용</label> -->
                                    <!-- <input type="text" name="youCont" id="youCont" placeholder="내용을 입력해주세요" class="input__style view-cont edit" required> -->
                                    <!-- <textarea name="youCont" id="youCont" placeholder="내용을 입력해주세요" name="opinion" cols="20" rows="3" class="input__style view-cont edit" required></textarea> -->
                                </div>
                            </section>

                            <!-- <div class="modify_edit_btn">

                                <a class="complete" href="board_ModifySave.html">수정</a>
                                <a class="delete" href="board_ModifySave.html">삭제</a>
                            </div> -->
                            <!-- <div class="section_selector"> -->
                                <button class="select edit_btn" value="수정하기" type="submit">수정완료</button>
                                <!-- </div> -->
                            </fieldset>
                        </form>
                        <!-- <form name="boardDelete" action="boardDelete.php" method="post">
                            <fieldset>
                                <button class="select remove_btn" type="submit">삭제</button>
                            </fieldset>
                        </form> -->
                        <div class="wail">
                            <!-- <a class="modify_btn" href="boardModify.php?myBoardID=&lt;?=$_GET['myBoardID']?>">수정(다른방식)</a> -->
                            <a class="select remove_btn" href="boardDelete.php?myBoardID=<?=$_GET['myBoardID']?>" onclick="alert('정말 삭제하시겠습니까? ;3')">삭제(다른방식)</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../../assets/javascript/board.js"></script>
</html>