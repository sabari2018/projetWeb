//Script qui permet de lancer une fenetre modal
$('#edit').on('show.bs.modal', function (event) {
    console.log('Modal opened');
    var button = $(event.relatedTarget);
    var libelle = button.data('mylibelle');
    var id = button.data('id');

    var modal = $(this);
    modal.find('.modal-body #libelle').val(libelle);
    modal.find('.modal-body #id').val(id);
});

//Script qui permet de lancer le Datepicker
$(document).ready(function(){
    var date_input=$('input[name="date_naissance"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
        format: 'yyyy-mm-dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
    })
});

//Script qui permet de desactiver un le bouton importer tant qu'un ficher n'es pas choisi
$(document).ready(function(){
    $('.btn-import').attr('disabled',true);
    $('#importer').change(function(){
        if($(this).val().length !=0)
            $('.btn-import').attr('disabled', false);
        else
            $('.btn-import').attr('disabled',true);
    });
    $('#file').change(function(){
        if($(this).val().length !=0)
            $('.btn-import').attr('disabled', false);
        else
            $('.btn-import').attr('disabled',true);
    });


});

/* Script qui permet d'afficher le champs import lors du click sur le checkbox
* puis verifie que le fichier selectionner est bien d'extention .jpg, jpeg, png ou gif*/
$(document).ready(function () {

    $('#my_checkbox').change(function () {
        if (this.checked) {
            document.getElementById('file').style.display = "block";
            document.getElementById('uplade_fic').style.display = "block";
        }
        else {
            document.getElementById('file').style.display = "none";
            document.getElementById('uplade_fic').style.display = "none";
        }
    });

    $('#file').change(function () {

        var fic = $(this).val();
        console.log(fic);
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
        if (!allowedExtensions.exec(fic)) {
            $('#erreur_file').html('Ce format de fichier n\'est pas autorise')
                .css({'color': 'red'})
                .show();
        }else {
            $('#erreur_file').hide();
            //updatePhoto(fic, $('#medecin_id').val());
        }
    });

    $('#uplade_fic').click(function () {
       console.log('Ok');
    });
});

/**
 * Fonction qui permet de mettre a jour une image et de le charger dans la balise <img/> sans recharger tout la page
 * @param path chemin du fichier
 * @param id identifier de la personne
 * @param url chemin vers la fonction du controller qui fait la modification dans la base de donnees
 */
function updatePhoto(path,id,url){
    $.ajax({
        type: 'POST',
        url:url,
        data: {
            'path': path,
            'id': id
        },
        dataType: 'json',
        success: function (data) {
            if (data['status'] === 'success') {
                console.log('UPDATE OK');
                var img = document.getElementById('medecin_photo');
                img.setAttribute('src', path);
            }
        },
        err: function (err) {
            console.log(err.responseText);
        }
    })
}

/**
 * Script qui permet d'appliquer le style WYSIWYG sur chaque textarea
 */
$(document).ready(function () {
    tinymce.init({selector:'textarea'});
});

/**
 * Fonction Ajax qui permet de faire l'autocomplate sur les differents specialites en Medecin
 * @param url
 */
function autocomplate(url) {

    $('#libelle').keyup(function(){
        var query = $(this).val();
        if(query != '')
        {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url:url,
                method:"POST",
                data:{query:query, _token:_token},
                success:function(data){
                    $('#specialiteList').fadeIn();
                    $('#specialiteList').html(data);
                }
            });
        }
    });

    $(document).on('click', 'li', function(){
        $('#libelle').val($(this).text());
        $('#specialiteList').fadeOut();
    });
}
