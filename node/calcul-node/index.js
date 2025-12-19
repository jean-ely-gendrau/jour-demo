// index.js
const nombres = [1, 2, 3, 4, 5];

// Somme
const somme = nombres.reduce((acc, n) => acc + n, 0);
console.log("Somme:", somme);

// Moyenne
const moyenne = somme / nombres.length;
console.log("Moyenne:", moyenne);

// Filtrer > 3
const plusDeTrois = nombres.filter(n => n > 3);
console.log("Nombres > 3:", plusDeTrois);