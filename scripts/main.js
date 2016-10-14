/**
 * Created by Justin on 10/13/2016.
 */
var head = document.getElementById("navBar");

var mark = document.getElementById("mark");
// mark.addEventListener("mouseover", function(){"./images/danielewski.jpeg", "Mark Danielweski", mark);
var cntMark = 0;
mark.addEventListener("mouseover", markFunction); 

var hein = document.getElementById("heinlein");
var cntHein = 0;
hein.addEventListener("mouseover", heinFunction); 

var moore = document.getElementById("moore");
var cntMoore = 0;
moore.addEventListener("mouseover", mooreFunction); 

var moore1 = document.getElementById("moore1");
var cntMoore1 = 0;
moore1.addEventListener("mouseover", moore1Function); 

var portis = document.getElementById("portis");
var cntPortis = 0;
portis.addEventListener("mouseover", portisFunction); 

var alexie = document.getElementById("alexie");
var cntAlex = 0;
alexie.addEventListener("mouseover", alexFunction); 

var proulx = document.getElementById("proulx");
var cntProulx = 0;
proulx.addEventListener("mouseover", proulxFunction); 

function markFunction(){ 
	if(cntMark < 1){
		var pic = document.createElement("img");
  pic.src = "./images/danielewski.jpeg";
  pic.alt = "Mark Danielweski";
  pic.height = 75;
  pic.width = 75;

  console.log("Hello again!");

  mark.appendChild(pic);
	cntMark += 1;
	}
	else {
		return;
	}
}

function heinFunction(){ 
	if(cntHein < 1){
		var pic = document.createElement("img");
  pic.src = "./images/heinlein.png";
  pic.alt = "Robert Heinlein";
  pic.height = 75;
  pic.width = 75;

  console.log("Hello again!");

  hein.appendChild(pic);
	cntHein += 1;
	}
	else {
		return;
	}
}


function mooreFunction(){ 
	if(cntMoore < 1){
		var pic = document.createElement("img");
  pic.src = "./images/moore.jpg";
  pic.alt = "Alan Moore";
  pic.height = 75;
  pic.width = 75;

  moore.appendChild(pic);
	cntMoore += 1;
	}
	else {
		return;
	}
}
function moore1Function(){ 
	if(cntMoore1 < 1){
		var pic = document.createElement("img");
  pic.src = "./images/moore1.jpg";
  pic.alt = "Alan Moore";
  pic.height = 75;
  pic.width = 75;

  moore1.appendChild(pic);
	cntMoore1 += 1;
	}
	else {
		return;
	}
}




// Thanks to stackoverflow users dash and jessegavin for the idea on implementing the show_pic function


