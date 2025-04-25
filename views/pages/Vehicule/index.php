<div class="page-wrapper">
    <!-- Page body start -->
    <div class="page-body">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel-heading">
                <nav aria-label="breadcrumb"  class="col-lg-11 col-md-10 col-sm-10">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Gestion</li>
                        <li class="breadcrumb-item">Moyens</li>
                        <li class="breadcrumb-item exportTitle">Machines</li>
                        <li class="breadcrumb-item active" aria-current="page">Liste</li>
                    </ol>
                    <div class="d-flex justify-content-end margin-bottom-2">
                        <a href="index.php?page=vehicule&var=create&elt=Vehicules"><button
                            class="btn btn-primary form-inline"><i class="icofont icofont-ui-add"></i>
                            Ajouter</button>
                        </a>
                    </div>
                </nav>
            </div>
                <div class="panel panel-default">
                <!-- <form method="POST" action="?page=weekly&var=recherche">
                    <div class="d-flex justify-content-center">
                    
                        <div class="p-2">
                            <label class="fw-bold">Semaine</label>
                            <input type="number" name="numero_semaine" class="form-control  mt-1 formFields" min="1" max="53"
                                placeholder="numero de semaine" value="<?php echo isset($old['numero_semaine']) ? $old['numero_semaine'] : ''; ?>">
                        </div>
                        <div class="p-2">
                            
                            <label class="fw-bold">Site</label>
                            <select class="form-select mt-1 formFields" name="sites">
                                <option value="">Select</option>
                                <?php foreach ($allSite as $key => $value) { ?>
                                <option <?php echo isset($old['sites']) && ( $key == $old['sites']) ? 'selected' : ''; ?>
                                    value="<?= $key ?>"><?= $value ?></option>

                                <?php } ?>
                            </select>
                        </div>

                        <div class="p-2">
                            <div class="d-grid gap-2 d-md-flex mt-4 p-1">
                                <button class="btn btn-outline-primary me-md-2" type="submit" id="submit"> Rechercher</button>
                                <button class="btn btn-outline-dark" id="form_reset" type="reset">Réinitialiser</button>
                            </div>
                        </div>
                    </div>
                </form> -->
                        <div class="panel-body">
                        <div class="table-responsive dt-responsive">
                            <table id="normalTable" class="table bor table-borderles table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Immatriculation</th>
                                        <th>Marque</th>
                                        <th>Modèle</th>
                                        <th>Type</th>
                                        <th>Couleur </th>
                                        <th>Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        if (!empty($vehicules && is_array($vehicules))) {
                                    
                                    foreach ($vehicules as $key => $value) {?>
                                        
                                    <tr>
                                    <td><?=  $value['immatriculation']; ?></td>
                                        <td><?= $value['marque'] ?></td>
                                        <td><?= $value['model'] ?></td>
                                        <td><?= $value['type'];?></td>
                                        <td><?= $value['couleur'];?></td>
                                        <td>
                                            <a href="index.php?page=weekly&var=show&id=<?=  $value['id']; ?>&elt=Weekly report"
                                                class="btn-no-deco">
                                                <button class="btn btn-outline-primary btn-sm" title="Voir détails"><i
                                                        class="bi bi-eye"></i></button>
                                                  </a>
                                            <a href="index.php?page=weekly&var=show&id=<?=  $value['id']; ?>&elt=Weekly report"
                                                class="btn-no-deco">
                                                <button class="btn btn-outline-primary btn-sm" title="Modifier">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                            </a>
                                            <a href="index.php?page=weekly&var=show&id=<?=  $value['id']; ?>&elt=Weekly report"
                                                class="btn-no-deco">
                                                <button class="btn btn-outline-danger btn-sm" title="Supprimer"><i
                                                        class="bi bi-trash"></i></button>
                                            </a>

                                        </td>
                                        
                                    </tr>
                                    <?php }}else{?>
                                        <tr><td colspan="6" class="text-center">
                                            <div role="alert">
                                                Aucun véhicule trouvé.
                                            </div>
                                        </td></tr>
                                        <?php }?>
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