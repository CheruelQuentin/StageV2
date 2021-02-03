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
    $lesActions["recup"] = "recupMdp.php";

    
    //Stage
    $lesActions["listeFormation"] = "listeFormation.php";
    $lesActions["listeStage"] = "listeStage.php";
    $lesActions["listeCreneau"] = "listeCreneau.php";
    $lesActions["listeCreneauPropo"] = "listeCreneauPropo.php";
    $lesActions["listeInscription"] = "listeInscrire.php";
    $lesActions["listeInscription2"] = "listeInscrire2.php";
    $lesActions["listeInscription3"] = "listeInscrire3.php";
    $lesActions["inscription"] = "addInscrire.php";


    //Ajouts
    $lesActions["addIns"] = "addInscrire.php";
    $lesActions["addIns2"] = "addInscrire2.php";
    $lesActions["addEle"] = "addEleve.php";
    $lesActions["addCre"] = "addCreneau.php";
    $lesActions["addEns"] = "addEnseignant.php";
    $lesActions["addPref"] = "addPreferer.php";
    $lesActions["addSta"] = "addStage.php";
    $lesActions["addEnsr"] = "addEnseigner.php";
    $lesActions["addEta"] = "addEtablissement.php";
    $lesActions["addForm"] = "addFormation.php";
    $lesActions["addTra"] = "addTravailler.php";
    $lesActions["addMat"] = "addMatiere.php";

    //Inserts
    $lesActions["insertIns"] = "insertInscrit.php";
    $lesActions["insertIns2"] = "insertInscrit2.php";
    $lesActions["insertEle"] = "insertEleve.php";
    $lesActions["insertCre"] = "insertCreneau.php";
    $lesActions["insertEns"] = "insertEnseignant.php";
    $lesActions["insertPref"] = "insertPreferer.php";
    $lesActions["insertSta"] = "insertStage.php";
    $lesActions["insertEnsr"] = "insertEnseigner.php";
    $lesActions["insertEta"] = "insertEtablissement.php";
    $lesActions["insertForm"] = "insertFormation.php";
    $lesActions["insertTra"] = "insertTravailler.php";
    $lesActions["insertMat"] = "insertMatiere.php";

    //Delete
    $lesActions["delIns"] = "delInscrire.php";
    $lesActions["delIns2"] = "delInscrire2.php";
    $lesActions["delEle"] = "delEleve.php";
    $lesActions["delEle2"] = "delEleve2.php";
    $lesActions["delCre"] = "delCreneau.php";
    $lesActions["delEns"] = "delEnseignant.php";
    $lesActions["delPref"] = "delPreferer.php";
    $lesActions["delSta"] = "delStage.php";
    $lesActions["delEnsr"] = "delEnseigner.php";
    $lesActions["delEta"] = "delEtablissement.php";
    $lesActions["delForm"] = "delFormation.php";
    $lesActions["delTra"] = "delTravailler.php";
    $lesActions["delMat"] = "delMatiere.php";

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
    $lesActions["modifIns"] = "modifInscrire.php";
    $lesActions["modifIns2"] = "modifInscrire2.php";
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
    $lesActions["modifMdpAdmin"] = "modifMdpAdmin.php";
    $lesActions["modifMdpEtablissement"] = "modifMdpEtablissement.php";
    $lesActions["modifMdpEnseignant"] = "modifMdpEnseignant.php";
    $lesActions["updateCreneauPro"] = "updateCreneauPro.php";

    //Update
    $lesActions["upIns"] = "updateInscrire.php";
    $lesActions["upIns2"] = "updateInscrire2.php";
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
    $lesActions["upMdp"] = "updateMotDePasse.php";
    $lesActions["upMdp2"] = "updateMotDePasseEnseignant.php";
    $lesActions["upMdp3"] = "updateMotDePasseAdmin.php";
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