<?php
$title = "La liste des Médicaments: ";

//   foreach ($medicaments as $med)
//      echo $title . $med->formation_sanitaire;

    // endforeach; 




ob_start();
?>    
        <a href="index.php?action=createMed" class="btn btn-primary mb-2"> <i class="fa-solid fa-plus"></i></a>
    
        <form action="index.php?action=storemed" method="post" class="row">
                <select class="custom-select mb-4" name="formation_sanitaire" id="formationSanitaire" require  onchange="filterTable(this.value)">
                    <option value="" selected >Tout les Formation</option>
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
        </form>
    <table class="table  table-hover" >
        <h4 id="selected-formation_sanitaire" ></h4>
        <thead>
        <tr>
            <th>formation Sanitaire</th>
            <th>Id</th>
            <th>Designation </th>
            <th>Conditionnement </th>
            <th>Quantite Livree</th>
            <th>Prix Estimati </th>
            <th>Montant</th>
            
            
        </tr>

        </thead>
        <tbody id="medicaments-table">

        <?php foreach ($medicaments as $med): ?>
            <tr>
                <td><?= $med->formation_sanitaire ?></td>
                <td><?= $med->id ?></td>
                <td><?= $med->ref_med ?></td>
                <td><?= $med->Conditionnement ?></td>
                <td><?= $med->Quantite_Livree ?></td>
                <td><?= $med->Prix_Estimati ?></td>
                <td><?= $med->montant ?></td>
                <td></td>
                <td>
                    <a href="index.php?action=editmed&id=<?php echo $med->id?>" class="btn btn-success btn-sm m-1 "><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="index.php?action=deletemed&id=<?php echo $med->id?>" class="btn btn-danger btn-sm m-1"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>

        
        
        </tbody>
    </table>
    <!-- <h3 id="no-results-message" style="display:none;">Aucun Résultat pour cette formation sanitaire</h3> -->
<?php $content = ob_get_clean(); ?>

<?php include_once 'views/layout.php'; ?>
