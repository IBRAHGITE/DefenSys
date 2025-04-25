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
                        <li class="breadcrumb-item exportTitle">Compagnie de securite</li>
                        <li class="breadcrumb-item active" aria-current="page">Liste</li>
                    </ol>
                    <div class="d-flex justify-content-end margin-bottom-2">
                        <a href="index.php?page=cds&var=create&elt=Compagnie de securite"><button
                            class="btn btn-primary form-inline"><i class="icofont icofont-ui-add"></i>
                            Ajouter</button>
                        </a>
                    </div>
                </nav>
            </div>
                <div class="panel panel-default">
                        <div class="panel-body">
                        <div class="table-responsive dt-responsive">
                            <table id="normalTable" class="table bor table-borderles table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Numero</th>
                                        <th>Nom</th>
                                        <th>Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if (!empty($fds && is_array($fds))) {
                                    foreach ($fds as $key => $value) {?>
                                    <tr>
                                    <td><?=  $value['numero']; ?></td>
                                        <td><?= $value['nom'] ?></td>
                                        <td>
                                            <a href="index.php?page=fds&var=show&id=<?=  $value['id']; ?>&elt=Weekly report"
                                                class="btn-no-deco">
                                                <button class="btn btn-outline-primary btn-sm" title="Voir détails"><i
                                                        class="bi bi-eye"></i></button>
                                                  </a>
                                            <a href="index.php?page=fds&var=show&id=<?=  $value['id']; ?>&elt=Weekly report"
                                                class="btn-no-deco">
                                                <button class="btn btn-outline-primary btn-sm" title="Modifier">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                            </a>
                                            <a href="index.php?page=fds&var=show&id=<?=  $value['id']; ?>&elt=Weekly report"
                                                class="btn-no-deco">
                                                <button class="btn btn-outline-danger btn-sm" title="Supprimer"><i
                                                        class="bi bi-trash"></i></button>
                                            </a>

                                        </td>
                                        
                                    </tr>
                                    <?php }}else{?>
                                        <tr><td colspan="6" class="text-center">
                                            <div role="alert">
                                                Aucune force de sécurité trouvé.
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