# Site web Mouvement de Réveil Méthodiste

Ce projet est une application web pour l'église Mouvement de Réveil Méthodiste. Ce document vous décriras comment le tester en ligne ou sur votre machine

Membres de l'équipe :
- THEA Guy Roger
- YAO Kossia Bénédicte
- N'DOLI Yasmeen
- KOUAO Amah Esther
- GODJAN Koutouan Lucien
- SANOGO Zoumana
- KUSI Appiah

## Tester le projet en ligne

Ouvrez un navigateur et entrez l'adresse suivante : [guymaster.tech:8000](guymaster.tech:8000)

## Tester le projet sur votre machine

### Préréquis
- Avoir git installé
- Avoir PHP et Laravel installé
- Avoir NodeJS installé

### 1 - Clonnez ce repository

Ouvrez un terminal et tapez :

```bash
git clone https://github.com/Doflamingo2054/monEglise.git
```

Ouvrez ensuite un terminal à la racine du projet pour les futures commandes.
### 2 - Configurez les variables d'environnement

A la racine du projet, créez un fichier `.env` et entrez-y le contenu du fichier `env.txt` reçu par mail.

### 3 - Installez les dépendances

Tapez la commande :

```bash
npm install
```

### 4 - Lancez le projet

Tapez la commande :

```bash
composer run dev
```

### 5 - Accédez à l'application

Ouvrez un navigateur et entrez l'adresse : [localhost:8000](localhost:8000)

## Identifiants de connexion

Le site dispose d'un système d'authentification avec 3 types d'accès :

- **Invité** : Les personnes n'ayant pas de compte. Elles peuvent consulter les informations
- **Membre** : Les personnes ayant un compte. Elles peuvent consulter les informations et ajouter du contenu communautaire (Ex: Prière)
- **Admin** : Les administrateurs de l'application. Ils peuvent consulter et modifier et supprimer les informations.

Voici quelques comptes que vous pouvez utiliser pour vos tests :

| Type de compte | Email              | Mot de passe |
| -------------- | ------------------ | ------------ |
| Membre         | member@example.com | member       |
| Admin          | admin@example.com  | admin        |
