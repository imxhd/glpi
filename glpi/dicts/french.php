<?php
/*
 
  ----------------------------------------------------------------------
GLPI - Gestionnaire libre de parc informatique
 Copyright (C) 2002 by the INDEPNET Development Team.
 Bazile Lebeau, baaz@indepnet.net - Jean-Mathieu Dol�ans, jmd@indepnet.net
 http://indepnet.net/   http://glpi.indepnet.org
 ----------------------------------------------------------------------
 Based on:
IRMA, Information Resource-Management and Administration
Christian Bauer, turin@incubus.de 

 ----------------------------------------------------------------------
 LICENSE

 This program is free software; you can redistribute it and/or
 modify it under the terms of the GNU General Public License (GPL)
 as published by the Free Software Foundation; either version 2
 of the License, or (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 To read the license please visit http://www.gnu.org/copyleft/gpl.html
 ----------------------------------------------------------------------
 Original Author of file:
 Purpose of file:
 ----------------------------------------------------------------------
*/



// French test Dictionary 
//Login

$lang["login"][0] = "Login impossible, v&eacute;rifiez que votre navigateur accepte les cookies.";
$lang["login"][1] = "Se reloguer";
$lang["login"][2] = "Votre mot de passe n'est plus valide... Si vous venez de le changer reloguez vous avec le nouveau";
$lang["login"][3] = "Non loggu&eacute;";
$lang["login"][4] = "Mauvais mot de passe";
$lang["login"][5] = "Acc&eacute;s refus&eacute;";



// Global
$lang["buttons"][0]	= "Rechercher";
$lang["buttons"][1]	= "Liste";
$lang["buttons"][2]	= "Valider";
$lang["buttons"][3]	= "Attribuer";
$lang["buttons"][4]	= "Installer";
$lang["buttons"][5]	= "D&eacute;sinstaller";
$lang["buttons"][6]	= "supprimer";
$lang["buttons"][7]	= "Actualiser";
$lang["buttons"][8]	= "Ajouter";
$lang["buttons"][9]	= "Connecter";
$lang["buttons"][10]	= "D&eacute;connecter";
$lang["buttons"][11]	= "Suivant";
$lang["buttons"][12]	= "Pr&eacute;c&eacute;dent";
$lang["buttons"][13]	= "Retour";
$lang["buttons"][14]	= "Modifier";
$lang["buttons"][15]    = "Calendrier";
$lang["buttons"][16] ="Raz";
$lang["buttons"][17] ="Supprimer";
$lang["buttons"][18] ="Tout cocher";
$lang["buttons"][19] ="Tout d�cocher";

$lang["choice"][0]	= "Oui";
$lang["choice"][1]	= "Non";

$lang["search"][0]	= "Rechercher par";
$lang["search"][1]	= "O&ugrave; ce champ";
$lang["search"][2]	= "contient";
$lang["search"][3]	= "phrase exacte";
$lang["search"][4]	= "tri&eacute; par";
$lang["search"][5]	= "Voir par lieu";
$lang["search"][6]	= "tri&eacute; par";
$lang["search"][7]	= "Tous";
$lang["search"][8]	= "Date d�but";
$lang["search"][9]	= "Date  fin";


// Central
$lang["central"][0] 	= "Bienvenue ";
$lang["central"][1] 	= "vous &ecirc;tes sur la console centrale.";
$lang["central"][2] 	= "derniers";
$lang["central"][3] 	= "Ev&eacute;nements";
$lang["central"][4] 	= "Pas d'&eacute;v&eacute;nement";
$lang["central"][5]	= "Accueil";
$lang["central"][6]	= "D&eacute;connexion";

//event
$lang["event"][0]	= "Item (ID)";
$lang["event"][1]	= "Date";
$lang["event"][2]	= "Service";
$lang["event"][3]	= "Niveau";
$lang["event"][4]	= "Message";

// Pager
$lang["pager"][1]	= "�";
$lang["pager"][2]	= "de";
$lang["pager"][3]	= "sur";

// Direct Connections
$lang["connect"][0]	= "Connections directes";
$lang["connect"][1]	= "non connect&eacute;";
$lang["connect"][2]	= "Connecter";
$lang["connect"][3]	= "D&eacute;connecter";
$lang["connect"][4]	= "Faire une connection directe";
$lang["connect"][5]	= "Sur un ordinateur qui";
$lang["connect"][6]	= "Nom";
$lang["connect"][7]	= "ID";
$lang["connect"][8] 	= "contient"; 
$lang["connect"][9] 	= "Choisissez un ordinateur dans la liste"; 
$lang["connect"][10] 	= "Choisissez une imprimante dans la liste"; 
$lang["connect"][11] 	= "Choisissez un p�riph�rique dans la liste"; 
$lang["connect"][12] 	= "Choisissez un �cran dans la liste"; 
$lang["connect"][13]	= "Sur une imprimante qui";
$lang["connect"][14]	= "Sur un p�riph�rique qui";
$lang["connect"][15]	= "Sur un �cran qui";
$lang["connect"][16]	= "Aucun �l�ment trouv�";

//header menu

$lang["Menu"][0]	= "Ordinateurs";
$lang["Menu"][1]	="R&eacute;seaux";
$lang["Menu"][2]	="Imprimantes";
$lang["Menu"][3]	="Ecrans";
$lang["Menu"][4]	="Logiciels";
$lang["Menu"][5]	="Suivi";
$lang["Menu"][6]	="Rapports";
$lang["Menu"][7]	="Groupes";
$lang["Menu"][8]	="Comptes";
$lang["Menu"][9]	="Comptes mail";
$lang["Menu"][10]	="Configuration";
$lang["Menu"][11]	="Pr&eacute;ferences";
$lang["Menu"][12]	="Donn&eacute;es";
$lang["Menu"][13]	="Statistiques";
$lang["Menu"][14]	="Utilisateurs";
$lang["Menu"][15]	="Administration";
$lang["Menu"][16]	="P�riph�riques";

