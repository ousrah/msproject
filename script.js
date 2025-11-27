
document.addEventListener('DOMContentLoaded', function () {
    // === SCRIPT POUR LE BOUTON COPIER ===
    document.querySelectorAll('.copy-btn').forEach(button => {
        button.addEventListener('click', () => {
            const codeBlock = button.previousElementSibling;
            const code = codeBlock.innerText;

            navigator.clipboard.writeText(code).then(() => {
                const originalText = button.innerText;
                button.innerText = 'Copié !';
                setTimeout(() => {
                    button.innerText = originalText;
                }, 2000);
            }).catch(err => {
                console.error('Erreur de copie : ', err);
            });
        });
    });

    // === SCRIPT POUR AFFICHER/MASQUER LA SOLUTION ===
    document.querySelectorAll('.solution-toggle').forEach(button => {
        button.addEventListener('click', () => {
            const solutionContent = button.nextElementSibling;
            if (solutionContent.style.display === 'block') {
                solutionContent.style.display = 'none';
                button.innerText = 'Voir la solution';
            } else {
                solutionContent.style.display = 'block';
                button.innerText = 'Masquer la solution';
            }
        });
    });

    // === SCRIPT POUR LE ZOOM IMAGE (MODAL) ===
    // Création dynamique de la modale si elle n'existe pas
    if (!document.getElementById('imageModal')) {
        const modal = document.createElement('div');
        modal.id = 'imageModal';
        modal.className = 'modal';
        modal.innerHTML = `
            <span class="modal-close">&times;</span>
            <img class="modal-content" id="img01">
        `;
        document.body.appendChild(modal);

        const modalImg = document.getElementById("img01");
        const closeBtn = document.getElementsByClassName("modal-close")[0];

        // Fermer la modale au clic sur la croix
        closeBtn.onclick = function () {
            modal.style.display = "none";
        }

        // Fermer la modale au clic en dehors de l'image
        modal.onclick = function (event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        }
    }

    // Ajout de l'événement click sur toutes les images avec la classe "zoomable"
    document.querySelectorAll('.zoomable').forEach(img => {
        img.addEventListener('click', function () {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById("img01");
            modal.style.display = "block";
            modalImg.src = this.src;
        });
    });
});
