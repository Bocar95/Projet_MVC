<style>@import url("<?=BASE_URL?>/public/css/gestion_chambre.css");</style>             
                
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
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
                                    <td><?= $value->getnumCham(); ?></td>
                                    <td><?= $value->getNumDep(); ?></td>
                                    <td><?= $value->getType(); ?></td>
                                    <td>Modifier</td>
                                    <td><input type="hidden" value="<?=$value->getidCham();?>">
                                        <img src="<?=BASE_URL?>/public/images/ic-supprimer.png" alt="" id="supprimer"></td>
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
