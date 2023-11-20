// 스크롤 값별로 실행할 동작
window.onscroll = function () {
	let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
	let height =
		document.documentElement.scrollHeight -
		document.documentElement.clientHeight;

	// 상단바 배경 및 색상
	if ((winScroll / height) * 100 > 1) {
		document.querySelector(".header").style.background = "#3E2F7C";
		document
			.querySelectorAll(".header > .header_inner > a")
			.forEach((el, index) => {
				el.style.color = "#fff";
			});
	} else {
		document.querySelector(".header").style.background = "transparent";
		document
			.querySelectorAll(".header > .header_inner > a")
			.forEach((el, index) => {
				el.style.color = "black";
			});
	}
	// 상단바 스크롤 바
	document.querySelector(".progress").style.width =
		(winScroll / height) * 100 + "%";

	// 배경 스크롤
	// document.querySelector(".particle_container_inner").style.transform =
	//   "translateY(-" + ((winScroll / height) * 100) / 10 + "%)";
	document.querySelector(".particle_light").style.transform =
		"translateY(-" + ((winScroll / height) * 100) / 10 + "%)";
	document.querySelector(".particle_normal").style.transform =
		"translateY(-" + ((winScroll / height) * 100) / 5 + "%)";
};

// 좋아요 기능
const like_btn = document.querySelectorAll(".community_like");

let i = 0;
like_btn.forEach((e, i) => {
	e.addEventListener("click", () => {
		if (i == 0) {
			e.classList.remove("like_off");
			e.classList.add("like_on");

			e.classList.remove("effect");
			void e.offsetWidth;
			e.classList.add("effect");

			i++;
		} else {
			e.classList.add("like_off");
			e.classList.remove("like_on");

			e.classList.remove("effect");
			void e.offsetWidth;
			e.classList.add("effect");

			i--;
		}
	});
});

$(document).ready(function () {
	$.ajax({
		type: "GET",
		dataType: "json",

		url: "https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults=10&q=%EB%8B%A4%EA%BE%B8&type=video&key=AIzaSyAp7wwVT_hzfA2mSXrrh-1ZUx7QCX3ogtk",
		contentType: "application/json",
		success: function (data) {
			data.items.forEach(function (element, index) {
				$(".youtube_inner").append(
					'<div class="youtube_item"><iframe width="560" height="315" src="https://www.youtube.com/embed/' +
						element.id.videoId +
						'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>'
				);
			});
		},
		complete: function (data) {},
		error: function (xhr, status, error) {
			console.log("유튜브 요청 에러: " + error);
		},
	});
});

//파티클 생성 10개
//설명 : 파티클(작은거/큰거) 하나하나 태그로 넣기에는 너무 길어져서 사용함

const box = document.querySelector(".particle_container_inner");
let size_que = Math.floor(Math.random() * 5) + 1;

for (let i = 1; i < 10; i++) {
	if (i % 2 == 0) {
		box.innerHTML +=
			"<img class='particle_normal' src='../../assets/img/afresh/asset_particle.svg' alt='별모양 그림'>";
	} else {
		box.innerHTML +=
			"<img class='particle_light' src='../../assets/img/afresh/asset_particle.svg' alt='별모양 그림'>";
	}
}

//marquee 효과 구현
//설명 : 기본적으로 천천히 흘러가고 스크롤에 따라 더 빠르게 흐름
const pTag1 = document.querySelector(".first-parallel");
const pTag2 = document.querySelector(".second-parallel");

const textArr1 =
	"DREAMS BECOME TRUE ← [GGUDA] ← DREAMS BECOME TRUE ← [GGUDA] ← DREAMS BECOME TRUE ← [GGUDA] ← DREAMS BECOME TRUE ← [GGUDA] ← DREAMS BECOME TRUE ← [GGUDA] ← DREAMS BECOME TRUE ← [GGUDA] ←".split(
		" "
	);
const textArr2 =
	"DREAMS BECOME TRUE → [GGUDA] → DREAMS BECOME TRUE → [GGUDA] → DREAMS BECOME TRUE → [GGUDA] → DREAMS BECOME TRUE → [GGUDA] → DREAMS BECOME TRUE → [GGUDA] → DREAMS BECOME TRUE → [GGUDA] →".split(
		" "
	);

let count1 = 0;
let count2 = 0;

initTexts(pTag1, textArr1);
initTexts(pTag2, textArr2);

function initTexts(element, textArray) {
	textArray.push(...textArray);
	for (let i = 0; i < textArray.length; i++) {
		element.innerText += `${textArray[i]}\u00A0\u00A0\u00A0\u00A0`;
	}
}

function marqueeText(count, element, direction) {
	if (count > element.scrollWidth / 2) {
		element.style.transform = `translate3d(0, 0, 0)`;
		count = 0;
	}
	element.style.transform = `translate3d(${direction * count}px, 0, 0)`;

	return count;
}

function animate() {
	count1++;
	count2++;

	count1 = marqueeText(count1, pTag1, -1);
	count2 = marqueeText(count2, pTag2, 1);

	window.requestAnimationFrame(animate);
}

function scrollHandler() {
	count1 += 15;
	count2 += 15;
}

// window.addEventListener('scroll', scrollHandler)
animate();

