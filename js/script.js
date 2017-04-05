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
            scrollTop: $(".wrapper-section").offset().top + offset
        }, 1000, 'swing');
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
    
    
    
    
    
    //List toggle
    
    
    $('.theme-container li').click(function(e){
  $(this).children('ul').slideToggle('1000',"easeOutExpo", function () {
        // Animation complete.
    });
  e.stopPropagation();
});
    
   
    
    });

$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
        }
        init();
    });
});
    
