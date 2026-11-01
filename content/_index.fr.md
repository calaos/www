---
title: "Calaos, la domotique libre"
description: "Calaos est un système de domotique libre sous licence GPLv3, qui fonctionne en local : serveur, application mobile, interface web et écrans tactiles."
skip_to: comment

hero:
  title: "La domotique libre, **chez vous.**"
  lead: "Pilotez lumières, volets, chauffage, musique et caméras depuis votre mobile, un écran tactile ou un panneau mural. Tout reste dans la maison : pas de cloud, pas d’abonnement."
  image:
    src: media/hero.jpg
    alt: ""
    width: 1600
    height: 1067
  buttons:
    - label: "Démarrage"
      url: "https://doc.calaos.fr/fr/getting_started/"
      icon: arrow
    - label: "Découvrir"
      url: "#comment"
      icon: down
  trust:
    - icon: lock
      text: "100 % local"
    - icon: check
      text: "Sans abonnement"
    - icon: code
      text: "Logiciel libre GPLv3"
  photo_note: "Photo provisoire"

kiosk:
  image:
    src: media/kiosk-home.png
    alt: "Écran d’accueil de Calaos sur un écran tactile"
    width: 1024
    height: 768
  caption: "L’écran d’accueil Calaos sur un écran tactile."

how:
  id: "comment"
  eyebrow: "Comment ça marche"
  title: "Trois étapes, **une seule maison**."
  text: "Du matériel que vous avez déjà à une interface que toute la famille utilise."
  steps:
    - title: "Branchez votre matériel"
      text: "Calaos parle aux automates, aux bus et aux objets que vous avez déjà, sans passer par un service externe."
      note: "Wago, KNX, Philips Hue, MQTT, ESPHome…"
    - title: "Décrivez votre maison"
      text: "Avec Calaos Installer, vous créez pièces, appareils et scénarios une fois, puis vous les envoyez à la maison."
      note: "Calaos Installer, sur ordinateur"
    - title: "Pilotez tout, partout"
      text: "Le même réglage sur le mobile, le panneau mural, l’écran tactile et le navigateur."
      note: "Aussi par texte ou à la voix, via MCP"

daily:
  id: "quotidien"
  eyebrow: "Au quotidien"
  title: "Ce que vous **pilotez** déjà, simplement."
  rows:
    - title: "Lumières"
      icon: bulb
      text: "Allumez, variez, groupez : une pièce, un étage ou toute la maison."
      tags:
        - "Pièces"
        - "Groupes"
        - "Variation"
      photo:
        src: media/maison_5_2008082194-IMG_9340.jpg
        alt: ""
        width: 760
        height: 1140
      screen:
        src: media/mobile-home.png
        alt: "Calaos sur mobile"
        width: 390
        height: 844
    - title: "Chauffage"
      icon: thermo
      text: "Une consigne par pièce, des programmes horaires, la courbe de température."
      tags:
        - "Consignes"
        - "Programmes"
        - "Historique"
      photo:
        src: media/maison_4_20080819-IMG_9193.jpg
        alt: ""
        width: 760
        height: 507
      screen:
        src: media/mobile-sheet-thermostat.png
        alt: "Calaos sur mobile"
        width: 390
        height: 844
    - title: "Sécurité"
      icon: cam
      text: "Caméras en direct, détecteurs, alarme : les images restent chez vous."
      tags:
        - "Caméras"
        - "Alarme"
        - "Local"
      photo:
        src: media/maison_1_2008081460-IMG_8983.jpg
        alt: ""
        width: 760
        height: 507
      screen:
        src: media/mobile-rooms.png
        alt: "Calaos sur mobile"
        width: 390
        height: 844
  also:
    - title: "Volets"
      icon: blind
      text: "Montez, descendez, programmez à l’heure qui vous convient."
    - title: "Musique"
      icon: music
      text: "Une source par pièce, depuis votre serveur audio."
    - title: "Scénarios"
      icon: scene
      text: "Un bouton, plusieurs actions : « Bonne nuit », « Je pars »."
    - title: "Consommation"
      icon: bolt
      text: "Suivez vos mesures et gardez l’historique à la maison."
  note: "Photos d’ambiance."

interfaces:
  id: "interfaces"
  eyebrow: "Interfaces"
  title: "Une maison, **plusieurs façons** de la piloter."
  tabs:
    - label: "Mobile"
      text: "L’application mobile se connecte à votre serveur Calaos avec son adresse, votre identifiant et votre mot de passe. Elle donne accès aux pièces et à leurs équipements : lumières (variation et couleur), volets, prises, capteurs, régulation du climat. Vous lancez un scénario, regardez vos caméras et commandez les lecteurs audio. L’affichage suit en direct ce qui se passe dans la maison, et une notification push ouvre l’événement concerné. L’interface existe en français, en anglais et en allemand."
      image:
        src: media/mobile-sheet-thermostat.png
        alt: "Calaos sur mobile"
        width: 390
        height: 844
    - label: "Panneau mural"
      text: "Le panneau mural est un écran tactile fixé au mur, qui fonctionne avec un firmware Calaos sur ESP32-P4. Il se branche en Ethernet ou en Wi-Fi, trouve le serveur sur le réseau et s’y associe avec un code court. Le serveur lui envoie ses pages : interrupteurs de lumière, température, scénarios, volets, climat, horloge et écran de veille. Un modèle de 720 × 720 intègre aussi deux relais. Le firmware se met à jour depuis le serveur, avec retour à la version précédente en cas d’échec."
      image:
        src: media/rui-large-2x2.png
        alt: "Panneau mural"
        width: 720
        height: 720
    - label: "Écran tactile"
      text: "Calaos Home existe aussi en version plein écran, pour un écran tactile fixe qui fait tourner Calaos OS. Elle reprend les fonctions de l’application mobile : pièces, scénarios, caméras et lecteurs audio, avec un clavier virtuel à l’écran. Vous pouvez y poser des widgets déplaçables, comme une horloge, une note ou la météo. Le réseau, la langue et les mises à jour du système se règlent depuis l’écran lui-même."
      image:
        src: media/kiosk-home.png
        alt: "Écran tactile"
        width: 1024
        height: 768
    - label: "Navigateur"
      text: "L’interface web est servie par le serveur Calaos lui-même : il suffit d’ouvrir son adresse dans un navigateur, sans rien installer. Elle présente les pièces et leurs équipements, les scénarios, les caméras et les lecteurs audio. L’affichage se met à jour en direct, sans recharger la page."
      image:
        src: media/web-room-list.png
        alt: "Calaos dans un navigateur"
        width: 1280
        height: 900
  extras:
    - title: "Assistant, via MCP"
      icon: ai
      text: "« Éteins tout en bas et mets 19 degrés dans la chambre. » Un assistant IA branché sur votre maison."

