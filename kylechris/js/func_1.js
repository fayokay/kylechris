/*  Wizard */
jQuery(function($) {
    "use strict";
  //$('form#wrapped').attr('action', 'phpmailer/send_email_1_phpmailer_template_smtp.php');
    $("#wizard_container").wizard({
        stepsWrapper: "#wrapped",
        unidirectional: false,
        beforeSelect: function(event, state) {
            // if ($('input#website').val().length != 0) {
            //     return false;
            // }
            if (!state.isMovingForward)
                return true;
            var inputs = $(this).wizard('state').step.find(':input');
            return !inputs.length || !!inputs.valid();
        }
    }).validate({
        errorPlacement: function(error, element) {
            if (element.is(':radio') || element.is(':checkbox')){
                error.insertBefore(element.next());
            } else {
                error.insertAfter(element);
            }
        }
    });
    $("#progressbar").progressbar();
    $("#wizard_container").wizard({
        afterSelect: function(event, state) {
            $("#progressbar").progressbar("value", state.percentComplete);
            $("#location").text("" + state.stepsComplete + " of " + state.stepsPossible + " completed");
        }
    });
});

$('#wrapped').validate({
        ignore: [],
        rules: {
            select: {
                required: true
            }
        },
        errorPlacement: function(val, element) {
            if (element['is']('select:hidden')) {
                val['insertAfter'](element['next']('.nice-select'))
            } else {
                val['insertAfter'](element)
            }
        }
    })



// Input name and email value
function getVals(formControl, controlType) {
    switch (controlType) {

        case 'name_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#name_field").text(value);
            break;

        case 'email_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#email_field").text(value);
            break;
    }
}