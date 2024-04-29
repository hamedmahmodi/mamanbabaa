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
let page7 = document.getElementById("page7");


document.getElementById('addPersonOne').addEventListener('click', addContentToPage4);
document.getElementById('noAddPersonOne').addEventListener('click', clearContentFromPage4);

function addContentToPage4() {
  var content = '<span>مخاطب دوم</span>' +
      '<form>' +
      '<div class="formRow">' +
      '<input id="fNamePersonTwo" class="fName" aria-invalid="false" placeholder="نام" value="" type="text" name="fNamePersonTwo" required>' +
      '<input id="lNamePersonTwo" class="lName" aria-invalid="false" placeholder="نام خانوادگی" value="" type="text" name="lNamePersonTwo" required>' +
      '</div>' +
      '<div class="formRow">' +
      '<input id="tellPersonTwo" class="tell" oninput="this.value = this.value.replace(/[^0-9]/g, \'\')" maxlength="11" aria-invalid="false" placeholder="شماره تماس" value="" type="tel" name="tellPersonTwo" required>' +
      '</div>' +
      '<H2>روش ترجیحی ارتباط</H2>' +
      '<span>' +
      '<input type="radio" id="callPersonTwo" name="call&messagePersonTwo" required>' +
      '<label for="callPersonTwo">تماس</label>' +
      '</span>' +
      '<span>' +
      '<input type="radio" id="messagePersonTwo" name="call&messagePersonTwo" required>' +
      '<label for="messagePersonTwo">پیام</label>' +
      '</span>' +
      '<H2>آیا می خواهید یک مخاطب سوم اضافه کنید؟</H2>' +
      '<span>' +
      '<input type="radio" id="addPersonTwo" name="addPersonTwo" value="true" required>' +
      '<label for="addPersonTwo">بله</label>' +
      '</span>' +
      '<span>' +
      '<input type="radio" id="noAddPersonTwo" name="addPersonTwo" value="false" required>' +
      '<label for="noAddPersonTwo">خیر</label>' +
      '</span>' +
      '<br>' +
      '<div class="buttonSubmit">'+
      '<input class="rightSubmit" type="submit" value="صفحه قبلی" onclick="prevPage(event)">' +
      '<input class="leftSubmit" type="submit" value="صفحه بعدی" onclick="nextPage(event)">' +
      '</div>'+
      '</form>';
  document.getElementById('page4').innerHTML = content;
  document.getElementById('addPersonTwo').addEventListener('click', addContentToPage5);
  document.getElementById('noAddPersonTwo').addEventListener('click', clearContentFromPage5);

}

function clearContentFromPage4() {
  var content = '<span>مرحله 4. طرح خود را انتخاب کنید</span>' +
  '<form>' +
  '<h2>تعداد تماس در طول روز</h2>' +
  '<span>' +
  '<input type="radio" id="oneCall" name="manyCallDay" required>' +
  '<label for="oneCall">یک</label>' +
  '</span>' +
  '<span>' +
  '<input type="radio" id="twoCall" name="manyCallDay" required>' +
  '<label for="twoCall">دو</label>' +
  '</span>' +
  '<span>' +
  '<input type="radio" id="threeCall" name="manyCallDay" required>' +
  '<label for="threeCall">سه</label>' +
  '</span>' +
  '<h2>آیا می خواهید آخر هفته ها با شما تماس بگیرند؟</h2>' +
  '<span>' +
  '<input type="radio" id="yesCallWeekends" name="callWeekends" required>' +
  '<label for="yesCallWeekends">بله</label>' +
  '</span>' +
  '<span>' +
  '<input type="radio" id="noCallWeekends" name="callWeekends" required>' +
  '<label for="noCallWeekends">خیر</label>' +
  '</span>' +
  '<span id="YourPlan"></span>' +
  '</form>' +
  '<span>مرحله 5. دوست دارید چه ساعتی با شما تماس بگیرند؟</span>' +
  '<form>' +
  '<div id="callTime" class="callTime"></div>' +
  '<h2>آیا باید در زمان دقیق یا بعد از ساعت کاری تماس بگیرید؟</h2>' +
  '<span>' +
  '<input type="radio" id="yesExactTime" name="exactTime" required>' +
  '<label for="yesExactTime">بله</label>' +
  '</span>' +
  '<span>' +
  '<input type="radio" id="noExactTime" name="exactTime" required>' +
  '<label for="noExactTime">خیر</label>' +
  '</span>' +
  '<h2>در نهایت، آیا کد تخفیف یا معرفی دارید؟</h2>' +
  '<span>' +
  '<input type="radio" id="yesReferralCode" name="referralCode" required>' +
  '<label for="yesReferralCode">بله</label>' +
  '</span>' +
  '<span>' +
  '<input type="radio" id="noReferralCode" name="referralCode" required>' +
  '<label for="noReferralCode">خیر</label>' +
  '</span>' +
  '<span id="ReferralCode"></span>' +
  '<div class="buttonSubmit">'+
  '<input class="rightSubmit" type="submit" value="صفحه قبلی" onclick="prevPage(event)">' +
  '<input class="submit" type="submit" value="ارسال">' +
  '</div>'+
  '</form>';
  document.getElementById('page4').innerHTML = content;
  


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
  

}




