<?php 
    include "../../connect/connect.php";
    include "../../connect/session.php";

    // echo "<pre style='position:absolute; top:200px; left: 50px;'>";
    // var_dump($_SESSION);
    // echo "</pre>";
?> 

<!DOCTYPE html>
<html lang="ko">
<?php include "../include/head.php" ?>
<body>
    <?php include "../include/header.php" ?>
    <?php include "../include/loginStatus.php" ?>
    <div class="wrap mainCtrl">
        <?php include "../login/login.php" ?>

        <div class="site">
            
            <div class="intro">
                <div class="intro_page one">
                    <div class="logo__cont">
                        <img src="../../assets/img/site_intro_logo.png" alt="">
                        <p>“너가 상상한 <em>그 모든것</em> 여기서 꿈을 <em>꾸다</em>.”</p>
                    </div>
                    <img src="../../assets/img/site_intro_stroke.svg" alt="">
                    <div class="logo__cont__parallel">
                        <div class="cover">
                            <p class="first-parallel"></p>
                        </div>
                        <div class="cover">
                            <p class="second-parallel"></p>
                        </div>
                    </div>
                </div>
                <div class="intro_page two">
                    <div class="two_text_cont">
                        <!-- <h2>어 왔니?</h2> -->
                        <h2><em>다꾸용 물품</em>을(를) 찾아볼까?</h2>
                        <div style="display:flex; flex-wrap: nowrap; align-items: center; overflow-x: hidden;">
                            <h2 style="display: inline;">모두 모아봤어</h2>
                            <img style="display: inline;" src="../../assets/img/site_intro_arrow.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="intro_page three">
                    <h2>다이어리를 꾸며보세요!</h2>
                    <p>여기에서 시험삼아 기능을 체험해볼 수 있어요!</p>
                    <img class="cross" src="../../assets/img/site_main_cross.png" alt="">
                    <!-- <div class="edit_function" alt="편집기능 이미지">
                        <img src="../../assets/img/function_edit_01.png" alt="얉게">
                        <img src="../../assets/img/function_edit_02.png" alt="두껍게">
                        <img src="../../assets/img/function_edit_03.png" alt="밑줄">
                        <img src="../../assets/img/function_edit_04.png" alt="배경색상">
                        <img src="../../assets/img/function_edit_05.png" alt="글씨색상">
                        <img src="../../assets/img/function_edit_06.png" alt="정렬">
                    </div> -->
                    <div class="edit_function" alt="편집기능 이미지">
                        <button id="btn-bold">
                            <b>가</b>
                        </button>
                        <button id="btn-italic">
                            <i>가</i>
                        </button>
                        <button id="btn-underline">
                            <u>가</u>
                        </button>
                        <button id="btn-strike">
                            <s>가</s>
                        </button>
                        <button id="btn-ordered-list">
                            1.
                        </button>
                        <button id="btn-unordered-list">
                            •.
                        </button>
                        <button id="btn-image">
                            이미지
                        </button>
                        <input type="file" name="uploadfile" id="img-selector" accept="image/*" style="display:none;"/>
                    </div>
                    <div class="intro_input" id="editor" contenteditable="true" placeholder="여기에 입력해주세요" ></div>
                    <!-- <div class="gguda_desc">
                        
                    </div> -->
                    <div class="sticker_cont">
                        <p>원하는 스티커를 본문에 드래그 해보세요!</p>
                        <div style="display:flex">
                            <img class="sticker" src="../../assets/img/function_edit_sticker_01.png" alt="얉게">
                            <img class="sticker" src="../../assets/img/function_edit_sticker_02.png" alt="얉게">
                            <img class="sticker" src="../../assets/img/function_edit_sticker_03.png" alt="얉게">
                            <img class="sticker" src="../../assets/img/function_edit_sticker_04.png" alt="얉게">
                            <img class="sticker" src="../../assets/img/function_edit_sticker_05.png" alt="얉게">
                        </div>
                    </div>
                </div>
                <!-- <div class="intro_page four">
                    <div class="four_text_cont">
                        <h2>어~~~</h2>
                        <h2>이제 같이</h2>
                        <h2>드가자.</h2>
                    </div>
                </div> -->
            </div>
            <div class="main">
                <!-- 유튜브 -->
                <div class="youtube section_ctrl">
                    <h2>YOUTUBE</h2>
                    <p>다꾸와 관련된 영상을 추천해드릴게요</p>
                    <img class="cross" src="../../assets/img/site_main_cross.png" alt="">
                    <div class="youtube_cont">
                        <div class="youtube_inner">

                        </div>
                    </div>
                </div>


                <!-- 아티스트 -->
                <div class="artist section_ctrl">
                    <h2>ARTIST</h2>
                    <p>다른 작가들의 소식을 빠르게 확인해보자!</p>
                    <img class="artist_cross" src="../../assets/img/site_main_cross.png" alt="x">
                    <div class="artist_cont">
                        <div class="artist_cont_inner">
                            <div style="display:flex; flex-direction:column; align-items:center; scroll-snap-align:center;">
                                <div class="artist_list_item">
                                    <a href="https://www.instagram.com/qoover_copin/">
                                        <img src="../../assets/img/site_artist1.png" alt="프로파일">
                                        <!-- <img src="../../assets/img/site_artist_heart1.png" class="artist_heart" alt="하트"> -->
                                    </a>
                                </div>
                                <p>꾸버</p>
                                <p>@qoover_copin</p>
                            </div>
                            <div style="display:flex; flex-direction:column; align-items:center; scroll-snap-align:center;">
                                <div class="artist_list_item">
                                    <a href="https://www.instagram.com/33_808/">
                                        <img src="../../assets/img/site_artist2.png" alt="프로파일">
                                        <!-- <img src="../../assets/img/site_artist_heart2.png" class="artist_heart" alt="하트"> -->
                                    </a>
                                </div>
                                <p>모다</p>
                                <p>@33_808</p>
                            </div>
                            <div style="display:flex; flex-direction:column; align-items:center; scroll-snap-align:center;">
                                <div class="artist_list_item">
                                    <a href="https://www.instagram.com/esol_studio/">
                                        <img src="../../assets/img/site_artist3.png" alt="프로파일">
                                        <!-- <img src="../../assets/img/site_artist_heart1.png" class="artist_heart" alt="하트"> -->
                                    </a>
                                </div>
                                <p>이솔</p>
                                <p>@esol_studio</p>
                            </div>
                            <div style="display:flex; flex-direction:column; align-items:center; scroll-snap-align:center;">
                                <div class="artist_list_item">
                                    <a href="https://www.instagram.com/coco_studio__/">
                                        <img src="../../assets/img/site_artist4.png" alt="프로파일">
                                        <!-- <img src="../../assets/img/site_artist_heart2.png" class="artist_heart" alt="하트"> -->
                                    </a>
                                </div>
                                <p>도리</p>
                                <p>@coco_studio__</p>
                            </div>
                            <div style="display:flex; flex-direction:column; align-items:center; scroll-snap-align:center;">
                                <div class="artist_list_item">
                                    <a href="https://www.instagram.com/puru_beko_/">
                                        <img src="../../assets/img/site_artist5.png" alt="프로파일">
                                        <!-- <img src="../../assets/img/site_artist_heart2.png" class="artist_heart" alt="하트"> -->
                                    </a>
                                </div>
                                <p>푸루와 베코</p>
                                <p>@puru_beko_</p>
                            </div>
                            <div style="display:flex; flex-direction:column; align-items:center; scroll-snap-align:center;">
                                <div class="artist_list_item">
                                    <a href="https://www.instagram.com/zzirongx.x/">
                                        <img src="../../assets/img/site_artist6.png" alt="프로파일">
                                        <!-- <img src="../../assets/img/site_artist_heart2.png" class="artist_heart" alt="하트"> -->
                                    </a>
                                </div>
                                <p>찌롱</p>
                                <p>@zzirongx.x</p>
                            </div>
                            <div style="display:flex; flex-direction:column; align-items:center; scroll-snap-align:center;">
                                <div class="artist_list_item">
                                    <a href="https://www.instagram.com/jeju.meow/">
                                        <img src="../../assets/img/site_artist7.png" alt="프로파일">
                                        <!-- <img src="../../assets/img/site_artist_heart2.png" class="artist_heart" alt="하트"> -->
                                    </a>
                                </div>
                                <p>제주냥이</p>
                                <p>@jeju.meow</p>
                            </div>
                            <div style="display:flex; flex-direction:column; align-items:center; scroll-snap-align:center;">
                                <div class="artist_list_item">
                                    <a href="https://www.instagram.com/so_gum_i/">
                                        <img src="../../assets/img/site_artist8.png" alt="프로파일">
                                        <!-- <img src="../../assets/img/site_artist_heart2.png" class="artist_heart" alt="하트"> -->
                                    </a>
                                </div>
                                <p>소금이</p>
                                <p>@so_gumi_i</p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- 공지사항 -->
                <div class="notice section_ctrl">
                    <h2>NOTICE</h2>
                    <p>테스트</p>
                    <img class="cross" src="../../assets/img/site_main_cross.png" alt="">
                    <!-- <div class="notice_cont">
                        <div class="notice_quick_cont">
                            <img src="#" alt="">
                            <p>NOTICE</p>
                            <h2>공지사항</h2>
                            <a href="#">더보기</a>
                        </div>
                        <div class="notice_list_cont">
                            <ul>
                                <li>DATE</li>
                                <li>내용</li>
                            </ul>
                            <ul>
                                <li>2022.09.15</li>
                                <li>너만 모는 한가지 사ㄹ...!</li>
                            </ul>
                            <ul>
                                <li>2022.09.15</li>
                                <li>너만 모는 한가지 사ㄹ...!</li>
                            </ul>
                            <ul>
                                <li>2022.09.15</li>
                                <li>너만 모는 한가지 사ㄹ...!</li>
                            </ul>
                            <ul>
                                <li>2022.09.15</li>
                                <li>너만 모는 한가지 사ㄹ...!</li>
                            </ul>
                            <ul>
                                <li>2022.09.15</li>
                                <li>너만 모는 한가지 사ㄹ...!</li>
                            </ul>
                            <ul>
                                <li>2022.09.15</li>
                                <li>너만 모는 한가지 사ㄹ...!</li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="board_list">
                    <div class="board_list_inner">
                        <div class='board_list_header'>
                            <span>No.</span>
                            <span>PROFILE</span>
                            <span>TITLE</span>
                            <span>BOARD</span>
                            <span>DATE</span>
                            <span>VIEW</span>
                            <span>NAME</span>
                        </div>
