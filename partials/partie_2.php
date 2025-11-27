<!-- =================================================================== -->
<!-- PARTIE 2 : INITIALISATION ET PLANIFICATION DES TÂCHES -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6">Partie 2 : Initialisation et Planification des Tâches</h2>

<section id="interface-msp" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 1 : L'interface de MS Project</h3>
       <img src = "img/menu.png" alt = "Menu MS Project" class = "m-auto w-full zoomable" />
    
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
        <p class="text-gray-700 mb-4">L'interface utilise le "Ruban" (Ribbon) similaire aux autres outils Office.</p>
        
         <ul class="list-disc ml-6 text-gray-700 space-y-2">
            <li><strong>Onglet Tâche :</strong> Pour créer, lier, et formater les tâches.</li>
            <li><strong>Onglet Ressource :</strong> Pour gérer l'équipe et le matériel.</li>
            <li><strong>Onglet Projet :</strong> Pour les informations globales et les calendriers.</li>
            <li><strong>Onglet Rapport :</strong> Pour générer des rapports visuels et des tableaux de bord.</li>
            <li><strong>Onglet Affichage :</strong> Pour basculer entre Gantt, Tableau des ressources, etc.</li>
            <li><strong>La Chronologie (Timeline) :</strong> Vue synthétique en haut de l'écran.</li>
        </ul>
    </div>
</section>

<section id="parametrage-projet" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 2 : Paramétrage du Projet</h3>
    
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-4">2.1 Informations sur le projet</h4>
        <p class="text-gray-700 mb-4">La première étape consiste à définir la <strong>Date de début</strong> du projet. Par défaut, MS Project planifie à partir de cette date (Planning prévisionnel).</p>
        
        <div class="bg-blue-50 p-4 rounded border-l-4 border-blue-500 mt-4">
            <h5 class="font-bold text-blue-900 mb-2">👉 Comment faire ?</h5>
            <ul class="list-decimal ml-5 text-sm text-blue-800 space-y-2">
                <li>Allez dans l'onglet <strong>PROJET</strong>.</li>
                <li>Cliquez sur le bouton <strong>Informations sur le projet</strong>.</li>
                <li>Dans la fenêtre, saisissez la date dans le champ <strong>Date de début</strong>.</li>
                <li>Validez par <strong>OK</strong>.</li>
            </ul>
        </div>
        <img src = "img/infos.png" alt = "Informations sur le projet" class = "m-auto zoomable" />
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-4">2.2 Création d'un nouveau calendrier</h4>
        <p class="text-gray-700 mb-4">Le calendrier définit les heures ouvrées. MS Project propose 3 modèles de base (Standard, 24h, Nuit), mais il est recommandé de créer son propre calendrier pour le projet.</p>
        
        <div class="bg-blue-50 p-4 rounded border-l-4 border-blue-500 mt-4">
            <h5 class="font-bold text-blue-900 mb-2">👉 Comment faire ?</h5>
            <ul class="list-decimal ml-5 text-sm text-blue-800 space-y-2">
                <li>Allez dans l'onglet <strong>PROJET</strong> > <strong>Modifier les horaires de travail</strong>.</li>
                <li>Cliquez sur le bouton <strong>Créer un nouveau calendrier</strong> (en haut à droite).</li>
                <li>Donnez un nom (ex: "Calendrier Projet A") et cochez "Faire une copie de Standard".</li>
                <li>Validez par <strong>OK</strong>.</li>
            </ul>
        </div>
        <img src = "img/calendrier.png" alt = "Calendier ms project" class = "m-auto zoomable" />
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-4">2.3 Ajouter le samedi matin (9h - 14h)</h4>
        <p class="text-gray-700 mb-4">Par défaut, le samedi est chômé. Voici comment le rendre ouvré.</p>
        
        <div class="bg-blue-50 p-4 rounded border-l-4 border-blue-500 mt-4">
            <h5 class="font-bold text-blue-900 mb-2">👉 Comment faire ?</h5>
            <ul class="list-decimal ml-5 text-sm text-blue-800 space-y-2">
                <li>Toujours dans la fenêtre "Modifier les horaires de travail", assurez-vous que votre nouveau calendrier est sélectionné en haut.</li>
                <li>Allez dans l'onglet <strong>Semaines de travail</strong> (en bas).</li>
                <li>Cliquez sur la ligne "[Défaut]" puis sur le bouton <strong>Détails...</strong> (à droite).</li>
                <li>Dans la liste de gauche, sélectionnez <strong>Samedi</strong>.</li>
                <li>Cochez <strong>Définir des heures de travail spécifiques pour ces jours</strong>.</li>
                <li>Dans le tableau, saisissez : <strong>De : 09:00</strong> | <strong>À : 14:00</strong>.</li>
                <li>Validez par <strong>OK</strong> deux fois.</li>
            </ul>
        </div>
        <img src = "img/jours.png" alt = "Jours de la semaine en ms project" class = "m-auto zoomable" />
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-4">2.4 Appliquer le nouveau calendrier au projet</h4>
        <p class="text-gray-700 mb-4">Créer un calendrier ne suffit pas, il faut dire à MS Project de l'utiliser pour ce projet.</p>
        
        <div class="bg-blue-50 p-4 rounded border-l-4 border-blue-500 mt-4">
            <h5 class="font-bold text-blue-900 mb-2">👉 Comment faire ?</h5>
            <ul class="list-decimal ml-5 text-sm text-blue-800 space-y-2">
                <li>Allez dans l'onglet <strong>PROJET</strong> > <strong>Informations sur le projet</strong>.</li>
                <li>Dans la liste déroulante <strong>Calendrier</strong>, choisissez votre nouveau calendrier.</li>
                <li>Validez par <strong>OK</strong>.</li>
            </ul>
        </div>
        <img src = "img/infos.png" alt = "Informations sur le projet" class = "m-auto zoomable" />
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
        <h4 class="text-xl font-bold text-gray-800 mb-4">2.5 Changer la devise (MAD)</h4>
        <p class="text-gray-700 mb-4">Pour travailler avec des Dirhams Marocains au lieu de l'Euro ou du Dollar.</p>
        
        <div class="bg-blue-50 p-4 rounded border-l-4 border-blue-500 mt-4">
            <h5 class="font-bold text-blue-900 mb-2">👉 Comment faire ?</h5>
            <ul class="list-decimal ml-5 text-sm text-blue-800 space-y-2">
                <li>Cliquez sur l'onglet <strong>FICHIER</strong> (tout à gauche) > <strong>Options</strong>.</li>
                <li>Dans la fenêtre, cliquez sur l'onglet <strong>Affichage</strong> (à gauche).</li>
                <li>En bas, dans la section "Options de devise pour ce projet" :
                    <ul class="list-disc ml-5 mt-1">
                        <li><strong>Symbole :</strong> Saisissez "MAD" ou "DH".</li>
                        <li><strong>Placement :</strong> Choisissez "100 MAD" (après le nombre).</li>
                    </ul>
                </li>
                <li>Validez par <strong>OK</strong>.</li>
            </ul>
        </div>
        <img src = "img/options.png" alt = "Options ms project" class = "m-auto zoomable" />
    </div>
