<?php 
    include "../../connect/connect.php";
    include "../../connect/session.php";
    include "../../connect/sessionCheck.php";
    include "../../connect/bookCheck.php";

    echo "<pre style='position:absolute; top:200px; left: 50px;'>";
    var_dump($_SESSION);
    echo "</pre>";
?>

<!DOCTYPE html>
<html lang="ko">
<?php include "../include/head.php" ?>
<body>
    <?php include "../include/header.php" ?>
    <main>
        <section class="book_write_container">
            <div class="book_write_container_inner">
                    <div class="deco_title">
                        <h2>다이어리 꾸미기</h2>
                        <img style="filter: invert(1);" src="../../assets/img/site_board_notice_cross.png" alt="">
                        <p>스크롤을 위아래로 조정해<br>좋아하는 색감을 찾아보세요 :3</p>
                    </div>
                    
                    <form action="bookSave.php" name="bookOpen" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <legend class="ir">블로그 게시글 작성 영역</legend>
                            <!-- <p>좋아하는 색상을 골라주세요 :3</p> -->
                            <div class="color_selection">
                                <label for="color">색상 : </label>
                                <select name="color" id="color">
                                    <option value="blue">블루</option>
                                    <option value="pink">핑크</option>
                                    <option value="purple">퍼플</option>
                                </select>
                            </div>
                            
                            <div class="file_selection">
                                <label for="testImage">파일 : </label>
                                <input type="file" name="testImage" id="testImage" accept=".jpg, .jpeg, .png, .gif" placeholder="jpg, gif, png 파일만 넣어주세요">
                                <!-- <input type="file" name="uploadfile" id="img-selector" accept="image/*"/> -->
                            </div>
                            <button type="submit" value="저장하기">저장하기</button>
                        </fieldset>
                    </form>
            </div>
        </section>
    </main>
    <?php include "../include/footer.php" ?>
</body>
<script src="../../assets/javascript/board.js"></script>
<!-- <script src="../../assets/javascript/search.js"></script> -->
<script src="../../assets/javascript/common.js"></script>
</html>