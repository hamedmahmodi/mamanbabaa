var $ = jQuery;

$(document).ready(function(){
    $('#copyLinkButton').click(function(){
        console.log("slm");
        let shortenedLink = $('#shortenedLinkValue').val();
        navigator.clipboard.writeText(shortenedLink);
        setTimeout(function(){
            $('.copyLinkMessage').fadeToggle(300);
        },500);
        setTimeout(function(){
            $('.copyLinkMessage').fadeToggle(300);
        },3000);
        // shortenedLink.select();
        // shortenedLink.setSelectionRange(0, 99999); /* For mobile devices */
    });

});