<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN -  비밀번호 찾기</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    <div class="login__popup">
        <div class="login__inner">
            <div class="login__header">
                <img src="../../assets/img/search_logo.png" alt="">
                <h3>SEARCH</h3>
                <div class="login-txt">
                    <p>비밀번호 찾기 위한 정보를 입력해주세요!</p>  
                    <p class="fail">정보를 다시 확인해주세요!</p>
                </div>
                <img class="login-cross"src="../../assets/img/login_cross.png" alt="">
            </div>
            <div class="login__cont">
                <form name="search" action="searchPass.php" method="post">
                    <fieldset>
                        <legend class="ir">비밀번호 찾기를 위한 입력폼</legend>
                        <div class="Email">
                            <label for="youEmail" class="ir">이메일</label>
                            <input style="width:100%; /* display:block; */ margin-bottom: 20px;" type="email" name="youEmail" id="youEmail" placeholder="본인의 이메일" class="input__style" required>
                        </div>
                        <div class="youQA">
                            <label for="youQA" class="ir">답변</label>
                            <input type="text" name="youQA" id="youQA" placeholder="나의 보물 1호는?" class="input__style" required>
                        </div>  
                        <hr class="login-divider">
                        <button type="submit" class="input__Btn">비밀번호 찾기</button>
                    </fieldset>
                </form>
            </div>
            <button type="button" class="btn-close"><img src="../../assets/img/login_close.png" alt=""></button>
        </div>
    </div>
</body>
</html>