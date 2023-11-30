const gap = 16;

const carousel = document.getElementById("carousel"),
  content = document.getElementById("content"),
  next = document.getElementById("next"),
  prev = document.getElementById("prev");
  prev_svg = document.getElementById("prev_svg");
  next_svg = document.getElementById("next_svg");
next.addEventListener("click", e => {
  carousel.scrollBy(width + gap, 0);
  if (carousel.scrollWidth !== 0) {
    prev.disabled = false;
  }
  if (content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
    next.disabled = true;
  }
});
prev.addEventListener("click", e => {
  carousel.scrollBy(-(width + gap), 0);
  if (carousel.scrollLeft - width - gap <= 0) {
    prev.disabled = true;
  }
  if (!content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
    next.disabled = false;
  }
});

let width = carousel.offsetWidth;
window.addEventListener("resize", e => (width = carousel.offsetWidth));
