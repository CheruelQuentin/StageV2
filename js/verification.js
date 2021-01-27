function verifnomEtab(){	
	var nomEtab = document.getElementById("ETA_NOM");
	var erreurnomEtab = document.getElementById("erreurnomEtab");

if(ETA_NOM.value.length > 150 || ETA_NOM.value.length < 3) {
ETA_NOM.style.borderColor="red";
erreurnomEtab.innerHTML = "Il doit y avoir entre 3 et 150 caractères !";
} else {
erreurnomEtab.innerHTML = "";
ETA_NOM.style.borderColor="blue";
}
}


function verifmodifnomEtab(){	
	var nomEtab = document.getElementById("ETA_NOM");
	var erreurmodifnomEtab = document.getElementById("erreurmodifnomEtab");

if(ETA_NOM.value.length > 150 || ETA_NOM.value.length < 3) {
ETA_NOM.style.borderColor="red";
erreurmodifnomEtab.innerHTML = "Il doit y avoir entre 3 et 150 caractères !";
} else {
erreurmodifnomEtab.innerHTML = "";
ETA_NOM.style.borderColor="blue";
}
}


function verifville(){
	var ville = document.getElementById("ETA_VILLE");
	var erreurville = document.getElementById("erreurville");
if(ETA_VILLE.value.length > 150 || ETA_VILLE.value.length < 3) {
ETA_VILLE.style.borderColor="red";
erreurville.innerHTML = "Il doit y avoir entre 3 et 150 caractères !";
} else {
erreurville.innerHTML = "";
ETA_VILLE.style.borderColor="blue";
}
}


function verifmodifville(){
	var ville = document.getElementById("ETA_VILLE");
	var erreurmodifville = document.getElementById("erreurmodifville");
if(ETA_VILLE.value.length > 150 || ETA_VILLE.value.length < 3) {
ETA_VILLE.style.borderColor="red";
erreurmodifville.innerHTML = "Il doit y avoir entre 3 et 150 caractères !";
} else {
erreurmodifville.innerHTML = "";
ETA_VILLE.style.borderColor="blue";
}
}


function verifadresse(){
	var adresse = document.getElementById("ETA_ADRESSE");
	var erreuradresse = document.getElementById("erreuradresse");
if(ETA_ADRESSE.value.length > 150 || ETA_ADRESSE.value.length < 3) {
ETA_ADRESSE.style.borderColor="red";
erreuradresse.innerHTML = "Il doit y avoir entre 3 et 150 caractères !";
} else {
erreuradresse.innerHTML = "";
ETA_ADRESSE.style.borderColor="blue";
}
}


function verifmodifadresse(){
	var adresse = document.getElementById("ETA_ADRESSE");
	var erreurmodifadresse = document.getElementById("erreurmodifadresse");
if(ETA_ADRESSE.value.length > 150 || ETA_ADRESSE.value.length < 3) {
ETA_ADRESSE.style.borderColor="red";
erreurmodifadresse.innerHTML = "Il doit y avoir entre 3 et 150 caractères !";
} else {
erreurmodifadresse.innerHTML = "";
ETA_ADRESSE.style.borderColor="blue";
}
}


function verifcp(){
	var CP = document.getElementById("ETA_CP");
	var erreurcp = document.getElementById("erreurcp");
if(ETA_CP.value.length > 5 || ETA_CP.value.length < 1) {
ETA_CP.style.borderColor="red";
erreurcp.innerHTML = "Il faut remplir le champ !";
} else {
erreurcp.innerHTML = "";
ETA_CP.style.borderColor="blue";
}
}


function verifmodifcp(){
	var CP = document.getElementById("ETA_CP");
	var erreurmodifcp = document.getElementById("erreurmodifcp");
if(ETA_CP.value.length > 5 || ETA_CP.value.length < 1) {
ETA_CP.style.borderColor="red";
erreurmodifcp.innerHTML = "Il faut remplir le champ !";
} else {
erreurmodifcp.innerHTML = "";
ETA_CP.style.borderColor="blue";
}
}


