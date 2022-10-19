<?php 
    include "../../connect/connect.php";
    include "../../connect/session.php";
    include "../../connect/sessionCheck.php";

    $eventTitle = $_POST['eventTitle'];
    $boardSection = $_POST['boardSection'];
    $eventContents = $_POST['eventContents'];
    
    // echo "$boardTitle,$boardSection,$boardContents";

    $eventTitle = $connect -> real_escape_string($eventTitle);
    $boardSection = $connect -> real_escape_string($boardSection);
    $eventContents = $connect -> real_escape_string($eventContents);
    $eventView = 1;
    $regTime = time();

    $myMemberID = $_SESSION['myMemberID'];
    // echo $myMemberID;

    $sql = "INSERT INTO myEvent(myMemberID, eventTitle, boardSection, eventContents, eventView, regTime) VALUES('$myMemberID','$eventTitle', '$boardSection','$eventContents', '$eventView', '$regTime')";
    // $sql = "INSERT INTO myboard(myMemberID, boardTitle, boardContents, boardView, regTime) VALUES('$myMemberID','$boardTitle', '$boardContents', '$boardView', '$regTime')";
    
    $connect -> query($sql);
    // echo $result;
?>
<script>
    location.href = "event.php";
</script>
