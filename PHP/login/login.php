<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>꾸다 - 로그인</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    <div class="wrap">
        <div class="login__popup">
            <div class="login__inner">
                <div class="login__header">
                    <img src="../../assets/img/login_logo.png" alt="">
                    <h3>LOGIN</h3>
                    <div class="login-txt">
                        <p>개인정보를 이곳에 입력해주세요!</p>
                    </div>
                    <img class="login-cross"src="../../assets/img/login_cross.png" alt="">
                </div>
                <div class="login__cont">
                    <form name="login" action="../login/loginSave.php" method="post">
                        <fieldset>
                            <legend class="ir">로그인 입력폼</legend>
                            <div class="Email">
                                <label for="youEmail" class="ir">이메일</label>
                                <input type="email" name="youEmail" id="youEmail" placeholder="이메일" class="input__style" required>
                            </div>
                            <div class="Pass">
                                <label for="youPass" class="ir">비밀번호</label>
                                <input type="password" name="youPass" id="youPass" placeholder="비밀번호" class="input__style" required>
                                
                            </div>
                            <div class="btom-btn">
                                <a href="../login/findID.php">아이디 찾기</a>
                                <a href="../login/findPass.php">비밀번호 찾기</a>
                                <a href="../join/joinAgree.php">회원가입</a>
                            </div>
                            <hr class="login-divider">
                            <button type="submit" class="input__Btn">로그인</button>
                        </fieldset>
                    </form>
                </div>
                <button type="button" class="btn-close"><img src="../../assets/img/login_close.png" alt=""></button>
            </div>
        </div>
    </div>
</body>
<script src="../../assets/javascript/board.js"></script>
</html>