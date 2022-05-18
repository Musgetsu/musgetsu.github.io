<?php
require("layout.php");
$layout = new LayoutClass;
$layout->startNewRow();
    $layout->startNewCol("sm-11",";padding-left:0px;padding-right:0px;border-style: hidden solid hidden solid;","mainContent");
    $layout->write("Nom : Martin</a><a style='float:right'>Age : 23 ans</a>","position:relative;float:left;",true);
        $layout->write("Français</a><a style='float:left'> Prénom : Rohan</a>","position:relative;float:right;",true);
        $layout->write("Permis B + Véhicule personnel<br>","float:right;text-align:center;",true);
        $layout->startNewCol("sm-5","float:left;position:right;border-style:hidden;margin-right:25px;margin-left:10px;","contact");
        $layout->writeh1("Contact","margin-bottom:0px;text-align:center;",false);
        $layout->write('tel : 07-82-35-85-65','margin-bottom:0px;font-size:125%');
        $layout->write('Adresse : 1 chemin du croquet ,76490</a><br><a>Saint-Arnoult, France</a>','margin-bottom:0px;font-size:125%');
        $layout->write('Email : rohan.martin76@gmail.com</a><br>','font-size:125%; margin:auto;');
        //$layout->write('<p style="margin-bottom:0px;"><a style="margin-bottom:0px;font-size: 125%">Email : </a><br><a>rohan.martin76@gmail.com </a></p>');//<br><button type="button" class="btn btn-primary">Contact</button></a></p>');
    $layout->endAnyDiv(); //endof col-sm-2
        //$layout->addImg("././image/photo.png" , "photoID" , "float:left;margin-right:10px;width:175px;height:250px;border-style:hidden;box-shadow: 5px 5px 5px black;border-radius:10px;");
        //$layout->write("<br>Objectif","text-decoration: underline;font-size:150%;margin-left:20px;");
        //$layout->write("Diplômé d'un BTS système numérique option informatique et réseaux je suis à la recherche d'expériences réelles dans l'informatique.","");
        //$layout->write("Durant ma formation je me suis familliarisé avec plusieurs langages tels que le C, C++, javaScript et le php.
//<br>Ma passion pour l'informatique m'a permis de multiples expériences telles que la réparation de postes informatiques ou de smartphones.<br>","");

$layout->endAnyDiv(); //end of 
$layout->endAnyDiv(); //end of row
$layout->startNewRow();
    $layout->startNewCol("sm-11","text-align:center;border-style:none solid none solid;","mainContentbottom");
    $layout->write("Technicien de maintenance informatique et bureautique","font-size:150%;line-height: 4;");
$layout->endAnyDiv(); //end of div mainContentleft
$layout->endAnyDiv(); //end of col-
$layout->startNewRow();
    $layout->startNewCol("sm-11","text-align:center;border-style:solid solid none solid;","mainContentbottom");
        $layout->write("Comptétences","font-size:150%");
    $layout->endAnyDiv();
$layout->endAnyDiv();
$layout->startNewRow();
    $layout->startNewCol("sm-5","text-align:left;border-left-style:solid;","mainContentleft");
        $layout->write("  · Micro-informatique<br>  · Informatique<br>  · Langages de programmation informatique</a>","line-height: 2.5;");
    $layout->endAnyDiv();
    $layout->startNewCol("sm-6","text-align:left;border-right-style:solid;","mainContentright");
    $layout->write("· Procédures de déploiement d'installation<br>· Procédures d'entretien de matériel informatique<br>· Électronique & électricité</a>","line-height: 2.5;");
    $layout->endAnyDiv();

$layout->endAnyDiv();
$layout->startNewRow();
    $layout->startNewCol("sm-11","text-align:center;border-style:solid solid none solid;","mainContentbottom");
        $layout->write("Expériences Professionelles","font-size:150%;line-height:3;");
    $layout->endAnyDiv();
