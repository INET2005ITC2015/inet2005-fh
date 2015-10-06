/**
 * Created by inet2005 on 10/5/15.
 */
function changeColor(currentElement) {
    currentElement.style.backgroundColor = "yellow";
    currentElement.style.fontStyle = "italic";
    currentElement.parentNode.style.textDecoration = "underline";
}

function changeColorBack(currentElement) {
    currentElement.style.backgroundColor = "white";
    currentElement.style.fontStyle = "none";
    currentElement.parentNode.style.textDecoration = "none";
}


function checkTerms(currentElement) {
    var checker = true;
    if (!document.getElementById("acceptterms").checked) {
        document.getElementById("accept").style.visibility = "visible";
        document.getElementById("accept").style.color = "red";
        checker = false;
    } else {
        document.getElementById("accept").style.visibility = "hidden";
    }

    if (document.forms["myform"].fName.value.length == 0) {
        document.getElementById("fName").style.borderColor = "red";
        checker = false;
    } else if (document.forms["myform"].fName.value.length != 0) {
        document.getElementById("fName").style.border = "";
    }
    if (document.forms["myform"].lName.value.length == 0) {
        document.getElementById("lName").style.borderColor = "red";
        checker = false;
    } else if (document.forms["myform"].lName.value.length != 0) {
        document.getElementById("lName").style.border = "";
    }
    if (document.forms["myform"].addressOne.value.length == 0) {
        document.getElementById("addressOne").style.borderColor = "red";
        checker = false;
    } else if (document.forms["myform"].addressOne.value.length != 0) {
        document.getElementById("addressOne").style.border = "";
    }
    if (document.forms["myform"].addressTwo.value.length == 0) {
        document.getElementById("addressTwo").style.borderColor = "red";
        checker = false;
    } else if (document.forms["myform"].addressTwo.value.length != 0) {
        document.getElementById("addressTwo").style.border = "";
    }
    if (document.forms["myform"].email.value.length == 0) {
        document.getElementById("email").style.borderColor = "red";
        checker = false;
    } else if (document.forms["myform"].email.value.length != 0) {
        document.getElementById("email").style.border = "";
    }
    return checker;
}

//    }
document.getElementById("fName").addEventListener("focus", function () {
    changeColor(this)
});
document.getElementById("fName").addEventListener("blur", function () {
    changeColorBack(this)
});
document.getElementById("lName").addEventListener("focus", function () {
    changeColor(this)
});
document.getElementById("lName").addEventListener("blur", function () {
    changeColorBack(this)
});
document.getElementById("addressOne").addEventListener("blur", function () {
    changeColorBack(this)
});
document.getElementById("addressOne").addEventListener("focus", function () {
    changeColor(this)
});
document.getElementById("addressTwo").addEventListener("blur", function () {
    changeColorBack(this)
});
document.getElementById("addressTwo").addEventListener("focus", function () {
    changeColor(this)
});
document.getElementById("email").addEventListener("blur", function () {
    changeColorBack(this)
});
document.getElementById("email").addEventListener("focus", function () {
    changeColor(this)
});


//document.getElementById("Sub").addEventListener("onClick", function () {
//    checkTerms(this)
//});
document.getElementById("myform").addEventListener("submit", function (event) {
    if (checkTerms(this)) {
        return true;
    } else {
        event.preventDefault();
    }

});


