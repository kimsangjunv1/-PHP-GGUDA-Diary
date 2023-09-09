<?php 
   include "../../connect/connect.php";
   include "../../connect/session.php";
   include "../../connect/sessionCheck.php";

//    $youCommentProfile = $_SESSION['youImageFile'];
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" href="../../assets/css/board.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
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
                    
                    <h2>NOTICE</h2>
                    <p>게시물 내용을 확인해주세요!</p>
                    <img src="../../assets/img/site_board_notice_cross.png" alt="">
                </div>
                <div class="section_selector">
                    <div class="section_container">
                        <a class="select" href="board.php">공지사항</a>
                        <a href="../event/event.php">이벤트</a>
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
                    <!-- <a class="section_search_button" href="#">
                        <img src="../../assets/img/search_btn.png" alt="">
                    </a> -->
                    <div class="modify_cont">
                        <a class="modify_btn" href="boardModify.php?myBoardID=<?=$_GET['myBoardID']?>">수정</a>
                        <a class="write_btn" href="boardWrite.php">글쓰기</a>
                    </div>
                </div>
                <hr>
                <div class="board__view">   
<?php
    $myBoardID = $_GET['myBoardID'];

    $currentTitle = $_GET['boardTitle'];
    $preView = $myBoardID-1;
    $nextView = $myBoardID+1;

    // test 0-0-0-0-0-0-0-0-0-0-0-0-0-0-0
    $boardSql = "SELECT * FROM myBoard WHERE myBoardID = {$myBoardID}";
    $boardResult = $connect -> query($boardSql);
    $boardInfo = $boardResult -> fetch_array(MYSQLI_ASSOC); //데이터 가져오기

    $commentSql = "SELECT * FROM myBoardComment WHERE myBoardID = '$myBoardID' ORDER BY myCommentID DESC";
    $commentResult = $connect -> query($commentSql); //데이터 넣어주기
    $commentInfo = $boardResult -> fetch_array(MYSQLI_ASSOC); //데이터 넣어주기
    // test 0-0-0-0-0-0-0-0-0-0-0-0-0-0-0

    // $prevTitle = $currentTitle-1;
    // $nextTitle = $currentTitle+1;

    //보드뷰 + 1(업데이트)
    $sql = "UPDATE myBoard SET boardView = boardView + 1 WHERE myBoardID = {$myBoardID}";
    $connect -> query($sql);
    
    $sql = "SELECT count(myBoardID) FROM myBoard";
    $result = $connect -> query($sql);
    
    $boardCount = $result -> fetch_array(MYSQLI_ASSOC);
    $boardCount = $boardCount['count(myBoardID)'];

    $connect -> query($sql);
    
    // echo $myBoardID;
    $sql = "SELECT b.boardTitle, b.boardSection, m.youImageFile, b.regTime, b.boardView, b.boardContents FROM myBoard b JOIN myMember m ON(m.myMemberID = b.myMemberID) WHERE b.myBoardID = {$myBoardID}";
    $result = $connect -> query($sql);


    if($result){
       $info = $result -> fetch_array(MYSQLI_ASSOC);
        echo "<h3 class='view-title'>".$info['boardTitle']."</h3>";
        echo "<div class='view-info'>";
        echo "<img src='../../assets/img/blog/".$info['youImageFile']."' alt='프로필 이미지'>";
        echo "<p class='view-time'> ".$info['boardSection']." | ".date('Y-m-d H:i',$info['regTime'])." </p>";
        echo "<p class='view-num'> 조회수 ".$info['boardView']." </p>";
        // echo "<p class='view-like' style='margin-left:10px'>♥️".$info['boardLikesCount']."</p>";
        echo "</div>";
        echo "<div class='view-cont'>".$info['boardContents']."</div>";

        echo "<div class='prev-next-cont'>";
        if($myBoardID <=1){
            echo "<a href = '#' class = 'prev__view' style='background:#7e9eb638'>이전글 없음</a>";
        } else {
            echo "<a href='boardView.php?myBoardID={$preView}' class = 'prev__view'>".'이전글'."</a>";
        }
    
        if($myBoardID >= $boardCount) {
            echo "<a href = '#' class = 'next__view' style='background:#7e9eb638'>다음글 없음</a>";
        } else {
            echo "<a href='boardView.php?myBoardID={$nextView}' class = 'next__view'>".'다음글'."</a>";
        }
        echo "</div>";
   }
?>
                </div>

                <!-- 댓글 -->
                <div class="blog__contents__comment">
                        <h3>댓글 쓰기</h3>
                        
