//console.log('test');

//Afficher le header
let buttonMenu = document.getElementById('button-menu');
let menu = document.getElementById('menu');

buttonMenu.addEventListener("click", function(){

    //console.log('test2');
    
    if(menu.style.right === '-440px' || menu.style.left === ''){
        menu.style.right = '0';
    }
})

// Fermer le menu lorsque l'utilisateur clique en dehors du menu
document.addEventListener("click", function(event) {
    // Vérifie si le clic s'est produit en dehors du menu et du bouton d'ouverture
    if (!menu.contains(event.target) && !buttonMenu.contains(event.target)) {
        menu.style.right = '-440px'; // Ferme le menu
    }
});