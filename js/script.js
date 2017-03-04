$(function() {

  $('#contact-form').submit(function(e) {
    e.preventDefault();
    $('.comments').empty();
    var postdata = $('#contact-form').serialize();

    $.ajax({
      type: 'POST',
      url: 'php/contact.php',
      data: postdata,
      datatype: 'json',
      success: function(result) {

      }
    });
  });










});