<?php
    if(isset($_GET['page'])){
        $page = (int) $_GET['page'];
    } else {
        $page = 1;
    }

    $sql = "SELECT b.myBoardID, b.boardTitle, b.boardContents, m.youName, m.youImageFile, b.regTime, b.boardView, b.boardSection FROM myBoard b JOIN myMember m ON(b.myMemberID = m.myMemberID)";


    $result = $connect -> query($sql);

    // 전체 게시글 개수($count)
    $totalCount = $result -> num_rows;
    msg($totalCount);

    $viewNum = 10;
    $viewLimit = ($viewNum * $page) - $viewNum;

    $sql = $sql."ORDER BY myBoardID DESC LIMIT {$viewLimit}, {$viewNum}";
    $result = $connect -> query($sql);

    $sql = "ALTER TABLE myBoard AUTO_INCREMENT = 1";
    $connect -> query($sql);

    if($result){
        $count = $result -> num_rows;
    
        if($count > 0){
            for($i=1; $i <= $count; $i++){
                $info = $result -> fetch_array(MYSQLI_ASSOC);
                echo "<div class='board_list_contents'>";
                echo "<p class='contents_boardId'>".$info['myBoardID']."</p>";
                echo "<img src='../../assets/img/blog/".$info['youImageFile']."' alt='프로필 이미지'>";
                echo "<h2><a href='../board/boardView.php?myBoardID={$info['myBoardID']}'>".$info['boardTitle']."</a><a href='boardView.php?myBoardID={$info['myBoardID']}'>".$info['boardContents']."</a></h2>";
                echo "<div class='board_list_contents_info'>";
                echo "<p class='contents_section'>".$info['boardSection']."</p>";
                echo "<p class='contents_date'>".date('Y-m-d H:i',$info['regTime'])."</p>";
                echo "<p class='contents_view'>".$info['boardView']." VIEW</p>";
                echo "<p class='contents_view'>".$info['youName']."</p>";
                echo "</div>";
                echo "</div>";
                echo "<hr>";
            }
        } else {
            echo "앗? 게시물이 아직 없네요!";    
        }
    }