$layout->endAnyDiv();
$layout->startNewRow();
    $layout->startNewCol("sm-3","text-align:center;border-left-style:solid;","mainContentleft");
    $layout->write('<a style="font-size:200%;">2018</a><br><a>Stage en électricité générale à Havre Elec Services</a><br><a>Durée : 6 semaines</a>');
    $layout->endAnyDiv();
    $layout->startNewCol("sm-5","text-align:center","mainContentbottom");
        $layout->write("<a style='font-size:200%;'>2017</a><br><a>Stage administration réseaux <br>à Mairie de La Frenaye</a><br><a>Durée : 4 semaines</a><br>");
    $layout->endAnyDiv();
    $layout->startNewCol("sm-3","text-align:center;border-right-style:solid;","mainContentright");
        $layout->write('<a style="font-size:200%;">2015 - 2016</a><br><a>Stage électricité générale <br>à Havre Elec Services</a><br><a>Durée : 18 semaines</a>');
    $layout->endAnyDiv();
$layout->endAnyDiv();
$layout->startNewRow();
    $layout->startNewCol("sm-11","text-align:center;border-style:solid solid none solid;","mainContentbottom");
    $layout->write("Formations","font-size:150%");
$layout->endAnyDiv(); //end of div mainContentleft
$layout->endAnyDiv(); //end of col-
$layout->startNewRow();
    $layout->startNewCol("sm-3","text-align:center;border-left-style:solid;","mainContentleft");
    $layout->write('2018 - 2019</a><br><a>BTS Système numérique Option A informatique et réseaux</a>','font-size:200%;',false);
    $layout->endAnyDiv();
    $layout->startNewCol("sm-5","text-align:center","mainContentbottom");
    $layout->write('2017</a><br><a>Bac Pro Electrotechnique Energie Equipements Communicants</a>','font-size:200%;',false);
    $layout->endAnyDiv();
    $layout->startNewCol("sm-3","text-align:center;border-right-style:solid;","mainContentright");
    $layout->write('2015 - 2016</a><br><a>BEP Electrotechnique Energie Equipements Communicants','font-size:200%;',false);
    $layout->endAnyDiv();
$layout->endAnyDiv();
$layout->endAnyDiv(); //end of row
$layout->startNewRow();
    $layout->startNewCol("sm-11","text-align:center;border-style:solid solid none solid;","mainContentbottom");
        $layout->write("Centre d'intérets","font-size:150%");
        $layout->endAnyDiv();
$layout->endAnyDiv();
$layout->startNewRow("margin-bottom:0px;");
$layout->startNewCol("sm-3","text-align:center;border-bottom-style:solid;border-bottom-left-radius:10px;border-left-style:solid;","mainContentleft");
    $layout->write('<a style="font-size:150%;">Logiciel de developpement</a><br>');
    $layout->addImg("././image/WampServer-logo.png","WampServer","width:32x;height:32px");
    $layout->addImg("././image/phpmyadmin-logo.png","PhpMyAdmin","width:64px;height:32px");
    $layout->addImg("././image/qt-logo.png","Qt studio","width:32px;height:32px");
    $layout->addImg("././image/visualstudio-logo.png","Visual studio code","width:64px;height:32px");
    $layout->addImg("././image/Radiant.jpg","Visual studio code","border-style:hidden;border-radius:25px;width:32x;height:32px");
$layout->endAnyDiv();
    $layout->startNewCol("sm-5","text-align:center;border-bottom-style:solid;","mainContentbottom");
        $layout->write('<a style="font-size:200%;">Mécanique automobile</a>');
        $layout->addImg("././image/vw.png","Volkswagen","border-style:hidden;border-radius:25px;width:64x;height:64px");
    $layout->endAnyDiv();
    $layout->startNewCol("sm-3","text-align:center;border-bottom-right-radius:10px;border-bottom-style:solid;border-right-style:solid;","mainContentright");
        $layout->write('<a style="font-size:200%;">Jeux vidéo</a>');
        $layout->addImg("././image/play-store.jpg","playStore","border-style:hidden;border-radius:25px;width:64x;height:64px");
        $layout->addImg("././image/steam.webp","Steam","border-style:hidden;border-radius:10px;width:64x;height:64px");
    $layout->endAnyDiv();
$layout->endAnyDiv();
/*$layout->startNewRow();
    $layout->startNewDiv("footer"); // EN ATTENTE.
        $layout->write("");
    $layout->endAnyDiv();
$layout->endAnyDiv();*/

    $layout->displayLayout();
?>
