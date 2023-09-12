<div class="wrap mainCtrl">
        <?php include "../login/login.php" ?>

        <div class="site">
            
            <div class="intro">
                <div class="intro_page one">
                    <div class="logo__cont">
                        <img src="../../assets/img/afresh/landing_logo.png" alt="">
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
    </div>