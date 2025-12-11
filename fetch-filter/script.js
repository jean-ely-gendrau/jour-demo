// Fonction asynchrone pour récupérer les utilisateurs
async function afficherUsers() {
  // Requête HTTP pour récupérer le fichier users.json
  const reponse = await fetch("./users.json");

  // Conversion de la réponse JSON en objet JavaScript
  const users = await reponse.json();

  // Retourne le tableau d'utilisateurs
  return users;

}

// Fonction asynchrone pour filtrer les utilisateurs
async function filterUsers(){
    // Récupération du tableau d'utilisateurs (await car afficherUsers est async)
    const users = await afficherUsers();

    // Filtrage : ne garde que les utilisateurs ayant 28 ans ou plus
    const filter = users.filter( (users) => users.age >= 28);

    // Affichage du tableau filtré complet
    console.log(filter);

    // Affichage du premier utilisateur du tableau filtré
    console.log(filter[0]);

    // Affichage de l'âge du premier utilisateur
    console.log(filter[0].age);

    // Modification de l'âge du premier utilisateur
    filter[0].age = 40;

    // Affichage du premier utilisateur après modification
    console.log("user:0", filter[0]);


}

// Appel de la fonction pour exécuter le filtrage
filterUsers();