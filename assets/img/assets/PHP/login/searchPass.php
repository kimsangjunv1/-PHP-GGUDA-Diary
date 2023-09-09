
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN -  찾기 완료</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    <div class="wrap">
        <div class="login__popup">
            <div class="login__inner">
                <div class="login__header">
                    <img src="../../assets/img/comple_logo.png" alt="">
                    <h3>COMPLETE</h3>
                    <div class="login-txt">
                        <p>회원님의 정보 찾기가 완료되었습니다!</p>  
                    </div>
                    <img class="login-cross"src="../../assets/img/login_cross.png" alt="">
                </div>
                <div class="login__cont">
                    <div class="search-txt">
                    <p class="comple-word">당신의 비밀번호는</p>

<?php
    // $myEventID = $_GET['myEventID'];
    // $sql = "SELECT myEventID, eventTitle, eventContents FROM myEvent WHERE myEventID = {$myEventID}";
    // $result = $connect -> query($sql);

    // if($result){
    //     $info = $result -> fetch_array(MYSQLI_ASSOC);
    //     echo "<div><label for='myEventID'>번호</label><input type='text' name='myEventID' id='myBoardID' value='".$info['myEventID']."'></div><div><label for='eventTitle' class='blind'>제목</label><input type='text' name='eventTitle' id='boardTitle' value='".$info['eventTitle']."'></div>";
    // }
?>

                <!-- <form name="pwChange" action="PassSave.php" method="post" onsubmit ="return joinChecks()">
                    <fieldset>
                        <legend class="ir">비밀번호 변경을 위한 영역</legend>
                        <section class="joinAgree">
                            <div class="Pass">
                                <label for="checkPW" class="ir">PW</label>
                                <input type="password" name="checkPW" id="checkPW" placeholder="새 비밀번호" class="input__style" required>
                                
                            </div>
                            <div class="Pass">
                                <label for="recheckPW" class="ir">PW RECHECK</label>
                                <input type="password" name="recheckPW" id="recheckPW" placeholder="새 비밀번호 다시 확인" class="input__style" required>
                                
                            </div>
                        </section>
                    </fieldset>
                </form> -->

<?php
    include "../../connect/connect.php";
    include "../../connect/session.php";

    if($_POST["youEmail"] == "" || $_POST["youQA"] == ""){

        echo '<script> alert("항목을 입력하세요"); history.back(); </script>';

    }else{

        $youEmail = $_POST['youEmail'];
        $youQA = $_POST['youQA'];

        $_SESSION['youEmail'] = $youEmail;

        $sql = "SELECT * FROM myMember WHERE youEmail = '{$youEmail}' AND youQA = '{$youQA}'";

        $result = $connect -> query($sql);
        $info = $result -> fetch_array(MYSQLI_ASSOC);
        
        if($info['youEmail'] == $youEmail && $info['youQA'] == $youQA ){
            echo '<form name="pwChange" action="passSave.php" method="post" onsubmit ="return joinChecks()">';
            echo '<fieldset>';
            echo '<legend class="ir">비밀번호 변경을 위한 영역</legend>';
            echo '<section class="joinAgree">';
            echo '<div class="Pass">';
            echo '<label for="checkPW" class="ir">PW</label>';
            echo '<input type="password" name="checkPW" id="checkPW" placeholder="새 비밀번호" class="input__style" required>';
                
            echo '</div>';
            echo '<div class="Pass">';
            echo '<label for="recheckPW" class="ir">PW RECHECK</label>';
            echo '<input type="password" name="recheckPW" id="recheckPW" placeholder="새 비밀번호 다시 확인" class="input__style" required>';
            echo '<button type="submit" class="input__Btn">변경하기</button>';
                
            echo '</div>';
            echo '</section>';
            echo '</fieldset>';
            echo '</form>';
        }else{
            echo "<script>alert('이메일과 답변을 다시 확인해주세요 :3.'); history.back();</script>";
        }
    }
?>

                    </div>
                    <!-- <hr class="login-divider"> -->
                    <!-- <button type="submit" class="input__Btn"><a href="login.php">로그인하러가기</a></button> -->
                    <!-- <button type="submit" class="input__Btn"><a href="../main/main.php">메인으로 가기</a></button> -->
                </div>
            </div>
        </div>
        <div class="site">
            <?php include "../include/header.php" ?>
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
    function joinChecks(){
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
</html>