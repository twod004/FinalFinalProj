window.onload = init;

function init() {
    'use strict';
	showSlide(0);
}

function showSlide(n) {
  var i;
  var x = document.getElementsByClassName("imgSlideShow");
  var y = document.getElementsByClassName("slide-button");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
 
  x[n].style.display = "block";
  
  for (i = 0; i < y.length; i++) {
    y[i].style.backgroundColor = "white";
  }
  y[n].style.backgroundColor = "#231F20";
}