function sendRequestCall(formName){
    const form = $(`.jsCallbackForm_${formName}`);
    const userContact = form.find('input.jsContact').val();
    const formTitle = form.find('input.jsFormTitle').val();

    if(validatePhone(userContact)){
        $.post('/api', {
            'userContact': userContact,
            'formName': formName,
            'formTitle': formTitle,
            'func': 'sendRequestCall',
        }).then(
            function (data) {
                // form.addClass('submitted');
            }
        );

        form.addClass('submitted');
    }else{
        form.addClass('submit_error');
    }
}
function validatePhone(phoneNumber) {
    const filter = /^[0-9]{7,14}?$/;
    return filter.test(phoneNumber);
}

function sendSubscribe(){
    const form = $(`.jsSubscribeForm`);
    const userContact = form.find('input.jsContact').val();

    $.post('/api', {
        'userContact': userContact,
        'func': 'sendSubscribe',
    }).then(
        function (data) {
            // form.addClass('submitted');
        }
    );

    form.addClass('submitted');
}


function openCallbackModal(modalId){
    $(`#modal_${modalId}`).modal({
        fadeDuration: 1000
    });
}