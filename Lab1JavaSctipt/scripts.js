/**
 * Created by inet2005 on 9/27/15.
 */
"use strict";
//function switcher (currentElement){
//    var div1 = document.getElementById("firstdiv");
//    var div2 = document.getElementById("seconddiv");
//
//    if (currentElement === div1){
//        div1.style.zIndex = 0;
//        div2.style.zIndex = 1;
//        div1.style.opacity = .5;
//        div2.style.opacity = 1;
//    }
//    else {
//        div1.style.zIndex = 1;
//        div2.style.zIndex = 0;
//        div1.style.opacity = 1;
//        div2.style.opacity = .5;
//    }
//
//}

function accordion (currentElement){
    var header1 = document.getElementById("header1");
    var header2 = document.getElementById("header2");
    var header3 = document.getElementById("header3");
    var header4 = document.getElementById("header4");
    var p1 = document.getElementById("p1");
    var p2 = document.getElementById("p2");
    var p3 = document.getElementById("p3");
    var p4 = document.getElementById("p4");
    //could look to make these all the same so that the start sets all others to the !== equivalent now
    //then set the else to the switch back, maybe make it a function set so it calls the function.
    if (currentElement === header1){
        header1.style.backgroundColor = "blue";
        p1.style.display = "inline";
    }
    else if (currentElement !== header1) {
        header1.style.backgroundColor = "green";
        p1.style.display = "none";

    }

    if (currentElement === header2) {
        header2.style.backgroundColor = "blue";
        p2.style.display = "inline";
    }
    else if (currentElement !== header2) {
        header2.style.backgroundColor = "green";
        p2.style.display = "none";
    }

    if (currentElement === header3) {
        header3.style.backgroundColor = "blue";
        p3.style.display = "inline";
    }
    else if (currentElement !== header3) {
        header3.style.backgroundColor = "green";
        p3.style.display = "none";
    }

    if (currentElement === header4) {
        header4.style.backgroundColor = "blue";
        p4.style.display = "inline";
    }
    else if (currentElement !== header4) {
        header4.style.backgroundColor = "green";
        p4.style.display = "none";
    }
}

document.getElementById("firstdiv").addEventListener("dblclick", function(currentElement){
    var div1 = document.getElementById("firstdiv");
    var div2 = document.getElementById("seconddiv");

    if (currentElement === div1){
        div1.style.zIndex = 0;
        div2.style.zIndex = 1;
        div1.style.opacity = .5;
        div2.style.opacity = 1;
    }
    else {
        div1.style.zIndex = 1;
        div2.style.zIndex = 0;
        div1.style.opacity = 1;
        div2.style.opacity = .5;
    }
});
document.getElementById("seconddiv").addEventListener("dblclick", function(currentElement){
    var div1 = document.getElementById("firstdiv");
    var div2 = document.getElementById("seconddiv");

    if (currentElement !== div1){
        div1.style.zIndex = 0;
        div2.style.zIndex = 1;
        div1.style.opacity = .5;
        div2.style.opacity = 1;
    }
    else {
        div1.style.zIndex = 1;
        div2.style.zIndex = 0;
        div1.style.opacity = 1;
        div2.style.opacity = .5;
    }
});


document.getElementById("header1").addEventListener("click", function(){accordion(this)});
document.getElementById("header2").addEventListener("click", function(){accordion(this)});
document.getElementById("header3").addEventListener("click", function(){accordion(this)});
document.getElementById("header4").addEventListener("click", function(){accordion(this)});


//document.getElementsByTagName("body").addEventListener("onload", function(){imageloader()});
window.addEventListener('DOMContentLoaded',function(){imageloader()});


onload="imageloader()"
var myCounter = 0;

function changeImage(){

    var elementID = document.getElementById("slide1");
    var style = window.getComputedStyle(elementID);
    var x1 = style.getPropertyValue("z-index");

    if (x1 == "1") {
        document.getElementById("slide1").style.zIndex = "2";
        document.getElementById("slide1").style.visibility = "hidden";
        document.getElementById("slide2").style.zIndex = "1";
        document.getElementById("slide2").style.visibility = "hidden";
        document.getElementById("slide3").style.zIndex = "3";
        document.getElementById("slide3").style.visibility = "visible";
    }
    else if (x1 == "2") {
        document.getElementById("slide1").style.zIndex = "3";
        document.getElementById("slide1").style.visibility = "visible";
        document.getElementById("slide2").style.zIndex = "2";
        document.getElementById("slide2").style.visibility = "hidden";
        document.getElementById("slide3").style.zIndex = "1";
        document.getElementById("slide3").style.visibility = "hidden";
    }
    else if (x1 == "3") {
        document.getElementById("slide1").style.zIndex = "1";
        document.getElementById("slide1").style.visibility = "hidden";
        document.getElementById("slide2").style.zIndex = "3";
        document.getElementById("slide2").style.visibility = "visible";
        document.getElementById("slide3").style.zIndex = "2";
        document.getElementById("slide3").style.visibility = "hidden";
    }
}

function imageloader(){setInterval(function(){changeImage()}, 1000)}