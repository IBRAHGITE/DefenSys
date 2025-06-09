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
                            <li class="breadcrumb-item exportTitle">Departements</li>
                            <li class="breadcrumb-item active" aria-current="page">Liste</li>
                        </ol>
                        <div class="d-flex justify-content-end margin-bottom-2">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                class="btn btn-primary form-inline"><i class="icofont icofont-ui-add"></i>
                                Ajouter
                            </button>
                        </div>
                    </nav>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive dt-responsive">
                            <table id="normalTable" class="table bor table-borderles table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nom du departements</th>
                                        <th>Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        if (!empty($listeDepartements && is_array($listeDepartements))) {
                                    
                                    foreach ($listeDepartements as $key => $value) {
                                        $modalId = "staticBackdropEdit" . $value['id']; ?>  
                                        <tr id="row-<?= $value['id']; ?>">
                                            <td><?=  $value['libelle']; ?></td>
                                            <td>
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#<?= $modalId; ?>"
                                                    class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil-square"></i>
                                                </button>
                                                <a href="./?page=departement&var=delete&id=<?= base64_encode($value['id']); ?>"><button class="btn btn-outline-danger btn-sm" title="Supprimer">
                                                    <i class="bi bi-trash"></i>
                                                </button></a>

                                            </td>
                                            <div class="modal fade" id="<?= $modalId; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="<?= $modalId; ?>.Label" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="<?= $modalId; ?>.Label">Edition de departement</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="./?page=departement&var=update" method="post">
                                                            <div class="mb-3">
                                                                <label for="libelle" class="form-label">Nom du departement</label>
                                                                <input type="text" class="form-control" id="libelle" name="libelle" value=<?=$value['libelle'] ?> required>
                                                                <input type="hidden" name="id" value="<?= $value['id']; ?>">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-success">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </tr>
                                    <?php }}?>  
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
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Ajout de departement</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="./?page=departement&var=store" method="post">
            <div class="mb-3">
                <label for="libelle" class="form-label">Nom du departement</label>
                <input type="text" class="form-control" id="libelle" name="libelle" required>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- ModalEdit -->
