<?php
/*
Template Name: contact
*/
get_header();
?>

<div class="contactPageBack mainView">
    <div class="TopTitle">
        <h1>با ما در ارتباط باشید!</h1>
        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیا</p>
    </div>
    <div class="contactPage">
        <div class="form">
            <span>شما میتوانید با پر کردن فرم زیر با کارشناسان ما در ارتباط باشید !</span>
            <?php echo do_shortcode('[contact-form-7 id="8e56401" title="تماس باما"]')?>
        </div>
        <div class="contactPageText">

        </div>
    </div>
</div>





<?php
get_footer();
?>