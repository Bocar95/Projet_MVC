<style>@import url("<?=BASE_URL?>/public/css/gestion_chambre.css");</style>             
                
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <th style="display: none;">Id</th>
                            <th>Numéro</th>
                            <th>Numéro batiment</th>
                            <th>Type</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">

                        <?php
                            foreach (@$chambre as $key=>$value){
                        ?>
                                <tr class="text-center">
                                    <td style="display: none;"><?= $value->getidCham(); ?></td>
                                    <td><?= $value->getNumCham(); ?></td>
                                    <td><?= $value->getNumDep(); ?></td>
                                    <td><?= $value->getType(); ?></td>
                                    <td><button type="button" class="btn btn-outline-primary"id="mdf" data-toggle="modal" data-target="#myModal">Modify</button></td>
                                    <td><button type="button" class="btn btn-outline-danger" id="supprimer">Delete</button></td>
                                </tr>

                            <?php
                            }
                            ?>

                        

                    </tbody>
                </table>

                <button type="submit" name="suivant" id="suivant" class="btn btn-primary">Suivant</button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="<?=BASE_URL?>/public/js/jquery.js"></script>
    <script src="<?=BASE_URL?>/public/js/chambre.js"></script>
