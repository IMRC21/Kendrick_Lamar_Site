// JavaScript Document
var es = 0;

function linka(dove){
	console.log(dove);
	
	var altezza = document.getElementById(dove).clientHeight;
	var head = document.getElementById("header").clientHeight;
	var he = document.getElementById(dove);	
	var ofs = parseInt(he.offsetTop);
	
	/*
	console.log("Altezza header:" + head);
	console.log("Altezza sezione:" + altezza);
	console.log("offset TOP: " + ofs);
	*/
	
	window.scrollTo(0, (ofs-head));
	
}

function cop(){
	var d = new Date()
	var anno = d.getFullYear();
	
	console.log(anno);
	
	document.getElementById("fsopra").innerHTML = "Copryrights © 4ai " + anno + "  all rights reserved";
	
}
/*
window.onscroll = function() {scrolla()};


function scrolla(){
	
	
	var winScroll = document.getElementsByClassName("articoli").scrollTop;
  	var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  	var scrolled = (winScroll / height) * 100;
	console.log(scrolled);
	
	document.getElementById("pr-bar").style.width = scrolled + "%";
	
	
	
	
}*/

function menuDiv() {
	var div = document.getElementById("mshow");
		if (div.style.display === "block") {
			div.style.display = "none";
			} else {
			div.style.display = "block";
			}
	}

function nascondi(){
	var div = document.getElementById("mshow");
	div.style.display = "none";
			}
			
function register(){
	var div = document.getElementById("registerform");
	document.getElementById("container").style.filter = "blur(3px)";
	div.style.display = "block";
			}
			
function mostra(){
	var div = document.getElementById("registerform");
	document.getElementById("container").style.filter = "blur(0px)";
	div.style.display = "none";
			}

function easteregg(){
	es += 1;
	if(es>5){
		es=0;
		alert("Created By Marian and Tommaso");
	}
}










