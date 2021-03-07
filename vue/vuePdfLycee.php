<?php
    

// Instanciation de la classe dérivée
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,6,' ');

$pdf->SetFont('Arial','BU',10);
$pdf->MultiCell(0,9,utf8_decode('Article  1 :'));
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,9,utf8_decode('Entre
Monsieur DUVAL-ROCHER Sébastien, Proviseur du Lycée JEAN ROSTAND de Caen 
et
Mme ou Mr. '.$ETA_PROVNOM.' de l\'établissement '.$ETA_NOM.'.'));
$pdf->MultiCell(0,9,utf8_decode('La présente convention a pour objet la mise en oeuvre au bénéfice des élèves du lycée d\'un stage afin que les jeunes puissent recueillir des informations qui leur permettront d\'élaborer leur projet personnel d\'orientation.'));
$pdf->MultiCell(0,9,"");
$pdf->SetFont('Arial','BU',10);
$pdf->MultiCell(0,9,utf8_decode('Article  2 :'));
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,9,utf8_decode('Le stagiaire aura principalement pour activité de suivre une classe du domaine qu\'il aura choisi.Le programme précis du stage sera arrêté par le lycée Jean Rostand.'));
$pdf->MultiCell(0,9,"");
$pdf->SetFont('Arial','BU',10);
$pdf->MultiCell(0,9,utf8_decode('Article  3 :'));
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,9,utf8_decode('Le déroulement du stage sera suivi par les professeurs dans les conditions déterminées en accord entre le/a Proviseur(e) du lycée Jean Rostand et le (ou la) '.$CAT_POSTE.' de l\'établissement '.$ETA_NOM.''));
$pdf->MultiCell(0,9,"");
$pdf->SetFont('Arial','BU',10);
$pdf->MultiCell(0,9,utf8_decode('Article  4 :'));
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,9,utf8_decode('Durant le stage, l\'élève est soumis aux prescriptions contenues dans le règlement intérieur du lycée (présence, hygiène, sécurité, etc...). Ces différentes règles sont portées à la connaissance du stagiaire dès le début de sa période de stage. En cas de manquement à ces règles, le Proviseur se réserve le droit de mettre fin au présent stage sans préavis.'));
$pdf->MultiCell(0,9,"");
$pdf->SetFont('Arial','BU',10);
$pdf->MultiCell(0,9,utf8_decode('Article  5 :'));
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,9,utf8_decode('L\'élève accueilli observe les activités de la classe. En aucun cas il ne pourra participer aux activités professionnelles qui nécessiteraient, vu son statut et son âge, une demande de dérogation auprès de l\'inspection du travail.'));
$pdf->MultiCell(0,9,"");$pdf->MultiCell(0,9,"");
$pdf->SetFont('Arial','BU',10);
$pdf->MultiCell(0,9,utf8_decode('Article  6 :'));
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,9,utf8_decode('En cas d\'accident, la déclaration incombe à l\'établissement  qui a déclaré l\'élève au titre de l\'assurance '.$ETA_NOMSECU.'  n°'.$ETA_SECU.'.En cas de nécessité, la responsabilité civile de l\'élève pourra être recherchée.'));
$pdf->MultiCell(0,9,"");
$pdf->SetFont('Arial','BU',10);
$pdf->MultiCell(0,9,utf8_decode('Article  7 :'));
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,9,utf8_decode('Le lycée pourra accueillir l\'élève en demi-pension. Les frais seront facturés à l\'établissement par le lycée sur la base de '.$prix.' euros le repas.'));
$pdf->MultiCell(0,9,"");
$pdf->SetFont('Arial','BU',10);
$pdf->MultiCell(0,9,utf8_decode('Article  8 :'));
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,9,utf8_decode('À la fin du stage, le stagiaire devra remettre au Proviseur du lycée le questionnaire de satisfaction.'));
$pdf->MultiCell(0,9,"");
$pdf->SetFont('Arial','BU',10);
$pdf->MultiCell(0,9,utf8_decode('Article  9 :'));
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,9,utf8_decode("Les Proviseurs se tiendront mutuellement informés des difficultés qui pourraient survenir suite à l'application de cette présente convention, et prendront, d'un commun accord, les dispositions propres à les résoudre."));
$pdf->MultiCell(0,9,"");

$pdf->MultiCell(0,9,"");
$pdf->MultiCell(0,9,utf8_decode('Le (ou la) '.$CAT_POSTE.' de l\'établissement                   Le Proviseur du Lycee JEAN ROSTAND
                                                                                    P/O DDFPT (Directeur Délégué aux Formations
                                                                                    Professionnelles & Technologiques)  '.$nomDdfpt.' '.$prenomDdfpt.''));
$pdf->MultiCell(0,9,utf8_decode('A ..................,le .....................'));

$pdf->MultiCell(0,9,utf8_decode('Signature et cachet de l\'établissement :  '."                    ".'              Signature et cachet de l\'établissement : '));


$pdf->Cell(200,100,$pdf->Image('../image/signature.png',100,230,200,100));


$pdf->SetFont('Arial','BU',15);
$pdf->Cell(-210,9,utf8_decode('Confirmation d\'inscription'),1,1,'C');
$pdf->Cell(10);
$pdf->SetFont('Arial','I',8);
$pdf->MultiCell(0,9,utf8_decode('LISTE DES ELEVES DU LYCEE PARTICIPANT A UN MINI-STAGE AU LYCEE JEAN ROSTAND, 98 route d\'Ifs, 14000 CAEN'));
$pdf->SetFont('Arial','',5);
$pdf->MultiCell(0,9,utf8_decode('Les élèves se présenteront aux professeurs en charge de l\'activité 10 min avant le début de la séance au lieu indiqué :'));

$pdf->Table();
$pdf->viewTable();

$pdf->MultiCell(0,9,"");

$pdf->SetFont('Arial','',8);
$pdf->MultiCell(0,4,utf8_decode('Soit '.$Miam[0].' repas commandés qui seront ensuite facturés au lycée d\'origine.'));
$pdf->SetFont('Arial','BU',10);
$pdf->MultiCell(0,4,utf8_decode('Remarque :'));$pdf->SetFont('Arial','',8);
$pdf->MultiCell(0,4,utf8_decode('Pour les activités technologiques de Biotechnologies (BioTK), de Sciences et Laboratoire (SL), de Biologie Physiopathologie Humaine (BPH) et Biochimie-Biologie, prévoir une blouse (coton, fermée, manches longues).'));


$pdf->Output();
?>