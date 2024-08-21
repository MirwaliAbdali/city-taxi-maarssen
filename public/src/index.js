icon = document.querySelector("#icon");

icon.addEventListener("click", () => {
    navBar = document.querySelector(".nav-right");
    navBar.classList.toggle("active");
    icon.classList.toggle("cross-icon");
});

// NAVBAR
const nav = document.querySelector(".navbar");
let lastScrollTop = 0;

window.onscroll = function () {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop === 0) {
        nav.style.backgroundColor = "transparent";
        nav.style.transition = ".9s";
    }
    if (scrollTop > lastScrollTop) {
        nav.classList.add("hide");
        nav.style.transition = ".9s";
        nav.style.backgroundColor = "black";
    } else {
        nav.classList.remove("hide");
    }
    lastScrollTop = scrollTop;
};

// COPY RIGHT PART

const year = new Date().getFullYear();
const copyRight = document.querySelector(".copyright");
const copyRightMessage = (document.querySelector(
    ".copyright"
).innerHTML = `&copy; ${year} | City Taxi Maarssen`);