//Donn&eacute;es

$lang["backup"][0]	    ="Sauvegarde SQL";
$lang["backup"][1]      ="Sauvegarde XML";
$lang["backup"][2]      ="Sauvegarde de la base de donn&eacute;es";
$lang["backup"][3]      ="Le fichier a bien &eacute;t&eacute; g&eacute;n&eacute;r&eacute;";
$lang["backup"][5]      ="Voir le fichier";
$lang["backup"][6]      ="Structure de la table";
$lang["backup"][7]      ="Donn&eacute;es de la table";
$lang["backup"][8]      ="Restaur&eacute; !";
$lang["backup"][9]      ="Supprim&eacute; !";
$lang["backup"][10]     ="Fichier";
$lang["backup"][11]     ="Taille";
$lang["backup"][12]     ="Date";
$lang["backup"][13]     ="Voir/T&eacute;l&eacute;charger";
$lang["backup"][14]     ="Restaurer";
$lang["backup"][15]     ="Etes vous sur de vouloir sauvegarder la base de donnees";
$lang["backup"][16]     ="Etes vous certain de vouloir remplacer la base de donnees actuelle par le fichier de sauvegarde :";
$lang["backup"][17]     ="Etes vous certain de vouloir supprimer ce fichier";
$lang["backup"][18]     ="Etes vous certain de vouloir sauvegarder la base de donnees";
$lang["backup"][19]     ="Maintenant";
$lang["backup"][20]     ="Supp";

// Tracking
$lang["tracking"][0]	= "Suivi des interventions";
$lang["tracking"][1]	= "Toutes les interventions actives";
$lang["tracking"][2]	= "Seulement les interventions qui vous sont attribu&eacute;es";
$lang["tracking"][3]	= "Seulement les interventions non attribu&eacute;es";
$lang["tracking"][4]	= "Seulement les interventions termin&eacute;es";
$lang["tracking"][5]	= "Quand la description contient";
$lang["tracking"][6]    = "Vous n'etes pas autoris&eacute; &agrave; (re-)attribuer cette intervention";
$lang["tracking"][7]    = "Afficher...";
$lang["tracking"][8]    = "Pas de description, veuillez recommencer";
$lang["tracking"][9] 	= "Nouvelle intervention post&eacute;e, suivante..."; 
$lang["tracking"][10]    = "Ajout de l'intervention impossible, verifiez la base de donn&eacute;es";
$lang["tracking"][11]   =  "Intervention(s) requise(s) par cet utilisateur";



$lang["joblist"][0]	= "Statut";
$lang["joblist"][1]	= "Date";
$lang["joblist"][2]	= "Priorit&eacute;";
$lang["joblist"][3]	= "Auteur";
$lang["joblist"][4] 	= "Attribu&eacute;"; 
$lang["joblist"][5]	= "Ordinateur";
$lang["joblist"][6]	= "Description";
$lang["joblist"][7]	= "Nouvelle intervention pour cet item...";
$lang["joblist"][8]	= "Pas d'intervention trouv&eacute;e.";
$lang["joblist"][9]	= "Nouveau";
$lang["joblist"][10]	= "Ancien";
$lang["joblist"][11]	= "Ouvert le";
$lang["joblist"][12]	= "Ferm&eacute; le";
$lang["joblist"][13]	= "Infos";
$lang["joblist"][14]	= "Terminer";
$lang["joblist"][15]	= "Attribuer";
$lang["joblist"][16]	= "Pas d'intervention en cours.";
$lang["joblist"][17]	= "Tr&eacute;s haute";
$lang["joblist"][18]	= "Haute";
$lang["joblist"][19]	= "Normale";
$lang["joblist"][20]	= "Basse";
$lang["joblist"][21]	= "Tr&eacute;s basse";
$lang["joblist"][22]    = "Pas d'ancienne intervention trouv&eacute;e";
$lang["joblist"][23]    = "Rajouter une ancienne intervention &agrave; l'historique";
$lang["job"][0]		= "Num&eacute;ro d'intervention";
$lang["job"][1]		= "Intervention toujours ouverte...";
$lang["job"][2]		= "Cette intervention a &eacute;t&eacute; ouverte &agrave;";
$lang["job"][3]		= "Intervention termin&eacute;e, marquer comme ancienne.";
$lang["job"][4] 	= "Attribuer intervention"; 
$lang["job"][5] 	= "Attribu&eacute;e &agrave;"; 
$lang["job"][6] 	= "Attribuer"; 
$lang["job"][7]		= "Suivi";
$lang["job"][8]		= "Pas de suivi pour cette intervention.";
$lang["job"][9]		= "Envoyer un nouveau suivi pour cette intervention";
$lang["job"][10]	= "Pas de suivi pour cette intervention.";
$lang["job"][11]	= "D&eacute;crivez le probleme/action";
$lang["job"][12]	= "Pas de suivi pour cette intervention.";
$lang["job"][13]	= "Ajouter une nouvelle intervention";
$lang["job"][14] 	= "Nouvelle intervention"; 
$lang["job"][15]	= "Historique";
$lang["job"][16]	= "trouv&eacute;e ";
$lang["job"][17]        = "intervention";
$lang["job"][18]        = "ancienne";
$lang["job"][19]        = "Suivi par Email";
$lang["job"][20]        = "Dur�e r�elle de l'intervention";
$lang["job"][21]        = "Heure(s)";
$lang["job"][22] 	= "Minute(s)"; 
$lang["job"][23]		= "Restaurer cette intervention";
// Computers

