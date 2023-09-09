<?php 
    include "../../connect/connect.php";
    include "../../connect/session.php";
    include "../../connect/sessionCheck.php";

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
    <title>마이페이지</title>
    <link rel="stylesheet" href="../../assets/css/board.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/mypage.css">
</head>
<body>
    <!-- 프로필 변경 -->
    <div class="login__popup profill">
        <div class="login__inner">
            <div class="login__header">
                <img src="../../assets/img/login_logo.png" alt="">
                <h3>프로필 사진 변경</h3>
                <div class="login-txt">
                    <p>프로필 사진을 변경해주세요 :3</p>
                </div>
                <img class="login-cross"src="../../assets/img/login_cross.png" alt="">
            </div>
            <div class="login__cont">
                <form name="photoChange" action="photoChange.php" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend class="ir">사진 변경</legend>
                        <div class="Profile_choose">
                            <label class="file_choose"for="youImage">파일선택 : </label>
                            <!-- <label for="youImage">Browse...</label> -->
                            <input type="file" name="changFile" id="youImage" accept=".jpg, .jpeg, .png, .gif" placeholder="jpg, gif, png 파일만 넣어주세요!">
                        </div>
                        <hr class="login-divider">
                        <button type="submit" class="input__Btn">변경하기</button>
                    </fieldset>
                </form>
            </div>
            <button type="button" class="btn-close"><img src="../../assets/img/login_close.png" alt=""></button>
        </div>
    </div>

    <!-- 비밀번호 변경 -->
    <div class="login__popup pass">
        <div class="login__inner">
            <div class="login__header">
                <img src="../../assets/img/login_logo.png" alt="">
                <h3>비밀번호 변경</h3>
                <div class="login-txt">
                    <p>비밀번호를 변경해주세요 :3</p>
                </div>
                <img class="login-cross"src="../../assets/img/login_cross.png" alt="">
            </div>
            <div class="login__cont">
                <form name="login" action="passChange.php" method="post">
                    <fieldset>
                        <legend class="ir">로그인 입력폼</legend>
                        <div class="Pass">
                            <label for="youPass" class="ir">비밀번호</label>
                            <input type="password" name="youPass" id="youPass" placeholder="비밀번호" class="input__style" required>
                        </div>
                        <div class="PassCh">
                            <label for="youPassChege" class="ir">변경 비밀번호</label>
                            <input type="password" name="youPassChange" id="youPass" placeholder="비밀번호" class="input__style" required>
                        </div>
                        <div class="PassCh">
                            <label for="youPassChangePW" class="ir">변경 비밀번호 확인</label>
                            <input type="password" name="youPassChangePW" id="youPass" placeholder="비밀번호" class="input__style" required>
                        </div>
                        <hr class="login-divider">
                        <button type="submit" class="input__Btn">확인</button>
                    </fieldset>
                </form>
            </div>
            <button type="button" class="btn-close"><img src="../../assets/img/login_close.png" alt=""></button>
        </div>
    </div>

    <!-- 생년월일 변경 -->
    <div class="login__popup birth">
        <div class="login__inner">
            <div class="login__header">
                <img src="../../assets/img/login_logo.png" alt="">
                <h3>생년 월일 변경</h3>
                <div class="login-txt">
                    <p>생년 월일을 변경해주세요 :3</p>
                </div>
                <img class="login-cross"src="../../assets/img/login_cross.png" alt="">
            </div>
            <div class="login__cont">
                <form name="login" action="birthChange.php" method="post">
                    <fieldset>
                        <div class="Birth">
                            <label for="youBirth" class="ir">년도 - 월 - 일</label>
                            <input type="text" name="youBirthChange" id="youBirth" placeholder="1997-08-09" class="input__style" required>
                            <p class="msg" id="youBirthOKComment"><!--- * 올바른 년도를 골라주세요.---></p>
                        </div>
                        <hr class="login-divider">
                        <button type="submit" class="input__Btn">변경하기</button>
                    </fieldset>
                </form>
            </div>
            <button type="button" class="btn-close"><img src="../../assets/img/login_close.png" alt=""></button>
        </div>
    </div>

    <!-- 닉네임 변경 -->
    <div class="login__popup name">
        <div class="login__inner">
            <div class="login__header">
                <img src="../../assets/img/login_logo.png" alt="">
                <h3>닉네임 변경</h3>
                <div class="login-txt">
                    <p>닉네임을 변경해주세요 :3</p>
                </div>
                <img class="login-cross"src="../../assets/img/login_cross.png" alt="">
            </div>
            <div class="login__cont">
                <form name="login" action="nameChange.php" method="post">
                    <fieldset>
                        <legend class="ir">로그인 입력폼</legend>
                            <div class="name">
                                <label for="youName" class="ir">이름</label>
                                <input type="text" name="youNameChange" id="youName" placeholder="군맨두" class="input__style" required>
                            </div>
                        <hr class="login-divider">
                        <button type="submit" class="input__Btn">변경하기</button>
                    </fieldset>
                </form>
            </div>
            <button type="button" class="btn-close"><img src="../../assets/img/login_close.png" alt=""></button>
        </div>
    </div>

    <!-- 내 답변 변경 -->
    <div class="login__popup Qa">
        <div class="login__inner">
            <div class="login__header">
                <img src="../../assets/img/login_logo.png" alt="">
                <h3>답변 변경</h3>
                <div class="login-txt">
                    <p>답변을 변경해주세요 :3</p>
                </div>
                <img class="login-cross"src="../../assets/img/login_cross.png" alt="">
            </div>
            <div class="login__cont">
                <form name="login" action="QAchange.php" method="post">
                    <fieldset>
                        <legend class="ir">로그인 입력폼</legend>
                            <div class="QA">
                                <select name="searchQA" id="searchQA" class="input__style" required>
                                    <option value="QA">나의 보물 1호</option>
                                    <option value="OP">싫어하는 음식</option>
                                    <option value="OG">당신의 제일 큰 목표</option>
                                </select>
                                <p class="msg" id="searchQAComment"><!--- * 질문을 설정해주세요.---></p>
                                </div>
                                <div class="youQA">
                                    <label for="youQA" class="ir">답변</label>
                                    <input type="text" name="youQAChange" id="youQA" placeholder="ex:나 자신" class="input__style" required>
                                <p class="msg" id="youQAOKComment"><!--- * 질문에 대한 답변을 작성해주세요.---></p>
                            </div>  
                        <hr class="login-divider">
                        <button type="submit" class="input__Btn">변경하기</button>
                    </fieldset>
                </form>
            </div>
            <button type="button" class="btn-close"><img src="../../assets/img/login_close.png" alt=""></button>
        </div>
    </div>


    <!-- 닉네임 변경 -->
    <div class="login__popup delete" style="border: none; border-radius:0px">
        <div class="login__inner">
            <div class="login__header">
                <img src="../../assets/img/login_logo.png" alt="">
                <h3>아이디 삭제</h3>
                <div class="login-txt">
                    <p>다시한번 확인하기 위해<br>하단의 입력칸에 [삭제하겠습니다]를 입력해주세요!</p>
                </div>
                <img class="login-cross"src="../../assets/img/login_cross.png" alt="">
            </div>
            <div class="login__cont">
                <form name="login" action="deleteMyID.php" method="get">
                    <fieldset>
                        <legend class="ir">로그인 입력폼</legend>
                            <div class="name">
                                <label for="youDeleteAnswer" class="ir">이름</label>
                                <input type="text" name="youDeleteAnswer" id="youDeleteAnswer" placeholder="삭제하겠습니다" class="input__style" required>
                            </div>
                        <hr class="login-divider">
                        <button type="submit" class="input__Btn">삭제확인</button>
                    </fieldset>
                </form>
            </div>
            <button type="button" class="btn-close"><img src="../../assets/img/login_close.png" alt=""></button>
        </div>
    </div>


    <!-- 스크롤 -->
    <div style="display:none" class="scroll">
        <p>아래로 스크롤 해주세요.</p>
        <img src="../../assets/img/site_intro_scroll.png" alt="">
    </div>

    <!-- 메인 -->
    <div class="wrap">
        <div class="site">
            <?php include "../include/header.php" ?>

            <div class="board">
                <div class="board_info">
                    <img src="../../assets/img/site_main_mypage.png" class="header_icon_main" alt="">
                    <img src="../../assets/img/site_main_mypage_heart.png" class="header_icon_01" alt="">
                    <img src="../../assets/img/site_main_mypage_heart.png" class="header_icon_02" alt="">
                    <img src="../../assets/img/site_main_mypage_heart.png" class="header_icon_03" alt="">
                    <img src="../../assets/img/site_main_mypage_heart.png" class="header_icon_04" alt="">
                    <img src="../../assets/img/site_main_mypage_heart.png" class="header_icon_05" alt="">
                    
                    <h2>MY PAGE</h2>
                    <p>내 정보를 확인해주세요!</p>
                    <img src="../../assets/img/site_board_notice_cross.png" alt="">
                </div>
                <div class="myPage__view">   
                    <div class="myPage__inner">
                        <div class="myPage__menu">
