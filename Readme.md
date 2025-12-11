# Jour-Demo

## Description

Ce projet te montre comment utiliser l'API Fetch en JavaScript pour récupérer des données depuis une API externe (JSONPlaceholder). Tu y découvriras deux approches différentes :

- **Exécution en série** : Les requêtes sont effectuées l'une après l'autre (plus lent)
- **Exécution en parallèle** : Les requêtes sont lancées simultanément avec `Promise.all` (plus rapide)

## Fonctionnalités

- Récupération des utilisateurs depuis l'API JSONPlaceholder
- Récupération des commentaires depuis l'API JSONPlaceholder
- Affichage des données dans la console et sur la page HTML
- Comparaison des performances entre exécution série et parallèle

##  Schéma : Exécution en série (getAll)

Dans ce mode, chaque requête attend que la précédente soit terminée avant de démarrer.

```mermaid
flowchart TD
    A[Début getAll] --> B[Appel getUsers]
    B --> C[Attente réponse...]
    C --> D[users récupérés]
    D --> E[Appel getComments]
    E --> F[Attente réponse...]
    F --> G[comments récupérés]
    G --> H[Affichage users + comments]
    H --> I[Fin]

    style A fill:#e1f5e1
    style I fill:#ffe1e1
    style C fill:#fff9e1
    style F fill:#fff9e1
```

## Schéma : Exécution en parallèle (getAllPromise)

Dans ce mode, les deux requêtes sont lancées en même temps, ce qui réduit le temps total d'exécution.

```mermaid
flowchart TD
    A[Début getAllPromise] --> B[Lancement simultané]
    B --> C[getUsers]
    B --> D[getComments]
    C --> E[Requête users...]
    D --> F[Requête comments...]
    E --> G[Promise.all]
    F --> G
    G --> H[Toutes les promesses résolues]
    H --> I[Affichage users + comments]
    I --> J[Fin]

    style A fill:#e1f5e1
    style J fill:#ffe1e1
    style B fill:#e1f0ff
    style G fill:#e1f0ff
```

## Technologies utilisées

- HTML5
- JavaScript (ES6+)
- API Fetch
- Promises & async/await
- JSONPlaceholder API