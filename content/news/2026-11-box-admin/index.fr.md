---
title: "Administrer sa box Calaos depuis le navigateur"
slug: "administration-de-la-box"
date: 2026-11-02
draft: true
summary: "La prochaine version de Calaos ajoute une page Admin à l'interface web : mises à jour, réseau, services, journaux, date et heure, sécurité et sauvegarde, sans ouvrir de terminal ; l'application mobile et l'écran Calaos Home s'y mettent aussi."
---

Jusqu'ici, régler la box elle-même (adresse réseau, mises à jour, redémarrage d'un service) demandait une connexion SSH. La prochaine version de Calaos met ces tâches courantes dans l'interface web, dans un nouvel onglet **Admin**, avec les mêmes couleurs et le même style que le reste de l'application.

L'onglet est protégé par un mot de passe d'administration. Une fois déverrouillé, il affiche un accueil avec une carte par sujet.

![L'accueil de l'administration : mises à jour, réseau, services, journaux, date et heure, accès MCP, sécurité, système et réglages.](/media/admin-hub-fr.webp)

## Mettre la box à jour

**À quoi ça sert.** Savoir si la box est à jour et installer les nouveautés sans passer par la ligne de commande.

1. Ouvrez **Admin**, puis **Mises à jour**.
2. Cliquez sur **Vérifier les mises à jour** : la liste des paquets à mettre à jour s'affiche, avec la version actuelle et la nouvelle.
3. Cliquez sur **Installer les mises à jour**. L'installation prend quelques minutes ; la box reste utilisable et l'application se reconnecte toute seule.

![La page Mises à jour : deux mises à jour disponibles, avec les versions avant et après.](/media/admin-updates-fr.webp)

## Changer la configuration réseau sans risque

**À quoi ça sert.** Passer en adresse fixe ou changer de passerelle est le réglage qui peut vous couper l'accès à la box. Ici, un changement est d'abord **essayé** : il ne reste que si vous le confirmez dans les deux minutes. Sinon, la box revient à l'ancien réglage.

1. Ouvrez **Admin**, puis **Réseau**.
2. Cliquez sur **Modifier** à côté de l'interface voulue, saisissez l'adresse, la passerelle et les DNS.
3. Cliquez sur **Appliquer…**, puis sur **Garder ces réglages** depuis la nouvelle adresse.

![La page Réseau : deux interfaces, avec adresse, passerelle, DNS et état de la connexion.](/media/admin-network-fr.webp)

## Gérer les services de la box

**À quoi ça sert.** La box fait tourner plusieurs programmes (serveur Calaos, écran tactile, Mosquitto, Zigbee2MQTT, InfluxDB, Grafana…). Vous pouvez voir lesquels sont actifs, en redémarrer un qui se comporte mal, ou choisir ceux qui démarrent avec la box.

1. Ouvrez **Admin**, puis **Services**.
2. Utilisez **Redémarrer**, **Arrêter** ou **Démarrer** sur la ligne du service.
3. Le bouton **Démarrer avec la box** décide de ce qui se lance au prochain démarrage.

![La page Services : état de chaque programme, démarrage automatique, redémarrage et arrêt.](/media/admin-services-fr.webp)

## Lire les journaux

La page **Journaux** affiche le journal de la box service par service (serveur Calaos, Mosquitto, Zigbee2MQTT, SSH, réseau…). Choisissez les sources et le niveau de détail, suivez les lignes en direct avec **Suivre**, ou téléchargez le résultat pour le joindre à une demande d'aide. C'est le premier endroit où regarder quand quelque chose ne marche pas.

## Régler la date et l'heure

**À quoi ça sert.** Les horaires des scénarios et l'écran tactile dépendent de l'horloge de la box. Elle doit être juste, et dans le bon fuseau.

1. Ouvrez **Admin**, puis **Date et heure**.
2. Vérifiez l'heure affichée et son état de synchronisation.
3. Choisissez le fuseau horaire dans la liste. Si besoin, désactivez la synchronisation automatique (NTP) pour régler l'heure à la main.

![La page Date et heure : horloge de la box, fuseau Europe/Paris, synchronisation automatique.](/media/admin-time-fr.webp)

## Protéger l'administration avec votre téléphone

**À quoi ça sert.** Les actions sensibles, comme changer le mot de passe admin, demandent de confirmer avec un code. Ce code s'affiche dans l'application Calaos des **téléphones approbateurs** que vous avez désignés. Une personne qui aurait seulement le mot de passe ne suffit donc pas.

1. Ouvrez **Admin**, puis **Sécurité**.
2. Cliquez sur **Ajouter un téléphone** et suivez les étapes sur le téléphone concerné.
3. Pour changer le mot de passe admin, cliquez sur **Changer** et saisissez le code reçu dans l'application.