?>
                        </div>
                    </div>
                </div>

                <!-- SEARCH -->
                <div class="search section_ctrl">
                    <h2>SEARCH</h2>
                    <p>테스트</p>
                    <img class="cross" src="../../assets/img/site_main_cross.png" alt="">
                    <div class="search_cont">
                        <form action="../board/boardSearch.php" name="boardSearch" method="get" id="board_search">
                            <fieldset>
                                <legend class="ir">게시판 검색 영역</legend>
                                <select name="searchOption" id="searchOption">
                                    <option value="title">제목</option>
                                    <option value="content">내용</option>
                                    <option value="name">닉네임</option>
                                </select>
                                <input type="search" name="searchKeyword" id="searchKeyword" placeholder="검색어를 입력하세요!"
                                aria-label="search" class="board_search" required>
                            </fieldset>
                        </form>
                    </div>
                </div>

                <!-- Event -->
                <!-- <div class="Event section_ctrl">
                    <h2>Event</h2>
                    <p>테스트</p>
                    <img class="cross" src="../../assets/img/site_main_cross.png" alt="">
                    <div class="event_cont">
                        d
                    </div>
                </div> -->

                <!-- RANK -->
                <!-- <div class="rank section_ctrl">
                    <h2>RANKING</h2>
                    <p>랭킹을 모아봤어요!</p>
                    <img class="cross" src="../../assets/img/site_main_cross.png" alt="">
                    <div class="rank_cont">
                        <div class="rank_cont_inner"> -->
