window.addEventListener("scroll", () => {
  let scrollTop =
    window.pageYOffset || window.scrollY || document.documentElement.scrollTop; //이렇게 3개 중첩해서 사용 가능
});

let nowScroll = true; //실행 : 트리거 변수라고 부름
let lastScroll = 0;

function scrollProgress() {
  nowScroll = true;

  setInterval(() => {
    if (nowScroll) {
      nowScroll = false;
      hasScroll();
    }
  }, 300);
}

function hasScroll() {
  // hasScroll에 일단
  let scrollTop =
    window.pageYOffset || window.scrollY || document.documentElement.scrollTop;

  if (scrollTop < lastScroll) {
    //현재 스크롤 값이 이전 스크롤 값보다 작다면
    document.querySelector(".profile_cont").style.top = "80px";
    document.querySelector(".profile_cont").style.opacity = "1";
    document.querySelector(".header").style.top = "0px";
    // document.querySelector(".header").style.opacity = "1";
  } else {
    document.querySelector(".profile_cont").style.top = "-100px";
    document.querySelector(".profile_cont").style.opacity = "0";
    document.querySelector(".header").style.top = "-100px";
    // document.querySelector(".header").style.opacity = "0";
  }
  lastScroll = scrollTop; // 지금 현재 스크롤 값을 이전 스크롤 값에 넣은 뒤
}

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

window.addEventListener("scroll", scrollProgress);
