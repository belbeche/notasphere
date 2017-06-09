function menu(bouton, id) {
        //on récupère ta div à "toggler"
    var nav = document.getElementById(id),
        //on récupère son état à l'instant initial
        //la création d'un nouveau String est nécessaire car son état va être modifié dans la boucle
        avant = new String(div.style.display),
        //on récupère la liste de tous les éléments soumis à affichage conditionnel
        showElements = document.getElementsByClassName("taclasse");
  
    //pour chacun des élements, on le cache (plutot que de vérifier si l'element était deja affiché)
    for(var i = 0; i < showElements.length; i++) {
        showElements[i].style.display = "none";
    }
  
    //Si le block n'était précement pas affiché, alors on l'affiche
    //Si avant le clic il etait affiché, alors il reste caché (comportement toggle conservé)
    if(previousState=="none") {
        div.style.display = "block";
    }