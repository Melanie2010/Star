# Star

##Ce test technique a pour but d'afficher une étoile, dont sa taille est défini au préalable. 

Pour cela, il nous faudra donc réaliser une interface, où l'on va venir rentrer la taille de l'étoile que l'on souhaite. 
Pour ma part, ayant développer en PHP, il me faut créer la base de donnée suivante : 
![Capture](https://user-images.githubusercontent.com/65156750/125201392-401fb880-e26f-11eb-8ed7-a76b27c747df.PNG)

Elle permet de stocker la taille de l'étoile entrée, afin de s'en servir pour afficher par la suite l'étoile souhaitée. 

Si je rentre 0, comme taille de l'étoile, cela ne devra rien n'afficher. 

Explications concernant le lien entre le chiffre rentré (dans la taille de l'étoile), ainsi que son affichage : 

  Exemple : 
  - Si je rentre 1, les lignes d'étoiles parallèles (sur la 2ème et 4ème ligne) seront égales à (1 + 2)*2 donc 6. 
  Ainsi le reste des étoiles des autres lignes est égale à 1. 
  ![Capture](https://user-images.githubusercontent.com/65156750/125201606-2b8ff000-e270-11eb-8222-93e15e241715.PNG)
  
  - Si je rentre 5, les lignes d'étoiles parallèles seront égales à (5 + 2+2+2)*2 donc 22. 
  Ainsi le reste des étoiles des autres lignes est égale à 5. 
![0](https://user-images.githubusercontent.com/65156750/125201704-8b869680-e270-11eb-971c-09608777e687.PNG)
