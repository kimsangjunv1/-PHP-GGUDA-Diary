<section class="intro_page">
    <div class="intro_page_inner share reverse">
        <div class="section_title_container">
            <h2 class="title">나만의<br />다꾸 방법 공유!</h2>
            <p class="desc">내가 생각하는 다꾸 방법들을 커뮤니티를 통해<br />사람들하고 같이 나눠볼 수 있어요!</p>
            <button class="quick_button">
            바로가기 >
            </button>
        </div>
        <div class="section_contents_container">
            <div class="item">
                <div class="info_container">
                    <h2 class="title">같이 담아요 ^O^</h2>
                    <p class="author">범지 bumji</p>
                </div>
                <div class="date_container">
                    <p>2일전</p>
                    <p>2023.01.01</p>
                </div>
                <p></p>
            </div>
        </div>
    </div>
    <script>
        const item = document.querySelector(".item")
        const container = document.querySelector('.share .section_contents_container')

        const itemElements = item.cloneNode(true)

        for(let i = 0; i < 7; i++ ){
            container.innerHTML += '<div class="item"><div class="info_container"><h2 class="title">같이 담아요 ^O^</h2><p class="author">범지 bumji</p></div><div class="date_container"><p>2일전</p><p>2023.01.01</p></div><p></p></div>'
        }
    </script>
</section>