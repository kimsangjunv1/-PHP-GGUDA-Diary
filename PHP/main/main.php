<?php 
    include "../../connect/connect.php";
    include "../../connect/session.php";

    // echo "<pre style='position:absolute; top:200px; left: 50px;'>";
    // var_dump($_SESSION);
    // echo "</pre>";
?> 

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 꾸다 - 인덱스 </title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- <link rel="stylesheet" href="../../assets/css/board.css"> -->

</head>
<body>
    <!-- //header -->
    <div class="scroll">
        <p>스크롤을 내려보세요.</p>
        <img src="../../assets/img/site_intro_scroll.png" alt="">
    </div>
    <div class="wrap mainCtrl">
        <?php include "../login/login.php" ?>

        <div class="site">
            <?php include "../include/header.php" ?>
            
            <div class="intro">
                <div class="intro_page one">
                    <div class="logo__cont">
                        <img src="../../assets/img/site_intro_logo.png" alt="">
                        <p>“너가 상상한 <em>그 모든것</em> 여기서 꿈을 <em>꾸다</em>.”</p>
                    </div>
                    <img src="../../assets/img/site_intro_stroke.svg" alt="">
                    <div class="logo__cont__parallel">
                        <div class="cover">
                            <p class="first-parallel"></p>
                        </div>
                        <div class="cover">
                            <p class="second-parallel"></p>
                        </div>
                    </div>
                </div>
                <div class="intro_page two">
                    <div class="two_text_cont">
                        <h2>어 왔니?</h2>
                        <h2><em>다꾸용 물품</em>을(를) 찾아볼까?</h2>
                        <div style="display:flex; flex-wrap: nowrap; align-items: center; overflow-x: hidden;">
                            <h2 style="display: inline;">모두 모아봤어</h2>
                            <img style="display: inline;" src="../../assets/img/site_intro_arrow.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="intro_page three">
                    <h2>편집기능까지.</h2>
                    <!-- <div class="edit_function" alt="편집기능 이미지">
                        <img src="../../assets/img/function_edit_01.png" alt="얉게">
                        <img src="../../assets/img/function_edit_02.png" alt="두껍게">
                        <img src="../../assets/img/function_edit_03.png" alt="밑줄">
                        <img src="../../assets/img/function_edit_04.png" alt="배경색상">
                        <img src="../../assets/img/function_edit_05.png" alt="글씨색상">
                        <img src="../../assets/img/function_edit_06.png" alt="정렬">
                    </div> -->
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
                    <div class="intro_input" id="editor" contenteditable="true" placeholder="여기에 입력해주세요" ></div>
                    <!-- <div class="gguda_desc">
                        
                    </div> -->
                    <div class="sticker_cont">
                        <p>원하는 스티커를 본문에 드래그 해보세요!</p>
                        <div style="display:flex">
                            <img class="sticker" src="../../assets/img/function_edit_sticker_01.png" alt="얉게">
                            <img class="sticker" src="../../assets/img/function_edit_sticker_02.png" alt="얉게">
                            <img class="sticker" src="../../assets/img/function_edit_sticker_03.png" alt="얉게">
                            <img class="sticker" src="../../assets/img/function_edit_sticker_04.png" alt="얉게">
                            <img class="sticker" src="../../assets/img/function_edit_sticker_05.png" alt="얉게">
                        </div>
                    </div>
                </div>
                <div class="intro_page four">
                    <div class="four_text_cont">
                        <h2>어~~~</h2>
                        <h2>이제 같이</h2>
                        <h2>드가자.</h2>
                    </div>
                </div>
            </div>
            <div class="main">
                <!-- 유튜브 -->
                <div class="youtube">
                    <h2>YOUTUBE</h2>
                    <p>테스트</p>
                    <img class="cross" src="../../assets/img/site_main_cross.png" alt="">
                    <div class="youtube_cont">
                        <div class="youtube_inner">

                        </div>
                    </div>
                </div>

                <!-- 공지사항 -->
                <div class="notice section_ctrl">
                    <h2>NOTICE</h2>
                    <p>테스트</p>
                    <img class="cross" src="../../assets/img/site_main_cross.png" alt="">
                    <div class="notice_cont">
                        <div class="notice_quick_cont">
                            <img src="#" alt="">
                            <p>NOTICE</p>
                            <h2>공지사항</h2>
                            <a href="#">더보기</a>
                        </div>
                        <div class="notice_list_cont">
                            <ul>
                                <li>DATE</li>
                                <li>내용</li>
                            </ul>
                            <ul>
                                <li>2022.09.15</li>
                                <li>너만 모는 한가지 사ㄹ...!</li>
                            </ul>
                            <ul>
                                <li>2022.09.15</li>
                                <li>너만 모는 한가지 사ㄹ...!</li>
                            </ul>
                            <ul>
                                <li>2022.09.15</li>
                                <li>너만 모는 한가지 사ㄹ...!</li>
                            </ul>
                            <ul>
                                <li>2022.09.15</li>
                                <li>너만 모는 한가지 사ㄹ...!</li>
                            </ul>
                            <ul>
                                <li>2022.09.15</li>
                                <li>너만 모는 한가지 사ㄹ...!</li>
                            </ul>
                            <ul>
                                <li>2022.09.15</li>
                                <li>너만 모는 한가지 사ㄹ...!</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 아티스트 -->
                <div class="artist section_ctrl2">
                    <h2>NOTICE</h2>
                    <p>테스트</p>
                    <img class="cross" src="../../assets/img/site_main_cross.png" alt="">
                    <div class="artist_cont">
                        <div class="artist_list_item_01">
                            <img src="#" alt="프로파일">
                            <img src="#" alt="하트">
                        </div>
                        <div class="artist_list_item_02">
                            <img src="#" alt="프로파일">
                            <img src="#" alt="하트">
                        </div>
                        <div class="artist_list_item_03">
                            <img src="#" alt="프로파일">
                            <img src="#" alt="하트">
                        </div>
                        <div class="artist_list_item_04">
                            <img src="#" alt="프로파일">
                            <img src="#" alt="하트">
                        </div>
                        <div class="artist_list_item_05">
                            <img src="#" alt="프로파일">
                            <img src="#" alt="하트">
                        </div>
                    </div>
                </div>

                <!-- SEARCH -->
                <div class="search">
                    <h2>SEARCH</h2>
                    <p>테스트</p>
                    <img class="cross" src="../../assets/img/site_main_cross.png" alt="">
                    <div class="search_cont">
                        <select name="youGender" id="youGender" class="input__style" required>
                            <option value="male">남자</option>
                            <option value="female">여자</option>
                        </select>
                        <input type="text">
                    </div>
                </div>
            </div>
        </div>
        <?php include "../include/footer.php" ?>
    </div>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            dataType: "json",
            
            url: "https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults=10&q=%EB%8B%A4%EA%BE%B8&type=video&key=AIzaSyAp7wwVT_hzfA2mSXrrh-1ZUx7QCX3ogtk",
            contentType : "application/json",
            success : function(data) {
                data.items.forEach(function(element, index) {
                    $('.youtube_inner').append('<div class="youtube_item"><iframe width="560" height="315" src="https://www.youtube.com/embed/'+element.id.videoId+'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>');
                });
            },
            complete : function(data) {
            },
            error : function(xhr, status, error) {
                console.log("유튜브 요청 에러: "+error);
            }
        });
    });
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



    //스크롤 값에 따라 변경할 클래스 및 효과
    const header = document.querySelector(".header")
    const particle = document.querySelectorAll(".particle")
    const plzScroll = document.querySelector(".scroll")
    const scrollUp = document.querySelector(".btn_scroll_top")
    const profileClose = document.querySelector(".profile_cont_close")
    const profile = document.querySelector(".profile_cont")

    // let switcher = 0;
    function scroll() {
        let scrollTop = window.pageYoffest || document.documentElement.scrollTop || window.screenY;
        
        particle.forEach((e, i) => {
            if (scrollTop >= 100) {
                header.classList.add("header_ctrl");
                plzScroll.style.opacity = "0";
                e.style.opacity = "0.2";
                // let switcher = 1;
                
            } else {
                header.classList.remove("header_ctrl");
                plzScroll.style.opacity = "1";
                e.style.opacity = "1"
                // let switcher = 0;
            }
        })
        requestAnimationFrame(scroll);
    }
    scroll(); //함수 호출

    // console.log(switcher);

    // function bouncingEffect(){
    //     profile.classList.remove("anim");
    //     void profile.offsetWidth;
    //     profile.classList.add("anim");
    // }
    // if(switcher==0){
    //     bouncingEffect();
    // } else{
    //     bouncingEffect();
    // }


    // 스크롤 TOP 선택시 부드럽게 이동
    scrollUp.addEventListener("click", (e) => {
        e.preventDefault(); //이벤트가 발생했을때 걸려있는 링크 이동을 차단 시킴
        window.scrollTo({
            left: 0,
            top: 0,
            behavior: "smooth"
        });
    })

    // 스티커 선택
    const stickerAll = document.querySelectorAll(".sticker")
    const size = document.querySelectorAll(".size")

    
    
    stickerAll.forEach((item,where)=>{
        item.onmousedown = function (event) {
            // size.forEach((e,i)=>{
            //     e.addEventListener("click", ()=>{
            //         let sizeInfo = i+1;
            //         console.log(sizeInfo)
            //     })
            // })
            let shiftX = event.clientX - item.getBoundingClientRect().left;
            let shiftY = event.clientY - item.getBoundingClientRect().top;
    
            item.style.position = 'absolute';
            item.style.border = '1px dashed #721aff';
            item.style.borderRadius = '15px';
            item.style.zIndex = 100;
            document.body.append(item);
    
            moveAt(event.pageX, event.pageY);
    
            // 초기 이동을 고려한 좌표 (pageX, pageY)에서
            // 공을 이동합니다.
            function moveAt(pageX, pageY) {
                item.style.left = pageX - shiftX + 'px';
                item.style.top = pageY - shiftY + 'px';
            }
    
            function onMouseMove(event) {
                moveAt(event.pageX, event.pageY);
            }
    
            // mousemove로 공을 움직입니다.
            document.addEventListener('mousemove', onMouseMove);
    
            // 공을 드롭하고, 불필요한 핸들러를 제거합니다.
            item.onmouseup = function () {
                document.removeEventListener('mousemove', onMouseMove);
                item.style.border = '1px solid rgba(255, 255, 255, 0)';
                item.onmouseup = null;
            };
    
        };
    
        item.ondragstart = function () {
            return false;
        };
    })

    //텍스트 에디터
    const editor = document.getElementById('editor');
    const btnBold = document.getElementById('btn-bold');
    const btnItalic = document.getElementById('btn-italic');
    const btnUnderline = document.getElementById('btn-underline');
    const btnStrike = document.getElementById('btn-strike');
    const btnOrderedList = document.getElementById('btn-ordered-list');
    const btnUnorderedList = document.getElementById('btn-unordered-list');

    const btnImage = document.getElementById('btn-image');
    const imageSelector = document.getElementById('img-selector');

    btnBold.addEventListener('click', function () {
        setStyle('bold');
    });

    btnItalic.addEventListener('click', function () {
        setStyle('italic');
    });

    btnUnderline.addEventListener('click', function () {
        setStyle('underline');
    });

    btnStrike.addEventListener('click', function () {
        setStyle('strikeThrough')
    });

    btnOrderedList.addEventListener('click', function () {
        setStyle('insertOrderedList');
    });

    btnUnorderedList.addEventListener('click', function () {
        setStyle('insertUnorderedList');
    });

    btnImage.addEventListener('click', function () {
        imageSelector.click();
    });

    imageSelector.addEventListener('change', function (e) {
        const files = e.target.files;
        if (!!files) {
            insertImageDate(files[0]);
        }
    });

    editor.addEventListener('keydown', function () {
        checkStyle();
    });

    editor.addEventListener('mousedown', function () {
        checkStyle();
    });
    
    
    function setStyle(style) {
        document.execCommand(style);
        focusEditor();
        checkStyle();
    }
    
    function insertImageDate(file) {
        const reader = new FileReader();
        reader.addEventListener('load', function (e) {
            focusEditor();
            document.execCommand('insertImage', false, `${reader.result}`);
        });
        reader.readAsDataURL(file);
    }

    function checkStyle() {
        if (isStyle('bold')) {
            btnBold.classList.add('active');
        } else {
            btnBold.classList.remove('active');
        }
        if (isStyle('italic')) {
            btnItalic.classList.add('active');
        } else {
            btnItalic.classList.remove('active');
        }
        if (isStyle('underline')) {
            btnUnderline.classList.add('active');
        } else {
            btnUnderline.classList.remove('active');
        }
        if (isStyle('strikeThrough')) {
            btnStrike.classList.add('active');
        } else {
            btnStrike.classList.remove('active');
        }
        if (isStyle('insertOrderedList')) {
            btnOrderedList.classList.add('active');
        } else {
            btnOrderedList.classList.remove('active');
        }
        if (isStyle('insertUnorderedList')) {
            btnUnorderedList.classList.add('active');
        } else {
            btnUnorderedList.classList.remove('active');
        }
    }

    function isStyle(style) {
        return document.queryCommandState(style);
    }

    function setStyle(style) {
        document.execCommand(style);
        focusEditor();
    }

    // 버튼 클릭 시 에디터가 포커스를 잃기 때문에 다시 에디터에 포커스를 해줌
    function focusEditor() {
        editor.focus({preventScroll: true});
    }

    // 마우스를 트래킹하는 파티클
    // document.querySelector(".wrap").addEventListener("mousemove", (e) => {
    //         //마우스 좌표 값
    //         let mousePageX = e.pageX;
    //         let mousePageY = e.pageY;

    //         // 전체 가로
    //         let centerPageX = window.innerWidth/2 - mousePageX;
    //         let centerPageY = window.innerHeight/2 - mousePageY;


    //         //포스트 커버 썸내일 움직이기
    //         for(let q=1; q<=4; q++){
    //             document.querySelectorAll(".particle").forEach((e,i)=>{
    //                 e.style.transform = "translate("+ -centerPageX/(q*4)+"px, "+ -centerPageY/(q*4)+"px)";
    //             })
    //         }
    //     }) 
</script>
<!-- <script src="../../assets/javascript/board.js"></script> -->
</html>