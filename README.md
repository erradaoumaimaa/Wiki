<div align="center" id="top"> 
  <img src="./.github/app.gif" alt="Wiki" />

  &#xa0;


</div>

<h1 align="center">Wiki</h1>

## 🚀  Présentation du Projet

Le projet Wiki vise à créer une plateforme collaborative de gestion de contenu, inspirée de 'Wikipedia', pour faciliter la création, la recherche et le partage de connaissances. Notre mission consiste à concevoir et implémenter cette plateforme en utilisant les langages PHP, SQL, JS, HTML, ainsi que le framework CSS Tailwind.

## 🗂️ Conception du Projet

### Diagrammes UML

1. **Diagramme de Cas d'Utilisation Auteur:**

   - Illustrant les interactions entre les acteurs et le système, détaillant les fonctionnalités offertes.
   - ![USE CASE](./UML/images/use_case_Auteur.png)
2. **Diagramme de Cas d'Utilisation Admin:**

   - Illustrant les interactions entre les acteurs et le système, détaillant les fonctionnalités offertes.
   - ![USE CASE](./UML/images/use_case_Admin.png)
3. **Diagramme de Cas d'Utilisation Visiteur:**

   - Illustrant les interactions entre les acteurs et le système, détaillant les fonctionnalités offertes.
   - ![USE CASE](./UML/images/use_case_Visitor.png)


2. **Diagramme de Classes:**

   - Présentant les classes du système, leurs attributs et relations pour une vision structurée du code.
   - ![CLASS](./UML/images/d_classe.png)



## 💻 Technologies Utilisées

## Programming Languages

- ![PHP](https://img.shields.io/badge/PHP-5.2.1.x-blue?style=flat-square&logo=php)
- ![SQL](https://img.shields.io/badge/SQL-MySQL-blue?style=flat-square&logo=mysql)
- ![JavaScript](https://img.shields.io/badge/JavaScript-ES6-yellow?style=flat-square&logo=javascript)
- ![HTML](https://img.shields.io/badge/HTML-5-orange?style=flat-square&logo=html5)

## Framework

- ![CSS](https://img.shields.io/badge/CSS-Tailwind%20CSS-38B2AC?style=flat-square&logo=tailwindcss)


<hr>

## Project Links

- 🌐 **Jira:** [Project Planning](https://oumaimaerrada.atlassian.net/jira/software/projects/WP/boards/8/backlog)
- 📂 **GitHub Repository:** [Project Repository](https://www.canva.com/design/DAF2e8Jrg-8/Wh2in64tpoPV6sHFTUDAmQ/edit)
- 🔗 **Presentation:** [Project Presentation](https://www.canva.com/design/DAF2e8Jrg-8/Wh2in64tpoPV6sHFTUD)

## 📁 Structure du Projet

La conception de notre projet Wiki suit le modèle MVC (Modèle-Vue-Contrôleur) pour une organisation claire et modulaire du code source. Cette structure facilite la gestion, la maintenance et l'extension du projet. Voici un aperçu de la manière dont les différents composants sont répartis :

## Directory Hierarchy
```
|—— .htaccess
|—— app
|    |—— .htaccess
|    |—— bootstrap.php
|    |—— config
|        |—— config.php
|    |—— controllers
|        |—— Categories.php
|        |—— Tags.php
|        |—— Users.php
|        |—— Wikis.php
|    |—— helpers
|        |—— url_helper.php
|    |—— libraries
|        |—— Controller.php
|        |—— Core.php
|        |—— Database.php
|    |—— models
|        |—— Category.php
|        |—— Tag.php
|        |—— User.php
|        |—— Wiki.php
|    |—— views
|        |—— categories.php
|        |—— users
|            |—— dashboards
|                |—— admin.php
|                |—— user.php
|                |—— visitor.php
|            |—— index.php
|            |—— profile.php
|            |—— signup.php
|        |—— wikis
|            |—— addWiki.php
|            |—— details.php
|            |—— modifyWiki.php
|—— public
|    |—— .htaccess
|    |—— assets
|        |—— bg.png
|    |—— css
|        |—— style.css
|    |—— index.php
|    |—— js
|        |—— script.js
```
         

## 🛢️ Schéma de la Base de Données

Un schéma visuel de la base de données est fourni dans le dossier 'script sql'.


