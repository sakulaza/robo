/*www.jq22.com*/
$(function(){	
    var cubuk_seviye = $(document).scrollTop();
    var header_yuksekligi = $('.top').outerHeight();

    $(window).scroll(function() {
        var kaydirma_cubugu = $(document).scrollTop();

        if (kaydirma_cubugu > header_yuksekligi){$('.top_nav_skin').addClass('sabit');} 
        else {$('.top_nav_skin').removeClass('sabit');}
		if (kaydirma_cubugu > header_yuksekligi){$('.top').addClass('gizle');} 
        else {$('.top').removeClass('gizle');}

        if (kaydirma_cubugu > cubuk_seviye){$('.top_nav_skin').removeClass('gizle');} 
        else {$('.top_nav_skin').addClass('gizle');}		
		if (kaydirma_cubugu > cubuk_seviye){$('.top').removeClass('sabit');} 
        else {$('.top').addClass('sabit');}			

        cubuk_seviye = $(document).scrollTop();	
     });
});