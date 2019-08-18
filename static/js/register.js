/*****
      REGISTRO
*****/

$(function() {

// Get the form.
var form = $('#new-register');

// Get the messages div.
var formMessages = $('#contact-message2');

// Set up an event listener for the contact form.
$(form).submit(function(e) {
  // Stop the browser from submitting the form.
  e.preventDefault();

  // Get the name div.
  var name = $('#firstname').val();
  $('#contact-message span').html(name);

  // Serialize the form data.
  var formData = $(form).serialize();

  // Submit the form using AJAX.
  $.ajax({
    type: 'POST',
    url: $(form).attr('action'),
    data: formData
  })
  .done(function(response) {

    //Convert response to Json object
    response = JSON.parse(response);

    //Check for register error
    if(response.error != 0){
        $('#register-error-message').html(response.msg);
        $('#register-error').slideDown(500);
        $('html,body').animate({scrollTop: $('#register-error-message').offset().top - 100} , 500 );
        return;
    }

    $('#register-error').slideUp(500);

    $(form).fadeOut(function(){
        $('#contact-message').fadeIn();
      });
    // Make sure that the formMessages div has the 'success' class.
    $(formMessages).removeClass('error');
    $(formMessages).addClass('success');

    // Set the message text.
    $(formMessages).text(response);

    // Clear the form.
    $('#firstname').val('');
    $('#facebook').val('');
    $('#email').val('');
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