<?php
    // 두개의 테이블 join
    $myMemberID = $_SESSION['myMemberID'];
    $sql = "SELECT myMemberID, youEmail, youImageFile, youName, youPass, youBirth FROM myMember WHERE myMemberID = '$myMemberID'";
    $result = $connect -> query($sql);
    // $sql = "SELECT b.myBoardID, b.boardTitle, b.boardContents, m.youName, m.youImageFile, b.boardImgFile, b.regTime, b.boardView, b.boardSection FROM myBoard b JOIN myMember m ON (b.myMemberID = m.myMemberID) WHERE b.myMemberID LIKE '$myMemberID' ORDER BY myBoardID DESC LIMIT 0, 3";
    // var_dump($sql);
    $info = $result -> fetch_array(MYSQLI_ASSOC);
    // $count = $result -> num_rows;
    echo "<div class='myPage__img__cont'>";
    echo "<img src='../../assets/img/blog/".$info['youImageFile']."' alt='' class='myPage__img'>";
    echo "<h4 class='profile__image__mod'>+</h4>";
    echo "</div>";
    echo "<p class='profile__title'>".$info['youName']."</p>";
    echo "<p class='profile__title'>".$info['youEmail']."</p>";
    echo "<p class='profile__title'>내 생년 월일 : ".$info['youBirth']."</p>";  
