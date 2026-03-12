# Pocket Option — Next.js Site

Russian-language informational site about Pocket Option, optimized for Yandex SEO. Built with Next.js 14 App Router, TypeScript, and CSS Modules.

## Requirements

- Node.js 18+
- npm

## Install

```bash
npm install
```

## Run locally

```bash
npm run dev
```

Open [http://localhost:3000](http://localhost:3000).

## Build for production

```bash
npm run build
npm run start
```

## Export static HTML

Add to `next.config.js`:

```js
output: 'export'
```

Then run:

```bash
npm run build
```

Static files will be in the `out/` directory — deploy to any static host (Nginx, Cloudflare Pages, etc.).

## Project structure

```
src/
  app/
    page.tsx                  # Homepage
    faq/page.tsx              # FAQ (links to article pages)
    promo/page.tsx            # Promo codes
    app/page.tsx              # Mobile app
    cabinet/page.tsx          # Personal cabinet
    registration/page.tsx
    recovery-password/page.tsx
    verification/page.tsx
    deposit/page.tsx
    withdraw/page.tsx
    withdrawal-fees/page.tsx
    download-app/page.tsx
    bonus/page.tsx
    activate-promocode/page.tsx
    cashback/page.tsx
    no-deposit-bonus/page.tsx
    strategies/page.tsx
    plus-trading/page.tsx
    copy-trading/page.tsx
    license/page.tsx
    support/page.tsx
    sitemap.ts                # Auto-generated sitemap
    robots.ts                 # robots.txt
  components/
    Header.tsx
    Footer.tsx
    ArticleLayout.tsx         # Shared two-column layout for article pages
```
