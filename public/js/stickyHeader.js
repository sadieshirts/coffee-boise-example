$(document).ready(function() {
    var stickyHeaderTop = $('#homeNav').offset().top;

    $(window).scroll(function(){
            if( $(window).scrollTop() > stickyHeaderTop ) {
            		$('#homeNav').hide();
                    $('#navCopy').show();
            } else {
                    $('#homeNav').show();
                    $('#navCopy').hide();
            }
    });
});




