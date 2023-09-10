<?php 
    include "../../connect/connect.php";
    include "../../connect/session.php";
    // include "../../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/board.css">
    <link rel="stylesheet" href="../../assets/css/faq.css">
</head>
<body>
    
    <?php include "../include/header.php" ?>
    <div class="wrap">
        <div class="site">
            <div class="board">
                <div class="board_info">
                <img src="../../assets/img/site_main_faq.png" class="header_icon_main" alt="">
                    <img src="../../assets/img/site_main_faq_heart.png" class="header_icon_01" alt="">
                    <img src="../../assets/img/site_main_faq_heart.png" class="header_icon_02" alt="">
                    <img src="../../assets/img/site_main_faq_heart.png" class="header_icon_03" alt="">
                    <img src="../../assets/img/site_main_faq_heart.png" class="header_icon_04" alt="">
                    <img src="../../assets/img/site_main_faq_heart.png" class="header_icon_05" alt="">
                    <h2>FAQ</h2>
                    <img src="../../assets/img/site_board_notice_cross.png" alt="">
                    <p>궁금하신 부분들에 대해 정리해봤어요!</p>
                </div>
                <div class="faq_search_cont" style="display:none">
                    <!-- <div class="section_container">
                        <a class="select" href="board.php">공지사항</a>
                        <a href="../event/event.php"">이벤트</a>
                    </div> -->
                    <form action="faq_search.php" name="faq_search" method="get" id="faq_search">
                        <fieldset>
                            <legend class="ir">게시판 검색 영역</legend>
                            <!-- <select name="searchOption" id="searchOption">
                                <option value="title">제목</option>
                                <option value="content">내용</option>
                                <option value="name">닉네임</option>
                            </select> -->
                            <input type="search" name="searchKeyword" id="searchKeyword" placeholder="질문을 검색하세요!"
                            aria-label="search" class="faq_search" required>
                        </fieldset>
                    </form>
                    <!-- <a class='write_btn' href='boardWrite.php'>글쓰기</a> -->
                </div>
                <!-- <div class="board_list">
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
                    </div>
                </div> -->
                <div class="faq_list">
                    <div class="faq_list_inner">
                        <details>
                            <summary class="faq_title">회원 탈퇴</summary>
                            <div class="faq_contents">
                                회원 탈퇴시에는 동일 ID로 재가입이 불가하며,고객정보 등이 모두 삭제됩니다.<br>
                                <a href="#">회원 탈퇴 바로가기</a>
                            </div>
                        </details>
                        <details>
                            <summary class="faq_title">아이디/비밀번호 찾기</summary>
                            <div class="faq_contents">
                                아이디와 비밀번호를 잃어버렸을 경우<br>
                                홈페이지 상단에 로그인 클릭하신 후 아이디찾기 또는 비밀번호 찾기를 선택하여 간단한 확인절차 후 조회해주시기 바랍니다.
                            </div>
                        </details>
                        <details>
                            <summary class="faq_title">회원 정보 수정</summary>
                            <div class="faq_contents">
                                회원정보 수정은 메인 > MY 페이지 > MY 회원정보 > 기본정보수정 을 통해 수정 가능합니다.<br>
                                1. 개명 하였을 경우에도 기본정보수정을 통해 이름 수정이 가능합니다.<br>
                                2. 한번 등록된 아이디는 수정 또는 변경이 어렵습니다.<br>
                                <a href="#">[개인정보수정 바로가기]</a>
                            </div>
                        </details>
                        <details>
                            <summary class="faq_title">회원 가입 방법</summary>
                            <div class="faq_contents">
                                홈페이지 상단에 로그인 클릭하신 후 개인정보 이용약관에 동의하신 후<br>
                                사용할 이미지와 간단한 개인정보를 입력하여 가입하신 후 서비스를 이용하실 수 있습니다.
                            </div>
                        </details>
                        <details>
                            <summary class="faq_title">시스템 장애</summary>
                            <div class="faq_contents">
                                사진 첨부시 파일 업로드 장애 발생<br>
                                1. 파일 업로드시 "HTTP 404 - 파일을 찾을 수 없습니다" 오류가 납니다.<br>
                                2. 첨부파일에 한글로된 파일명(맥에서 작성된 또는 특수문자가 들어가 있는 파일명)이 있는 경우,<br>
                                파일의 용량이 크거나(5MB 이하), 파일명의 길이가 너무 긴경우, 오류가 발생됩니다.<br>
                                3. 첨부파일을 영문 또는 숫자로 만들어 업로드 부탁 드립니다.
                            </div>
                        </details>
                        <details>
                            <summary class="faq_title">이벤트 당첨</summary>
                            <div class="faq_contents">
                                1. 이벤트는 이벤트 응모 후 사이트내 당첨공지가 진행되는 이벤트가 있습니다.<br>
                                2. 이벤트 응모 후 당첨 확인은 사이트내 메인 > MY 페이지에서 확인 가능합니다.<br>
                                3. 당첨공지 후 해당 이벤트 확인 기간 내에 [확인]을 꼭 해주세요.<br>
                                4. <a href="#">이벤트 당첨안내 바로가기</a>    
                            </div>
                        </details>
                        <details>
                            <summary class="faq_title">꾸다 사이트 설립 연도는?</summary>
                            <div class="faq_contents">
                                꾸다 사이트는 2022년 학원에서 조별작업을 통해 만들어지게 되었으며 현재 10월에도 운영, 보수중입니다. 
                            </div>
                        </details>
                        <details>
                            <summary class="faq_title">꾸다 사이트 메인 컬러는?</summary>
                            <div class="faq_contents">
                                꾸다의 메인 컬러는 #413572 입니다.
                            </div>
                        </details>
                        <details>
                            <summary class="faq_title">스티커 꾸미기는 어떻게 이용하나요?</summary>
                            <div class="faq_contents">
                                마우스 왼쪽버튼 드래그를 통해서 간편하게 이용가능합니다.
                            </div>
                        </details>
                    </div>
                </div>
                    <!-- test -->
            </div>
        </div>
        <?php include "../include/footer.php" ?>
    </div>
</body>
<script src="../../assets/javascript/board.js"></script>
<!-- <script src="../../assets/javascript/search.js"></script> -->
<script src="../../assets/javascript/common.js"></script>
<script>document.querySelector(".header_inner a:nth-child(8)").classList.add("actived")</script>
</html>