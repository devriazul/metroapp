
jQuery.validator.setDefaults({
    errorPlacement: function(error, element) {
        jQuery(element).closest('div.form-group').find('.form-text').html(error.html());
    },
    highlight: function(element) {
        jQuery(element).closest('div.form-group').removeClass('has-success').addClass('has-error');
    },
    unhighlight: function(element, errorClass, validClass) {
        jQuery(element).closest('div.form-group').removeClass('has-error').addClass('has-success');
        jQuery(element).closest('div.form-group').find('.form-text').html('');
    }
});

$(document).ready(function(){
    var $form, $loader, $modal, $messageModalContent;;

    $loader = $("#loader");
    $form = $("#contactForm");

    $modal = $("#messageModal");
    $messageModalContent = $("#messageModalContent");


    $loader.hide();
    $form.validate({
        rules:{
            user_name: {
                required: true
            },
            user_email: {
                required: true
            },
            user_subject: {
                required: true
            },
            user_message: {
                required: true
            },
            "user_file[]": {
                required: true
            },
        },
        messages:{
            user_name: {
                required: "Please enter name"
            },
            user_email: {
                required: "Please enter email"
            },
            user_subject: {
                required: "Please enter subject"
            },
            user_message: {
                required: "Please enter message"
            },
            "user_file[]": {
                required: "Please choose file"
            },
            
        }
    });

    $form.ajaxForm({
        dataType:'json',
        beforeSubmit: function(){
            if(!$form.valid()){
                return false;
            }
            $loader.show();
        },
        success:function(res){
            console.log(res);
            $loader.hide();
            $messageModalContent.removeClass("alert-danger").addClass("alert-success");
            $messageModalContent.html("Mail sent successfully");
            $modal.modal("show");
            
        },
        error:function(error){
            console.log(error);
            $loader.hide();
            $messageModalContent.removeClass("alert-success").addClass("alert-danger");
            $messageModalContent.html("Mail sent failed, try agian");
            $modal.modal("show");
        }
    });


});