var $ = jQuery;

let functionIsRan = false;

function stepCounter(elementSelector , currentNumber ,endNumber , stepNumber , totalTime){

    let theIntervals = Math.round(totalTime/(endNumber/stepNumber));

    let mainAction = setInterval(() => {

        if(currentNumber<endNumber){

            $(elementSelector).text(currentNumber);

            currentNumber+=stepNumber;

        }

        else{

            $(elementSelector).text(endNumber);

            clearInterval(mainAction);

        }

    }, theIntervals);

}

$(document).ready(function(){

    $(window).on('scroll' , function(){
        if($(document).scrollTop() >= 120){
            $('.innerHeaderSticky').addClass('showStickyHeader');
            $('.stickySidebarSinglePostParent').addClass('stickySidebarChange');
        }
        else{
            $('.innerHeaderSticky').removeClass('showStickyHeader');                 
        }
        // if($(document).scrollTop() >= 30){
        //     $('.home .mainHeaderBack').addClass('backWhiteHeader');
        // }
        // else{
        //     $('.home .mainHeaderBack').removeClass('backWhiteHeader');              
        // }
    });
    
    let svgCode = '<svg height="18" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43 50" xml:space="preserve" transform="rotate(90)"><path fill="#6c6c6d" d="M15.563 40.836a.997.997 0 0 0 1.414 0l15-15a.999.999 0 0 0 0-1.414l-15-15a.999.999 0 1 0-1.414 1.414l14.293 14.293-14.293 14.293a.999.999 0 0 0 0 1.414z"/></svg>';
    $('.mobileMenu>ul>.menu-item-has-children>a').append(svgCode);
	$('.mainMenu>ul>.menu-item-has-children>a').append(svgCode);

    $('.headerMobileMenu').click(function(){ 
        $('.mobileMenuContainer').addClass('showMobileMenu');
        $('.mobilMenuOverlay').addClass('showMobilMenuOverlay');
    });
    $('.mobilemenuClose , .mobilMenuOverlay').click(function(){ 
        $('.mobileMenuContainer').removeClass('showMobileMenu');
        $('.mobilMenuOverlay').removeClass('showMobilMenuOverlay');
    });
    $('.mobileMenu>ul>.menu-item-has-children>a').click(function(){
        $('.mobileMenu>ul>.menu-item-has-children>ul').slideUp(300);
        $('.menu-item-has-children a svg').css('transform' , 'rotate(90deg)');
        if($(this).siblings("ul").css('display') == 'block'){
            $(this).siblings('ul').slideUp(400);
        }
        else{
            $(this).siblings('ul').slideToggle(400);
            $('.menu-item-has-children a svg').css('transform', 'rotate(90deg)');
            $(this).find("svg").css('transform' , 'rotate(270deg)');
        }
    });

    if($("#counterNumbers").length) {


        $(window).scroll(function(){

            let windowBottom = $(window).scrollTop() + $(window).outerHeight(true);
            
            let objectCenter = $('#counterNumbers').offset().top + ($('#counterNumbers').outerHeight(true)/2);
            
            if(windowBottom > objectCenter && functionIsRan==false){

                stepCounter('#counter-1', 1 , 98, 1 , 1100);

                stepCounter('#counter-2', 1 , 7 , 1 , 1100);

                stepCounter('#counter-3', 1 , 264 , 10 , 1100);

                stepCounter('#counter-4', 1 , 264 , 10 , 1100);

                functionIsRan = true;

            }
        });
    };
    $('.faq > .faqBoxs').click(function(){
        $('.faq > .answer').slideUp(300);
        $('.faq').removeClass('active');
        $('.faqBoxs > .svgFaqBack > svg').css('transform' , 'rotate(0deg)');
        if ($(this).siblings(".answer").css('display') == 'block') {
            $(this).siblings('.answer').slideUp(500);
            $(this).find("svg").css('transform' , 'rotate(0deg)');
        } else {
            $('.faq > .answer').slideUp(500);
            $('.faq').removeClass('active');
            $('.faqBoxs > svg').css('transform', 'rotate(0deg)');
            $(this).siblings('.answer').slideDown(500);
            $(this).find("svg").css('transform' , 'rotate(180deg)');
            $(this).parent('.faq').addClass('active');
        }
    });
    


    $(window).scroll(function(){
        if($(document).scrollTop() > 130){
            $('.mainDesctopHeaderContainerSticky').addClass("topZero");
            console.log("ok");
        }else{
            $('.mainDesctopHeaderContainerSticky').removeClass("topZero");
        };
    });
    
});