"use strict";
//icheck js
$(document).ready(function() {

    $('input[type="checkbox"], input[type="radio"]').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
    });
    $('[type="reset"]').click(function() {
        setTimeout(function() {
            $("input").iCheck("update");
        }, 10);
    });
    $('#add_users_form').bootstrapValidator({

        fields: {
            nomuser: {
                validators: {
                    notEmpty: {
                        message: 'Nom est obligatoire'
                    }
                }
            },
            mdp: {
                validators: {
                    notEmpty: {
                        message: 'Mot de passe est obligatoire'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'l\'adresse email est obligatoire'
                    },
                    emailAddress: {
                        message: 'L\'adresse email n\'est pas valide'
                    }
                }
            },
            tel: {
                validators: {
                    notEmpty: {
                        message: 'Numero de telephone est obligatoire'
                    },
                    regexp: {
                        regexp: /(\([2-9]\d{2}\)|[0-9]\d{7})/,
                        message: 'Entrer un valid numero de telephone valide'
                    }
                }
            },

            gender: {
                validators: {
                    notEmpty: {
                        message: 'gender is required'
                    }
                }
            },
            address: {
                validators: {
                    notEmpty: {
                        message: 'Address is required'
                    }
                }
            },
            city: {
                validators: {
                    notEmpty: {
                        message: 'City is required'
                    }
                }
            },
            pincode: {
                validators: {
                    notEmpty: {
                        message: 'Pin code number is required'
                    },
                    regexp: {
                        regexp: /^(\+?1-?)?(\([0-9]\d{2}\)|[0-9]\d{2})-?[0-9]\d{2}$/,
                        message: 'Enter valid Pin code number'
                    }
                }
            }
        }
    });
    $('.radio_val').on('ifChanged', function(event) {
        $('#add_users_form').bootstrapValidator('revalidateField', $('.radio_val'));
    });
    //Select 2 country js
    function formatState(state) {
        if (!state.id) {
            return state.text;
        }
        var $state = $(
            '<span><img src="img/countries_flags/' + state.element.value.toLowerCase() + '.png" class="img-flag" /> ' + state.text + '</span>'
        );
        return $state;
    }
    $("#select23").select2({
        templateResult: formatState,
        templateSelection: formatState,
        placeholder: "select",
        theme: "bootstrap"
    });
    $('input[type=reset]').on('click', function() {
        $(".select2-selection__rendered").empty();
        $('#add_users_form').bootstrapValidator("resetForm");
    });
});
