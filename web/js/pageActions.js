$(function() {
  var $orderModal = $('#orderModal');
  var $orderButtons = $('.cta');

  $orderButtons.click(function(event) {
    console.log('Clicked order!');
    $orderModal.arcticmodal();

    event.preventDefault();
  });
})
