/**
 * Fonction qui verifie si l'email saisie est valide et se trouve en base de donnees.
 * Elle fait appel aux methodes IsEmail() et checkMailInDB()
 * @param url
 */
function verifierChampsEmail(url){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#inputEmail").blur(function (e) {

        if (IsEmail($('#inputEmail').val())){
            $('#erreur').hide();
            checkMailInDB(url);
        }
        else {
            $('#erreur').html('Ce mail est invalide')
                .css({'color': 'red'})
                .show();
            $('#inputEmail').focus();
        }

    });
}

/**
 * Fonction qui permet de valider le format de l'adresse mail
 * @param email
 * @returns {boolean}
 * @constructor
 */
function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

/**
 * Fonction Ajax qui permet de veifier l'existance de l'email en base de donnees
 * @param url
 */
function checkMailInDB(url) {

    $.ajax({
        type: 'POST',
        url: url,
        data: {
            'email': $('#inputEmail').val()
        },
        dataType: 'json',
        success: function (data) {
            console.log(data);
            if (data['status'] === 'failure') {
                $('#inputEmail').css({'border': '1px solid red'});

                $('#erreur').html('Ce mail n\'existe pas')
                    .css({'color': 'red'})
                    .show();
                $('#inputEmail').focus();
            }
            else {
                $('#inputEmail').css({'border': '1px solid green'});
                $('#erreur').hide();
            }
        },
        error: function (err) {
            console.log(err.responseText);
        }
    });
}
