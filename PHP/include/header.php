<div class="hamburger_menu">
    <img class="header_menu_close" src="../../assets/img/login_cross.png" alt="">
    <p>공지사항</p>
    <p>이벤트</p>
    <p>이달의 순위</p>
    <p>일기쓰기</p>
    <p>꾸미기</p>
    <p>정보</p>
    <p>고객센터</p>
</div>
<div class="header">
    <div class="header_inner">
        <a href="../main/main.php"><img style="padding-right: 20px;" src="../../assets/img/site_header_logo.png" alt="logo"></a>
        <img class="hamburger_menu_open" src="../../assets/img/hamburger_btn.png" alt="">
        <a href="../board/board.php">공지사항</a>
        <a href="../board/board.php">이벤트</a>
        <a href="../board/board.php">이달의 순위</a>
        <a href="../board/board.php">일기쓰기</a>
        <a href="../board/board.php">꾸미기</a>
        <a href="../board/board.php">정보</a>
        <a href="../board/board.php">고객센터</a>
    </div>
</div>
<div class="profile_cont" alt="로그인한 프로파일 이미지">
    <?php if( isset($_SESSION['myMemberID'])){ ?>
        <span><a href="../login/logout.php" class="profile_cont_close"><img src="../../assets/img/login_cross.png" alt="로그아웃"></a></span>
        <!-- <img src="../../assets/img/site_header_profile.png" alt="logo"> -->
        <?php echo "<img src='../../assets/img/blog/".$_SESSION['youImageFile']."' alt='프로필 이미지' class='profile_image'>"; ?>
        <?php
            echo "<p>";
            echo "안녕하세요 ".$_SESSION['youName']."님!";
            echo "</p>";
            ?>
            <span class="btn_scroll_top">
                <a href="#">^</a>
            </span>
    <?php } else { ?>
        <a style="display:none" href="../login/logout.php" class="profile_cont_close"><img src="../../assets/img/login_cross.png" alt="로그아웃"></a>
        <img src="../../assets/img/site_header_profile_no.png" class="loginplz" alt="logo">
        <p>여기를 눌러 로그인!</p>
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