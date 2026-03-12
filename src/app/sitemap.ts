import { MetadataRoute } from 'next';

const SITE_URL = 'https://pocoptrade.com';

const pages: Array<{ path: string; freq: MetadataRoute.Sitemap[number]['changeFrequency']; priority: number }> = [
  { path: '',                   freq: 'daily',   priority: 1.0 },
  { path: '/faq',               freq: 'weekly',  priority: 0.9 },
  { path: '/promo',             freq: 'weekly',  priority: 0.85 },
  { path: '/app',               freq: 'weekly',  priority: 0.85 },
  { path: '/cabinet',           freq: 'monthly', priority: 0.75 },
  // Article pages
  { path: '/registration',      freq: 'monthly', priority: 0.85 },
  { path: '/recovery-password', freq: 'monthly', priority: 0.75 },
  { path: '/verification',      freq: 'monthly', priority: 0.85 },
  { path: '/deposit',           freq: 'monthly', priority: 0.85 },
  { path: '/withdraw',          freq: 'monthly', priority: 0.85 },
  { path: '/withdrawal-fees',   freq: 'monthly', priority: 0.75 },
  { path: '/download-app',      freq: 'monthly', priority: 0.8  },
  { path: '/bonus',             freq: 'monthly', priority: 0.85 },
  { path: '/activate-promocode',freq: 'monthly', priority: 0.8  },
  { path: '/cashback',          freq: 'monthly', priority: 0.75 },
  { path: '/no-deposit-bonus',  freq: 'monthly', priority: 0.8  },
  { path: '/strategies',        freq: 'monthly', priority: 0.85 },
  { path: '/plus-trading',      freq: 'monthly', priority: 0.8  },
  { path: '/copy-trading',      freq: 'monthly', priority: 0.8  },
  { path: '/license',           freq: 'monthly', priority: 0.75 },
  { path: '/support',           freq: 'monthly', priority: 0.75 },
];

export default function sitemap(): MetadataRoute.Sitemap {
  const now = new Date('2026-03-12');
  return pages.map(({ path, freq, priority }) => ({
    url: `${SITE_URL}${path}`,
    lastModified: now,
    changeFrequency: freq,
    priority,
  }));
}
