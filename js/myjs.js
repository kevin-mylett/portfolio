
(function mobileMenu() {

    var navButton =  document.querySelector('.nav-toggle');
    var menu = document.querySelector('.menu');

    function toggler() {
        menu.classList.toggle('open');
        navButton.classList.toggle('open');
    }

    navButton.addEventListener('click', toggler); 

    //Close Menu When Link clicked
    menu.addEventListener('click', function(e) {
        if (e.target.tagName === 'A'){
            toggler();
        }
    });
})();

$(document).ready(function() {

    $('#fullpage').fullpage({
        //Navigation
        menu: '#navbar',
        anchors:['about', 'skills', 'work', 'contact', 'test'],

        //Scrolling
        css3: true,
        scrollingSpeed: 700,
        autoScrolling: true,
        easingcss3: 'ease',
        // continuousHorizontal: true,
        touchSensitivity: 5,

        //Accessibility
        keyboardScrolling: true,
        recordHistory: true,

        // //Design
        verticalCentered: false,
        responsiveWidth: 768,

        //Custom selectors
        sectionSelector: 'section',

        lazyLoading: true,

    });
});

//Go to section above
$(document).on('click', '.previous', function(){
  $.fn.fullpage.moveSectionUp();
});

//Go to section below
$(document).on('click', '.next', function(){
  $.fn.fullpage.moveSectionDown();
});

// Ajax - Contact Form
$(function() {

    // Get the form.
    var form = $('#ajax-contact');

    // Get the messages div.
    var formMessages = $('#form-messages');

    // Set up an event listener for the contact form.
    $(form).submit(function(e) {
        // Stop the browser from submitting the form.
        e.preventDefault();

        // Serialize the form data.
        var formData = $(form).serialize();

        // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        })
        .done(function(response) {
            // Make sure that the formMessages div has the 'success' class.
            $(formMessages).removeClass('error');
            $(formMessages).addClass('success');

            // Set the message text.
            $(formMessages).text(response);

            // Clear the form.
            $('#firstname, #lastname, #email, #message').val('');
        })
        .fail(function(data) {
            // Make sure that the formMessages div has the 'error' class.
            $(formMessages).removeClass('success');
            $(formMessages).addClass('error');

            // Set the message text.
            if (data.responseText !== '') {
                $(formMessages).text(data.responseText);
            } else {
                $(formMessages).text('Oops! An error occured and your message could not be sent.');
            }
        });

    });

});