<?php
/*
Template Name: service
*/
get_header();
?>

<div class="servicePageBack">
    <div class="servicePage mainView">


        <div id="page1" class="page">
        <h2>صفحه 1</h2>
        <form>
            <!-- فرم اطلاعات صفحه 1 -->
            <input id="fName" class="fName" aria-invalid="false" placeholder="نام" value="" type="text" name="fName" required>
            <input id="lName" class="lName" aria-invalid="false" placeholder="نام خانوادگی" value="" type="text" name="lName" required>
            <input id=""email class="email" aria-invalid="false" placeholder="ایمیل" value="" type="email" name="email" required>
            <input id="tell" class="tell" oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="11" aria-invalid="false" placeholder="شماره تماس" value="" type="tel" name="tell" required>
            <input type="date" id="birthday" name="date"  required>
            
            <h3>آیا می خواهید خط تلفن دومی اضافه کنید؟</h3>
            <span>
                <label >بله</label>
                <input type="radio" id="trueTell" name="tellTwo" value="true">
            </span>
            <span>
                <label >خیر</label>
                <input type="radio" id="falseTell" name="tellTwo" value="false">
            </span>

            <!-- <input id="tellTwo" class="tellTwo" oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="11" aria-invalid="false" placeholder="شماره تماس" value="" type="tel" name="tellTwo"> -->
            <textarea cols="40" rows="10" id="address" class="address" aria-required="true" aria-invalid="false" placeholder="آدرس" name="address" required></textarea>

            <h3>آیا برای خود یا شخص دیگری ثبت نام می کنید؟</h3>
            <span>
                <label >خودم</label>
                <input type="radio" id="mySelf" name="person" value="true">
            </span>
            <span>
                <label >دیگری</label>
                <input type="radio" id="anyOne" name="person" value="false">
            </span>
            

            <!-- <input id="fNameSomeOne" class="fNameSomeOne" aria-invalid="false" placeholder="نام" value="" type="text" name="fNameSomeOne">
            <input id="lNameSomeOne" class="lNameSomeOne" aria-invalid="false" placeholder="نام خانوادگی" value="" type="text" name="lNameSomeOne"> 
            <input id="relationship" class="relationship" aria-invalid="false" placeholder="ارتباط شما با آن شخص" value="" type="text" name="relationship"> -->
            <br>
            <button onclick="nextPage(event)">صفحه بعدی</button>
        </form>
        </div>

        <div id="page2" class="page">
        <h2>صفحه 2</h2>
        <form>
            <!-- فرم اطلاعات صفحه 2 -->
            <input id="fName" class="fName" aria-invalid="false" placeholder="نام" value="" type="text" name="fName" required>
            <input id="lName" class="lName" aria-invalid="false" placeholder="نام خانوادگی" value="" type="text" name="lName" required>
            <input id="tell" class="tell" oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="11" aria-invalid="false" placeholder="شماره تماس" value="" type="tel" name="tell" required>
            <input type="date" id="birthday" name="date"  required>
            

            <input id="tellTwo" class="tellTwo" oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="11" aria-invalid="false" placeholder="شماره تماس" value="" type="tel" name="tellTwo">
            <textarea cols="40" rows="10" id="address" class="address" aria-required="true" aria-invalid="false" placeholder="آدرس" name="address" required></textarea>

            <h3>آیا برای خود یا شخص دیگری ثبت نام می کنید؟</h3>
            <span>
                <label >خودم</label>
                <input type="radio" id="mySelf" name="person" value="true" required>
            </span>
            <span>
                <label >دیگری</label>
                <input type="radio" id="anyOne" name="person" value="false" required>
            </span>
            

            <input id="fNameSomeOne" class="fNameSomeOne" aria-invalid="false" placeholder="نام" value="" type="text" name="fNameSomeOne">
            <input id="lNameSomeOne" class="lNameSomeOne" aria-invalid="false" placeholder="نام خانوادگی" value="" type="text" name="lNameSomeOne"> 
            <input id="relationship" class="relationship" aria-invalid="false" placeholder="ارتباط شما با آن شخص" value="" type="text" name="relationship">
            <br>
            <button onclick="prevPage(event)">صفحه قبلی</button>
            <button onclick="nextPage(event)">صفحه بعدی</button>
        </form>
        </div>

        <div id="page3" class="page">
        <h2>صفحه 3</h2>
        <form>
            <!-- فرم اطلاعات صفحه 3 -->
            <input id="fName" class="fName" aria-invalid="false" placeholder="نام" value="" type="text" name="fName" required>
            <input id="lName" class="lName" aria-invalid="false" placeholder="نام خانوادگی" value="" type="text" name="lName" required>
            <input id="tell" class="tell" oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="11" aria-invalid="false" placeholder="شماره تماس" value="" type="tel" name="tell" required>
            <input type="date" id="birthday" name="date"  required>
            
            <h3>آیا می خواهید خط تلفن دومی اضافه کنید؟</h3>
            <span>
                <label >بله</label>
                <input type="radio" id="trueTell" name="tellTwo" value="true" required>
            </span>
            <span>
                <label >خیر</label>
                <input type="radio" id="falseTell" name="tellTwo" value="false" required>
            </span>

            <input id="tellTwo" class="tellTwo" oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="11" aria-invalid="false" placeholder="شماره تماس" value="" type="tel" name="tellTwo">
            <textarea cols="40" rows="10" id="address" class="address" aria-required="true" aria-invalid="false" placeholder="آدرس" name="address" required></textarea>

            <h3>آیا برای خود یا شخص دیگری ثبت نام می کنید؟</h3>
            <span>
                <label >خودم</label>
                <input type="radio" id="mySelf" name="person" value="true" required>
            </span>
            <span>
                <label >دیگری</label>
                <input type="radio" id="anyOne" name="person" value="false" required>
            </span>
            

            <input id="fNameSomeOne" class="fNameSomeOne" aria-invalid="false" placeholder="نام" value="" type="text" name="fNameSomeOne">
            <input id="lNameSomeOne" class="lNameSomeOne" aria-invalid="false" placeholder="نام خانوادگی" value="" type="text" name="lNameSomeOne"> 
            <input id="relationship" class="relationship" aria-invalid="false" placeholder="ارتباط شما با آن شخص" value="" type="text" name="relationship">
            <br>
            <button onclick="prevPage(event)">صفحه قبلی</button>
            <input class="submit" type="submit" value="ارسال">
        </form>
        </div>

    </div>
<?php
get_footer();
?>