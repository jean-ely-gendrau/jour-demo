// Fonction asynchrone pour récupérer les utilisateurs depuis un fichier JSON
async function afficherUsers() {
  // Requête HTTP pour récupérer le fichier users.json
  const reponse = await fetch("./users.json");

  // Conversion de la réponse en objet JavaScript
  const users = await reponse.json();

  // Retourne les utilisateurs (sous forme de Promise)
  return users;

}

// Appel de la fonction - elle retourne une Promise
const users = afficherUsers();

// X console.log(users);
// ⚠️ Cette ligne afficherait [Promise] car la fonction est asynchrone

// Utilisation de .then() pour attendre la résolution de la Promise
users.then(result => {
  console.log("ok"); // Message de confirmation
  console.log(result); // Affiche les données une fois la Promise résolue
});