$(document).ready(function () {
    if($.cookie('darkmode') == 'dark'){
        $('.switch input').attr("checked", "checked");
        $('body').addClass('dark');
        $.cookie('darkmode', 'dark');
        $(".menu.side .logo img").attr('src','img/logo-light.png').fadeIn(400);
    } else {
        $('body').removeClass('dark');
        $.cookie('darkmode', 'notdark');
        $(".menu.side .logo img").attr('src','./img/logo.png').fadeIn(400);
    }
});

function changemode() {
    if($.cookie('darkmode') === 'notdark'){
        $('body').toggleClass('dark');
        $.cookie('darkmode', 'dark');
        $(".menu.side .logo img").attr('src','img/logo-light.png').fadeIn(400);
    } else {
        $('body').toggleClass('dark');
        $.cookie('darkmode', 'notdark');
        $(".menu.side .logo img").attr('src','./img/logo.png').fadeIn(400);
    }
}
