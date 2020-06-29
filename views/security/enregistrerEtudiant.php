<style>@import url("<?=BASE_URL?>/public/css/enregistrer_etudiant.css");</style>


<form method="POST" action="<?=BASE_URL?>/Gestionnaire/AddEtudiant" class="form" id="form">
            
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
                        <small class="error-form" id="error_mail"></small>
                    </div>

                    <div class="label_input">
                        <label for="telephone">Téléphone</label>
                        <input type="text" name="telephone" id="telephone" placeholder="Saisir le numéro de téléphone">
                        <small class="error-form" id="error_tel"></small>
                    </div>

                    <div class="label_input">
                        <label for="date">Date de Naissance</label>
                        <input type="date" name="date" id="date" placeholder="Saisir la date de naissance">
                        <small class="error-form" id="error_date"></small>
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
                        <small class="error-form" id="error_type"></small>
                        <div id="generer" class="btn btn-reponse">+</div>
                    </div>



                    <div class="zone_affichage" id="zone_affichage">
                        <!--ON GENERE LES CHAMPS ICI (dans la zone cadrer en noir)-->
                    </div>

                    <div class="label_input">
                        <button type="submit" name="btn_save" id="enregistrer" class="btn btn-primary">Enregistrer</button>
                    </div>

                </article>
            </form>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="<?=BASE_URL?>/public/js/jquery.js"></script>
    <script src="<?=BASE_URL?>/public/js/etudiant.js"></script>