//스크롤 값에 따라 변경할 클래스 및 효과
const header = document.querySelector(".header");
const profileClose = document.querySelector(".profile_cont_close");
const profile = document.querySelector(".profile_cont");
const scrollUp = document.querySelector(".btn_scroll_top");

// 스크롤 TOP 선택시 부드럽게 이동
scrollUp.addEventListener("click", (e) => {
	e.preventDefault(); //이벤트가 발생했을때 걸려있는 링크 이동을 차단 시킴
	window.scrollTo({
		left: 0,
		top: 0,
		behavior: "smooth",
	});
});

// 스티커 선택
// 스티커 선택
const stickerAll = document.querySelectorAll(".sticker");
const size = document.querySelectorAll(".size");

const stickerContainer = document.querySelector(".sticker_cont > div");

stickerAll.forEach((item, where) => {
	item.onmousedown = function (event) {
		let shiftX = event.clientX - item.getBoundingClientRect().left;
		let shiftY = event.clientY - item.getBoundingClientRect().top;

		item.style.position = "absolute";
		item.style.border = "1px dashed #721aff";
		item.style.borderRadius = "15px";
		item.style.zIndex = 100;

		document.body.append(item);

		moveAt(event.pageX, event.pageY);

		// 초기 이동을 고려한 좌표 (pageX, pageY)에서
		// 공을 이동합니다.
		function moveAt(pageX, pageY) {
			console.log("move at : ", pageX, pageY);

			item.style.left = pageX - shiftX + "px";
			item.style.top = pageY - shiftY + "px";
		}

		function onMouseMove(event) {
			moveAt(event.pageX, event.pageY);
		}

		// mousemove로 공을 움직입니다.
		document.addEventListener("mousemove", onMouseMove);

		// 공을 드롭하고, 불필요한 핸들러를 제거합니다.
		item.onmouseup = function () {
			document.removeEventListener("mousemove", onMouseMove);

			function elementsOverlap(el1, el2) {
				console.log("감지 실행");
				const domRect1 = el1.getBoundingClientRect();
				const domRect2 = el2.getBoundingClientRect();

				return !(
					domRect1.top > domRect2.bottom ||
					domRect1.right < domRect2.left ||
					domRect1.bottom < domRect2.top ||
					domRect1.left > domRect2.right
				);
			}

			let el1 = item;
			let box = document.querySelector(".sticker_cont > div");
			let editor = document.querySelector(".intro_input");

			if (elementsOverlap(el1, box) || !elementsOverlap(el1, editor)) {
				item.style.position = "static";
				document.querySelector(".sticker_cont > div").append(item);
			}

			item.style.border = "5px solid rgba(255, 255, 255, 0)";
			item.onmouseup = null;
		};
	};

	item.ondragstart = function () {
		return false;
	};
});

//텍스트 에디터
const editor = document.getElementById("editor");
const btnBold = document.getElementById("btn-bold");
const btnItalic = document.getElementById("btn-italic");
const btnUnderline = document.getElementById("btn-underline");
const btnStrike = document.getElementById("btn-strike");
const btnOrderedList = document.getElementById("btn-ordered-list");
const btnUnorderedList = document.getElementById("btn-unordered-list");

const btnImage = document.getElementById("btn-image");
const imageSelector = document.getElementById("img-selector");

btnBold.addEventListener("click", function () {
	setStyle("bold");
});

btnItalic.addEventListener("click", function () {
	setStyle("italic");
});

btnUnderline.addEventListener("click", function () {
	setStyle("underline");
});

btnStrike.addEventListener("click", function () {
	setStyle("strikeThrough");
});

btnOrderedList.addEventListener("click", function () {
	setStyle("insertOrderedList");
});

btnUnorderedList.addEventListener("click", function () {
	setStyle("insertUnorderedList");
});

btnImage.addEventListener("click", function () {
	imageSelector.click();
});

imageSelector.addEventListener("change", function (e) {
	const files = e.target.files;
	if (!!files) {
		insertImageDate(files[0]);
	}
});

editor.addEventListener("keydown", function () {
	checkStyle();
});

editor.addEventListener("mousedown", function () {
	checkStyle();
});

function setStyle(style) {
	document.execCommand(style);
	focusEditor();
	checkStyle();
}

function insertImageDate(file) {
	const reader = new FileReader();
	reader.addEventListener("load", function (e) {
		focusEditor();
		document.execCommand("insertImage", false, `${reader.result}`);
	});
	reader.readAsDataURL(file);
}

function checkStyle() {
	if (isStyle("bold")) {
		btnBold.classList.add("active");
	} else {
		btnBold.classList.remove("active");
	}
	if (isStyle("italic")) {
		btnItalic.classList.add("active");
	} else {
		btnItalic.classList.remove("active");
	}
	if (isStyle("underline")) {
		btnUnderline.classList.add("active");
	} else {
		btnUnderline.classList.remove("active");
	}
	if (isStyle("strikeThrough")) {
		btnStrike.classList.add("active");
	} else {
		btnStrike.classList.remove("active");
	}
	if (isStyle("insertOrderedList")) {
		btnOrderedList.classList.add("active");
	} else {
		btnOrderedList.classList.remove("active");
	}
	if (isStyle("insertUnorderedList")) {
		btnUnorderedList.classList.add("active");
	} else {
		btnUnorderedList.classList.remove("active");
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
	editor.focus({ preventScroll: true });
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
