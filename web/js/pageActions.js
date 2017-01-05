$(function() {
  var $orderButtons = $('.cta');
  var $orderModal = $('#orderModal'),
      $orderForm = $orderModal.find('form'),
      $orderName = $orderForm.find('input[name=name]'),
      $orderType = $orderForm.find('input[name=type]'),
      $orderPhone = $orderForm.find('input[name=phone]'),
      $orderTypeId = $orderForm.find('input[name=type-id]'),
      $orderSubject = $orderForm.find('input[name=subject]'),
      $orderMessage = $orderForm.find('textarea[name=message]');

  var $callbackModal = $('#callbackModal'),
      $callbackButtons = $('.callback'),
      $callbackForm = $callbackModal.find('form'),
      $callbackName = $callbackForm.find('input[name=name]'),
      $callbackPhone = $callbackForm.find('input[name=phone]'),
      $callbackSubmitButton = $callbackForm.find('button');


  // Открытие модльаного окна заказать
  $orderButtons.click(function(event) {
    var target = $(event.target),
        source = target.attr('data-source'),
        sourceId = target.attr('data-source-id');
    console.log('Click', target.attr('data-source'));

    $orderType.val(source);
    $orderTypeId.val(sourceId);
    $orderModal.arcticmodal();
    event.preventDefault();
  });

  $orderForm.submit(function(event) {
    var data = {
      name: $orderName.val(),
      type: $orderType.val(),
      phone: $orderPhone.val(),
      type_id: $orderTypeId.val(),
      subject: $orderSubject.val(),
      message: $orderMessage.val(),
    }

    if(data.phone !== '' || data.subject !== '' || data.message !== '') {
      $.post('/offers/create', data)
        .done(function(result) {
          if(result.success) {
            $orderModal.arcticmodal('close');
            alert('В ближайшее время, Вам перезвонят')
          } else {
            $orderModal.arcticmodal('close');
            alert('Произошла ошибка во время запроса, повоторите попытку позже');
          }
        })
        .fail(function(result) {
          $orderModal.arcticmodal('close');
          alert('Произошла ошибка во время запроса, повоторите попытку позже');
        });
    } else {
      alert('Поля помеченные звездочкой "*" обязательны для заполнения');
    }

    console.log('Data send!', data);
    event.preventDefault();
  });

  // Открытие модального окна заказать обратный звонок
  $callbackButtons.click(function(event) {
    $callbackModal.arcticmodal();
    event.preventDefault();
  });

  // Отправка формы обратного звонка
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
