<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN -  회원가입</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/board.css">
    <!-- <link rel="stylesheet" href="../../assets/javascript/main.js"> -->

</head>
<body>
    <div class="login__popup">
        <div class="login__inner">
            <div class="login__header">
                <img src="../../assets/img/signin_agree_logo.png" alt="">
                <h3>INSERT</h3>
                <div class="login-txt">
                    <p>개인정보를 이곳에 입력해주세요!</p>
                    <p class="fail">모든 정보를 입력해주세요!</p>
                </div>  
                <img class="login-cross"src="../../assets/img/login_cross.png" alt="">
            </div>
            <div class="login__cont">
                <form name="join" action="joinSave.php" method="post" onsubmit ="return joinChecks()" >
                    <fieldset>
                        <legend class="ir">회원가입을 위한 정보 입력영역</legend>
                        <section class="joinAgree">
                            <div class="name">
                                <label for="youName" class="ir">이름</label>
                                <input type="text" name="youName" id="youName" placeholder="이름" class="input__style" required>
                                <p class="msg" id="youNameComment"><!---* 이름을 작성해주세요.---></p>
                            </div>
                            <div class="Email overlap">
                                <label for="youEmail" class="ir">이메일</label>
                                <input type="email" name="youEmail" id="youEmail" placeholder="이메일" class="input__style" required>
                                <a href="#c" class="check" onclick="emailChecking()">중복 확인</a>
                                <p class="msg" id="youEmailComment"><!--- * 이메일이 존재합니다.---></p>
                            </div>
                            <div class="Pass">
                                <label for="youPass" class="ir">PW</label>
                                <input type="password" name="youPass" id="youPass" placeholder="비밀번호" class="input__style" required>
                                <p class="msg" id="youPassComment"><!--- * 비밀번호를 작성해주세요.---></p>
                            </div>
                            <div class="Birth">
                                <label for="youBirth" class="ir">년도 - 월 - 일</label>
                                <input type="text" name="youBirth" id="youBirth" placeholder="년도" class="input__style" required>
                                <p class="msg" id="youBirthComment"><!--- * 올바른 년도를 골라주세요.---></p>
                            </div>
                            <div style="display: flex; justify-content: space-between;">
                                <div class="Gender" style="width:30%">
                                    <select name="youGender" id="youGender" class="input__style" required>
                                        <option value="male">남자</option>
                                        <option value="female">여자</option>
                                    </select>
                                    <p class="msg" id="youGenderComment"><!--- * 성별을 설정해주세요---></p>
                                </div>
                                <div class="QA" style="width:65%">
                                    <select name="searchQA" id="searchQA" class="input__style" required>
                                        <option value="QA">나의 보물 1호</option>
                                    </select>
                                    <p class="msg" id="searchQAComment"><!--- * 질문을 설정해주세요.---></p>
                                </div>
                            </div>
                            <div class="youQA">
                                <label for="youQA" class="ir">답변</label>
                                <input type="text" name="youQA" id="youQA" placeholder="나의 보물 1호는?" class="input__style" required>
                                <p class="msg" id="youQAComment"><!--- * 질문에 대한 답변을 작성해주세요.---></p>
                            </div>  
                            <button class="input__Btn" type="submit">확인</button>
                        </section>
                    </fieldset>
                </form>
            </div>
            <button type="button" class="btn-close"><img src="../../assets/img/login_close.png" alt="닫기버튼 입니다."></button>
        </div>
    </div>
    <div class="site">
            <div class="header">
                <div class="header_inner">
                    <img style="padding-right: 20px;" src="../assets/img/site_header_logo.png" alt="logo">
                    <p>공지사항</p>
                    <p>이벤트</p>
                    <p>이달의 순위</p>
                    <p>일기쓰기</p>
                    <p>꾸미기</p>
                    <p>정보</p>
                    <p>고객센터</p>
                    <div class="profile_cont" alt="로그인한 프로파일 이미지">
                        <img src="../assets/img/site_header_profile.png" alt="logo">
                        <img src="../assets/img/site_header_profile_heart.png" alt="logo">
                    </div>
                </div>
            </div>
            <div class="intro">
                <div class="intro_page one">
                    <div class="logo__cont">
                        <img src="../assets/img/site_intro_logo.png" alt="">
                        <p>“너가 상상한 <em>그 모든것</em> 여기서 꿈을 <em>꾸다</em>.”</p>
                    </div>
                    <img src="../assets/img/site_intro_stroke.svg" alt="">
                    <div style="position:absolute; bottom: 25px;">
                        <div class="cover">
                            <p class="first-parallel"></p>
                        </div>
                        <div class="cover">
                            <p class="second-parallel"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
