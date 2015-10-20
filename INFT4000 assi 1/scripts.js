"use strict";

function reset() {
    ('.subTable').empty()
}

function numcheck(element) {
    var num = element.innerHTML;
    if (!/^[1-9]$/.test(num)){
        alert("Enter only numbers 1-9");
       element.innerHTML = "";

    }
    else {


    }


}


function doublechecker(){}

var celllist = document.getElementsByClassName("edit");
for(var i=0 ; i<celllist.length; i++)
{
    celllist[i].addEventListener('keyup', function(){
        numcheck(this)
    })
}