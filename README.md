# MIAGE_L3_DEVOPS

- text is CC BY-NC-SA V4.0
- code is GNU GPL V3.0

## Installation des Prérequis (Vagrant, Virtualbox et Git)

### Prérequis Windows

Les Etapes suivantes expliquent comment installer ces prérequis avec Chocolatey.

1. installer [Chocolatey](https://chocolatey.org/)
2. Une fois chocolatey installé, ouvrir un nouveau powershell en administrateur et taper ```choco install vagrant virtualbox git -y```

### Prérequis Mac

1. installer Vagrant https://www.vagrantup.com/downloads.html
2. installer virtual box: https://www.virtualbox.org/wiki/Downloads

### Prérequis Linux

installer simplement Docker https://docs.docker.com/get-docker/

## lancement de la machine virtuelle

Pour lancer la machine virtuelle, cloner ce dépot en local, puis, à la racine du dépot, tapez la commande ```vagrant up```. L'opération peut durer jusqu'à une heure, en fonction de votre connection internet (plusieurs Go sont téléchargés).

**Attention**: la machine virtuelle va s'afficher, mais des programmes sont installés en arrière plan. N'essayez pas de vous connecter avant que les programmes soient installés (vagrant doit vous rendre la main dans votre terminal/powershell)

## Prise en main de la machine virtuelle

### Connection

Pour ouvrir la session de l'utilisateur `vagrant` dans la machine virtuelle, utilisez le mot de passe `vagrant`

### Fermer la session 

Pour fermer la session, allez dans le menu démarrer (en base à droite) > Leave > Shutdown

### relancer la machine virtuelle

retournez dans le dépot puis faire (ça devrait être beaucoup plus rapide la deuxième fois, car la machine est déjà crée)

```
vagrant up
```

### Reprendre tout de zero

rendez vous dans le dépot, puis faire
```
vagrant destroy -f
```
puis supprimer le répertoire caché .vagrant

