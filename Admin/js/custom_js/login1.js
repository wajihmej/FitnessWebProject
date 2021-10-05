"use strict";
$(document).ready(function() {
    $("input[type='checkbox']").iCheck({
        checkboxClass: 'icheckbox_minimal-yellow',
        radioClass: 'iradio_minimal-yellow'

    });
    $("#log_in").bootstrapValidator({
        excluded: [':disabled'],

        fields: {
            email: {
                validators: {
                    notEmpty: {
                        message: 'Email obligatoire'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Mot de passe obligatoire'
                    }
                }
            }
        }
    });
    $("#forgot_password").bootstrapValidator({
        excluded: [':disabled'],

        fields: {
            email_for: {
                validators: {
                    notEmpty: {
                        message: 'Email obligatoire'
                    }
                }
            }
        }
    })
});