/*=================================================================================================FORMULARIO CONTACT*/
function cargaSendMailContact(){
    $("#u_submit").attr("disabled", true);

    $(".u_error-contact").remove();

    var filter=/^[A-Za-z][A-Za-z0-9-._]*@[A-Za-z0-9_]+.[A-Za-z0-9_.]+[A-za-z]$/;

    var s_name = $('#u_name').val();
    var s_email = $('#u_email').val();
    var s_phone = $('#u_phone').val();
    var s_country = $('#u_country').val();
    var s_message = $('#u_message').val();

    var s_last = $('#u_last').val();
    var s_first = $('#u_first').val();
    var s_numphone = $('#u_numphone').val();
    var s_email2 = $('#u_email2').val();
    var s_kaozastita = $('#cuestion').val();

    if (filter.test(s_email)){
        sendMail = "true";
    } else{
        
        $('#u_email').css("border", "1px solid #FF0000");
        //aplicamos color de borde si el se encontro algun error en el envio
    sendMail = "false";
    }
    if (s_name.length == 0 ){
    $('#u_name').css("border", "1px solid #FF0000");
    var sendMail = "false";
    }

    if(sendMail == "true"){
     var datos = {

            "name_txt" : s_name,
            "email_txt" : s_email,
            "phone_txt" : s_phone,
            "country_txt" : s_country,
            "message_txt" : s_message,

            "last_txt" : s_last,
            "first_txt" : s_first,
            "numphone_txt" : s_numphone,
            "email2" : s_email2,
            "kaozastita" : s_kaozastita
     };
     $.ajax({
             data:  datos,
             // hacemos referencia al archivo contacto.php
             url:   'http://www.mountaintourscusco.com/es/mail/formulario-contact.php',
             type:  'post',

             beforeSend: function () {
             //aplicamos color de borde si el envio es exitoso
                    
                    $("#u_submit").val("Sending...");
             },
             success:  function (response) {
                    $('#u_form')[0].reset();
                    $("#u_submit").val("Send");
                    $("#contact_results p").html(response);
                    $("#contact_results").fadeIn('slow');
                    $("#u_submit").removeAttr("disabled");
             }
    });
    } else{
        $("#u_submit").removeAttr("disabled");
    }
}