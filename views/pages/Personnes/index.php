<div class="page-wrapper">
    <!-- Page body start -->
    <div class="page-body">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel-heading">
                    <nav aria-label="breadcrumb"  class="col-lg-11 col-md-10 col-sm-10">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Gestion</li>
                            <li class="breadcrumb-item">Personnes</li>
                            <li class="breadcrumb-item exportTitle">Liste integrale</li>
                        </ol>
                        <div class="d-flex justify-content-end margin-bottom-2">
                        <a href="index.php?page=personne&var=create&elt=Ajouter une personne"><button
                            class="btn btn-primary form-inline"><i class="icofont icofont-ui-add"></i>
                            Ajouter</button>
                        </a>
                    </div>
                    </nav>
                </div>
                <div class="panel panel-default">
                        <div class="panel-body">
                        <div class="table-responsive dt-responsive">
                            <table id="normalTable" class="table table-borderles table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prénom(S)</th>
                                        <th>Date de naissance</th>
                                        <th>Compagnie</th>
                                        <th>Departement</th>
                                        <th>Fonction</th>
                                        <th>Blacklist</th>
                                        <th>Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if(isset($personne) && !empty($personne) && is_array($personne)){
                                    foreach ($personne as $key => $value) { ?>
                                    <tr>
                                        <td><?=  $value['username']; ?></td>
                                        <td><?= $value['firstname'] ?></td>
                                        <td><?= $value['lastname'] ?></td>
                                        <td></td>
                                        <td><?= $value['lastLogin'];?></td>
                                        <td>
                                            <a href="index.php?page=weekly&var=show&id=<?=  $value['id']; ?>&elt=Weekly report"
                                                class="btn-no-deco">
                                                <button class="btn btn-outline-primary btn-sm" title="Voir détails"><i
                                                        class="bi bi-eye"></i></button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php }}else{?>
                                        <tr>
                                            <td colspan="8" class="text-center">
                                                <div role="alert">
                                                    Aucune personne trouvé.
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body end -->
</div>