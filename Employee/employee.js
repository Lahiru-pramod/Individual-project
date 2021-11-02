// popup window

$(function() {
    // Open Popup
    $('[popup-open]').on('click', function() {
        var popup_name = $(this).attr('popup-open');
 $('[popup-name="' + popup_name + '"]').fadeIn(300);
    });
 
    // Close Popup
    $('[popup-close]').on('click', function() {
 var popup_name = $(this).attr('popup-close');
 $('[popup-name="' + popup_name + '"]').fadeOut(300);
    });
 
    // Close Popup When Click Outside
    $('.popup').on('click', function() {
 var popup_name = $(this).find('[popup-close]').attr('popup-close');
 $('[popup-name="' + popup_name + '"]').fadeOut(300);
    }).children().click(function() {
 return false;
    });

   //  working radio buttons

    $('.containerRadio').on('click', function (e) {
      e.stopPropagation();
  });
  $('.form-control-file').on('click', function (e) {
   e.stopPropagation();
});
$('.check-certificate').on('click', function (e) {
   e.stopPropagation();
});
$('#submit').on('click', function (e) {
   e.stopPropagation();
});
$('#clear').on('click', function (e) {
   e.stopPropagation();
});
 
});