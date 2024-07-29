function buynow() {
  var qty = 2;

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      var t = r.responseText;
    }
  }
  r.open("GET", "buyprocess.php?q=" + qty, true);
  r.send();
}
