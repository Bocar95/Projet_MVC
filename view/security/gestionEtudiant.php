<style>@import url("<?=BASE_URL?>/public/css/gestion_etudiant.css");</style>

        <article class="col-md">
            <div class="rechercher">
                <label for="rechercher" class="rechercher_label">Rechercher</label>
                <select name="type" id="type">
                    <option value="" selected></option>
                    <option name="matricule" value="matricule" id="matricule">Matricule</option>
                    <option name="bourse" value="bouse" id="bourse">Boursier</option>
                    <option name="departement" value="departement" id="departement">Département</option>
                </select>
            </div>
        </article>

            <div id="scrollZone" class="col">
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Numéro de chambre</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <tr class="text-center">
                            <td>étudiant 1</td>
                            <td>étudiant 1</td>
                            <td>000-0000</td>
                            <td>Modifier</td>
                            <td><img src="<?=BASE_URL?>/public/images/ic-supprimer.png" alt="" id="supprimer"></td>
                        </tr>
                        <tr class="text-center">
                            <td>étudiant 1</td>
                            <td>étudiant 1</td>
                            <td>000-0000</td>
                            <td>Modifier</td>
                            <td><img src="<?=BASE_URL?>/public/images/ic-supprimer.png" alt="" id="supprimer"></td>
                        </tr>
                        <tr class="text-center">
                            <td>étudiant 1</td>
                            <td>étudiant 1</td>
                            <td>000-0000</td>
                            <td>Modifier</td>
                            <td><img src="<?=BASE_URL?>/public/images/ic-supprimer.png" alt="" id="supprimer"></td>
                        </tr>
                        <tr class="text-center">
                            <td>étudiant 1</td>
                            <td>étudiant 1</td>
                            <td>000-0000</td>
                            <td>Modifier</td>
                            <td><img src="<?=BASE_URL?>/public/images/ic-supprimer.png" alt="" id="supprimer"></td>
                        </tr>
                        <tr class="text-center">
                            <td>étudiant 1</td>
                            <td>étudiant 1</td>
                            <td>000-0000</td>
                            <td>Modifier</td>
                            <td><img src="<?=BASE_URL?>/public/images/ic-supprimer.png" alt="" id="supprimer"></td>
                        </tr>
                        <tr class="text-center">
                            <td>étudiant 1</td>
                            <td>étudiant 1</td>
                            <td>000-0000</td>
                            <td>Modifier</td>
                            <td><img src="<?=BASE_URL?>/public/images/ic-supprimer.png" alt="" id="supprimer"></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>