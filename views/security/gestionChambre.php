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
<!--PAGINATION-->
<div class="col-6 m-auto">
    <nav aria-label="...">
        <ul class="pagination text-success">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Précédent</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Suivant</a>
            </li>
        </ul>
    </nav>            
</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="<?=BASE_URL?>/public/js/jquery.js"></script>
    <script src="<?=BASE_URL?>/public/js/chambre.js"></script>