<?php
    // $viewSql = "SELECT b.myBoardID, b.boardTitle, b.boardView FROM myBoard b JOIN myMember m ON (b.myMemberID = m.myMemberID) ORDER BY boardView DESC LIMIT 0, 3";
    // $viewResult = $connect -> query($viewSql);
    // if($viewResult){
    //     $viewCount = $viewResult -> num_rows;
    //     if($viewCount > 0){
    //         for($i=1; $i<=3; $i++){
    //             $info = $viewResult -> fetch_array(MYSQLI_ASSOC);
    //             switch ($i) {
    //                 case 3 :
    //                     echo "<div class='rank_item'>";
    //                     echo "<p class='rank_title'>".$info['boardTitle']."</p>";
    //                     echo "<div class='rank_item_03'><a href='../board/boardView.php?myBoardID={$info['myBoardID']}'>";
    //                     echo "<p class='rank_three'>3등</p></a>";
    //                     echo "</div>";
    //                     echo "</div>";
    //                 break;
    //                 case 1 :
    //                     echo "<div class='rank_item'>";
    //                     echo "<p class='rank_title'>".$info['boardTitle']."</p>";
    //                     echo "<div class='rank_item_01'><a href='../board/boardView.php?myBoardID={$info['myBoardID']}'>";
    //                     echo "<img src='../../assets/img/site_main_ranking.png' alt=''>";
    //                     echo "<p class='rank_one'>1등</p></a>";
    //                     echo "</div>";
    //                     echo "</div>";
    //                 break;
    //                 case 2 :
    //                     echo "<div class='rank_item'>";
    //                     echo "<p class='rank_title'>".$info['boardTitle']."</p>";
    //                     echo "<div class='rank_item_02'><a href='../board/boardView.php?myBoardID={$info['myBoardID']}'>";
    //                     echo "<p class='rank_two'>2등</p></a>";
    //                     echo "</div>";
    //                     echo "</div>";
    //                 break;
    //             }
    //         }
    //     }
    //     else {
    //         echo "<div class='rank_item'>게시글 오류입니다. 관리자에게 문의하세요!</div>";
    //     }
    // }
