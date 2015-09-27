/**
 * Created by inet2005 on 9/22/15.
 */
"use strict";

function showMsg(currentElement)
{

    var currentElement = document.body.childNodes[1].childNodes[1];
   //get ellements we want to manipulate
    currentElement.innerHTML = "Changed Text";
}