function verifmail(){
	// var mail = document.getElementById('mail').value;
	// alert (mail);
	var mail = document.getElementById("ETA_MAIL");
	var erreurmail = document.getElementById("erreurmail");
if(ETA_MAIL.value.length > 150 || ETA_MAIL.value.length < 3) {
ETA_MAIL.style.borderColor="red";
erreurmail.innerHTML = "Il faut remplir le champ !";
} else {
erreurmail.innerHTML = "";
ETA_MAIL.style.borderColor="blue";
}
}


function verifmodifmail(){
	// var mail = document.getElementById('mail').value;
	// alert (mail);
	var mail = document.getElementById("ETA_MAIL");
	var erreurmodifmail = document.getElementById("erreurmodifmail");
if(ETA_MAIL.value.length > 150 || ETA_MAIL.value.length < 3) {
ETA_MAIL.style.borderColor="red";
erreurmodifmail.innerHTML = "Il faut remplir le champ !";
} else {
erreurmodifmail.innerHTML = "";
ETA_MAIL.style.borderColor="blue";
}
}


function verifnomProv(){	
	var ETA_PROVNOM = document.getElementById("ETA_PROVNOM");
	var erreurprovnom = document.getElementById("erreurprovnom");

if(ETA_PROVNOM.value.length > 150 || ETA_PROVNOM.value.length < 3) {
ETA_PROVNOM.style.borderColor="red";
erreurprovnom.innerHTML = "Il doit y avoir entre 3 et 150 caractères !";
} else {
erreurprovnom.innerHTML = "";
ETA_PROVNOM.style.borderColor="blue";
}
}


function verifmodifProvnom(){	
	var ETA_PROVNOM = document.getElementById("ETA_PROVNOM");
	var erreurmodifprovnom = document.getElementById("erreurmodifprovnom");

if(ETA_PROVNOM.value.length > 150 || ETA_PROVNOM.value.length < 3) {
ETA_PROVNOM.style.borderColor="red";
erreurmodifprovnom.innerHTML = "Il doit y avoir entre 3 et 150 caractères !";
} else {
erreurmodifprovnom.innerHTML = "";
ETA_PROVNOM.style.borderColor="blue";
}
}


function verifmodifProvprenom(){	
	var ETA_PROVPRENOM = document.getElementById("ETA_PROVPRENOM");
	var erreurmodifprovprenom = document.getElementById("erreurmodifprovprenom");

if(ETA_PROVPRENOM.value.length > 150 || ETA_PROVPRENOM.value.length < 3) {
ETA_PROVPRENOM.style.borderColor="red";
erreurmodifprovprenom.innerHTML = "Il doit y avoir entre 3 et 150 caractères !";
} else {
erreurmodifprovprenom.innerHTML = "";
ETA_PROVPRENOM.style.borderColor="blue";
}
}


function verifprenomProv(){	
	var ETA_PROVPRENOM = document.getElementById("ETA_PROVPRENOM");
	var erreurprovprenom = document.getElementById("erreurprovprenom");

if(ETA_PROVPRENOM.value.length > 150 || ETA_PROVPRENOM.value.length < 3) {
ETA_PROVPRENOM.style.borderColor="red";
erreurprovprenom.innerHTML = "Il doit y avoir entre 3 et 150 caractères !";
} else {
erreurprovprenom.innerHTML = "";
ETA_PROVPRENOM.style.borderColor="blue";
}
}


function veriftel(){
	// var tel = document.getElementById('tel').value;
	// alert (tel);
	var ETA_TEL = document.getElementById("ETA_TEL");
	var erreurtel = document.getElementById("erreurtel");
if(ETA_TEL.value.length > 12 || ETA_TEL.value.length < 10) {
ETA_TEL.style.borderColor="red";
erreurtel.innerHTML = "Il faut remplir le champ avec un minimum 10 caratères !";
} else {
erreurtel.innerHTML = "";
ETA_TEL.style.borderColor="blue";
}
}


