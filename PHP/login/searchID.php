
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
                <p class="comple-word">당신의 아이디는</p>
<?php
    include "../../connect/connect.php";
    // include "../../connect/session.php";
    
    if($_POST["youBirth"] == "" || $_POST["youName"] == ""){
        echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
    }else{
    
        $youBirth = $_POST['youBirth'];
        $youName = $_POST['youName'];
        // $youEmail = $_POST['youEmail'];
        // echo $youEmail;
    
        $sql = "SELECT * FROM myMember WHERE youBirth = '{$youBirth}' AND youName = '{$youName}'";
        // $result -> query($sql);
        $result = $connect -> query($sql);
        // echo $sql;
        $info = $result -> fetch_array(MYSQLI_ASSOC);
    
        if($info['youBirth'] == $youBirth && $info['youName'] == $youName ){
            echo "<div class='search-comple'>' ".$info['youEmail']." '</div>";
        }else{
            echo "<script>alert('생일과 이름을 다시 확인해주세요 :3.'); history.back();</script>";
        }
    }
?>

                    </div>
                    <hr class="login-divider">
                    <button type="submit" class="input__Btn"><a href="login.php">로그인하러가기</a></button>
                    <button type="submit" class="input__Btn white"><a href="../main/main.php">닫기</a></button>
            </div>
        </div>
    </div>
</body>
</html>