?>
                        
                            
                        <!-- </div>
                    </div>
                </div> -->

                <!-- <div class="community_cont">
                    <div class="community_cont_inner">
                        <div class="item">
                            <img src="../../assets/img/test/1.png" alt="하트">
                            <div class="community_like like_off"></div>
                        </div>
                        <div class="item">
                            <img src="../../assets/img/test/2.png" alt="하트">
                            <div class="community_like like_off"></div>
                        </div>
                        <div class="item">
                            <img src="../../assets/img/test/3.png" alt="하트">
                            <div class="community_like like_on"></div>
                        </div>
                        <div class="item">
                            <img src="../../assets/img/test/4.png" alt="하트">
                            <div class="community_like like_off"></div>
                        </div>
                        <div class="item">
                            <img src="../../assets/img/test/5.png" alt="하트">
                            <div class="community_like like_off"></div>
                        </div>
                        <div class="item">
                            <img src="../../assets/img/test/6.png" alt="하트">
                            <div class="community_like like_off"></div>
                        </div>
                        <div class="item">
                            <img src="../../assets/img/test/7.png" alt="하트">
                            <div class="community_like like_off"></div>
                        </div>
                        <div class="item">
                            <img src="../../assets/img/test/8.png" alt="하트">
                            <div class="community_like like_off"></div>
                        </div>
                    </div>
                    
                </div> -->
                <!-- <div class='deco_list_header'>
                    <span>No.</span>
                    <span>PROFILE</span>
                    <span>TITLE</span>
                    <span>BOARD</span>
                    <span>DATE</span>
                    <span>VIEW</span>
                    <span>NAME</span>
                </div> -->
                <!-- Community -->
                <div class="community section_ctrl">
                    <h2>DIARY BOARD</h2>
                    <p>사람들이 꾸민 다이어리에요!</p>
                    <img class="cross" src="../../assets/img/site_main_cross.png" alt="">
                    <div class="deco_list">
                        <div class="deco_list_inner">
<?php
    if(isset($_GET['page'])){
        $page = (int) $_GET['page'];
    } else {
        $page = 1;
    }

    function msg($alert){
        // echo "<p>".$alert."개의 꾸민 다이어리가 있어요!</p>";
    }

    $sql = "SELECT b.myDecoID, b.DecoTitle, b.DecoContents, m.youName, m.youImageFile, b.regTime, b.DecoView, b.DecoSection, b.DecoImgFile, t.testImageFile, t.color FROM myDecoBoard b JOIN myMember m ON(b.myMemberID = m.myMemberID) JOIN test t ON(t.myMemberID = m.myMemberID)";


    $result = $connect -> query($sql);

    // 전체 게시글 개수($count)
    $totalCount = $result -> num_rows;
    msg($totalCount);

    $viewNum = 10;
    $viewLimit = ($viewNum * $page) - $viewNum;

    $sql = $sql."ORDER BY myDecoID DESC LIMIT {$viewLimit}, {$viewNum}";
    $result = $connect -> query($sql);

    $sql = "ALTER TABLE myBoard AUTO_INCREMENT = 1";
    $connect -> query($sql);

    if($result){
        $count = $result -> num_rows;
    
        if($count > 0){
            for($i=1; $i <= $count; $i++){
                $info = $result -> fetch_array(MYSQLI_ASSOC);
                echo "<div class='deco_list_item_cont'>";
                echo "<div class='deco_list_contents' style='background-image:url(../../assets/img/deco_board/".$info['DecoImgFile'].");  background-size:cover'>";
                

                echo "<div class='book_item'>";
                echo "<div class='book_item_img_cont'>";
                echo "<img src='../../assets/img/testImg/".$info['testImageFile']."' alt='표지 이미지'>";
                echo "</div>";
                echo "<div class='book_desc'>";
                echo "<p>".$info['color']."</p>";
                echo "<p>".$info['youName']."</p>";
                echo "</div>";
                echo "<div class='book_front ".$info['color']."_front'></div>";
                echo "<div class='book_back'></div>";
                echo "</div>";


                echo "<p class='reg_time'>".date('Y-m-d H:i',$info['regTime'])."</p>";
                echo "</div>";
                echo "<div class='deco_list_desc'>";
                echo "<img class='profile_img' src='../../assets/img/blog/".$info['youImageFile']."' alt='프로필 사진'>";
                echo "<div>";
                echo "<h2 class='title'>".$info['DecoTitle']."</h2>";
                echo "<p class='desc'>".$info['DecoContents']."</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";

                // echo "<div class='board_list_contents'>";
                // echo "<p class='contents_boardId'>".$info['myDecoID']."</p>";
                // echo "<img src='../../assets/img/blog/".$info['youImageFile']."' alt='프로필 이미지'>";
                // echo "<h2><a href='decoView.php?myDecoID={$info['myDecoID']}'>".$info['DecoTitle']."</a><a href='decoView.php?myDecoID={$info['myDecoID']}'>".$info['DecoContents']."</a></h2>";
                // echo "<div class='board_list_contents_info'>";
                // echo "<p class='contents_section'>".$info['decoSection']."</p>";
                // echo "<p class='contents_date'>".date('Y-m-d H:i',$info['regTime'])."</p>";
                // echo "<p class='contents_view'>".$info['decoView']." VIEW</p>";
                // echo "<p class='contents_view'>".$info['youName']."</p>";
                // echo "</div>";
                // echo "</div>";
                // echo "<hr>";
            }
        } else {
            echo "앗? 게시물이 아직 없네요!";    
        }
    }
