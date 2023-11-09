/opt/lampp/htdocs/eldoret/sec/include/jquery-1.10.2.min.jsvar myVar;

function myFunction() {
  myVar = setTimeout(showPage, 2000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
