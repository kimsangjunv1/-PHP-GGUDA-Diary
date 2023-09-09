<?php 
     include "../connect/connect.php";

    $sql = "CREATE TABLE myEvent(";
    $sql .= "myEventID int(10) unsigned NOT NULL auto_increment,";
    $sql .= "myMemberID int(10) unsigned NOT NULL,";
    $sql .= "eventTitle varchar(50) NOT NULL,";
    $sql .= "eventSection enum('notion', 'event') DEFAULT NULL comment '공지사항 notion, 이벤트 event',";
    $sql .= "eventContents longtext NOT NULL,";
    $sql .= "eventImgFile varchar(100) DEFAULT NULL,";
    $sql .= "eventImgSize varchar(100) DEFAULT NULL,";
    $sql .= "eventView int(10) NOT NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (myEventID)";
    $sql .= ") charset=utf8;";
    
    $connect -> query($sql);

?>