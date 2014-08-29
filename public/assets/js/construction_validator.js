$(document).ready(function() {
    $('#form-construction').bootstrapValidator({
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
            construction:{
                message: 'The construction number is not valid',
                validators:{
                    notEmpty:{
                        message: 'construction is required '
                    },
                    remote:{
                        message:'construction already exists',
                        url: 'configure/check-construction',
                        data: function(validator){
                            return{
                                construction: validator.getFieldElements('construction').val()
                            };
                        }
                    }
                }
            }
        }
    });

    $('#resetBtn').click(function() {
        $('#form-category').data('bootstrapValidator').resetForm(true);
    });
});