?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "../include/footer.php" ?>
    </div>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>
    // 좋아요 기능
    const like_btn = document.querySelectorAll(".community_like")
    
    let i = 0;
    like_btn.forEach((e,i)=>{
        e.addEventListener("click",()=>{
            if(i == 0){
                e.classList.remove("like_off");
                e.classList.add("like_on");
    
                e.classList.remove("effect");
                void e.offsetWidth; ;
                e.classList.add("effect");
    
                i++;
            } else{
                e.classList.add("like_off");
                e.classList.remove("like_on");
    
                e.classList.remove("effect");
                void e.offsetWidth; ;
                e.classList.add("effect");
    
                i--;
            }
        })
    })
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            dataType: "json",
            
            url: "https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults=10&q=%EB%8B%A4%EA%BE%B8&type=video&key=AIzaSyAp7wwVT_hzfA2mSXrrh-1ZUx7QCX3ogtk",
            contentType : "application/json",
            success : function(data) {
                data.items.forEach(function(element, index) {
                    $('.youtube_inner').append('<div class="youtube_item"><iframe width="560" height="315" src="https://www.youtube.com/embed/'+element.id.videoId+'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>');
                });
            },
            complete : function(data) {
            },
            error : function(xhr, status, error) {
                console.log("유튜브 요청 에러: "+error);
            }
        });
    });
