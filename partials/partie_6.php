<!-- =================================================================== -->
<!-- PARTIE 6 : PROCÉDURES PRATIQUES (GUIDE UTILISATEUR) -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6">Partie 6 : Procédures Pratiques</h2>

<section id="procedures-menus" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 1 : Guide des Menus et Fenêtres</h3>
    <p class="text-gray-700 mb-6">Voici les procédures pas-à-pas pour réaliser les actions clés dans MS Project.</p>

    <div class="space-y-6">
        <!-- 1. Créer un nouveau projet -->
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
            <h4 class="text-lg font-bold text-gray-800 mb-2 border-b pb-2">1. Définir la date de début du projet</h4>
            <ol class="list-decimal ml-6 text-gray-700 space-y-1">
                <li>Allez dans l'onglet <strong>PROJET</strong>.</li>
                <li>Cliquez sur le bouton <strong>Informations sur le projet</strong>.</li>
                <li>Dans la fenêtre qui s'ouvre, saisissez la date dans le champ <strong>Date de début</strong>.</li>
                <li>Laissez "Prévisions à partir de" sur "Date de début du projet".</li>
                <li>Cliquez sur <strong>OK</strong>.</li>
            </ol>
        </div>

        <!-- 2. Créer un calendrier -->
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
            <h4 class="text-lg font-bold text-gray-800 mb-2 border-b pb-2">2. Créer et affecter un calendrier de travail</h4>
            <ol class="list-decimal ml-6 text-gray-700 space-y-1">
                <li>Allez dans l'onglet <strong>PROJET</strong> > <strong>Modifier les horaires de travail</strong>.</li>
                <li>Cliquez sur <strong>Créer un nouveau calendrier</strong>.</li>
                <li>Donnez un nom (ex: "Mon Calendrier") et choisissez "Faire une copie de Standard".</li>
                <li>Dans l'onglet <strong>Exceptions</strong>, saisissez les jours fériés (Nom + Date début/fin).</li>
                <li>Dans l'onglet <strong>Semaines de travail</strong>, cliquez sur "Détails" pour changer les horaires (ex: Samedi travaillé).</li>
                <li>Validez par <strong>OK</strong>.</li>
                <li><strong>Important :</strong> Retournez dans <strong>Informations sur le projet</strong> et sélectionnez votre nouveau calendrier dans la liste "Calendrier".</li>
            </ol>
        </div>

        <!-- 3. Saisir les tâches -->
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
            <h4 class="text-lg font-bold text-gray-800 mb-2 border-b pb-2">3. Saisir et structurer les tâches</h4>
            <ol class="list-decimal ml-6 text-gray-700 space-y-1">
                <li>Dans le tableau de gauche (Vue Diagramme de Gantt), saisissez les noms des tâches dans la colonne <strong>Nom de la tâche</strong>.</li>
                <li>Saisissez les durées dans la colonne <strong>Durée</strong> (ex: 3j, 1sem).</li>
                <li>Pour créer une hiérarchie (Phases), sélectionnez les sous-tâches.</li>
                <li>Allez dans l'onglet <strong>TÂCHE</strong> et cliquez sur la flèche verte vers la droite (<strong>Abaisser la tâche</strong>).</li>
            </ol>
        </div>

        <!-- 4. Lier les tâches -->
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
            <h4 class="text-lg font-bold text-gray-800 mb-2 border-b pb-2">4. Lier les tâches (Dépendances)</h4>
            <ol class="list-decimal ml-6 text-gray-700 space-y-1">
                <li>Sélectionnez les deux tâches à lier (Ctrl + Clic).</li>
                <li>Allez dans l'onglet <strong>TÂCHE</strong> et cliquez sur l'icône de chaîne (<strong>Lier les tâches sélectionnées</strong>).</li>
                <li>Pour modifier le type de lien (ex: ajouter un décalage), double-cliquez sur la flèche de lien dans le graphique.</li>
            </ol>
        </div>

        <!-- 5. Créer les ressources -->
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
            <h4 class="text-lg font-bold text-gray-800 mb-2 border-b pb-2">5. Créer la liste des ressources</h4>
            <ol class="list-decimal ml-6 text-gray-700 space-y-1">
                <li>Allez dans l'onglet <strong>AFFICHAGE</strong> > <strong>Tableau des ressources</strong>.</li>
                <li>Saisissez le <strong>Nom de la ressource</strong>.</li>
                <li>Choisissez le <strong>Type</strong> (Travail, Matériel, Coût).</li>
                <li>Saisissez le <strong>Taux standard</strong> (ex: 50 MAD/h).</li>
            </ol>
        </div>

        <!-- 6. Affecter les ressources -->
        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
            <h4 class="text-lg font-bold text-gray-800 mb-2 border-b pb-2">6. Affecter les ressources aux tâches</h4>
            <ol class="list-decimal ml-6 text-gray-700 space-y-1">
                <li>Retournez au <strong>Diagramme de Gantt</strong> (Onglet Affichage).</li>
                <li>Double-cliquez sur une tâche pour ouvrir "Informations sur la tâche".</li>
                <li>Allez dans l'onglet <strong>Ressources</strong>.</li>
                <li>Sélectionnez la ressource dans la liste et indiquez les unités (ex: 100% ou 50%).</li>
                <li>Validez par <strong>OK</strong>.</li>
            </ol>
        </div>

         <!-- 7. Enregistrer la référence -->
         <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
            <h4 class="text-lg font-bold text-gray-800 mb-2 border-b pb-2">7. Enregistrer la planification de référence</h4>
            <ol class="list-decimal ml-6 text-gray-700 space-y-1">
                <li>Une fois le planning validé, allez dans l'onglet <strong>PROJET</strong>.</li>
                <li>Cliquez sur <strong>Définir la planification de référence</strong> > <strong>Définir la planification de référence</strong>.</li>
                <li>Assurez-vous que "Planification de référence" (la première) est sélectionnée et "Projet entier".</li>
                <li>Cliquez sur <strong>OK</strong>.</li>
            </ol>
        </div>
    </div>
</section>
