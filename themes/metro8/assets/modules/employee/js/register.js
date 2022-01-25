$(function(){

    var ManageFormInstance = new ManageForm();
    ManageFormInstance.init( 'register_form', {
        'name': {
            validators: {
                notEmpty: {
                    message: 'name is required'
                },
            }
        },

        'email': {
            validators: {
                notEmpty: {
                    message: 'email adress is required'
                },
                emailAddress: {
                    message: 'The input is not a valid email address'
                }
            }
        },
        'password': {
            validators: {
                notEmpty: {
                    message: 'the password is required'
                },
                stringLength: {
                    min: 8,
                    message: 'The password must have at least 8 characters'
                },
            }
        },


        'phone': {
            validators: {
                notEmpty: {
                    message: 'phone is required'
                },
            }
        },
    });
});