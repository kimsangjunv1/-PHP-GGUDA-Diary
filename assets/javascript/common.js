//스크롤 값에 따라 변경할 클래스 및 효과
const header = document.querySelector(".header")

// let switcher = 0;
function scroll() {
    let scrollTop = window.pageYoffest || document.documentElement.scrollTop || window.screenY;
    
    if (scrollTop >= 100) {
        header.classList.add("header_ctrl");
        
    } else {
        header.classList.remove("header_ctrl");
    }
    requestAnimationFrame(scroll);
}
scroll(); //함수 호출