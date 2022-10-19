<?php 
    include "../../connect/connect.php";
    include "../../connect/session.php";
    include "../../connect/sessionCheck.php";

    $boardTitle = $_POST['boardTitle'];
    $boardSection = $_POST['boardSection'];
    $boardContents = $_POST['boardContents'];
    
    // echo "$boardTitle,$boardSection,$boardContents";

    $boardTitle = $connect -> real_escape_string($boardTitle);
    $boardSection = $connect -> real_escape_string($boardSection);
    $boardContents = $connect -> real_escape_string($boardContents);
    $boardView = 1;
    $regTime = time();

    $myMemberID = $_SESSION['myMemberID'];
    // echo $myMemberID;

    $sql = "INSERT INTO myBoard(myMemberID, boardTitle, boardSection, boardContents, boardView, regTime) VALUES('$myMemberID','$boardTitle', '$boardSection','$boardContents', '$boardView', '$regTime')";
    // $sql = "INSERT INTO myboard(myMemberID, boardTitle, boardContents, boardView, regTime) VALUES('$myMemberID','$boardTitle', '$boardContents', '$boardView', '$regTime')";
    
    $connect -> query($sql);
    // echo $result;
?>
<script>
    location.href = "board.php";
</script>