</section>

<section id="saisie-taches" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 3 : Saisie et Structuration des Tâches</h3>

     <img src = "img/gantt.png" alt = "Options ms project" class = "m-auto zoomable" />
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-4">3.1 Mode de Tâche (Auto vs Manuel)</h4>
        <p class="text-gray-700 mb-4">
            MS Project propose deux modes de planification. Il est <strong>fortement recommandé</strong> d'utiliser le mode <strong>Automatique</strong>.
        </p>
        <ul class="list-disc ml-6 text-gray-700 space-y-2 mb-4">
            <li><strong>Planification Manuelle (Punaise) :</strong> Les dates ne bougent pas, même si les liens changent. Utile pour figer des dates, mais dangereux pour le calcul dynamique.</li>
            <li><strong>Planification Automatique (Rectangle bleu) :</strong> MS Project calcule les dates en fonction des liens, durées et calendriers.</li>
        </ul>
        <div class="bg-blue-50 p-4 rounded border-l-4 border-blue-500 mt-4">
            <h5 class="font-bold text-blue-900 mb-2">👉 Comment faire ?</h5>
            <p class="text-sm text-blue-800">En bas à gauche de la fenêtre, cliquez sur "Nouvelles tâches : Planifiées manuellement" et changez-le en <strong>"Nouvelles tâches : Planifiées automatiquement"</strong>.</p>
        </div>
      <img src = "img/auto.png" alt = "Tâches automatiques ms project" class = "m-auto zoomable" />

    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
        <h4 class="text-xl font-bold text-gray-800 mb-2">3.2 WBS (Work Breakdown Structure)</h4>
        <p class="text-gray-700 mb-4">
            Il est essentiel de structurer le projet en phases et sous-tâches. Dans MS Project, on utilise l'indentation (Abaisser/Hausser la tâche) pour créer cette hiérarchie.
        </p>
        <ul class="list-disc ml-6 text-gray-700 space-y-1 mb-4">
            <li><strong>Tâche Récapitulative :</strong> Tâche parente (en gras) qui résume la durée et le coût de ses sous-tâches.</li>
            <li><strong>Jalon (Milestone) :</strong> Tâche de durée 0 jour, marquant une étape clé (ex: "Validation Client").</li>
        </ul>

        <div class="bg-blue-50 p-4 rounded border-l-4 border-blue-500 mt-4">
            <h5 class="font-bold text-blue-900 mb-2">👉 Comment faire ?</h5>
            <ul class="list-decimal ml-5 text-sm text-blue-800 space-y-2">
                <li><strong>Créer une phase (Indenter) :</strong> Sélectionnez la ou les tâches à mettre en sous-tâche > Allez dans l'onglet <strong>TÂCHE</strong> > Groupe <em>Planifier</em> > Cliquez sur l'icône <strong>Abaisser la tâche</strong> (Flèche verte vers la droite).</li>
                <li><strong>Créer un Jalon :</strong> Saisissez "0 jour" dans la colonne <em>Durée</em> d'une tâche OU Double-cliquez sur la tâche > Onglet <em>Avancées</em> > Cochez <strong>Marquer la tâche en tant que jalon</strong>.</li>
            </ul>
        </div>
              <img src = "img/jalon.png" alt = "jalons ms project" class = "m-auto zoomable" />

    </div>
