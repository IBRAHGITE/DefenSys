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
                        <div class="d-flex justify-content-end align-items-end margin-bottom-2">
                        <a href="index.php?page=personne&var=create&elt=Ajouter une personne"><button
                            class="btn btn-primary form-inline"><i class="fa-duotone fa-solid fa-plus"></i>
                            Ajouter</button>
                        </a>
                    </div>
                    </nav>
                    <div class="panel panel-default">
                            <div class="panel-body">
                            <div class="table-responsive dt-responsive">
                                <table id="normalTable" class="table table-borderles table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prénom(S)</th>
                                            <th>Date de naissance</th>
                                            <th>Departement</th>
                                            <th>Fonction</th>
                                            <th>Blacklist</th>
                                            <th>Actions </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        if(isset($personnes) && !empty($personnes) && is_array($personnes)){
                                        foreach ($personnes as $key => $value) { ?>
                                        <tr>
                                            <td><?= $value['firstname'] ?></td>
                                            <td><?= $value['lastname'] ?></td>
                                            <td><?= $value['dateNaissance'] ?></td>
                                            <td><?= $value['departement'];?></td>
                                            <td><?= $value['fonction'];?></td>
                                            <td>
                                                <?php
                                                if ($value['blacklist'] == 1) {
                                                    echo '<span class="badge badge-danger">Oui</span>';
                                                } else {
                                                    echo '<span class="badge badge-success">Non</span>';
                                                }
                                                ?> 
                                            </td>
                                            <td>
                                                <?php if ($value['blacklist'] == 1) { ?>
                                                    <a href="index.php?page=personne&var=unblacklist&id=<?= base64_encode($value['id']); ?>&elt=Personnes"
                                                        class="btn-no-deco">
                                                        <button class="btn btn-outline-success btn-sm" title="Déblacklister"><i class="fa-duotone fa-solid fa-check"></i></button>
                                                    </a>
                                                <?php }else{?>
                                                <a href="index.php?page=personne&var=blacklist&id=<?= base64_encode($value['id']); ?>&elt=Personnes"
                                                    class="btn-no-deco">
                                                    <button class="btn btn-outline-danger btn-sm" title="Blacklister"><i class="fa-duotone fa-solid fa-xmark"></i></button>
                                                </a>
                                                <?php } ?>
                                                <a href="index.php?page=personne&var=show&id=<?= base64_encode($value['id']); ?>&elt=Personnes"
                                                    class="btn-no-deco">
                                                    <button class="btn btn-outline-primary btn-sm" title="Voir détails"><i
                                                    class="bi bi-eye"></i></button>
                                                </a>
                                                <a href="index.php?page=personne&var=edit&id=<?= base64_encode($value['id']); ?>&elt=Personnes"
                                                    class="btn-no-deco">
                                                    <button class="btn btn-outline-primary btn-sm" title="Modifier"><i
                                                    class="bi bi-pencil"></i></button>
                                                </a>
                                                <a href="index.php?page=personne&var=delete&id=<?= base64_encode($value['id']); ?>&elt=Personnes"
                                                    class="btn-no-deco">
                                                    <button class="btn btn-outline-danger btn-sm" title="Supprimer"><i
                                                    class="bi bi-trash"></i></button>
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
    </div>
    <!-- Page body end -->
</div>