function postToGoogle() {
    var email = $("#emailField").val();
    var mess = $("#messField").val();

    $.ajax({

        url: "https://docs.google.com/forms/d/e/1FAIpQLSedUzqzlI4-6YYl_fFf2CZsDnR4JczWd5uvpabWBoMFBfa1Pg/formResponse?",

        data: { 
            "entry.1914850348": email,
            "entry.900044926": mess
        },
        type: "POST",
        dataType: "jsonp", 
        success: function(d)
    {}, 
        error: function(x, y, z) {
            $('#success-msg').show();
        }
    });

    return false;
}