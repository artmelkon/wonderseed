/* ### mobile menu function ### */
let modalBtn = document.getElementById("openBtn");
modalBtn.addEventListener("click", () => {
  let modalBg = document.getElementById("modal");
  modalBtn.classList.toggle("active");
  modalBg.classList.toggle("show-modal");
});

/* ### toggle directors list ### */
function toggleTitle(tgl, val) {
  let togElm = document.querySelectorAll(".directors-tab");
  for (let i = 0; i < togElm.length; i++) {
    togElm[i].classList.remove("show");
    document.querySelectorAll(".list-column")[i].style.display = "none";
  }

  if (tgl) {
    tgl.classList.toggle("show");
  }

  if (val === 0) {
    document.querySelector(".directors.list-column").style.display = "block";
  } else if (val === 1) {
    document.querySelector(".advisors.list-column").style.display = "block";
  }
}

function showIntro(elm, arg) {
  //console.log(elm.childNodes);
  if (arg === "director") {
    elm.children["Toggle"].classList.toggle("active");
    elm.classList.toggle("active");
  } else if (arg === "team") {
    elm.children[1].classList.toggle("show");
  }
}

/* toggle method */
function showFnc(elm) {
  elm.children[1].classList.toggle('show');
  console.log(elm.childNodes)
}

/* #### animejs animation below this line #### */

//console.log(vClass);

anime
  .timeline({ loop: false })
  .add({
    targets: ".letter",
    opacity: [0.5, 1],
    scaleX: [0, 1],
    easing: "easeOutExpo",
    duration: 200,
    delay: function(el, i) {
      return i * 65;
    }
  })
  .add({
    targets: ".intro-container .word",
    opacity: [0, 1],
    scaleY: [0, 1],
    easing: "easeOutExpo",
    duration: 500,
    delay: function(el, i) {
      return i * 85;
    },
    offset: "-=200"
  });

  
let crc = document.querySelectorAll(".rotate-title");
anime.timeline({ loop: true }).add({
  targets: crc,
  rotate: [0, -360],
  duration: 5000,
  easing: "linear",
  loop: true
});