$lang["computers"][0]	= "Ajouter ordinateur...";
$lang["computers"][1]   = "Identifiant";
$lang["computers"][6]	= "N� s&eacute;rie";
$lang["computers"][7]	= "Nom";
$lang["computers"][8]	= "Type";
$lang["computers"][9]	= "OS";
$lang["computers"][10]	= "Lieu";
$lang["computers"][11]	= "Derni&egrave;re modif";
$lang["computers"][12]	= "Nouvel ordinateur &agrave; partir d'un mod&egrave;le";
$lang["computers"][13]	= "Ordinateur ID";
$lang["computers"][14]	= "Inser&eacute;";
$lang["computers"][15]	= "Contact numero";
$lang["computers"][16]	= "Contact";
$lang["computers"][17]	= "N� de s&eacute;rie";
$lang["computers"][18]	= "N� d'inventaire";
$lang["computers"][19]	= "Commentaires";
$lang["computers"][20]	= "OS Version";
$lang["computers"][21]	= "CPU";
$lang["computers"][22]	= "MHZ";
$lang["computers"][23]	= "RAM Typ";
$lang["computers"][24]	= "RAM (MB)";
$lang["computers"][25]	= "HD (GB)";
$lang["computers"][26]	= "Carte r&eacute;seau";
$lang["computers"][27]	= "Flags";
$lang["computers"][28]	= "Serveur";
$lang["computers"][29]	= ""; 					// reserv&eacute;
$lang["computers"][30]	= ""; 					// reserv&eacute;
$lang["computers"][31]	= "ID";
$lang["computers"][32]	= "Pas d'ordinateur trouv&eacute;";
$lang["computers"][33]	= "Carte son"; 					
$lang["computers"][34]	= "carte graphique"; 					
$lang["computers"][35]	= "Carte m&egrave;re";
$lang["computers"][36]	= "HD-Type";
$lang["computers"][37]	= "Pas d'&eacute;cran connect&eacute;.";
$lang["computers"][38]	= "Pas d'imprimante connect&eacute;e";
$lang["computers"][39]	= "Imprimantes";
$lang["computers"][40]	= "Ecrans";
$lang["computers"][41]  = "Date d'achat";
$lang["computers"][42]	= "Expiration garantie";
$lang["computers"][43]	= "Maintenance";
$lang["computers"][44]  = "Ordinateurs";
$lang["computers"][45]  = "Choisissez un mod&egrave;le";
$lang["computers"][46]	= "P�riph�riques";
$lang["computers"][47] 	= "Pas de p&eacute;riph&eacute;rique connect&eacute;"; 

// Networking

$lang["networking"][0]	= "Nom"; 
$lang["networking"][1]	= "Lieu";
$lang["networking"][2]	= "Type"; 
$lang["networking"][3]	= "Contact"; 
$lang["networking"][4]	= "Contact numero"; 
$lang["networking"][5]	= "RAM (MB)"; 
$lang["networking"][6]	= "Numero s&eacute;rie";
$lang["networking"][7]	= "Numero s&eacute;rie  2";
$lang["networking"][8]	= "Commentaire";
$lang["networking"][9]	= "Derni&egrave;re modification";
$lang["networking"][10]	= ""; 
$lang["networking"][11]	= "Ajouter Materiel r&eacute;seau..."; 
$lang["networking"][12]	= "Materiel r&eacute;seau"; 
$lang["networking"][13]	= "port(s) r&eacute;seau trouv&eacute;(s)"; 
$lang["networking"][14]	= "IP"; 
$lang["networking"][15]	= "MAC"; 
$lang["networking"][16]	= "Interface"; 
$lang["networking"][17]	= "Connect&eacute; &agrave;"; 
$lang["networking"][18]	= ""; 
$lang["networking"][19]	= "Ajouter un port..."; 
$lang["networking"][20]	= "Port Manager"; 
$lang["networking"][21]	= "Logical Number"; 
$lang["networking"][22]	= "Interface Address"; 
$lang["networking"][23]	= "Interface MAC"; 
$lang["networking"][24]	= "Connection"; 
$lang["networking"][25]	= "on"; 
$lang["networking"][26]	= "Non connect&eacute;."; 
$lang["networking"][27]	= "Port de connection"; 
$lang["networking"][28]	= "(Etape 1)"; 
$lang["networking"][29]	= "A un ordinateur dont";
$lang["networking"][30]	= "contient";
$lang["networking"][31]	= "ou choisisez un materiel r&eacute;seau";
$lang["networking"][32]	= "(Etape 2)";
$lang["networking"][33]	= "Choisissez un ordinateurs dans le resultat";
$lang["networking"][34]	= "Materiel non connect&eacute; : aucuns ports trouv&eacute;s";
$lang["networking"][35]	= "(derniere etape)";
$lang["networking"][36]	= "Liste de tous ports sur la machine";
$lang["networking"][37]	= "Port trouv&eacute;"; 
$lang["networking"][38]	= "Pas de machine trouv&eacute;e."; 
$lang["networking"][39]	= "Date d'achat";
$lang["networking"][40]	= "Expiration garantie";
$lang["networking"][41]	= "Maintenance";
$lang["networking"][42] = "identifiant";
$lang["networking"][43] = "R&eacute;seau";
$lang["networking"][44] = "Le port";
$lang["networking"][45] = "est maintenant connect&eacute; sur le port";
$lang["networking"][46] = "Ajouter  plusieurs ports..."; 
$lang["networking"][47] = "De"; 
$lang["networking"][48] = "A";
$lang["networking"][49] = "Firmware";
$lang["networking"][50] = "ID";
$lang["networking"][51] = "Prise reseau";

