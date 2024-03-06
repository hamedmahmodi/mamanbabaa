let trueTell = document.getElementById("trueTell");
let falseTell = document.getElementById("falseTell");
let tellTwo = document.getElementById("tellTwo");
let mySelf = document.getElementById("mySelf");
let anyOne = document.getElementById("anyOne");
let fNameSomeOne = document.getElementById("fNameSomeOne");
let lNameSomeOne = document.getElementById("lNameSomeOne");
let relationship = document.getElementById("relationship");





// trueTell.addEventListener("change", function() {
//     if (this.checked) {
//         tellTwo.classList.add("show");
//     } 
// });
// falseTell.addEventListener("change", function() {
//     if (this.checked) {
//         tellTwo.classList.remove("show");
//     } 
// });

let addTell = document.getElementById("addTell");

trueTell.addEventListener('change', function(){
  if(this.checked){
    addTell.innerHTML = '<input id="newTell" class="newTell" oninput="this.value = this.value.replace(/[^0-9]/g, \'\')" maxlength="11" aria-invalid="false" placeholder="شماره تماس" value="" type="tel" name="newTell">';
  }
});
falseTell.addEventListener('change', function(){
  if(this.checked){
    while (addTell.firstChild) {
      addTell.removeChild(addTell.firstChild);
    }
  }
});




let registerAnyOne = document.getElementById("registerAnyOne");

anyOne.addEventListener('change', function(){
  if(this.checked){
    registerAnyOne.innerHTML = '<input id="fNameSomeOne" class="fNameSomeOne" aria-invalid="false" placeholder="نام" value="" type="text" name="fNameSomeOne">';
    registerAnyOne.innerHTML += '<input id="lNameSomeOne" class="lNameSomeOne" aria-invalid="false" placeholder="نام خانوادگی" value="" type="text" name="lNameSomeOne">';
    registerAnyOne.innerHTML += '<input id="relationship" class="relationship" aria-invalid="false" placeholder="ارتباط شما با آن شخص" value="" type="text" name="relationship">';
  }
});
mySelf.addEventListener('change', function(){
  if(this.checked){
    while (registerAnyOne.hasChildNodes()) {
      registerAnyOne.removeChild(registerAnyOne.firstChild);
    }
    
  }
});


let page4 = document.getElementById("page4");
let page5 = document.getElementById("page5");
let page6 = document.getElementById("page6");

document.getElementById("noAddPersonOne").addEventListener("change", function() {
  if(this.checked) {
    page4.style.display = "none";
    page5.style.display = "none";
    page6.setAttribute("id", "page4");
  }
});
document.getElementById("addPersonOne").addEventListener("change", function() {
  if(this.checked) {
    page4.style.display = "block";
    page5.style.display = "block";
    page6.setAttribute("id", "page6");
  }
});
document.getElementById("noAddPersonTwo").addEventListener("change", function() {
  if(this.checked) {
    page5.style.display = "none";
      page6.setAttribute("id", "page5");
  }
});
document.getElementById("addPersonTwo").addEventListener("change", function() {
  if(this.checked) {
    page5.style.display = "block" ;
    page6.setAttribute("id", "page6");
  }
});




let YourPlan = document.getElementById('YourPlan');

document.getElementById('yesCallWeekends').addEventListener('change', function(){
  if(this.checked){
    YourPlan.innerHTML = 'برنامه شما: یک تماس در روز، دوشنبه تا جمعه به اضافه آخر هفته ها';
  }
});
document.getElementById('noCallWeekends').addEventListener('change', function(){
  if(this.checked){
    YourPlan.innerHTML = 'برنامه شما: یک تماس در روز، دوشنبه تا جمعه';
  }
});




let callTime = document.getElementById('callTime');
let inputCount = 0;

document.getElementById('oneCall').addEventListener('change', function(){
  if(this.checked){
    callTime.innerHTML = '<input type="time" name="appointment-time">';
    inputCount = 1;
  }
  
});

document.getElementById('twoCall').addEventListener('change', function(){
  if(this.checked){
    if(inputCount < 2) {
      callTime.innerHTML = '<input type="time" name="appointment-time">';
      callTime.innerHTML += '<input type="time" name="appointment-timee">';
    }
    if(inputCount > 2){
      
      callTime.innerHTML = '<input type="time" name="appointment-time">';
      callTime.innerHTML += '<input type="time" name="appointment-timee">';
      
    }
    
  }
  inputCount=2;
});
document.getElementById('threeCall').addEventListener('change', function(){
  if(this.checked){
    if(inputCount < 3) {
      callTime.innerHTML = '<input type="time" name="appointment-time">';
      callTime.innerHTML += '<input type="time" name="appointment-timee">';
      callTime.innerHTML += '<input type="time" name="appointment-timeee">';
      
    }
    inputCount = 3;
  }
  
});




let ReferralCode = document.getElementById('ReferralCode');

document.getElementById('yesReferralCode').addEventListener('change', function(){
  if(this.checked){
    ReferralCode.innerHTML = '<input type="text" name="ReferralCode">';
  }
});
document.getElementById('noReferralCode').addEventListener('change', function(){
  if(this.checked){
    while (ReferralCode.firstChild) {
      ReferralCode.removeChild(ReferralCode.firstChild);
    }
  }
});
  


// var currentPage = 1;
// showPage(currentPage);

// function nextPage(event) {
//   event.preventDefault();
//   if (validateInputs(currentPage)) {
//     if (currentPage < 3) {
//       currentPage++;
//       showPage(currentPage);
//     }
//   }
// }


// function prevPage(event) {
//   event.preventDefault();
//   if (currentPage > 1) {
//     currentPage--;
//     showPage(currentPage);
//   }
// }

// function showPage(page) {
//   var pages = document.getElementsByClassName("page");
//   for (var i = 1; i < pages.length; i++) {
//     pages[i].style.display = "none";
//   }
//   document.getElementById("page" + page).style.display = "block";
// }

// function validateInputs(page) {
//   var inputs = document.querySelectorAll("#page" + page + " input");
//   for (var i = 0; i < inputs.length; i++) {
//     if (inputs[i].value.trim() === "") {
//       alert("لطفاً تمامی فیلدها را پر کنید.");
//       return false;
//     }
//   }
//   return true;
// }