?>
                            <!-- <div class="myPage__img__cont">
                                <img src="../../assets/img/test/12.png" alt="" class="myPage__img">
                                <h4 class="profile__image__mod">+</h4>
                            </div>
                            <p class="profile__title">너무추우어</p>
                            <p class="profile__title">to_before@naver.com</p> -->
                            <div class="list" style="display:none">
                                <div>
                                    <span>댓글</span>
                                    <span></span>
                                </div>
                                <div>
                                    <span>게시물</span>
                                    <span>1개</span>
                                </div>
                                <div>
                                    <span>방문수</span>
                                    <span>1개</span>
                                </div>
                            </div>
                            <hr class="profile_hr">
                            <p class="profile_alert">꼼꼼히 확인해주세요!</p>
                        </div>
                        <div class="myPage__cont">
                            <div class="myPage__cont__board">
                                <h2 class="myPage__title">내 게시물</h2>
                                <div class="new_board">


<?php
    // 두개의 테이블 join
    $myMemberID = $_SESSION['myMemberID'];

    $sql = "SELECT b.myTipID, b.tipTitle, b.tipSection, b.tipSection, b.tipContents, b.regTime ,b.tipImgFile FROM myTip b JOIN myMember m ON (b.myMemberID = m.myMemberID) WHERE b.myMemberID LIKE '$myMemberID' ORDER BY myTipID DESC LIMIT 0, 3";
    // var_dump($sql);
    // $sql = $sql."ORDER BY myBoardID DESC LIMIT {$viewLimit}, {$viewNum}";
        $count = $result -> num_rows;
    // $result = $connect -> query($sql);

    // $sql = "ALTER TABLE myBoard AUTO_INCREMENT = 1";
    $connect -> query($sql);
    // $sql = "SELECT b.myBoardID, b.boardTitle, b.boardContents, m.youName, m.youImageFile, b.regTime, b.boardView, b.boardSection FROM myBoard b JOIN myMember m ON(b.myMemberID = m.myMemberID) WHERE myMemberID = '$myMemberID' ORDER BY boardView DESC LIMIT 0, 3";
    $result = $connect -> query($sql);
    $count = $result -> num_rows;
    if($result){
        $viewCount = $result -> num_rows;
        if($viewCount > 0){
            for($i=1; $i<=3; $i++){
                $info = $result -> fetch_array(MYSQLI_ASSOC);
                echo "<a href='../../PHP/tip/tipView.php?myTipID={$info['myTipID']}' class='myPage_myboard_list'>";
                echo "<p class='myPage_myboard_list_num'>".$info['myTipID']."</p>";
                echo "<div class='info_cont'>";
                echo "<p class='myPage_section'>".$info['tipSection']."</p>";
                // echo "<h2>".$info['boardTitle']."</h2>";
                // echo "<h2>".$info['boardContents']."</h2>";
                echo "</div>";
                echo "<div class='info_cont2'>";
                // echo "<img src='../../assets/img/blog/".$info['youImageFile']."' alt='프로필 이미지'>";
                echo "<p class='cont_date'>".date('Y-m-d H:i',$info['regTime'])."</p>";
                echo "<p class='cont_view'>".$info['tipTitle']."</p>";
                echo "<p class='cont_name'>".$info['tipContents']."</p>";
                echo "</div>";
                echo "<div style='background-image:url(../../assets/img/blog_tip/".$info['tipImgFile']."' class='myPage_item_background')'></div>";
                // echo "<img class='myPage_item_background' src='../../assets/img/blog_board/".$info['boardImgFile']."' alt='게시물 이미지'>";
                echo "</a>";
            }
        }
        else {
            echo "<div class='rank_item'>게시글 오류입니다. 관리자에게 문의하세요!</div>";
        }
    }
