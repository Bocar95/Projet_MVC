<style>@import url("<?=BASE_URL?>/public/css/style-defaut.css");</style>

<div id="scrollZone" class="col">
                <table class="table table-striped">

                    <thead>
                        <tr class="text-center">
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Téléphone</th>
                        </tr>
                    </thead>

                    <tbody id="tbody">
                        <?php
                        foreach(@$etudiant as $key=>$value){
                        ?>
                            <tr class="text-center">
                                <td><?= $value->getPrenom(); ?></td>
                                <td><?= $value->getNom(); ?></td>
                                <td><?= $value->getTelephone(); ?></td>
                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>