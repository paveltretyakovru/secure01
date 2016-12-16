$(function() {
  var $orderModal = $('#orderModal');
  var $orderButtons = $('.cta');
  var $callbackModal = $('#callbackModal');
  var $callbackButtons = $('.callback');

  // Открытие модльаного окна заказать
  $orderButtons.click(function(event) {
    $orderModal.arcticmodal();
    event.preventDefault();
  });

  // Открытие модального окна заказать обратный звонок
  $callbackButtons.click(function(event) {
    $callbackModal.arcticmodal();
    event.preventDefault();
  });
})
