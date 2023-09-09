<?php
    include "../../connect/connect.php";

    // 받아올 값(POST 방식)
    $myLoginID = $_POST['myLoginID'];
    $myTipID = $_POST['tipID'];
    $commentName = $_POST['name'];
    $commentPass = $_POST['pass'];
    $commentMsg = $_POST['msg'];
    $regTime = time();

    // 추가
    // $myMemberID = $_SESSION['myMemberID'];


    $sql = "INSERT INTO myTipComment (myMemberID, myTipID, commentTipName, commentTipMsg, commentTipPass, commentTipDelete, regTime) VALUES ('$myLoginID','$myTipID','$commentName','$commentMsg','$commentPass','0','$regTime')";
    // $sql = "INSERT INTO myBoardComment (myMemberID, myBoardID, commentName, commentMsg, commentPass, commentDelete, regTime) VALUES ('1','$myBoardID','$commentName','$commentMsg','$commentPass','0','$regTime')";
    
    // 데이터 가져옴
    $result = $connect -> query($sql);
    echo json_encode(array("info" => $myTipID));
?>