<?php 
     include "../connect/connect.php";

    $sql = "CREATE TABLE myDecoBoard(";
    $sql .= "myDecoID int(10) unsigned NOT NULL auto_increment,";
    $sql .= "myMemberID int(10) unsigned NOT NULL,";
    $sql .= "DecoTitle varchar(50) NOT NULL,";
    $sql .= "DecoSection enum('pink', 'blue', 'purple') DEFAULT NULL comment '핑크 pink, 블루 blue, 퍼플 purple',";
    $sql .= "DecoContents longtext NOT NULL,";
    $sql .= "DecoImgFile varchar(100) DEFAULT NULL,";
    $sql .= "DecoImgSize varchar(100) DEFAULT NULL,";
    $sql .= "DecoView int(10) NOT NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (myDecoID)";
    $sql .= ") charset=utf8;";
    
    $connect -> query($sql);


 

?>