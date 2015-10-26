"use strict";
//reset
function reset() {
    var celllist = document.getElementsByClassName("edit");
    for (var i = 0; i < celllist.length; i++) {
        celllist[i].innerHTML = "";
    }
}

function objectyourequired(){
    this.there = function(){ alert('you have won');}

}
//this checks to see if the game is over, it looks at all cells flagged as edit
//it then looks for the color red and if it finds red it sets and object to false, if
//the test is true at the end then it runs an object that displays they won.
function complete() {
    var test = true;
    var celllist = document.getElementsByClassName("edit");
    for (var i = 0; i < celllist.length; i++) {
        if (celllist[i].innerHTML === "" || celllist[i].style.color === 'red') {
            test = false;
        }
    }
    if (test) {
        var myObject = new objectyourequired();
        myObject.there();
    }
}


//this function runs all the checks on the new number
(function () {
    var celllist = document.getElementsByClassName("edit");
    for (var i = 0; i < celllist.length; i++) {
        celllist[i].addEventListener('keyup', function () {
            numcheck(this);
            rcheck(this);
            ccheck(this);
            complete();
        })
    }
})();

//checks to make sure the number is valid and if valid it sets it to green to get around the red from errors.
//the red will be added if the code errors.
function numcheck(element) {
    // var num = element.innerHTML;
    if (!/^[1-9]$/.test(element.innerHTML)) {
        alert("Enter only numbers 1-9");
        element.innerHTML = "";


    }
    else {

        element.style.color = "green";
    }


}
//walks the number through and takes the correct part of the class name to make sure that the
//number is not in violation or row
function rcheck(element) {
    var regExR = /r[1-9]/;
    var className = element.className;
    var rClass = regExR.exec(className);
    var text = element.innerHTML;
    var temp = document.getElementsByClassName(rClass[0]);
    for (var i = 0; i < temp.length; i++) {
        if (temp[i].innerHTML == text && temp[i].className != (className)) {
            element.style.color = "red";
        }

    }
}
//walks the number through and takes the correct part of the class name to make sure that the
//number is not in violation or col
function ccheck(element) {
    var regExR = /c[1-9]/;
    var className = element.className;
    var cClass = regExR.exec(className);
    var text = element.innerHTML;
    var temp = document.getElementsByClassName(cClass[0]);
    for (var i = 0; i < temp.length; i++) {
        if (temp[i].innerHTML == text && temp[i].className != (className)) {
            element.style.color = "red";
        }
    }
}
//walks the number through and takes the correct part of the class name to make sure that the
//number is not in violation or box
function bcheck(element) {
    var regExR = /b[1-9]/;
    var className = element.className;
    var bClass = regExR.exec(className); //takes only the part of the class name that matches the regex at the start
    var text = element.innerHTML;
    var temp = document.getElementsByClassName(bClass[0]);
    for (var i = 0; i < temp.length; i++) {
        if (temp[i].innerHTML == text && temp[i].className != (className)) {
            element.style.color = "red";
        }
    }
}

