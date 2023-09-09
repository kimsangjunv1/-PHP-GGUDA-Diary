<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN -  아이디 찾기</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    <div class="wrap">
        <div class="login__popup">
            <div class="login__inner">
                <div class="login__header">
                    <img src="../../assets/img/search_logo.png" alt="">
                    <h3>SEARCH</h3>
                    <div class="login-txt">
                        <p>아이디를 찾기 위한 정보를 입력해주세요!</p>
                        <p class="fail">정보를 다시 확인해주세요!</p>
                    </div>
                    <img class="login-cross"src="../../assets/img/login_cross.png" alt="">
                </div>
                <div class="login__cont">
                    <form name="search" action="searchID.php" method="post">
                        <fieldset>
                            <legend class="ir">아이디 찾기를 위한 입력폼</legend>
                            <div class="Birth">
                                <label for="youBirth" class="ir">년도 - 월 - 일</label>
                                <input type="text" name="youBirth" id="youBirth" placeholder="1997-08-09" class="input__style" required>
                            </div>
                            <div class="name">
                                <label for="youName" class="ir">이름</label>
                                <input type="text" name="youName" id="youName" placeholder="짜파게티" class="input__style" required>
                            </div>
                            <hr class="login-divider">
                            <button type="submit" class="input__Btn">아이디 찾기</button>
                        </fieldset>
                    </form>
                </div>
                <button type="button" class="btn-close"><img src="../../assets/img/login_close.png" alt=""></button>
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