compat:
  id: "compat"
  eyebrow: "Compatibilité"
  title: "Votre matériel, **tel quel**."
  text: "Quelques exemples parmi les protocoles et appareils pris en charge. La liste complète est dans la documentation."
  groups:
    - title: "Automates et bus"
      items:
        - "Wago Modbus"
        - "DALI"
        - "KNX"
        - "1-Wire"
        - "DMX"
    - title: "Sans fil et réseau"
      items:
        - "MQTT"
        - "ESPHome"
        - "Philips Hue"
    - title: "Caméras"
      items:
        - "Reolink"
        - "Axis"
        - "Foscam"
        - "Synology"
    - title: "Audio"
      items:
        - "Squeezebox / LMS"
        - "Roon"
        - "Denon"
        - "Onkyo"
        - "Yamaha"
    - title: "Énergie et mesure"
      items:
        - "InfluxDB"
    - title: "Aller plus loin"
      items:
        - "Scripts Lua"
        - "API locale"
        - "MCP"

why:
  id: "pourquoi"
  eyebrow: "Pourquoi Calaos"
  title: "Une maison qui vous **appartient**."
  items:
    - title: "Libre"
      icon: code
      text: "Code sous licence GPLv3 : vous pouvez le lire, le modifier, l’héberger."
    - title: "Local"
      icon: lock
      text: "Tout fonctionne sans internet. Vos données restent dans la maison."
    - title: "Durable"
      icon: home
      text: "Des protocoles standards et un matériel que vous choisissez : rien ne dépend d’un fabricant."
    - title: "Évolutif"
      icon: undo
      text: "Le projet est actif sur GitHub : versions publiques, correctifs, nouveautés."
    - title: "Une communauté"
      icon: people
      text: "Des utilisateurs et des contributeurs qui s’entraident sur Discord et GitHub."

start:
  id: "demarrer"
  eyebrow: "Démarrer"
  title: "Un mini PC, une clé USB, **un après-midi**."
  text: "Calaos tourne sur un mini PC x86_64. Vous préparez une clé, vous installez, vous décrivez votre maison."
  buttons:
    - label: "Télécharger Calaos OS"
      url: "https://calaos.fr/download/"
      icon: arrow
    - label: "Lire la documentation"
      url: "https://doc.calaos.fr"
  steps:
    - title: "Téléchargez l’image Calaos OS"
      text: "Une base Debian prête à l’emploi."
    - title: "Écrivez-la sur une clé USB"
      text: "Puis démarrez le mini PC dessus."
    - title: "Décrivez votre maison"
      text: "Avec Calaos Installer."
    - title: "Suivez la documentation"
      text: "doc.calaos.fr, pas à pas."

community:
  id: "communaute"
  eyebrow: "Communauté"
  title: "Un projet **ouvert**."
  cards:
    - title: "Discord"
      icon: discord
      text: "Posez vos questions, montrez votre installation."
      link:
        label: "Rejoindre le Discord"
        url: "https://discord.gg/FpBT9yhZxp"
    - title: "GitHub"
      icon: github
      text: "Code, tickets et contributions, ouverts à tous."
      link:
        label: "github.com/calaos"
        url: "https://github.com/calaos"

support:
  id: "don"
  title: "Soutenir Calaos"
  text: "Le projet a besoin de votre temps comme de votre argent. Il n’y a pas de montant minimum : vous donnez ce que vous souhaitez."
  time:
    title: "Donner du temps"
    items:
      - title: "Développeurs"
        text: "Contactez l’équipe pour connaître les tâches en cours et être guidé."
        link:
          label: "Écrire sur le Discord"
          url: "https://discord.gg/FpBT9yhZxp"
      - title: "Documentation"
        text: "Aidez à améliorer la documentation."
        link:
          label: "Ouvrir la documentation"
          url: "https://doc.calaos.fr"
      - title: "Traductions"
        text: "Traduisez les différents logiciels."
      - title: "Design"
        text: "Aidez pour le site et les interfaces."
      - title: "Retours"
        text: "Signalez un problème que vous avez rencontré."
        link:
          label: "Ouvrir un ticket"
          url: "https://github.com/calaos/calaos_base/issues"
  money:
    title: "Donner de l’argent"
    text: "Les dons servent à entretenir les serveurs et abonnements des services Calaos, à acheter du matériel pour le développement ou la prise en charge de nouveaux équipements, et à faire connaître le projet."
    paypal: "Don via PayPal"
    bitcoin: "Adresse Bitcoin"
---
