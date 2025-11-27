<?php
// Configuration générale du cours
define('COURSE_TITLE', 'Maîtriser MS Project');
define('COURSE_AUTHOR', 'Professeur OFPPT');
define('COURSE_LAST_UPDATE', 'Novembre 2025');

// Structure du cours pour générer le sommaire dynamiquement
$course_parts = [
    "Partie 1 : Concepts de Base et Définitions" => [
        ['id' => 'concepts-base', 'title' => "Chapitre 1 : Introduction à la Gestion de Projet et MS Project"],
        ['id' => 'gantt-pert', 'title' => "Chapitre 2 : Diagramme de Gantt et PERT"],
        ['id' => 'calculs-dates', 'title' => "Chapitre 3 : Méthodes de calcul (Dates, Marges)"],
        ['id' => 'gestion-couts', 'title' => "Chapitre 4 : Gestion des Coûts (Concepts)"]
    ],
    "Partie 2 : Initialisation et Planification des Tâches" => [
        ['id' => 'interface-msp', 'title' => "Chapitre 1 : L'interface de MS Project"],
        ['id' => 'parametrage-projet', 'title' => "Chapitre 2 : Paramétrage du Projet (Calendriers)"],
        ['id' => 'saisie-taches', 'title' => "Chapitre 3 : Saisie et Structuration des Tâches"],
        ['id' => 'ordonnancement', 'title' => "Chapitre 4 : Ordonnancement (Prédécesseurs)"]
    ],
    "Partie 3 : Analyse du Réseau et Optimisation Temporelle" => [
        ['id' => 'pert-manuel', 'title' => "Chapitre 1 : Le Diagramme de PERT Manuel"],
        ['id' => 'analyse-gantt', 'title' => "Chapitre 2 : Analyse dans MS Project (Chemin Critique)"]
    ],
    "Partie 4 : Gestion des Ressources et Coûts" => [
        ['id' => 'gestion-ressources', 'title' => "Chapitre 1 : Définition des Ressources"],
        ['id' => 'affectation-ressources', 'title' => "Chapitre 2 : Affectation des Ressources"],
        ['id' => 'optimisation', 'title' => "Chapitre 3 : Optimisation (Nivellement)"],
        ['id' => 'couts-projet', 'title' => "Chapitre 4 : Gestion des Coûts"]
    ],
    "Partie 5 : Suivi et Pilotage" => [
        ['id' => 'planification-reference', 'title' => "Chapitre 1 : La Planification de Référence"],
        ['id' => 'saisie-avancement', 'title' => "Chapitre 2 : Saisie de l'Avancement"],
        ['id' => 'analyse-ecarts', 'title' => "Chapitre 3 : Analyse des Écarts"],
        ['id' => 'rapports', 'title' => "Chapitre 4 : Rapports et Tableaux de Bord"]
    ],
    "Partie 6 : Procédures Pratiques" => [
        ['id' => 'procedures-menus', 'title' => "Chapitre 1 : Guide des Menus et Fenêtres"]
    ],
    "Partie 7 : Exercices et Études de Cas" => [
        ['id' => 'exercices-pratiques', 'title' => "Chapitre 1 : Exercices d'application"],
        ['id' => 'etude-cas', 'title' => "Chapitre 2 : Étude de Cas Complète"]
    ]
];
?>
