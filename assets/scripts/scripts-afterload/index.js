
function afterloadScripts(){
    $.ajax({
        type: "POST",
        url: "assets/scripts/scripts-afterload/afterload_scripts.php",
        data: '',
        cache: false,
        success: function(data){
            $("#afterload_scripts").replaceWith(data);
        }
    });
}

window.onload = function() {
    setTimeout(function(){
        afterloadScripts();
    }, 1500);

};