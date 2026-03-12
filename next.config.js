/** @type {import('next').NextConfig} */

const EXTERNAL = {
  signup:   'https://po-fcm.com/ru/register/',
  lk:       'https://po-fcm.com/ru/register/',
  aff:      'https://cleveraff.com/',
  download: 'https://po-fcm.com/ru/register/',
  demo:     'https://po-fcm.com/ru/register/',
};

const nextConfig = {
  poweredByHeader: false,
  compress: true,
  reactStrictMode: true,
  images: {
    formats: ['image/avif', 'image/webp'],
    minimumCacheTTL: 86400,
  },
  async redirects() {
    return [
      { source: '/signup',   destination: EXTERNAL.signup,   permanent: false },
      { source: '/lk',      destination: EXTERNAL.lk,      permanent: false },
      { source: '/aff',     destination: EXTERNAL.aff,     permanent: false },
      { source: '/download', destination: EXTERNAL.download, permanent: false },
      { source: '/demo',    destination: EXTERNAL.demo,    permanent: false },
    ];
  },
  async headers() {
    return [
      {
        source: '/(.*)',
        headers: [
          {
            key: 'X-Content-Type-Options',
            value: 'nosniff',
          },
          {
            key: 'X-Frame-Options',
            value: 'DENY',
          },
          {
            key: 'X-XSS-Protection',
            value: '1; mode=block',
          },
          {
            key: 'Referrer-Policy',
            value: 'strict-origin-when-cross-origin',
          },
        ],
      },
    ];
  },
};

module.exports = nextConfig;
