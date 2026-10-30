Calaos website
===

Source of [calaos.fr](https://calaos.fr), built with [Hugo](https://gohugo.io) extended 0.154.5 and a custom template. No theme, no Node.

Preview
---

With the dev container: open the repository in VS Code, reopen it in the container, then run

    hugo server --bind 0.0.0.0

and open <http://localhost:1313/fr/>. Port 1313 is forwarded.

With Docker only:

    docker run --rm -it -u "$(id -u):$(id -g)" -e HOME=/tmp -v "$PWD:/src" -w /src -p 1313:1313 \
      --entrypoint hugo hugomods/hugo:exts-0.154.5 server --bind 0.0.0.0

The Umami statistics script only loads in a production build, so previews are not counted.

Edit the content
---

Everything a visitor can read is outside the template. Edit one file and rebuild, no HTML involved.

| To change | Edit |
|---|---|
| A sentence, a card, a step, a list, an image of the home page | `content/_index.fr.md` (English: `content/_index.en.md`) |
| The menu and the footer links | `config/_default/menus.fr.toml`, `menus.en.toml` |
| Short interface labels (skip link, buttons, footer titles) | `i18n/fr.yaml`, `i18n/en.yaml` |
| PayPal link and Bitcoin address | `data/donate.yaml` |
| Contact address, Umami script and id | `config/_default/params.toml` |

In the content file, `**text**` highlights a part of a heading. Each section is a block in the front matter, in page order. Blocks of a list (`rows`, `tabs`, `cards`, `items`…) can be added, removed or reordered freely.

Images go in `static/media/` and are referenced as `media/name.jpg`, with their size and, when they carry meaning, an `alt` text.

Each language has its own `content/_index.<lang>.md`, `i18n/<lang>.yaml` and `config/_default/menus.<lang>.toml`.

The template is in `layouts/`: `baseof.html` for the shell shared by every page, `_partials/` for the header, footer and home sections. A new section only needs `content/<section>/` and its layouts, which fill the `main` block with a `<main id="content">`; it gets an RSS feed automatically.

Build
---

    hugo --minify

The site is written to `public/`, which is not committed. CSS and JS come from `assets/` and are minified and fingerprinted at build time. Fonts and images are served as is from `static/`.

Every push and pull request to `master` runs this same build (`.github/workflows/build.yml`). It does not deploy.
