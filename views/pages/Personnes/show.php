<div class="panel-heading">
    <nav aria-label="breadcrumb"  class="col-lg-11 col-md-10 col-sm-10">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Gestion</li>
            <li class="breadcrumb-item">Moyens</li>
            <li class="breadcrumb-item exportTitle">Personnes</li>
            <li class="breadcrumb-item active" aria-current="page">Details</li>
        </ol>
        <div class="d-flex justify-content-end margin-bottom-2">
            <a href="index.php?page=personne&var=index&elt=Liste des personne"><button
                class="btn btn-primary form-inline"><i class="fa-duotone fa-solid fa-list"></i>
                Liste</button>
            </a>
        </div>
    </nav>
</div>
<div class="Card">
    <div class="card-body">

        <div class="d-flex align-items-start">
            <div class="tab-content col-sm-8 col-lg-9" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                    aria-labelledby="v-pills-home-tab">
                    <h4>Detail de l'utilisateur </h4>
                    <!-- <div class="d-flex align-content-end justify-content-end">
                        <a href="index.php?page=personne&var=edit&id=<?= base64_encode($personne[0]['id']) ?>&elt=Modifier une persone">
                            <button class="btn btn-warning form-inline"><i class="fa-duotone fa-solid fa-pen-to-square"></i>
                                Modifier</button>
                                </button>
                        </a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="index.php?page=personne&var=index&elt=Liste des personnes"><button
                                class="btn btn-primary form-inline"><i class="fa-duotone fa-solid fa-list"></i>
                                Liste</button></a>
                    </div> -->
                    <div class="mb-3 row">
                        <label class="col-sm-4 col-lg-3 col-form-label fw-bolder">Nom: </label>
                        <div class="col-sm-8 col-sm-9">
                            <span id="pers_nom"><?= $personne[0]['firstname']; ?></span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-lg-3 col-form-label fw-bolder">Prénom(s): </label>
                        <div class="col-sm-4 col-sm-4">
                            <span id="pers_prenom"><?= $personne[0]['lastname']; ?></span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-lg-3 col-form-label fw-bolder">Date de naissance:
                        </label>
                        <div class="col-sm-4 col-sm-4">
                            <span id="pers_naissance"><?= $personne[0]['dateNaissance']; ?></span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-lg-3 col-form-label fw-bolder">Département:
                        </label>
                        <div class="col-sm-4 col-sm-4">
                            <span id="pers_sang"><?= $personne[0]['departement']; ?></span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-lg-3 col-form-label fw-bolder">Fonction:
                        </label>
                        <div class="col-sm-4 col-sm-4">
                            <span id="pers_sang"><?= $personne[0]['fonction']; ?></span>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-lg-3 col-form-label fw-bolder">Blacklist: </label>
                        <div class="col-sm-4 col-sm-4">
                            <span id="pers_taille">
                                <?php
                                if ($personne[0]['blacklist'] == 1) {
                                    echo '<span class="badge badge-danger">Oui</span>';
                                } else {
                                    echo '<span class="badge badge-success">Non</span>';
                                }
                                ?>
                            </span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-lg-3 col-form-label fw-bolder">Commentaires:
                        </label>
                        <div class="col-sm-4 col-sm-4">
                            <span id="pers_sang"><?= $personne[0]['commentaire']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>