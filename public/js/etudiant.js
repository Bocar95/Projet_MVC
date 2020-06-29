//GENERATION DES CHAMPS SPECIFIQUE....
var num = 0;

$('#generer').on("click",function(){
    //Récuperation de la zone où on affiche les champs générer.    
    const $container=$("#zone_affichage");
    
    //On récupére la valeur du type choisi.
    var typeReponse = $('#type').val();

    if (typeReponse === "boursier_non_loger"){
        //On Vide le Condenu avant de Générer les champs.
        $container.html("");

        //On génére les champs spécifique.
        $container.append(`
                                <br>
                                <select name="type_bourse" id="type_bourse" class="champ">
                                    <option value="" selected>choisir le type de bourse</option>
                                    <option name="demi_bourse" value="20.000" id="demi_bourse">Demi bourse</option>
                                    <option name="bourse_complete" value="40.000" id="bourse_complete">Bourse complète</option>
                                </select>                                  
                                `)
    num++;
    }

    if (typeReponse === "boursier_loger"){

        $container.html("");

        $container.append(`
                                <br>
                                <select name="type_bourse" id="type_bourse" class="champ">
                                    <option value="" selected>choisir le type de bourse</option>
                                    <option name="demi_bourse" value="20000" id="demi_bourse">Demi bourse</option>
                                    <option name="bourse_complete" value="40000" id="bourse_complete">Bourse complète</option>
                                </select> 
                                <br>
                                <br>
                                <input type="number" name="chambre" id="chambre" class="champ" placeholder="choisir le numéro de chambre">
                                `)
    num++;
    }

    if (typeReponse === "non_boursier"){
        $container.html("");

        $container.append(`
                                <br>
                                <input type="text" name="adresse" id="adresse" class="champ" placeholder="Saisir l'adresse de l'étudiant">
                                    `)
    num++;
    }

});



/*//VALIDATION DES CHAMPS.....


// Hiding error message
        
$("#error_prenom").hide();
$("#error_nom").hide();
$("#error_mail").hide();
$("#error_tel").hide();
$("#error_date").hide();
$("#error_type").hide();

        
var error_prenom = false;
var error_nom = false;
var error_mail = false;
var error_tel = false;
var error_date = false;
var error_type = false;

                
        
// Functions
function check_prenom() {
    var prenom_length = $("#prenom").val().length;

    if(prenom_length < 1) {
        $("#prenom").html("This field is required!");
        $("#prenom").show();
        error_prenom = true;
    }else {
        $("#prenom").hide();
    }
}

function check_nom() {
    var nom_length = $("#nom").val().length;

    if(nom_length < 1) {
        $("#error_nom").html("This field is required!");
        $("#error_nom").show();
        error_nom = true;
    }else {
        $("#error_nom").hide();
    }
}

function check_mail() {
    var nom_length = $("#mail").val().length;

    if(nom_length < 1) {
        $("#error_mail").html("This field is required!");
        $("#error_mail").show();
        error_mail = true;
    }else {
        $("#error_mail").hide();
    }
}

function check_tel() {
    var nom_length = $("#tel").val().length;

    if(nom_length < 1) {
        $("#error_tel").html("This field is required!");
        $("#error_tel").show();
        error_tel = true;
    }else {
        $("#error_tel").hide();
    }
}

function check_date() {
    var nom_length = $("#date").val().length;

    if(nom_length < 1) {
        $("#error_date").html("This field is required!");
        $("#error_date").show();
        error_date = true;
    }else {
        $("#error_date").hide();
    }
}

function check_type() {
    var nom_length = $("#type").val().length;

    if(nom_length < 1) {
        $("#error_type").html("This field is required!");
        $("#error_type").show();
        error_type= true;
    }else {
        $("#error_type").hide();
    }
}
            
// Events
$("#prenom").focusout(function() {
    check_prenom();
});

$("#nom").focusout(function() {
    check_nom();
});

$("#mail").focusout(function() {
    check_mail();
});

$("#tel").focusout(function() {
    check_tel();
});

$("#date").focusout(function() {
    check_date();
});

$("#type").focusout(function() {
    check_type();
});
        
$("#enregistrer").on("click",function() {
    error_prenom = false;
    error_nom = false;
    error_mail = false;
    error_tel = false;
    error_date = false;
    error_type = false;               
        
    check_prenom();
    check_nom();
    check_mail();
    check_tel();
    check_date();
    check_type();

        
    if(error_prenom == false && error_nom == false && error_mail == false && error_tel == false && error_date == false && error_type == false) {
        return true;
    }else {
        return false;
    }
});*/
