jQuery(document).ready(function ($) {
    var url = window.location.href;
    $('#menu-menu-mirada li a').each(function(){
        if(url === $(this).attr('href')){
            $(this).addClass('active');
        }
    });
});
// $( '.js-input' ).keyup(function() {
//     if( $(this).val() ) {
//         $(this).addClass('not-empty');
//     } else {
//         $(this).removeClass('not-empty');
//     }
// });

