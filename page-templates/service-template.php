<?php
/*
Template Name: service
*/
get_header();
?>

<div class="servicePageBack">
    <div class="servicePage mainView">
        <h1>ثبت نام تماس های مراقبت</h1>

        <div id="page1" class="page">
            <span>مرحله 1. اطلاعات مشتری</span>
            <form>
                <!-- فرم اطلاعات صفحه 1 -->
                <div class="formRow">
                    <input id="fName" class="fName" aria-invalid="false" placeholder="نام" value="" type="text" name="fName" required>
                    <input id="lName" class="lName" aria-invalid="false" placeholder="نام خانوادگی" value="" type="text" name="lName" required>
                </div>
                <div class="formRow">
                    <input id="email" class="email" aria-invalid="false" placeholder="ایمیل" value="" type="email" name="email" required>
                    <input id="tell" class="tell" oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="11" aria-invalid="false" placeholder="شماره تماس" value="" type="tel" name="tell" required>
                </div>
                
                <h2>آیا می خواهید خط تلفن دومی اضافه کنید؟</h2>
                <span>
                    <label >بله</label>
                    <input type="radio" id="trueTell" name="tellTwo" value="true">
                </span>
                <span>
                    <label >خیر</label>
                    <input type="radio" id="falseTell" name="tellTwo" value="false">
                </span>
                <span id="addTell">

                </span>

                <input id="tellTwo" class="tellTwo" oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="11" aria-invalid="false" placeholder="شماره تماس" value="" type="tel" name="tellTwo">
                <textarea cols="40" rows="10" id="address" class="address" aria-required="true" aria-invalid="false" placeholder="آدرس" name="address" required></textarea>

                <h2>آیا برای خود یا شخص دیگری ثبت نام می کنید؟</h2>
                <span>
                    <label >خودم</label>
                    <input type="radio" id="mySelf" name="person" value="true">
                </span>
                <span>
                    <label >دیگری</label>
                    <input type="radio" id="anyOne" name="person" value="false">
                </span>
                <div id="registerAnyOne">

                </div>
                

                <!-- <input id="fNameSomeOne" class="fNameSomeOne" aria-invalid="false" placeholder="نام" value="" type="text" name="fNameSomeOne">
                <input id="lNameSomeOne" class="lNameSomeOne" aria-invalid="false" placeholder="نام خانوادگی" value="" type="text" name="lNameSomeOne"> 
                <input id="relationship" class="relationship" aria-invalid="false" placeholder="ارتباط شما با آن شخص" value="" type="text" name="relationship"> -->
                <br>
                <input type="submit" value="صفحه بعدی" onclick="nextPage(event)">
            </form>
        </div>

        <div id="page2" class="page">
        <span>مرحله 2. اطلاغات تکمیلی</span>
        <form>
            <!-- فرم اطلاعات صفحه 2 -->
            <textarea cols="40" rows="10" id="informationOne" class="address" aria-required="true" aria-invalid="false" placeholder="سلامت، دارو، یادآوری فعالیت" name="Reminders" required></textarea>
            <textarea cols="40" rows="10" id="informationTwo" class="address" aria-required="true" aria-invalid="false" placeholder="سرگرمی ها، علایق، یادداشت ها" name="Hobbies" required></textarea>
            <input type="date" id="birthday" name="birthday"  required>

            <br>
            <input type="submit" value="صفحه قبلی" onclick="nextPage(event)">
            <input type="submit" value="صفحه بعدی" onclick="nextPage(event)">
        </form>
        </div>

        <div id="page3" class="page">
            <span>مرحله 3. اولویت تماس گیری</span>
            <form>
                <div class="formRow">
                    <input id="fNamePersonOne" class="fName" aria-invalid="false" placeholder="نام" value="" type="text" name="fNamePersonOne" required>
                    <input id="lNamePersonOne" class="lName" aria-invalid="false" placeholder="نام خانوادگی" value="" type="text" name="lNamePersonOne" required>
                </div>
                <div class="formRow">
                    <input id="tellPersonOne" class="tell" oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="11" aria-invalid="false" placeholder="شماره تماس" value="" type="tel" name="tellPersonOne" required>
                </div>
                
                <H2>روش ترجیحی ارتباط</H2>
                <span>
                    <label >تماس</label>
                    <input type="radio" id="callPersonOne" name="call&messagePersonOne" required>
                </span>
                <span>
                    <label >پیام</label>
                    <input type="radio" id="messagePersonOne" name="call&messagePersonOne" required>
                </span>

                <H2>آیا می خواهید یک مخاطب دوم اضافه کنید؟</H2>
                <span>
                    <label >بله</label>
                    <input type="radio" id="addPersonOne" name="addPersonOne" value="true" required>
                </span>
                <span>
                    <label >خیر</label>
                    <input type="radio" id="noAddPersonOne" name="addPersonOne" value="false" required>
                </span>
                سحشد
                <br>
                <input type="submit" value="صفحه قبلی" onclick="nextPage(event)">
                <input type="submit" value="صفحه بعدی" onclick="nextPage(event)">
                
            </form>
        </div>
        <div id="page4" class="page">
            <span>مرحله 3. اولویت تماس گیری</span>
            <form>
                <div class="formRow">
                    <input id="fNamePersonTwo" class="fName" aria-invalid="false" placeholder="نام" value="" type="text" name="fNamePersonTwo" required>
                    <input id="lNamePersonTwo" class="lName" aria-invalid="false" placeholder="نام خانوادگی" value="" type="text" name="lNamePersonTwo" required>
                </div>
                <div class="formRow">
                    <input id="tellPersonTwo" class="tell" oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="11" aria-invalid="false" placeholder="شماره تماس" value="" type="tel" name="tellPersonTwo" required>
                </div>
                
                <H2>روش ترجیحی ارتباط</H2>
                <span>
                    <label >تماس</label>
                    <input type="radio" id="callPersonTwo" name="call&messagePersonTwo" required>
                </span>
                <span>
                    <label >پیام</label>
                    <input type="radio" id="messagePersonTwo" name="call&messagePersonTwo" required>
                </span>

                <H2>آیا می خواهید یک مخاطب سوم اضافه کنید؟</H2>
                <span>
                    <label >بله</label>
                    <input type="radio" id="addPersonTwo" name="addPersonTwo" value="true" required>
                </span>
                <span>
                    <label >خیر</label>
                    <input type="radio" id="noAddPersonTwo" name="addPersonTwo" value="false" required>
                </span>
            
                <br>
                <input type="submit" value="صفحه قبلی" onclick="nextPage(event)">
                <input type="submit" value="صفحه بعدی" onclick="nextPage(event)">
                
            </form>
        </div>
        <div id="page5" class="page">
            <span>مرحله 3. اولویت تماس گیری</span>
            <form>
                <div class="formRow">
                    <input id="fNamePersonThree" class="fName" aria-invalid="false" placeholder="نام" value="" type="text" name="fNamePersonThree" required>
                    <input id="lNamePersonThree" class="lName" aria-invalid="false" placeholder="نام خانوادگی" value="" type="text" name="lNamePersonThree" required>
                </div>
                <div class="formRow">
                    <input id="tellPersonThree" class="tell" oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="11" aria-invalid="false" placeholder="شماره تماس" value="" type="tel" name="tellPersonThree" required>
                </div>
                
                <H2>روش ترجیحی ارتباط</H2>
                <span>
                    <label >تماس</label>
                    <input type="radio" id="callPersonThree" name="call&messagePersonThree" required>
                </span>
                <span>
                    <label >پیام</label>
                    <input type="radio" id="messagePersonThree" name="call&messagePersonThree" required>
                </span>
            
                <br>
                <input type="submit" value="صفحه قبلی" onclick="nextPage(event)">
                <input type="submit" value="صفحه بعدی" onclick="nextPage(event)">
                
            </form>
        </div>
        <div id="page6" class="page" >
            <span>مرحله 4. طرح خود را انتخاب کنید</span>
            <form>
                <h2>تعداد تماس در طول روز</h2>
                <span>
                    <label >یک</label>
                    <input type="radio" id="oneCall" name="manyCallDay" required>
                </span>
                <span>
                    <label >دو</label>
                    <input type="radio" id="twoCall" name="manyCallDay" required>
                </span>
                <span>
                    <label >سه</label>
                    <input type="radio" id="threeCall" name="manyCallDay" required>
                </span>

                <h2>آیا می خواهید آخر هفته ها با شما تماس بگیرند؟</h2>
                <span>
                    <label >بله</label>
                    <input type="radio" id="yesCallWeekends" name="callWeekends" required>
                </span>
                <span>
                    <label >خیر</label>
                    <input type="radio" id="noCallWeekends" name="callWeekends" required>
                </span>
                <span id="YourPlan"></span>
            </form>
            <span>مرحله 5. دوست دارید چه ساعتی با شما تماس بگیرند؟</span>
            <form>
                <div id="callTime" class="callTime">
                    
                </div>
                <h2>آیا باید در زمان دقیق یا بعد از ساعت کاری تماس بگیرید؟</h2>
                <span>
                    <label >بله</label>
                    <input type="radio" id="yesExactTime" name="exactTime" required>
                </span>
                <span>
                    <label >خیر</label>
                    <input type="radio" id="noExactTime" name="exactTime" required>
                </span>
                
                <h2>در نهایت، آیا کد تخفیف یا معرفی دارید؟</h2>
                <span>
                    <label >بله</label>
                    <input type="radio" id="yesReferralCode" name="referralCode" required>
                </span>
                <span>
                    <label >خیر</label>
                    <input type="radio" id="noReferralCode" name="referralCode" required>
                </span>
                <span id="ReferralCode">

                </span>
            </form>
        </div>
        
        <input class="submit" type="submit" value="ارسال">
    </div>
<?php
get_footer();
?>