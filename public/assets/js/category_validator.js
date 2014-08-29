$(document).ready(function() {
    $('#form-category').bootstrapValidator({
        live: 'enabled',
        message: 'This value is not valid',
        submitButtons: 'button[type="submit"]',
        feedbackIcons: {
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh'
        },
        fields: {
            category:{
                message: 'The category number is not valid',
                validators:{
                    notEmpty:{
                        message: 'category is required '
                    },
                    remote:{
                        message:'category already exists',
                        url: 'configure/check-category',
                        data: function(validator){
                            return{
                                category: validator.getFieldElements('category').val()
                            };
                        }
                    }
                }
            },
        }
    });

    $('#resetBtn').click(function() {
        $('#form-category').data('bootstrapValidator').resetForm(true);
    });
});


