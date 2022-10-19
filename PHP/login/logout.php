<?php 
    include "../../connect/connect.php";

    // unset($_SESSION['myMemberID']) ;
    // unset($_SESSION['youEmail']);
    // unset($_SESSION['youName']);

    session_start();
    session_destroy();

?>

<script>
    // alert("로그아웃 :3");
    location.href="../main/main.php";
</script>