function verifmodiftel(){
	// var tel = document.getElementById('tel').value;
	// alert (tel);
	var ETA_TEL = document.getElementById("ETA_TEL");
	var erreurmodiftel = document.getElementById("erreurmodiftel");
if(ETA_TEL.value.length > 14 || ETA_TEL.value.length < 10) {
ETA_TEL.style.borderColor="red";
erreurmodiftel.innerHTML = "Il faut remplir le champ avec un maximum 14 caratères !";
} else {
erreurmodiftel.innerHTML = "";
ETA_TEL.style.borderColor="blue";
}
}





function verifSalle(){	
	var CRE_SALLE = document.getElementById("CRE_SALLE");
	var erreursalle = document.getElementById("erreursalle");

if(CRE_SALLE.value.length > 5|| CRE_SALLE.value.length < 1) {
CRE_SALLE.style.borderColor="red";
erreursalle.innerHTML = "Il doit y avoir entre 1 et 5 caractères !";
} else {
erreursalle.innerHTML = "";
CRE_SALLE.style.borderColor="blue";
}
}


function verifnomEle(){	
	var ELE_NOM = document.getElementById("ELE_NOM");
	var erreurnomEle = document.getElementById("erreurnomEle");

if(ELE_NOM.value.length > 100 || ELE_NOM.value.length < 3) {
ELE_NOM.style.borderColor="red";
erreurnomEle.innerHTML = "Il doit y avoir entre 3 et 100 caractères !";
} else {
erreurnomEle.innerHTML = "";
ELE_NOM.style.borderColor="blue";
}
}


function verifmodifnomEle(){	
	var ELE_NOM = document.getElementById("ELE_NOM");
	var erreurmodifnomEle = document.getElementById("erreurmodifnomEle");

if(ELE_NOM.value.length > 100 || ELE_NOM.value.length < 3) {
ELE_NOM.style.borderColor="red";
erreurmodifnomEle.innerHTML = "Il doit y avoir entre 3 et 100 caractères !";
} else {
erreurmodifnomEle.innerHTML = "";
ELE_NOM.style.borderColor="blue";
}
}


function verifprenomEle(){	
	var ELE_PRENOM = document.getElementById("ELE_PRENOM");
	var erreurprenomEle = document.getElementById("erreurprenomEle");

if(ELE_PRENOM.value.length > 100 || ELE_PRENOM.value.length < 3) {
ELE_PRENOM.style.borderColor="red";
erreurprenomEle.innerHTML = "Il doit y avoir entre 3 et 100 caractères !";
} else {
erreurprenomEle.innerHTML = "";
ELE_PRENOM.style.borderColor="blue";
}
}


function verifmodifprenomEle(){	
	var ELE_PRENOM = document.getElementById("ELE_PRENOM");
	var erreurmodifprenomEle = document.getElementById("erreurmodifprenomEle");

if(ELE_PRENOM.value.length > 100 || ELE_PRENOM.value.length < 3) {
ELE_PRENOM.style.borderColor="red";
erreurmodifprenomEle.innerHTML = "Il doit y avoir entre 3 et 100 caractères !";
} else {
erreurmodifprenomEle.innerHTML = "";
ELE_PRENOM.style.borderColor="blue";
}
}


function verifclasse(){	
	var ELE_CLASSE = document.getElementById("ELE_CLASSE");
	var erreurclasse = document.getElementById("erreurclasse");

if(ELE_CLASSE.value.length > 10 || ELE_CLASSE.value.length < 1) {
ELE_CLASSE.style.borderColor="red";
erreurclasse.innerHTML = "Il doit y avoir entre 1 et 10 caractères !";
} else {
erreurclasse.innerHTML = "";
ELE_CLASSE.style.borderColor="blue";
}
}


