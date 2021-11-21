
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
    $("#contactForm").validate({
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
});