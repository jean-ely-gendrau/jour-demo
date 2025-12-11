// Fonction utilitaire pour créer une pause dans le code
// Paramètre : ms = nombre de millisecondes à attendre
function attendre(ms) {
  // Retourne une Promise qui se résout après un délai
  // Permet d'utiliser : await attendre(2000) pour faire une pause asynchrone
  return new Promise(resolve => setTimeout(resolve, ms));
}

// Fonction asynchrone pour récupérer les utilisateurs
async function getUsers() {
  // Requête HTTP pour récupérer les utilisateurs
  const reponse = await fetch("https://jsonplaceholder.typicode.com/users");

  // Conversion JSON → Objet JavaScript
  const users = await reponse.json();

  // Retour des utilisateurs
  return users;
}

// Fonction asynchrone pour récupérer les commentaires
async function getComments() {
  // Requête HTTP pour récupérer les commentaires
  const reponse = await fetch("https://jsonplaceholder.typicode.com/comments");

  // Conversion JSON → Objet JavaScript
  const comments = await reponse.json();

  // Pause artificielle de 6 secondes pour simuler un traitement lourd
  await attendre(1000);

  // Retour des commentaires après le délai
  return comments;
}

/* -------------------------------------------------------------------------- */
/*                   🔹 VERSION 1 : EXÉCUTION EN SÉRIE 🔹                     */
/* -------------------------------------------------------------------------- */

async function getAll() {
  console.time("⏳ Temps getAll (série)");

  // Étape 1 : attendre la fin de getUsers()
  const users = await getUsers();

  // Étape 2 : attendre la fin de getComments()
  const comments = await getComments();

  // Affichage final (les deux Promises sont résolues)
  console.log("Utilisateurs :", users);
  console.log("Commentaires :", comments);

  console.timeEnd("⏳ Temps getAll (série)");
}

/* -------------------------------------------------------------------------- */
/*                 🔹 VERSION 2 : EXÉCUTION EN PARALLÈLE 🔹                   */
/* -------------------------------------------------------------------------- */

async function getAllPromise() {
  console.time("⏳ Temps getAllPromise (parallèle)");

  // Lancement IMMÉDIAT en parallèle des deux Promises
  const usersPromise = getUsers();
  const commentsPromise = getComments();

  // Attente de la résolution des deux Promises en même temps
  const [users, comments] = await Promise.all([
    usersPromise,
    commentsPromise
  ]);

  // Affichage final (les deux sont disponibles)
  console.log("Utilisateurs (parallèle) :", users);
  console.log("Commentaires (parallèle) :", comments);

  console.timeEnd("⏳ Temps getAllPromise (parallèle)");
}

/* -------------------------------------------------------------------------- */
/*                      🔹 Lancement des deux tests 🔹                         */
/* -------------------------------------------------------------------------- */

getAll();          // Test en série
getAllPromise();   // Test en parallèle
