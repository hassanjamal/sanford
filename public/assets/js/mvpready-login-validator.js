$(document).ready(function() {
    $('#form-login').bootstrapValidator({
        live: 'enabled',
        message: 'This value is not valid',
        submitButtons: 'button[type="submit"]',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
            email:{
                message: 'The Email Address is not valid',
                validators: {
                    notEmpty: {
                        message: 'The Email Address is required '
                    },
                    emailAddress: {
                        message: 'The value is not a valid email address'
                    },
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The Password is required '
                    },
                }
            },
        }
    });

    // $('#resetBtn').click(function() {
    //     $('#policy').data('bootstrapValidator').resetForm(true);
    // });
});


