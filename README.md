# Exercice de Programmation Orientée Objet : Le modèle MVC

## Etat initial

Il est possible de lister les randonnées(méthode `index` du contrôleur `HikingController`)

Il est possible récupérer une randonnée à partir de son `id` (méthode `find()` du modèle `Hiking`)

Il est possible récupérer toutes les randonnées (méthode `findAll()` du modèle `Hiking`)

Il est possible d'afficher la page d'édition d'une randonnée (méthode `edit` du contrôleur `HikingController`)


## Travail demandé

En tant qu'utilisateur je veux pouvoir modifier n'importe quelle champ d'une randonnée et que ce changement soit répercuté en base de données (méthode `save` du modèle)

En tant qu'utilisateur je veux pouvoir créer une nouvelle randonnée (méthodes `new` et `create` du contrôleur et `save` du modèle)

En tant qu'utilisateur je veux pouvoir faire une recherche de randonnée par nom dans une page dédiée et afficher les résultats

Vous êtes bien sur aussi libre de rajouter n'importe quelle fonctionnalité qui vous paraîtras pertinente :)

Et n'oubliez pas de penser aux bonnes pratiques de la POO, d'éviter les répétitions au maximum, d'organiser et encapsuler votre code, etc
