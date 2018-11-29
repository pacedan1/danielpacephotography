// 
// Custom JS file
// 

// onclick function of banner trigger
$(".banner-trigger").click(function(){
    banner = $(".banner");

    // if banner open then close, else if closed then open
    if(banner.hasClass("banner-open")){
        banner.removeClass("banner-open");
    }
    else{
        banner.addClass("banner-open");
    }
});