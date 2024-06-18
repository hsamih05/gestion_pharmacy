<?php
$title = "Repartition du Budget 2024";
ob_start();
?>
    <form action="index.php?action=store" method="post">
        <!-- <div class="input-group mb-3"> -->
        <div class="form-group">
            <label for="formationSanitaire">Sélectionnez une formation sanitaire</label>
                <select class="custom-select" name="fomation_sanitaire" id="formationSanitaire" require>
                <option value="Casablanca">Casablanca</option>
<option value="Rabat">Rabat</option>
<option value="Fes">Fes</option>
<option value="Marrakech">Marrakech</option>
<option value="Tangier">Tangier</option>
<option value="Agadir">Agadir</option>
<option value="Meknes">Meknes</option>
<option value="Oujda">Oujda</option>
<option value="Kenitra">Kenitra</option>
<option value="Tetouan">Tetouan</option>
<option value="Safi">Safi</option>
<option value="Mohammedia">Mohammedia</option>
<option value="Khouribga">Khouribga</option>
<option value="El Jadida">El Jadida</option>
<option value="Beni Mellal">Beni Mellal</option>
<option value="Nador">Nador</option>
<option value="Ksar El Kebir">Ksar El Kebir</option>
<option value="Larache">Larache</option>
<option value="Khemisset">Khemisset</option>
<option value="Guelmim">Guelmim</option>
<option value="Taza">Taza</option>
<option value="Tiznit">Tiznit</option>
<option value="Ouarzazate">Ouarzazate</option>
                </select>
        </div>
            <!-- <input type="text" class="form-control" name="fomation_sanitaire"> -->
            <!-- </div> -->
        
        <div class="form-group">
            <label>Consultation medicales et paramédicales</label>
            <input type="number" class="form-control" name="consultation_md_paramd" id="consultation" oninput="updatePoints()" min="0">
        </div>
        <div class="form-group">        
            <label>Points</label>
            <input type="number" class="form-control" name="consultation_md_paramd_Points" readonly  id="consultation_point" min="0" >
        </div>
        <div class="form-group">
            <label>Nbre de la population</label>
            <input type="number" class="form-control" name="nbr_population" id="population" oninput="updatePoints()" min="0">
        </div>
        <div class="form-group">
            <label>Points</label>
            <input type="number" class="form-control" name="nbr_population_Points" readonly  id="population_point" min="0">
        </div>
        <div class="form-group">
            <label>Nbre d'accouchement</label>
            <input type="number" class="form-control" name="nbr_accouchement" id="accouchement" oninput="updatePoints()" min="0">
        </div>
        <div class="form-group">
            <label>Points</label>
            <input type="number" class="form-control" name="nbr_accouchement_Points" readonly id="accouchement_point"  min="0">
        </div>
        
        <div class="form-group">
            <label>Nombre totales des points</label>
            <input type="text" class="form-control" name="nbr_Points_Total" readonly  id="nbrtotal_point" min="0">
        </div>
        <div class="form-group">
            <label>% de Crédit</label>
            <input type="number" class="form-control" name="Credit" min="0">
        </div>
        <div class="form-group">
            <label>Budget </label>
            <input type="number" class="form-control" name="budget" min="0">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success my-2" value="Ajouter" name="ajouter">
            <a class="btn btn-warning" href="index.php?action=list">Annuler</a>
        </div>
    </form>

    <!-- <script src="script.js"></script> -->
   
<?php $content = ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>