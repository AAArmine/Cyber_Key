
$(document).ready(function(){
    $('#inpFile').change(function(){
        if($(this).val().length !== 0){
            $('#upload_cv').html('Your CV is uploaded');
        }else{
            $('#upload_cv').html('Upload your CV.');
        }
console.log('l');
    });
});
