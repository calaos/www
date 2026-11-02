---
title: "Confidentialité"
url: "/fr/confidentialite/"
description: "Ce que calaos.fr mesure, ce qui se passe quand vous affichez les commentaires, et à qui vous adresser."
---

Cette page décrit les données que le site calaos.fr traite lorsque vous le visitez. Il est publié par Raoul Hecky, en son nom propre, pour le projet Calaos : voir les [mentions légales](/fr/mentions-legales/).

## Cookies

calaos.fr ne pose aucun cookie.

## Mesure d’audience

Le site utilise [Umami](https://umami.is), un outil de mesure d’audience hébergé par Umami Cloud. Le script est chargé depuis `cloud.umami.is` dès l’ouverture d’une page, et il envoie les mesures à `gateway.umami.is` : ces deux services reçoivent donc votre adresse IP, comme tout serveur que votre navigateur contacte.

- Le script d’Umami n’utilise pas de cookie (documentation d’Umami).
- Umami enregistre les pages vues, les adresses de provenance (référent), le navigateur, le système d’exploitation, le type d’appareil et une localisation approximative (documentation d’Umami). Le script envoie aussi la langue du navigateur, la taille de l’écran et le titre de la page.
- Le site demande au script de ne pas envoyer la partie de l’adresse qui suit le `?` (paramètres).
- La mesure est désactivée sur les copies de prévisualisation du site.

## Commentaires des actualités

Les articles d’actualité proposent des commentaires, fournis par [giscus](https://giscus.app) et stockés dans les Discussions GitHub du dépôt `calaos/www`. Rien n’est chargé depuis ces services tant que vous n’avez pas cliqué sur « Afficher les commentaires ».

- Au clic, votre navigateur contacte `giscus.app` et GitHub : ils reçoivent votre adresse IP et l’adresse de la page.
- Le site note ce clic dans le `sessionStorage` de votre navigateur (clé `comments-ok`). Cette valeur est effacée au plus tard à la fermeture de l’onglet (sauf restauration de session par le navigateur, qui peut la conserver) et ne quitte pas votre navigateur.
- Commenter demande de se connecter avec un compte GitHub. Après connexion, giscus conserve dans le `localStorage` de votre navigateur un jeton chiffré (clé `giscus-session`) qui vous garde connecté (politique de confidentialité de giscus). Vous pouvez l’effacer en vidant les données du site dans votre navigateur.
- Au retour de la connexion GitHub, l’adresse de la page contient le paramètre `?giscus=` avec ce jeton. Un lien contenant un tel paramètre peut donc ouvrir une session giscus dans votre navigateur ; c’est le comportement standard de giscus.
- Ce que vous publiez en commentaire est public sur GitHub et soumis aux conditions de GitHub.

## Vos droits et contact

Pour toute question sur ces données, ou pour exercer vos droits sur vos données personnelles, écrivez à [raoul-legal@calaos.fr](mailto:raoul-legal@calaos.fr). Les données conservées par Umami, giscus et GitHub relèvent aussi de leurs propres politiques de confidentialité.
