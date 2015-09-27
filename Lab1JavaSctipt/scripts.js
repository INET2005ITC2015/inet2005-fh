/**
 * Created by inet2005 on 9/27/15.
 */
"use strict";
function switcher (currentElement){
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

}

function accordion (currentElement){
    var header1 = document.getElementById("header1");
    var header2 = document.getElementById("header2");
    var header3 = document.getElementById("header3");
    var header4 = document.getElementById("header4");
    var p1 = document.getElementById("p1");
    var p2 = document.getElementById("p2");
    var p3 = document.getElementById("p3");
    var p4 = document.getElementById("p4");

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

document.getElementById("firstdiv").addEventListener("dblclick", function(){switcher(this)
});
document.getElementById("seconddiv").addEventListener("dblclick", function(){switcher(this)});