function addContentToPage5() {
    var content = '<span>مخاطب سوم</span>' +
        '<form>' +
        '<div class="formRow">' +
        '<input id="fNamePersonThree" class="fName" aria-invalid="false" placeholder="نام" value="" type="text" name="fNamePersonThree" required>' +
        '<input id="lNamePersonThree" class="lName" aria-invalid="false" placeholder="نام خانوادگی" value="" type="text" name="lNamePersonThree" required>' +
        '</div>' +
        '<div class="formRow">' +
        '<input id="tellPersonThree" class="tell" oninput="this.value = this.value.replace(/[^0-9]/g, \'\')" maxlength="11" aria-invalid="false" placeholder="شماره تماس" value="" type="tel" name="tellPersonThree" required>' +
        '</div>' +
        '<H2>روش ترجیحی ارتباط</H2>' +
        '<span>' +
        '<input type="radio" id="callPersonThree" name="call&messagePersonThree" required>' +
        '<label for="callPersonThree">تماس</label>' +
        '</span>' +
        '<span>' +
        '<input type="radio" id="messagePersonThree" name="call&messagePersonThree" required>' +
        '<label for="messagePersonThree">پیام</label>' +
        '</span>' +
        '<br>' +
        '<div class="buttonSubmit">'+
        '<input class="rightSubmit" type="submit" value="صفحه قبلی" onclick="prevPage(event)">' +
        '<input class="leftSubmit" type="submit" value="صفحه بعدی" onclick="nextPage(event)">' +
        '</div>'+
        '</form>';
    document.getElementById('page5').innerHTML = content;
    // page5.style.display = "block";
    var content2 = '<span>مرحله 4. طرح خود را انتخاب کنید</span>' +
      '<form>' +
      '<h2>تعداد تماس در طول روز</h2>' +
      '<span>' +
      '<input type="radio" id="oneCall" name="manyCallDay" required>' +
      '<label for="oneCall">یک</label>' +
      '</span>' +
      '<span>' +
      '<input type="radio" id="twoCall" name="manyCallDay" required>' +
      '<label for="twoCall">دو</label>' +
      '</span>' +
      '<span>' +
      '<input type="radio" id="threeCall" name="manyCallDay" required>' +
      '<label for="threeCall">سه</label>' +
      '</span>' +
      '<h2>آیا می خواهید آخر هفته ها با شما تماس بگیرند؟</h2>' +
      '<span>' +
      '<input type="radio" id="yesCallWeekends" name="callWeekends" required>' +
      '<label for="yesCallWeekends">بله</label>' +
      '</span>' +
      '<span>' +
      '<input type="radio" id="noCallWeekends" name="callWeekends" required>' +
      '<label for="noCallWeekends">خیر</label>' +
      '</span>' +
      '<span id="YourPlan"></span>' +
      '</form>' +
      '<span>مرحله 5. دوست دارید چه ساعتی با شما تماس بگیرند؟</span>' +
      '<form>' +
      '<div id="callTime" class="callTime"></div>' +
      '<h2>آیا باید در زمان دقیق یا بعد از ساعت کاری تماس بگیرید؟</h2>' +
      '<span>' +
      '<input type="radio" id="yesExactTime" name="exactTime" required>' +
      '<label for="yesExactTime">بله</label>' +
      '</span>' +
      '<span>' +
      '<input type="radio" id="noExactTime" name="exactTime" required>' +
      '<label for="noExactTime">خیر</label>' +
      '</span>' +
      '<h2>در نهایت، آیا کد تخفیف یا معرفی دارید؟</h2>' +
      '<span>' +
      '<input type="radio" id="yesReferralCode" name="referralCode" required>' +
      '<label for="yesReferralCode">بله</label>' +
      '</span>' +
      '<span>' +
      '<input type="radio" id="noReferralCode" name="referralCode" required>' +
      '<label for="noReferralCode">خیر</label>' +
      '</span>' +
      '<span id="ReferralCode"></span>' +
      '<div class="buttonSubmit">'+
      '<input class="rightSubmit" type="submit" value="صفحه قبلی" onclick="prevPage(event)">' +
      '<input class="submit" type="submit" value="ارسال">' +
      '</div>'+
      '</form>';

  document.getElementById('page6').innerHTML = content2;
  


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
}
function clearContentFromPage5() {
  var content = '<span>مرحله 4. طرح خود را انتخاب کنید</span>' +
  '<form>' +
  '<h2>تعداد تماس در طول روز</h2>' +
  '<span>' +
  '<input type="radio" id="oneCall" name="manyCallDay" required>' +
  '<label for="oneCall">یک</label>' +
  '</span>' +
  '<span>' +
  '<input type="radio" id="twoCall" name="manyCallDay" required>' +
  '<label for="twoCall">دو</label>' +
  '</span>' +
  '<span>' +
  '<input type="radio" id="threeCall" name="manyCallDay" required>' +
  '<label for="threeCall">سه</label>' +
  '</span>' +
  '<h2>آیا می خواهید آخر هفته ها با شما تماس بگیرند؟</h2>' +
  '<span>' +
  '<input type="radio" id="yesCallWeekends" name="callWeekends" required>' +
  '<label for="yesCallWeekends">بله</label>' +
  '</span>' +
  '<span>' +
  '<input type="radio" id="noCallWeekends" name="callWeekends" required>' +
  '<label for="noCallWeekends">خیر</label>' +
  '</span>' +
  '<span id="YourPlan"></span>' +
  '</form>' +
  '<span>مرحله 5. دوست دارید چه ساعتی با شما تماس بگیرند؟</span>' +
  '<form>' +
  '<div id="callTime" class="callTime"></div>' +
  '<h2>آیا باید در زمان دقیق یا بعد از ساعت کاری تماس بگیرید؟</h2>' +
  '<span>' +
  '<input type="radio" id="yesExactTime" name="exactTime" required>' +
  '<label for="yesExactTime">بله</label>' +
  '</span>' +
  '<span>' +
  '<input type="radio" id="noExactTime" name="exactTime" required>' +
  '<label for="noExactTime">خیر</label>' +
  '</span>' +
  '<h2>در نهایت، آیا کد تخفیف یا معرفی دارید؟</h2>' +
  '<span>' +
  '<input type="radio" id="yesReferralCode" name="referralCode" required>' +
  '<label for="yesReferralCode">بله</label>' +
  '</span>' +
  '<span>' +
  '<input type="radio" id="noReferralCode" name="referralCode" required>' +
  '<label for="noReferralCode">خیر</label>' +
  '</span>' +
  '<span id="ReferralCode"></span>' +
  '<div class="buttonSubmit">'+
  '<input class="rightSubmit" type="submit" value="صفحه قبلی" onclick="prevPage(event)">' +
  '<input class="submit" type="submit" value="ارسال">' +
  '</div>'+
  '</form>';
  document.getElementById('page5').innerHTML = content;
  


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
  

}













let currentPage = 1;
showPage(currentPage);

function nextPage(event) {
  event.preventDefault();
  if (validateInputs(currentPage)) {
      currentPage++;
      showPage(currentPage);
  }
}


function prevPage(event) {
  event.preventDefault();
    currentPage -= 1;
    showPage(currentPage);

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
  var radioButtons = document.querySelectorAll("#page" + page + " input[type=radio]");
  
  for (var i = 0; i < inputs.length; i++) {
    if (inputs[i].value.trim() === "") {
      alert("لطفاً تمامی فیلدها را پر کنید.");
      return false;
    }
  }

  var radioGroups = {};

  for (var j = 0; j < radioButtons.length; j++) {
    var radioName = radioButtons[j].name;
    if (!radioGroups[radioName]) {
      radioGroups[radioName] = [];
    }
    radioGroups[radioName].push(radioButtons[j]);
  }

  for (var groupName in radioGroups) {
    var group = radioGroups[groupName];
    var isChecked = false;
    for (var k = 0; k < group.length; k++) {
      if (group[k].checked) {
        isChecked = true;
        break;
      }
    }
    if (!isChecked) {
      alert("لطفاً تمامی فیلدها را پر کنید.");
      return false;
    }
  }

  return true;
}

