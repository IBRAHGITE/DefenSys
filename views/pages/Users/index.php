<div class="page-wrapper">
    <!-- Page body start -->
    <div class="page-body">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                        <div class="panel-body">
                        <div class="table-responsive dt-responsive">
                            <table id="normalTable" class="table table-borderles table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Utilisateur</th>
                                        <th>Nom</th>
                                        <th>Prénom(S)</th>
                                        <th>Statut</th>
                                        <th>Dernière connexion</th>
                                        <th>Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach ($users AS $value) {?>
                                        
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