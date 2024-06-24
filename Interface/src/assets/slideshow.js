// assets/slideshow.js

let slideIndex = 0;

function showSlides() {
  let slides = document.getElementsByClassName("mySlides");

  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slideIndex++;

  if (slideIndex > slides.length) {
    slideIndex = 1;
  }

  slides[slideIndex - 1].style.display = "block";

  setTimeout(showSlides, 3000); // Thay đổi 3000 để điều chỉnh thời gian chuyển đổi slide
}

// Bắt đầu slideshow khi trang được tải
document.addEventListener("DOMContentLoaded", function () {
  showSlides();
});
