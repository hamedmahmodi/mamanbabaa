let trueTell = document.getElementById("trueTell");
let falseTell = document.getElementById("falseTell");
let tellTwo = document.getElementById("tellTwo");
let mySelf = document.getElementById("mySelf");
let anyOne = document.getElementById("anyOne");
let fNameSomeOne = document.getElementById("fNameSomeOne");
let lNameSomeOne = document.getElementById("lNameSomeOne");
let relationship = document.getElementById("relationship");




trueTell.addEventListener("change", function() {
    if (this.checked) {
        tellTwo.classList.add("show");
    } 
});
falseTell.addEventListener("change", function() {
    if (this.checked) {
        tellTwo.classList.remove("show");
    } 
});

anyOne.addEventListener("change", function() {
    if (this.checked) {
        fNameSomeOne.classList.add("show");
        lNameSomeOne.classList.add("show");
        relationship.classList.add("show");
    } 
});
mySelf.addEventListener("change", function() {
    if (this.checked) {
        fNameSomeOne.classList.remove("show");
        lNameSomeOne.classList.remove("show");
        relationship.classList.remove("show");
    } 
});


var currentPage = 1;
showPage(currentPage);

function nextPage(event) {
  event.preventDefault();
  if (validateInputs(currentPage)) {
    if (currentPage < 3) {
      currentPage++;
      showPage(currentPage);
    }
  }
}

function prevPage(event) {
  event.preventDefault();
  if (currentPage > 1) {
    currentPage--;
    showPage(currentPage);
  }
}

function showPage(page) {
  var pages = document.getElementsByClassName("page");
  for (var i = 1; i < pages.length; i++) {
    pages[i].style.display = "none";
  }
  document.getElementById("page" + page).style.display = "block";
}

function validateInputs(page) {
  var inputs = document.querySelectorAll("#page" + page + " input");
  for (var i = 0; i < inputs.length; i++) {
    if (inputs[i].value.trim() === "") {
      alert("لطفاً تمامی فیلدها را پر کنید.");
      return false;
    }
  }
  return true;
}
