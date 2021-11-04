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
$('#account-number').on('click', function (e) {
   e.stopPropagation();
});
$('#account-number-confirm').on('click', function (e) {
   e.stopPropagation();
});
$('#birth').on('click', function (e) {
   e.stopPropagation();
});

});


// bank number check

var check = function() {

   if (document.getElementById('account-number').value ==
     document.getElementById('account-number-confirm').value) {
     document.getElementById('message').style.color = 'green';
     document.getElementById('message').innerHTML = 'matching';
     document.getElementById('submit').disabled = false;
     
   } else {
     document.getElementById('message').style.color = 'red';
     document.getElementById('message').innerHTML = 'not matching';
     document.getElementById('submit').disabled = true;
   }
 }


//  Search box code

function search(){

        
   var input, filter, table, tr, td, i, txtValue;
   input = document.getElementById("searchbox");
   filter = input.value.toUpperCase();
   table = document.getElementById("Employee-details");
   tr = table.getElementsByTagName("tr");


 
   for (i = 0; i < tr.length; i++) {
     td = tr[i].getElementsByTagName("td")[2];
     if (td) {
       txtValue = td.textContent || td.innerText;
       if (txtValue.toUpperCase().indexOf(filter) > -1) {
         tr[i].style.display = "";
       } else {
         tr[i].style.display = "none";
       }
     }
   }
 }