// Fonction asynchrone pour récupérer et afficher les utilisateurs
async function afficherUsers() {
  // Étape 1 : Effectuer une requête HTTP pour récupérer le fichier users.json
  const reponse = await fetch("./users.json");

  // Étape 2 : Convertir la réponse en objet JavaScript (parsing JSON)
  const users = await reponse.json();

  // Étape 3 : Afficher les utilisateurs dans la console
  console.log(users);

}

// Appel de la fonction pour exécuter le code
afficherUsers();