// Printers
$lang["printers"][0]	= "Ajouter imprimante...";
$lang["printers"][1]	= "Voir par lieu";
$lang["printers"][2]	= "tri&eacute; par";
$lang["printers"][3]	= "Ajouter Imprimante";
$lang["printers"][4]	= "Imprimante";
$lang["printers"][5]	= "Nom";
$lang["printers"][6]	= "Lieu";
$lang["printers"][7]	= "contact numero";
$lang["printers"][8]	= "Contact Personne";
$lang["printers"][9]	= "Type";
$lang["printers"][10]	= "numero de s&eacute;rie";
$lang["printers"][11]	= "numero d'inventaire";
$lang["printers"][12]	= "Commentaire";
$lang["printers"][13]	= "Lieu";
$lang["printers"][14]	= "Port s&eacute;rie";
$lang["printers"][15]	= "Port parall&egrave;le";
$lang["printers"][16]	= "Derni&egrave;re modification";
$lang["printers"][17]	= "Pas d'imprimante trouv&eacute;e.";
$lang["printers"][18]	= "Flags";
$lang["printers"][19]	= "ID";
$lang["printers"][20]   = "Date d'achat ";
$lang["printers"][21]	= "Expiration garantie";
$lang["printers"][22]	= "Maintenance";
$lang["printers"][23]   = "M&eacute;moire vive";
$lang["printers"][24]   = "Identifiant";
$lang["printers"][25]   = "Imprimantes";
$lang["printers"][26]   = "Nombre";
$lang["printers"][27]   = "Port USB";

// Monitors
$lang["monitors"][0]	= "Ajouter moniteur...";
$lang["monitors"][3]	= "Ajouter moniteur";
$lang["monitors"][4]	= "Moniteur";
$lang["monitors"][5]	= "Nom";
$lang["monitors"][6]	= "Lieu";
$lang["monitors"][7]	= "Contact num&eacute;ro";
$lang["monitors"][8]	= "Contact";
$lang["monitors"][9]	= "Type";
$lang["monitors"][10]	= "Num&eacute;ro de s&eacute;rie";
$lang["monitors"][11]	= "Num&eacute;ro de s&eacute;rie 2";
$lang["monitors"][12]	= "Commentaire";
$lang["monitors"][13]	= "Lieu";
$lang["monitors"][14]	= "Microphone";
$lang["monitors"][15]	= "Enceintes";
$lang["monitors"][16]	= "Derni&egrave;re modification";
$lang["monitors"][17]	= "Pas d'ecran trouv&eacute;.";
$lang["monitors"][18]	= "Options";
$lang["monitors"][19]	= "Sub-D";
$lang["monitors"][20]	= "BNC";
$lang["monitors"][21]	= "Taille";
$lang["monitors"][22]	= "Connect&eacute; a";
$lang["monitors"][23]	= "ID";
$lang["monitors"][24]   = "Date d'achat ";
$lang["monitors"][25]	= "Expiration garantie";
$lang["monitors"][26]	= "Maintenance";
$lang["monitors"][27]   = "identifiant";
$lang["monitors"][28]	= "Ecrans";

// Software
$lang["software"][0]	= "Ajouter logiciel..."; 
$lang["software"][1]	= "ID"; 
$lang["software"][2]	= "Nom";
$lang["software"][3]	= "Plateforme";
$lang["software"][4]	= "Lieu"; 
$lang["software"][5]	= "Version"; 
$lang["software"][6]	= "Commentaires"; 
$lang["software"][7]	= "rechercher logiciel"; 
$lang["software"][8]	= "ou"; 
$lang["software"][9]	= "contient"; 
$lang["software"][10]	= "Logiciel"; 
$lang["software"][11]	= "Licences";
$lang["software"][12]	= "ajouter licence...";
$lang["software"][13]	= "licence(s) trouv&eacute;e(s)";
$lang["software"][14]	= "Pas de licence pour ce logiciel.";
$lang["software"][15]	= "Ajouter des licences pour un logiciel";
$lang["software"][16]	= "Num&eacute;ros de s&eacute;rie ('free' pour les logiciels libres)";
$lang["software"][17]	= "logiciel install&eacute;"; 
$lang["software"][18]	= "Licence deja install&eacute;e.";
$lang["software"][19]	= "Install&eacute;";
$lang["software"][20]	= "Restant";
$lang["software"][21]	= "Total"; 
$lang["software"][22]	= "Pas de logiciel trouv&eacute;.";
$lang["software"][23]   = "Logiciels";
$lang["software"][24]   = "Date fin";
$lang["software"][25]   = "Expire le";
$lang["software"][26]   = "N'expire jamais";
$lang["software"][27]   = "Licence expir�e";

// Peripherals
$lang["peripherals"][0]	= "Ajouter p&eacute;riph&eacute;rique...";
$lang["peripherals"][3]	= "Ajouter p&eacute;riph&eacute;rique";
$lang["peripherals"][4]	= "P&eacute;riph&eacute;rique";
$lang["peripherals"][5]	= "Nom";
$lang["peripherals"][6]	= "Lieu";
$lang["peripherals"][7]	= "Contact num&eacute;ro";
$lang["peripherals"][8]	= "Contact";
$lang["peripherals"][9]	= "Type";
$lang["peripherals"][10]	= "Num&eacute;ro de s&eacute;rie";
$lang["peripherals"][11]	= "Num&eacute;ro de s&eacute;rie 2";
$lang["peripherals"][12]	= "Commentaire";
$lang["peripherals"][13]	= "Lieu";
$lang["peripherals"][14]	= "";
$lang["peripherals"][15]	= "";
$lang["peripherals"][16]	= "Derni&egrave;re modification";
$lang["peripherals"][17]	= "Pas de peripherique trouv&eacute;.";
$lang["peripherals"][18]	= "Marque";
$lang["peripherals"][19]	= "";
$lang["peripherals"][20]	= "";
$lang["peripherals"][21]	= "Taille";
$lang["peripherals"][22]	= "Connect&eacute; a";
$lang["peripherals"][23]	= "ID";
$lang["peripherals"][24]   = "Date d'achat ";
$lang["peripherals"][25]	= "Expiration garantie";
$lang["peripherals"][26]	= "Maintenance";
$lang["peripherals"][27]   = "identifiant";
$lang["peripherals"][28]	= "P&eacute;riph�riques";


