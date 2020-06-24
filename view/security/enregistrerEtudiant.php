<style>@import url("<?=BASE_URL?>/public/css/enregistrer_etudiant.css");</style>


<form method="POST" action="" class="form">
            
                <article class="col-md">

                    <div class="label_input">
                        <label for="prenom">Prenom</label>
                        <input type="text" name="prenom" id="prenom" placeholder="Saisir votre prénom">
                        <small class="error-form" id="error_prenom"></small>
                    </div>

                    <div class="label_input">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" id="nom" placeholder="Saisir votre nom">
                        <small class="error-form" id="error_nom"></small>
                    </div>

                    <div class="label_input">
                        <label for="mail">Mail</label>
                        <input type="text" name="mail" id="mail" placeholder="****@gmail.com">
                        <small class="error-form" id="error_numero"></small>
                    </div>

                    <div class="label_input">
                        <label for="telephone">Téléphone</label>
                        <input type="text" name="telephone" id="telephone" placeholder="Saisir le numéro de téléphone">
                        <small class="error-form" id="error_nom"></small>
                    </div>

                    <div class="label_input">
                        <label for="date">Date de Naissance</label>
                        <input type="date" name="date" id="date" placeholder="Saisir la date de naissance">
                        <small class="error-form" id="error_nom"></small>
                    </div>

                </article>

                <article class="col-md">

                    <div class="label_input">
                        <label for="type">Type</label>
                            <select name="type" id="type">
                                <option value="" selected></option>
                                <option name="boursier_non_loger" value="boursier_non_loger" id="boursier_non_loger">Boursier non logé</option>
                                <option name="boursier_loger" value="boursier_loger" id="boursier_loger">Boursier logé</option>
                                <option name="non_boursier" value="non_boursier" id="non_boursier">Non boursier</option>
                            </select>
                    </div>

                    <div class="zone_affichage" id="zone_affichage">
                        <!--ON GENERE LES CHAMPS ICI (dans la zone blanche)-->
                    </div>

                    <div class="label_input">
                        <button type="submit" name="enregistrer" id="enregistrer" class="btn btn-primary">Enregistrer</button>
                    </div>

                </article>
            </form>

            <style>


.container {
    position: relative;
    background-color: #FFFFFF;
    margin: 1.5% auto;
    padding: 0px;
    box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.25);
}

.form {
    position: relative;
    width: 100%;
    height: 100%;
    margin: 0px auto;
    background-color: #38CA8D;
}

.label_input {
    width: 40%;
    position: relative;
    border: none;
    padding: 0px;
    margin: 0px auto;
    background-color: #38CA8D;
}

.label_input label{
    display: block;
    color: black;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
}

.label_input input{
    width: 100%;
    height: 30px;
    padding: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: gray;
    box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.25);
    background-color: #FFFFFF;
}

.label_input select{
    width: 100%;
    height: 30px;
    padding: 15px;
    text-align: center;
    color: gray;
    box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.25);
    background-color: #FFFFFF;
}

.zone_affichage {
    position: relative;
    width: 50%;
    height: 150px;
    background-color: #FFFFFF;
    margin: 0px auto;
    border: 2px solid black;
    background-color: #38CA8D;
}

.label_input button{
    position: relative;
    width: 100%;
    margin: 4% 0px 4%;
    margin: 0x auto;
    text-align: center;
    color: black;
    font-weight: bold;
    box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.25);
}

.error-form {
    color: red;
    margin-bottom: 0px;
}

/* HOVER */ /* HOVER */ /* HOVER */ /* HOVER */ /* HOVER */ /* HOVER */ /* HOVER */ /* HOVER */ /* HOVER */

.cadre:hover {
    border-left: 7px solid #045c1e;
    background-color: #689AE7;
    position: relative;
    width: 100%;
    text-decoration: none;
}


            </style>