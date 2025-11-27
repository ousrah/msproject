<!-- =================================================================== -->
<!-- PARTIE 7 : EXERCICES ET ÉTUDES DE CAS -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6">Partie 7 : Exercices et Études de Cas</h2>

<section id="exercices-pratiques" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 1 : Exercices d'application</h3>

    <!-- Exercice 1 -->
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 mb-8">
        <h4 class="text-lg font-bold text-gray-800 mb-2">Exercice 1 : Paramétrage du Calendrier</h4>
        <p class="text-gray-700 mb-4"><strong>Objectif :</strong> Créer un calendrier personnalisé pour une entreprise marocaine.</p>
        <div class="bg-gray-50 p-4 rounded mb-4">
            <p class="font-semibold">Données :</p>
            <ul class="list-disc ml-6 text-sm text-gray-700">
                <li>Horaires : Lundi au Vendredi, 8h30-12h30 et 14h30-18h30.</li>
                <li>Jours fériés à inclure : 1er Janvier, 11 Janvier (Manifeste de l'Indépendance), 1er Mai.</li>
            </ul>
        </div>
        <button class="solution-toggle">Voir la correction</button>
        <div class="solution-content">
            <ol class="list-decimal ml-6 text-sm text-gray-700 space-y-1">
                <li>Projet > Modifier les horaires de travail > Créer un nouveau calendrier "Maroc Standard".</li>
                <li>Onglet "Semaines de travail" > Détails > Sélectionner Lun-Ven > "Définir des heures spécifiques" > Saisir 8:30-12:30 et 14:30-18:30.</li>
                <li>Onglet "Exceptions" > Ajouter "Nouvel An" (01/01), "Manifeste" (11/01), "Fête Travail" (01/05).</li>
                <li>Projet > Informations sur le projet > Choisir "Maroc Standard".</li>
            </ol>
        </div>
    </div>

    <!-- Exercice 2 -->
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 mb-8">
        <h4 class="text-lg font-bold text-gray-800 mb-2">Exercice 2 : Liaisons et Chemin Critique</h4>
        <p class="text-gray-700 mb-4"><strong>Objectif :</strong> Identifier le chemin critique.</p>
        <div class="bg-gray-50 p-4 rounded mb-4">
            <p class="font-semibold">Tâches :</p>
            <ul class="list-disc ml-6 text-sm text-gray-700">
                <li>A (3 jours)</li>
                <li>B (4 jours), prédécesseur A</li>
                <li>C (2 jours), prédécesseur A</li>
                <li>D (5 jours), prédécesseur B et C</li>
            </ul>
        </div>
        <button class="solution-toggle">Voir la correction</button>
        <div class="solution-content">
            <p class="text-sm text-gray-700">
                <strong>Chemin 1 :</strong> A -> B -> D = 3 + 4 + 5 = 12 jours.<br>
                <strong>Chemin 2 :</strong> A -> C -> D = 3 + 2 + 5 = 10 jours.<br>
                <strong>Conclusion :</strong> Le chemin critique est A-B-D (12 jours). C'est le chemin le plus long. La tâche C a une marge de 2 jours.
            </p>
        </div>
    </div>
</section>

<section id="etude-cas" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 2 : Étude de Cas Complète - "Lancement d'un Site E-commerce"</h3>
    
    <div class="bg-blue-50 p-6 rounded-lg border-l-4 border-blue-500 shadow-sm mb-8">
        <h4 class="text-xl font-bold text-blue-900 mb-4">Énoncé du Projet</h4>
        <p class="text-gray-800 mb-4">Vous êtes chef de projet web. Vous devez planifier la création d'un site e-commerce.</p>
        
        <h5 class="font-bold text-blue-900 mt-4">1. Les Tâches (WBS)</h5>
        <ul class="list-disc ml-6 text-sm text-gray-800 mb-4">
            <li><strong>Phase 1 : Conception</strong>
                <ul class="ml-4 list-circle">
                    <li>Rédaction Cahier des charges (5j)</li>
                    <li>Maquettes graphiques (10j)</li>
                    <li>Validation Client (Jalon, 0j)</li>
                </ul>
            </li>
            <li><strong>Phase 2 : Développement</strong>
                <ul class="ml-4 list-circle">
                    <li>Installation Serveur (1j)</li>
                    <li>Développement Front-end (15j)</li>
                    <li>Développement Back-end (20j)</li>
                    <li>Intégration (5j)</li>
                </ul>
            </li>
            <li><strong>Phase 3 : Recette et Déploiement</strong>
                <ul class="ml-4 list-circle">
                    <li>Tests unitaires (5j)</li>
                    <li>Formation client (2j)</li>
                    <li>Mise en ligne (1j)</li>
                </ul>
            </li>
        </ul>

        <h5 class="font-bold text-blue-900 mt-4">2. Les Ressources</h5>
        <ul class="list-disc ml-6 text-sm text-gray-800 mb-4">
            <li>Chef de Projet (400 MAD/j)</li>
            <li>Designer (300 MAD/j)</li>
            <li>Développeur Fullstack (350 MAD/j)</li>
            <li>Serveur de test (Coût fixe : 100 MAD)</li>
        </ul>

        <h5 class="font-bold text-blue-900 mt-4">3. Contraintes</h5>
        <ul class="list-disc ml-6 text-sm text-gray-800">
            <li>Le Front-end et le Back-end doivent commencer en même temps (Lien DD).</li>
            <li>L'intégration ne peut commencer que si Front et Back sont finis.</li>
            <li>La validation client est un prérequis pour le développement.</li>
        </ul>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
        <h4 class="text-xl font-bold text-gray-800 mb-4">Travail à faire</h4>
        <ol class="list-decimal ml-6 text-gray-700 space-y-2">
            <li>Saisir les tâches et structurer le WBS (Phases).</li>
            <li>Définir les jalons.</li>
            <li>Créer les liens selon les contraintes.</li>
            <li>Créer les ressources et les affecter.</li>
            <li>Identifier le coût total du projet et la date de fin prévue.</li>
            <li>Enregistrer la planification de référence.</li>
            <li>Simuler un retard de 5 jours sur le "Développement Back-end" et analyser l'impact.</li>
        </ol>
    </div>
</section>
