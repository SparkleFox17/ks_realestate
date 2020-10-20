//nav starts
const nav = document.getElementById("main-nav");
const navItems = document.querySelectorAll("#main-nav li.main-item");
const subNavParent = document.getElementsByClassName("has-sub-nav");
const subNav = document.getElementsByClassName("sub-nav");

// mouseover subnav parent
for (let i = 0; i < subNavParent.length; i++) {
  subNavParent[i].addEventListener("mouseover", showSubNav);
}
// remove active for normal main items
for (let i = 0; i < navItems.length; i++) {
  if (!navItems[i].classList.contains("has-sub-nav")) {
    navItems[i].addEventListener("mouseover", hideSubNav);
  }
}
// remove active leaving subnav
for (let i = 0; i < subNav.length; i++) {
  subNav[i].addEventListener("mouseleave", hideSubNav);
}

function showSubNav(e) {
  let el = e.target;
  let nav = el.querySelector(".sub-nav");

  if (nav !== null) {
    nav.classList.add("active");
  }
}
function hideSubNav(e) {
  for (let i = 0; i < subNav.length; i++) {
    subNav[i].classList.remove("active");
  }
}
//nav end
