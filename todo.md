# TODO: Remaining Setup Tasks

## Code Changes

- [ ] **Replace `SITE_URL`** — search for `https://pocoptrade.com` across the entire codebase and replace with your real domain
  - Files to update: `src/app/layout.tsx`, `src/app/sitemap.ts`, `src/components/ArticleLayout.tsx`, and all `src/app/*/page.tsx` files
  - Quick way: VS Code → Ctrl+Shift+H → find `pocoptrade.com` → replace with your domain

- [ ] **Add `logo.png`** — place a `logo.png` file in `/public/` (used in Organization schema)

- [ ] **Add `og-image.jpg`** — place an OG image (1200×630px) in `/public/` (used in OpenGraph metadata)

- [ ] **Update Organization `sameAs`** in `src/app/layout.tsx` — add all official social/channel links (Telegram, YouTube, etc.)

- [ ] **Update support email** in `src/app/layout.tsx` Organization schema if different from `support@pocketoption.com`

---

## Yandex Webmaster

- [ ] **Add site to Yandex Webmaster** — go to https://webmaster.yandex.ru and add `https://[yourdomain].com`
- [ ] **Verify site ownership** — download the HTML verification file or add the meta tag to `src/app/layout.tsx`
- [ ] **Submit sitemap** — in Yandex Webmaster → Indexing → Sitemap files → add `https://[yourdomain].com/sitemap.xml`
- [ ] **Set region** — in Yandex Webmaster → Site information → Region → set to your target region (e.g. Russia)
- [ ] **Check indexing status** — after ~1–2 weeks verify pages are being crawled

---

## Google Search Console

- [ ] **Add site to Google Search Console** — go to https://search.google.com/search-console
- [ ] **Submit sitemap** — `https://[yourdomain].com/sitemap.xml`

---

## Hosting / DNS

- [ ] **Confirm HTTPS is active** on the live domain
- [ ] **Confirm www → non-www redirect** (or vice versa) is configured at the hosting level
- [ ] **Confirm HTTP → HTTPS redirect** is configured

---

## Content

- [ ] **Review all page titles and descriptions** — make sure they are unique and keyword-rich for every page
- [ ] **Check that all internal links work** after domain change