</section>

<section id="ordonnancement" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-blue-800">Chapitre 4 : Ordonnancement (Prédécesseurs)</h3>
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 mb-6">
      <img src = "img/lien.png" alt = "liens ms project" class = "m-auto zoomable" />
        
    <h4 class="text-xl font-bold text-gray-800 mb-4">Les 4 types de liaisons</h4>
        <div class="grid md:grid-cols-2 gap-4">
            <div class="border p-3 rounded"><strong>Fin à Début (FD) :</strong> B ne commence que si A est fini. (Standard).
            <br>   
               <img src = "img/fd.png" alt = "lien fd fin à début ms project" class = "m-auto zoomable" />
</div>
            <div class="border p-3 rounded"><strong>Début à Début (DD) :</strong> B commence en même temps que A.
        <br>   
               <img src = "img/dd.png" alt = "lien dd début à début ms project" class = "m-auto zoomable" />
            </div>
            <div class="border p-3 rounded"><strong>Fin à Fin (FF) :</strong> B ne peut pas finir tant que A n'est pas fini.
        <br>   
               <img src = "img/ff.png" alt = "lien ff fin à fin ms project" class = "m-auto zoomable" />
            </div>
            <div class="border p-3 rounded"><strong>Début à Fin (DF) :</strong> Rare. B ne peut pas finir tant que A n'a pas commencé.
        <br>   
               <img src = "img/fd.png" alt = "lien fd fin à début ms project" class = "m-auto zoomable" />
            </div>
        </div>
    </div>
    
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
        <h4 class="text-xl font-bold text-gray-800 mb-4">Lag et Lead (Décalages)</h4>
        <p class="text-gray-700 mb-4">
            On peut ajouter un délai positif (Lag) ou négatif (Lead) sur un lien.
            <br><em>Exemple :</em> "Peindre le mur" (FD + 2 jours de séchage) -> "Accrocher les tableaux".
        </p>
        
        <div class="bg-blue-50 p-4 rounded border-l-4 border-blue-500 mt-4">
            <h5 class="font-bold text-blue-900 mb-2">👉 Comment faire ?</h5>
            <ul class="list-decimal ml-5 text-sm text-blue-800 space-y-2">
                <li><strong>Lier des tâches :</strong> Sélectionnez les tâches (Ctrl + Clic) > Onglet <strong>TÂCHE</strong> > Groupe <em>Planifier</em> > Cliquez sur l'icône <strong>Lier les tâches sélectionnées</strong> (Chaîne).</li>
                <li><strong>Ajouter un décalage :</strong> Double-cliquez sur la flèche de lien directement sur le diagramme de Gantt > Une fenêtre s'ouvre > Saisissez une valeur (ex: "2j" ou "-1j") dans le champ <strong>Retard</strong>.</li>
            </ul>
        </div>
        <br>   
               <img src = "img/decalage.png" alt = "décalage des liens ms project" class = "m-auto zoomable" />
    </div>
</section>
