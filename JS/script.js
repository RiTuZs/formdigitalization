// ----------------------------About------------------------------------

var tablinks = document.getElementsByClassName("tab-links")
var tabcontents = document.getElementsByClassName("tab-contents")
// var color = document.getElementById("cngcolor")
function opentab(tabname){
    for(tablink of tablinks){
        tablink.classList.remove("active-link");
        tablink.classList.style.backgroundColor="#ff004f"
    }
    for(tabcontent of tabcontents){
        tabcontent.classList.remove("active-tab");
    }
    // for (clr of color) {
    //     clr.classList.add("active-link")
    // }
    event.currentTarget.classList.add("active-link");
    if(tabname=='skills'){
        document.getElementById("cngcolor").style.color="#ff004f"
        document.getElementById("cngcolor1").style.color="#fff"
        document.getElementById("cngcolor2").style.color="#fff"
    }
    if(tabname=='experience'){
        document.getElementById("cngcolor1").style.color="#ff004f"
        document.getElementById("cngcolor").style.color="#fff"
        document.getElementById("cngcolor2").style.color="#fff"
    }
    if(tabname=='education'){
        document.getElementById("cngcolor2").style.color="#ff004f"
        document.getElementById("cngcolor").style.color="#fff"
        document.getElementById("cngcolor1").style.color="#fff"  
    }
}

// ---------------------------Mobile view---------------------------------

var menu = document.getElementById("sidemenu");
function openmenu() {
    menu.style.right = '0';
}
function closemenu() {
    menu.style.right = '-200px';
}

