$(function(){
    
    $("#contactSub input").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function ($form, event, errors) {
        },
        submitSuccess: function ($form, event) {
            event.preventDefault();
            var correo = $("input#correo").val();

            $this = $("#sendSubButton");
            $this.prop("disabled", true);

            $.ajax({
                url: "contact.php",
                type: "POST",
                data: {
                    correo: correo
                },
                cache: false,
                success: function () {
                    $('#registrado').html("<div class='alert alert-success'>");
                    $('#registrado > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                    $('#registrado > .alert-success')
                            .append("<strong>Gracias por suscribirte!! Esperemos que disfrutes de nuestro mejor contenido.</strong>");
                    $('#registrado > .alert-success')
                            .append('</div>');
                    $('#contactsub').trigger("reset");
                },
                error: function () {
                    $('#registrado').html("<div class='alert alert-danger'>");
                    $('#registrado > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                    $('#registrado > .alert-danger').append($("<strong>").text("Lo sentimos, presentamos algunos inconvenientes. Porfavor, intentalo nuevamente en unos minutos!"));
                    $('#registrado > .alert-danger').append('</div>');
                    $('#contactSub').trigger("reset");
                },
                complete: function () {
                    setTimeout(function () {
                        $this.prop("disabled", false);
                    }, 1000);
                }
            });
        },
        filter: function () {
            return $(this).is(":visible");
        },
    });
    $("a[data-toggle=\"tab\"]").click(function (e) {
        e.preventDefault();
        $(this).tab("show");
    });
});

$('#correo').focus(function () {
    $('#registrado').html('');
});
