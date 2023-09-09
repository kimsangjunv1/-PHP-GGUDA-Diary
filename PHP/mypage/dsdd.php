<?php
  session_start();
  $session_username = $_SESSION[ 'username' ];
  if ( is_null( $session_username ) ) {
    header( 'Location: login.php' );
  }
  $current_password = $_POST[ 'current_password' ];
  $new_password = $_POST[ 'new_password' ];
  $new_password_confirm = $_POST[ 'new_password_confirm' ];
  if ( !is_null( $current_password ) ) {
    $jb_conn = mysqli_connect( 'localhost', 'codingfactory', '1234qwer', 'codingfactory.net_example' );
    $jb_sql = "SELECT password FROM member WHERE username = '" . $session_username . "';";
    $jb_result = mysqli_query( $jb_conn, $jb_sql );
    while ( $jb_row = mysqli_fetch_array( $jb_result ) ) {
      $encrypted_password = $jb_row[ 'password' ];
    }
    if ( password_verify( $current_password, $encrypted_password ) ) {
      if ( $new_password == $new_password_confirm ) {
        $encrypted_new_password = password_hash( $new_password, PASSWORD_DEFAULT);
        $jb_sql_change_password = "UPDATE member SET password = '" . $encrypted_new_password . "' WHERE username = '" . $session_username . "';";
        mysqli_query( $jb_conn, $jb_sql_change_password );
        header( 'Location: change-password-ok.php' );
      } else {
        $wp2 = 1;
      }
    } else {
      $wp1 = 1;
    }
  }
?>
<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>비밀번호 변경</title>
    <style>
      body { font-family: sans-serif; font-size: 14px; }
      input, button { font-family: inherit; font-size: inherit; }
    </style>
  </head>
  <body>
    <h1>비밀번호 변경</h1>
    <form action="change-password.php" method="POST">
      <p><input type="password" name="current_password" placeholder="현재 비밀번호" required></p>
      <p><input type="password" name="new_password" placeholder="새 비밀번호" required></p>
      <p><input type="password" name="new_password_confirm" placeholder="새 비밀번호 확인" required></p>
      <p><input type="submit" value="비밀번호 변경"></p>
      <?php
        if ( $wp1 == 1 ) {
          echo "<p>현재 비밀번호가 틀렸습니다.</p>";
        }
        if ( $wp2 == 1 ) {
          echo "<p>새 비밀번호가 일치하지 않습니다.</p>";
        }
      ?>
    </form>
  </body>
</html>