</script>
<script>
    //파티클 생성 10개
    //설명 : 파티클(작은거/큰거) 하나하나 태그로 넣기에는 너무 길어져서 사용함
    
    const q = document.querySelector(".intro_page");
    let size_que = Math.floor(Math.random() * 5) + 1;

    for (let i = 1; i < 10; i++) {
        if (i % 2 == 0) {
            q.innerHTML += "<img class='particle' src='../../assets/img/site_intro_particle_001.png' alt=''>"
        } else {
            q.innerHTML += "<img class='particle' src='../../assets/img/site_intro_particle_002.png' alt=''>"
        }
    }



    //marquee 효과 구현
    //설명 : 기본적으로 천천히 흘러가고 스크롤에 따라 더 빠르게 흐름
    const pTag1 = document.querySelector('.first-parallel')
    const pTag2 = document.querySelector('.second-parallel')

    const textArr1 =
        'DREAMS BECOME TRUE ← [GGUDA] ← DREAMS BECOME TRUE ← [GGUDA] ← DREAMS BECOME TRUE ← [GGUDA] ← DREAMS BECOME TRUE ← [GGUDA] ← DREAMS BECOME TRUE ← [GGUDA] ← DREAMS BECOME TRUE ← [GGUDA] ←'
        .split(' ')
    const textArr2 =
        'DREAMS BECOME TRUE → [GGUDA] → DREAMS BECOME TRUE → [GGUDA] → DREAMS BECOME TRUE → [GGUDA] → DREAMS BECOME TRUE → [GGUDA] → DREAMS BECOME TRUE → [GGUDA] → DREAMS BECOME TRUE → [GGUDA] →'
        .split(' ')

    let count1 = 0
    let count2 = 0

    initTexts(pTag1, textArr1)
    initTexts(pTag2, textArr2)

    function initTexts(element, textArray) {
        textArray.push(...textArray)
        for (let i = 0; i < textArray.length; i++) {
            element.innerText += `${textArray[i]}\u00A0\u00A0\u00A0\u00A0`
        }
    }

    function marqueeText(count, element, direction) {
        if (count > element.scrollWidth / 2) {
            element.style.transform = `translate3d(0, 0, 0)`
            count = 0
        }
        element.style.transform = `translate3d(${direction * count}px, 0, 0)`

        return count
    }

    function animate() {
        count1++
        count2++

        count1 = marqueeText(count1, pTag1, -1)
        count2 = marqueeText(count2, pTag2, 1)

        window.requestAnimationFrame(animate)
    }

    function scrollHandler() {
        count1 += 15
        count2 += 15
    }

    // window.addEventListener('scroll', scrollHandler)
    animate()



    //스크롤 값에 따라 변경할 클래스 및 효과
    const header = document.querySelector(".header")
    const profileClose = document.querySelector(".profile_cont_close")
    const profile = document.querySelector(".profile_cont")
    const scrollUp = document.querySelector(".btn_scroll_top");

    // 스크롤 TOP 선택시 부드럽게 이동
    scrollUp.addEventListener("click", (e) => {
        e.preventDefault(); //이벤트가 발생했을때 걸려있는 링크 이동을 차단 시킴
        window.scrollTo({
            left: 0,
            top: 0,
            behavior: "smooth"
        });
    })

    // 스티커 선택
    const stickerAll = document.querySelectorAll(".sticker")
    const size = document.querySelectorAll(".size")

    
    
    stickerAll.forEach((item,where)=>{
        item.onmousedown = function (event) {
            // size.forEach((e,i)=>{
            //     e.addEventListener("click", ()=>{
            //         let sizeInfo = i+1;
            //         console.log(sizeInfo)
            //     })
            // })
            let shiftX = event.clientX - item.getBoundingClientRect().left;
            let shiftY = event.clientY - item.getBoundingClientRect().top;
    
            item.style.position = 'absolute';
            item.style.border = '1px dashed #721aff';
            item.style.borderRadius = '15px';
            item.style.zIndex = 100;
            document.body.append(item);
    
            moveAt(event.pageX, event.pageY);
    
            // 초기 이동을 고려한 좌표 (pageX, pageY)에서
            // 공을 이동합니다.
            function moveAt(pageX, pageY) {
                item.style.left = pageX - shiftX + 'px';
                item.style.top = pageY - shiftY + 'px';
            }
    
            function onMouseMove(event) {
                moveAt(event.pageX, event.pageY);
            }
    
            // mousemove로 공을 움직입니다.
            document.addEventListener('mousemove', onMouseMove);
    
            // 공을 드롭하고, 불필요한 핸들러를 제거합니다.
            item.onmouseup = function () {
                document.removeEventListener('mousemove', onMouseMove);
                item.style.border = '1px solid rgba(255, 255, 255, 0)';
                item.onmouseup = null;
            };
    
        };
    
        item.ondragstart = function () {
            return false;
        };
    })

    //텍스트 에디터
    const editor = document.getElementById('editor');
    const btnBold = document.getElementById('btn-bold');
    const btnItalic = document.getElementById('btn-italic');
    const btnUnderline = document.getElementById('btn-underline');
    const btnStrike = document.getElementById('btn-strike');
    const btnOrderedList = document.getElementById('btn-ordered-list');
    const btnUnorderedList = document.getElementById('btn-unordered-list');

    const btnImage = document.getElementById('btn-image');
    const imageSelector = document.getElementById('img-selector');

    btnBold.addEventListener('click', function () {
        setStyle('bold');
    });

    btnItalic.addEventListener('click', function () {
        setStyle('italic');
    });

    btnUnderline.addEventListener('click', function () {
        setStyle('underline');
    });

    btnStrike.addEventListener('click', function () {
        setStyle('strikeThrough')
    });

    btnOrderedList.addEventListener('click', function () {
        setStyle('insertOrderedList');
    });

    btnUnorderedList.addEventListener('click', function () {
        setStyle('insertUnorderedList');
    });

    btnImage.addEventListener('click', function () {
        imageSelector.click();
    });

    imageSelector.addEventListener('change', function (e) {
        const files = e.target.files;
        if (!!files) {
            insertImageDate(files[0]);
        }
    });

    editor.addEventListener('keydown', function () {
        checkStyle();
    });

    editor.addEventListener('mousedown', function () {
        checkStyle();
    });
    
    
    function setStyle(style) {
        document.execCommand(style);
        focusEditor();
        checkStyle();
    }
    
    function insertImageDate(file) {
        const reader = new FileReader();
        reader.addEventListener('load', function (e) {
            focusEditor();
            document.execCommand('insertImage', false, `${reader.result}`);
        });
        reader.readAsDataURL(file);
    }

    function checkStyle() {
        if (isStyle('bold')) {
            btnBold.classList.add('active');
        } else {
            btnBold.classList.remove('active');
        }
        if (isStyle('italic')) {
            btnItalic.classList.add('active');
        } else {
            btnItalic.classList.remove('active');
        }
        if (isStyle('underline')) {
            btnUnderline.classList.add('active');
        } else {
            btnUnderline.classList.remove('active');
        }
        if (isStyle('strikeThrough')) {
            btnStrike.classList.add('active');
        } else {
            btnStrike.classList.remove('active');
        }
        if (isStyle('insertOrderedList')) {
            btnOrderedList.classList.add('active');
        } else {
            btnOrderedList.classList.remove('active');
        }
        if (isStyle('insertUnorderedList')) {
            btnUnorderedList.classList.add('active');
        } else {
            btnUnorderedList.classList.remove('active');
        }
    }

    function isStyle(style) {
        return document.queryCommandState(style);
    }

    function setStyle(style) {
        document.execCommand(style);
        focusEditor();
    }

    // 버튼 클릭 시 에디터가 포커스를 잃기 때문에 다시 에디터에 포커스를 해줌
    function focusEditor() {
        editor.focus({preventScroll: true});
    }

    // 마우스를 트래킹하는 파티클
    // document.querySelector(".wrap").addEventListener("mousemove", (e) => {
    //         //마우스 좌표 값
    //         let mousePageX = e.pageX;
    //         let mousePageY = e.pageY;

    //         // 전체 가로
    //         let centerPageX = window.innerWidth/2 - mousePageX;
    //         let centerPageY = window.innerHeight/2 - mousePageY;


    //         //포스트 커버 썸내일 움직이기
    //         for(let q=1; q<=4; q++){
    //             document.querySelectorAll(".particle").forEach((e,i)=>{
    //                 e.style.transform = "translate("+ -centerPageX/(q*4)+"px, "+ -centerPageY/(q*4)+"px)";
    //             })
    //         }
    //     }) 
