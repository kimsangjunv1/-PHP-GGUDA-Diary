<?php 
     include "../connect/connect.php";

    $sql = "CREATE TABLE myTip(";
    $sql .= "myTipID int(10) unsigned NOT NULL auto_increment,";
    $sql .= "myMemberID int(10) unsigned NOT NULL,";
    $sql .= "tipTitle varchar(50) NOT NULL,";
    $sql .= "tipSection enum('Tip') DEFAULT NULL comment 'Tip Tip',";
    $sql .= "tipContents longtext NOT NULL,";
    $sql .= "tipImgFile varchar(100) DEFAULT NULL,";
    $sql .= "tipImgSize varchar(100) DEFAULT NULL,";
    $sql .= "tipView int(10) NOT NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (myTipID)";
    $sql .= ") charset=utf8;";
    
    $connect -> query($sql);


 

?>