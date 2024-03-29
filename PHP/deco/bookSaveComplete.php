<?php 
    include "../../connect/connect.php";
    include "../../connect/session.php";

    $myMemberID = $_SESSION['myMemberID'];

    echo "<pre style='position:absolute; top:200px; left: 50px;'>";
    var_dump($_SESSION);
    echo "</pre>";

    // $sql = "ALTER TABLE myBoardComment AUTO_INCREMENT = 1";
    // $connect -> query($sql);
    
    $sql = "SELECT m.youName, m.youImageFile, t.myMemberID, m.regTime, t.color, t.testImageFile FROM test t JOIN myMember m ON(t.myMemberID = m.myMemberID) WHERE t.myMemberID = {$myMemberID}";
    $result = $connect -> query($sql);
    $info = $result -> fetch_array(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="ko">
<?php include "../include/head.php" ?>
<body>
    <?php include "../include/header.php" ?>
    <main>
    <section class="popup_container">
        <div class="popup_container_inner">
            <?php include "../common/book.php" ?>
            <h2 class="title">Ta-Da!</h2>
            <p class="description">당신만의 다이어리가 완성되었어요!<br>이제 하단의 버튼을 클릭해 다꾸하러 가봐요!</p>
            <!-- <img class="cross"src="../../assets/img/login_cross.png" alt=""> -->
            <div class="btn_container">
                <legend class="ir">다이어리 꾸미기로 넘어가기 위한 영역</legend>
                <div class="btn_container_inner">
<?php
    // echo "<button class='input__Btn' type='submit' onclick='location.href='decoSticker_".$info['color'].".php'' style='margin-bottom:10px'>다꾸하러가기</button>";
    echo "<a href='deco.php'>".'닫기'."</a>";
    echo "<a href='decoSticker_".$info['color'].".php'  class='accept'>".'다꾸하러가기'."</a>";
    // echo "<button class='input__Btn' type='submit' onclick='location.href='deco.php''>확인</button>"
?>
                </div>
            </div>
            <!-- <button type="button" class="btn-close"><img src="../../assets/img/login_close.png" alt="닫기버튼 입니다."></button> -->
        </div>
    </section>
    


        <div class="board">
            <div class="board_info">
                <img src="../../assets/img/site_main_faq.png" class="header_icon_main" alt="">
                <img src="../../assets/img/site_main_faq_heart.png" class="header_icon_01" alt="">
                <img src="../../assets/img/site_main_faq_heart.png" class="header_icon_02" alt="">
                <img src="../../assets/img/site_main_faq_heart.png" class="header_icon_03" alt="">
                <img src="../../assets/img/site_main_faq_heart.png" class="header_icon_04" alt="">
                <img src="../../assets/img/site_main_faq_heart.png" class="header_icon_05" alt="">
                <h2>다이어리 꾸미기</h2>
                <img src="../../assets/img/site_board_notice_cross.png" alt="">
                <p>궁금하신 부분들에 대해 정리해봤어요!</p>
            </div>
<style>
.deco_list{
    width: 100%;
}
.deco_list_inner{
    max-width: 1160px;
    margin: 0 auto;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 500px;
    margin-bottom: 30px;
    gap: 20px;
}
.deco_list_inner a{
    background: #ffffff36;
    width: 32%;
    height: 100%;
    border-radius: 25px;
    backdrop-filter: blur(15px);
    -webkit-backdrop-filter: blur(15px);
    border: 1px solid #e9ebed;
    transition: transform 0.25s, box-shadow 0.25s, background 0.25s;
    cursor: pointer;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.deco_list_inner a:hover{
    transform: translateY(-33px);
    box-shadow: 0px 50px 50px -30px #783d2a52;
    background: linear-gradient(0deg, #ff987e45 0%, transparent 5%);
}
.deco_list_inner a:not(:hover){
    transition: transform 0.25s, box-shadow 0.25s, background 0.25s;
}
.deco_list_inner a img{
    width: 160px;
    margin-bottom: 20px;
}
.deco_list_inner a p{
    font-size: 30px;
    font-weight: bold;
    margin-bottom: 10px;
}
.deco_list_inner a span{
    font-size: 22px;
    color: rgba(0, 0, 0, 0.446);
}
</style>
            <div class="deco_list">
                <div class="deco_list_inner">
                    
                    <a href="decoDiary.php" class="decoDiary">
                        <img src="../../assets/img/site_main_deco_btn1.png" alt="">
                        <p>다이어리 만들기</p>
                        <span>내 다이어리를 만들어봐요!</span>
                    </a>
                    <!-- <a href="decoSticker.php" class="decoSticker">
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
</main>
<?php include "../include/footer.php" ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>        
        let emailCheck = false;
        function emailChecking(){
            let youEmail = $("#youEmail").val();

            if(youEmail == null || youEmail == ''){
                $("#youEmailComment").text("이메일을 입력해주세요 :3")
            }else {
                $.ajax({
                    type : "POST",
                    url : "joinCheck.php",
                    data : {"youEmail" : youEmail, "type" : "emailCheck"},
                    dataType : "json",

                    success : function(data){
                        if(data.result == "good"){
                            $("#youEmailComment").text("사용 가능한 이메일 입니다! :3");
                            emailCheck = true;
                        }else {
                            $("#youEmailComment").text("이미 존재하는 이메일 입니다 ;3");
                            emailCheck = false;
                        }
                    },

                    error : function(request, status, error){
                        console.log("request" + request);
                        console.log("status" + status);
                        console.log("error" + error);
                    }
                })
            }
        }

        function joinChecks(){
            // 이메일 공백 검사
            if($("#youEmail").val() == ''){
                $("#youEmailComment").text("이메일을 입력해주세요.");
                return false;
            }

            // 이메일 유효성 검사
            let getYouEmail = RegExp(/^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i);
            if(!getYouEmail.test($("#youEmail").val())){
                $("#youEmailComment").text("이메일을 형식에 맞게 작성해주세요.");
                $("#youEmail").val('');
                return false;
            }

            // 이메일 중복 검사
            if(emailCheck == false){
                $("#youEmailComment").text("이메일 중복검사를 해주세요.");
                return false;
            }

            // 비밀번호 공백 검사
            if($("#youPass").val() == ''){
                $("#youPassComment").text("비밀번호를 입력해주세요.");
                return false;
            }

            // 비밀번호 유효성 검사
            let getYouPass = $("#youPass").val();
            let getYouPassNum = getYouPass.search(/[0-9]/g);
            let getYouPassEng = getYouPass.search(/[a-z]/ig);
            let getYouPassSpe = getYouPass.search(/[`~!@@#$%^&*|₩₩₩'₩";:₩/?]/gi);

            if(getYouPass.length < 8 || getYouPass.length > 20){
                $("#youPassComment").text("8자리 ~ 20자리 이내로 입력해주세요.");
                return false;
            } else if (getYouPass.search(/\s/) != -1){
                $("#youPassComment").text("비밀번호는 공백 없이 입력해주세요.");
                return false;
            } else if (getYouPassNum < 0 || getYouPassEng < 0 || getYouPassSpe < 0 ){
                $("#youPassComment").text("영문, 숫자, 특수문자를 혼합하여 입력해주세요.");
                return false;
            }


            // 이름 공백 검사
            if($("#youName").val() == ''){
                $("#youPassCComment").text("이름을 입력해주세요.");
                return false;
            }

            // 이름 유효성 검사
            let getYouName = RegExp(/^[가-힣]+$/);
            if(!getYouName.test($("#youName").val())){
                $("#youNameComment").text("이름은 한글만 사용 가능합니다.");
                $("#youName").val('');
                return false;
            }

            // 생년월일 공백 검사
            if($("#youBirth").val() == ''){
                $("#youBirthComment").text("생년월일을 입력해주세요.");
                return false;
            }

            // 생년월일 유효성 검사
            let getYouBirth = RegExp(/^(19[0-9][0-9]|20\d{2})-(0[0-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/);
            if(!getYouBirth.test($("#youBirth").val())){
                $("#youBirthComment").text("올바른 생년월일(YYYY-MM-DD)을 적어주세요.");
                return false;
            }

    
            // 성별 공백 검사
            if($("#youGender").val() == ''){
                $("#youGenderComment").text("성별을 선택해주세요.");
                return false;
            }

            // 질문 공백 검사
            if($("#searchQA").val() == ''){
                $("#searchQAComment").text("성별을 선택해주세요.");
                return false;
            }

            // 답변 공백 검사
            if($("#youQA").val() == ''){
                $("#youQAComment").text("성별을 선택해주세요.");
                return false;
            }
        
        }
    </script>
</body>
</html>