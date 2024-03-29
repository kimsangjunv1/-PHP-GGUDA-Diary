<?php 
   include "../../connect/connect.php";
   include "../../connect/session.php";
   include "../../connect/sessionCheck.php";

//    echo "<pre style='position:fixed; bottom:30px; left: 30px;'>";
//    var_dump($_SESSION);
//    echo "</pre>";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>이벤트</title>
    <link rel="stylesheet" href="../../assets/css/board.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <style>
        .view-imge {
            width: 500px;
            height: 500px;
            border-radius: 25px;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
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
                    
                    <h2>NOTICE</h2>
                    <p>게시물 내용을 확인해주세요!</p>
                    <img src="../../assets/img/site_board_notice_cross.png" alt="">
                </div>
                
                <div class="section_selector">
                    <div class="section_container">
                        <a href="../board/board.php">공지사항</a>
                        <a class="select" href="event.php">이벤트</a>
                    </div>
                    <form action="eventSearch.php" name="eventSearch" method="get" id="board_search">
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
                        <a class="modify_btn" href="eventModify.php?myEventID=<?=$_GET['myEventID']?>">수정</a>
                        <a class="write_btn" href="eventWrite.php">글쓰기</a>
                    </div>
                </div>
                <div class="board__view">   
<?php
    $myEventID = $_GET['myEventID'];

    $currentTitle = $_GET['boardTitle'];
    $preView = $myEventID-1;
    $nextView = $myEventID+1;

    // test 0-0-0-0-0-0-0-0-0-0-0-0-0-0-0
    $eventSql = "SELECT * FROM myEvent WHERE myEventID = {$myEventID}";
    $eventResult = $connect -> query($eventSql);
    $eventInfo = $eventResult -> fetch_array(MYSQLI_ASSOC); //데이터 가져오기

    $EVcommentSql = "SELECT * FROM myEventComment WHERE myEventID = '$myEventID' ORDER BY myEVCommentID DESC";
    $EVcommentResult = $connect -> query($EVcommentSql); //데이터 넣어주기
    $EVcommentInfo = $eventResult -> fetch_array(MYSQLI_ASSOC); //데이터 넣어주기
    // test 0-0-0-0-0-0-0-0-0-0-0-0-0-0-0
    
    // test 0-0-0-0-0-0-0-0-0-0-0-0-0-0-0

    // $prevTitle = $currentTitle-1;
    // $nextTitle = $currentTitle+1;

    //보드뷰 + 1(업데이트)
    $sql = "UPDATE myEvent SET eventView = eventView + 1 WHERE myEventID = {$myEventID}";
    $connect -> query($sql);
    
    $sql = "SELECT count(myEventID) FROM myEvent";
    $result = $connect -> query($sql);
    
    $eventCount = $result -> fetch_array(MYSQLI_ASSOC);
    $eventCount = $eventCount['count(myEventID)'];

    $connect -> query($sql);
    
    // echo $myBoardID;
    $sql = "SELECT e.eventTitle, e.eventSection, m.youImageFile, e.regTime, e.eventView, e.eventImgFile, e.eventContents FROM myEvent e JOIN myMember m ON(m.myMemberID = e.myMemberID) WHERE e.myEventID = {$myEventID}";
    $result = $connect -> query($sql);
    // var_dump ($result);


    if($result){
       $info = $result -> fetch_array(MYSQLI_ASSOC);
        echo "<h3 class='view-title'>".$info['eventTitle']."</h3>";
        echo "<div class='view-info'>";
        echo "<img src='../../assets/img/blog/".$info['youImageFile']."' alt='프로필 이미지'>";
        echo "<p class='view-time'> ".$info['eventSection']." | ".date('Y-m-d H:i',$info['regTime'])." </p>";
        echo "<p class='view-num'> 조회수 ".$info['eventView']." </p>";
        // echo "<p class='view-like' style='margin-left:10px'>♥️".$info['boardLikesCount']."</p>";
        echo "</div>";
        echo "<div class='view-cont'>".$info['eventContents']."<div class='view-imge' style='background-image:url(../../assets/img/blog_event/".$info['eventImgFile']."'></div></div>";

        echo "<div class='prev-next-cont'>";
        if($myEventID <=1){
            echo "<a href = '#' class = 'prev__view' style='background:#7e9eb638'>이전글 없음</a>";
        } else {
            echo "<a href='eventView.php?myEventID={$preView}' class = 'prev__view'>".'이전글'."</a>";
        }
    
        if($myEventID >= $eventCount) {
            echo "<a href = '#' class = 'next__view' style='background:#7e9eb638'>다음글 없음</a>";
        } else {
            echo "<a href='eventView.php?myEventID={$nextView}' class = 'next__view'>".'다음글'."</a>";
        }
        echo "</div>";
   }
?>
                </div>

                <!-- 댓글 -->
                <div class="blog__contents__comment">
                        <h3 class="blog__contents__comment__title">댓글 쓰기</h3>
                        
<?php
    $sql = "ALTER TABLE myEventComment AUTO_INCREMENT = 1";
    $connect -> query($sql);

    $sql = "SELECT d.youName, d.youImageFile, f.myEVCommentID, f.regTime, f.commentEventMsg FROM myEventComment f JOIN myMember d ON(f.myMemberID = d.myMemberID) WHERE f.myEventID = {$myEventID}";
    $result = $connect -> query($sql);

    foreach($EVcommentResult as $comment){ ?>
<?php
        if($result){
            $info = $result -> fetch_array(MYSQLI_ASSOC);
        echo "<div class='comment' id='comment".$info['myEVCommentID']."'>";
        echo "<img src='../../assets/img/blog/".$info['youImageFile']."' alt='프로필 이미지' class='comment-img'>";
        echo "<div>";
        echo "<div class='commemt-header'>";
        echo "<p class='comment-nickname'>".$info['youName']."</p>";
        // echo "<p>".$info['myCommentID']."</p>";
        echo "</div>";
        echo "<div class='comment-info'>";
        echo "<h3 class='comment-title'>".$info['commentEventMsg']."</h3>";
        echo "<div class='comment__del'>";
        echo "<a href='#' class='comment__del__del'>삭제</a>";
        echo "<a href='#' class='comment__del__mod'>수정</a>";
        echo "</div>";
        echo "</div>";
        // echo "</div>";
        // echo "<p class='view-like' style='margin-left:10px'>♥️".$info['boardLikesCount']."</p>";
        echo "</div>";
        
   } else {
        echo "앗? 댓글이 아직 없네요!";
   }
?>
</div>
                        <!-- 여기다가 넣기 -->
<?php }?>
                        <div class="comment__delete" style="display:none">
                            <label for="commentDeletePass">비밀번호</label>
                            <input type="text" id="commentDeletePass" name="commentDeletePass" placeholder="비밀번호를 입력해주세요!">
                            <button id="commentDeleteCancel">취소</button>
                            <button id="commentDeleteButton">삭제</button>
                            <!-- <button>삭제</button> -->
                        </div>
                        <div class="comment__modify" style="display:none">
                            <label for="commentModifyMsg">수정내용</label>
                            <input type="text" id="commentModifyMsg" name="commentModifyMsg" placeholder="수정할 내용을 입력해주세요!">
                            <label for="commentModifyPass">비밀번호</label>
                            <input type="text" id="commentModifyPass" name="commentModifyPass" placeholder="비밀번호를 입력해주세요!">
                            <button id="commentModifyCancel">취소</button>
                            <button id="commentModifyButton">수정</button>
                        </div>

                        <div class="comment__write">
                            <div class="comment__write__info">
                                <!-- <label for="commentName" display="display:none">이름</label> -->
                                <!-- <input type="text" name="commentName" id="commentName" placeholder="이름"> -->
                                <!-- <div id="commentName">22</div> -->
                                <label for="commentPass" class="ir">비밀번호</label>
                                <input type="text" id="commentPass" name="commentPass" placeholder="비밀번호">
                                <!-- <button type="submit" id="commentBtn">댓글쓰기</button> -->
                            </div>
                            <div class="comment__write__msg">
                                <label for="commentWrite" class="ir">댓글</label>
                                <input type="text" id="commentWrite" name="commentWrite" placeholder="댓글을 써주세요">
                                <button type="submit" id="commentBtn">댓글쓰기</button>
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
        commentID = $(this).parent().parent().parent().parent().attr("id");
	    $(this).after($(".comment__delete"));

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
                url: "eventCommentDelete.php",
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
        commentID = $(this).parent().parent().parent().parent().attr("id");
	    $(this).after($(".comment__modify"));
    });

    $("#commentModifyCancel").click(function(e){
        e.preventDefault();
        
        $(".comment__modify").fadeOut();
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
                url: "eventCommentModify.php",
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
                url: "eventCommentWrite.php",
                method : "POST",
                // json 파일로 제작하기 때문에 데이터 타입은 json
                dataType: "json",
                // 넣어줄 값
                data: {
                    "eventID" : <?=$myEventID?>,
                    "myLoginID" : <?=$_SESSION['myMemberID']?>,
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