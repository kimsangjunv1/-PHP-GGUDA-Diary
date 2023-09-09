<?php
    include "../connect/connect.php";
    $sql = "CREATE TABLE myEventComment (";
    $sql .= "myEVCommentID int(10) unsigned NOT NULL auto_increment,";
    $sql .= "myMemberID int(10) unsigned NOT NULL,";
    $sql .= "myEventID int(10) unsigned NOT NULL,";
    $sql .= "commentEventName varchar(30) NOT NULL,";
    $sql .= "commentEventMsg varchar(255) NOT NULL,";
    $sql .= "commentEventPass varchar(10) NOT NULL,";
    $sql .= "commentEventDelete int(10) NOT NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (myEVCommentID)";
    $sql .= ") charset=utf8;";
    $connect -> query($sql);
?>