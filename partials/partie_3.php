<!-- =================================================================== -->
<!-- PARTIE 3 : ANALYSE DU RÉSEAU ET OPTIMISATION TEMPORELLE -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6">Partie 3 : Analyse du Réseau et Optimisation Temporelle</h2>

<section id="pert-manuel" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 1 : Le Diagramme de PERT Manuel</h3>
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 mb-6">
        
        <h4 class="text-xl font-bold text-gray-800 mb-4">Comment créer un diagramme PERT ? Les étapes.</h4>
        <p class="text-gray-700 mb-4">
            Comment suivre l'avancement d'un projet, organiser et coordonner l’enchaînement des tâches ? Il s'agit de la finalité de la méthode PERT à utiliser de concert avec un diagramme de Gantt. Un outil particulièrement précieux pour des projets complexes où des tâches sont interdépendantes avec des chemins parallèles. L'objectif étant de maîtriser le délai de réalisation.
        </p>
        <p class="text-gray-700 mb-4">
            Le nom représente l'acronyme de "Program Evaluation and Review Technic". Il s'agit d'un outil visuel d'ordonnancement et de planification de projet.
        </p>
        <p class="text-gray-700 mb-4">
            Son but est d'organiser les tâches sous la forme d'un réseau afin de faciliter la gestion du projet. Cette représentation graphique permet d'identifier les connexions entre les différentes tâches, les temps d'exécution, les interdépendances.
        </p>
        <div class="bg-blue-50 p-4 rounded border-l-4 border-blue-500 mb-6">
            <p class="text-sm text-blue-800">
                <strong>A savoir :</strong> le PERT est proche de la méthode du chemin critique (Critical Path Method - CPM) qui a pour objectif d'identifier le chemin permettant le temps de réalisation le plus court possible, non compressible.
            </p>
        </div>

        <h4 class="text-xl font-bold text-gray-800 mb-4">Pourquoi utiliser le Réseau P.E.R.T. ?</h4>
        <p class="text-gray-700 mb-2">Cet outil facilite la maîtrise du projet. En effet, il permet de :</p>
        <ul class="list-disc ml-6 text-gray-700 space-y-1 mb-6">
            <li>Donner une vue réelle de la livraison du projet,</li>
            <li>Anticiper l'affectation des ressources humaines et financières, des moyens techniques,</li>
            <li>Identifier les tâches à traiter plus rapidement si l'on souhaite livrer le projet plus tôt,</li>
            <li>Repérer les tâches à traiter simultanément (travail en parallèle) et les tâches antérieures,</li>
            <li>Identifier les tâches critiques et le non-critique pour tenir les délais - permet par exemple de redéployer des ressources si nécessaire,</li>
            <li>Préparer la construction d'un planning Gantt.</li>
            <li>Affecter des responsabilités (voir la méthode RACI).</li>
        </ul>

        <h4 class="text-xl font-bold text-gray-800 mb-4">Représentation graphique du diagramme</h4>
        <p class="text-gray-700 mb-4">
            Le diagramme s'organise sous forme de réseau. Il possède un début et une fin, des étapes et des tâches.
        </p>
        <p class="text-gray-700 mb-4">
            Les tâches sont représentées par des flèches encadrées par 2 étapes (ou nœuds). Chaque étape possède une date au plus tôt et une date au plus tard.
        </p>
        
        <div class="mb-6">
            <img src="img/pert1.png" alt="Définition du réseau PERT" class="m-auto zoomable border rounded shadow-sm" />
            <p class="text-center text-sm text-gray-500 mt-2">Définition du réseau PERT</p>
        </div>

        <div class="bg-yellow-50 p-4 rounded border-l-4 border-yellow-500 mb-6">
            <p class="text-sm text-yellow-800">
                <strong>A noter :</strong> pour l'ensemble des explications, nous avons utilisé des nombres de jours au lieu de dates. Il est ainsi plus facile de comprendre la logique. Une date au plus tôt de 5 jours correspond à 5 jours après le début du projet.
            </p>
        </div>

        <h4 class="text-xl font-bold text-gray-800 mb-4">Les étapes pour créer un PERT</h4>
        
        <h5 class="font-bold text-blue-900 mt-4 mb-2">1. Préparez les tâches</h5>
        <p class="text-gray-700 mb-2">
            Commencez par lister les tâches - Soyez exhaustif en restant sur un niveau de détail gérable. Vous pouvez utiliser la méthode du brainstorming pour ne rien oublier et découper le projet avec le WBS (Work Breakdown Structure).
        </p>

        <h5 class="font-bold text-blue-900 mt-4 mb-2">2. Estimez leur durée et leur(s) antécédent(s)</h5>
        <p class="text-gray-700 mb-4">
            Pour chaque tâche, évaluer le temps nécessaire pour leur traitement.
        </p>
        
        <div class="mb-6 overflow-x-auto">
            <table class="min-w-full border-collapse border border-gray-300 text-sm">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border p-2">Tâche</th>
                        <th class="border p-2">Durée</th>
                        <th class="border p-2">Antécédent(s)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td class="border p-2 text-center">A</td><td class="border p-2 text-center">2</td><td class="border p-2 text-center">-</td></tr>
                    <tr><td class="border p-2 text-center">B</td><td class="border p-2 text-center">8</td><td class="border p-2 text-center">-</td></tr>
                    <tr><td class="border p-2 text-center">C</td><td class="border p-2 text-center">5</td><td class="border p-2 text-center">A</td></tr>
                    <tr><td class="border p-2 text-center">D</td><td class="border p-2 text-center">2</td><td class="border p-2 text-center">B</td></tr>
                    <tr><td class="border p-2 text-center">E</td><td class="border p-2 text-center">6</td><td class="border p-2 text-center">B</td></tr>
                    <tr><td class="border p-2 text-center">F</td><td class="border p-2 text-center">5</td><td class="border p-2 text-center">E</td></tr>
                    <tr><td class="border p-2 text-center">G</td><td class="border p-2 text-center">3</td><td class="border p-2 text-center">A,D</td></tr>
                </tbody>
            </table>
            <p class="text-center text-sm text-gray-500 mt-2">Exemple de tableau d'antériorités</p>
        </div>

        <div class="bg-gray-50 p-4 rounded mb-6">
            <p class="text-gray-700 font-semibold mb-2">L'estimation à 3 points</p>
            <p class="text-gray-700 text-sm mb-2">
                Cette formule vous donne une durée moyenne en fonction d'une estimation que vous jugez la plus probable, une seconde optimiste et une dernière, pessimiste.
            </p>
            <div class="text-center font-mono bg-white p-2 border rounded mb-2">
                Estimation = (a + 4m + p) / 6
            </div>
            <ul class="list-disc ml-6 text-sm text-gray-600">
                <li>a = estimation optimiste</li>
                <li>m = probable (le "m" vient de "Most likely")</li>
                <li>p = pessimiste</li>
            </ul>
        </div>

        <h5 class="font-bold text-blue-900 mt-4 mb-2">3. Construisez le réseau en reliant les tâches entre elles</h5>
        <p class="text-gray-700 mb-4">
            Reprenez le tableau avec la liste de tâches et montez le réseau en utilisant les liens de dépendance (les antécédents). Indiquez sur le graphique la désignation des tâches et leur durée comme défini précédemment.
        </p>
        
        <div class="mb-6">
            <img src="img/pert3.png" alt="Comment construire un P.E.R.T ?" class="m-auto zoomable border rounded shadow-sm" />
            <p class="text-center text-sm text-gray-500 mt-2">Comment construire un P.E.R.T ?</p>
        </div>

        <p class="text-gray-700 mb-6 italic">
            La tâche en pointillés est qualifiée de fictive. Nous verrons plus bas comment la traiter.
        </p>

        <h5 class="font-bold text-blue-900 mt-4 mb-2">4. Indiquez les dates au plus tôt</h5>
        <p class="text-gray-700 mb-2">
            Prenez la première étape (ici "1"), ajoutez la date au plus tôt de l'étape précédente à la durée de la tâche qui la concerne : <strong>0 + 2 (tâche A) = 2</strong>.
        </p>
        <p class="text-gray-700 mb-4">
            Faites de même pour l'ensemble des tâches. Par exemple pour l'étape 4 : <strong>8 + 6 (tâche E) = 14</strong>.
        </p>
        
        <div class="mb-6">
            <img src="img/pert4.png" alt="Le Diagramme PERT" class="m-auto zoomable border rounded shadow-sm" />
            <p class="text-center text-sm text-gray-500 mt-2">Le Diagramme PERT</p>
        </div>

        <p class="text-gray-700 mb-4">
            Lorsque plusieurs tâches convergent vers une même étape (ici l'étape de Fin), retenez comme date au plus tôt, le <strong>nombre de jours le plus grand</strong> des différentes possibilités.
        </p>
        <ul class="list-disc ml-6 text-gray-700 text-sm mb-4">
            <li>Le chemin passant par la tâche C donne une date au plus tôt de 7 jours</li>
            <li>par la tâche G, 13 jours</li>
            <li>par F, 19 jours</li>
        </ul>
        <p class="text-gray-700 mb-6">
            On retient donc <strong>19 jours</strong>, car le projet se finira au plus tôt 19 jours après son début.
        </p>

        <div class="bg-gray-100 p-4 rounded mb-6 border-l-4 border-gray-500">
            <h6 class="font-bold text-gray-800 mb-2">Le cas de la tâche fictive</h6>
            <p class="text-gray-700 text-sm">
                Concernant la G, elle possède 2 antérieurs D et A. Comme une tâche ne peut être représentée que par une seule flèche, il est nécessaire de créer une tâche fictive. Comme la D possède la date au plus tôt la plus élevée, on crée à son extrémité de façon conventionnelle l'étape 3 - puis on crée une tâche fictive A' avec une durée de 0 reliant les étapes 1 et 3.
            </p>
        </div>

        <h5 class="font-bold text-blue-900 mt-4 mb-2">5. Renseignez les dates au plus tard</h5>
        <p class="text-gray-700 mb-4">
            Parcourez le chemin inverse pour calculer les dates au plus tard. Partez de la dernière étape et indiquez la date au plus tard égale à la date au plus tôt, ici 19 jours. Puis remontez le graphe en retranchant cette fois à la date au plus tard de l'étape en question, la durée de la tâche qui la précède pour trouver la date au plus tard de l'étape positionnée en amont.
        </p>
        <p class="text-gray-700 mb-4">
            <em>Exemple pour l'étape 1 :</em> 19 jours (nœud final) - 5 jours (tâche C) = 14 jours.
        </p>
        
        <div class="mb-6">
            <img src="img/pert5.png" alt="Planning PERT : dates au plus tard" class="m-auto zoomable border rounded shadow-sm" />
            <p class="text-center text-sm text-gray-500 mt-2">Planning PERT : dates au plus tard</p>
        </div>

        <p class="text-gray-700 mb-6">
            Lorsque 2 tâches ont pour origine la même étape, calculez les dates dans les 2 cas et retenez la <strong>date la plus petite</strong>. Procédez de la même manière avec les tâches fictives.
            <br><em>Exemple pour l'étape 2 :</em> en passant par la tâche D, la date au plus tard est de 14, alors que via l'étape E, nous avons 8. Nous retenons donc 8.
        </p>

        <h5 class="font-bold text-blue-900 mt-4 mb-2">6. Calculez les marges des tâches</h5>
        <p class="text-gray-700 mb-4">
            Ces marges sont des degrés de liberté qui permettent d'absorber des retards. Elles assurent la flexibilité du projet.
        </p>
        
        <div class="grid md:grid-cols-2 gap-6 mb-6">
            <div class="bg-white border p-4 rounded">
                <h6 class="font-bold text-gray-800 mb-2">Marge Totale</h6>
                <p class="text-sm text-gray-700 mb-2">
                    Le retard que peut prendre la réalisation d'une tâche sans impacter la date de fin du projet.
                </p>
                <div class="bg-gray-100 p-2 rounded text-xs font-mono">
                    Date au plus tard étape suivante - Durée tâche - Date au plus tôt étape précédente
                </div>
                <p class="text-xs text-gray-500 mt-2">Exemple tâche D : 16 - 2 - 8 = 6 jours.</p>
            </div>
            <div class="bg-white border p-4 rounded">
                <h6 class="font-bold text-gray-800 mb-2">Marge Libre</h6>
                <p class="text-sm text-gray-700 mb-2">
                    Le retard que peut prendre la réalisation d'une tâche sans impact sur la date au plus tôt des tâches suivantes.
                </p>
                <div class="bg-gray-100 p-2 rounded text-xs font-mono">
                    Date au plus tôt étape suivante - Durée tâche - Date au plus tôt étape précédente
                </div>
                <p class="text-xs text-gray-500 mt-2">Note : Marge libre <= Marge totale.</p>
            </div>
        </div>

        <div class="mb-6 overflow-x-auto">
            <table class="min-w-full border-collapse border border-gray-300 text-sm">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border p-2">Tâche</th>
                        <th class="border p-2">Marge libre</th>
                        <th class="border p-2">Marge totale</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td class="border p-2 text-center">A</td><td class="border p-2 text-center">0</td><td class="border p-2 text-center">12</td></tr>
                    <tr><td class="border p-2 text-center">C</td><td class="border p-2 text-center">12</td><td class="border p-2 text-center">12</td></tr>
                    <tr><td class="border p-2 text-center">B</td><td class="border p-2 text-center">0</td><td class="border p-2 text-center">0</td></tr>
                    <tr><td class="border p-2 text-center">D</td><td class="border p-2 text-center">0</td><td class="border p-2 text-center">6</td></tr>
                    <tr><td class="border p-2 text-center">G</td><td class="border p-2 text-center">6</td><td class="border p-2 text-center">6</td></tr>
                    <tr><td class="border p-2 text-center">E</td><td class="border p-2 text-center">0</td><td class="border p-2 text-center">0</td></tr>
                    <tr><td class="border p-2 text-center">F</td><td class="border p-2 text-center">0</td><td class="border p-2 text-center">0</td></tr>
                </tbody>
            </table>
            <p class="text-center text-sm text-gray-500 mt-2">Calcul des marges dans l'exemple</p>
        </div>

        <h5 class="font-bold text-blue-900 mt-4 mb-2">7. Définition du chemin critique</h5>
        <p class="text-gray-700 mb-4">
            Il s'agit du chemin passant par les tâches dont la marge totale est nulle. Ce tracé indique le délai incompressible pour réaliser le projet.
        </p>
        
        <div class="mb-6">
            <img src="img/pert7.png" alt="Réseau PERT : chemin critique" class="m-auto zoomable border rounded shadow-sm" />
            <p class="text-center text-sm text-gray-500 mt-2">Réseau PERT : chemin critique</p>
        </div>

        <p class="text-gray-700">
            Une fois le PERT terminé, il est conseillé de construire un planning Gantt pour faciliter la visualisation et la gestion au quotidien.
            <br><em>A noter que ce diagramme ne se monte pas une fois pour toutes en début de projet. Il demande à être actualisé en fonction des événements (retards...).</em>
        </p>

    </div>
</section>

<section id="analyse-gantt" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 2 : Analyse dans MS Project (Chemin Critique)</h3>
   
   
   <img src="img/reseaux.png" alt="Réseau PERT : chemin critique" class="m-auto zoomable border rounded shadow-sm" />
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
        <h4 class="text-xl font-bold text-gray-800 mb-4">Le Chemin Critique</h4>
        <p class="text-gray-700 mb-4">
            C'est la séquence de tâches qui détermine la durée totale du projet. Si une tâche critique prend du retard, tout le projet est en retard. (Marge Totale = 0).
        </p>

        <div class="bg-red-50 p-4 rounded border-l-4 border-red-500 mt-4">
            <h5 class="font-bold text-red-900 mb-2">👉 Comment l'afficher dans MS Project ?</h5>
            <ul class="list-decimal ml-5 text-sm text-red-800 space-y-2">
                <li>Allez dans l'onglet <strong>FORMAT</strong> (Outils Diagramme de Gantt).</li>
                <li>Cochez la case <strong>Tâches critiques</strong>.</li>
                <li>Les barres des tâches critiques deviennent <strong>Rouges</strong>.</li>
            </ul>
        </div>
    </div>
</section>
