
var modalAdd = document.getElementById("myModal");
var modalEdit = document.getElementById("myModalEdit");

var btn = document.getElementById("myBtn");
var btn2 = document.getElementById("myBtn2");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function () {
  modalAdd.style.display = "block";
}

btn2.onclick = function () {
  modalEdit.style.display = "block";
}

span.onclick = function () {
  modalAdd.style.display = "none";

}

window.onclick = function (event) {
  if (event.target == modalAdd || event.target == modalEdit) {
    modalAdd.style.display = "none";
    modalEdit.style.display = "none";
  }
}