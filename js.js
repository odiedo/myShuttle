var reg = document.getElementById("reg");
var login = document.getElementById("login");
var routeSel = document.getElementById("route-sel");
var bookNow = document.getElementById("bookNow");
function regi() {
    $("#reg").show(1000);
    $("#login").hide(500);
}
function logi() {
    $("#login").show(1000);
    $("#reg").hide(500);
}
function routes() {
    $("#route-select").show(500);
    $("#book").hide(600);
    routeSel.style.background = 'red';
    bookNow.style.background = '';
}
function book_search() {
    $("#book").show(500);
    $("#route-select").hide(600);
    bookNow.style.background = 'red';
    routeSel.style.background = '';
}

function searchVeh() {
    $("#bookBox").show(500);
    $("#searchVehicle").hide(600);
}

function closeSearch() {
    $("#searchVehicle").show(500);  
    $("#bookBox").hide(600);
}