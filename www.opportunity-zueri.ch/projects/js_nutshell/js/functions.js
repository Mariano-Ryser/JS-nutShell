//BACK TO TOP BUTTON
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

var myHome = document.getElementById("myHome");

if (window.location.pathname === "/projects/js_nutshell/home.php") {
  myHome.style.display = "none";
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

////////JS FONT SIZER MAYBE I DON'T KNOW HOW THIS WORKS OKAY THANKS BYE/////////////////////
function clampBuilder(minWidthPx, maxWidthPx, minFontSize, maxFontSize) {
  const root = document.querySelector("html");
  const pixelsPerRem = Number(getComputedStyle(root).fontSize.slice(0, -2));

  const minWidth = minWidthPx / pixelsPerRem;
  const maxWidth = maxWidthPx / pixelsPerRem;

  const slope = (maxFontSize - minFontSize) / (maxWidth - minWidth);
  const yAxisIntersection = -minWidth * slope + minFontSize;

  return `clamp(${minFontSize}rem, ${yAxisIntersection}rem + ${
    slope * 100
  }vw, ${maxFontSize}rem)`;
}

function calculateCh(element, fontSize) {
  const zero = document.createElement("span");
  zero.innerText = "0";
  zero.style.position = "absolute";
  zero.style.fontSize = fontSize;

  element.appendChild(zero);
  const chPixels = zero.getBoundingClientRect().width;
  element.removeChild(zero);

  return chPixels;
}

const div = document.querySelector("div");
div.style.fontSize = clampBuilder(320, 960, 1, 3);
div.style.width = `${(320 / calculateCh(div, "1rem")) * 0.6}ch`;