// Reports
$lang["reports"][0]	= "S&eacute;lectionner un rapport &agrave; g&eacute;n&eacute;rer"; 
$lang["reports"][1]     = "Imprimantes sous contrat de maintenance";
$lang["reports"][2]     = "Moniteurs sous contrat de maintenance";
$lang["reports"][3]     = "Materiel r&eacute;seau sous contrat de maintenance";
$lang["reports"][4]     = "Liste du materiel sous contrat de maintenance";
$lang["reports"][5]     = "Ordinateurs sous contrat de maintenance";
$lang["reports"][6]	= "Ordinateurs";
$lang["reports"][7]	="Imprimantes";
$lang["reports"][8]	="Materiel r&eacute;seau";
$lang["reports"][9]	="Moniteurs";
$lang["reports"][10]	="S&eacute;lectionnez un type de mat&eacute;riel";
$lang["reports"][11]    ="Materiel sous contrat de maintenance";
$lang["reports"][12]    ="Type(s) de materiel";
$lang["reports"][13]    ="Date(s) d'achat";
$lang["reports"][14]    ="Option de tri";
$lang["reports"][15]    ="Afficher rapport";
$lang["reports"][16]    ="Tous";
$lang["reports"][17]    ="Date achat";
$lang["reports"][18]    ="N� serie";
$lang["reports"][19]    ="Nom contact";
$lang["reports"][20]    ="Lieu";
$lang["reports"][21]    ="Date fin garantie";
$lang["reports"][22]    ="Type de date";
$lang["reports"][23]    ="Date(s)";
$lang["reports"][24]    ="Restreindre aux ordinateurs";
$lang["reports"][25]    ="Rapport interventions";
$lang["reports"][26]    ="Rapport par d�faut";
$lang["reports"][27]    ="Maintenance";
$lang["reports"][28]    ="Par ann�e";
$lang["reports"][29]	="P&eacute;riph&eacute;riques";

// LDAP
$lang["ldap"][0]	= "recherche";
$lang["ldap"][1]	= "Montrer";
$lang["ldap"][2]	= "et";
$lang["ldap"][3]	= "ou l'attribut";
$lang["ldap"][4]	= "Ajouter nouvelle entr&eacute;e...";
$lang["ldap"][5]	= "requis";
$lang["ldap"][6]	= "permis";
$lang["ldap"][7]	= "LDAP";


// Setup
$lang["setup"][0]	= "Intitul&eacute;";
$lang["setup"][1]	= "Mod&egrave;le";
$lang["setup"][2]	= "Ajouter un Utilisateur GLPI";
$lang["setup"][3]	= "Lieu";
$lang["setup"][4]	= "Type de machines";
$lang["setup"][5]	= "Syst&egrave;me d'exploitation";
$lang["setup"][6]	= " Type RAM";
$lang["setup"][7]	= "Microprocesseur";
$lang["setup"][8]	= "Carte r&eacute;seau";
$lang["setup"][9]	= "Interface r&eacute;seau";
$lang["setup"][10]	= "Inventaire"; 
$lang["setup"][11]	= "changer le mot de passe pour"; 
$lang["setup"][12]	= "Utilisateur"; 
$lang["setup"][13]	= "Nom r&eacute;el"; 
$lang["setup"][14]	= "E-Mail"; 
$lang["setup"][15]	= "Num&eacute;ro de telephone"; 
$lang["setup"][16]	= "Lieux"; 
$lang["setup"][17]	= "Type de compte"; 
$lang["setup"][18]	= "Login"; 
$lang["setup"][19]	= "Password"; 
$lang["setup"][20]	= "Type"; 
$lang["setup"][21]	= "N'oubliez pas de mettre un mot de passe plus tard !";
$lang["setup"][22]	= "Ajouter un mod&egrave;le"; 
$lang["setup"][23]	= "Nom du mod&egrave;le"; 
$lang["setup"][24]	= "Nom"; 
$lang["setup"][25]	= "Lieux"; 
$lang["setup"][26]	= "Contact num&eacute;ro";
$lang["setup"][27]	= "Contact Personne"; 
$lang["setup"][28]	= "Num&eacute;ro de s&eacute;rie"; 
$lang["setup"][29]	= "Num&eacute;ro d'inventaire";
$lang["setup"][30]	= "Commentaire";
$lang["setup"][31]	= "Type"; 
$lang["setup"][32]	= "OS"; 
$lang["setup"][33]	= "OS Version"; 
$lang["setup"][34]	= "CPU"; 
$lang["setup"][35]	= "MHZ"; 
$lang["setup"][36]	= "RAM Type"; 
$lang["setup"][37]	= "RAM (MB)"; 
$lang["setup"][38]	= "HD (GB)"; 
$lang["setup"][39]	= "Carte r&eacute;seau";
$lang["setup"][40]	= "Montrer les nouvelles interventions d'abord ?"; 
$lang["setup"][41]	= "Selectionnez une Langue"; 
$lang["setup"][42]	= "Types de r&eacute;seau"; 
$lang["setup"][43]	= "Types d'imprimantes"; 
$lang["setup"][44]	= "Types de moniteurs";
$lang["setup"][45]	= "Cartes m&egrave;res";
$lang["setup"][46]	= "Cartes graphiques";
$lang["setup"][47]	= "cartes son";
$lang["setup"][48]	= "Types de disque dur";
$lang["setup"][49]	= "Carte m&egrave;re";
$lang["setup"][50]	= "Carte Graphique";
$lang["setup"][51]	= "Carte son";
$lang["setup"][52]	= "Type de disque dur";
$lang["setup"][53]      = "Date d'achat ";
$lang["setup"][54]	= "Expiration garantie";
$lang["setup"][55]	= "Maintenance";
$lang["setup"][56]	= "Configuration";
$lang["setup"][57]      = "Utilisateur";
$lang["setup"][58]      = "Droit d'attribution d'intervention";
$lang["setup"][59]      = "Configurer les droits d'attribution d'intervention";
$lang["setup"][60]      = "Non";
$lang["setup"][61]  = "Oui";
$lang["setup"][62]       = "Selectionnez la cat&eacute;gorie &agrave; configurer";
$lang["setup"][63]     = "Attention vous �tes sur le point de supprimer un intitul� utilis� pour un ou plusieurs items";
$lang["setup"][64] 	= "Si vous confirmez la suppression les items utilisant cet intitul&eacute; se verront attribuer un champs NULL"; 
$lang["setup"][65]     = "Vous pouvez aussi remplacer toutes les occurences de cet intitul� par un autre :";
$lang["setup"][66]	= "Pas d'utilisateur trouv�";
$lang["setup"][67]	= "Authentifications externes";
$lang["setup"][68]	= "Suivis par emails";
$lang["setup"][69]	= "Types de p�riph�riques";
$lang["setup"][70]	= "Configuration g�n�rale";
$lang["setup"][71]	= "Firmware";
$lang["setup"][72] 	= "Selectionnez un intitul�"; 
$lang["setup"][73] = "Prise reseau";

