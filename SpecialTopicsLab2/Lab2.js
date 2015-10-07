"use strict";

// array holds the student
var studentArray = [];

function show() {
    var text =  JSON.stringify(studentArray),
        myElement = document.getElementById("tooltip");
    myElement.innerHTML = text;
    myElement.style.visibility = "visible"
}

function clear() {
    document.getElementById("tooltip").style.visibility = "hidden";
}

function reset() {
    var inputFields = document.getElementsByTagName("input"),
        counter = 0;
    for (counter; counter < inputFields.length; counter++) {
        inputFields[counter].value = "";
    }
}

function ToList() {
    var myList = document.getElementById("displayStudents"),
        newItem = document.createElement("li"),
        student = studentArray[studentArray.length - 1],
        studentText = document.createTextNode(student.printStudent());
    myList.appendChild(newItem);
    newItem.appendChild(studentText);
}

function Student(id, fName, lName) {
    this.id = id;
    this.fName = fName;
    this.lName = lName;
}

Student.prototype.printStudent = function () {
    return this.id + ", " + this.fName + " " + this.lName;
};

// add new student to array
function newStudent(id, fname, lname) {
    var studentToAdd = new Student(id, fname, lname);
    studentArray.push(studentToAdd);
    reset();
    ToList();
}

// check for conflicts
function StudentChecker(id) {
    var Exists = false,
        counter = 0;
    for (counter; counter < studentArray.length; counter++) {
        if (id === studentArray[counter].id) {
            Exists = true;
        }
    }
    return Exists;
}

// validate the user input before adding the new student both for ID and for no entry of data
function validateInput() {
    var id = document.getElementById("studentID").value,
        fName = document.getElementById("fName").value,
        lName = document.getElementById("lName").value;
    if ((!StudentChecker(id))
        && (document.forms["NewStudent"].studentID.value.length !== 0)
        && (document.forms["NewStudent"].fName.value.length !== 0)
        && (document.forms["NewStudent"].lName.value.length !== 0)){

        newStudent(id, fName, lName);
    } else {
        document.getElementById("errorField").innerHTML = "ID already in use or all fields not full";
        reset();
    }
}

// submit button
document.getElementById("submit").addEventListener("click", function () {
    validateInput();
});

document.getElementById("students").addEventListener("mouseover", function () {
    show();
});

document.getElementById("tooltip").addEventListener("click", function () {
    clear();
});
