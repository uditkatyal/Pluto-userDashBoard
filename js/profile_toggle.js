const clickedYes = document.getElementById("clicked-yes");
const activeClass = document.querySelector(".active-yes");
const clickedNo1 = document.getElementsByClassName("clicked-no-1");

// console.log(clickedYes1);

// clickedYes1.addEventListener("click", () => {
//   console.log("Hello!");
//   activeClass.classList.remove("active-yes");
// });
// console.log(clickedYes);
clickedYes.addEventListener("click", () => {
  console.log("hello");
  activeClass.classList.remove("active-yes");
});

clickedNo1.addEventListener("click", () => {
  activeClass.classList.add("active-yes");
});