<?php
    // $sql = "SELECT b.myBoardID, b.boardTitle, b.boardContents, m.youName, m.youImageFile, b.regTime, b.boardView, b.boardSection FROM myBoard b JOIN myMember m ON(b.myMemberID = m.myMemberID)";

    // $result = $connect -> query($sql);

    // 전체 게시글 개수($count)
    // $totalCount = $result -> num_rows;
    foreach($commentResult as $comment){ ?> 
                        <div class="comment" id="comment<?=$comment['myCommentID']?>">
                            <div class="comment__view">
                                <div class="comment__view__img">
                                    <!-- <img src="../assets/img/icon_256.png" alt="프로파일 이미지"> -->
                                    <img src='../../assets/img/blog/<?=$info['youImageFile']?>' alt='프로필 이미지'>;
                                </div>
                                <div class="comment__view__data">
                                    <span class="name"><?=$comment['commentName']?></span>
                                    <span class="date"><?=date('Y-m-d', $comment['regTime'])?></span>
                                </div>
                                <div class="comment__view__msg">
                                    <?=$comment['commentMsg']?>
                                </div>
                            </div>
                            <div class="comment__del">
                                <a href="#" class="comment__del__del">댓글 삭제</a>
                                <a href="#" class="comment__del__mod">댓글 수정</a>
                            </div>
                        </div>
<?php }?>
                        <div class="comment__delete" style="display:none">
                            <label for="commentDeletePass">비밀번호</label>
                            <input type="text" id="commentDeletePass" name="commentDeletePass">
                            <button id="commentDeleteCancel">취소</button>
                            <button id="commentDeleteButton">삭제</button>
                            <button>삭제</button>
                        </div>
                        <div class="comment__modify" style="display:none">
                            <label for="commentModifyMsg">수정 내용</label>
                            <input type="text" id="commentModifyMsg" name="commentModifyMsg">
                            <label for="commentModifyPass">비밀번호</label>
                            <input type="text" id="commentModifyPass" name="commentModifyPass">
                            <button id="commentModifyCancel">취소</button>
                            <button id="commentModifyButton">수정</button>
                        </div>

                        <div class="comment__write">
                            <div class="comment__write__info">
                                <label for="commentName" class="">이름</label>
                                <input type="text" name="commentName" id="commentName" placeholder="이름">
                                <label for="commentPass">비밀번호</label>
                                <input type="text" id="commentPass" name="commentPass" placeholder="비밀번호">
                                <button type="submit" id="commentBtn">댓글쓰기</button>
                            </div>
                            <div class="comment__write__msg">
                                <label for="commentWrite">댓글을 써주세요</label>
                                <input type="text" id="commentWrite" name="commentWrite" placeholder="댓글을 써주세요">
                            </div>
                        </div>
                    </div>
                <!-- 댓글 종료 -->

            </div>
        </div>
        <?php include "../include/footer.php" ?>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    const commentName = $("#commentName"); //댓글 이름
    const commentPass = $("#commentPass"); //댓글 비밀번호
    const commentWrite = $("#commentWrite"); //댓글 내용
    
    let commentID = "";

    // 댓글 삭제버튼
    $(".comment__del__del").click(function(e){
        e.preventDefault();
        

        $(".comment__delete").fadeIn();
        
        // 클릭한 ID 값
        commentID = $(this).parent().parent().attr("id");

    });

    // 댓글 삭제 버튼 --> 취소 버튼 클릭
    $("#commentDeleteCancel").click(function(){
        $(".comment__delete").fadeOut();
    })

    // 댓글 삭제 버튼 --> 진짜 삭제 버튼 클릭
    $("#commentDeleteButton").click(function(){

        // comment14 : 0~9 까지 여러개(g)의 값을 교환
        let number = commentID.replace(/[^0-9]/g, "");

        if($("#commentDeletePass").val()==""){
            alert("댓글 작성시 비밀번호를 적어주세요");
            $("#commentDeletePass").focus();

        } else {
            $.ajax({
                url: "boardCommentDelete.php",
                method: "POST",
                dataType: "json",
                data: {
                    "pass" : $("#commentDeletePass").val(),
                    "commentID" : number
                },
                // 성공했을때
                success : function(data){
                    console.log(data);
                    location.reload();
                },
                // 오류시 3가지 값을 알려줍니다
                error: function(request, status, error){
                    console.log("request" + request);
                    console.log("status" + status);
                    console.log("error" + error);
                }
            })
        }
    })

    // 댓글 수정버튼
    $(".comment__del__mod").click(function(e){
        e.preventDefault();
        
        $(".comment__modify").fadeIn();
        // 클릭한 ID 값
        commentID = $(this).parent().parent().attr("id");
    });

    $(".commentModifyCancel").click(function(e){
        e.preventDefault();
        
        $(".comment__modify").hide();
    });

    // 댓글 수정 버튼 --> 진짜 수정 버튼 클릭
    $("#commentModifyButton").click(function(){

        // comment14 : 0~9 까지 여러개(g)의 값을 교환
        let number = commentID.replace(/[^0-9]/g, "");

        if($("#commentModifyPass").val()=="" || $("#commentModifyMsg").val()==""){
            alert("댓글 수정시 빈칸을 모두 채워주세요");
            $("#commentModifyMsg").focus();

        } else {
            $.ajax({
                url: "boardCommentModify.php",
                method: "POST",
                dataType: "json",
                data: {
                    "msg" : $("#commentModifyMsg").val(),
                    "pass" : $("#commentModifyPass").val(),
                    "commentID" : number
                },
                // 성공했을때
                success : function(data){
                    console.log(data);
                    location.reload();
                },
                // 오류시 3가지 값을 알려줍니다
                error: function(request, status, error){
                    console.log("request" + request);
                    console.log("status" + status);
                    console.log("error" + error);
                }
            })
        }
    })




    
    // 댓글 쓰기 버튼
    $("#commentBtn").click(function(){
        if($("#commentWrite").val()==""){
            alert("댓글을 써주세요!!");
            $("#commentWrite").focus();
        } else {
            $.ajax({
                // 블로그 커멘트 php로 넘겨줍니다.
                url: "boardCommentWrite.php",
                method : "POST",
                // json 파일로 제작하기 때문에 데이터 타입은 json
                dataType: "json",
                // 넣어줄 값
                data: {
                    "boardID" : <?=$myBoardID?>,
                    "name" : commentName.val(),
                    "pass" : commentPass.val(),
                    "msg"  : commentWrite.val()
                },
                // 성공했을때
                success : function(data){
                    console.log(data);
                    location.reload();
                },
                // 오류시 3가지 값을 알려줍니다
                error: function(request, status, error){
                    console.log("request" + request);
                    console.log("status" + status);
                    console.log("error" + error);
                }
            })
        }
    })
</script>
<script src="../../assets/javascript/board.js"></script>
<script src="../../assets/javascript/common.js"></script>
</html>