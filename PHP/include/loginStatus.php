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
            console.log("확인 : ",document.querySelector(".btn-close"))
            document.querySelector(".btn-close").addEventListener("click", ()=>{
                document.querySelector(".login__popup").classList.remove("show");
            })

            document.querySelector(".loginplz").addEventListener("click", ()=>{
                document.querySelector(".login__popup").classList.add("show");
            })
        </script>
    <?php } ?> 
</div>