<script>
    //파티클 생성 10개
    //설명 : 파티클(작은거/큰거) 하나하나 태그로 넣기에는 너무 길어져서 사용함
    
    const q = document.querySelector(".intro_page");
    let size_que = Math.floor(Math.random() * 5) + 1;

    for (let i = 1; i < 10; i++) {
        if (i % 2 == 0) {
            q.innerHTML += "<img class='particle' src='../../assets/img/site_intro_particle_001.png' alt=''>"
        } else {
            q.innerHTML += "<img class='particle' src='../../assets/img/site_intro_particle_002.png' alt=''>"
        }
    }



    //marquee 효과 구현
    //설명 : 기본적으로 천천히 흘러가고 스크롤에 따라 더 빠르게 흐름
    const pTag1 = document.querySelector('.first-parallel')
    const pTag2 = document.querySelector('.second-parallel')

    const textArr1 =
        'DREAMS BECOME TRUE ← [GGUDA] ← DREAMS BECOME TRUE ← [GGUDA] ← DREAMS BECOME TRUE ← [GGUDA] ← DREAMS BECOME TRUE ← [GGUDA] ← DREAMS BECOME TRUE ← [GGUDA] ← DREAMS BECOME TRUE ← [GGUDA] ←'
        .split(' ')
    const textArr2 =
        'DREAMS BECOME TRUE → [GGUDA] → DREAMS BECOME TRUE → [GGUDA] → DREAMS BECOME TRUE → [GGUDA] → DREAMS BECOME TRUE → [GGUDA] → DREAMS BECOME TRUE → [GGUDA] → DREAMS BECOME TRUE → [GGUDA] →'
        .split(' ')

    let count1 = 0
    let count2 = 0

    initTexts(pTag1, textArr1)
    initTexts(pTag2, textArr2)

    function initTexts(element, textArray) {
        textArray.push(...textArray)
        for (let i = 0; i < textArray.length; i++) {
            element.innerText += `${textArray[i]}\u00A0\u00A0\u00A0\u00A0`
        }
    }

    function marqueeText(count, element, direction) {
        if (count > element.scrollWidth / 2) {
            element.style.transform = `translate3d(0, 0, 0)`
            count = 0
        }
        element.style.transform = `translate3d(${direction * count}px, 0, 0)`

        return count
    }

    function animate() {
        count1++
        count2++

        count1 = marqueeText(count1, pTag1, -1)
        count2 = marqueeText(count2, pTag2, 1)

        window.requestAnimationFrame(animate)
    }

    function scrollHandler() {
        count1 += 15
        count2 += 15
    }

    window.addEventListener('scroll', scrollHandler)
    animate()



    const profileCont = document.querySelector(".profile_cont img");
    const loginClose = document.querySelector(".btn-close");

    loginClose.addEventListener("click", ()=>{
        document.querySelector(".login__popup").classList.remove("show");
    })

    profileCont.addEventListener("click", ()=>{
        document.querySelector(".login__popup").classList.add("show");
    })

    document.querySelector(".btn-close").addEventListener("click", ()=>{
        history.back();
    })
</script>
</body>
</html>