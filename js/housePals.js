function createNew(){
    document.getElementById("regPageOne").style.display = "none";
    document.getElementById("regCreate").style.display = "block";
}

function joinExisting(){
    document.getElementById("regPageOne").style.display = "none";
    document.getElementById("regCreate").style.display = "none";
}

function createBack(){
    document.getElementById("regCreate").style.display = "none";
    document.getElementById("regPageOne").style.display = "block";
}

function existBack(){
    document.getElementById("regPageFour").style.display = "none";
    document.getElementById("join").style.display = "block";
}

function createNext(){
    document.getElementById("regCreate").style.display = "none";
    document.getElementById("regPageFour").style.display = "block";
}

function existNext(){
    document.getElementById("join").style.display = "none";
    document.getElementById("regPageFour").style.display = "block";
}

function pageFourBack(){
    document.getElementById("regPageFour").style.display = "none";
    document.getElementById("regCreate").style.display = "block";
}