function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";//Function(alert('Goodbye world!'))
    document.getElementById("event").addEventListener("click", closeNav);
}
function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.getElementById("event").addEventListener("click", openNav);
}