//hard coded function for inserting the values to complete the sudoku
function filler() {
//row 1
    document.getElementsByClassName("r1 c1")[0].innerHTML = "1";
    document.getElementsByClassName("r1 c2")[0].innerHTML = "2";
    document.getElementsByClassName("r1 c5")[0].innerHTML = "6";
    document.getElementsByClassName("r1 c7")[0].innerHTML = "8";
    document.getElementsByClassName("r1 c9")[0].innerHTML = "9";

//row 2
    document.getElementsByClassName("r2 c1")[0].innerHTML = "8";
    document.getElementsByClassName("r2 c2")[0].innerHTML = "9";
    document.getElementsByClassName("r2 c3")[0].innerHTML = "6";
    document.getElementsByClassName("r2 c4")[0].innerHTML = "2";
    document.getElementsByClassName("r2 c5")[0].innerHTML = "4";
    document.getElementsByClassName("r2 c6")[0].innerHTML = "7";
    document.getElementsByClassName("r2 c9")[0].innerHTML = "5";

//row 3
    document.getElementsByClassName("r3 c3")[0].innerHTML = "7";
    document.getElementsByClassName("r3 c4")[0].innerHTML = "1";
    document.getElementsByClassName("r3 c5")[0].innerHTML = "8";
    document.getElementsByClassName("r3 c6")[0].innerHTML = "9";
    document.getElementsByClassName("r3 c8")[0].innerHTML = "4";
    document.getElementsByClassName("r3 c9")[0].innerHTML = "6";

//row 4
    document.getElementsByClassName("r4 c1")[0].innerHTML = "5";
    document.getElementsByClassName("r4 c2")[0].innerHTML = "1";
    document.getElementsByClassName("r4 c3")[0].innerHTML = "8";
    document.getElementsByClassName("r4 c4")[0].innerHTML = "4";
    document.getElementsByClassName("r4 c6")[0].innerHTML = "6";

//row 5
    document.getElementsByClassName("r5 c2")[0].innerHTML = "3";
    document.getElementsByClassName("r5 c4")[0].innerHTML = "7";
    document.getElementsByClassName("r5 c5")[0].innerHTML = "1";
    document.getElementsByClassName("r5 c6")[0].innerHTML = "5";
    document.getElementsByClassName("r5 c8")[0].innerHTML = "2";

//row 6
    document.getElementsByClassName("r6 c4")[0].innerHTML = "3";
    document.getElementsByClassName("r6 c6")[0].innerHTML = "8";
    document.getElementsByClassName("r6 c7")[0].innerHTML = "5";
    document.getElementsByClassName("r6 c8")[0].innerHTML = "6";
    document.getElementsByClassName("r6 c9")[0].innerHTML = "1";

//row 7
    document.getElementsByClassName("r7 c1")[0].innerHTML = "7";
    document.getElementsByClassName("r7 c2")[0].innerHTML = "8";
    document.getElementsByClassName("r7 c4")[0].innerHTML = "9";
    document.getElementsByClassName("r7 c5")[0].innerHTML = "3";
    document.getElementsByClassName("r7 c6")[0].innerHTML = "4";
    document.getElementsByClassName("r7 c7")[0].innerHTML = "6";

//row 8
    document.getElementsByClassName("r8 c1")[0].innerHTML = "9";
    document.getElementsByClassName("r8 c2")[0].innerHTML = "0";
    document.getElementsByClassName("r8 c3")[0].innerHTML = "0";
    document.getElementsByClassName("r8 c4")[0].innerHTML = "6";
    document.getElementsByClassName("r8 c5")[0].innerHTML = "7";
    document.getElementsByClassName("r8 c6")[0].innerHTML = "2";
    document.getElementsByClassName("r8 c7")[0].innerHTML = "1";
    document.getElementsByClassName("r8 c8")[0].innerHTML = "8";
    document.getElementsByClassName("r8 c9")[0].innerHTML = "3";

//row 9
    document.getElementsByClassName("r9 c1")[0].innerHTML = "2";
    document.getElementsByClassName("r9 c3")[0].innerHTML = "3";
    document.getElementsByClassName("r9 c5")[0].innerHTML = "5";
    document.getElementsByClassName("r9 c8")[0].innerHTML = "9";
    document.getElementsByClassName("r9 c9")[0].innerHTML = "4";

    //dummy data
    //document.getElementsByClassName("r2 c1")[0].innerHTML = "0";
    //document.getElementsByClassName("r2 c2")[0].innerHTML = "0";
    //document.getElementsByClassName("r2 c3")[0].innerHTML = "0";
    //document.getElementsByClassName("r2 c4")[0].innerHTML = "0";
    //document.getElementsByClassName("r2 c5")[0].innerHTML = "0";
    //document.getElementsByClassName("r2 c6")[0].innerHTML = "0";
    //document.getElementsByClassName("r2 c7")[0].innerHTML = "0";
    //document.getElementsByClassName("r2 c8")[0].innerHTML = "0";
    //document.getElementsByClassName("r2 c9")[0].innerHTML = "0";

}
//listeners
document.getElementById("reset").addEventListener("click", reset);
document.getElementById("filler").addEventListener("click", filler);