$lang["setup"][100]="Configuration g�n�rale";
$lang["setup"][101]="Chemin d'installation";
$lang["setup"][102]="Niveau de log";
$lang["setup"][103]="1- Critique (erreur de login seulement)";
$lang["setup"][104]="2- S�v�re (Non utilis�e) ";
$lang["setup"][105]="3- Important (logins r�ussis) ";
$lang["setup"][106]="4- Notices (Ajout, suppression, tracking)";
$lang["setup"][107]="5- Complet (Tout) ";
$lang["setup"][108]="Nombre d'�venements de log � afficher";
$lang["setup"][109]="Temps en jours de conservation des logs (0 pour infini)";
$lang["setup"][110]=" Montrer les interventions au login";
$lang["setup"][111]="Nombre d'�lements � afficher par page";
$lang["setup"][112]="Nombre de caract�res maximum pour chaque �l�ments de la liste";

$lang["setup"][150]="Sources d'authentification externes";
$lang["setup"][151]=" Si vous ne souhaitez pas utiliser LDAP comme source(s) de connection laissez les champs vides";
$lang["setup"][152]="LDAP configuration";
$lang["setup"][153]="Hote LDAP ";
$lang["setup"][154]="Basedn";
$lang["setup"][155]="rootdn (pour les connections non anonymes)";
$lang["setup"][156]="Pass (pour les connections non anonymes)";
$lang["setup"][157]="L'extension LDAP de votre parser PHP n'est pas install�";
$lang["setup"][158]="Impossible d'utiliser LDAP comme source de connection externe";

$lang["setup"][160]=" Si vous ne souhaitez pas utiliser IMAP/POP comme source(s) de connection laissez les champs vides";
$lang["setup"][161]="Plus d'informations pour la syntaxe du Auth Server sur <a target=\"_blank\" href=\"http://www.php.net/manual/fr/function.imap-open.php\">php.net</a>. Le param�tre qui vous int�resse est le premier (mailbox).";
$lang["setup"][162]="IMAP/POP configuration";
$lang["setup"][163]="Serveur IMAP/POP d'authentification";
$lang["setup"][164]="Nom d'hote IMAP/POP  (email de type login@hote)";
$lang["setup"][165]="Votre parser PHP a �t� compil� sans les fonctions de connection IMAP";
$lang["setup"][166]=" Impossible d'utiliser IMAP/POP comme source de connection externe";


// � faire !!
$lang["setup"][200]="Suivis par emails";




// Helpdesk

$lang["help"][0]	= "Bienvenue";
$lang["help"][1]	= "Veuillez d&eacute;crire votre probl&egrave;me";
$lang["help"][2]	= "Le probl&egrave;me doit &ecirc;tre r&eacute;solu";
$lang["help"][3]	= "Hier";
$lang["help"][4]	= "Tres vite";
$lang["help"][5]	= "Dans la journ&eacute;e";
$lang["help"][6]	= "La semaine prochaine";
$lang["help"][7]	= "Si vous avez le temps";
$lang["help"][8]	= "Informez-moi des suites donn&eacute;es";
$lang["help"][9]	= "Non";
$lang["help"][10]	= "oui";
$lang["help"][11]	= "Mon adresse de messagerie";
$lang["help"][12]	= "Le Num&eacute;ro de ma machine :";
$lang["help"][13]	= "Le probl&egrave;me";
$lang["help"][14]	= "Envoyer message";
$lang["help"][15]	= "Pas de description, r&eacute;essayez.";
$lang["help"][16]	= "Vous voulez &#234;tre inform&eacute;es des suites donn&eacute;es mais vous  n'avez pas entr&eacute; d'adresse de messagerie !";
$lang["help"][17]	= "Veuillez saisir votre num&eacute;ro de machine.";
$lang["help"][18]	= "Votre signalement a &eacute;t&eacute; envoy&eacute;, le traitement est en cours.";
$lang["help"][19]	= "Merci d'avoir utilis&eacute; notre systeme d'aide automatique.";
$lang["help"][20]	= "Votre probl&egrave;me ne peut pas �tre ajout&eacute; dans notre base de donn&eacute;es.";
$lang["help"][21]	= "Veuillez prendre contact avec un  technicien. SVP";
$lang["help"][22]	= "Rechercher votre num�ro de machine";
$lang["help"][23]	= "Saisissez les premi�res lettres  (nom, ordinateur ou n�  de s&eacute;rie ";

  // Mois
  $lang["calendarM"][0] = "Janvier" ;
  $lang["calendarM"][1] = "F&eacute;vrier" ;
  $lang["calendarM"][2] = "Mars" ;
  $lang["calendarM"][3] = "Avril" ;
  $lang["calendarM"][4] = "Mai" ;
  $lang["calendarM"][5] = "Juin" ;
  $lang["calendarM"][6] = "Juillet" ;
  $lang["calendarM"][7] = "Ao&ucirc;t" ;
  $lang["calendarM"][8] = "Septembre" ;
  $lang["calendarM"][9] = "Octobre" ;
  $lang["calendarM"][10] = "Novembre" ;
  $lang["calendarM"][11] = "D&eacute;cembre" ;

  // Premi&egrave;re lettre des jours de la semaine
  $lang["calendarD"][0] = "D" ;
  $lang["calendarD"][1] = "L" ;
  $lang["calendarD"][2] = "M" ;
  $lang["calendarD"][3] = "M" ;
  $lang["calendarD"][4] = "J" ;
  $lang["calendarD"][5] = "V" ;
  $lang["calendarD"][6] = "S" ;

  // Mail  ne pas mettre au format html !!!!
  
