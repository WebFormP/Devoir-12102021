/* Cette fonction va servir de dÃ©clencheur Ã  notre transition */
/* L'Ã©tat initial correspond Ã  une classe "barre"             */
/* L'Ã©tat final correspond aux classes "barre go"             */
/*                                                            */
/* Chaque fois qu'on appuie sur le bouton, on bascule d'un    */
/* Ã©tat Ã  l'autre, provoquant le lancement de la transition   */

function toggle() {
    "use strict";
    
    /* Mettre dans un variable x, le menu (balise nav) */
    var x = document.querySelector(".menu");

    if (x.className === "menu") {
        x.className += " affiche";
    } else {
        x.className = "menu";
    }

}