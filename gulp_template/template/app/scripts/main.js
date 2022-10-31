// Slick slider
$(document).ready(function () {
  $(".quote-list").slick({
    prevArrow:
      "<button type='button' class='slick-prev pull-left'><i class='fal fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow:
      "<button type='button' class='slick-next pull-right'><i class='fal fa-angle-right' aria-hidden='true'></i></button>",
    responsive: [
      {
        breakpoint: 767,
        settings: {
          arrows: false,
        },
      },
    ],
  });
});
document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.querySelector(".header-toggle");
  const menu = document.querySelector(".header-menu");
  menuToggle.addEventListener("click", function () {
    menu.classList.add("is-expand");
  });
  window.addEventListener("click", function (e) {
    if (!menu.contains(e.target) && !e.target.matches(".header-toggle")) {
      menu.classList.remove("is-expand");
    }
  });

  const wedoItems = document.querySelectorAll(".wedo-item");

  wedoItems.forEach((item) => {
    item.addEventListener("click", function () {
      let title = this.children[0].querySelector(".wedo-item-arrow");
      let panel = this.children[1];
      if (item.classList.contains("is-open")) {
        item.classList.remove("is-open");
        panel.style.maxHeight = null;
        panel.style.borderBottom = "unset";
        title.classList.remove("fa-angle-up");
        title.classList.add("fa-angle-down");
      } else {
        const itemsWithOpen = document.querySelectorAll(".is-open");
        itemsWithOpen.forEach((itemWithOpen) => {
          itemWithOpen.classList.remove("is-open");
          itemWithOpen.children[1].style.maxHeight = null;
          itemWithOpen.children[1].style.borderBottom = "unset";
          let titleOpen =
            itemWithOpen.children[0].querySelector(".wedo-item-arrow");
          titleOpen.classList.remove("fa-angle-up");
          titleOpen.classList.add("fa-angle-down");
        });
        item.classList.add("is-open");
        panel.style.maxHeight = panel.scrollHeight + "px";
        panel.style.borderBottom = "1px solid #f5f5f5";
        title.classList.add("fa-angle-up");
        title.classList.remove("fa-angle-down");
      }
    });
  });
});
