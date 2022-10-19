 //검색창 표시
//  const searchBtn = document.querySelector(".section_search_button")
//  let i = 0;

//  searchBtn.addEventListener("click", ()=>{
//      if(i==0){
//          document.querySelector(".board_search").style.display="block";
//          i++;
//      } else{
//          document.querySelector(".board_search").style.display="none";
//          i--;
//      }
//  })


 //모바일시 햄버거 메뉴 구현
 const menuOpen = document.querySelector(".hamburger_menu_open");
 menuOpen.addEventListener("click", ()=>{
     document.querySelector(".hamburger_menu").style.display="flex"
     document.querySelector("body").style.overflow="hidden"
 })
 const menuClose = document.querySelector(".header_menu_close");
 menuClose.addEventListener("click", ()=>{
     document.querySelector(".hamburger_menu").style.display="none"
     document.querySelector("body").style.overflow="auto"
 })