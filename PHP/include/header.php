<div class="hamburger_menu">
    <img class="header_menu_close" src="../../assets/img/login_cross.png" alt="">
    <a href="../board/board.php">공지사항</a>
    <a href="../event/event.php">이벤트</a>
    <!-- <a href="../rank/rank.php">이달의 순위</a> -->
    <a href="../deco/deco.php">다이어리 만들기</a>
    <a href="../deco/deco.php">꾸미기/자랑</a>
    <a href="../tip/tip.php">정보</a>
    <a href="../faq/faq.php">FAQ</a>
</div>
<header class="header">
    <div class="header_inner">
        <a href="../main/main.php"><img src="../../assets/img/site_header_logo.png" alt="logo"></a>
        <img class="hamburger_menu_open" src="../../assets/img/hamburger_btn.png" alt="">
        <a href="../board/board.php">공지사항</a>
        <a href="../event/event.php">이벤트</a>
        <!-- <a href="../rank/rank.php">이달의 순위</a> -->
        <a href="../deco/decoDiary.php">다이어리 만들기</a>
        <a href="../deco/deco.php">꾸미기/자랑</a>
        <a href="../tip/tip.php">정보</a>
        <a href="../faq/faq.php">FAQ</a>
    </div>
</header>
<div class="profile_cont" alt="로그인한 프로파일 이미지">
    <?php if( isset($_SESSION['myMemberID'])){ ?>
        <span><a href="../login/logout.php" class="profile_cont_close"><img src="../../assets/img/login_cross.png" alt="로그아웃"></a></span>
        <!-- <img src="../../assets/img/site_header_profile.png" alt="logo"> -->
        <?php echo "<img src='../../assets/img/blog/".$_SESSION['youImageFile']."' alt='프로필 이미지' class='profile_image'>"; ?>
        <?php
            echo "<p>";
            echo "<a href='../mypage/myPage.php' class='mypage__btn'></a>안녕하세요 <em>".$_SESSION['youName']."님!</em>";
            echo "</p>";
            ?>
            <span class="btn_scroll_top">
                <a href="#">^</a>
            </span>
    <?php } else { ?>
        <a style="display:none" href="../login/logout.php" class="profile_cont_close"><img src="../../assets/img/login_cross.png" alt="로그아웃"></a>
        <img src="../../assets/img/site_header_profile_no.png" style="margin-left:5px; width:50px; border-radius:100px;"alt="logo">
        <p class="loginplz" style="margin-left:0; cursor:pointer;">여기를 눌러 로그인!</p>
        <span class="btn_scroll_top">
            <a href="#">^</a>
        </span>
        <script>
            document.querySelector(".btn-close").addEventListener("click", ()=>{
                document.querySelector(".login__popup").classList.remove("show");
            })

            document.querySelector(".loginplz").addEventListener("click", ()=>{
                document.querySelector(".login__popup").classList.add("show");
            })
        </script>
    <?php } ?> 
</div>
<script>
    //모바일시 햄버거 메뉴 구현
    const menuOpen = document.querySelector(".hamburger_menu_open");
    menuOpen.addEventListener("click", ()=>{
        document.querySelector(".hamburger_menu").style.display="flex"
        document.querySelector("body").style.overflow="hidden"
    })
    const menuClose = document.querySelector(".header_menu_close");
    menuClose.addEventListener("click", ()=>{
        document.querySelector(".hamburger_menu").style.display="none"
        document.querySelector("body").style.overflow="auto"
    })
</script>