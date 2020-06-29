<style>@import url("<?=BASE_URL?>/public/css/gestion_etudiant.css");</style>

        <article class="col-md">
            <div class="rechercher">
                <label for="rechercher" class="rechercher_label">Rechercher</label>
                <input type="text" name="type" id="type" class="form-control col-6">
                    <!--<option value="" selected></option>
                    <option name="matricule" value="matricule" id="matricule">Matricule</option>
                    <option name="bourse" value="bouse" id="bourse">Boursier</option>
                    <option name="departement" value="departement" id="departement">Département</option>-->
                </input>
            </div>
        </article>

            <div id="scrollZone" class="col">
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <th>Matricule</th>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Telephone</th>
                            <th>Type</th>
                            <th>Modifier</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">

                        <?php
                        foreach(@$etudiant as $key => $value){
                        ?>

                            <tr class="text-center">
                                <td><?= $value->getMatricule(); ?></td>
                                <td><?= $value->getPrenom(); ?></td>
                                <td><?= $value->getNom(); ?></td>
                                <td><?= $value->getTelephone(); ?></td>
                                <td><?= $value->getType(); ?></td>
                                <td><button type="button" class="btn btn-outline-success" id="mdf" data-toggle="modal" data-target="#myModal">Modifier</button></td>
                            </tr>

                        <?php
                        }
                        ?>
                        
                    </tbody>
                </table>
            </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>            
<script>
$(document).ready(function(){

  $("#type").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

            

            <style>


.rechercher {
    position: relative;
    display: block;
    width: 30%;
    left: 3%;
    padding: 0px;
    margin-top: 1%;
}

.rechercher_label{
    position: relative;
    display: block;
    color: black;
    font-weight: bold;
}

.rechercher_input{
    position: relative;
    width: 100%;
    height: 50px;
    margin-bottom: 2%;
    text-align: center;
    font-size: 12px;
    display: block;
    color: black;
    font-weight: bold;
    border-radius: 4px 4px 4px 4px;
}

.container {
    position: relative;
    background-color: #FFFFFF;
    margin: 1.5% auto;
    padding: 0px;
    box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.25);
}

#scrollZone{
    height: 380px;
    overflow: scroll;
}

.text-center {
    position: relative;
    background-color: #38CA8D;
    width: 100%;
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