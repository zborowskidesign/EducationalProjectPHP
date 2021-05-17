const c = document.querySelector(".container_indicator");
const indexs = Array.from(document.querySelectorAll(".index"));
let cur = -1;
indexs.forEach((index, i) => {
  index.addEventListener("click", (e) => {
    // clear
    c.className = "container_indicator";
    void c.offsetWidth;
    c.classList.add("open");
    c.classList.add(`i${i + 1}`);
    if (cur > i) {
      c.classList.add("flip");
    }
    cur = i;
  });
});
