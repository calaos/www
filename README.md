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
| Contact address, Umami script and id, giscus comments | `config/_default/params.toml` |
| News articles | `content/news/` (see News below) |

In the content file, `**text**` highlights a part of a heading. Each section is a block in the front matter, in page order. Every block except `hero` and `kiosk` has an `id:` (required, the build fails without it): it is the anchor targeted by the menu, the hero button and `skip_to`, so changing it means updating those, and it is not translated lightly since links to the page depend on it. Blocks of a list (`rows`, `tabs`, `cards`, `items`…) can be added, removed or reordered freely.

Images go in `static/media/` and are referenced as `media/name.jpg`, with their size and, when they carry meaning, an `alt` text.

Each language has its own `content/_index.<lang>.md`, `i18n/<lang>.yaml` and `config/_default/menus.<lang>.toml`.

The template is in `layouts/`: `baseof.html` for the shell shared by every page, `_partials/` for the header, footer and home sections. A new section only needs `content/<section>/` and its layouts, which fill the `main` block with a `<main id="content">`; it gets an RSS feed automatically.

News
---

Articles are in `content/news/`, one folder per article with `index.fr.md` and `index.en.md` (same folder = translations of each other). Start one with `hugo new content news/2026-12-my-topic/index.fr.md`: set `title`, `slug` (the URL, `/fr/actualites/<slug>/`, `/en/news/<slug>/`), `summary` (list and RSS), then remove `draft: true` to publish. The list shows the newest first, 10 per page, and has its RSS feed.

Comments use [giscus](https://giscus.app) (GitHub Discussions) and stay off while any value of `[giscus]` in `config/_default/params.toml` is empty. To turn them on: enable Discussions on the GitHub repository, install the giscus app on it, choose an announcement-type category on giscus.app, and copy `repo`, `repoId`, `category` and `categoryId` from the snippet it shows. Each article is its own discussion (`fr/<folder>`, `en/<folder>`), so do not rename an article folder once it has comments. Nothing from giscus or GitHub loads before the visitor clicks « Afficher les commentaires », except on the way back from GitHub sign-in: the address then carries `?giscus=<session>`, and comments load at once so that giscus takes the token out of it (Umami is set to leave the query string out). That return path only applies in a tab where the button was clicked (`comments-ok` flag in sessionStorage); a `?giscus=` link alone shows the button as usual. Once signed in, giscus keeps `giscus-session` in the localStorage of calaos.fr. If the server sends a Content-Security-Policy, it must allow `https://giscus.app` in `script-src` and `frame-src`.

Build
---

    hugo --minify

The site is written to `public/`, which is not committed. CSS and JS come from `assets/` and are minified and fingerprinted at build time. Fonts and images are served as is from `static/`.

Every push and pull request to `master` runs this same build (`.github/workflows/build.yml`). It does not deploy.

Deploy
---

Deployment is manual only. Run the `Deploy` workflow (`.github/workflows/deploy.yml`) from the Actions tab, on `master`: the job is skipped on any other ref. That check only prevents a mistake; the boundary is the branch rule of the `deploy` environment (Settings, Environments, Deployment branches: `master` only, admin bypass off). It builds the site with `hugo --minify`, packs `public/` into a `tar.zst` archive and POSTs it (multipart, fields `key` and `file`) to the URL set in `DEPLOY_URL` at the top of the file. Nothing deploys on push or pull request.

The upload key is the secret `WWW_UPLOAD_KEY` of the `deploy` environment, which the job references. Any answer other than 2xx (redirects included, none is followed) fails the job; the answer body is not printed.