</script>
<script>
    // window.addEventListener("scroll", () => {
    //     let scrollTop = window.pageYOffset || window.scrollY || document.documentElement.scrollTop; //이렇게 3개 중첩해서 사용 가능
    // })

    // let nowScroll = true;  //실행 : 트리거 변수라고 부름
    // let lastScroll = 0;

    // function scrollProgress(){
    //     nowScroll = true; 

    //     setInterval(()=>{
    //         if(nowScroll){ 
    //             nowScroll = false;
    //             hasScroll();
    //         }
    //     }, 300)
    // }

    // function hasScroll(){       // hasScroll에 일단 
    //     let scrollTop = window.pageYOffset || window.scrollY || document.documentElement.scrollTop;

    //     if(scrollTop < lastScroll){ //현재 스크롤 값이 이전 스크롤 값보다 작다면
    //         document.querySelector(".profile_cont").style.top="80px";
    //         document.querySelector(".profile_cont").style.opacity="1";
    //     } else {
    //         document.querySelector(".profile_cont").style.top="-100px";
    //         document.querySelector(".profile_cont").style.opacity="0";
    //     }
    //     lastScroll = scrollTop; // 지금 현재 스크롤 값을 이전 스크롤 값에 넣은 뒤
    // }
    
    // window.addEventListener("scroll",scrollProgress);
</script>
<script src="../../assets/javascript/board.js"></script>
<script src="../../assets/javascript/common.js"></script>
</html>