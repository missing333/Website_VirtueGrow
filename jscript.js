function openVirtue(virtueName) {
  var i;
  var x = document.getElementsByClassName("virtueContent");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(virtueName).style.display = "grid";
  var elem = $('#scrollHere');
  if(elem) {
    $('html').scrollTop(elem.offset().top);
    $('html').scrollLeft(elem.offset().left);
}
}





$("#header").load("header.html");
$("#footer").load("footer.html");
