/* Cette fonction va servir de déclencheur à notre transition   */
/* L'état initial correspond à la classe "menu_hamburger"       */
/* L'état final correspond aux classes "menu_hamburger affiche" */
/*                                                              */
/* Chaque fois qu'on appuie sur le bouton, on bascule d'un      */
/* état à l'autre, provoquant le lancement de la transition     */

function toggle() {
    "use strict";
    
    /* Mettre dans un variable x, le menu hamburger (balise nav) */
    var x = document.querySelector(".menu_hamburger");

    if (x.className === "menu_hamburger") {
        x.className += " affiche";
    } else {
        x.className = "menu_hamburger";
    }
}