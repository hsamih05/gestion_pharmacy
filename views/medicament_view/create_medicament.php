<?php
$title = "Saisir un nouveau Médicament";
ob_start();
?>
    <form action="index.php?action=storemed" method="post" class="row">
        <!-- <select name="" id=""></select> -->
        <div class="form-group  ">
            <label for="formationSanitaire">Sélectionnez une formation sanitaire</label>

            <select class="custom-select" name="formation_sanitaire" id="formationSanitaire" require>
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
        <div class="form-group  ">
            <label>Reference</label>
            <input type="text" class="form-control" name="ref_med" id="consultation" >
            <!-- <button class="btn btn-success my-2">selectionner les references:</button> -->
        </div>
        <div class="form-group col">
            <label>Conditionnement</label>
            <input type="text" class="form-control" name="Conditionnement" >
        </div>
        <div class="form-group col ">
            <label>Prix Estimati</label>
            <input 
        
        
            type="number" class="form-control" name="Prix_Estimati" id="Prix_Estimati" oninput="calculeMontant()"  min="1">
        </div>
        <script>
              

        </script>
        <div class="form-group  ">
            <label>Quantité Livree</label>
            <input
            type="number" class="form-control" name="Quantite_Livree" id="Quantite_Livree" oninput="calculeMontant()"  min="1">
        </div>
        <div class="form-group ">
            <label>Montant</label>
            <input type="number" class="form-control" name="montant" id="montant" readonly>
        </div>
         
        <div class="form-group ">
            <input type="submit" class="btn btn-success my-2" value="Ajouter" name="ajouter">
            <a class="btn btn-warning" href="index.php?action=listmed">Annuler</a>
        </div>
    </form>

    <!-- <script src="script.js"></script> -->
    <script>
        function calculeMontant() {
            var Prix_Estimati = parseFloat(document.getElementById("Prix_Estimati").value) || 0;
            var Quantite_Livree = parseFloat(document.getElementById("Quantite_Livree").value) || 0;

            var montant_total = Prix_Estimati * Quantite_Livree ;
            document.getElementById("montant").value = montant_total.toFixed(3);
        }

        
    </script>
<?php $content = ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>