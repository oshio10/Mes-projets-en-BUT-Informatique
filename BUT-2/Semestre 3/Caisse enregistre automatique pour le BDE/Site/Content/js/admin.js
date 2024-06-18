function openTab(tabName) {
    // Masquer tous les onglets
    var i, tabcontent;
    tabcontent = document.getElementsByClassName("tabcontent");
    
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Afficher l'onglet sélectionné
    document.getElementById(tabName).style.display = "flex";
  }

  // Récupérer les boutons

