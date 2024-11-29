// Ajout d'un listener pour la transformation du menu en plein écran

document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const menuFullscreen = document.querySelector('#menu-fullscreen');
    const menuLinks = document.querySelectorAll('#menu-fullscreen a'); // Sélectionne tous les liens du menu

  
    // Ajout d'un gestionnaire d'événements pour le clic sur le bouton menu
    menuToggle.addEventListener('click', function() {
      // Basculer la classe 'active' pour ouvrir/fermer le menu
      menuToggle.classList.toggle('active');
      menuFullscreen.classList.toggle('active');
      
      // Modifier l'attribut 'aria-expanded' pour l'accessibilité
      const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
      menuToggle.setAttribute('aria-expanded', !isExpanded);

      // Fermer le menu lorsqu'un lien est cliqué
      menuLinks.forEach(link => {
        link.addEventListener('click', () => {
          menuToggle.classList.remove('active');  // Retirer la classe active du bouton burger
          menuFullscreen.classList.remove('active');  // Retirer la classe active du menu
        }); 
      });
    });
  });