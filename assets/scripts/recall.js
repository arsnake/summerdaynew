function sendRequestCall(formName){
    const form = $(`.jsCallbackForm_${formName}`);
    const userContact = form.find('input.jsContact').val();

    $.post('/api', {
        'userContact': userContact,
        'formName': formName,
        'func': 'sendRequestCall',
    }).then(
        function (data) {
            form.addClass('submitted');
        }
    );
}