<?php

require_once 'configue.php';

function getMedicaments()
{
    $pdo = database_connection();
    return $pdo->query('SELECT * FROM medicament  ORDER BY id DESC')->fetchAll(PDO::FETCH_OBJ);
}
// function getMedicaments($formation_sanitaire)
// {
//     $pdo = database_connection();
//     $sqlState = $pdo->prepare('SELECT * FROM medicament WHERE formation_sanitaire = ? ORDER BY id DESC');
//     $sqlState->execute([$formation_sanitaire]);
//     return $sqlState->fetchAll(PDO::FETCH_OBJ);
// }

function createMedicaments()
{
    print_r($_POST);
    extract($_POST);
    $montant = $_POST['montant'];
    $pdo = database_connection();
    $sqlState = $pdo->prepare("INSERT INTO medicament VALUES(null,?,?,?,?,?,?)");
    return $sqlState->execute([$ref_med, 
                                $Conditionnement, 
                                $Prix_Estimati, 
                                $Quantite_Livree,
                                $montant,
                                $formation_sanitaire
                            ]);
}

function editmed($id, $ref_med, $Conditionnement, $Prix_Estimati,$Quantite_Livree, $montant)
{
    $pdo = database_connection();
    $sqlState = $pdo->prepare("UPDATE medicament
                                SET 
                                    ref_med = ? ,
                                    Conditionnement = ? , 
                                    Prix_Estimati = ? , 
                                    Quantite_Livree = ? , 
                                    montant = ?
                                WHERE   id = ?"
                                );
    return $sqlState->execute([$ref_med, $Conditionnement, $Prix_Estimati, $Quantite_Livree, $montant, $id]);

}

function viewMed($id)
{
    $pdo = database_connection();
    $sqlState = $pdo->prepare("SELECT * FROM medicament WHERE id = ?");
    $sqlState->execute([$id]);
    return $sqlState->fetch(PDO::FETCH_OBJ);

}

function destroymed($id)
{
    $pdo = database_connection();
    $sqlState = $pdo->prepare("DELETE FROM medicament WHERE id = ?");
    return $sqlState->execute([$id]);
}
?>