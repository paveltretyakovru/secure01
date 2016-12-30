$(function() {
  var $orderModal = $('#orderModal');
  var $orderButtons = $('.cta');

  var $callbackModal = $('#callbackModal'),
      $callbackButtons = $('.callback'),
      $callbackForm = $callbackModal.find('form'),
      $callbackName = $callbackForm.find('input[name=name]'),
      $callbackPhone = $callbackForm.find('input[name=phone]'),
      $callbackSubmitButton = $callbackForm.find('button');


  // Открытие модльаного окна заказать
  $orderButtons.click(function(event) {
    var target = $(event.target);
    console.log('Click', target.attr('data-source'));
    $orderModal.arcticmodal();
    event.preventDefault();
  });

  // Открытие модального окна заказать обратный звонок
  $callbackButtons.click(function(event) {
    $callbackModal.arcticmodal();
    event.preventDefault();
  });

  $callbackSubmitButton.click(function(event) {
    var name = $callbackName.val(),
        phone = $callbackPhone.val();

    $.post('/callbacks/create', {name: name, phone: phone})
      .done(function(result) {
        if(result.success) {
          $callbackModal.arcticmodal('close');
          alert('В ближайшее время, Вам перезвонят')
        } else {
          $callbackModal.arcticmodal('close');
          alert('Произошла ошибка во время запроса, повоторите попытку позже');
        }
      })
      .fail(function(result) {
        $callbackModal.arcticmodal('close');
        alert('Произошла ошибка во время запроса, повоторите попытку позже');
      });

    console.log('Submit callback!', name, phone);

    event.preventDefault();
  });
})
