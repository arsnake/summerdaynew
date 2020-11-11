function sendRequestCall(formName){
    const form = $(`.jsCallbackForm_${formName}`);
    const userContact = form.find('input.jsContact').val();
    const formTitle = form.find('input.jsFormTitle').val();
console.log(`formTitle`, formTitle);
    $.post('/api', {
        'userContact': userContact,
        'formName': formName,
        'formTitle': formTitle,
        'func': 'sendRequestCall',
    }).then(
        function (data) {
            form.addClass('submitted');
        }
    );
}

function openCallbackModal(modalId){
    $(`#modal_${modalId}`).modal({
        fadeDuration: 1000
    });
}