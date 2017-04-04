$(document).ready(function () {

    
   var trigger = $('.hamburger, nav .sidebar-nav li');

    trigger.click(function () {
        $('.overlay').toggle();
        trigger.toggleClass('is-open is-closed');
 $('#hamburger').toggleClass('toggled');
        $('#sidebar-wrapper').toggleClass('toggled');
    });
    
    
    
    
    $("#linkto").click(function () {
        var offset = 20; //Offset of 20px
        $('html, body').animate({
            scrollTop: $("#second").offset().top + offset
        }, 1000);
    });
    $('.switcher > .switch-icon , .switch-list').click(function () {
        var ix = $(this).index();
        $('#container-map').toggle(ix === 0);
        $('#container-list').toggle(ix === 1);
    });
 
    $("#checkAll").click(function () {
        $(".check").prop('checked', $(this).prop('checked'));
    });
    $("#checkAllAge").click(function () {
        $(".checkAge").prop('checked', $(this).prop('checked'));
    });
    $("#checkAllList").click(function () {
        $(".checkList").prop('checked', $(this).prop('checked'));
    });
    $("#checkAllListAge").click(function () {
        $(".checkListAge").prop('checked', $(this).prop('checked'));
    });
});