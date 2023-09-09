<?php 
    include "../../connect/connect.php";
    include "../../connect/session.php";
    
    $myMemberID = $_SESSION['myMemberID'];

    $sql = "SELECT m.youName, m.youImageFile, t.myMemberID, m.regTime, t.color, t.testImageFile FROM test t JOIN myMember m ON(t.myMemberID = m.myMemberID) WHERE t.myMemberID = {$myMemberID}";
    $result = $connect -> query($sql);
    $info = $result -> fetch_array(MYSQLI_ASSOC);

    if($info['myMemberID']===$myMemberID){
        //로그인 페이지 이동
        // msg("로그인을 먼저 해주세요 :3");
        echo "<script>alert('이미 다이어리를 만들었습니다 :3')</script>";
        echo "<script>location.href='../deco/deco.php'</script>";
        // echo "<script>location.href='../main/main.php'</script>";
    }
?>
<!-- <script>
    alert("로그인을 먼저 해주세요 :3")
    location.href="../main/main.php";
</script> -->