![La page Sécurité : un téléphone approbateur déclaré et le changement du mot de passe admin.](/media/admin-security-fr.webp)

## Sauvegarder la configuration et régler Calaos

La page **Réglages** permet de télécharger un fichier de sauvegarde de la configuration de la box, de le restaurer (rien ne change avant que vous ne confirmiez), et de modifier quelques options de Calaos server, comme le niveau de journalisation.

![La page Réglages : télécharger ou restaurer une sauvegarde, options de journalisation.](/media/admin-settings-fr.webp)

## Valider avec un code sur votre téléphone

**À quoi ça sert.** C'est la double authentification de l'administration. Quand vous changez le mot de passe admin depuis le navigateur, la box ne se contente pas du mot de passe : elle demande un code affiché dans l'application Calaos de votre iPhone ou de votre téléphone Android. Le code n'apparaît jamais dans le texte de la notification et il expire au bout d'une minute.

1. Déclarez d'abord votre téléphone comme approbateur (section précédente).
2. Dans le navigateur, lancez l'action sensible, par exemple **Changer** le mot de passe admin.
3. Le téléphone reçoit une notification : ouvrez-la, l'application affiche le code et le temps restant.
4. Saisissez le code dans la console web avant la fin du compte à rebours. Ne le communiquez à personne.

Sur téléphone, la notification est celle du système, que nous ne pouvons pas reproduire sur ordinateur. La capture montre donc l'écran **Code admin** de l'application, tel que le rend la version de bureau, avec un code fictif.

![L'écran Code admin de l'application Calaos : un code à six chiffres, une barre de temps restant et un bouton Copier.](/media/mobile-admin-code-fr.webp)

## Les Réglages de l'application mobile

**À quoi ça sert.** L'application Calaos pour téléphone gagne un écran **Réglages** organisé en deux groupes. « Ce téléphone » : le nom et la langue de l'appareil, la connexion (session, certificats, déverrouillage par empreinte ou Face ID) et les favoris. « Box » : les mises à jour de la box et les derniers événements.

1. Ouvrez l'application, puis **Réglages**.
2. Touchez une carte pour ouvrir sa page.
3. Les cartes du groupe **Box** demandent le mot de passe d'administration, distinct de celui de votre compte, et une connexion sécurisée (https).

![L'écran Réglages de l'application : les cartes Appareil, Connexion et Favoris pour le téléphone, Box et Événements pour la box.](/media/mobile-settings-fr.webp)

## Mettre la box à jour depuis le téléphone

**À quoi ça sert.** Installer les mises à jour de la box sans ouvrir le navigateur, par exemple depuis le canapé. L'application affiche les versions disponibles avant et après, comme la page web.

1. Ouvrez **Réglages**, puis **Box**, et déverrouillez l'administration.
2. Touchez **Vérifier les mises à jour** si la liste n'est pas à jour.
3. Touchez **Tout mettre à jour**. L'installation prend quelques minutes ; la box reste utilisable et l'application peut perdre la connexion un instant avant de revenir d'elle-même.

Le même écran permet de redémarrer la box. La capture montre une box de démonstration.

![La page Box de l'application : deux mises à jour disponibles, les boutons Tout mettre à jour et Vérifier, et le redémarrage de la box.](/media/mobile-updates-fr.webp)

## Régler la date et l'heure sur l'écran Calaos Home

**À quoi ça sert.** Si votre box est pilotée par un écran tactile Calaos Home, vous pouvez y régler le fuseau horaire, l'heure automatique (NTP) ou une date et une heure à la main, sans clavier ni navigateur.

1. Sur l'écran, ouvrez le panneau de configuration, puis la tuile **Date et heure**.
2. **Modifier** change le fuseau horaire.
3. **Ne plus utiliser NTP** désactive l'heure automatique ; **Régler** permet alors de saisir la date et l'heure. Un réglage manuel désactive l'heure automatique.

![L'écran Date et heure de Calaos Home : horloge, fuseau Europe/Paris, heure automatique activée et bouton Régler.](/media/kiosk-time-fr.webp)

## Et aussi

- **Accès MCP** : l'adresse et le jeton qu'il faut donner à un assistant IA pour qu'il pilote la maison, avec un bouton pour régénérer le jeton.
- **Système** : une console et le redémarrage de la box.

## Disponibilité

Ces fonctions arrivent avec la prochaine version de Calaos ; elles ne sont pas encore publiées. Les nouveautés de l'application mobile et de l'écran Calaos Home sont déjà en développement ; leur date de sortie n'est pas fixée. Les captures montrent une maison de démonstration. Vos retours sont bienvenus sur le [Discord](https://discord.gg/FpBT9yhZxp).
