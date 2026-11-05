---
title: "Privacy"
url: "/en/privacy/"
description: "Privacy of calaos.fr: no cookie, what the Umami statistics measure, what happens when you show the comments, and who to contact."
---

This page describes the data the calaos.fr website handles when you visit it. It is published by Raoul Hecky, in his own name, for the Calaos project: see the [legal notice](/en/legal-notice/).

## Cookies

calaos.fr sets no cookie.

## Audience measurement

The site uses [Umami](https://umami.is), an analytics tool hosted by Umami Cloud. The script is loaded from `cloud.umami.is` as soon as a page opens, and it sends the measurements to `gateway.umami.is`, so both services receive your IP address, like any server your browser contacts.

- Umami's tracker does not use cookies (Umami documentation).
- Umami records page views, referrer addresses, browsers, operating systems, device types and an approximate location (Umami documentation). The script also sends the browser language, the screen size and the page title.
- The site tells the script not to send the part of the address after the `?` (query string).
- Measurement is off on preview copies of the site.

## News comments

News articles offer comments, provided by [giscus](https://giscus.app) and stored in the GitHub Discussions of the `calaos/www` repository. Nothing is loaded from these services until you click "Show comments".

- On click, your browser contacts `giscus.app` and GitHub: they receive your IP address and the address of the page.
- The site records that click in your browser's `sessionStorage` (key `comments-ok`). The value is erased at the latest when the tab is closed (unless the browser restores the session, which may keep it) and never leaves your browser.
- Commenting requires signing in with a GitHub account. After sign-in, giscus keeps an encrypted token in your browser's `localStorage` (key `giscus-session`) that keeps you signed in (giscus privacy policy). You can erase it by clearing the site data in your browser.
- When you come back from the GitHub sign-in, the page address carries the `?giscus=` parameter with that token. A link containing such a parameter can therefore start a giscus session in your browser; this is standard giscus behaviour.
- What you post as a comment is public on GitHub and subject to GitHub's terms.

## Your rights and contact

For any question about this data, or to exercise your rights over your personal data, write to [raoul-legal@calaos.fr](mailto:raoul-legal@calaos.fr). Data kept by Umami, giscus and GitHub is also covered by their own privacy policies.