function verifmodifclasse(){	
	var ELE_CLASSE = document.getElementById("ELE_CLASSE");
	var erreurmodifclasse = document.getElementById("erreurmodifclasse");

if(ELE_CLASSE.value.length > 10 || ELE_CLASSE.value.length < 1) {
ELE_CLASSE.style.borderColor="red";
erreurmodifclasse.innerHTML = "Il doit y avoir entre 1 et 10 caractères !";
} else {
erreurmodifclasse.innerHTML = "";
ELE_CLASSE.style.borderColor="blue";
}
}


function verifnomEns(){	
	var ENS_NOM = document.getElementById("ENS_NOM");
	var erreurnomEns = document.getElementById("erreurnomEns");

if(ENS_NOM.value.length > 150 || ENS_NOM.value.length < 3) {
ENS_NOM.style.borderColor="red";
erreurnomEns.innerHTML = "Il doit y avoir entre 3 et 150 caractères !";
} else {
erreurnomEns.innerHTML = "";
ENS_NOM.style.borderColor="blue";
}
}


function verifmodifnomEns(){	
	var ENS_NOM = document.getElementById("ENS_NOM");
	var erreurmodifnomEns = document.getElementById("erreurmodifnomEns");

if(ENS_NOM.value.length > 150 || ENS_NOM.value.length < 3) {
ENS_NOM.style.borderColor="red";
erreurmodifnomEns.innerHTML = "Il doit y avoir entre 3 et 150 caractères !";
} else {
erreurmodifnomEns.innerHTML = "";
ENS_NOM.style.borderColor="blue";
}
}


function verifprenomEns(){	
	var ENS_PRENOM = document.getElementById("ENS_PRENOM");
	var erreurprenomEns = document.getElementById("erreurprenomEns");

if(ENS_PRENOM.value.length > 150 || ENS_PRENOM.value.length < 3) {
ENS_PRENOM.style.borderColor="red";
erreurprenomEns.innerHTML = "Il doit y avoir entre 3 et 150 caractères !";
} else {
erreurprenomEns.innerHTML = "";
ENS_PRENOM.style.borderColor="blue";
}
}


function verifmodifprenomEns(){	
	var ENS_PRENOM = document.getElementById("ENS_PRENOM");
	var erreurmodifprenomEns = document.getElementById("erreurmodifprenomEns");

if(ENS_PRENOM.value.length > 150 || ENS_PRENOM.value.length < 3) {
ENS_PRENOM.style.borderColor="red";
erreurmodifprenomEns.innerHTML = "Il doit y avoir entre 3 et 150 caractères !";
} else {
erreurmodifprenomEns.innerHTML = "";
ENS_PRENOM.style.borderColor="blue";
}
}


function veriftelEns(){

	var ENS_TEL = document.getElementById("ENS_TEL");
	var erreurtelens = document.getElementById("erreurtelens");
if(ENS_TEL.value.length > 12 || ENS_TEL.value.length < 10) {
ENS_TEL.style.borderColor="red";
erreurtelens.innerHTML = "Il faut remplir le champ avec un minimum 10 caratères !";
} else {
erreurtelens.innerHTML = "";
ENS_TEL.style.borderColor="blue";
}
}


function verifmodiftelEns(){

	var ENS_TEL = document.getElementById("ENS_TEL");
	var erreurmodiftelens = document.getElementById("erreurmodiftelens");
if(ENS_TEL.value.length > 12 || ENS_TEL.value.length < 10) {
ENS_TEL.style.borderColor="red";
erreurmodiftelens.innerHTML = "Il faut remplir le champ avec un minimum 10 caratères !";
} else {
erreurmodiftelens.innerHTML = "";
ENS_TEL.style.borderColor="blue";
}
}


