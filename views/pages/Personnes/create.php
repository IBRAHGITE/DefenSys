<div class="panel-heading">
    <nav aria-label="breadcrumb"  class="col-lg-11 col-md-10 col-sm-10">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Gestion</li>
            <li class="breadcrumb-item">Moyens</li>
            <li class="breadcrumb-item exportTitle">Personnes</li>
            <li class="breadcrumb-item active" aria-current="page">Ajouter une personne</li>
        </ol>
        <div class="d-flex justify-content-end margin-bottom-2">
            <a href="index.php?page=personne&var=index&elt=Liste des personne"><button
                class="btn btn-primary form-inline"><i class="fa-duotone fa-solid fa-list"></i>
                Liste</button>
            </a>
        </div>
    </nav>
</div>
<div class="panel-body" >
    <form method="POST" style="width: 90%; margin-left: 5%;" action="index.php?page=personne&var=store&elt=Ajouter une personne">
        <!-- <div class="form-group row">
            <label class="col-sm-2 col-form-label">Matricule personne <sup class="text-danger">*</sup></label>
            <div class="col-sm-10">
                <input type="text" maxlength="50" class="form-control" name="matricule" autocomplete="off" required />
            </div>
        </div> -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nom <sup class="text-danger">*</sup></label>
            <div class="col-sm-10">
                <input type="text" maxlength="50" class="form-control" name="nom" autocomplete="off" required />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Prenom(s) <sup class="text-danger">*</sup></label>
            <div class="col-sm-10">
                <input type="text" maxlength="50" class="form-control" name="prenom" autocomplete="off" required />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Date de naissance <sup class="text-danger">*</sup></label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="datenais" autocomplete="off" required />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-md-2 col-sm-2 col-xs-12">Departement <sup class="text-danger">*</sup></label>
            <div class="col-md-10 col-sm-10 col-xs-12">
                <select id="departement" name="departement" class="form-control" required>
                <option value="">Choisir le departement ...</option>
                    <?php if (isset($liste_departements)) { ?>
                        <?php foreach ($liste_departements as $key => $site) { ?>
                            <option value="<?php echo $site['libelle'] ?>">
                                <?php echo $site['libelle']  ?>
                            </option>
                    <?php }
                    } ?>
                </select>
                <span class="text-default model_Caracter"></span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Fonction <sup class="text-danger">*</sup></label>
            <div class="col-sm-10">
                <input type="text" maxlength="50" class="form-control" name="fonction" autocomplete="off" required />
            </div>
        </div>        
        <div class="form-group row">
            <label class="col-sm-12 col-form-label">Commentaires</label>
            <div class="col-sm-12">
                <textarea id="" rows="4" class="form-control" name="commentaire"></textarea>
            </div>
        </div>
        <div class="panel-footer d-flex justify-content-end">
            <div class="col-sm-offset-10">
                <button type="submit" class="btn btn-success">Enregistrer</button>
                <a href="index.php?page=personnes&var=index&elt=Liste des personnes" class="btn-no-deco" ><button
                    type="button" class="btn btn-default" style="border: 1px solid #000">Annuler</button>
                </a>
            </div>
        </div>
    </form>
</div>