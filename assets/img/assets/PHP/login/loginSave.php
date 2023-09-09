<?php
    include "../../connect/connect.php";
    include "../../connect/session.php";

    $youEmail = $_POST['youEmail'];
    $youPass = $_POST['youPass'];
    
    $youPass = sha1("web".$youPass);
    // echo $youEmail,$youPass;

    // 여러분의 정보 ---> 쿠키() / 세션 

    function msg($alert){
        echo "<p class ='fail'>($alert)</p>";
    }

    // 이메일 검사
    if( !filter_var($youEmail, FILTER_VALIDATE_EMAIL)){
        // echo "<p class ='fail'>이메일이 잘못 되었습니다. <br>올바른 이메일을 적어주세요 ;3</p>";
        echo "<script>alert('이메일이 잘못되었네요, 확인해주세요 :3.'); history.back();</script>";
        exit;
    }

     // 비밀번호 검사
     if( $youPass == null || $youPass == '' ){
        echo "<script>alert('비밀번호가 잘못되었네요, 확인해주세요 :3.'); history.back();</script>";
        exit;
    }

    // 데이터 가져오기 --> 유효성 검사 --> 데이터 조회 --> 로그인
    $sql = "SELECT myMemberID, youEmail, youImageFile, youName, youPass FROM myMember WHERE youEmail = '$youEmail' AND youPass = '$youPass'";
    $result = $connect -> query($sql);

    if($result){
        $count = $result -> num_rows;

        if($count == 0){
            echo "<script>alert('비밀번호가 잘못되었네요, 확인해주세요 :3.'); history.back();</script>";
        
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