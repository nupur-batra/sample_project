$(document).ready(function() {
    var password;
    $('#validation').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {


            name: {
                validators: {
                    stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: messages.name_notEmpty
                    }
                }
            },

            
            email: {
                validators: {
                    notEmpty: {
                        message: messages.email_notEmpty
                    },
                    emailAddress: {
                        message: messages.email_emailAddress
                    }
                }
            },

            comments: {
                validators: {
                    stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: messages.comment_notEmpty
                    }
                }
            },

           
            password: {
                validators: {
                    stringLength: {
                        min: 6,
                        message: messages.password_length
                    },
                    notEmpty: {
                        message: messages.password_notEmpty
                    }
                }
            },

            // 're-password': {
            //     validators: {
            //         stringLength: {
            //             min: 6,
            //             message:'Please enter at least 6 characters'
            //         },
            //         notEmpty: {
            //             message: messages.re_password_notEmpty
            //         }
            //     }
            // },
            'users[0][username]': {
                validators: {
                    notEmpty: {
                        message: messages.username_notEmpty
                    }
                }
            },
            'users[0][password]': {
                validators: {
                    notEmpty: {
                        message: messages.password_notEmpty
                    }
                }
            },

            received_amount: {
                validators: {
                    notEmpty: {
                        message: messages.received_amount_notEmpty
                    },
                    regexp: {
                        regexp : /^\d{0,2}(\.\d{0,2}){0,1}$/,
                        message: messages.number_validation
                    },
                }

            },
            'address1': {
                validators: {
                    notEmpty: {
                        message: messages.address_notEmpty
                    }
                }
            },
            comment: {
                validators: {
                    stringLength: {
                        min: 10,
                        max: 200,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please supply a description of your project'
                    }
                }
            },

            general_required_date: {
                validators: {
                    stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: messages.general_required_date_notEmpty
                    }
                }
            },




            subject: {
                validators: {
                    stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: messages.subjet_notEmpty
                    }
                }

            },

            body: {
                validators: {
                    stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: messages.body_notEmpty
                    }
                }

            },

            from_email: {
                validators: {
                    notEmpty: {
                        message: messages.email_notEmpty
                    },
                    emailAddress: {
                        message: messages.email_emailAddress
                    }
                }
            },


        }
    })


        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
            $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});
