/* ### quote animation ### */
function animQuote() {
    let quote = document.querySelector("#introAnimation");
    let strSplit = quote.innerText.split(" "),
      dl = 0,
      txt = "";
  
    strSplit.forEach(function(value) {
      txt += `<span class='word'>${value}</span>`;
    });
  
    quote.innerHTML = txt;
  }

  // defining title element class
class eTitle {
  constructor(eTarget) {
    this.eTarget = document.querySelector(`${eTarget}`);
  }

  get newArr() {
    let strSplit = this.eTarget.innerText.split(''), txt = "";
    strSplit.forEach(function(value) {
      if(value === " ") {
        txt += `<span class="letter">&nbsp;</span>`;
      } else {
        txt += `<span class="letter">${value}</span>`;
      }
    });
    this.eTarget.innerHTML = txt;
  }
}

/* ##### team collapse animejs animation #### */

anime.timeline({ loop: false})
.add({
  targets: ['.wht-bar'],
  width: [0, '100%'],
  duration: 800,
  easing: 'easeOutQuad',
  delay: (el, i) => {
    return i*85;
  }
})
.add({
  targets: ['.director.title', '.director.subtitle', '.advisory.title'],
  opacity: [0,1],
  duration: 800,
});

/* animejs circle animation */
/* ################ */
anime.timeline({ loop: true }).add({
  targets: ".circle-container",
  duration: 5000,
  rotate: [0, 360],
  easing: "linear"
});
anime.timeline({ loot: true})
.add({
  targets: '#diamond',
  transform: [0, -360],
  duration: 5000
})

