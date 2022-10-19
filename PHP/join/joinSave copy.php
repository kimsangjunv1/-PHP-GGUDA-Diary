<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN -  회원가입 완료</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/board.css">
</head>
<body>
    <div class="login__popup">
        <div class="login__inner">
            <div class="login__header">
                <img src="../../assets/img/SingUp_complete_logo.png" alt="">
                <h3>COMPLETE</h3>
<?php
    include "../../connect/connect.php";

    $youEmail = $_POST['youEmail'];
    $youName = $_POST['youName'];
    $youPass = $_POST['youPass'];
    $youBirth = $_POST['youBirth'];
    $youGender = $_POST['youGender'];
    $searchQA = $_POST['searchQA'];
    $youQA = $_POST['youQA'];
    $regTime = time();
    $youEmail = $connect -> real_escape_string(trim($youEmail));
    $youName = $connect -> real_escape_string(trim($youName));
    $youPass = $connect -> real_escape_string(trim($youPass));
    $youBirth = $connect -> real_escape_string(trim($youBirth));
    $youGender = $connect -> real_escape_string(trim($youGender));
    $searchQA = $connect -> real_escape_string(trim($searchQA));
    $youQA = $connect -> real_escape_string(trim($youQA));

    // $youPass = sha1("web".$youPass);
    // 회원가입
    $sql = "INSERT INTO myMember(youEmail, youName, youPass, youBirth, youGender, searchQA, youQA, regTime) VALUES('$youEmail', '$youName', '$youPass', '$youBirth', '$youGender', '$searchQA', '$youQA', '$regTime' )";
    $result = $connect -> query($sql);
    
    // echo "$result";
    if($result){
        echo "<p class='loginComple-word'>회원가입을 축하드려요!<br> 꾸다를 통해 진정한 다꾸인이 되기를 바랄게요!</p>";
    } else {
        echo "<p class='loginComple-word'> 에러 - ;3 </p>";
    }

?>
                <div class="login-txt">
                </div>
                <img class="login-cross"src="../../assets/img/login_cross.png" alt="">
            </div>
            <div class="login__cont">
                <form name="search" action="login.php" method="post">
                    <fieldset>
                        <legend class="ir">회원가입 완료 영역입니다.</legend>
                        <!-- <p class="loginComple-word">회원가입을 축하드려요!<br>
                            꾸다를 통해 진정한 다꾸인이 되기를 바랄게요!
                        </p> -->
                        <!-- <hr class="login-divider"> -->
                        <!-- <a class="input__Btn" href="../login/login.php">로그인 하러가기</a> -->
                        <a class="input__Btn white" href="../main/main.php">완료</a>
                    </fieldset>
                </form>
            </div>
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
</body>
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
<script>
    // document.querySelector('.input__Btn').addEventListener('click', ()=>{
    //     // window.alert(location.href='../login/login.php');
    //     location.href='../login/login.php';
    // })
    // document.querySelector('.input__Btn.white').addEventListener('click', ()=>{
    //     location.href='http://vvv0032.dothome.co.kr/PHP/main.php';
    // })
</script>

</html>