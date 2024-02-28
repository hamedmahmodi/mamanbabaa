$(document).on( 'click', '.themeCustomPlus , .themeCustomMinus', function() {
    var qty = $( this ).parent( '.quantity' ).find( '.qty' );
    var val = parseFloat(qty.val());
    var max = parseFloat(qty.attr( 'max' ));
    var min = parseFloat(qty.attr( 'min' ));
    var step = parseFloat(qty.attr( 'step' ));
    if ( $( this ).is( '.plus' ) ) {
    if ( max && ( max <= val ) ) {
        qty.val( max );
    } else {
        qty.val( val + step );
    }
    } else {
    if ( min && ( min >= val ) ) {
        qty.val( min );
    } else if ( val > 1 ) {
        qty.val( val - step );
    }
    }
    $('.input-text.qty.text').attr('value',$('.input-text.qty.text').val());
    $('button[name=update_cart]').attr('disabled',false);
    $('button[name=update_cart]').trigger('click');
});