<?php
    include "../../connect/connect.php";
    include "../../connect/session.php";
    include "../../connect/sessionCheck.php";

  $youName = $_SESSION[ 'youName' ];
  if ( is_null( $youName ) ) {
    header( 'Location: login.php' );
  }
  $youPass = $_POST[ 'youPass' ];
  $youPassChege = $_POST[ 'youPassChange' ];
  $youPassChangePW = $_POST[ 'youPassChangePW' ];
  
  $youPass = sha1("web".$youPass);

//   var_dump($youPass, $youPassChege, $youPassChangePW);
  if ( !is_null( $youPass ) ) {
    $sql = "SELECT youPass FROM myMember WHERE youName = '" . $youName . "'";
    $result = $connect -> query($sql);
    // var_dump($result);
    while ( $info = $result -> fetch_array(MYSQLI_ASSOC) ) {
      $byePass = $info[ 'youPass' ];
      var_dump($youPass);
      var_dump($byePass);
    }
    if ( $youPass == $byePass ){
      if ( $youPassChege == $youPassChangePW ) {
        $newPass = sha1("web".$youPassChege);
        $sqlPass = "UPDATE myMember SET youPass = '" . $newPass . "' WHERE youName = '" . $youName . "'";
        $result = $connect -> query($sqlPass);
        // echo("잘 됫슴");
        Header("Location: myPage.php");
      } else {
        echo "<script>alert('새 비밀번호를 다시 확인해주세요.'); history.back(1)</script>";
        exit;
      }
    } else {
      echo "<script>alert('입력하신 비밀번호가 다릅니다.'); history.back(1)</script>";
      exit;
    }
  }
?>