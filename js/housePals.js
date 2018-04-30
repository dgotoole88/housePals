function createNew(){
    document.getElementById("regPageOne").style.display = "none";
    document.getElementById("regCreate").style.display = "block";
}

function createBack(){
    document.getElementById("regCreate").style.display = "none";
    document.getElementById("regPageOne").style.display = "block";
}

function createNext(){
    document.getElementById("regCreate").style.display = "none";
    document.getElementById("regPageFour").style.display = "block";
}

function pageFourBack(){
    document.getElementById("regPageFour").style.display = "none";
    document.getElementById("regCreate").style.display = "block";
}