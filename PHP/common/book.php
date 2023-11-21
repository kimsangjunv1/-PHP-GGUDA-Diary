<?php
    // $sql = "ALTER TABLE myBoardComment AUTO_INCREMENT = 1";
    // $connect -> query($sql);
    
    $sql = "SELECT m.youName, m.youImageFile, t.myMemberID, m.regTime, t.color, t.testImageFile FROM test t JOIN myMember m ON(t.myMemberID = m.myMemberID) WHERE t.myMemberID = {$myMemberID}";
    $result = $connect -> query($sql);
    $info = $result -> fetch_array(MYSQLI_ASSOC);
?>
<div class="diary_container">
    <div class="diary_container_inner">
        <div class="item">
            <div class="cover_image_container">
                <!-- <img src="/assets/img/test_bg.jpg" alt=""> -->
<?php
// $info = $result -> fetch_array(MYSQLI_ASSOC);
echo "<img src='../../assets/img/testImg/".$info['testImageFile']."' alt='표지 이미지'>";
?>
            </div>
            <div class="description_container">
                <?php
                    echo "<p>".$info['regTime']."</p>";
                    echo "<p>".$info['youName']."</p>";
                ?>
            </div>
            <?php
                echo "<div class='book_front ".$info['color']."_front'></div>";
            ?>
            <!-- <div class="book_front"></div> -->
            <div class="book_back"></div>
        </div>
    </div>
</div>