function createNew(){
    document.getElementById("regPageOne").style.display = "none";
    document.getElementById("regExist").style.display = "none";
    document.getElementById("regCreate").style.display = "block";
}

function joinExisting(){
    document.getElementById("regPageOne").style.display = "none";
    document.getElementById("regCreate").style.display = "none";
    document.getElementById("regExist").style.display = "block";
}

function createBack(){
    document.getElementById("regCreate").style.display = "none";
    document.getElementById("regPageOne").style.display = "block";
}

function existBack(){
    document.getElementById("regExist").style.display = "none";
    document.getElementById("regPageOne").style.display = "block";
}

function createNext(){
    document.getElementById("regCreate").style.display = "none";
    document.getElementById("regPageFour").style.display = "block";
    document.getElementById("regExist").style.display = "none";
}

function pageFourBack(){
    document.getElementById("regPageFour").style.display = "none";
    document.getElementById("regCreate").style.display = "block";
}