$lang["mailing"][0]="-----------------------";
$lang["mailing"][1]="--------------------------------------";
$lang["mailing"][2]="Auteur : ";
$lang["mailing"][3]="Contenu : ";
$lang["mailing"][4]="Intervention(s) d�j�; effectu�e(s)";
$lang["mailing"][5]="Description de l'intervention";
$lang["mailing"][6]="Date de d�but : ";
$lang["mailing"][7]="Ordinateur concern�; : ";
$lang["mailing"][8]="Attribu� � : ";
$lang["mailing"][9]="Nouvelle demande d'intervention";
$lang["mailing"][10]="Nouveau suivi d'intervention";
$lang["mailing"][11]="Intervention termin�e le ";
$lang["mailing"][12]="Attribution de l'intervention";
$lang["mailing"][13]="Erreur dans la g�n�ration de l'email automatique";


//Les stats
$lang["stats"][0] = "S&eacute;lectionnez les statistiques &agrave; visualiser";
$lang["stats"][1] = "Globales";
$lang["stats"][2] = "Par technicien";
$lang["stats"][3] = "Par Intitul�s";
$lang["stats"][4] = "Par utilisateur";
$lang["stats"][5] = "Nombre total d'interventions";
$lang["stats"][6] = "D&eacute;lai moyen de r&eacute;solution de panne";
$lang["stats"][7] = "D&eacute;lai maximal de r&eacute;solution de panne";
$lang["stats"][8] = "Ce mois ci";
$lang["stats"][9] = "Cette ann&eacute;e";
$lang["stats"][10] = "Au total";
$lang["stats"][11] = "Nombre d'interventions r&eacute;solues";
$lang["stats"][12] = "Statistiques Globales";
$lang["stats"][13] = "Nombre d'interventions attribu&eacute;es";
$lang["stats"][14] = "Nombre d'interventions r&eacute;solues";
$lang["stats"][15] = "dur&eacute;e moyenne d'ouverture";
$lang["stats"][16] = "Nom du technicien";
$lang["stats"][17] = "Statistiques techniciens";
$lang["stats"][18] = "Statistiques utilisateurs";
$lang["stats"][19] = "Statistiques";
$lang["stats"][20] = "Nom d'utilisateur";
$lang["stats"][21] = "Lieu";
$lang["stats"][22] = "Nombre d'interventions demand&eacute;es";
$lang["stats"][23] = "Pas de statistiques disponibles";
$lang["stats"][25] = "Dur&eacute;e r&eacute;elle moyenne de l'intervention";
$lang["stats"][26] = "Types";
$lang["stats"][27] = "Dur&eacute;e r&eacute;elle totale des interventions";
$lang["stats"][28] = "Dur&eacute;� maximale de r&eacute;solution r�elle de panne";
$lang["stats"][29] = "D&eacute;lai minimum de prise en compte de l'intervention";
$lang["stats"][30] = "D&eacute;lai moyen de prise en compte de l'intervention";
$lang["stats"][31] = "Jour(s)";
$lang["stats"][32] = "Heure(s)";
$lang["stats"][33] = "Min(s)";
$lang["stats"][34] = "Sec(s)";
// install update