?>
                              <!-- s -->

                            </div>
                            <h2 class="myPage__title">내 정보 수정</h2>
                            <div class="myPlage__cont__item profill">
                                <p>프로필 사진 변경</p>
                                <p>></p>
                            </div>
                            <div class="myPlage__cont__item pass">
                                <p>비밀번호 변경</p>
                                <p>></p>
                            </div>
                            <div class="myPlage__cont__item birth">
                                <p>생년월일 변경</p>
                                <p>></p>
                            </div>
                            <div class="myPlage__cont__item name">
                                <p>닉네임 변경</p>
                                <p>></p>
                            </div>
                            <div class="myPlage__cont__item qa">
                                <p>답변 변경</p>
                                <p>></p>
                            </div>
                            <div class="myPlage__cont__item delete">
                                <p>아이디 삭제 변경</p>
                                <p>></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "../include/footer.php" ?>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    // 생년월일 유효성 검사
    let getYouBirth = RegExp(/^(19[0-9][0-9]|20\d{2})-(0[0-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/);
    if(!getYouBirth.test($("#youBirthChange").val())){
        $("#youBirthOKComment").text("올바른 생년월일(YYYY-MM-DD)을 적어주세요.");
        // return false;
    }

    const loginClose = document.querySelectorAll(".btn-close");

    const profillPop = document.querySelector(".login__popup.profill");
    const passPop = document.querySelector(".login__popup.pass");
    const birthPop = document.querySelector(".login__popup.birth");
    const namePop = document.querySelector(".login__popup.name");
    const qaPop = document.querySelector(".login__popup.Qa");
    const deletePop = document.querySelector(".login__popup.delete");
    
    const profileBtnMain = document.querySelector(".profile__image__mod");
    const profillBtn = document.querySelector(".myPlage__cont__item.profill");
    const passBtn = document.querySelector(".myPlage__cont__item.pass");
    const birthBtn = document.querySelector(".myPlage__cont__item.birth");
    const nameBtn = document.querySelector(".myPlage__cont__item.name");
    const qaBtn = document.querySelector(".myPlage__cont__item.qa");
    const deleteBtn = document.querySelector(".myPlage__cont__item.delete");

    // loginClose.addEventListener("click", ()=>{
    //     document.querySelector(".login__popup").classList.remove("show");
    // })  

    loginClose.forEach((el,index)=>{
        el.addEventListener("click", ()=>{
            // console.log(index);
            document.querySelector(".login__popup:nth-child("+ (index+1) +")").classList.remove("show");
        })
    })
    
    profileBtnMain.addEventListener("click", ()=>{
        profillPop.classList.add("show");
    })

    profillBtn.addEventListener("click", ()=>{
        profillPop.classList.add("show");
    })
    passBtn.addEventListener("click", ()=>{
        passPop.classList.add("show");
    })
    birthBtn.addEventListener("click", ()=>{
        birthPop.classList.add("show");
    })
    nameBtn.addEventListener("click", ()=>{
        namePop.classList.add("show");
    })
    qaBtn.addEventListener("click", ()=>{
        qaPop.classList.add("show");
    })

    deleteBtn.addEventListener("click", ()=>{
        deletePop.classList.add("show");
    })


</script>
<script src="../../assets/javascript/board.js"></script>
<script src="../../assets/javascript/common.js"></script>
</html>