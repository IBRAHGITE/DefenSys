<div class="panel-heading">
    <nav aria-label="breadcrumb"  class="col-lg-11 col-md-10 col-sm-10">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Gestion</li>
            <li class="breadcrumb-item">Moyens</li>
            <li class="breadcrumb-item exportTitle">Machines</li>
            <li class="breadcrumb-item active" aria-current="page">Ajout</li>
        </ol>
        <div class="d-flex justify-content-end margin-bottom-2">
            <a href="index.php?page=vehicule&var=index&elt=Vehicules"><button
                class="btn btn-primary form-inline"><i class="icofont icofont-ui-add"></i>
                Liste</button>
            </a>
        </div>
    </nav>
</div>
<div class="panel-body" >
    <form method="POST" style="width: 90%; margin-left: 5%;" action="index.php?page=radio&var=store&elt=Radios">
        <div class="form-group row">
            <label class="col-form-label col-md-2 col-sm-2 col-xs-12">Type de vehicule <sup class="text-danger">*</sup></label>
            <div class="col-md-10 col-sm-10 col-xs-12">
                <div class="col-sm-12">
                    <label> Voiture &nbsp;&nbsp;
                        <input type="radio" id="voiture" value="Voiture" name="type_vehicule" checked>
                    </label>&nbsp;&nbsp;&nbsp;
                    <label> Moto &nbsp;&nbsp;
                        <input type="radio" id="moto" value="Moto" name="type_vehicule">
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-md-2 col-sm-2 col-xs-12">Marque <sup class="text-danger">*</sup></label>
            <div class="col-md-10 col-sm-10 col-xs-12">
                <select id="marque_vehicule" name="marque_vehicule" class="js-example-responsive form-control" required>
                    <option value="">Choisir la marque ...</option>
                    <?php if (isset($liste_marques)) { ?>
                        <?php foreach ($liste_marques as $key => $site) { ?>
                            <option value="<?php echo $site['libelle'] ?>">
                                <?php echo $site['libelle']  ?>
                            </option>
                    <?php }
                    } ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-md-2 col-sm-2 col-xs-12">Modèle <sup class="text-danger">*</sup></label>
            <div class="col-md-10 col-sm-10 col-xs-12">
                <select id="marque_vehicule" name="marque_vehicule" class="form-control" required>
                <option value="">Choisir le modèle ...</option>
                    <?php if (isset($liste_modeles)) { ?>
                        <?php foreach ($liste_modeles as $key => $site) { ?>
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
            <label class="col-sm-2 col-form-label">N° immatriculation <sup class="text-danger">*</sup></label>
            <div class="col-sm-10">
                <input type="text" maxlength="50" class="form-control" name="numero_serie_radio" autocomplete="off" required />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-md-2 col-sm-2 col-xs-12">Couleur <sup class="text-danger">*</sup></label>
            <div class="col-md-10 col-sm-10 col-xs-12">
                <select id="marque_vehicule" name="marque_vehicule" class="form-control" required>
                <option value="">Choisir la couleur ...</option>
                        <?php foreach ($liste_couleur as $key => $site) { ?>
                            <option value="<?php echo $site['code'] ?>">
                                <?php echo $site['libelle']  ?>
                            </option>
                    <?php } ?>
                </select>
                <span class="text-default model_Caracter"></span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Etat <sup class="text-danger">*</sup></label>
            <div class="col-sm-5">
                <select id="etat_radio" name="etat" class="js-example-responsive form-control" required>
                    <option value=""> Choisir un etat ... </option>
                    <option value="1">Opérationnel</option>
                    <option value="2">Maintenance à prévoir</option>
                    <option value="3">Défectueux</option>
                    <option value="4">HS</option>
                </select>
            </div>
        </div>
        
        <div class="form-group row">
            <label class="col-sm-12 col-form-label">Commentaires</label>
            <div class="col-sm-12">
                <textarea id="denomination_radio" rows="4" class="form-control note" name="denomination_radio"></textarea>
            </div>
        </div>
        <div class="panel-footer d-flex justify-content-end">
            <div class="col-sm-offset-10">
                <button type="submit" class="btn btn-success">Enregistrer</button>
                <a href="index.php?page=vehicule&var=index&elt=Vehicules" class="btn-no-deco" ><button
                    type="button" class="btn btn-default" style="border: 1px solid #000">Annuler</button>
                </a>
            </div>
        </div>
    </form>
</div>