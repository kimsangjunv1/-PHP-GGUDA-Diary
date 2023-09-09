<?php
    include "../connect/connect.php";
    $sql = "CREATE TABLE myTipComment (";
    $sql .= "myTipCommentID int(10) unsigned NOT NULL auto_increment,";
    $sql .= "myMemberID int(10) unsigned NOT NULL,";
    $sql .= "myTipID int(10) unsigned NOT NULL,";
    $sql .= "commentTipName varchar(30) NOT NULL,";
    $sql .= "commentTipMsg varchar(255) NOT NULL,";
    $sql .= "commentTipPass varchar(10) NOT NULL,";
    $sql .= "commentTipDelete int(10) NOT NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (myTipCommentID)";
    $sql .= ") charset=utf8;";
    $connect -> query($sql);
?>