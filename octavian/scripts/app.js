document.addEventListener("DOMContentLoaded", function () {
  const menuOpen = document.querySelector(".menu-toggle");
  const menuClose = document.querySelector(".menu-close");
  const menu = document.querySelector(".menu");

  if (!menuClose || !menuOpen || !menu) return;
  menuOpen.addEventListener("click", function (e) {
    menu.classList.add("is-active");
  });
  menuClose.addEventListener("click", function (e) {
    menu.classList.remove("is-active");
  });
  document.addEventListener("click", function (e) {
    if (!menu.contains(e.target) && !e.target.matches(".menu-toggle")) {
      menu.classList.remove("is-active");
    }
  });
});
