# :honeybee: Pokedex :turtle:

## :wrench: Refactorisation

### Objectifs 
Refactoriser un code procédural PHP en MVC en binôme.

### Contexte et problématique
Vous avez besoin de faire évoluer votre application de Pokédex pour la rendre plus facilement maintenable. 

Ce code est sous la forme procédurale. Il sera difficilement maintenable s’il reste dans cet état. Passons-le à un niveau supérieur.

### :construction_worker: Organisation

On travaillera en binômes/trinômes, sur Discord pour profiter du vocal et du partage d'écran. Vous pouvez utiliser VSCode et l'extension LiveShare pour travailler en pair-programming.

### :computer: Récupérer le code : 

Cliquer sur le bouton "Use this template" sur [la page d'accueil de ce repo](https://github.com/Ynov-fullstack-m1/S6-pokedex-refacto).

Dans le champ "Repository name", utiliser le préfixe `S6-pokedex-refacto` et ajouter votre nom d'utilisateur GitHub ou vos noms et prénoms. Par exemple : `S6-pokedex-refacto-gaetantrema`.
Laissez le repo en "privé" et cliquez sur Create Repository.

Il ne vous reste plus qu'à clôner ce nouveau repo pour travailler sur votre machine :tada:

### :rocket: Etapes

**Si vous n'avez pas d'environnement PHP opérationnel**

Sur windows : 

- Installer Wampserver pour avoir un serveur web local sur lequel travailler : https://sourceforge.net/projects/wampserver/files/WampServer%203/WampServer%203.0.0/wampserver3.3.0_x64.exe/download
- Lancez Wamp (en bas à droite, sur votre Windows), vous devriez voir une icône W verte.
- Allez sur : http://localhost/phpmyadmin
- Connectez vous avec l’identifiant “root” et password vide.
- Sur le menu horizontal en haut de la page, cliquez sur “importer” et déposez-y le fichier db.sql qui créera votre base de données avec vos pokémons. Vous pourrez administrer votre DB ici-même grâce à PHPMyAdmin.
- Allez dans C:/wamp ou wamp64, puis www. Déposez le dossier “pokemons”.
- Accédez à http://localhost/pokemons avec votre navigateur pour lancer le code PHP sur votre navigateur.
Ouvrez le dossier C:/wamp64/www/pokemons directement dans votre éditeur de code pour commencer à travailler !

Sur les autres machines :

- On voit au cas par cas, harcelez votre formateur au besoin !

**Réalisation**

- Créer le _Model_ Pokemon en PHP
    - Il doit contenir les mêmes informations que la table "pokemon"
    - Il doit être capable de récupérer toute la liste des Pokemon.
- Créer le _Controller_ PokemonController qui permet de manipuler ce modèle.
    - Récupérer les Pokemon
    - Les transmettre à la vue
- Créer la _View_ (ou plus précisément le _Template_)
    - Utiliser les données transmises par le contrôleur PokemonController pour afficher les Pokemon

### Besoin d'aide

Le formateur passera dans les binômes pour donner quelques coups de pouce. N'hésitez pas à le solliciter sur Discord ou sur Teams si plus de 15 min de blocage !

Un petit coup de main pour les moins habitués de PHP : https://antoine-diroberto.gitbook.io/php-mysql/php