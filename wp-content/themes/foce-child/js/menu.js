// Ajout d'un listener pour la transformation du menu en plein écran

document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const menuFullscreen = document.querySelector('#menu-fullscreen');
  
    // Ajout d'un gestionnaire d'événements pour le clic sur le bouton menu
    menuToggle.addEventListener('click', function() {
      // Basculer la classe 'active' pour ouvrir/fermer le menu
      menuToggle.classList.toggle('active');
      menuFullscreen.classList.toggle('active');
      
      // Modifier l'attribut 'aria-expanded' pour l'accessibilité
      const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
      menuToggle.setAttribute('aria-expanded', !isExpanded);
    });
  });