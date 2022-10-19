<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE myMember (";
    $sql .= "myMemberID int(10) unsigned NOT NULL auto_increment,";
    $sql .= "youEmail varchar(40) NOT NULL,";
    $sql .= "youName varchar(10) NOT NULL,";
    $sql .= "youPass varchar(40) NOT NULL,";
    $sql .= "youBirth varchar(20) NOT NULL,";
    $sql .= "youImageFile varchar(100) DEFAULT NULL,";
    $sql .= "youImageSize varchar(100) DEFAULT NULL,";
    $sql .= "youGender enum('male', 'female') DEFAULT NULL comment '남자 male, 여자 female',";
    $sql .= "searchQA enum('QA') DEFAULT NULL comment '나의보물1호 QA',";
    $sql .= "youQA varchar(20) NOT NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (myMemberID)";
    $sql .= ") charset=utf8;";
    
    $connect -> query($sql);
?>