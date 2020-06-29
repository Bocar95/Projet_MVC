<style>@import url("<?=BASE_URL?>/public/css/enregistrer_chambre.css");</style>

<form method="POST" action="<?=BASE_URL?>/Gestionnaire/AddChambre" class="form">

                <div class="form-group">
                    <label for="batiment">Numéro de batiment</label>
                    <input type="text" name="numDep" id="batiment" placeholder="00" class="form-control col-3">
                    <small class="error-form" id="error_numero"></small>
                </div>

                <div class="form-group">
                    <label for="type">Type</label>
                        <select name="type" id="type" class="form-control col-3">
                            <option value="" selected></option>
                            <option name="individuel" value="individuel" id="individuel">Individuel</option>
                            <option name="a_deux" value="a_deux" id="a_deux">A deux</option>
                        </select>
                </div>

                <div class="form-group">
                    <button type="submit" name="btn_save" id="enregistrer" class="btn btn-primary">Enregistrer</button>
                </div>


</form>


<style>

</style>