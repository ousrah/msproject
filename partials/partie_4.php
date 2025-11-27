<!-- =================================================================== -->
<!-- PARTIE 4 : GESTION DES RESSOURCES ET COÛTS -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6">Partie 4 : Gestion des Ressources et Coûts</h2>

<section id="gestion-ressources" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 1 : Définition des Ressources</h3>
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
        <p class="text-gray-700 mb-4">Avant d'affecter, il faut lister les ressources disponibles dans le <strong>Tableau des ressources</strong>.</p>
        <table class="min-w-full border-collapse border border-gray-300 text-sm mb-4">
            <tr class="bg-gray-100">
                <th class="border p-2">Type de Ressource</th>
                <th class="border p-2">Description</th>
                <th class="border p-2">Exemple</th>
            </tr>
            <tr>
                <td class="border p-2 font-bold">Travail</td>
                <td class="border p-2">Personnes ou équipements facturés au temps.</td>
                <td class="border p-2">Développeur (50 MAD/h), Chef de projet.</td>
            </tr>
            <tr>
                <td class="border p-2 font-bold">Matériel</td>
                <td class="border p-2">Consommables facturés à la quantité.</td>
                <td class="border p-2">Béton (m3), Papier (rame), Câbles (m).</td>
            </tr>
            <tr>
                <td class="border p-2 font-bold">Coût</td>
                <td class="border p-2">Frais divers sans quantité ni taux horaire.</td>
                <td class="border p-2">Billet d'avion, Frais d'hôtel.</td>
            </tr>
        </table>

        <div class="bg-blue-50 p-4 rounded border-l-4 border-blue-500 mt-4">
            <h5 class="font-bold text-blue-900 mb-2">👉 Comment faire ?</h5>
            <ul class="list-decimal ml-5 text-sm text-blue-800 space-y-2">
                <li>Allez dans l'onglet <strong>AFFICHAGE</strong> (ou TÂCHE).</li>
                <li>Cliquez sur le bouton déroulant tout à gauche (Gantt) et choisissez <strong>Tableau des ressources</strong>.</li>
                <li>Saisissez simplement le <strong>Nom</strong>, choisissez le <strong>Type</strong> et indiquez le <strong>Taux standard</strong> (Coût horaire).</li>
            </ul>
        </div>
    </div>
</section>

<section id="affectation-ressources" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 2 : Affectation des Ressources</h3>
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
        <p class="text-gray-700 mb-4">L'équation fondamentale de MS Project :</p>
        <div class="text-center font-mono text-xl bg-gray-100 p-4 rounded border border-gray-300 mb-4">
            Travail = Durée × Unités (Capacité)
        </div>
        <p class="text-gray-700 text-sm mb-4">
            Si j'affecte 2 personnes (200%) sur une tâche de 4 jours initialement prévue pour 1 personne, MS Project réduira automatiquement la durée à 2 jours (Pilotage par l'effort).
        </p>

        <div class="bg-blue-50 p-4 rounded border-l-4 border-blue-500 mt-4">
            <h5 class="font-bold text-blue-900 mb-2">👉 Comment faire ?</h5>
            <ul class="list-decimal ml-5 text-sm text-blue-800 space-y-2">
                <li><strong>Méthode 1 (Simple) :</strong> Dans le Diagramme de Gantt, colonne <em>Noms ressources</em> > Sélectionnez les ressources dans la liste déroulante.</li>
                <li><strong>Méthode 2 (Détaillée) :</strong> Double-cliquez sur la tâche > Onglet <strong>Ressources</strong> > Sélectionnez la ressource et saisissez le pourcentage dans <strong>Unités</strong> (ex: 50%).</li>
                <li><strong>Méthode 3 (Formulaire) :</strong> Onglet <strong>AFFICHAGE</strong> > Cochez <strong>Détails</strong> (Groupe <em>Fractionner l'affichage</em>) > Un formulaire apparaît en bas de l'écran pour affecter finement.</li>
            </ul>
        </div>
    </div>
</section>

<section id="optimisation" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 3 : Optimisation (Nivellement)</h3>
    <div class="bg-red-50 p-6 rounded-lg border-l-4 border-red-500 shadow-sm">
        <h4 class="text-xl font-bold text-red-900 mb-2">La Surutilisation</h4>
        <p class="text-red-800 mb-4">
            Si une ressource travaille plus que son calendrier ne le permet (ex: 12h/jour au lieu de 8h), elle apparaît en rouge (Bonhomme rouge).
        </p>
        <h5 class="font-bold text-red-900">Solutions :</h5>
        <ul class="list-disc ml-6 text-red-800 text-sm mb-4">
            <li>Décaler les tâches (Nivellement automatique ou manuel).</li>
            <li>Ajouter des ressources.</li>
            <li>Accepter les heures supplémentaires.</li>
        </ul>

        <div class="bg-white p-4 rounded border border-red-200 mt-4">
            <h5 class="font-bold text-red-900 mb-2">👉 Comment faire ?</h5>
            <ul class="list-decimal ml-5 text-sm text-red-800 space-y-2">
                <li><strong>Repérer les surcharges :</strong> Allez dans l'onglet <strong>AFFICHAGE</strong> > Cliquez sur <strong>Tableau des ressources</strong>. Les ressources surchargées sont en <strong>Rouge</strong>.</li>
                <li><strong>Nivellement automatique :</strong> Allez dans l'onglet <strong>RESSOURCE</strong> > Groupe <em>Nivellement</em> > Cliquez sur <strong>Niveler tout</strong>. (Attention, cela déplace les tâches et peut changer la date de fin du projet !).</li>
            </ul>
        </div>
    </div>
</section>

<section id="couts-projet" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 4 : Gestion des Coûts</h3>
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
        <p class="text-gray-700 mb-4">
            MS Project calcule automatiquement le coût du projet en fonction des ressources affectées et de leur taux horaire, ainsi que des coûts fixes.
        </p>
        <div class="bg-green-50 p-4 rounded border-l-4 border-green-500">
            <h5 class="font-bold text-green-900 mb-2">Visualiser les coûts</h5>
            <p class="text-sm text-green-800">
                Pour voir le budget total : Onglet <strong>PROJET</strong> > <strong>Informations sur le projet</strong> > Bouton <strong>Statistiques</strong>.
            </p>
        </div>
    </div>
</section>