function verifmailEns(){	
	var ENS_MAIL = document.getElementById("ENS_MAIL");
	var erreurmailEns = document.getElementById("erreurmailEns");

if(ENS_MAIL.value.length > 150 || ENS_MAIL.value.length < 3) {
ENS_MAIL.style.borderColor="red";
erreurmailEns.innerHTML = "Il doit y avoir entre 3 et 150 caractères !";
} else {
erreurmailEns.innerHTML = "";
ENS_MAIL.style.borderColor="blue";
}
}


function verifmodifmailEns(){	
	var ENS_MAIL = document.getElementById("ENS_MAIL");
	var erreurmodifmailEns = document.getElementById("erreurmodifmailEns");

if(ENS_MAIL.value.length > 150 || ENS_MAIL.value.length < 3) {
ENS_MAIL.style.borderColor="red";
erreurmodifmailEns.innerHTML = "Il doit y avoir entre 3 et 150 caractères !";
} else {
erreurmodifmailEns.innerHTML = "";
ENS_MAIL.style.borderColor="blue";
}
}


function veriflibelle(){	
	var MAT_LIBELLE = document.getElementById("MAT_LIBELLE");
	var erreurlibelle = document.getElementById("erreurlibelle");

if(MAT_LIBELLE.value.length > 150 || MAT_LIBELLE.value.length < 3) {
MAT_LIBELLE.style.borderColor="red";
erreurlibelle.innerHTML = "Il doit y avoir entre 3 et 150 caractères !";
} else {
erreurlibelle.innerHTML = "";
MAT_LIBELLE.style.borderColor="blue";
}
}


function verifmodiflibelle(){	
	var MAT_LIBELLE = document.getElementById("MAT_LIBELLE");
	var erreurmodiflibelle = document.getElementById("erreurmodiflibelle");

if(MAT_LIBELLE.value.length > 150 || MAT_LIBELLE.value.length < 3) {
MAT_LIBELLE.style.borderColor="red";
erreurmodiflibelle.innerHTML = "Il doit y avoir entre 3 et 150 caractères !";
} else {
erreurmodiflibelle.innerHTML = "";
MAT_LIBELLE.style.borderColor="blue";
}
}


function veriflibellestage(){	
	var FORM_LIBELLE = document.getElementById("FORM_LIBELLE");
	var erreurlibellestage = document.getElementById("erreurlibellestage");

if(FORM_LIBELLE.value.length > 128 || FORM_LIBELLE.value.length < 3) {
FORM_LIBELLE.style.borderColor="red";
erreurlibellestage.innerHTML = "Il doit y avoir entre 3 et 128 caractères !";
} else {
erreurlibellestage.innerHTML = "";
FORM_LIBELLE.style.borderColor="blue";
}
}


function verifmodiflibellestage(){	
	var FORM_LIBELLE = document.getElementById("FORM_LIBELLE");
	var erreurmodiflibellestage = document.getElementById("erreurmodiflibellestage");

if(FORM_LIBELLE.value.length > 128 || FORM_LIBELLE.value.length < 3) {
FORM_LIBELLE.style.borderColor="red";
erreurmodiflibellestage.innerHTML = "Il doit y avoir entre 3 et 128 caractères !";
} else {
erreurmodiflibellestage.innerHTML = "";
FORM_LIBELLE.style.borderColor="blue";
}
}


function verifModifSalle(){	
	var CRE_SALLE = document.getElementById("CRE_SALLE");
	var erreurmodifsalle = document.getElementById("erreurmodifsalle");

if(CRE_SALLE.value.length > 5|| CRE_SALLE.value.length < 1) {
CRE_SALLE.style.borderColor="red";
erreurmodifsalle.innerHTML = "Il doit y avoir entre 1 et 5 caractères !";
} else {
erreurmodifsalle.innerHTML = "";
CRE_SALLE.style.borderColor="blue";
}
}




