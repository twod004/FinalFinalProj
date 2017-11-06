window.onload = function() {
	var y = document.getElementsByClassName("slide-button");
	for(i=0; i < y.length; i++){
		y[i].addEventListener("click",showSlide.bind(this,i));
	}
	showSlide(0);
	document.getElementById("left").addEventListener("click",showPrevSlide.bind(this,""));
	document.getElementById("right").addEventListener("click",showNextSlide.bind(this,""));
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
  
  document.getElementById("slide-state").innerHTML = n;
}
function showPrevSlide(){
	var current = document.getElementById("slide-state").innerHTML;
	console.log(current.innerHTML);
	if(current == "0"){
		showSlide(2);
	}else{
		showSlide(parseInt(current)-1);
	}
}

function showNextSlide(){
	var current = document.getElementById("slide-state").innerHTML;
	if(current == "2"){
		showSlide(0);
	}else{
		showSlide(parseInt(current)+1);
	}
}