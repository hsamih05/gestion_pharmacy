<?php
$title = "Modifier Formation";
ob_start();
?>
    <form action="index.php?action=update" method="post">
        <div class="form-group">
            <input type="hidden" class="form-control" name="id" value="<?= $formation->id ?>">
        </div>
        <div class="form-group">
            <label for="formationSanitaire">Sélectionnez une formation sanitaire</label>
                <select class="custom-select" name="fomation_sanitaire" id="formationSanitaire" value="<?= $formation->fomation_sanitaire ?>" require>
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
            <input type="number" class="form-control" name="consultation_md_paramd" id="consultation" oninput="updatePoints()"  value="<?= $formation->consultation_md_paramd ?>">
        </div>
        <div class="form-group">
            <label>Points</label>
            <input type="number" class="form-control" name="consultation_md_paramd_Points" readonly  id="consultation_point" value="<?= $formation->consultation_md_paramd_Points ?>">
        </div>
        <div class="form-group">
            <label>Nbre de la population</label>
            <input type="number" class="form-control" name="nbr_population" id="population" oninput="updatePoints()"value="<?= $formation->nbr_population ?>">
        </div>
        <div class="form-group">
            <label>Points</label>
            <input type="number" class="form-control" name="nbr_population_Points" readonly  id="population_point"value="<?= $formation->nbr_population_Points ?>">
        </div>
        <div class="form-group">
            <label>Nbre d'accouchement</label>
            <input type="number" class="form-control" name="nbr_accouchement" id="accouchement" oninput="updatePoints()"value="<?= $formation->nbr_accouchement ?>">
        </div>
        <div class="form-group">
            <label>Points</label>
            <input type="number" class="form-control" name="nbr_accouchement_Points" readonly id="accouchement_point"  value="<?= $formation->nbr_accouchement_Points ?>">
        </div>
        
        <div class="form-group">
            <label>Nombre totales des points</label>
            <input type="text" class="form-control" name="nbr_Points_Total" readonly  id="nbrtotal_point"  value="<?= $formation->nbr_Points_Total ?>">
        </div>
        <div class="form-group">
            <label>% de Crédit</label>
            <input type="number" class="form-control" name="Credit"  value="<?= $formation->Credit ?>">
        </div>
        <div class="form-group">
            <label>Budget </label>
            <input type="number" class="form-control" name="budget"  value="<?= $formation->budget ?>">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary my-2" value="Modifier" name="modifier">
            <a class="btn btn-warning" href="index.php?action=list">Annuler</a>
        </div>
    </form>
    <!-- <script src="script.js"></script> -->
    <script>
        function updatePoints() {
            var consultationValue = parseFloat(document.getElementById("consultation").value) || 0;
            var populationValue = parseFloat(document.getElementById("population").value) || 0;
            var accouchementValue = parseFloat(document.getElementById("accouchement").value) || 0;

            var consultationPoints = consultationValue / 1000;
            var populationPoints = populationValue / 1000;
            var accouchementPoints = accouchementValue / 100;

            document.getElementById("consultation_point").value = consultationPoints.toFixed(3);
            document.getElementById("population_point").value = populationPoints.toFixed(3);
            document.getElementById("accouchement_point").value = accouchementPoints.toFixed(3);

            var totalPoints = consultationPoints + populationPoints + accouchementPoints;
            document.getElementById("nbrtotal_point").value = totalPoints.toFixed(3);
        }
            
    </script>
<?php $content = ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>