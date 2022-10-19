const searchBtn = document.querySelector(".section_search_button")
let i = 0;

searchBtn.addEventListener("click", ()=>{
    if(i==0){
        document.querySelector(".board_search").style.display="block";
        i++;
    } else{
        document.querySelector(".board_search").style.display="none";
        i--;
    }
})