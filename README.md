# Système de Gestion de Sujets - Laravel

Ceci est une application web développée avec Laravel permettant aux **administrateurs** de créer, modifier et supprimer des sujets organisés par catégorie, tandis que les **utilisateurs** peuvent uniquement consulter ces sujets.

## Fonctionnalités

- Système d’authentification pour l’administrateur
- Tableau de bord administrateur :
  - Création de nouveaux sujets
  - Édition des sujets existants
  - Suppression des sujets
- Interface utilisateur publique :
  - Visualisation des sujets par catégorie
- Support pour le `nom`, `description`, `catégorie` et contenus multimédias (images, vidéos, audio)

---

## Technologies utilisées

- Laravel 10+
- MySQL
- Blade (moteur de templates Laravel)
- HTML/CSS (possibilité d’intégrer Bootstrap)

---

## Installation

1. **Cloner le dépôt**

```bash
git clone https://github.com/ton-utilisateur/laravel-gestion-sujets.git
cd laravel-gestion-sujets
