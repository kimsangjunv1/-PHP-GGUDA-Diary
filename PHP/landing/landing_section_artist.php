<section class="intro_page">
    <div class="intro_page_inner artist">
        <div class="section_title_container full">
            <h2 class="title">어떤 작가님들이<br />있을까?</h2>
            <p class="desc">어떤 작가님들이 있는지 한눈에 확인해볼 수 있어요!</p>
            <button class="quick_button">
            바로가기 >
            </button>
        </div>
        <div class="section_contents_container">
            <div class="item_container">
                <p>이솔</p>
                <img src="../../assets/img/afresh/landing_artist_test_001.png" alt="프로필 이미지">
            </div>
            <div class="item_container">
                <p>이솔</p>
                <img src="../../assets/img/afresh/landing_artist_test_001.png" alt="프로필 이미지">
            </div>
            <div class="item_container">
                <p>이솔</p>
                <img src="../../assets/img/afresh/landing_artist_test_001.png" alt="프로필 이미지">
            </div>
            <div class="item_container">
                <p>이솔</p>
                <img src="../../assets/img/afresh/landing_artist_test_001.png" alt="프로필 이미지">
            </div>
            <div class="item_container">
                <p>이솔</p>
                <img src="../../assets/img/afresh/landing_artist_test_001.png" alt="프로필 이미지">
            </div>
            <div class="item_container">
                <p>이솔</p>
                <img src="../../assets/img/afresh/landing_artist_test_001.png" alt="프로필 이미지">
            </div>
            <div class="item_container">
                <p>이솔</p>
                <img src="../../assets/img/afresh/landing_artist_test_001.png" alt="프로필 이미지">
            </div>
            <div class="item_container">
                <p>이솔</p>
                <img src="../../assets/img/afresh/landing_artist_test_001.png" alt="프로필 이미지">
            </div>
            <div class="item_container">
                <p>이솔</p>
                <img src="../../assets/img/afresh/landing_artist_test_001.png" alt="프로필 이미지">
            </div>
            <div class="item_container">
                <p>이솔</p>
                <img src="../../assets/img/afresh/landing_artist_test_001.png" alt="프로필 이미지">
            </div>
        </div>
    </div>
</section>
<script>
    // 자동으로 움직이는 그림
const automoving = () => {
  //marquee 효과 구현
  //설명 : 기본적으로 천천히 흘러가고 스크롤에 따라 더 빠르게 흐름
  const pTag1 = document.querySelector(".artist .section_contents_container");

//   const textArr1 =
//     "DREAMS BECOME TRUE ← [GGUDA] ← DREAMS BECOME TRUE ← [GGUDA] ← DREAMS BECOME TRUE ← [GGUDA] ← DREAMS BECOME TRUE ← [GGUDA] ← DREAMS BECOME TRUE ← [GGUDA] ← DREAMS BECOME TRUE ← [GGUDA] ←".split(
//       " "
//     );

  let count1 = 0;

  initTexts(pTag1, textArr1);

//   function initTexts(element, textArray) {
//     textArray.push(...textArray);
//     for (let i = 0; i < textArray.length; i++) {
//       element.innerHTML += `<div class="item_container"><img src="../../assets/img/afresh/landing_artist_test_001.png" alt="프로필 이미지"></div>`;
//     }
//   }

  function initTexts(element, textArray) {
    textArray.push(...textArray);
    for (let i = 0; i < textArray.length; i++) {
      element.innerHTML += `<div class="item_container"><img src="../../assets/img/afresh/landing_artist_test_001.png" alt="프로필 이미지"></div>`;
    }
  }

  function marqueeText(count, element, direction) {
    if (count > element.scrollWidth / 2) {
        element.style.transform = `translate3d(0, 0, 0)`;
        count = 0;
        console.log(count,element.scrollWidth/2)
    }
    element.style.transform = `translate3d(${direction * count}px, 0, 0)`;

    return count;
  }

  function animate() {
    count1++;

    count1 = marqueeText(count1, pTag1, -1);

    window.requestAnimationFrame(animate);
  }

  function scrollHandler() {
    count1 += 15;
  }

  // window.addEventListener('scroll', scrollHandler)
  animate();
};
automoving();
</script>