$lang["install"][0]	= "Installation ou mise � jour de GLPI";
$lang["install"][1]	= " Choissisez \"Installation\" pour  une nouvelle installation compl�te de GLPI ( les donn�es import&eacute;es par GLPI seront les donn&eacute;es par d&eacute;faut).";
$lang["install"][2]	= "Choisissez \" Mise &#224; jour\"  pour mettre   &#224; jour GLPI  &#224; partir d'une version ant&eacute;rieure";
$lang["install"][3]	= "Installation";
$lang["install"][4]	= "Mise  &#224; jour";
$lang["install"][5]	= "V&eacute;rification de la compatibilit&eacute; de votre environnement  avec l'&eacute;xecution de GLPI";
$lang["install"][6]	= "Test effectu&eacute;";
$lang["install"][7]	= "R&eacute;sultats";
$lang["install"][8]	= "Test du Parser PHP";
$lang["install"][9]	= "Vous devez installer  PHP4 Vous pouvez le t&eacute;l&eacute;charger ici :";
$lang["install"][10]	= "Vous utilisez une des versions 4.0.0 ou 4.0.1 de PHP - Nous vous conseillons de mettre  &#224; jour votre PHP"; 
$lang["install"][11]	= "La version de PHP est 4.x - Parfait !"; 
$lang["install"][12]	= "Test des Sessions"; 
$lang["install"][13]	= "Votre parser PHP n'as pas &eacute;t&eacute; compil&eacute; avec le support des sessions ! "; 
$lang["install"][14]	= "Le support des sessions est op&eacute;rationnel - Parfait"; 
$lang["install"][15]	= "Verifiez que le support des sessions est bien activ&eacute; dans votre php.ini"; 
$lang["install"][16]	= "Tests d'&eacute;criture de fichiers dump"; 
$lang["install"][17]	= "Le fichier n'a pas pu �tre cr&eacute;&eacute;."; 
$lang["install"][18]	= "V&eacute;rifiez que PHP a un droit d'&eacute;criture pour le r&eacute;pertoire 'backups/dump/' Si vous �tes sous un environnement de Microsoft Windows, regardez si c'est en lecture seule."; 
$lang["install"][19]	= "Le fichier a &eacute;t&eacute; cr&eacute;&eacute; mais n'a pas pu �tre supprim&eacute;."; 
$lang["install"][20]	= "Le fichier a &eacute;t&eacute; cr&eacute;&eacute; et supprim&eacute; - Parfait !"; 
$lang["install"][21]	= "Test d'&eacute;criture de fichiers temporaires";
$lang["install"][22]	= "V&eacute;rifiez que PHP a un droit d'&eacute;criture pour le r&eacute;pertoire : 'reports/reports/convexcel/tmp/' Si vous �tes sous un environnement de Microsoft Windows, regardez si c'est en lecture seule."; 
$lang["install"][23]	= "Test d'&eacute;criture de fichier configuration"; 
$lang["install"][24]	= "V&eacute;rifiez que PHP a un droit d'&eacute;criture pour le r&eacute;pertoire : 'glpi/config/' Si vous �tes sous un environnement de Microsoft Windows, regardez si c'est en lecture seule."; 
$lang["install"][25]	= "Continuer ?"; 
$lang["install"][26]	= "Continuer";
$lang["install"][27]	= "R&eacute;essayer"; 
$lang["install"][28]	= "Configuration de la connection  &#224; la base de donn&eacute;es"; 
$lang["install"][29]	= "Param�tres de connection  &#224; la base de donn&eacute;es";
$lang["install"][30]	= "Mysql server";
$lang["install"][31]	= "Mysql user"; 
$lang["install"][32]	= "Mysql pass"; 
$lang["install"][33]	= "Retour"; 
$lang["install"][34]	= "Test de la connection  &#224; la base de donn&eacute;es"; 
$lang["install"][35]	= "Impossible de se connecter  &#224; la base de donn&eacute;es"; 
$lang["install"][36]	= " Le serveur a r&eacute;pondu"; 
$lang["install"][37]	= "Le champs serveur ou/et le champ user est vide"; 
$lang["install"][38]	= "Veuillez selectionner une base de donn&eacute;es : "; 
$lang["install"][39]	= "Cr&eacute;er une nouvelle base :"; 
$lang["install"][40]	= "Veuillez selectionner la base de donn&eacute;es   &#224; mettre  &#224; jour : "; 
$lang["install"][41]	= "Impossible d'utiliser la base : "; 
$lang["install"][42]	= "Le serveur a r&eacute;pondu"; 
$lang["install"][43]	= "OK - La base a bien &eacute;t&eacute; initialis&eacute;e"; 
$lang["install"][44]	= "Des valeurs par d&eacute;faut ont &eacute;t&eacute; entr&eacute;es, n'h&eacute;sitez pas  &#224; supprimer ces derni�res"; 
$lang["install"][45]	= "Ne supprimez pas l'utilisateur 'helpdesk' "; 
$lang["install"][46]	= "A la premi�re connection vous pouvez utiliser le login \"glpi\" et le mot de passe \"glpi\" pour acc&eacute;der  &#224; l'application avec des droits administrateur"; 
$lang["install"][47]	= "Impossible d'&eacute;crire le fichier de configuration de votre base de donn&eacute;es"; 
$lang["install"][48]	= "Erreur lors de la cr&eacute;ation de la base !"; 
$lang["install"][49]	= "Vous n'avez pas s&eacute;l&eacute;ctionn&eacute; de base de donn&eacute;es !"; 
$lang["install"][50]	= "Erreur lors de la cr&eacute;ation de la base !"; 
$lang["install"][51]	= "Configuration de GLPI :"; 
$lang["install"][52]	= "Les valeurs pr&eacute;s&eacute;lectionn&eacute;es sont les valeurs par defaut, il est recommand&eacute; de laisser ces valeurs"; 
$lang["install"][53]	= "Votre configuration a bien &eacute;t&eacute; enregistr&eacute;e"; 
$lang["install"][54]	= "Cliquer sur 'Continuer' pour terminer l'installation"; 
$lang["install"][55]	= "L'installation est termin&eacute;e"; 
$lang["install"][56]	= "Il est recommand&eacute; maintenant d'appliquer un chmod+0 sur les fichiers install.php et update.php"; 
$lang["install"][57]	= "Les logins mots de passes par defauts sont :"; 
$lang["install"][58]	= "glpi/glpi pour le compte administrateur"; 
$lang["install"][59]	= "tech/tech pour le compte technicien"; 
$lang["install"][60]	= "normal pour le compte normal"; 
$lang["install"][61]	= "post-only/post-only pour le compte postonly"; 
$lang["install"][62]	= "Vous pouvez supprimer ou modifier ces comptes ainsi que les premi�res entr&eacute;es dans la base de donn&eacute;es."; 
$lang["install"][63]	= "Attention tout de m�me NE SUPPRIMEZ PAS l'utilisateur HELPDESK."; 
$lang["install"][64]	= "Utiliser GLPI"; 
$lang["install"][70]	= "Impossible de cr&eacute;er le fichier de connection  &#224; la base de donn&eacute;es, v&eacute;rifiez les droits sur les fichiers"; 

$lang["update"][90]  ="Erreur durant la mise  &#224; jour de la base de donn&eacute;es";
$lang["update"][91]  ="Attention !";
$lang["update"][92]  ="Vous allez mettre  &#224; jour votre base de donn&eacute;es GLPI ayant pour nom :";
$lang["update"][93]  ="Connexion &agrave; la base de donn&eacute;es r&eacute;ussie";
$lang["update"][94]  ="La mise &agrave; jour est r&eacute;ussie, votre base de donn&eacute;es est actualis&eacute;e";
$lang["update"][95]  ="La connexion  &#224; la base de donn&eacute;es a &eacute;chou&eacute;e, verifiez les param�tres de connexion figurant dans le fichier config_db.php";






?>
