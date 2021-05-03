<?php

function controleurPrincipal($action){
    $lesActions = array();
    //Listes d'endroits
    $lesActions["listeEtablissement"] = "listeEtablissement.php";
    $lesActions["listeCollege"] = "listeCollege.php";
    $lesActions["listeLycee"] = "listeLycee.php";
    $lesActions["choixFormPdf"] = "choixFormPdf.php";
    $lesActions["choixFormPdf2"] = "choixFormPdf2.php";
    //Listes de personnes
    $lesActions["listeEnseigner"] = "listeEnseigner.php";
    $lesActions["listeEnseignant"] = "listeEnseignant.php";
    $lesActions["listeEleve"] = "listeEleve.php";
    $lesActions["listeEleve2"] = "listeEleve2.php";

    //Connexion
    $lesActions["defaut"] = "connexion.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["profil"] = "profil.php";
    $lesActions["recup"] = "forgot_password.php";

    
    //Stage
    $lesActions["listeAdmin"] = "listeAdmin.php";
    $lesActions["listeSAdmin"] = "listeSAdmin.php";
    $lesActions["listeFormation"] = "listeFormation.php";
    $lesActions["listeStage"] = "listeStage.php";
    $lesActions["listeCreneau"] = "listeCreneau.php";
    $lesActions["listeCreneauAdmin"] = "listeCreneauAdmin.php";
    $lesActions["listeCreneauPropo"] = "listeCreneauPropo.php";
    $lesActions["inscription"] = "addInscrire.php";
    $lesActions["ListeInscrit"] = "genListeInscrit.php";


    //Ajouts
    $lesActions["addEle"] = "addEleve.php";
    $lesActions["addCre"] = "addCreneau.php";
    $lesActions["addCreAdmin"] = "addCreneauAdmin.php";
    $lesActions["addEns"] = "addEnseignant.php";
    $lesActions["addPref"] = "addPreferer.php";
    $lesActions["addSta"] = "addStage.php";
    $lesActions["addEnsr"] = "addEnseigner.php";
    $lesActions["addEta"] = "addEtablissement.php";
    $lesActions["addForm"] = "addFormation.php";
    $lesActions["addTra"] = "addTravailler.php";
    $lesActions["addMat"] = "addMatiere.php";
    $lesActions["addAdmin"] = "addAdmin.php";
    $lesActions["genAddIns"] = "genAddInscrire.php";


    //Inserts
    $lesActions["insertEle"] = "insertEleve.php";
    $lesActions["insertCre"] = "insertCreneau.php";
    $lesActions["insertCreAdmin"] = "insertCreneauAdmin.php";
    $lesActions["insertEns"] = "insertEnseignant.php";
    $lesActions["insertPref"] = "insertPreferer.php";
    $lesActions["insertSta"] = "insertStage.php";
    $lesActions["insertEnsr"] = "insertEnseigner.php";
    $lesActions["insertEta"] = "insertEtablissement.php";
    $lesActions["insertForm"] = "insertFormation.php";
    $lesActions["insertTra"] = "insertTravailler.php";
    $lesActions["insertMat"] = "insertMatiere.php";
    $lesActions["insertAdmin"] = "insertAdmin.php";
    $lesActions["genInsertIns"] = "genInsertInscrit.php";
    //Delete
    
    $lesActions["delEle"] = "delEleve.php";
    $lesActions["delAdmin"] = "delAdmin.php";
    $lesActions["delEle2"] = "delEleve2.php";
    $lesActions["delCre"] = "delCreneau.php";
    $lesActions["delCreAdmin"] = "delCreAdmin.php";
    $lesActions["delEns"] = "delEnseignant.php";
    $lesActions["delPref"] = "delPreferer.php";
    $lesActions["delSta"] = "delStage.php";
    $lesActions["delEnsr"] = "delEnseigner.php";
    $lesActions["delEta"] = "delEtablissement.php";
    $lesActions["delForm"] = "delFormation.php";
    $lesActions["delTra"] = "delTravailler.php";
    $lesActions["delMat"] = "delMatiere.php";
    $lesActions["genDelIns"] = "genDelInscrire.php";

    //Suppression
    $lesActions["supIns"] = "supInscrire.php";
    $lesActions["supEle"] = "supEleve.php";
    $lesActions["supCre"] = "supCreneau.php";
    $lesActions["supEns"] = "supEnseignant.php";
    $lesActions["supPref"] = "supPreferer.php";
    $lesActions["supSta"] = "supStage.php";
    $lesActions["supEnsr"] = "supEnseigner.php";
    $lesActions["supEta"] = "supEtablissement.php";
    $lesActions["supForm"] = "supFormation.php";
    $lesActions["supTra"] = "supTravailler.php";
    $lesActions["supMat"] = "supMatiere.php";

    //Modif
    $lesActions["constante"] = "modifConstante.php";
    $lesActions["modifProfil"] = "modifProfil.php";
    $lesActions["modifProfilEns"] = "modifProfilEns.php";
    $lesActions["modifEle"] = "modifEleve.php";
    $lesActions["modifEle2"] = "modifEleve2.php";
    $lesActions["modifCre"] = "modifCreneau.php";
    $lesActions["modifEns"] = "modifEnseignant.php";
    $lesActions["modifPref"] = "modifPreferer.php";
    $lesActions["modifSta"] = "modifStage.php";
    $lesActions["modifEnsr"] = "modifEnseigner.php";
    $lesActions["modifEta"] = "modifEtablissement.php";
    $lesActions["modifForm"] = "modifFormation.php";
    $lesActions["modifTra"] = "modifTravailler.php";
    $lesActions["modifMat"] = "modifMatiere.php";
    $lesActions["updateCreneauPro"] = "updateCreneauPro.php";
    $lesActions["genModifIns"] = "genModifInscrire.php";
    $lesActions["genModifMDP"] = "genModifMDP.php";

    //Update
    $lesActions["upCon"] = "updateConstante.php";
    $lesActions["upPro"] = "updateProfil.php";
    $lesActions["upProfilEns"] = "updateProfilEns.php";
    $lesActions["upEle"] = "updateEleve.php";
    $lesActions["upEle2"] = "updateEleve2.php";
    $lesActions["upCre"] = "updateCreneau.php";
    $lesActions["upEns"] = "updateEnseignant.php";
    $lesActions["upPref"] = "updatePreferer.php";
    $lesActions["upSta"] = "updateStage.php";
    $lesActions["upEnsr"] = "updateEnseigner.php";
    $lesActions["upEta"] = "updateEtablissement.php";
    $lesActions["upForm"] = "updateFormation.php";
    $lesActions["upTra"] = "updateTravailler.php";
    $lesActions["upMat"] = "updateMatiere.php";
    $lesActions["genUpIns"] = "genUpdateInscrire.php";
    $lesActions["genUpMDP"] = "genUpdateMDP.php";
    //Autre
    $lesActions["listeMatiere"] = "listeMatiere.php";
    $lesActions["prefCreneau"] = "listePreferer.php";
    $lesActions["pdf"] = "testpdf.php";


    if (array_key_exists ( $action , $lesActions )){
        return $lesActions[$action];
    } 
    else{
        return $lesActions["defaut"];
    }

}

?>