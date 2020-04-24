# sgbdRouter

//FAIRE MARCHER LE PROGRAMME QUE VOUS AVEZ FAIT AVEC LE ROUTEUR ICI PRESENT

//ATTENTION : permettre au routeur d'enlever de l'url les params get (car déjà récupéré avec $get)

//1 Venir inclure les vues nécessaires dans un dossier views

//2 Inclure vos objets métiers (entities) et DAO dans un dossier models /entities /dao

//3 Vérifier que vos controlleurs instancient correctement vos DAO

//4 Gérer la requête reçue par votre controlleur pour qu'il dispatch cela correctement à la méthode du dao correspondante

/*
Par exemple 
/$controller => fetchAll()
/$controller => fetch($pk)
...
...
*/


//4bis Améliorer votre classe Controller pour qu'elle dispose d'attributs / méthodes intéressantes (par exemple un attribut DAO qui reprend le nom du DAO correspondant, etc) Ne pas avoir toute la logique dans le __construct


//5 Inclure correctement les vues correspondantes dans vos méthodes du controlleur
/* Exemple : si on vient sur la route /index => afficher le tableau des produits, donc inclure la table_view */

//6 Great success

//7 Amélioration possible : modifier les routes appellées par le formulaire 
/* Exemple : 
/products/delete => delete l'id recue en post
/products/update => update le product avec les infos recues

*/
