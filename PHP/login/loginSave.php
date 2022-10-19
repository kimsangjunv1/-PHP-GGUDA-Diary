<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 꾸다 - 인덱스 </title>
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
                   
<?php
    include "../../connect/connect.php";
    include "../../connect/session.php";

    $youEmail = $_POST['youEmail'];
    $youPass = $_POST['youPass'];

    // echo $youEmail,$youPass;

    // 여러분의 정보 ---> 쿠키() / 세션 

    function msg($alert){
        echo "<p class ='fail'>($alert)</p>";
    }

    // 이메일 검사
    if( !filter_var($youEmail, FILTER_VALIDATE_EMAIL)){
        echo "<p class ='fail'>이메일이 잘못 되었습니다. <br>올바른 이메일을 적어주세요 ;3</p>";
        exit;
    }

     // 비밀번호 검사
     if( $youPass == null || $youPass == '' ){
        echo "<p class ='fail'>비밀번호가 잘못 되었습니다. <br>올바른 비밀번호를 적어주세요 ;3</p>";
        exit;
    }

    // 데이터 가져오기 --> 유효성 검사 --> 데이터 조회 --> 로그인
    $sql = "SELECT myMemberID, youEmail, youImageFile, youName, youPass FROM myMember WHERE youEmail = '$youEmail' AND youPass = '$youPass'";
    $result = $connect -> query($sql);

    if($result){
        $count = $result -> num_rows;

        if($count == 0){
            echo "<p class ='fail'>이메일 또는 비밀번호가 틀렸습니다 ;3</p>";
            
        }else{
            $info = $result -> fetch_array(MYSQLI_ASSOC);

            $_SESSION['myMemberID'] = $info['myMemberID'];
            $_SESSION['youEmail'] = $info['youEmail'];
            $_SESSION['youName'] = $info['youName'];
            $_SESSION['youImageFile'] = $info['youImageFile'];

            // echo "<pre>";
            // var_dump($info);
            // echo "</pre>";

            // location.href = "../main/main.php";
            Header("Location: ../main/main.php");
            // msg("로그인 성공 :3");
        }
    }else{
        msg("에러발생 - 관리자에게 문의해주세요 :3");
        Header("Location: ../main/main.php");
    }
?>
                    <form name="login" action="loginSave.php" method="post">
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
                                <a href="#">아이디 찾기</a>
                                <a href="#">비밀번호 찾기</a>
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