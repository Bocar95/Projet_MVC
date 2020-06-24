<style>@import url("<?=BASE_URL?>/public/css/enregistrer_chambre.css");</style>

<form method="POST" action="" class="form">

                <div class="label_input">
                    <label for="batiment">Numéro de batiment</label>
                    <input type="text" name="batiment" id="batiment" placeholder="00">
                    <small class="error-form" id="error_numero"></small>
                </div>

                <div class="label_input">
                    <label for="type">Type</label>
                        <select name="type" id="type">
                            <option value="" selected></option>
                            <option name="individuel" value="individuel" id="individuel">Individuel</option>
                            <option name="a_deux" value="a_deux" id="a_deux">A deux</option>
                        </select>
                </div>

                <div class="label_input">
                    <button type="submit" name="enregistrer" id="enregistrer" class="btn btn-primary">Enregistrer</button>
                </div>


</form>