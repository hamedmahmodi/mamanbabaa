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
                    <input type="radio" id="trueTell" name="tellTwo" value="true" required>
                    <label for="trueTell" >بله</label>
                </span>
                <span>
                    <input type="radio" id="falseTell" name="tellTwo" value="false">
                    <label for="falseTell">خیر</label>
                </span>
                <span id="addTell">

                </span>

                <!-- <input id="tellTwo" class="tellTwo" oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="11" aria-invalid="false" placeholder="شماره تماس" value="" type="tel" name="tellTwo"> -->
                <textarea cols="40" rows="10" id="address" class="address" aria-required="true" aria-invalid="false" placeholder="آدرس" name="address" required></textarea>

                <h2>آیا برای خود یا شخص دیگری ثبت نام می کنید؟</h2>
                <span>
                    <input type="radio" id="mySelf" name="person" value="true" required>
                    <label for="mySelf" >خودم</label>
                </span>
                <span>
                    <input type="radio" id="anyOne" name="person" value="false">
                    <label for="anyOne">دیگری</label>
                </span>
                <div id="registerAnyOne">

                </div>
                <br>
                <input class="leftSubmit" type="submit" value="صفحه بعدی" onclick="nextPage(event)">

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
            <div class="buttonSubmit">
                <input class="rightSubmit" type="submit" value="صفحه قبلی" onclick="prevPage(event)">
                <input class="leftSubmit" type="submit" value="صفحه بعدی" onclick="nextPage(event)">
            </div>
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
                    <input type="radio" id="callPersonOne" name="call&messagePersonOne" required>
                    <label for="callPersonOne">تماس</label>
                </span>
                <span>
                    <input type="radio" id="messagePersonOne" name="call&messagePersonOne" required>
                    <label for="messagePersonOne">پیام</label>
                </span>

                <H2>آیا می خواهید یک مخاطب دوم اضافه کنید؟</H2>
                <span>
                    <input type="radio" id="addPersonOne" name="addPersonOne" value="true" required>
                    <label for="addPersonOne">بله</label>
                </span>
                <span>
                    <input type="radio" id="noAddPersonOne" name="addPersonOne" value="false" required>
                    <label for="noAddPersonOne">خیر</label>
                </span>
                <br>
                <div class="buttonSubmit">
                    <input class="rightSubmit" type="submit" value="صفحه قبلی" onclick="prevPage(event)">
                    <input class="leftSubmit" type="submit" value="صفحه بعدی" onclick="nextPage(event)">
                </div>
                
            </form>
        </div>
        <div id="page4" class="page">
            
        </div>
        <div id="page5" class="page">
            
        </div>
        <div id="page6" class="page" >
            
        </div>
        
    </div>
<?php
get_footer();
?>