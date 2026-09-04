///////////////* ハンバーガーメニュー *///////////////
const hamburgerBtn = document.getElementById("hamburger-button");
const navigation = document.getElementById("sp-navigation");
const navLinks = document.querySelectorAll("#sp-navigation a");

//ハンバーガーメニューを開く
hamburgerBtn.addEventListener("click", () => {
  hamburgerBtn.classList.toggle("is-opened");
  navigation.classList.toggle("is-opened");

  const isOpened = navigation.classList.contains("is-opened");
  hamburgerBtn.setAttribute("aria-expanded", isOpened);
});

//各セクションに飛んだあと、メニューを閉じる
function closeMenu(){
  hamburgerBtn.classList.remove("is-opened");
  navigation.classList.remove("is-opened");
}

navLinks.forEach((link)=>{
  link.addEventListener("click", closeMenu);
});

//FVのカルーセル対応
const slides = document.querySelectorAll('.slide');
let current = 0;

setInterval(() => {
  slides[current].classList.remove('active');

  current = (current + 1) % slides.length;

  slides[current].classList.add('active');
}, 5000);