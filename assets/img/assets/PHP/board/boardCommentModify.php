<?php
    include "../../connect/connect.php";

    // 받아올 값(POST 방식)
    $commentPass = $_POST["pass"];
    $commentMsg = $_POST["msg"];
    $commentID = $_POST["commentID"];

    $sql = "SELECT commentPass FROM myBoardComment WHERE myCommentID = {$commentID}";
    
    $result = $connect -> query($sql);
    $info = $result -> fetch_array(MYSQLI_ASSOC);

    // var_dump($info);
    if($info['commentPass'] === $commentPass){
        $sql = "UPDATE myBoardComment SET commentMsg = '{$commentMsg}', commentPass = '{$commentPass}' WHERE myCommentID = {$commentID}";
        $connect -> query($sql);
        $commentResult = "good";
        $commentResult2 = "false";
        echo json_encode(array("result" => $commentResult));
    } else {
        $commentResult = "good";
        $commentResult2 = "false";
        echo json_encode(array("result" => $commentResult2));
    }
?>
